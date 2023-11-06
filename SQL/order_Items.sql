CREATE TABLE `order_item_table`(
    `orderItem_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id`  BIGINT(20) UNSIGNED NOT NULL,
    `category_id` BIGINT(20) UNSIGNED NOT NULL,
    `product_id` BIGINT(20) UNSIGNED NOT NULL,
    `customer_id` BIGINT(20) UNSIGNED NOT NULL,
    `quantity` INTEGER(50) NOT NULL,
    `unit_price` DECIMAL(50) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `update_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    FOREIGN KEY (`category_id`) REFERENCES `category_table` (`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `product_table` (`product_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (`order_id`) REFERENCES `order_table` (`order_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (`customer_id`) REFERENCES `customer_table` (`customer_id`) ON DELETE RESTRICT ON UPDATE CASCADE

);