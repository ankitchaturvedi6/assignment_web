DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level_id` int(11) NOT NULL DEFAULT '2', 
  PRIMARY KEY (`user_id`)
); 

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `details` varchar(128) NOT NULL,
  `contact_type` tinyint NOT NULL,
  `image` varchar(256) NOT NULL,
  `status` tinyint NOT NULL,
  PRIMARY KEY (`product_id`)
);
