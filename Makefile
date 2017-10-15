include env_make
NS = codelabsab
VERSION ?= latest

REPO = web
NAME = codelabs

.PHONY: build push shell run start stop restart rm release

build:
	docker build -t $(NS)/$(REPO):$(VERSION) .

push:
	docker push $(NS)/$(REPO):$(VERSION)

shell:
	docker run --rm --name $(NAME)-$(REPO) -i -t $(PORTS) $(VOLUMES) $(NS)/$(REPO):$(VERSION) sh

run:
	docker run -d --name $(NAME)-$(REPO) $(PORTS) $(VOLUMES) $(NS)/$(REPO):$(VERSION)

start:
	docker start $(NAME)-$(REPO)

stop:
	docker stop $(NAME)-$(REPO)

restart:
	docker restart $(NAME)-$(REPO)

rm:
	docker rm $(NAME)-$(REPO)

release: build
	make push -e VERSION=$(VERSION)

default: run
