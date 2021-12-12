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
  `status` tinyint NOT NULL DEFAULT '2',
  PRIMARY KEY (`product_id`)
);

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `level_id`) VALUES
(1, 'admin', 'server', '1234567880', 'admin@gmail.com', '$2y$10$vc9qI1f4u1l945j9voD1Veetgu9jDx4ngFjtbyKqaWN7jPUh1JXYO', 1);

