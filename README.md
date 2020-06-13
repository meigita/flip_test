# flip_test


1) Save file in HTDOCS
C:\xampp\htdocs\flip_test

Import database to mysql
1. Use Command Prompt (run as administrator)
- cd..
- cd..
- cd xampp/mysql/bin
- mysql -u root -p
- [enter] (if you do not have any password)
- create database disburse
- use disburse
- source c:\xampp\htdocs\flip_test\disburse.sql

2. Import using phpmyadmin tool

How to Run APP
1) Using browser 
- Run Disbursement.php to POST data and insert into local db
- Run CheckDisbursementStatus.php using browser to GET data and update data in local db

2) Powershell phpmyadmin
- Open Powershell phpmyadmin
> # php -q htdocs\flip_test\Disbursement.php
> # php -q htdocs\flip_test\CheckDisbursementStatus.php
