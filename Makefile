up:
	docker-compose up -d
stop:
	docker-compose stop
restart:
	docker-compose down
	docker-compose up -d
down:
	docker-compose down
destroy:
	docker-compose down --rmi all --volumes
ps:
	docker-compose ps
app:
	docker-compose exec php bash