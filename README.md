# User Word Vocabulary
+ This vocabulary is for students who want to save and see words that they didn't know before. I think It helps you to save and see your words. I also needed some saving word program like this. So I made this program by myself.
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

+http://[raspberrypi IP adress]/phpmyadmin
+initial username(ID): phpmyadmin

8. Grant phpmyadmin database
> sudo mysql
> GRANT ALL PRIVILEGES ON *.* TO 'phpmyadmin'@'localhost';

 
