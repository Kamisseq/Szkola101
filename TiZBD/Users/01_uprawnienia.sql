-- 1. Utwórz użytkowników jeden i dwa (bez hasła).
    CREATE USER jeden;
    CREATE USER dwa;
--  A. Nadaj uprawnienia wprowadzania, zmiany i usuwania danych w całej bazie komis dla użytkownika jeden
    GRANT INSERT, UPDATE, DELETE, SELECT ON Uprawienia.* TO jeden;
-- B. nadaj wszystkie uprawnienia do tabeli Auta użytkownikowi dwa
    GRANT ALL PRIVILEGES ON Uprawienia.Auta TO dwa;
-- C. odbierz użytkownikowi jeden prawa usuwania danych 
    REVOKE SELECT ON Uprawnienia.* FROM jeden;
-- D. odbierz wszystkie uprawnienia użytkownikowi dwa do tabeli Auta
    REVOKE ALL PRIVILEGES ON Uprawnienia.Auta FROM 'dwa';
-- 2. 
-- A. Zaloguj się jako użytkownik jeden i ustaw hasło 'zaq1@WSX'
    exit
    mysql -u jeden
    SET PASSWORD =password('1234');
-- B. Ustaw hasło dla użytkownika dwa na 'zaq1@WSX'
    SET PASSWORD FOR dwa =password('1234');
-- C. z poziomu konta root zmień hasło dla użytkownika jeden na 'haslo'
