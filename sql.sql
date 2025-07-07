select count(*) from employees where genre = "M" group by 
create or replace view v_empl_departe  as
select e.emp_no,e.birth_date,e.first_name,e.last_name,e.gender,de.dept_no,de.dept_name from employees e 
join dept_emp d on e. emp_no = d. emp_no 
join departments de on d.dept_no = de.dept_no;

create or replace view v_salaire_empl as 
select  d.dept_name,d.dept_no  ,e.emp_no, s.salary, s.from_date,  s.to_date  from dept_emp e 
join departments d on e.dept_no = d.dept_no
join salaries s on s.emp_no = e.emp_no ; 

create or replace view v_isa_homme as
select count(*) isa_home,dept_no from v_empl_departe where gender = "M" group by dept_no;

create or replace view v_isa_femme as 
select count(*) isa_femme,dept_no from v_empl_departe where gender = "F" group by dept_no;

create or replace view v_isa_femme_homme as
select f.isa_femme,h.isa_home,h.dept_no from v_isa_femme f
 join v_isa_homme h on f.dept_no = h.dept_no ;

select avg(salary) ,dept_no from v_salaire_empl group by dept_no;

create or replace view v_moyen_age_emploi as
select avg(datediff(to_date,from_date))/365 moyen,de.dept_no,d.dept_name from dept_emp de 
join departments d on  de.dept_no = d.dept_no group by dept_no; 