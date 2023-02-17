FROM centos:centos7
RUN  yum -y update && yum -y install httpd && yum -y install php
COPY files/index.php /var/www/html/index.php
COPY files/homepage.php /var/www/html/homepage.php
COPY files/logout.php /var/www/html/logout.php
EXPOSE 80
ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]	
