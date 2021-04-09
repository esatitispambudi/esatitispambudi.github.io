/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test_mediatama

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-04-09 10:10:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('esatp.systemanalys@gmail.com', '$2y$10$YhUivNO.rslaKUpAr4gtsuaoBfyDojB7OkgEui.YZEzg9cOzs2mJC', '2021-04-07 13:51:04');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_waktu` datetime DEFAULT current_timestamp(),
  `status_pengajuan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('5', 'esapercobaan1', 'esapercobaan1@gmail.com', '$2y$10$7jAvEUlaPpaQEYTw8HN6EOKkpYjfVLJrTFRcMc/YKdGmFnwYBN8Zy', 'Customer', null, null, 'ZAKiZNWlPptlrUJT8lNlxDWx9uEU3BZKrs39vL7gkxVGV0gk3m7JWzkXLovF', '2021-04-07 04:00:21', '2021-04-07 04:00:21');
INSERT INTO `users` VALUES ('6', 'esa971991', 'esatp.971991systemanalys@gmail.com', '$2y$10$c2vcyWeQP9I7sy4AepLEbOV1Y1vMZ.UfKhK6KhWNHKI8WbnT9emMG', 'Customer', null, null, 'MfNPxtf6tBeekS50eFFQ36cpsunME75zTQKJDr2ZTK9ae67HyaitneLuLBc4', '2021-04-07 04:02:17', '2021-04-07 04:02:17');
INSERT INTO `users` VALUES ('8', 'esa', 'esatp123.systemanalys@gmail.com', '$2y$10$Xmnn9NuD9su7kJHBNSEOw.5phrtEkGS5vUOzpbYvoMkrcoSibcgoW', 'Customer', null, null, 'w4WvZFoW07u9LN1Sw8g5oesGcw1RjQKpmkQBzVTvsAJVdI8jTSlzxZose3BO', '2021-04-07 13:21:55', '2021-04-07 13:21:55');
INSERT INTO `users` VALUES ('9', 'esa asli', 'esatp1234.systemanalys@gmail.com', '$2y$10$6mnvXmQyb8zTO57eC0JcBelU2DqFKq4AGMWyTVU8WGydNZN5A7Sy.', 'Customer', null, null, 't69I2Nkfq2i3adiAe88VmfOglBVQLw9494fbdW0bsSLepMlg7YvtVVcJ9tIG', '2021-04-07 14:19:49', '2021-04-07 14:19:49');
INSERT INTO `users` VALUES ('12', 'esa', 'esasystemanalys@gmail.com', '$2y$10$kpZpLKwxZy5wfLpgTfg2aeoFvmmvD0hUb6rVqx3UB.Kk2lVfBjZWW', 'Customer', null, null, '6bSQOGRNOSa6GZY95Q4kOpg2GuHYQqccrzLcyCr4pDCOhdnEsDjFBbBFSwJw', '2021-04-08 16:10:38', '2021-04-08 16:10:38');
INSERT INTO `users` VALUES ('13', 'Esa titis pambudi', 'esatp.systemanalys@gmail.com', '$2y$10$qkmYkPJZ29rkkyCSE/y3pOOrsURCxN6WaeA4/zN/p9GEaG1bJvYyG', 'Admin', '2021-04-10 09:05:33', 'pengajuan', 'bALewHi4G1RImzvogQw1vttt9yUxbEHNZocqgnXGLDs5ftZXnzyAVj54cm9m', '2021-04-09 15:51:21', '2021-04-09 15:54:20');
INSERT INTO `users` VALUES ('14', 'admin', 'admin@gmail.com', '$2y$10$UzkE3LZmvYZr7iUwuTe96OVLo4yJO1EZ8k6qAKLI.XjdEgqZqb7VK', 'Admin', '2025-11-09 09:28:00', '', 'aXi9bFVGoNqM143JJiVlW2VHykdIhfp4Pg6J5Qzb7rup7BgmYorpqrcLmHT7', '2021-04-09 16:21:03', '2021-04-09 16:22:30');
INSERT INTO `users` VALUES ('16', 'customer', 'customer@gmail.com', '$2y$10$2CCklWvqaGnvOIg99Q6mH./PfcPJDaUNKzYgjRMtgi6Se4K/ot9H2', 'Customer', '2021-04-09 09:26:28', '', '3Ym6zkzefhJkLePC1TxqIOlNyn9zw705mHQiMZ2UJMRJh9GWo89RGGJgON93', '2021-04-09 16:26:28', '2021-04-09 16:26:28');

-- ----------------------------
-- Table structure for vidios
-- ----------------------------
DROP TABLE IF EXISTS `vidios`;
CREATE TABLE `vidios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_vidio` varchar(10000) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of vidios
-- ----------------------------
INSERT INTO `vidios` VALUES ('1', 'https://www.youtube.com/embed/pRwDrEBGlWA', 'MEDIATAMA', '2021-04-08 14:58:36', '2021-04-08 14:24:57');
INSERT INTO `vidios` VALUES ('3', 'https://www.youtube.com/embed/sybDQNFlPn4', 'PRODUKSI', '2021-04-08 14:59:07', '2021-04-08 14:59:07');
