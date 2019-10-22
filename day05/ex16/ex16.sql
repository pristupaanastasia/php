SELECT COUNT(*) as 'movies' from `member` as m 
WHERE (DATE(m.date_last_film) BETWEEN '2006-10-30' AND '2007-07-27') OR (MONTH(m.date_last_film)=12 AND DAYOFMONTH(m.date_last_film)=24);