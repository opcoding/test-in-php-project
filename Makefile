.DEFAULT_GOAL := help
.SILENT :

## Display this help dialog
help:
	echo "This Makefile help you using yout local development environment."
	echo "Usage: make <action>"
	awk '/^[a-zA-Z\-\_0-9]+:/ { \
		helpMessage = match(lastLine, /^## (.*)/); \
		if (helpMessage) { \
			helpCommand = substr($$1, 0, index($$1, ":")); \
			helpMessage = substr(lastLine, RSTART + 3, RLENGTH); \
			printf "\t${GREEN}%-20s${NC} %s\n", helpCommand, helpMessage; \
		} \
	} \
	{ lastLine = $$0 }' $(MAKEFILE_LIST)
.PHONY: help

## Start Selenium with Chrome driver
start-selenium:
	docker-compose up -d selenium
.PHONY: start-selenium

## Run tests
run-acceptance-tests:
	make start-selenium
	docker-compose run --rm codeception
	docker-compose down
.PHONY: run-acceptance-tests
