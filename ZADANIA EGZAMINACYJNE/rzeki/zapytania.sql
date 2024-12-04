SELECT nazwa,  stanOstrzegawczy, stanAlarmowy, stanWody
from wodowskazy
JOIN pomiary ON wodowskazy_ID = wodowskazy.id
WHERE dataPomiaru = '2022-05-05';

SELECT nazwa, stanOstrzegawczy, stanAlarmowy, stanWody
from wodowskazy
JOIN pomiary ON wodowskazy_ID = wodowskazy.id
WHERE dataPomiaru = '2022-05-05' AND stanWody > stanOstrzegawczy;

SELECT dataPomiaru, AVG(stanWody) as Srednistanwody
from pomiary
group by dataPomiaru;











SELECT nazwa, stanOstrzegawczy, stanAlarmowy, stanWody
from wodowskazy
JOIN pomiary ON wodowskazy_ID = wodowskazy.id
WHERE dataPomiaru = '2022-05-05' AND stanWody > stanAlarmowy;