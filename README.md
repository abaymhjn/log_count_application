# Service Log Task

## Summary
- Framework Version Symfony 6

## How to Run Project
- Checkout from Git Repo
- Import Database log_count_application.sql in Mysql
- Run composer update in project folder  
- Run command php bin/console app:insert-service-log to insert log manually in database
- To get count of log entries API end point is http://localhost:8000/count  
- Below is example to get count with filter
e.g. http://localhost:8000/count?serviceNames[]=USER-SERVICE&serviceNames[]=INVOICE-SERVICE&startDate=2021-08-17&endDate=2021-08-20&statusCode=201