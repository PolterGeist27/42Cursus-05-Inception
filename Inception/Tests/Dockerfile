FROM debian:bullseye

RUN apt-get update \
	&& apt-get install -y nginx \
	&& apt-get clean \
	&& rm -rf /var/lib/apt/lists/*
	
COPY nginx.conf /etc/nginx/nginx.conf
COPY diogmart.42.fr.crt /etc/nginx/diogmart.42.fr.crt
COPY diogmart.42.fr.key /etc/nginx/diogmart.42.fr.key
COPY index.html /var/www/html/index.html

EXPOSE 80
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
