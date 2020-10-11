sandbox for debugging, around Doctrine & phpstan-doctrine


-----

```sh
docker run -it --name doctrine-sandbox -e MYSQL_ROOT_PASSWORD=password -v doctrine-sandbox:/var/lib/mysql:cached  -p 3306:3306 -d mysql:8.0
```

```sh
mysql -u root -p --host 127.0.0.1
```

```sql
create database doctrine_sandbox;
```

```shell
./vendor/bin/doctrine orm:schema-tool:create
```

