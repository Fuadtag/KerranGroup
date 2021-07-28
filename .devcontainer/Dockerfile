FROM centos:latest

RUN yum update -y
RUN yum install -y git
RUN dnf install -y https://dl.fedoraproject.org/pub/epel/epel-release-latest-8.noarch.rpm
RUN dnf install -y https://rpms.remirepo.net/enterprise/remi-release-8.rpm
RUN dnf module -y enable php:remi-7.4
RUN dnf install -y php php-cli php-common php-json php-zip wget unzip php-pdo php-mysqlnd
