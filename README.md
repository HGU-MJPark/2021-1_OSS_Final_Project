# User Word Vocabulary
+ This vocabulary is for students who want to save and see words that they didn't know before. It provides some functions like add words and show words that user put. I think It helps you to save and see your words. I also needed some saving word program like this. So I made this program by myself.
# Setting program
There are some basic steps for you to start this program.
1. Package upgrade
> sudo apt update
> sudo apt upgrade
2. Install Apache2
> sudo apt install apache2
3. Install PHP
> sudo apt install php php-fpm php-curl php-gd php-intl php-mbstring php-mysql php-soap php-xml php-xmlrpc php-zip libapache2-mod-php
4. Install MariaDB 
> sudo apt install mariadb-server
5. Initial setting of MariaDB
> sudo mysql_secure_installation
> Enter->y->type password twice->y four times
6. Access MariaDB & make database
> sudo mysql -u root -p
> CREATE DATABASE testDB DEFAULT CHARACTER SET utf8;
> CREATE USER 'NEW USER ID'@'localhost' IDENTIFIED BY 'PASSWORD';
> GRANT ALL PRIVILEGES ON testDB.* TO 'NEW USER ID'@'localhost';
> quit
7. Install phpMyAdmin
> sudo apt install phpmyadmin
> sudo ln -s /usr/share/phpmyadmin /var/www/html

+ http://[raspberrypi IP address]/phpmyadmin
+ initial username(ID): phpmyadmin

8. Grant phpmyadmin database
> sudo mysql
> GRANT ALL PRIVILEGES ON *.* TO 'phpmyadmin'@'localhost';

# How to use this program
## for admin
1. Make a table. Make sure that table name is "table_word".
2. Add table structures
> word(varchar(20)), meaning(varchar(20))
3. Clone this repository in your /var/www/html/ directory.
4. You can access Web browser "http://[RASPBERRY IP ADDRESS]/userword.php"

## for user
1. Access Web browser "http://[RASPBERRY IP ADDRESS]/userword.php
2. Click 'Add word' menu. then, put word and meaning. And click 'save' button.
3. Clock 'Print book' menu. You can see the lists you put before.
4. Also you can move 'home' page by clicking 'Home' menu.
5. finally, I added some links for you to find words through the links. There are 'google and naver links'.
 
# The advantages of UserWordVocabulary
+ __It is easily accessible to anyone.__
+ __The database can be used to store information.__
+ __Administrators can manage databases.__

# Things to Improvements of UserWordVocabylary
1. By creating a login function, each user must be able to save their own data.
2. I think that a function that users can modify and delete datas should be added.

# My contribution to this project

## 1. Building a Web Server
I built a Web Server using Apache2
## 2. Making DataBase
I made DataBase using mySQL
## 3. Making Web page(.php)
I used html $ css & Bootstrap4. 

Link: [Bootstrap][bootstraplink]

[bootstraplink]: https://www.w3schools.com/bootstrap4/default.asp "Go bootstrap"

# Inquiry
21900269@handong.edu

# Video






