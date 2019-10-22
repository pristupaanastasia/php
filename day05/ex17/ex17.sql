SELECT COUNT(*)  as 'nb_susc', ROUND(avg(price)) 'Av_susc', SUM(MOD(duration_sub, 42)) as 'ft'
from `subscription`