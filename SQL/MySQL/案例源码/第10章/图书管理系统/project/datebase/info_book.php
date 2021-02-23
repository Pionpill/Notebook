<?php
$SQL = " CREATE TABLE IF NOT EXISTS `info_books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `uploadtime` datetime NOT NULL,
  `type` varchar(10) CHARACTER SET utf8 NOT NULL,
  `total` int(50) DEFAULT NULL,
  `leave_number` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ";
?>