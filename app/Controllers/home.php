<?php

namespace App\Controllers;
use App\Models\Homemodel;

class Home extends BaseController
{
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
        //$this->db      = \Config\Database::connect();
        $this->session->start();
        $this->model = new Homemodel();
    } 
    function index()
    {
        return view('index');
    }
    function login()
    {
        //$session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $table_name  = "users";
        $where_condition = array('user_name' => $username);

        $data = $this->model->fetchData($table_name,$where_condition);
        if($data){
            $pass = $data->user_password;
            if($password == $pass){
                $ses_data = [
                    'user_id'       => $data->users_pid,
                    'user_name'       => $data->user_name,
                    'user_type'      => $data->user_type,
                    'name'      => $data->name,
                    'logged_in'     => TRUE
                ];
               
                $this->session->set($ses_data);
                $this->session->setFlashdata('msg', 'Login Successfully');
                return redirect()->to(site_url('dashboard'));
            }else{
                $this->session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(site_url('/'));
            }
        }else{
            $this->session->setFlashdata('msg', 'username not Found');
            return redirect()->to(site_url('/'));
        } 
    }

    function add_book()
    {
        // return view('add_book');
        $data['header_name'] = "Add Book";
        $data['menu_active'] = "add_book";
        
        return view('add_book',$data);
    }

    function list_of_books()
    {
        // return view('add_book');
        $data['header_name'] = "Personal List of Books";
        $data['menu_active'] = "list_of_books";
        
        return view('list_of_books',$data);
    }

    function list_of_other_user_books_list()
    {
        // return view('add_book');
        $data['header_name'] = "Other user Books list";
        $data['menu_active'] = "list_of_books";
        
        return view('list_of_other_user_books_list',$data);
    }

    function insert_book()
    {
        // print_r($_POST);exit;

        $img = $this->request->getFile('book_cover_image');
        $file_name = date('Ymd_Hms_') . $img->getName();
        $file = "";

        if (!is_dir('././uploads/book_cover')) {
            mkdir('././uploads/book_cover', 0777, TRUE);
        }
        if (isset($img) && $img != '') {
            $file =  $file_name;
            $fileupload = $img->move(ROOTPATH . '/uploads/book_cover/', $file_name);
        }

        $img_1 = $this->request->getFile('book_file');
        $book_file = date('Ymd_Hms_') . $img_1->getName();
        $file_1 = "";

        if (!is_dir('././uploads/book_file')) {
            mkdir('././uploads/book_file', 0777, TRUE);
        }
        if (isset($img_1) && $img_1 != '') {
            $file_1 =  $book_file;
            $fileupload1 = $img_1->move(ROOTPATH . '/uploads/book_file/', $book_file);
        }


        $table_name  = "boks_list";

        $table_fields = array(
            'book_publisher_name'  => $this->request->getPost('book_publisher_name'),
            'book_isbn_number' => $this->request->getPost('book_isbn_number'),
            'book_title' => $this->request->getPost('book_title'),
            'book_author_name' => $this->request->getPost('book_author_name'),
            'book_uploaded_user' => $this->request->getPost('book_uploaded_user'),
            'book_uploaded_date' => date('Y-m-d H:m:s'),
            'book_discription'    => $this->request->getPost('book_discription'),
            'book_file'    => $file_1,
            'book_cover_image'    => $file
            
        );

        //  echo '<pre>';print_r($table_fields);exit;
        $this->model->InsertData($table_name, $table_fields);
        $this->session->setFlashdata("success_msg", "added Successfully");
        return redirect()->to(BASE . '/dashboard');

    }


    function dashboard()
    {
        $user_name  = $this->session->get('user_name');

        if(!empty($user_name)){

            $data['header_name'] = "Dashboard";
            $data['menu_active'] = "dashbaord";
            $input_val = '';

            $data['result'] = $this->model->fetchData_book_list($input_val);
            // print_r($data['result']);exit;
            
            return view('dashboard',$data);
        } else {
            return redirect()->to(site_url('/'));
        }
    }

    function common_delete()
    {
        $id          = $this->request->getPost('id');
        $table_name  = $this->request->getPost('table_name');
        $column_name = $this->request->getPost('delete_status');
        $column_pid  = $this->request->getPost('column_pid');
        $fields = array(
            $column_name => 'In Active'
        );
        $where_condition = array($column_pid => $id);
        $result = $this->model->UpdateData($fields, $table_name, $where_condition);
        echo $result;
    }

    function table_list_of_books(){

        $arrayList   = [];
        $postData       = $this->request->getPost();
        $no              = $this->request->getPost('start');
        $type = $this->request->getPost('type_book');
        $user_id = $this->session->get('user_id');

        $book_list    = $this->model->table_list_of_books($type, $user_id);

        foreach ($book_list as $row) {
            $action = '';
            if($this->session->get('user_id') == $row->book_uploaded_user){
                $action = '<i  class="bx bx-trash-alt delete_data" id="' . $row->book_pid . '->boks_list->book_is_delete->list_of_books->book_pid" aria-hidden="true" style="color:red;cursor:pointer;font-size:18px;"></i>';
            }

            $action .= '&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;<a href = "' . base_url('/uploads/book_file/') . $row->book_file . '" download style="color:blue;cursor:pointer;font-size:18px;" ><i  class="lni lni-cloud-download" aria-hidden="true"</i></a>';
           
            $no++;
            $arrayList[] = [
                $no,
                $row->book_publisher_name,
                $row->book_isbn_number,
                $row->book_title,
                $row->book_author_name,
                $action
            ];
        }
        $output = array(
            "draw"     => $this->request->getPost('draw'),
            "recordsTotal"   => $this->model->table_list_of_books_countAll($type, $user_id),
            "recordsFiltered" => $this->model->table_list_of_books_countFiltered($type, $user_id),
            "data"     => $arrayList,
        );
        echo json_encode($output);
    }

    function book_search_data()
    {
        $input_val = $this->request->getPost('input_val');
        $where = array();

        $result = $this->model->fetchData_book_list($input_val);
        // print_r($result);exit;
        $i = 0;
        $note_list ='';
        $start_rack = '<div class="bookshelf">
                            <div class="covers">';

        foreach($result as $val){

            if($i % 3 == 0 && $i != 0)
            {
            
                $start_rack = '</div> 
                            
                        </div> <br>
                            <br><br><br><br> 
                            <div class="bookshelf">
                            <div class="covers">';
            }
            $note_list .= $start_rack ;
            $note_list .= ' 
                                <div class="thumb book-1">	
                                    <a href="./uploads/book_file/'.$val->book_file.'">
                                    <img src="images/book2/1.jpg">
                                    </a>
                                    <label>Publisher : '.$val->book_publisher_name.'<br>Title : '.$val->book_title.'<br>ISBN : '.$val->book_isbn_number.'</label>
                                </div>
                                ';
                                
            $start_rack = '';
            $i++; 
        }

        $note_list .= '</div> 
                            
        </div> ';

        echo json_encode($note_list);


        
        

    }



    function logout()
    {
        $session = session();
        $this->session->destroy();
        return redirect()->to(site_url('/'));
    }
}