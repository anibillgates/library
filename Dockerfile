FROM php:8.1
WORKDIR /app
COPY . .
RUN yarn install --production
CMD ["php", "src/index.js"]
EXPOSE 8080