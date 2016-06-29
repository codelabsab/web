
# Code Labs AB
Code Labs Webpage running in docker container

# Instructions

`git clone https://github.com/codelabsab/web.git`

place your cert.pem and privkey.pem inside src/cert/ directory

`mkdir src/cert`

Using Makefile:

`make` to build image  

`make run` to run in detach mode.

Go to https://localhost:443


# Alternative instructions

place your cert.pem and privkey.pem inside ./src/cert/ directory

docker run -d -p 443:443 -p 80:80 --name codelabs-web --volume $(pwd)/src/web/:/usr/share/nginx/html/ --volume $(pwd)/src/cert/:/etc/nginx/cert/ codelabsab/web
