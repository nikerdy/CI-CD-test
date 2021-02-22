FROM nginx:latest
COPY test /
COPY default.conf /etc/nginx/conf.d/default.conf
