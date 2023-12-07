# Penultimate stable version of Debian
FROM debian:bullseye

# Standard port for https
EXPOSE 443


RUN	apt update && apt install -y --no-install-recommends --no-install-suggests \
	nginx \
	openssl && \
	rm -rf /var/lib/apt/lists/*
	
# Variables from env
ARG	CERT_FOLDER
ARG	CERTIFICATE
ARG	KEY
ARG	COUNTRY
ARG	STATE
ARG	LOCALITY
ARG	ORGANIZATION
ARG	UNIT
ARG	DOMAIN_NAME


RUN mkdir -p ${CERT_FOLDER} && \
	openssl req -newkey rsa:4096 -x509 -sha256 -nodes \
    -out ${CERTIFICATE} \
    -keyout ${KEY} \
    -subj "/C=${COUNTRY}/ST=${STATE}/L=${LOCALITY}/O=${ORGANIZATION}/OU=${UNIT}/CN=${DOMAIN_NAME}"

COPY	conf/nginx.conf	/etc/nginx/

# Substitute variables in NGINX configuration file for env variables
RUN	sed -i "s#{{CERTIFICATE}}#$CERTIFICATE#g" /etc/nginx/nginx.conf
RUN	sed -i "s#{{KEY}}#$KEY#g" /etc/nginx/nginx.conf
RUN	sed -i "s#{{DOMAIN_NAME}}#$DOMAIN_NAME#g" /etc/nginx/nginx.conf

RUN	mkdir -p /var/www/
RUN	chown -R www-data:www-data /var/www/

CMD		["nginx", "-g", "daemon off;"]

