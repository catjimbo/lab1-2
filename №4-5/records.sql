SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `records`;
CREATE TABLE `records` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
                           `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
                           `price` int(11) NOT NULL,
                           `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `records` (`id`, `title`, `description`, `price`, `photo`) VALUES
    (4,	'Букет «Флорентийские мотивы»',	'Букет, отображающий все фибры вашей любви и уважения. 30 × 40 см',	3600,	'img2.jpg');