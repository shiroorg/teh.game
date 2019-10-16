SET sql_mode = '';

SELECT Department.`name`
FROM `users` as Users
JOIN (SELECT * FROM `user_department`) as UserDepartment ON UserDepartment.`user_id` = Users.`id`
JOIN (SELECT * FROM `department`) as Department ON Department.`id` = UserDepartment.`department_id`
GROUP BY UserDepartment.`department_id`
HAVING count(UserDepartment.`department_id`) > 3