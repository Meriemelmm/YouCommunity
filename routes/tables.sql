create database youcommunity;
use youcommunity;
SHOW TABLES;
SHOW TABLES LIKE 'users';
DESCRIBE users;
DROP TABLE IF EXISTS users;
SHOW TABLES LIKE 'sessions';
SHOW CREATE TABLE sessions;


DESCRIBE sessions;
SELECT table_name, engine FROM information_schema.tables WHERE table_name = 'sessions';






