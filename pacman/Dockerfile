FROM php:7.4-apache

COPY files /tmp/files/

COPY src /var/www/html/

RUN chown -R root:root /var/www/html/ && \
    chmod -R 755 /var/www/html && \
    mv /tmp/files/flag.sh / && \
    mv /tmp/files/start.sh / && \
    mv /tmp/files/rot47 /usr/bin/rot47 && \
    chmod +x /flag.sh /start.sh /usr/bin/rot47 && \
    rm -rf /tmp/files && \
    rm -rf /var/lib/apt/lists/*

CMD /start.sh