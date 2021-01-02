SELECT * FROM t_employee;

SELECT * FROM t_project;

-- Inner JOIN sample
SELECT t_employee.employee_id, t_employee.first_name, t_project.project_id, t_project.project_name
FROM t_employee
INNER JOIN t_project
ON t_employee.employee_id=t_project.employee_id;

-- Left JOIN sample
SELECT t_employee.employee_id, t_employee.first_name, t_employee.address, t_employee.contact_number, t_project.project_name
FROM t_employee
LEFT JOIN t_project
ON t_employee.employee_id=t_project.employee_id;

-- Right JOIN sample
SELECT t_project.project_id, t_project.project_name, t_employee.employee_id, t_employee.first_name, t_employee.address, t_employee.contact_number
FROM t_employee
RIGHT JOIN t_project
ON t_employee.employee_id=t_project.employee_id;

-- Full JOIN sample
SELECT t_project.project_id, t_project.project_name, t_employee.employee_id, t_employee.first_name, t_employee.address, t_employee.contact_number
FROM t_employee
RIGHT JOIN t_project
ON t_employee.employee_id=t_project.employee_id;
