

docker run -it --name doctrine-sandbox -e MYSQL_ROOT_PASSWORD=password -v doctrine-sandbox:/var/lib/mysql:cached  -p 3306:3306 -d mysql:8.0

mysql -u root -p --host 127.0.0.1
