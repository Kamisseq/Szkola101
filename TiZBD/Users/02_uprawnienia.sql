CREATE USER 'u1'@'localhost' IDENTIFIED BY 'abcd';

CREATE DATABASE b;
USE b;

GRANT INSERT, DELETE, UPDATE ON b.samochody TO 'u1'@'localhost';

REVOKE DELETE ON b.samochody FROM 'u1'@'localhost';

CREATE ROLE 'r1';
GRANT SELECT ON b.* TO 'r1';

GRANT 'r1' TO 'u1'@'localhost';

mysql -u u1 -p

SHOW GRANTS;

SELECT * FROM b.zamowienia;

SET ROLE 'r1';

SELECT * FROM b.zamowienia;

DELETE FROM b.zamowienia WHERE id = 3;

GRANT DELETE ON b.zamowienia TO 'r1';

SHOW GRANTS;

DELETE FROM b.zamowienia WHERE id = 2;

REVOKE 'r1' FROM 'u1'@'localhost';
DROP ROLE 'r1';

DROP USER 'u1'@'localhost';