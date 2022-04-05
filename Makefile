include .env

THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: up start down stop

up:
#	cp .env.dist .env
	@echo "Starting up containers for $(PROJECT_NAME)..."
	docker-compose pull
	docker-compose up -d --remove-orphans

down: stop
# 	rm .env

start:
	@echo "Starting containers for $(PROJECT_NAME) from where you left off..."
	docker-compose start

stop:
	@echo "Stopping containers for $(PROJECT_NAME)..."
	docker-compose stop