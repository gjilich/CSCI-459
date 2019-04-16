pushd mysql
docker build -t application .
popd

docker run --rm --name sample-database -d application

sleep 15

docker exec -i sample-database mysql -uroot -pcsci459 < mysql/createdata.sql

docker exec -i sample-database mysql -ucsci459 -pcsci459 < mysql/createdata.sql

pushd apache-php
docker build -t sample-webserver .
popd

docker run --rm --name web-php --link sample-database:mysql -p 8080:80 -d sample-webserver