SELECT DISTINCT REVERSE(RIGHT(phone_number ,8)) as 'rebmunenohp'
FROM distrib 
where phone_number LIKE "05%";