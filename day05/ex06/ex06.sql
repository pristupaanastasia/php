SELECT title, summary
FROM film
WHERE  LOWER(film.summary ) LIKE "%Vincent%" 
ORDER BY id_film