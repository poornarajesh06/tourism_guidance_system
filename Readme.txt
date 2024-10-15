Tourism Management System

This project aims to create an application as a guide for tourists to visit the tourist sites that do not require a special visit to any financial fee, which enables the tourist to obtain important information about the places he wants to visit easily, even if not connected to the Internet.


Databsase Creation steps

1. Open Xampp control panel and start Apache and MySQL

2. open command prompt and set the path
   2.1. C:\Users\poorna>cd\
   2.2. C:\>cd\xampp
   2.3. C:\xampp>cd mysql
   2.4. C:\xampp\mysql>cd bin
   2.5. C:\xampp\mysql\bin>mysql -h localhost -u root

3. Create database with name  tourism_website and use tourism_website

4. create table bookings ( id int auto_increment primary key, destination varchar(255), number_of_people int, arrival_date date, leaving_date date, details text );

5. If we are submitted the booking details in the website we can get the details by going to the command prompt and type the syntax
     select * from bookings; 



Process to be followed for using the project code

1. Download the zip file and extract the files in xampp/htdocs folder. 

2. Start apache and MySQL in the xampp control pannel.

3. Open the website using the url " http://localhost/folder_name/ ".

4. Fill the booking details, you will get the booking sucessfull message.

5. Go to command prompt and use the database tourism_website

6. If we are submitted the booking details then go to the command prompt and type the syntax
     select * from bookings;  

7. You can see the bookings table with the details you have filled.
