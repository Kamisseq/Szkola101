SELECT haslo
FROM uzytkownicy
WHERE login = 'Justyna';

SELECT COUNT(*) as ilosc
from dane;

SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie
FROM uzytkownicy
JOIN dane ON uzytkownicy.id = dane.id
WHERE uzytkownicy.login = 'Justyna';