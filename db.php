<?php
$mysqli = new mysqli('us-cdbr-iron-east-04.cleardb.net', 'bd5859b5036734', 'db74f49c', 'heroku_32566d8beeb6326');

// -- phpMyAdmin SQL Dump
// -- version 4.9.0.1
// -- https://www.phpmyadmin.net/
// --
// -- Host: 127.0.0.1
// -- Generation Time: Mar 19, 2020 at 05:27 PM
// -- Server version: 10.4.6-MariaDB
// -- PHP Version: 7.3.8

// SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
// SET AUTOCOMMIT = 0;
// START TRANSACTION;
// SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

// --
// -- Database: `ampcyclers`
// --

// -- --------------------------------------------------------

// --
// -- Table structure for table `users`
// --

// $sql = "CREATE TABLE `users` (
//   `id` int(99) NOT NULL,
//   `email` varchar(99) NOT NULL,
//   `password` varchar(99) NOT NULL,
//   `first_name` varchar(99) NOT NULL,
//   `last_name` varchar(99) NOT NULL,
//   `address` varchar(99) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

// if ($mysqli->query($sql)) {
//     echo "good";
// }else{
//     echo "bad" .$mysqli->error;
// }

// --
// -- Dumping data for table `users`
// --

// INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `address`) VALUES
// (1, 'ayantunjitimilehin@yahoo.com', '$2y$10$kPbjfp4rPL1t1ZWUvVumsubu7AEH/ixvt9.pR44SD3GUgYqSA527W', 'Adepoju-conde', 'Christopher', ''),
// (2, 'ayantunjitimilehn@yahoo.com', '$2y$10$8iUeZX8aV53fMHhr0oghgu1lVI4NedGc/HTUvVOVNxuMWPYR.R0uS', 'Adepoju-conde', 'Christopher', 'Olufemi Ogunsola'),
// (3, 'ayantunjitimilin@yahoo.com', '$2y$10$ilKG0YTNY2Mm0xHSsQCW1.8egB7OAak5acd/d6o1K8DMpiqn2w.Fq', 'James', 'Micheal', '1'),
// (4, 'mattew@yahoo.com', '$2y$10$m/adIiD/6/.l9uq1SglxSeqgia6mj3uL7PjpM8x63AFaa0TUbnojS', 'Mattew', 'Douglas', '1'),
// (5, 'timilehin@yahoo.com', '$2y$10$2US0xw8cXzULaJh/gLW4DeZNmLtXxoVbMPYxuoF6IwkgtyRo1pW9m', 'kkk', 'kkk', '1'),
// (6, 'ayantunji@yahoo.com', '$2y$10$HmARMfQJSydETkDa57mM7uIRu3rU3eFMfzX.EaDQtXUHsuw.dlua2', 'leave', 'ooo', '1');

// --
// -- Indexes for dumped tables
// --

// --
// -- Indexes for table `users`
// --
// ALTER TABLE `users`
//   ADD PRIMARY KEY (`id`);

// --
// -- AUTO_INCREMENT for dumped tables
// --

// --
// -- AUTO_INCREMENT for table `users`
// --
// ALTER TABLE `users`
//   MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
// COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


// /bd5859b5036734:db74f49c@us-cdbr-iron-east-04.cleardb.net/heroku_32566d8beeb6326?reconnect=true

// host, username, pas, db name