.PHONY: cms-up cms-down migrate-samples

migrate-samples:
	vendor/bin/phinx migrate
	vendor/bin/phinx seed:run

cms-up:
	docker-compose up

cms-down:
	docker-compose down
