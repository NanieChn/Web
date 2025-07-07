select count(*) from employees where genre = "M" group by 
create or replace view v_empl_departe  as
select e.emp_no,e.birth_date,e.first_name,e.last_name,e.gender,de.dept_no,de.dept_name from employees e 
join dept_emp d on e. emp_no = d. emp_no 
join departments de on d.dept_no = de.dept_no;

create or replace view v_empl_tittle as
select s.salary,s.from_date daty1,s.to_date daty2,t.emp_no,t.title,t.from_date,t.to_date,es.birth_date,es.first_name,es.last_name,es.gender,es.hire_date from employees es 
join titles t on t.emp_no = es.emp_no
join salaries s on s.emp_no = t.emp_no;


create or replace view v_salaire_empl as 
select s.emp_no,s.salary,s.from_date,s.to_date,es.birth_date,es.first_name,es.last_name,es.gender,es.hire_date from employees es 
join salaries s on s.emp_no = es.emp_no;



create or replace view v_isa_homme as
select count(*) isa_home,title from v_empl_tittle where gender = "M" group by title;

create or replace view v_isa_femme as 
select count(*) isa_femme,title from v_empl_tittle where gender = "F" group by title;

create or replace view v_isa_femme_homme as
select f.isa_femme,h.isa_home,h.title from v_isa_femme f
 join v_isa_homme h on f.title = h.title ;

select avg(salary) ,dept_no from v_salaire_empl group by dept_no;

create or replace view v_moyen_age_emploi as
select avg(datediff(to_date,from_date))/365 moyen,de.dept_no,d.dept_name from dept_emp de 
join departments d on  de.dept_no = d.dept_no group by dept_no; 