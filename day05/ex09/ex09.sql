SELECT COUNT(*) AS 'nb_short-films'
from
    (SELECT duration
    FROM film
    WHERE   duration < 43
    ORDER BY duration) as T;