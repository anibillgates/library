<?php namespace App\Models;
use CodeIgniter\Model;

class Homemodel  extends Model
{
    //protected $table = 'employee_personal';
    //protected $allowedFields = ['employee_id','emp_pass','emp_name','emp_dept'];

    function fetchData($table_name,$where_condition)
    {
        return $this->db->table($table_name)->select('*')->where($where_condition)->get()->getrow();
    }

    function fetchData_all($table_name,$where_condition)
    {
        return $this->db->table($table_name)->select('*')->where($where_condition)->get()->getResult();
        // $this->db->last_query();
    }

    function fetchData_book_list($search_val)
    {
        // print_r($search_val);exit;
        if($search_val != ''){
            $where_condition = '(book_author_name LIKE"%'.$search_val.'%" OR book_title LIKE "%'.$search_val.'%" OR book_isbn_number LIKE "%'.$search_val.'%" OR book_publisher_name LIKE"%'.$search_val.'%")';
            // print_r($where_condition);exit;
            return $this->db->table('boks_list')
            ->select('*')
            ->where($where_condition)
            ->where('book_is_delete', 'Active')
            ->get()
            ->getResult();
        }else{
            return $this->db->table('boks_list')
            ->select('*')
            ->where('book_is_delete', 'Active')
            ->get()
            ->getResult();
        }
        
        // $this->db->last_query();
    }

    function InsertData($table_name,$table_fields)
    {
        $this->db->table($table_name)->insert($table_fields);
        return $this->db->insertID();
    }
    

    function UpdateData($fields, $table_name, $where_condition)
    {
        return $this->db->table($table_name)->where($where_condition)->set($fields)->update();
    }
    function getAllData($table_name,$where_condition)
    {
        return $this->db->table($table_name)->select('*')->where($where_condition)->get()->getrow();
    }

    function fetch_all_data($table_name, $where_condition)
    {
        return $this->db->table($table_name)->select('*')->where($where_condition)->get()->getResult();
    }

    function fetch_all_data_interest($table_name, $where_condition, $orderby)
    {
       return $this->db->table($table_name)->select('*')->where($where_condition)->orderBy($orderby[0],"DESC")->get()->getrow(); 
    }
    
    
    public function table_list_of_books($type, $user_id)
    {
        $this->table_list_of_books_query($type, $user_id);
        if ($_POST['length'] != -1) {
            $this->builder->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->builder->get();
        return $query->getResult();
    }
    public function table_list_of_books_countAll($type, $user_id)
    {      
        $this->table_list_of_books_query($type, $user_id);
        $query = $this->builder->get();
        // return $this->builder->countAllResults();
        return $query->getNumRows();
    }
    public function table_list_of_books_countFiltered($type, $user_id)
    {
        $this->table_list_of_books_query($type, $user_id);
        $query = $this->builder->get();
        // return $this->builder->countAll();
        return count($query->getResult());
    }
    private function table_list_of_books_query($type, $user_id)
    {
        // print_r($user_id);exit;
        $column_order = array();
        $column_search = array('book_title','book_isbn_number','book_publisher_name');
        $order     = array('');
        if($type == 'list_of_other_user_books_list'){
            $where = array('T1.book_uploaded_user !=' => $user_id);
        }else{
            $where = array('T1.book_uploaded_user'=> $user_id);
        }
        $this->builder = $this->db->table("boks_list as T1")
        ->select('*')
        ->where($where)
        ->where('T1.book_is_delete', 'Active');
        
        
        $i = 0;
        // $postData       = $this->request->getPost();
        // loop searchable columns 
        foreach ($column_search as $item) {
            // if datatable send POST for search
            if ($_POST['search']['value']) {
                // first loop
                if ($i === 0) {
                    // open bracket
                    $this->builder->groupStart();
                    $this->builder->like($item, $_POST['search']['value']);
                } else {
                    $this->builder->orLike($item, $_POST['search']['value']);
                }

                // last loop
                if (count($column_search) - 1 == $i) {
                    // close bracket
                    $this->builder->groupEnd();
                }
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->builder->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($order)) {
            $order = $order;
            $this->builder->orderBy(key($order), $order[key($order)]);
        }
    }



}
