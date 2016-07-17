
# Code Labs AB
Code Labs Webpage running in docker container

# Instructions

`git clone https://github.com/codelabsab/web.git`

place your cert files (.pem) inside any directory

export these environment variables to your shell.

`
export SRCDIR=$(pwd)/src/web/
export CERTDIR=/etc/pki/tls/certs/codelabs.se/
`

`docker run -d -p 443:443 -p 80:80 --name codelabs-web --volume $SRCDIR:/usr/share/nginx/html/ --volume $CERTDIR:/etc/nginx/cert/ codelabsab/web`

or use docker-compose

`docker-compose up -d`
