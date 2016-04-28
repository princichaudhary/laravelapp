# laravelapp
Please follow all these mentioned steps.

1- Run below command through command line in root project directory 
       Composer install  

2- Create database  

3- Change .env.example to .env . if .env file is not available on project root directory , Then run below command       
       php artisan key:generate  

4- Database settings in .env file and config/database.php  

5- Now  run below command to migrate the tables 
        php artisan migrate 

6- Register user from user interface . There is a register link .

7- For second user run seed through below command  
        php artisan db:seed
