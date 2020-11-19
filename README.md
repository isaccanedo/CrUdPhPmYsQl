# :fish: Crud PHP MYSQL
:star: Operações CRUD com PHP e MySql

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_city`) VALUES
(1, 'Isac', 'Canedo', 'São Paulo'),
(2, 'Isac', 'Canedo', 'Minas Gerais'),
(3, 'Isac', 'Canedo', 'Rio de Janeiro'),
(4, 'Isac', 'Canedo', 'Espírito Santo');
