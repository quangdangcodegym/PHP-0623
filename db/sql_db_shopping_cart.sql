CREATE TABLE `php_shopping`.`order_details` (
  `product_id` BIGINT NOT NULL,
  `order_id` BIGINT NOT NULL,
  PRIMARY KEY (`product_id`, `order_id`));
  
  select *
from products
where category_id = 2;
  
select *
from products
where description IS  null;

-- toán từ like: % đại diện cho 0, 1 hoặc nhiều kí tự Còn _ đại diện cho 1 kí tự
SELECT * 
FROM php_db_shopping.products
WHERE name like '___sung%';


select p.*, c.id, c.name
from products p join categories c on p.category_id = c.id;

-- Phân biệt: join / left join / right join
select *
from  categories c left join products p on p.category_id = c.id;

-- group by/ having
select p.category_id, count(p.category_id) as soluong, sum(price) as tong
from products p
where description is not null
group by p.category_id
having tong >= 300000;

-- Phân biệt: count(*) và count(cột)
SELECT * FROM php_db_shopping.products;


