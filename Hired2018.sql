SELECT name, date_hired
FROM examsql.employee
WHERE YEAR(date_hired) Like '2018%';