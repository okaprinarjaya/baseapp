-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 12, 2018 at 06:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake_d_c_users_phinxlog`
--

CREATE TABLE `cake_d_c_users_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cake_d_c_users_phinxlog`
--

INSERT INTO `cake_d_c_users_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20150513201111, 'Initial', '2018-11-07 10:18:38', '2018-11-07 10:18:38', 0),
(20161031101316, 'AddSecretToUsers', '2018-11-07 10:18:38', '2018-11-07 10:18:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` char(36) NOT NULL,
  `parent_id` char(36) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `title` varchar(32) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `lft`, `rght`, `title`, `created`) VALUES
('07bf00a7-a560-42f6-b822-717edbc3148e', '5477179c-f7f1-4c01-b6fe-24a9b5da6123', 17, 18, 'Sue Ora Jamu ', '2018-11-12 13:01:12'),
('0bf862b6-a1f0-47ad-b527-281ec393eb02', '17bbf4e4-8bfe-4d23-8e01-3315d105a59b', 11, 12, 'Cobol', '2018-11-12 18:07:33'),
('17bbf4e4-8bfe-4d23-8e01-3315d105a59b', '5477179c-f7f1-4c01-b6fe-24a9b5da659c', 8, 13, 'Programming Languages', '2018-11-12 17:35:25'),
('1faa826d-c43c-4f57-a6b5-d0036168ee56', '5477179c-f7f1-4c01-b6fe-24a9b5da659c', 6, 7, 'Menus', '2018-11-12 13:35:22'),
('5477179c-f7f1-4c01-b6fe-24a9b5da6123', '5477179c-f7f1-4c01-b6fe-24a9b5da659c', 2, 5, 'Ojo Lali', '2018-11-12 19:49:40'),
('5477179c-f7f1-4c01-b6fe-24a9b5da659c', NULL, 1, 16, 'Application Menu', '2018-11-12 12:49:12'),
('6d0a58ce-bf2c-42d1-811d-6baaf7802a7d', '5477179c-f7f1-4c01-b6fe-24a9b5da659c', 14, 15, 'Processor', '2018-11-12 18:11:13'),
('bd63edb3-ba55-4125-bfb9-22dad837ecfc', '17bbf4e4-8bfe-4d23-8e01-3315d105a59b', 9, 10, 'Python', '2018-11-12 17:35:41'),
('e2970bfe-f7f8-4e1e-96fa-aee61e1a0a24', '5477179c-f7f1-4c01-b6fe-24a9b5da6123', 3, 4, 'Sub Ojo Lali', '2018-11-12 13:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` char(7) NOT NULL,
  `name` varchar(32) NOT NULL,
  `weight` tinyint(4) NOT NULL COMMENT 'Weight is for storing value that represent how many product can be produced per day per 1 person',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `weight`, `created`, `modified`) VALUES
('PROD000', 'Lain-lain', 0, '2018-11-02 15:13:30', '2018-11-02 15:13:30'),
('PROD001', 'Jeans Panjang', 3, '2018-11-02 14:47:14', '2018-11-02 14:47:14'),
('PROD002', 'Jeans Pendek', 3, '2018-11-02 14:47:14', '2018-11-02 14:47:14'),
('PROD003', 'Jeans Kargo', 2, '2018-11-02 14:47:14', '2018-11-02 14:47:14'),
('PROD004', 'Kemeja Batik', 3, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD005', 'Kemeja', 3, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD006', 'Batik Puring', 2, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD007', 'Batik Lengan Panjang', 2, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD008', 'Batik Lengan Pendek', 3, '2018-11-02 15:05:12', '2018-11-02 15:05:12'),
('PROD009', 'Sopan / Formal', 2, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD010', 'Cinos', 2, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD011', 'Jaket', 2, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD012', 'Seragam', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD013', 'Seragam SMP', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD014', 'Seragam SMA', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD015', 'Seragam PNS', 3, '2018-11-02 15:10:47', '2018-11-02 15:10:47'),
('PROD016', 'PDL', 2, '2018-11-02 15:12:43', '2018-11-02 15:12:43'),
('PROD017', 'PDH', 2, '2018-11-02 15:12:43', '2018-11-02 15:12:43'),
('PROD018', 'Blues', 2, '2018-11-02 15:12:43', '2018-11-02 15:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` char(36) NOT NULL,
  `customer_name` varchar(32) NOT NULL,
  `customer_phone` varchar(16) NOT NULL,
  `project_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_due_date` date NOT NULL,
  `product_id` char(7) NOT NULL,
  `project_assignee` varchar(8) DEFAULT 'UNKNOWN',
  `project_status` enum('TODO','INPR','CNCL','OTHR','DONE') NOT NULL DEFAULT 'TODO',
  `deleted` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `customer_name`, `customer_phone`, `project_created`, `project_due_date`, `product_id`, `project_assignee`, `project_status`, `deleted`) VALUES
('62a39b89-8a53-4b93-9dc6-537d32b7859d', 'lasmini', '081723433212', '2018-11-02 10:49:36', '2018-11-13', 'PROD014', 'UNKNOWN', 'TODO', 'N'),
('6f985224-5f8c-4897-98a6-773fc186cda4', 'Ipul', '081723433212', '2018-11-02 08:56:55', '2018-11-11', 'PROD004', 'UNKNOWN', 'TODO', 'N'),
('a1f495c7-d4b7-40e4-914b-dfa6e8d04ca3', 'Badriah', '081723433212', '2018-11-02 09:44:50', '2018-11-13', 'PROD000', 'UNKNOWN', 'TODO', 'N'),
('b362ccb8-3eef-4b7e-a5d7-531ceb6f3e34', 'Bayu Pranata', '081723433212', '2018-11-02 09:40:07', '2018-11-12', 'PROD010', 'UNKNOWN', 'TODO', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `project_notes`
--

CREATE TABLE `project_notes` (
  `id` int(11) NOT NULL,
  `project_id` char(36) NOT NULL,
  `notes` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_notes`
--

INSERT INTO `project_notes` (`id`, `project_id`, `notes`) VALUES
(1, '6f985224-5f8c-4897-98a6-773fc186cda4', 'Isi catatan untuk pesanan di sini ya, klo merasa tidak perlu catatan, kosongkan saja.'),
(5, 'a1f495c7-d4b7-40e4-914b-dfa6e8d04ca3', 'Ini nanti tulis di sini ya, apa-apa yg perlu dicatat untuk pesanan ini');

-- --------------------------------------------------------

--
-- Table structure for table `project_product_other`
--

CREATE TABLE `project_product_other` (
  `id` int(11) NOT NULL,
  `project_id` char(36) NOT NULL,
  `product_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_product_other`
--

INSERT INTO `project_product_other` (`id`, `project_id`, `product_name`) VALUES
(1, 'a1f495c7-d4b7-40e4-914b-dfa6e8d04ca3', 'Produk lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `description` text,
  `link` varchar(255) NOT NULL,
  `token` varchar(500) NOT NULL,
  `token_secret` varchar(500) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `data` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `activation_date` datetime DEFAULT NULL,
  `secret` varchar(32) DEFAULT NULL,
  `secret_verified` tinyint(1) DEFAULT NULL,
  `tos_date` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0',
  `role` varchar(255) DEFAULT 'user',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `token`, `token_expires`, `api_token`, `activation_date`, `secret`, `secret_verified`, `tos_date`, `active`, `is_superuser`, `role`, `created`, `modified`) VALUES
('02223d88-bdb1-4820-b9cb-d79dd870a4d1', 'qicysoz', 'qicysoz@getnada.com', '$2y$10$cS9.zC1FJjHBdEDoZ0Bc.ORB4IvCxzsYq3b1OiJiUs0JZk0HDxto2', 'Qicy', 'Sozz', '65ca4a490daea305b763588075a4eca0', NULL, NULL, '2018-11-11 16:30:48', NULL, NULL, '2018-11-11 16:30:23', 1, 0, 'user', '2018-11-11 16:30:23', '2018-11-11 16:30:48'),
('0f4eb542-5d63-4b0b-bfd9-d71d81d8dfc3', 'jisipi', 'jisipi@getnada.com', '$2y$10$lABUK979uB46jnAxAB7kUOycgIYbBetujpheRsT7lidmsrIJvVaj.', 'Ji', 'Sipi', '62d3ba057e6a7a913cee1602ac9734ac', '2018-11-11 17:01:28', NULL, NULL, NULL, NULL, '2018-11-11 16:01:28', 0, 0, 'user', '2018-11-11 16:01:28', '2018-11-11 16:01:28'),
('129d799a-d06d-471c-adb7-6e7b7d44dc0a', 'okaokaoka', 'okaprinarjaya@gmail.com', '$2y$10$xvwXP7MQzEB52AO.z76Bz.TJnyqy9umA9P5jAjkslR9vAA58lRNci', 'Oka', 'Tri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 'user', '2018-11-11 12:00:20', '2018-11-11 12:01:32'),
('1f7c913c-4820-42ab-bb93-71e630cfafd3', 'jipybe', 'jipybe@getnada.com', '$2y$10$OBP0ohiuA54ALejpdzQSbuo7bxKCtNm2U4C8jrPYm7knfxuWrntJ.', 'Jipy', 'Bee', '9fc91782b202b7c33c3d4d84ed452710', '2018-11-11 16:30:28', NULL, NULL, NULL, NULL, '2018-11-11 15:30:28', 0, 0, 'user', '2018-11-11 15:30:28', '2018-11-11 15:30:28'),
('492cb658-957b-406a-86fd-66061d8bfa4c', 'xelekony', 'xelekony@getnada.com', '$2y$10$bJ8IwLbPtxDiPlMLH0BRzOWyvv4mCLUEmgPuvleQpnpya5mDa0tWe', 'Xele', 'Kony', 'ae6e0433819a982c01f1080ef70a6e9a', '2018-11-11 13:50:46', NULL, NULL, NULL, NULL, '2018-11-11 12:50:46', 1, 0, 'user', '2018-11-11 12:50:46', '2018-11-11 12:56:55'),
('8b16d313-9804-473c-8e68-88b6b5122c2a', 'okabento', 'oka.prinarjaya@tiket.com', '$2y$10$zZeMzxG.sWIH9L18oW.7bebUvUZK4hw0X77Gvii/S4FCfPD2bFTTO', 'Bento', 'Oka', NULL, NULL, NULL, '2018-11-08 07:46:07', NULL, NULL, '2018-11-08 07:43:43', 1, 0, 'admin', '2018-11-08 07:43:43', '2018-11-09 06:32:46'),
('8c51705c-eb1e-428f-98a5-2072cf60ec28', 'gapugi', 'gapugi@getnada.com', '$2y$10$B.z4CgADQCe4cJPjYlVageRQNtYgYxLCQIDjbTIuO7S.YQsY99e7q', 'Gapu', 'Gigi', '1d9cfcd1421a710afdd553aa863feae1', '2018-11-11 17:05:39', NULL, NULL, NULL, NULL, '2018-11-11 16:05:39', 0, 0, 'user', '2018-11-11 16:05:39', '2018-11-11 16:05:39'),
('c5e28852-d585-4c1a-8baa-b1679d9e78ba', 'rawabelong', 'rawaje@getnada.com', '$2y$10$4stiInHmYkwv7aETsKIQDeoQJx0wSNJEDXa4q5pPnaNFwAHXANja.', 'Rawa', 'Belong', 'fa4ed34c8da6f0218b8897d5cc7f708f', '2018-11-11 16:19:33', NULL, NULL, NULL, NULL, '2018-11-11 15:19:33', 0, 0, 'user', '2018-11-11 15:19:33', '2018-11-11 15:19:33'),
('ff068ec5-9ab6-46f1-bc10-4b44fe2a378c', 'likemy', 'likemy@getnada.com', '$2y$10$QDgoVrFe9GSL7pfq/bWRtu83RODX.p6vyzhYc0/m8jLFRA/611nfG', 'Like', 'Myy', 'acbdf2347aaa6bacf1a67bc776426365', '2018-11-11 17:23:14', NULL, NULL, NULL, NULL, '2018-11-11 16:23:14', 0, 0, 'user', '2018-11-11 16:23:14', '2018-11-11 16:23:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_d_c_users_phinxlog`
--
ALTER TABLE `cake_d_c_users_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_notes`
--
ALTER TABLE `project_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_product_other`
--
ALTER TABLE `project_product_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project_notes`
--
ALTER TABLE `project_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_product_other`
--
ALTER TABLE `project_product_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
