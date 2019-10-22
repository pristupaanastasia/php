SELECT title, summary
FROM film
WHERE  LOWER(film.summary ) LIKE "%42%" OR  LOWER(film.title ) LIKE "%42%" 
ORDER BY duration;