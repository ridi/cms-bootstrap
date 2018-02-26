.PHONY: install cms-up cms-db cms-down

install:
	git submodule init
	git submodule update
	make -C cms install
	composer install

run:
	php -S 127.0.0.1:8080 -t web

cms-up:
	make -C cms up

cms-db:
	make -C cms db-migrate

cms-down:
	make -C cms down

cms-log:
	make -C cms log
