FROM centos:centos7   
RUN  yum -y update && yum -y install httpd && yum -y install php
COPY files /var/www/html/
EXPOSE 80
ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]