FROM debian:bullseye

RUN apt-get update \
	&& apt-get install -y nginx \
	&& apt-get clean \
	&& rm -rf /var/lib/apt/lists/*
	
COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 80
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
