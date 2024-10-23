-- 1. Utwórz użytkowników: dev1 z hasłem 1234 oraz read1, write1 bez hasła  (dev2, read2, write2)
CREATE USER 'dev' IDENTIFIED BY '1234';
CREATE USER 'read';
CREATE USER 'write';


-- 2. Zmodyfikuj ustawienia kont:

-- A. hasło dla użytkownika dev powinno wygasnąć za miesiąc
-- B. zablokuj konto read
-- C. ustaw hasło dla konta write
-- D. użytkownik write powinien mieć prawo tylko do 100 operacji UPDATE na godzinę
-- E. odblokuj konto read

ALTER USER 'dev' PASSWORD EXPIRE INTERVAL 30 DAY;

ALTER USER 'read' ACCOUNT LOCK;

ALTER USER 'write' IDENTIFIED BY '123';

ALTER USER 'write' WITH MAX_UPDATES_PER_HOUR 100;

ALTER USER 'read' ACCOUNT UNLOCK;



-- 3.Określ uprawnienia:

-- A. Nadaj wszystkie prawa dla użytkownika dev dla wszystkich tabel w bazie crm
-- B. Daj prawo użytkownikowi write do modyfikowania struktury tabel w bazie crm
-- C. daj prawo użytkownikowi read do przeglądania oraz usuwania danych w tabeli customers w bazie crm

GRANT ALL PRIVILEGES ON crm.* TO 'dev';
GRANT ALTER ON crm.* TO 'write';
GRANT SELECT, DELETE ON crm.customers TO 'read';

-- 4. Odbierz użytkownikowi read prawo do przeglądania danych w tabeli customers
REVOKE SELECT ON crm.customers FROM 'read';


-- 5. Zmień nazwę użytkownika dev na admin
RENAME USER 'dev' TO 'admin';


-- 6. Ustaw hasło użytkownikowi read '1234' (użyj set password)
SET PASSWORD FOR 'read' = PASSWORD('1234');

-- 7. Sprawdź uprawnienia:

-- A. użytkownika admin
-- B. użytkownika write
SHOW GRANTS FOR 'admin';
SHOW GRANTS FOR 'write';

-- 8. Utwórz role write_customers oraz read_customers
CREATE ROLE 'write_customers';
CREATE ROLE 'read_customers';

-- 9. Nadaj uprawnienia rolom:

-- A. write_customers prawa do wstawiania oraz modyfikowania wybranych rekordów
-- B. read_customers z prawem do przeglądania tabeli customers
GRANT INSERT, UPDATE, SELECT ON crm.customers TO 'write_customers';
GRANT SELECT ON crm.customers TO 'read_customers';

-- 10. Przypisz role użytkownikom:

-- write_customers dla write
-- read_customers dla read
GRANT 'write_customers' TO 'write';
GRANT 'read_customers' TO 'read';

-- 11. Sprawdź uprawnienia:

-- użytkownika write
-- użytkownika read (czy ma prawo do usuwania danych?)
-- roli write_customers;
-- roli read_customers

-- 12. Zaloguj się jako read i sprawdź uprawnienia.

-- czy użytkownik read ma prawo do przeglądania danych?
-- jeśli jest taka potrzeba użyj SET ROLE aby "włączyć" rolę
-- czy użytkownik read ma prawo do usunięcia klienta o id 1

-- 13. Z poziomu root ustaw jako domyślną rolę write_customers dla użytkownika write  (SET DEFAULT ROLE)

-- 14. Zaloguj się jako write i sprawdź, czy możesz zmienić nazwisko klienta o id=2 na Tree 

-- 15. Usuń

-- A. rolę write_customers
-- B. Usuń użytkownika read