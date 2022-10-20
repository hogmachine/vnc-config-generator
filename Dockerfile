FROM ubuntu:20.04
RUN apt update
RUN DEBIAN_FRONTEND=noninteractive TZ=Europe/Moscow apt-get -y install tzdata
RUN apt install -y python2 apache2 php
COPY d3des/ /var/www/html/d3des
ADD index.php /var/www/html/index.php
ADD makevnc.sh /var/www/html/makevnc.sh
ADD pwd.sh /var/www/html/pwd.sh
ADD style1.css /var/www/html/style1.css
ADD vncgen.php /var/www/html/vncgen.php
ADD vncpasswd.py /var/www/html/vncpasswd.py
ADD startup.sh /root/startup.sh
RUN rm -rf /var/lib/apt/lists/*
RUN apt-get clean
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 777 /var/www/html
RUN chmod 777 /root/startup.sh
RUN /usr/bin/rm /var/www/html/index.html
CMD ["/bin/bash","-c","/root/startup.sh && tail -f /dev/null"]	
EXPOSE 80
