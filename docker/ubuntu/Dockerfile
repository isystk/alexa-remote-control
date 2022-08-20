FROM ubuntu:20.04

ENV LANG=ja_JP.UTF-8
ENV TZ=Asia/Tokyo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y apache2 \
    php7.4 libapache2-mod-php7.4 php7.4-mysql \
    php-common php7.4-cli php7.4-common php7.4-json \
    php7.4-opcache php7.4-readline \
    curl jq oathtool

# Configure apache for App
RUN a2enmod rewrite expires
RUN echo "ServerName localhost" | tee /etc/apache2/conf-available/servername.conf
RUN a2enconf servername
# Configure vhost for App
COPY app.conf /etc/apache2/sites-available/
RUN a2dissite 000-default
RUN a2ensite app.conf

EXPOSE 80 443

WORKDIR /var/www/html

HEALTHCHECK --interval=5s --timeout=3s --retries=3 CMD curl -f http://localhost || exit 1

CMD apachectl -D FOREGROUND 
