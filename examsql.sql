SELECT name, date_hired
FROM employee
WHERE YEAR(date_hired) LIKE '2018%';