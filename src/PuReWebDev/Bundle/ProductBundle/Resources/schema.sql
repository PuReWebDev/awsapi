CREATE TABLE `locale` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`marketplace_id` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `local_search_index` (
	`locale_id` int NOT NULL,
	`search_index_id` int NOT NULL
);

CREATE TABLE `sort_values` (
	`id` int NOT NULL AUTO_INCREMENT,
	`value` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `browse_node` (
	`id` int NOT NULL AUTO_INCREMENT,
	`browsenodeId` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `search_index` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`browse_node_id` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `search_index_sort_values` (
	`search_index_id` int NOT NULL,
	`sort_values_id` int NOT NULL
);

CREATE TABLE `itemsearch_parameters` (
	`id` int NOT NULL AUTO_INCREMENT,
	`parameter` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `search_index_itemsearch_parameters` (
	`search_index_id` int NOT NULL,
	`itemsearch_parameters` int NOT NULL
);

CREATE TABLE `products` (
	`id` int NOT NULL AUTO_INCREMENT,
	`asin` varchar(255) NOT NULL,
	`manufacturer_id` int NOT NULL,
	`title` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `manufacturer` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `locale` ADD CONSTRAINT `locale_fk0` FOREIGN KEY (`marketplace_id`) REFERENCES `local_search_index`(`id`);

ALTER TABLE `local_search_index` ADD CONSTRAINT `local_search_index_fk0` FOREIGN KEY (`locale_id`) REFERENCES `locale`(`id`);

ALTER TABLE `local_search_index` ADD CONSTRAINT `local_search_index_fk1` FOREIGN KEY (`search_index_id`) REFERENCES `search_index`(`id`);

ALTER TABLE `search_index` ADD CONSTRAINT `search_index_fk0` FOREIGN KEY (`browse_node_id`) REFERENCES `browse_node`(`id`);

ALTER TABLE `search_index_sort_values` ADD CONSTRAINT `search_index_sort_values_fk0` FOREIGN KEY (`search_index_id`) REFERENCES `search_index`(`id`);

ALTER TABLE `search_index_sort_values` ADD CONSTRAINT `search_index_sort_values_fk1` FOREIGN KEY (`sort_values_id`) REFERENCES `sort_values`(`id`);

ALTER TABLE `search_index_itemsearch_parameters` ADD CONSTRAINT `search_index_itemsearch_parameters_fk0` FOREIGN KEY (`search_index_id`) REFERENCES `search_index`(`id`);

ALTER TABLE `search_index_itemsearch_parameters` ADD CONSTRAINT `search_index_itemsearch_parameters_fk1` FOREIGN KEY (`itemsearch_parameters`) REFERENCES `itemsearch_parameters`(`id`);

ALTER TABLE `products` ADD CONSTRAINT `products_fk0` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer`(`id`);

