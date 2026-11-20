

CREATE DATABASE kala_nadu;
USE kala_nadu;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `liked` varchar(200) DEFAULT NULL,
  `rating` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL
);
