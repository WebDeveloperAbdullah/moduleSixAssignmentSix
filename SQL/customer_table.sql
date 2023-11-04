-- Active: 1698994310977@@127.0.0.1@3306@modulesixassignmentsixdatabase
CREATE TABLE `customer_table` (
    `customer_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `customer_name` VARCHAR(50) NOT NULL,
    `customer_email` VARCHAR(50) NOT NULL,
    `customer_location` VARCHAR(50) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);