-- – Zapytanie 1: wybierające jedynie niepowtarzające się wartości z pola wpis dla zadań z pierwszych 7 dni lipca roku 2020 (od 1 do 7 lipca) oraz takich, gdzie pole wpis nie jest puste

SELECT DISTINCT wpis
FROM zadania
WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07'
    AND WPIS IS NOT NULL
    AND WPIS != '';



-- – Zapytanie 2: wybierające jedynie pola dataZadania i wpis dla zadań z miesiąca lipca

SELECT dataZadania, wpis
from zadania
WHERE miesiac = 'lipiec';

-- – Zapytanie 3: wybierające jedynie pole miesiac i wpis dla wpisów zaczynających się na literę „S”

SELECT miesiac, wpis
FROM zadania
WHERE wpis LIKE 'S%';

-- – Zapytanie 4: aktualizujące pole wpis dla zadania w dniu 2020-07-18, nowy wpis to „Wycieczka nad morze”

UPDATE zadania
SET wpis = 'Wycieczka nad morze'
WHERE dataZadania = '20-07-18';


