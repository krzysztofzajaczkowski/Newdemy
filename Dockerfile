FROM prestashop/prestashop:1.7.6.5
COPY src .
RUN mkdir ssl
COPY ./docker/ssl/000-default.conf /ssl/000-default.conf
COPY ssl.sh .
EXPOSE 80
EXPOSE 443
CMD ["bash", "ssl.sh"]
