-- use this to filter rows that exactly fits the condition
-- Inner JOIN sample
SELECT t_employee.employee_id, t_employee.first_name, t_project.project_id, t_project.project_name
FROM t_employee
INNER JOIN t_project
ON t_employee.employee_id=t_project.employee_id;

-- use this to retrieve rows that fits the condition + all rows from the "left table" in this case "t_employee"
-- Left JOIN sample
SELECT t_employee.employee_id, t_employee.first_name, t_employee.address, t_employee.contact_number, t_project.project_name
FROM t_employee
LEFT JOIN t_project
ON t_employee.employee_id=t_project.employee_id;

-- use this to retrieve rows that fits the condition + all rows from the "right table" in this case "t_project"
-- Right JOIN sample
SELECT t_project.project_id, t_project.project_name, t_employee.employee_id, t_employee.first_name, t_employee.address, t_employee.contact_number
FROM t_employee
RIGHT JOIN t_project
ON t_employee.employee_id=t_project.employee_id;

-- use this to retrieve all rows from both table
-- Full JOIN mysql emulation
SELECT t_project.project_id, t_project.project_name, t_employee.employee_id, t_employee.email
FROM t_employee
LEFT JOIN t_project ON t_employee.employee_id=t_project.employee_id
UNION
SELECT t_project.project_id, t_project.project_name, t_employee.employee_id, t_employee.email
FROM t_employee
RIGHT JOIN t_project ON t_employee.employee_id=t_project.employee_id;
