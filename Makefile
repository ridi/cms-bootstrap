.PHONY: build cms admin

build: cms admin

cms:
	cd cms && docker build -t my-cms .

admin:
	cd web && docker build -t my-cms-admin .