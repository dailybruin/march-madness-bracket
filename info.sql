SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `main`;
CREATE TABLE `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamname` varchar(255) NOT NULL,
  `pic_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `main` (`id`, `teamname`, `pic_url`) VALUES
(1, 'UCLA', 'ucla.jpg'),
(2, 'Duke', 'duke.jpg');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `f_id` varchar(255) NOT NULL,
  `bracket_id` varchar(255) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`f_id`,`bracket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`f_id`, `bracket_id`, `team_id`) VALUES
('34543', '1-1', 1),
('34543', '1-3', 2);
