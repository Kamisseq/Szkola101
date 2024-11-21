SELECT nazwa, opis, poczatek
FROM wycieczki
JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id