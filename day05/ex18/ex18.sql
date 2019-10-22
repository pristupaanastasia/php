SELECT id_distrib
from `distrib`
where id_distrib=42 or id_distrib=71 or id_distrib=88 or id_distrib=89 or id_distrib=90 or id_distrib>=62 and id_distrib<=69 or LOWER(name) LIKE '%y%y%'
LIMIT 3,5