[![Build Status](https://travis-ci.org/kamigerami/codelabs.svg?branch=master)](https://travis-ci.org/kamigerami/codelabs)


# Code Labs AB
Code Labs Webpage running in docker container

# Instructions

`git clone https://github.com/codelabsab/web.git`

place your cert.pem and privkey.pem inside src/cert/ directory

`mkdir src/cert`

Using Makefile:

`make` to to build image and `make start` to run in detach mode.

Go to https://localhost:443
