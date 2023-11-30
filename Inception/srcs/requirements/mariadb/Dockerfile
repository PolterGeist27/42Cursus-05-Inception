# Penultimate stable version of Debian
FROM debian:bullseye

EXPOSE 3306

RUN	apt update \
	&& apt install -y --no-install-recommends --no-install-suggests \
	mariadb-server \
	&& rm -rf /var/lib/apt/lists/*


