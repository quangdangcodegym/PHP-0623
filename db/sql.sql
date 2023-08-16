CREATE TABLE `products` (
  `id` BIGINT NOT NULL  ,
  `name` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `price` DOUBLE NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) VISIBLE);

INSERT INTO `php_shopping`.`categories` (`id`, `name`, `create_at`) VALUES ('1', 'Phone', '2023-10-20');

alter table products
add check (price > 100000);
