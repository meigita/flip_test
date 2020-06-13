# flip_test

Import database to mysql
1. Use Coammand Prompt (as administrator)
- cd..
- cd..
- cd xampp/mysql/bin
- mysql -u root -p
- [enter] (if you do not have any password)
- create database disburse
- use disburse
- source c:\xampp\htdocs\flip_test\disburse.sql

How to Run APP

1) Save file in HTDOCS
C:\xampp\htdocs\flip_test

2) Run Disbursement.php using browser to POST data and insert into local db
3) Run CheckDisbursementStatus.php using browser to GET data and update data in local db

Or you can run it trough Powershell phpmyadmin

1) Save file in HTDOCS
C:\xampp\htdocs\flip_test

2) Open Powershell phpmyadmin
> # php -q htdocs\flip_test\Disbursement.php
> # php -q htdocs\flip_test\CheckDisbursementStatus.php

