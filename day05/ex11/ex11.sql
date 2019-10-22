SELECT UPPER(U.`last_name`) AS "NAME", U.`first_name`, S.`price`
FROM user_card AS U
INNER JOIN `member` AS M
ON U.id_user = M.id_user_card
INNER JOIN subscription AS S
ON S.id_sub = M.id_sub
WHERE
S.`price` >42
ORDER BY last_name,first_name;