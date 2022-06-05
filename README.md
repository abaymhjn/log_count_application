# Service Log Task

## Summary

- Symfony 6.1 installation using composer
- Doctrine and Migration Packages installed using composer
- Database used is Mysql. database settings are in .env file
- Used doctrine migration to create tables service_log to save logs and log_file_offset to save last successful log line number
- Run Command php bin/console app:insert-service-log to insert log manually in database
- 