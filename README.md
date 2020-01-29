# mysqltest
There seems to be a difference between `PDO::exec` and `PDO::query` when having `PDO::ATTR_PERSISTENT = true`. 
When using `PDO::exec` connections will not be reused and in the end resulting in a 
"to many connections" error by MySQL as they do not seem to be closed (or reused). 
## How to test:
- docker-compose up
- Open http://localhost/mysqltest.php and refresh 10 times
- You will now get a "to many connections" error
- If you use `PDO::query` instead (comment line 12 and uncomment line 15) and restart your docker container you do not get this issue
