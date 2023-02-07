FROM mysql:5.7.18
ENV MYSQL_DATABASE: "web_level_sqli"
ENV MYSQL_USER: "web_level_sqli"
ENV MYSQL_PASSWORD: "okn30k1dk1313"
ENV MYSQL_ROOT_PASSWORD: "root"
ENV MYSQL_ALLOW_EMPTY_PASSWORD: "yes"
ADD setup.sql /docker-entrypoint-initdb.d/setup.sql
ADD my.cnf /etc/mysql/conf.d/my.cnf
RUN useradd -ms /bin/bash "y0u_r34lly_th1nk_y0u_4re_g3n1us"

