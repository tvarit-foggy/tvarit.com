build:
	docker build -t tvarit/tvarit.com .

deploy:
	docker tag tvarit/tvarit.com 250373516626.dkr.ecr.eu-west-1.amazonaws.com/tvarit.com:latest
	$(aws ecr get-login --no-include-email)
	docker push 250373516626.dkr.ecr.eu-west-1.amazonaws.com/tvarit.com:latest

run:
	docker run -p 8081:80 tvarit/tvarit.com
