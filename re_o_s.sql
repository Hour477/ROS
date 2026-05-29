/*
 Navicat Premium Dump SQL

 Source Server         : Customers
 Source Server Type    : MySQL
 Source Server Version : 80407 (8.4.7)
 Source Host           : localhost:3306
 Source Schema         : re_o_s

 Target Server Type    : MySQL
 Target Server Version : 80407 (8.4.7)
 File Encoding         : 65001

 Date: 27/05/2026 21:47:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`) USING BTREE,
  INDEX `cache_expiration_index`(`expiration` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache
-- ----------------------------
INSERT INTO `cache` VALUES ('ros-cache-lang_sync_en', 'i:733;', 1779804718);
INSERT INTO `cache` VALUES ('ros-cache-lang_sync_kh', 'i:733;', 1779805417);
INSERT INTO `cache` VALUES ('ros-cache-setting_backup_disk_path', 's:10:\"D:\\Laravel\";', 2094769195);
INSERT INTO `cache` VALUES ('ros-cache-setting_business_address', 's:19:\"Siem Reap, Cambodia\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-setting_business_email', 's:16:\"info@Romdoul.com\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-setting_business_favicon', 's:37:\"business/2026-05-21-6a0f362be4601.jpg\";', 2094769196);
INSERT INTO `cache` VALUES ('ros-cache-setting_business_logo', 's:37:\"business/2026-05-21-6a0f362be2f0b.jpg\";', 2094769196);
INSERT INTO `cache` VALUES ('ros-cache-setting_business_name', 's:15:\"រំដួល\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-setting_business_phone', 's:16:\"+855 012 345 678\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-setting_currency_exchange_rate', 's:4:\"4100\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-setting_currency_symbol', 's:1:\"$\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-setting_tax_percentage', 's:2:\"10\";', 2094770112);
INSERT INTO `cache` VALUES ('ros-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:6:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";s:1:\"j\";s:4:\"slug\";s:1:\"k\";s:11:\"description\";}s:11:\"permissions\";a:36:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"view-orders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:1;i:1;i:6;i:2;i:9;i:3;i:10;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"create-orders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:6;i:1;i:10;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"edit-orders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:6;i:2;i:10;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:13:\"delete-orders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:6;i:2;i:10;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:11:\"void-orders\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:6;i:2;i:10;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:9:\"view-menu\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:11:\"create-menu\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:9:\"edit-menu\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:11:\"delete-menu\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:11:\"view-tables\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:6;i:2;i:10;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:13:\"manage-tables\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:6;i:2;i:10;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:13:\"view-payments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:15:\"refund-payments\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:13;a:3:{s:1:\"a\";i:14;s:1:\"b\";s:10:\"view-staff\";s:1:\"c\";s:3:\"web\";}i:14;a:3:{s:1:\"a\";i:15;s:1:\"b\";s:12:\"manage-staff\";s:1:\"c\";s:3:\"web\";}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:12:\"manage-roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:15:\"manage-settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:19:\"manage-translations\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:12:\"view-reports\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:10:\"view-roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:12:\"create-roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:10:\"edit-roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:12:\"delete-roles\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:6;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:10:\"view-users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:12:\"create-users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:10:\"edit-users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:12:\"delete-users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:13:\"create-tables\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:6;i:1;i:10;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:11:\"edit-tables\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:6;i:1;i:10;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:13:\"delete-tables\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:6;i:1;i:10;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:14:\"view-customers\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:16:\"create-customers\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:14:\"edit-customers\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:16:\"delete-customers\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:14:\"manage-backups\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:6;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:12:\"view-kitchen\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:6;i:1;i:9;}}}s:5:\"roles\";a:4:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"Admin\";s:1:\"j\";s:5:\"admin\";s:1:\"k\";s:20:\"System Administrator\";s:1:\"c\";s:3:\"web\";}i:1;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:13:\"Administrator\";s:1:\"j\";s:13:\"administrator\";s:1:\"k\";s:18:\"Full System Access\";s:1:\"c\";s:3:\"web\";}i:2;a:5:{s:1:\"a\";i:9;s:1:\"b\";s:7:\"Kitchen\";s:1:\"j\";s:7:\"kitchen\";s:1:\"k\";N;s:1:\"c\";s:3:\"web\";}i:3;a:5:{s:1:\"a\";i:10;s:1:\"b\";s:7:\"Cashier\";s:1:\"j\";s:7:\"cashier\";s:1:\"k\";N;s:1:\"c\";s:3:\"web\";}}}', 1779887864);

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`) USING BTREE,
  INDEX `cache_locks_expiration_index`(`expiration` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------
INSERT INTO `cache_locks` VALUES ('ros-cache-framework\\schedule-87bcd22e9a93c21968b6cf71fc7041bd8f357232', 'BGDKqdsTRvwxW2GZ', 1779394359);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (3, 'Soups & Hotpot (សម្ល និង ឆ្នាំងភ្លើង)', 'Traditional Cambodian soups and interactive hotpot sets.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (4, 'Khmer Noodles (នំបញ្ចុក)', 'Fresh rice noodles with various traditional gravies and fresh herbs.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (5, 'Fried Rice & Noodles (បាយឆា និង មីឆា)', 'A variety of wok-fried rice and noodle dishes.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (6, 'Grilled & BBQ (សាច់អាំង)', 'Charcoal-grilled meats and street-style BBQ favorites.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (7, 'Seafood (គ្រឿងសមុទ្រ)', 'Fresh catch from the, prepared Cambodian style.', 1, '2026-04-13 16:44:36', '2026-04-14 09:53:32');
INSERT INTO `categories` VALUES (8, 'Stir-fried (ឆា)', 'Classic Khmer stir-fries including Lok Lak and Ginger Chicken.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (10, 'Appetizers & Snacks (អាហារសម្រន់)', 'Crispy spring rolls, fried corn, and traditional snacks.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (11, 'Desserts (បង្អែម)', 'Sweet Khmer treats with coconut milk and seasonal fruits.', 1, '2026-04-13 16:44:36', '2026-04-13 16:44:36');
INSERT INTO `categories` VALUES (12, 'Fresh Juices & Drinks (ទឹកផ្លែឈើ និង ភេសជ្ជះ )', 'Natural fruit shakes and Drinks.', 1, '2026-04-13 16:44:36', '2026-05-21 19:38:42');
INSERT INTO `categories` VALUES (14, 'A', 'aaaa', 1, '2026-05-22 08:04:56', '2026-05-22 08:04:56');

-- ----------------------------
-- Table structure for currencies
-- ----------------------------
DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of currencies
-- ----------------------------
INSERT INTO `currencies` VALUES (1, 'KH', '៛', 1, '2026-05-21 11:59:02', '2026-05-21 11:59:02');
INSERT INTO `currencies` VALUES (2, 'Dollar', '$', 1, '2026-05-21 13:34:52', '2026-05-21 13:34:52');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `customers_user_id_foreign`(`user_id` ASC) USING BTREE,
  CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of customers
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int NULL DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED NULL DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for kitchen_orders
-- ----------------------------
DROP TABLE IF EXISTS `kitchen_orders`;
CREATE TABLE `kitchen_orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `cooking_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kitchen_orders_order_id_foreign`(`order_id` ASC) USING BTREE,
  CONSTRAINT `kitchen_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kitchen_orders
-- ----------------------------
INSERT INTO `kitchen_orders` VALUES (4, 58, 'នំបញ្ចុកទឹកប្រហុក', 1, 'done', NULL, '2026-05-21 21:04:20', '2026-05-21 21:10:11');
INSERT INTO `kitchen_orders` VALUES (5, 58, 'លតឆាពងទា', 1, 'pending', NULL, '2026-05-21 21:04:20', '2026-05-21 21:04:20');
INSERT INTO `kitchen_orders` VALUES (6, 58, 'នំបញ្ចុកសម្លរខ្មែរ', 1, 'done', NULL, '2026-05-21 21:04:20', '2026-05-21 21:09:32');
INSERT INTO `kitchen_orders` VALUES (7, 59, 'នំបញ្ចុកទឹកប្រហុក', 2, 'pending', NULL, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `kitchen_orders` VALUES (8, 59, 'នំបញ្ចុកសម្លរខ្មែរ', 2, 'pending', NULL, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `kitchen_orders` VALUES (9, 59, 'នំបញ្ចុកសម្លការី', 2, 'pending', NULL, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `kitchen_orders` VALUES (10, 59, 'សម្លម្ជូរគ្រឿង', 2, 'pending', NULL, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `kitchen_orders` VALUES (12, 60, 'នំបញ្ចុកទឹកប្រហុក', 2, 'pending', NULL, '2026-05-21 21:53:28', '2026-05-21 21:53:28');
INSERT INTO `kitchen_orders` VALUES (13, 61, 'ស្ងោជ្រក់សាច់មាន់', 1, 'pending', NULL, '2026-05-21 23:49:42', '2026-05-21 23:49:42');
INSERT INTO `kitchen_orders` VALUES (14, 61, 'នំបញ្ចុកសម្លការី', 1, 'pending', NULL, '2026-05-21 23:49:42', '2026-05-21 23:49:42');
INSERT INTO `kitchen_orders` VALUES (15, 62, 'គុយទាវឆា', 1, 'pending', NULL, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `kitchen_orders` VALUES (16, 62, 'ពោតឆា', 1, 'pending', NULL, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `kitchen_orders` VALUES (17, 62, 'លតឆាពងទា', 1, 'pending', NULL, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `kitchen_orders` VALUES (18, 62, 'នំបញ្ចុកទឹកប្រហុក', 1, 'pending', NULL, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `kitchen_orders` VALUES (20, 63, 'នំបញ្ចុកទឹកប្រហុក', 1, 'pending', NULL, '2026-05-22 06:43:58', '2026-05-22 06:43:58');
INSERT INTO `kitchen_orders` VALUES (21, 63, 'នំបញ្ចុកសម្លការី', 1, 'pending', NULL, '2026-05-22 06:43:58', '2026-05-22 06:43:58');
INSERT INTO `kitchen_orders` VALUES (22, 64, 'សម្លម្ជូរគ្រឿង', 1, 'pending', NULL, '2026-05-22 08:07:47', '2026-05-22 08:07:47');
INSERT INTO `kitchen_orders` VALUES (23, 65, 'នំបញ្ចុកសម្លរខ្មែរ', 1, 'done', NULL, '2026-05-22 08:08:35', '2026-05-22 08:09:14');
INSERT INTO `kitchen_orders` VALUES (27, 66, 'នំបញ្ចុកសម្លការី', 1, 'pending', NULL, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `kitchen_orders` VALUES (28, 66, 'សម្លម្ជូរគ្រឿង', 1, 'pending', NULL, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `kitchen_orders` VALUES (29, 66, 'នំបញ្ចុកសម្លរខ្មែរ', 1, 'pending', NULL, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `kitchen_orders` VALUES (30, 66, 'A1', 1, 'pending', NULL, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `kitchen_orders` VALUES (31, 67, 'សាច់អាំង​BBQ', 1, 'pending', NULL, '2026-05-26 20:24:30', '2026-05-26 20:24:30');
INSERT INTO `kitchen_orders` VALUES (32, 67, 'នំបញ្ចុកទឹកប្រហុក', 1, 'pending', NULL, '2026-05-26 20:24:30', '2026-05-26 20:24:30');

-- ----------------------------
-- Table structure for menu_items
-- ----------------------------
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE `menu_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint UNSIGNED NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `price` decimal(10, 2) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_items_category_id_foreign`(`category_id` ASC) USING BTREE,
  CONSTRAINT `menu_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_items
-- ----------------------------
INSERT INTO `menu_items` VALUES (2, 3, 'សម្លម្ជូរគ្រឿង', 'សម្លម្ជូរគ្រឿងសាច់គោខ្មែរ', 5.00, 'menu-items/2026-05-21-6a0f00f5a4b8a.jpg', 'available', '2026-04-13 12:00:02', '2026-05-21 19:56:21');
INSERT INTO `menu_items` VALUES (10, 4, 'នំបញ្ចុកសម្លការី', 'នំបញ្ចុកសម្លការីសាច់មាន់ជាមួយបន្លែ', 1.75, 'menu-items/2026-05-21-6a0ecd2590efa.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 16:56:39');
INSERT INTO `menu_items` VALUES (11, 4, 'នំបញ្ចុកសម្លរខ្មែរ', 'នំបញ្ចុកសម្លរខ្មែរជាមួយបន្លែ', 1.50, 'menu-items/2026-05-21-6a0ed3104f06c.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 16:57:17');
INSERT INTO `menu_items` VALUES (12, 4, 'នំបញ្ចុកទឹកប្រហុក', 'នំបញ្ចុកទឹកប្រហុកជាមួយត្រីអាំងនឹង បន្លែ', 4.50, 'menu-items/2026-05-21-6a0ed5d565bfd.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:16:28');
INSERT INTO `menu_items` VALUES (13, 5, 'បាយឆាបន្លែ', 'បាយឆាបន្លែជាមួយបន្លែគ្រប់មុខ', 2.50, 'menu-items/2026-05-21-6a0ecf062ffbd.png', 'available', '2026-04-14 09:53:32', '2026-05-21 16:58:58');
INSERT INTO `menu_items` VALUES (14, 5, 'មីឆាពងទា', 'មីកញ្ខប់ឆាជាមួយពងទា', 1.50, 'menu-items/2026-05-21-6a0ecfb871c6c.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:00:12');
INSERT INTO `menu_items` VALUES (15, 5, 'គុយទាវឆា', 'គុយទាវឆាជាមួយពងទានឹង​ បន្លែ', 1.50, 'menu-items/2026-05-21-6a0ed0f49c48f.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:03:16');
INSERT INTO `menu_items` VALUES (16, 5, 'លតឆាពងទា', 'លតឆាជាមួយបន្លែនឹង ពងទា', 1.50, 'menu-items/2026-05-21-6a0ed1cd5b666.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:03:32');
INSERT INTO `menu_items` VALUES (17, 5, 'បាយឆាគ្រឿងសមុទ្រ', 'បាយឆាជាមួយបង្ការសមុទ្រ', 3.50, 'menu-items/2026-05-21-6a0ed21756ac6.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:02:49');
INSERT INTO `menu_items` VALUES (18, 6, 'បាយសាច់ជ្រូក', 'បាយសាច់ជ្រូពងទា', 2.50, 'menu-items/2026-05-21-6a0ed94d97afb.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:07:09');
INSERT INTO `menu_items` VALUES (22, 6, 'សាច់អាំង​BBQ', 'សាច់អាំងដោតជាមួយបន្លែ', 5.00, 'menu-items/2026-05-21-6a0edd9c78092.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:25:32');
INSERT INTO `menu_items` VALUES (23, 7, 'មឺកអាំង', 'មឺកអាំងញាត់បន្លែ', 1.20, 'menu-items/2026-05-21-6a0edf1291796.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:31:46');
INSERT INTO `menu_items` VALUES (24, 7, 'បង្គារបំពង', 'បង្គារបំពងជាមួយម្សៅស្រួយ', 7.50, 'menu-items/2026-05-21-6a0edf66bafa3.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:33:10');
INSERT INTO `menu_items` VALUES (25, 7, 'ងាវឆា', 'ងាវឆាជាមួយអំពិលទំុនឹង ម្រះព្រៅ', 6.50, 'menu-items/2026-05-21-6a0ee000f0afb.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:03:58');
INSERT INTO `menu_items` VALUES (26, 7, 'ក្ដាមយក្សAlaska', 'ក្ដាមយក្សAlaskaថ្មីស្រស់ចំហ៊ុយ', 117.00, 'menu-items/2026-05-21-6a0ee13c43a42.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:41:00');
INSERT INTO `menu_items` VALUES (27, 7, 'ក្ដាមសេះឆា', 'ក្ដាមសេះស្រស់ឆាជាមួយគ្រឿង', 11.00, 'menu-items/2026-05-21-6a0ee1c4bb79b.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:43:16');
INSERT INTO `menu_items` VALUES (28, 8, 'ឡុកឡាក់សាច់គោ', 'ឡុកឡាក់សាច់គោជាមួយបន្លែ', 6.00, 'menu-items/2026-05-21-6a0ee23633c31.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:45:10');
INSERT INTO `menu_items` VALUES (29, 8, 'ឆាខ្ញីសាច់មាន់', 'សាច់មាន់ស្រែឆាជាមួយខ្ញីធម្មជាតិ', 4.50, 'menu-items/2026-05-21-6a0ee2ab6bb1e.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:56:56');
INSERT INTO `menu_items` VALUES (30, 8, 'ឆាត្រកួន', 'ឆាត្រកួនស្រស់ជាមួយទឹកប្រេងខ្យង', 2.00, 'menu-items/2026-05-21-6a0ee4c7a36d7.JPG', 'available', '2026-04-14 09:53:32', '2026-05-21 19:15:19');
INSERT INTO `menu_items` VALUES (32, 8, 'ឆ្អឹង​ជំនី​ជ្រូក​ឆា​ជូ​អែម', 'ឆ្អឹង​ជំនី​ជ្រូក​ឆា​ជូ​អែមជាមួយបន្លែ', 5.00, 'menu-items/2026-05-21-6a0ee56f60ba4.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 17:58:55');
INSERT INTO `menu_items` VALUES (38, 10, 'ណែមចៀន', 'ណែមមូលចៀននឹង ទឹកជ្រលក់', 1.00, 'menu-items/2026-05-21-6a0ef42fcdc47.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:01:51');
INSERT INTO `menu_items` VALUES (39, 10, 'ណែមឆៅ', 'ណែមូលបង្គារជាមួយបន្លែ', 1.50, 'menu-items/2026-05-21-6a0ef3b080677.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 18:59:44');
INSERT INTO `menu_items` VALUES (40, 10, 'ពោតឆា', 'ពោតធម្មជាតិឆាជាមួយប័រ', 2.00, 'menu-items/2026-05-21-6a0ef1cd6242d.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 18:51:41');
INSERT INTO `menu_items` VALUES (41, 10, 'ប្រហិតចៀន', 'ប្រហិតចៀនជាមួយបន្លែនឹង ទឹកជ្រលក់', 1.50, 'menu-items/2026-05-21-6a0ef264e2329.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:17:23');
INSERT INTO `menu_items` VALUES (42, 10, 'ដំឡូងបំពង', 'ដំឡូងបារាំងបំពងនឹង​ ទឹកប៉េងប៉េាះ', 3.00, 'menu-items/2026-05-21-6a0ef2f87765f.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:17:45');
INSERT INTO `menu_items` VALUES (43, 11, 'សង់ខ្យាល្ពៅ', 'ល្ពៅធម្មជាតិ​ចំហ៊ុយជាមួយពងទា', 3.00, 'menu-items/2026-05-21-6a0ef5ee360fe.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:09:18');
INSERT INTO `menu_items` VALUES (44, 11, 'បង្អែមផ្លែឈើគ្រប់មុខ', 'ផ្លែឈើគ្រប់មុខលាយជាមួយទឹកដោះគោ', 2.50, 'menu-items/2026-05-21-6a0ef71740e39.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:14:15');
INSERT INTO `menu_items` VALUES (45, 11, 'បង្អែមសណ្ដែក', 'សណ្ដែកធម្មជាតិជាមួយនឹង ខ្ទិះដូង', 1.00, 'menu-items/2026-05-21-6a0ef9ba980b1.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:25:30');
INSERT INTO `menu_items` VALUES (46, 11, 'ចេកខ្ទិះ', 'ចេកទំុចំអិនជាមួយខ្ទិះដូង', 1.00, 'menu-items/2026-05-21-6a0efa74f36ca.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:28:36');
INSERT INTO `menu_items` VALUES (47, 11, 'បង្អែមលតខៀវ', 'បង្អែមលតលាយជាមួយស្កឹកតើយ', 1.00, 'menu-items/2026-05-21-6a0efb1496273.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:31:16');
INSERT INTO `menu_items` VALUES (48, 12, 'ទឹកសុទ្ធ', 'ទឹកសុទ្ធ ​Vital', 0.25, 'menu-items/2026-05-21-6a0efd41ae295.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:40:33');
INSERT INTO `menu_items` VALUES (49, 12, 'ស្ត្របឺរីក្រឡុក', 'ផ្លែស្ត្របឺរីស្រស់ក្រឡុកជាមួយទឹកដោះគោ', 2.00, 'menu-items/2026-05-21-6a0efde2cd202.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:43:14');
INSERT INTO `menu_items` VALUES (50, 12, 'ផាសិនសូដា', 'ផ្លែផាសិនស្រស់ក្រឡុកជាមួយសូដា', 2.00, 'menu-items/2026-05-21-6a0efe6fd3999.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:45:35');
INSERT INTO `menu_items` VALUES (51, 12, 'ទឹកដូង', 'ផ្លែដូងស្រស់ធម្មជាតិ', 1.00, 'menu-items/2026-05-21-6a0efeef480c9.jpg', 'available', '2026-04-14 09:53:32', '2026-05-21 19:47:43');
INSERT INTO `menu_items` VALUES (53, 3, 'ស៊ុបចិន (Hot Pot)', 'ឈុតស៊ុបចិនមានប្រហិតសាច់គ្រប់មុខនឹង​ បន្លែ', 15.00, 'menu-items/2026-05-21-6a0ecc0b69198.jpg', 'available', '2026-05-03 15:11:41', '2026-05-21 19:02:40');
INSERT INTO `menu_items` VALUES (55, 3, 'ស៊ុបសាច់គោឆ្នាំងដី', 'ស៊ុបសាច់គោឆ្នាំងដី​ជាមួយប្រហិតនឹង បន្លែ', 15.50, 'menu-items/2026-05-21-6a0edaa294116.jpg', 'available', '2026-05-21 17:12:50', '2026-05-21 19:02:21');
INSERT INTO `menu_items` VALUES (56, 3, 'ស្ងោជ្រក់សាច់មាន់', 'ស្ងោជ្រក់ជាមួយមាន់ស្រែ', 10.00, 'menu-items/2026-05-21-6a0edc2de9488.jpg', 'available', '2026-05-21 17:19:25', '2026-05-21 17:19:25');
INSERT INTO `menu_items` VALUES (57, 6, 'មាន់អាំង', 'មាន់ស្រែអាំង​ជាមួយទឹកជ្រកលក់នឹង បន្លែមួយឈុត', 8.00, 'menu-items/2026-05-21-6a0ede6d907a2.jpg', 'available', '2026-05-21 17:29:01', '2026-05-21 19:14:26');
INSERT INTO `menu_items` VALUES (58, 12, 'ទឹកដោះគោស្រស់', 'ទឹកដោះគោស្រស់ថ្មីៗ', 1.00, 'menu-items/2026-05-21-6a0efff35770f.jpg', 'available', '2026-05-21 19:52:03', '2026-05-21 19:52:03');
INSERT INTO `menu_items` VALUES (59, 3, 'សម្លម្ជូរ', 'សម្លម្ជូរត្រីកណ្ចុះធម្មជាតិ', 3.00, 'menu-items/2026-05-21-6a0f007425059.jpg', 'available', '2026-05-21 19:54:12', '2026-05-21 19:54:12');
INSERT INTO `menu_items` VALUES (60, 3, 'Pizza', NULL, 3.00, 'menu-items/2026-05-21-6a0f1e4bad45d.jpg', 'available', '2026-05-21 22:01:31', '2026-05-21 22:01:31');
INSERT INTO `menu_items` VALUES (61, 14, 'A1', 'aa', 1.00, 'menu-items/2026-05-22-6a0fabf9b2165.jpg', 'available', '2026-05-22 08:06:01', '2026-05-22 08:06:01');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2026_04_11_195422_create_roles_table', 1);
INSERT INTO `migrations` VALUES (5, '2026_04_11_195426_create_categories_table', 1);
INSERT INTO `migrations` VALUES (6, '2026_04_11_195426_create_customers_table', 1);
INSERT INTO `migrations` VALUES (7, '2026_04_11_195427_create_menu_items_table', 1);
INSERT INTO `migrations` VALUES (8, '2026_04_11_195427_create_tables_table', 1);
INSERT INTO `migrations` VALUES (9, '2026_04_11_195428_create_orders_table', 1);
INSERT INTO `migrations` VALUES (10, '2026_04_11_195429_create_settings_table', 1);
INSERT INTO `migrations` VALUES (11, '2026_04_11_195430_add_fields_to_users_table', 1);
INSERT INTO `migrations` VALUES (12, '2026_04_11_195435_create_order_items_table', 1);
INSERT INTO `migrations` VALUES (13, '2026_04_11_195436_create_payments_table', 1);
INSERT INTO `migrations` VALUES (14, '2026_04_12_185811_add_image_to_customers_table', 1);
INSERT INTO `migrations` VALUES (15, '2026_04_12_194512_create_currencies_table', 1);
INSERT INTO `migrations` VALUES (16, '2026_04_13_093520_create_translations_table', 1);
INSERT INTO `migrations` VALUES (17, '2026_04_13_154243_make_state_nullable_in_users_table', 2);
INSERT INTO `migrations` VALUES (18, '2026_04_21_195621_create_permission_tables', 3);
INSERT INTO `migrations` VALUES (19, '2026_05_01_123000_create_database_advanced_objects', 4);
INSERT INTO `migrations` VALUES (20, '2026_04_11_195425_create_permission_tables', 5);
INSERT INTO `migrations` VALUES (21, '2026_05_21_120000_add_payer_fields_to_payments_table', 5);
INSERT INTO `migrations` VALUES (22, '2026_05_21_165415_add_create_by_to_orders_table', 6);
INSERT INTO `migrations` VALUES (23, '2026_05_21_201408_create_kitchen_orders_table', 7);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (6, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` VALUES (6, 'App\\Models\\User', 4);
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 6);
INSERT INTO `model_has_roles` VALUES (9, 'App\\Models\\User', 7);

-- ----------------------------
-- Table structure for order_items
-- ----------------------------
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `menu_item_id` bigint UNSIGNED NULL DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10, 2) NOT NULL,
  `subtotal` decimal(10, 2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `order_items_order_id_foreign`(`order_id` ASC) USING BTREE,
  INDEX `order_items_menu_item_id_foreign`(`menu_item_id` ASC) USING BTREE,
  CONSTRAINT `order_items_menu_item_id_foreign` FOREIGN KEY (`menu_item_id`) REFERENCES `menu_items` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 206 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_items
-- ----------------------------
INSERT INTO `order_items` VALUES (98, 34, NULL, 1, 5.00, 5.00, '2026-05-01 14:52:56', '2026-05-01 14:52:56');
INSERT INTO `order_items` VALUES (105, 36, NULL, 2, 2.50, 5.00, '2026-05-21 13:00:17', '2026-05-21 13:00:17');
INSERT INTO `order_items` VALUES (106, 36, NULL, 1, 3.00, 3.00, '2026-05-21 13:00:17', '2026-05-21 13:00:17');
INSERT INTO `order_items` VALUES (107, 36, 43, 1, 2.00, 2.00, '2026-05-21 13:00:17', '2026-05-21 13:00:17');
INSERT INTO `order_items` VALUES (108, 36, 23, 1, 12.00, 12.00, '2026-05-21 13:00:17', '2026-05-21 13:00:17');
INSERT INTO `order_items` VALUES (111, 35, NULL, 2, 2.50, 5.00, '2026-05-21 13:01:09', '2026-05-21 13:01:09');
INSERT INTO `order_items` VALUES (112, 35, 11, 1, 3.00, 3.00, '2026-05-21 13:01:09', '2026-05-21 13:01:09');
INSERT INTO `order_items` VALUES (113, 35, NULL, 5, 4.00, 20.00, '2026-05-21 13:01:09', '2026-05-21 13:01:09');
INSERT INTO `order_items` VALUES (118, 37, NULL, 1, 4.00, 4.00, '2026-05-21 13:43:12', '2026-05-21 13:43:12');
INSERT INTO `order_items` VALUES (119, 37, NULL, 1, 5.00, 5.00, '2026-05-21 13:43:12', '2026-05-21 13:43:12');
INSERT INTO `order_items` VALUES (131, 43, 15, 1, 3.50, 3.50, '2026-05-21 13:56:50', '2026-05-21 13:56:50');
INSERT INTO `order_items` VALUES (132, 44, NULL, 1, 6.50, 6.50, '2026-05-21 16:49:39', '2026-05-21 16:49:39');
INSERT INTO `order_items` VALUES (133, 44, 11, 1, 1.50, 1.50, '2026-05-21 16:49:39', '2026-05-21 16:49:39');
INSERT INTO `order_items` VALUES (147, 46, 12, 1, 4.50, 4.50, '2026-05-21 17:27:03', '2026-05-21 17:27:03');
INSERT INTO `order_items` VALUES (148, 47, 12, 1, 4.50, 4.50, '2026-05-21 17:29:09', '2026-05-21 17:29:09');
INSERT INTO `order_items` VALUES (150, 48, 23, 1, 1.20, 1.20, '2026-05-21 18:39:55', '2026-05-21 18:39:55');
INSERT INTO `order_items` VALUES (151, 48, 12, 1, 4.50, 4.50, '2026-05-21 18:39:55', '2026-05-21 18:39:55');
INSERT INTO `order_items` VALUES (152, 49, 25, 1, 6.50, 6.50, '2026-05-21 18:49:15', '2026-05-21 18:49:15');
INSERT INTO `order_items` VALUES (153, 49, 24, 1, 7.50, 7.50, '2026-05-21 18:49:15', '2026-05-21 18:49:15');
INSERT INTO `order_items` VALUES (154, 49, 10, 1, 1.75, 1.75, '2026-05-21 18:49:15', '2026-05-21 18:49:15');
INSERT INTO `order_items` VALUES (155, 49, 53, 1, 15.00, 15.00, '2026-05-21 18:49:15', '2026-05-21 18:49:15');
INSERT INTO `order_items` VALUES (156, 45, 11, 1, 1.50, 1.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (157, 45, 12, 1, 4.50, 4.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (158, 45, 13, 1, 2.50, 2.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (159, 45, 14, 1, 1.50, 1.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (160, 45, 15, 1, 1.50, 1.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (161, 45, 16, 1, 1.50, 1.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (162, 45, 17, 1, 3.50, 3.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (163, 45, 18, 1, 2.50, 2.50, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (164, 45, 22, 1, 5.00, 5.00, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (165, 45, 23, 1, 1.20, 1.20, '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `order_items` VALUES (166, 50, 12, 1, 4.50, 4.50, '2026-05-21 19:39:47', '2026-05-21 19:39:47');
INSERT INTO `order_items` VALUES (167, 51, 12, 1, 4.50, 4.50, '2026-05-21 19:40:57', '2026-05-21 19:40:57');
INSERT INTO `order_items` VALUES (168, 52, 12, 1, 4.50, 4.50, '2026-05-21 19:45:23', '2026-05-21 19:45:23');
INSERT INTO `order_items` VALUES (169, 53, 11, 1, 1.50, 1.50, '2026-05-21 19:48:29', '2026-05-21 19:48:29');
INSERT INTO `order_items` VALUES (170, 54, 10, 1, 1.75, 1.75, '2026-05-21 19:54:23', '2026-05-21 19:54:23');
INSERT INTO `order_items` VALUES (171, 55, 12, 1, 4.50, 4.50, '2026-05-21 19:57:13', '2026-05-21 19:57:13');
INSERT INTO `order_items` VALUES (172, 56, 12, 1, 4.50, 4.50, '2026-05-21 20:00:41', '2026-05-21 20:00:41');
INSERT INTO `order_items` VALUES (173, 57, 12, 1, 4.50, 4.50, '2026-05-21 20:08:20', '2026-05-21 20:08:20');
INSERT INTO `order_items` VALUES (177, 58, 12, 1, 4.50, 4.50, '2026-05-21 21:04:20', '2026-05-21 21:04:20');
INSERT INTO `order_items` VALUES (178, 58, 16, 1, 1.50, 1.50, '2026-05-21 21:04:20', '2026-05-21 21:04:20');
INSERT INTO `order_items` VALUES (179, 58, 11, 1, 1.50, 1.50, '2026-05-21 21:04:20', '2026-05-21 21:04:20');
INSERT INTO `order_items` VALUES (180, 59, 12, 2, 4.50, 9.00, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `order_items` VALUES (181, 59, 11, 2, 1.50, 3.00, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `order_items` VALUES (182, 59, 10, 2, 1.75, 3.50, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `order_items` VALUES (183, 59, 2, 2, 5.00, 10.00, '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `order_items` VALUES (185, 60, 12, 2, 4.50, 9.00, '2026-05-21 21:53:28', '2026-05-21 21:53:28');
INSERT INTO `order_items` VALUES (186, 61, 56, 1, 10.00, 10.00, '2026-05-21 23:49:42', '2026-05-21 23:49:42');
INSERT INTO `order_items` VALUES (187, 61, 10, 1, 1.75, 1.75, '2026-05-21 23:49:42', '2026-05-21 23:49:42');
INSERT INTO `order_items` VALUES (188, 62, 15, 1, 1.50, 1.50, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `order_items` VALUES (189, 62, 40, 1, 2.00, 2.00, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `order_items` VALUES (190, 62, 16, 1, 1.50, 1.50, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `order_items` VALUES (191, 62, 12, 1, 4.50, 4.50, '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `order_items` VALUES (193, 63, 12, 1, 4.50, 4.50, '2026-05-22 06:43:58', '2026-05-22 06:43:58');
INSERT INTO `order_items` VALUES (194, 63, 10, 1, 1.75, 1.75, '2026-05-22 06:43:58', '2026-05-22 06:43:58');
INSERT INTO `order_items` VALUES (195, 64, 2, 1, 5.00, 5.00, '2026-05-22 08:07:47', '2026-05-22 08:07:47');
INSERT INTO `order_items` VALUES (196, 65, 11, 1, 1.50, 1.50, '2026-05-22 08:08:35', '2026-05-22 08:08:35');
INSERT INTO `order_items` VALUES (200, 66, 10, 1, 1.75, 1.75, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `order_items` VALUES (201, 66, 2, 1, 5.00, 5.00, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `order_items` VALUES (202, 66, 11, 1, 1.50, 1.50, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `order_items` VALUES (203, 66, 61, 1, 1.00, 1.00, '2026-05-22 08:16:56', '2026-05-22 08:16:56');
INSERT INTO `order_items` VALUES (204, 67, 22, 1, 5.00, 5.00, '2026-05-26 20:24:30', '2026-05-26 20:24:30');
INSERT INTO `order_items` VALUES (205, 67, 12, 1, 4.50, 4.50, '2026-05-26 20:24:30', '2026-05-26 20:24:30');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint UNSIGNED NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `table_id` bigint UNSIGNED NULL DEFAULT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `subtotal` decimal(10, 2) NOT NULL DEFAULT 0.00,
  `tax` decimal(10, 2) NOT NULL DEFAULT 0.00,
  `total_amount` decimal(10, 2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `create_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `orders_order_no_unique`(`order_no` ASC) USING BTREE,
  INDEX `orders_customer_id_foreign`(`customer_id` ASC) USING BTREE,
  INDEX `orders_user_id_foreign`(`user_id` ASC) USING BTREE,
  INDEX `orders_table_id_foreign`(`table_id` ASC) USING BTREE,
  CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `orders_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 68 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (34, 'ORD-20260501-0001', 'takeaway', NULL, NULL, NULL, NULL, 'completed', 5.00, 0.50, 5.50, '2026-05-01 14:52:56', '2026-05-01 14:53:18', NULL, NULL);
INSERT INTO `orders` VALUES (35, 'ORD-20260501-0002', 'takeaway', NULL, 1, NULL, NULL, 'ready', 28.00, 28.00, 56.00, '2026-05-01 15:11:54', '2026-05-21 13:01:09', NULL, NULL);
INSERT INTO `orders` VALUES (36, 'ORD-20260501-0003', 'takeaway', NULL, 1, NULL, NULL, 'cancelled', 22.00, 22.00, 44.00, '2026-05-01 15:22:39', '2026-05-21 13:00:17', NULL, NULL);
INSERT INTO `orders` VALUES (37, 'ORD-20260521-0001', 'takeaway', NULL, 4, NULL, NULL, 'cancelled', 9.00, 0.90, 9.90, '2026-05-21 13:42:37', '2026-05-21 13:43:12', NULL, NULL);
INSERT INTO `orders` VALUES (43, 'ORD-20260521-0002', 'takeaway', NULL, 4, NULL, NULL, 'completed', 3.50, 0.35, 3.85, '2026-05-21 13:56:50', '2026-05-21 13:57:56', NULL, NULL);
INSERT INTO `orders` VALUES (44, 'ORD-20260521-0003', 'takeaway', NULL, 4, NULL, NULL, 'cancelled', 8.00, 0.80, 8.80, '2026-05-21 16:49:39', '2026-05-21 16:49:39', NULL, NULL);
INSERT INTO `orders` VALUES (45, 'ORD-20260521-0004', 'takeaway', NULL, 4, NULL, NULL, 'completed', 25.20, 2.52, 27.72, '2026-05-21 16:50:26', '2026-05-21 19:22:39', NULL, NULL);
INSERT INTO `orders` VALUES (46, 'ORD-20260521-0005', 'takeaway', NULL, 4, NULL, NULL, 'ready', 4.50, 0.45, 4.95, '2026-05-21 17:27:03', '2026-05-21 17:35:51', NULL, '4');
INSERT INTO `orders` VALUES (47, 'ORD-20260521-0006', 'takeaway', NULL, 6, NULL, NULL, 'preparing', 4.50, 0.45, 4.95, '2026-05-21 17:29:09', '2026-05-21 17:34:37', NULL, '6');
INSERT INTO `orders` VALUES (48, 'ORD-20260521-0007', 'takeaway', NULL, 4, NULL, NULL, 'ready', 5.70, 0.57, 6.27, '2026-05-21 18:39:41', '2026-05-21 20:00:05', NULL, '4');
INSERT INTO `orders` VALUES (49, 'ORD-20260521-0008', 'takeaway', NULL, 4, NULL, NULL, 'completed', 30.75, 3.08, 33.83, '2026-05-21 18:49:15', '2026-05-21 18:49:15', NULL, '4');
INSERT INTO `orders` VALUES (50, 'ORD-20260521-0009', 'takeaway', NULL, 4, NULL, NULL, 'completed', 4.50, 0.45, 4.95, '2026-05-21 19:39:47', '2026-05-21 19:39:47', NULL, '4');
INSERT INTO `orders` VALUES (51, 'ORD-20260521-0010', 'takeaway', NULL, 4, NULL, NULL, 'completed', 4.50, 0.45, 4.95, '2026-05-21 19:40:57', '2026-05-21 19:40:57', NULL, '4');
INSERT INTO `orders` VALUES (52, 'ORD-20260521-0011', 'takeaway', NULL, 4, NULL, NULL, 'completed', 4.50, 0.45, 4.95, '2026-05-21 19:45:23', '2026-05-21 19:45:23', NULL, '4');
INSERT INTO `orders` VALUES (53, 'ORD-20260521-0012', 'takeaway', NULL, 4, NULL, NULL, 'completed', 1.50, 0.15, 1.65, '2026-05-21 19:48:29', '2026-05-21 19:48:29', NULL, '4');
INSERT INTO `orders` VALUES (54, 'ORD-20260521-0013', 'takeaway', NULL, 4, NULL, NULL, 'completed', 1.75, 0.18, 1.93, '2026-05-21 19:54:23', '2026-05-21 19:54:23', NULL, '4');
INSERT INTO `orders` VALUES (55, 'ORD-20260521-0014', 'takeaway', NULL, 4, NULL, NULL, 'completed', 4.50, 0.45, 4.95, '2026-05-21 19:57:13', '2026-05-21 19:57:13', NULL, '4');
INSERT INTO `orders` VALUES (56, 'ORD-20260521-0015', 'takeaway', NULL, 4, NULL, NULL, 'completed', 4.50, 0.45, 4.95, '2026-05-21 20:00:41', '2026-05-21 20:00:41', NULL, '4');
INSERT INTO `orders` VALUES (57, 'ORD-20260521-0016', 'takeaway', NULL, 4, NULL, NULL, 'completed', 4.50, 0.45, 4.95, '2026-05-21 20:08:20', '2026-05-21 20:08:20', NULL, '4');
INSERT INTO `orders` VALUES (58, 'ORD-20260521-0017', 'takeaway', NULL, 4, NULL, NULL, 'preparing', 7.50, 0.75, 8.25, '2026-05-21 20:24:45', '2026-05-21 21:08:00', NULL, '4');
INSERT INTO `orders` VALUES (59, 'ORD-20260521-0018', 'takeaway', NULL, 4, NULL, NULL, 'completed', 25.50, 2.55, 28.05, '2026-05-21 21:07:47', '2026-05-21 23:26:47', '2026-05-21 23:26:47', '4');
INSERT INTO `orders` VALUES (60, 'ORD-20260521-0019', 'takeaway', NULL, 4, NULL, NULL, 'ready', 9.00, 0.90, 9.90, '2026-05-21 21:50:18', '2026-05-21 21:53:28', NULL, '4');
INSERT INTO `orders` VALUES (61, 'ORD-20260521-0020', 'takeaway', NULL, 4, NULL, NULL, 'completed', 11.75, 1.18, 12.93, '2026-05-21 23:49:42', '2026-05-21 23:49:42', NULL, '4');
INSERT INTO `orders` VALUES (62, 'ORD-20260522-0001', 'takeaway', NULL, 4, NULL, NULL, 'completed', 9.50, 0.95, 10.45, '2026-05-22 06:35:26', '2026-05-22 06:35:26', NULL, '4');
INSERT INTO `orders` VALUES (63, 'ORD-20260522-0002', 'dine_in', NULL, 4, 12, NULL, 'cancelled', 6.25, 0.63, 6.88, '2026-05-22 06:43:48', '2026-05-22 06:43:58', NULL, '4');
INSERT INTO `orders` VALUES (64, 'ORD-20260522-0003', 'takeaway', NULL, 4, NULL, NULL, 'cancelled', 5.00, 0.50, 5.50, '2026-05-22 08:07:47', '2026-05-22 08:07:47', NULL, '4');
INSERT INTO `orders` VALUES (65, 'ORD-20260522-0004', 'dine_in', NULL, 4, 16, NULL, 'completed', 1.50, 0.15, 1.65, '2026-05-22 08:08:35', '2026-05-22 08:09:57', NULL, '4');
INSERT INTO `orders` VALUES (66, 'ORD-20260522-0005', 'dine_in', NULL, 4, 21, NULL, 'ready', 9.25, 0.93, 10.18, '2026-05-22 08:15:11', '2026-05-22 08:16:56', NULL, '4');
INSERT INTO `orders` VALUES (67, 'ORD-20260526-0001', 'takeaway', NULL, 4, NULL, NULL, 'completed', 9.50, 0.95, 10.45, '2026-05-26 20:24:30', '2026-05-26 20:24:50', NULL, '4');

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
INSERT INTO `password_reset_tokens` VALUES ('admin@example.com', '$2y$12$5QYOHmoXD5kaBWMxgP6Kd.SJ9W2vi77Sif/cNmjiFoz.YOUpMe0Wa', '2026-04-13 16:01:29');
INSERT INTO `password_reset_tokens` VALUES ('admin@ros.com', '$2y$12$BoD72W7UtoPEKDMqSlg1M.itv9Afc/qfUo.yLQxGsl/1cQb/dJEle', '2026-05-21 15:50:59');
INSERT INTO `password_reset_tokens` VALUES ('brohour00044@gmail.com', '$2y$12$Bf2ZqrIzacnzqT0GWgGe1eiksJaPwetrdW9B5RR1lH0Dd956ss9Aq', '2026-04-13 16:08:55');

-- ----------------------------
-- Table structure for payments
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `payment_method` enum('cash','card','qr','khqr') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `total_amount` decimal(10, 2) NOT NULL,
  `paid_amount` decimal(10, 2) NOT NULL,
  `change_amount` decimal(10, 2) NOT NULL,
  `status` enum('pending','paid','failed','refunded') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'paid',
  `payer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `payer_account` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `khqr_md5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `khqr_string` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `khqr_transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `khqr_expires_at` timestamp NULL DEFAULT NULL,
  `paid_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `payments_order_id_foreign`(`order_id` ASC) USING BTREE,
  CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of payments
-- ----------------------------
INSERT INTO `payments` VALUES (16, 34, 'cash', 5.50, 5.50, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-01 14:53:18', '2026-05-01 14:53:18', '2026-05-01 14:53:18');
INSERT INTO `payments` VALUES (17, 43, 'cash', 3.85, 3.85, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 13:57:56', '2026-05-21 13:57:56', '2026-05-21 13:57:56');
INSERT INTO `payments` VALUES (18, 49, 'qr', 33.83, 33.83, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 18:49:15', '2026-05-21 18:49:15', '2026-05-21 18:49:15');
INSERT INTO `payments` VALUES (19, 45, 'cash', 27.72, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:22:39', '2026-05-21 19:22:39', '2026-05-21 19:22:39');
INSERT INTO `payments` VALUES (20, 50, 'card', 4.95, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:39:47', '2026-05-21 19:39:47', '2026-05-21 19:39:47');
INSERT INTO `payments` VALUES (21, 51, 'card', 4.95, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:40:57', '2026-05-21 19:40:57', '2026-05-21 19:40:57');
INSERT INTO `payments` VALUES (22, 52, 'cash', 4.95, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:45:23', '2026-05-21 19:45:23', '2026-05-21 19:45:23');
INSERT INTO `payments` VALUES (23, 53, 'cash', 1.65, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:48:29', '2026-05-21 19:48:29', '2026-05-21 19:48:29');
INSERT INTO `payments` VALUES (24, 54, 'cash', 1.93, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:54:23', '2026-05-21 19:54:23', '2026-05-21 19:54:23');
INSERT INTO `payments` VALUES (25, 55, 'cash', 4.95, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 19:57:13', '2026-05-21 19:57:13', '2026-05-21 19:57:13');
INSERT INTO `payments` VALUES (26, 56, 'cash', 4.95, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 20:00:41', '2026-05-21 20:00:41', '2026-05-21 20:00:41');
INSERT INTO `payments` VALUES (27, 57, 'card', 4.95, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 20:08:20', '2026-05-21 20:08:20', '2026-05-21 20:08:20');
INSERT INTO `payments` VALUES (28, 58, 'cash', 8.25, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 21:04:20', '2026-05-21 20:24:45', '2026-05-21 21:04:20');
INSERT INTO `payments` VALUES (29, 59, 'cash', 28.05, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 21:07:47', '2026-05-21 21:07:47', '2026-05-21 21:07:47');
INSERT INTO `payments` VALUES (30, 61, 'cash', 12.93, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-21 23:49:42', '2026-05-21 23:49:42', '2026-05-21 23:49:42');
INSERT INTO `payments` VALUES (31, 62, 'cash', 10.45, 0.00, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-22 06:35:26', '2026-05-22 06:35:26', '2026-05-22 06:35:26');
INSERT INTO `payments` VALUES (32, 65, 'cash', 1.65, 1.65, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-22 08:09:57', '2026-05-22 08:09:57', '2026-05-22 08:09:57');
INSERT INTO `payments` VALUES (33, 67, 'cash', 10.45, 10.45, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-26 20:24:45', '2026-05-26 20:24:45', '2026-05-26 20:24:45');
INSERT INTO `payments` VALUES (34, 67, 'cash', 10.45, 10.45, 0.00, 'paid', NULL, NULL, NULL, NULL, NULL, NULL, '2026-05-26 20:24:50', '2026-05-26 20:24:50', '2026-05-26 20:24:50');

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'view-orders', 'web', '2026-04-21 20:00:03', '2026-04-21 20:00:03');
INSERT INTO `permissions` VALUES (2, 'create-orders', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (3, 'edit-orders', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (4, 'delete-orders', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (5, 'void-orders', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (6, 'view-menu', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (7, 'create-menu', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (8, 'edit-menu', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (9, 'delete-menu', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (10, 'view-tables', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (11, 'manage-tables', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (12, 'view-payments', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (13, 'refund-payments', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (14, 'view-staff', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (15, 'manage-staff', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (16, 'manage-roles', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (17, 'manage-settings', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (18, 'manage-translations', 'web', '2026-04-21 20:24:45', '2026-04-21 20:24:45');
INSERT INTO `permissions` VALUES (19, 'view-reports', 'web', '2026-04-21 20:37:02', '2026-04-21 20:37:02');
INSERT INTO `permissions` VALUES (20, 'view-roles', 'web', '2026-04-21 20:38:35', '2026-04-21 20:38:35');
INSERT INTO `permissions` VALUES (21, 'create-roles', 'web', '2026-04-21 20:38:35', '2026-04-21 20:38:35');
INSERT INTO `permissions` VALUES (22, 'edit-roles', 'web', '2026-04-21 20:38:35', '2026-04-21 20:38:35');
INSERT INTO `permissions` VALUES (23, 'delete-roles', 'web', '2026-04-21 20:38:35', '2026-04-21 20:38:35');
INSERT INTO `permissions` VALUES (24, 'view-users', 'web', '2026-05-21 15:27:42', '2026-05-21 15:27:42');
INSERT INTO `permissions` VALUES (25, 'create-users', 'web', '2026-05-21 15:27:42', '2026-05-21 15:27:42');
INSERT INTO `permissions` VALUES (26, 'edit-users', 'web', '2026-05-21 15:27:42', '2026-05-21 15:27:42');
INSERT INTO `permissions` VALUES (27, 'delete-users', 'web', '2026-05-21 15:27:42', '2026-05-21 15:27:42');
INSERT INTO `permissions` VALUES (28, 'create-tables', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (29, 'edit-tables', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (30, 'delete-tables', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (31, 'view-customers', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (32, 'create-customers', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (33, 'edit-customers', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (34, 'delete-customers', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (35, 'manage-backups', 'web', '2026-05-21 15:37:45', '2026-05-21 15:37:45');
INSERT INTO `permissions` VALUES (36, 'view-kitchen', 'web', '2026-05-21 17:42:35', '2026-05-21 17:42:35');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (5, 1);
INSERT INTO `role_has_permissions` VALUES (6, 1);
INSERT INTO `role_has_permissions` VALUES (7, 1);
INSERT INTO `role_has_permissions` VALUES (8, 1);
INSERT INTO `role_has_permissions` VALUES (9, 1);
INSERT INTO `role_has_permissions` VALUES (10, 1);
INSERT INTO `role_has_permissions` VALUES (11, 1);
INSERT INTO `role_has_permissions` VALUES (12, 1);
INSERT INTO `role_has_permissions` VALUES (13, 1);
INSERT INTO `role_has_permissions` VALUES (16, 1);
INSERT INTO `role_has_permissions` VALUES (17, 1);
INSERT INTO `role_has_permissions` VALUES (20, 1);
INSERT INTO `role_has_permissions` VALUES (21, 1);
INSERT INTO `role_has_permissions` VALUES (22, 1);
INSERT INTO `role_has_permissions` VALUES (23, 1);
INSERT INTO `role_has_permissions` VALUES (1, 6);
INSERT INTO `role_has_permissions` VALUES (2, 6);
INSERT INTO `role_has_permissions` VALUES (3, 6);
INSERT INTO `role_has_permissions` VALUES (4, 6);
INSERT INTO `role_has_permissions` VALUES (5, 6);
INSERT INTO `role_has_permissions` VALUES (6, 6);
INSERT INTO `role_has_permissions` VALUES (7, 6);
INSERT INTO `role_has_permissions` VALUES (8, 6);
INSERT INTO `role_has_permissions` VALUES (9, 6);
INSERT INTO `role_has_permissions` VALUES (10, 6);
INSERT INTO `role_has_permissions` VALUES (11, 6);
INSERT INTO `role_has_permissions` VALUES (12, 6);
INSERT INTO `role_has_permissions` VALUES (13, 6);
INSERT INTO `role_has_permissions` VALUES (16, 6);
INSERT INTO `role_has_permissions` VALUES (17, 6);
INSERT INTO `role_has_permissions` VALUES (18, 6);
INSERT INTO `role_has_permissions` VALUES (19, 6);
INSERT INTO `role_has_permissions` VALUES (20, 6);
INSERT INTO `role_has_permissions` VALUES (21, 6);
INSERT INTO `role_has_permissions` VALUES (22, 6);
INSERT INTO `role_has_permissions` VALUES (23, 6);
INSERT INTO `role_has_permissions` VALUES (24, 6);
INSERT INTO `role_has_permissions` VALUES (25, 6);
INSERT INTO `role_has_permissions` VALUES (26, 6);
INSERT INTO `role_has_permissions` VALUES (27, 6);
INSERT INTO `role_has_permissions` VALUES (28, 6);
INSERT INTO `role_has_permissions` VALUES (29, 6);
INSERT INTO `role_has_permissions` VALUES (30, 6);
INSERT INTO `role_has_permissions` VALUES (31, 6);
INSERT INTO `role_has_permissions` VALUES (32, 6);
INSERT INTO `role_has_permissions` VALUES (33, 6);
INSERT INTO `role_has_permissions` VALUES (34, 6);
INSERT INTO `role_has_permissions` VALUES (35, 6);
INSERT INTO `role_has_permissions` VALUES (36, 6);
INSERT INTO `role_has_permissions` VALUES (1, 9);
INSERT INTO `role_has_permissions` VALUES (36, 9);
INSERT INTO `role_has_permissions` VALUES (1, 10);
INSERT INTO `role_has_permissions` VALUES (2, 10);
INSERT INTO `role_has_permissions` VALUES (3, 10);
INSERT INTO `role_has_permissions` VALUES (4, 10);
INSERT INTO `role_has_permissions` VALUES (5, 10);
INSERT INTO `role_has_permissions` VALUES (10, 10);
INSERT INTO `role_has_permissions` VALUES (11, 10);
INSERT INTO `role_has_permissions` VALUES (28, 10);
INSERT INTO `role_has_permissions` VALUES (29, 10);
INSERT INTO `role_has_permissions` VALUES (30, 10);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_slug_unique`(`slug` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', 'admin', 'System Administrator', '2026-04-13 12:00:01', '2026-04-13 12:00:01', 'web');
INSERT INTO `roles` VALUES (6, 'Administrator', 'administrator', 'Full System Access', '2026-04-21 20:24:45', '2026-04-21 20:24:45', 'web');
INSERT INTO `roles` VALUES (9, 'Kitchen', 'kitchen', NULL, '2026-05-21 21:56:55', '2026-05-21 21:56:55', 'web');
INSERT INTO `roles` VALUES (10, 'Cashier', 'cashier', NULL, '2026-05-22 08:13:01', '2026-05-22 08:13:01', 'web');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('T5qFHoPnTstFePUaKDsZvK8Lbh7KC9Pbjvam9yvv', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.121.0 Chrome/142.0.7444.265 Electron/39.8.8 Safari/537.36', 'eyJfdG9rZW4iOiJ4WGZRVUZYc0VMMmxIOVB2ZTlVWXNJVloyNUdxQ29GcnJWZ3hnVVFzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9yZXBvcnRzXC9pbmNvbWUiLCJyb3V0ZSI6InJlcG9ydHMuaW5jb21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwidXJsIjpbXSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjQsImF1dGgiOnsicGFzc3dvcmRfY29uZmlybWVkX2F0IjoxNzc5ODAxNDY0fSwibG9jYWxlIjoia2gifQ==', 1779802047);

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `settings_key_unique`(`key` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'business_name', 'រំដួល', '2026-04-13 12:00:02', '2026-05-21 23:44:59');
INSERT INTO `settings` VALUES (2, 'business_email', 'info@Romdoul.com', '2026-04-13 12:00:02', '2026-05-21 23:44:06');
INSERT INTO `settings` VALUES (3, 'business_phone', '+855 012 345 678', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `settings` VALUES (4, 'business_address', 'Siem Reap, Cambodia', '2026-04-13 12:00:02', '2026-05-21 23:44:06');
INSERT INTO `settings` VALUES (5, 'tax_percentage', '10', '2026-04-13 12:00:02', '2026-05-21 13:35:20');
INSERT INTO `settings` VALUES (6, 'currency_symbol', '$', '2026-04-13 12:00:02', '2026-05-22 07:24:10');
INSERT INTO `settings` VALUES (7, 'exchange_rate', '4100', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `settings` VALUES (8, 'business_logo', 'business/2026-05-21-6a0f362be2f0b.jpg', '2026-04-13 12:00:02', '2026-05-21 23:43:23');
INSERT INTO `settings` VALUES (9, 'business_favicon', 'business/2026-05-21-6a0f362be4601.jpg', '2026-04-13 12:00:02', '2026-05-21 23:43:23');
INSERT INTO `settings` VALUES (10, 'currency_exchange_rate', '4100', '2026-04-13 12:13:36', '2026-05-22 07:35:12');
INSERT INTO `settings` VALUES (11, 'enable_reservations', '0', '2026-04-13 12:13:36', '2026-04-13 12:13:36');
INSERT INTO `settings` VALUES (12, 'auto_print_receipt', '0', '2026-04-13 12:13:36', '2026-04-13 12:13:36');
INSERT INTO `settings` VALUES (13, 'backup_schedule_enabled', '1', '2026-05-21 22:28:06', '2026-05-22 02:36:12');
INSERT INTO `settings` VALUES (14, 'backup_schedule_time', '02:59', '2026-05-21 22:29:37', '2026-05-22 02:58:30');
INSERT INTO `settings` VALUES (15, 'backup_disk_path', 'D:\\Laravel', '2026-05-21 23:37:19', '2026-05-21 23:56:07');

-- ----------------------------
-- Table structure for tables
-- ----------------------------
DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int NOT NULL DEFAULT 1,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tables
-- ----------------------------
INSERT INTO `tables` VALUES (11, 'Regular 1', 4, 'Available', '2026-05-21 20:01:21', '2026-05-21 20:01:21');
INSERT INTO `tables` VALUES (12, 'Regular 2', 4, 'occupied', '2026-05-21 20:01:34', '2026-05-22 06:43:58');
INSERT INTO `tables` VALUES (13, 'Regular 3', 4, 'Reserved', '2026-05-21 20:02:01', '2026-05-21 20:02:01');
INSERT INTO `tables` VALUES (14, 'Regular 4', 4, 'Taken', '2026-05-21 20:02:20', '2026-05-21 20:02:20');
INSERT INTO `tables` VALUES (15, 'Regular 5', 4, 'Taken', '2026-05-21 20:02:50', '2026-05-21 20:02:50');
INSERT INTO `tables` VALUES (16, 'Regular 6', 4, 'occupied', '2026-05-21 20:03:05', '2026-05-22 08:08:35');
INSERT INTO `tables` VALUES (17, 'Regular 7', 4, 'Reserved', '2026-05-21 20:03:25', '2026-05-21 20:03:25');
INSERT INTO `tables` VALUES (18, 'Regular 8', 2, 'Reserved', '2026-05-21 20:03:57', '2026-05-21 20:03:57');
INSERT INTO `tables` VALUES (19, 'Regular 9', 2, 'Reserved', '2026-05-21 20:04:13', '2026-05-21 20:04:13');
INSERT INTO `tables` VALUES (20, 'Regular 10', 2, 'Available', '2026-05-21 20:04:34', '2026-05-21 20:04:34');
INSERT INTO `tables` VALUES (21, 'VIP 1', 2, 'occupied', '2026-05-21 20:05:08', '2026-05-22 08:16:56');
INSERT INTO `tables` VALUES (22, 'VIP 2', 2, 'Taken', '2026-05-21 20:05:26', '2026-05-21 20:05:26');
INSERT INTO `tables` VALUES (23, 'VIP 3', 4, 'Reserved', '2026-05-21 20:05:50', '2026-05-21 20:05:50');
INSERT INTO `tables` VALUES (24, 'VIP 4', 2, 'Available', '2026-05-21 20:06:04', '2026-05-21 20:06:04');
INSERT INTO `tables` VALUES (25, 'VIP 5', 4, 'Reserved', '2026-05-21 20:06:29', '2026-05-21 20:06:29');
INSERT INTO `tables` VALUES (26, 'VIP 6', 2, 'Taken', '2026-05-21 20:06:46', '2026-05-21 20:06:46');

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'general',
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `kh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `translations_key_unique`(`key` ASC) USING BTREE,
  INDEX `translations_group_index`(`group` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 734 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES (1, 'general', 'Dashboard', 'Dashboard', 'ផ្ទាំងគ្រប់គ្រង', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (2, 'general', 'Dashboard Overview', 'Dashboard Overview', 'ទិដ្ឋភាពទូទៅនៃផ្ទាំងគ្រប់គ្រង', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (3, 'general', 'Categories', 'Categories', 'ប្រភេទ', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (4, 'general', 'Menu Items', 'Menu Items', 'មុខម្ហូប', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (5, 'general', 'Tables', 'Tables', 'តារាងតុ', '2026-04-13 12:00:02', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (6, 'general', 'Orders', 'Orders', 'ការបញ្ជាទិញ', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (7, 'general', 'Payments', 'Payments', 'ការបង់ប្រាក់', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (8, 'general', 'Kitchen KDS', 'Kitchen KDS', 'ផ្ទះបាយ', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (9, 'general', 'Income Report', 'Income Report', 'របាយការណ៍ចំណូល', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (10, 'general', 'Profile', 'Profile', 'ប្រវត្តិរូប', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (11, 'general', 'Staff Management', 'Staff Management', 'ការគ្រប់គ្រងបុគ្គលិក', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (12, 'general', 'Roles', 'Roles', 'តួនាទី', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (13, 'general', 'Currency Symbol', 'Currency Symbol', 'រូបិយប័ណ្ណ', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (14, 'general', 'Translations', 'Translations', 'ការបកប្រែ', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (15, 'general', 'Settings', 'Settings', 'ការកំណត់', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (16, 'general', 'Logout', 'Logout', 'ចាកចេញ', '2026-04-13 12:00:02', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (17, 'reports', 'Business Intelligence', 'Business Intelligence', 'វិភាគអាជីវកម្ម', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (18, 'reports', 'Financial Income & Analytics Report', 'Financial Income & Analytics Report', 'របាយការណ៍ចំណូលហិរញ្ញវត្ថុ និងការវិភាគ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (19, 'reports', 'Export PDF', 'Export PDF', 'ទាញយកជា PDF', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (20, 'reports', 'Export Excel', 'Export Excel', 'ទាញយកជា Excel', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (21, 'reports', 'Start Date', 'Start Date', 'ថ្ងៃចាប់ផ្តើម', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (22, 'reports', 'End Date', 'End Date', 'ថ្ងៃបញ្ចប់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (23, 'general', 'Update', 'Update', 'ធ្វើបច្ចុប្បន្នភាព', '2026-04-13 12:00:02', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (24, 'reports', 'Reset Filters', 'Reset Filters', 'កំណត់ត្រឡប់ដើម', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (25, 'reports', 'Total Gross Income', 'Total Gross Income', 'ចំណូលសរុប', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (26, 'reports', 'From', 'From', 'ពី', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (27, 'reports', 'transactions', 'transactions', 'ប្រតិបត្តិការ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (28, 'reports', 'Average Ticket', 'Average Ticket', 'មធ្យមភាគក្នុងមួយការកុម្ម៉ង់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (29, 'reports', 'Average spend per order', 'Average spend per order', 'ការចំណាយមធ្យមក្នុងមួយការកុម្ម៉ង់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (30, 'reports', 'Cash Ratio', 'Cash Ratio', 'សមាមាត្រសាច់ប្រាក់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (31, 'reports', 'Income Trend Analysis', 'Income Trend Analysis', 'ការវិភាគនិន្នាការចំណូល', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (32, 'reports', '12-Month Performance Overview', '12-Month Performance Overview', 'ទិដ្ឋភាពទូទៅនៃប្រតិបត្តិការ ១២ខែ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (33, 'reports', '12-Month Performance Summary', '12-Month Performance Summary', 'សេចក្តីសង្ខេបនៃប្រតិបត្តិការ ១២ខែ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (34, 'reports', 'Historical revenue ledger', 'Historical revenue ledger', 'បញ្ជីចំណូលប្រវត្តិសាស្ត្រ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (35, 'reports', 'Today', 'Today', 'ថ្ងៃនេះ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (36, 'reports', 'Weekly', 'Weekly', 'សប្តាហ៍នេះ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (37, 'reports', 'This Month', 'This Month', 'ខែនេះ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (38, 'reports', 'Month', 'Month', 'ខែ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (39, 'reports', 'Custom Range', 'Custom Range', 'កំណត់ចន្លោះកាលបរិច្ឆេទ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (40, 'reports', 'Custom', 'Custom', 'កំណត់ផ្ទាល់ខ្លួន', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (41, 'reports', 'Daily revenue fluctuations over selected period', 'Daily revenue fluctuations over selected period', 'ការប្រែប្រួលចំណូលប្រចាំថ្ងៃក្នុងរយៈពេលដែលបានជ្រើសរើស', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (42, 'reports', 'Financial Performance Overview', 'Financial Performance Overview', 'ទិដ្ឋភាពទូទៅនៃប្រតិបត្តិការហិរញ្ញវត្ថុ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (43, 'reports', 'Payment Distribution', 'Payment Distribution', 'ការបែងចែកការទូទាត់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (44, 'reports', 'Market share by method', 'Market share by method', 'ចំណែកទីផ្សារតាមមធ្យោបាយទូទាត់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (45, 'reports', 'Transaction Ledger', 'Transaction Ledger', 'បញ្ជីប្រតិបត្តិការ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (46, 'reports', 'Date/Time', 'Date/Time', 'កាលបរិច្ឆេទ/ម៉ោង', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (47, 'reports', 'Guest', 'Guest', 'ភ្ញៀវ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (48, 'reports', 'Gross Income', 'Gross Income', 'ចំណូលសរុប', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (49, 'reports', 'Sales', 'Sales', 'ការលក់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (50, 'reports', 'All Methods', 'All Methods', 'មធ្យោបាយទាំងអស់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (51, 'kitchen', 'Kitchen Display', 'Kitchen Display', 'ការបង្ហាញផ្ទះបាយ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (52, 'kitchen', 'Kitchen Display System', 'Kitchen Display System', 'ប្រព័ន្ធបង្ហាញក្នុងផ្ទះបាយ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (53, 'kitchen', 'Live Order Preparation Queue', 'Live Order Preparation Queue', 'ជួរកុម្ម៉ង់កំពុងរៀបចំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (54, 'kitchen', 'Refreshing in', 'Refreshing in', 'ផ្ទុកឡើងវិញក្នុងរយៈពេល', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (55, 'kitchen', 'Manual Refresh', 'Manual Refresh', 'ផ្ទុកឡើងវិញដោយដៃ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (56, 'general', 'ALL ACTIVE', 'All Active', 'សកម្មទាំងអស់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (57, 'kitchen', 'NEW (0-15M)', 'NEW (0-15M)', 'ថ្មី (០-១៥នាទី)', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (58, 'general', 'PENDING', 'Pending', 'រង់ចាំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (59, 'general', 'PREPARING', 'Preparing', 'កំពុងរៀបចំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (60, 'general', 'READY', 'Ready', 'រួចរាល់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (61, 'kitchen', 'DELAYED (30M-1H)', 'DELAYED (30M-1H)', 'យឺតយ៉ាវ (៣០នាទី-១ម៉ោង)', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (62, 'kitchen', 'Kitchen Clear!', 'Kitchen Clear!', 'ផ្ទះបាយទំនេរ!', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (63, 'kitchen', 'No active orders currently pending. Great job!', 'No active orders currently pending. Great job!', 'មិនមានការកុម្ម៉ង់កំពុងរង់ចាំទេ។ ធ្វើបានល្អណាស់!', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (64, 'general', 'Takeaway', 'Takeaway', 'ខ្ចប់', '2026-04-13 12:00:02', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (65, 'kitchen', 'Customer Request:', 'Customer Request:', 'សំណើអតិថិជន:', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (66, 'kitchen', 'Edit Note', 'Edit Note', 'កែសម្រួលចំណាំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (67, 'general', 'Add Note', 'Add Note', 'បន្ថែមកំណត់ចំណាំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (68, 'kitchen', 'Start Cooking', 'Start Cooking', 'ចាប់ផ្តើមចម្អិន', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (69, 'kitchen', 'Order Ready', 'Order Ready', 'ការកុម្ម៉ង់រួចរាល់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (70, 'kitchen', 'Waiting for Pickup', 'Waiting for Pickup', 'រង់ចាំការមកយក', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (71, 'kitchen', 'Note', 'Note', 'ចំណាំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (72, 'kitchen', 'Kitchen Instructions / Customer Notes', 'Kitchen Instructions / Customer Notes', 'ការណែនាំក្នុងផ្ទះបាយ / ចំណាំអតិថិជន', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (73, 'kitchen', 'Type instructions here...', 'Type instructions here...', 'វាយបញ្ចូលការណែនាំនៅទីនេះ...', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (74, 'kitchen', 'm', 'm', 'នាទី', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (75, 'kitchen', 's', 's', 'វិនាទី', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (76, 'payments', 'Payments History', 'Payments History', 'ប្រវត្តិនៃការបង់ប្រាក់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (77, 'payments', 'Payment History', 'Payment History', 'ប្រវត្តិនៃការបង់ប្រាក់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (78, 'payments', 'Track all financial transactions and payment receipts', 'Track all financial transactions and payment receipts', 'តាមដានរាល់ប្រតិបត្តិការហិរញ្ញវត្ថុ និងវិក្កយបត្របង់ប្រាក់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (79, 'payments', 'Search order number...', 'Search order number...', 'ស្វែងរកលេខការកុម្ម៉ង់...', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (80, 'payments', 'Transaction Details', 'Transaction Details', 'ព័ត៌មានលម្អិតនៃប្រតិបត្តិការ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (81, 'payments', 'Transaction Info', 'Transaction Info', 'ព័ត៌មាននៃប្រតិបត្តិការ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (82, 'payments', 'Receipt', 'Receipt', 'វិក្កយបត្រ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (83, 'payments', 'Processing Complete', 'Processing Complete', 'ការបង់ប្រាក់រួចរាល់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (84, 'general', 'Back to List', 'Back to List', 'ត្រឡប់ទៅកាន់បញ្ជី', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (85, 'payments', 'Unit Price', 'Unit Price', 'តម្លៃឯកតា', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (86, 'payments', 'Total Due', 'Total Due', 'សរុបដែលត្រូវបង់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (87, 'general', 'CASH PAYMENT', 'Cash Payment', 'បង់ជាសាច់ប្រាក់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (88, 'general', 'CARD PAYMENT', 'Card Payment', 'បង់តាមកាត', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (89, 'general', 'QR SCAN', 'QR Scan', 'ស្កេន QR', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (90, 'general', 'KHQR SCAN', 'KHQR Scan', 'ស្កេន KHQR', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (91, 'general', 'UNKNOWN', 'Unknown', 'មិនស្គាល់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (92, 'payments', 'Cash Received', 'Cash Received', 'សាច់ប្រាក់ទទួលបាន', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (93, 'payments', 'Change Returned', 'Change Returned', 'ប្រាក់អាប់ជូនវិញ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (94, 'payments', 'Received Date', 'Received Date', 'កាលបរិច្ឆេទទទួល', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (95, 'payments', 'Processed By', 'Processed By', 'រៀបចំដោយ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (96, 'general', 'Customer Info', 'Customer Info', 'ព័ត៌មានអតិថិជន', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (97, 'payments', 'Order Ref', 'Order Ref', 'លេខយោងកុម្ម៉ង់', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (98, 'payments', 'Method', 'Method', 'មធ្យោបាយ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (99, 'general', 'Paid', 'PAID', 'បានបង់ប្រាក់', '2026-04-13 12:00:02', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (100, 'general', 'Cash', 'Cash', 'សាច់ប្រាក់', '2026-04-13 12:00:02', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (101, 'general', 'Card', 'Card', 'កាត', '2026-04-13 12:00:02', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (102, 'payments', 'QR', 'QR', 'ស្កេន QR', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (103, 'payments', 'KHQR', 'KHQR', 'បង់តាម KHQR', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (104, 'payments', 'No transactions found.', 'No transactions found.', 'រកមិនឃើញប្រតិបត្តិការទេ។', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (105, 'general', 'Confirm Delete', 'Confirm Delete', 'បញ្ជាក់ការលុប', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (106, 'general', 'Are you sure you want to permanently delete', 'Are you sure you want to permanently delete', 'តើអ្នកប្រាកដថាចង់លុបជាអចិន្ត្រៃយ៍', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (107, 'general', '? This action cannot be reversed.', '? This action cannot be reversed.', '? សកម្មភាពនេះមិនអាចត្រឡប់ក្រោយបានទេ។', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (108, 'general', 'Yes, Delete Permanently', 'Yes, Delete Permanently', 'បាទ លុបជាអចិន្ត្រៃយ៍', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (109, 'general', 'Cancel & Return', 'Cancel & Return', 'បោះបង់ និងត្រឡប់ក្រោយ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (110, 'general', 'Success', 'Success', 'ជោគជ័យ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (111, 'general', 'Error', 'Error', 'កំហុស', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (112, 'general', 'Toggle Sidebar', 'Toggle Sidebar', 'បិទ/បើក របារចំហៀង', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (113, 'general', 'My Profile', 'My Profile', 'ប្រវត្តិរូបខ្ញុំ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (114, 'general', 'System Settings', 'System Settings', 'ការកំណត់ប្រព័ន្ធ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (115, 'general', 'Translation created successfully', 'Translation created successfully', 'បង្កើតការបកប្រែដោយជោគជ័យ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (116, 'general', 'Translation updated successfully', 'Translation updated successfully', 'ធ្វើបច្ចុប្បន្នភាពការបកប្រែដោយជោគជ័យ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (117, 'general', 'Translation deleted successfully', 'Translation deleted successfully', 'លុបការបកប្រែដោយជោគជ័យ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (118, 'general', 'New Order', 'New Order', 'ការបញ្ជាទិញថ្មី', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (119, 'pos', 'Resume', 'Resume', 'បន្ត', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (120, 'general', 'Draft', 'Draft', 'ព្រាង', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (121, 'general', 'Modification in progress', 'Modification in progress', 'កំពុងកែប្រែ', '2026-04-13 12:00:02', '2026-04-13 12:00:02');
INSERT INTO `translations` VALUES (122, 'general', 'New', 'New', 'ថ្មី', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (123, 'general', 'Start a fresh service', 'Start a fresh service', 'ចាប់ផ្តើមសេវាកម្មថ្មី', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (124, 'pos', 'Search dish name or code...', 'Search dish name or code...', 'ស្វែងរកឈ្មោះម្ហូប ឬលេខកូដ...', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (125, 'general', 'All Items', 'All Items', 'មុខម្ហូបទាំងអស់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (126, 'pos', 'No items available in the menu.', 'No items available in the menu.', 'មិនមានមុខម្ហូបនៅក្នុងបញ្ជីឈ្មោះទេ។', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (127, 'general', 'Current Order', 'Current Order', 'ការបញ្ជាទិញបច្ចុប្បន្ន', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (128, 'pos', 'Save / Hold Order', 'Save / Hold Order', 'រក្សាទុក / បង្អង់ការកុម្ម៉ង់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (129, 'pos', 'Clear Cart', 'Clear Cart', 'សម្អាតកន្ត្រក', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (130, 'pos', 'Service Type', 'Service Type', 'ប្រភេទសេវាកម្ម', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (131, 'pos', 'Locked', 'Locked', 'បានចាក់សោ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (132, 'general', 'Dine In', 'Dine In', 'ញ៉ាំនៅទីនេះ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (133, 'pos', 'Delivery', 'Delivery', 'ដឹកជញ្ជូន', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (134, 'pos', 'Table Assignment', 'Table Assignment', 'ការកំណត់តុ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (135, 'pos', 'Choose Table...', 'Choose Table...', 'ជ្រើសរើសតុ...', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (136, 'general', 'Your cart is empty', 'Your cart is empty', 'កន្ត្រករបស់អ្នកទទេ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (137, 'general', 'Subtotal', 'Subtotal', 'សរុបរង', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (138, 'general', 'Tax', 'Tax', 'ពន្ធ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (139, 'general', 'Total', 'Total', 'សរុប', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (140, 'pos', 'PAYMENT & CHECKOUT', 'PAYMENT & CHECKOUT', 'ការទូទាត់ និងការចេញវិក្កយបត្រ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (141, 'pos', 'Complete Checkout', 'Complete Checkout', 'បញ្ចប់ការទូទាត់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (142, 'general', 'QR Pay', 'QR Pay', 'ទូទាត់តាម QR', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (143, 'pos', 'Internal Order Notes :', 'Internal Order Notes :', 'ចំណាំការកុម្ម៉ង់ផ្ទៃក្នុង :', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (144, 'pos', 'Special requests, allergies, etc.', 'Special requests, allergies, etc.', 'សំណើពិសេស, ប្រតិកម្មអាឡែស៊ី, ...', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (145, 'general', 'Amount Paid', 'Amount Paid', 'ទឹកប្រាក់បានបង់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (146, 'general', 'Change Due', 'Change Due', 'ប្រាក់អាប់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (147, 'general', 'SAVE (PAY LATER)', 'Save (Pay Later)', 'រក្សាទុក (បង់ប្រាក់ពេលក្រោយ)', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (148, 'general', 'PAY NOW', 'Pay Now', 'បង់ប្រាក់ឥឡូវនេះ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (149, 'pos', 'Total amount due', 'Total amount due', 'សរុបដែលត្រូវបង់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (150, 'general', 'FINALIZE TRANSACTION', 'FINALIZE TRANSACTION', 'បញ្ចប់ប្រតិបត្តិការ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (151, 'pos', 'Please add items to cart first.', 'Please add items to cart first.', 'សូមបន្ថែមម្ហូបទៅក្នុងកន្ត្រកជាមុនសិន។', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (152, 'pos', 'Order saved to local storage.', 'Order saved to local storage.', 'ការកុម្ម៉ង់ត្រូវបានរក្សាទុកក្នុងឃ្លាំងផ្ទុកមូលដ្ឋាន។', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (153, 'orders', 'Order', 'Order', 'ការបញ្ជាទិញ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (154, 'orders', 'Managed by', 'Managed by', 'គ្រប់គ្រងដោយ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (155, 'orders', 'Back to Orders', 'Back to Orders', 'ត្រឡប់ទៅការបញ្ជាទិញវិញ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (156, 'orders', 'Print Receipt', 'Print Receipt', 'បោះពុម្ពវិក្កយបត្រ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (157, 'orders', 'Order Contents', 'Order Contents', 'មាតិកានៃការកុម្ម៉ង់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (158, 'general', 'Status', 'Status', 'ស្ថានភាព', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (159, 'orders', 'Cooking', 'Cooking', 'កំពុងចម្អិន', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (160, 'general', 'Cancel', 'Cancel', 'បោះបង់', '2026-04-13 12:00:03', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (161, 'orders', 'Total Amount', 'Total Amount', 'ចំនួនសរុប', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (162, 'orders', 'Tax Included', 'Tax Included', 'រួមបញ្ចូលពន្ធ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (163, 'orders', 'Pending Payment', 'Pending Payment', 'រង់ចាំការទូទាត់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (164, 'general', 'Order Management', 'Order Management', 'ការគ្រប់គ្រងការបញ្ជាទិញ', '2026-04-13 12:00:03', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (165, 'general', 'Track and manage live customer orders and sales', 'Track and manage live customer orders and sales', 'តាមដាន និងគ្រប់គ្រងការបញ្ជាទិញ និងការលក់របស់អតិថិជន', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (166, 'general', 'Order Details', 'Order Details', 'ព័ត៌មានលម្អិតអំពីការបញ្ជាទិញ', '2026-04-13 12:00:03', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (167, 'general', 'Amount', 'Amount', 'ចំនួនទឹកប្រាក់', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (168, 'general', 'Date', 'Date', 'កាលបរិច្ឆេទ', '2026-04-13 12:00:03', '2026-04-13 12:00:03');
INSERT INTO `translations` VALUES (169, 'search', 'Create New Category', 'Create New Category', 'បង្កើតចំណាត់ថ្នាក់ក្រុមថ្មី', '2026-04-13 14:06:38', '2026-04-13 14:06:38');
INSERT INTO `translations` VALUES (170, 'search', 'Create New Product', 'Create New Product', 'បង្កើតមុខម្ហូបថ្មី', '2026-04-13 14:06:38', '2026-04-13 14:06:38');
INSERT INTO `translations` VALUES (171, 'search', 'Create New Order', 'Create New Order', 'បង្កើតការបញ្ជាទិញថ្មី', '2026-04-13 14:06:38', '2026-04-13 14:06:38');
INSERT INTO `translations` VALUES (172, 'search', 'Add New Customer', 'Add New Customer', 'បន្ថែមអតិថិជនថ្មី', '2026-04-13 14:06:38', '2026-04-13 14:06:38');
INSERT INTO `translations` VALUES (173, 'general', 'Add New Table', 'Add New Table', 'បន្ថែមតុថ្មី', '2026-04-13 14:06:39', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (174, 'search', 'Create New User/Staff', 'Create New User/Staff', 'បង្កើតបុគ្គលិកថ្មី', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (175, 'search', 'Create New Role', 'Create New Role', 'បង្កើតតួនាទីថ្មី', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (176, 'search', 'Quick Actions', 'Quick Actions', 'សកម្មភាពរហ័ស', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (177, 'search', 'System Action', 'System Action', 'សកម្មភាពប្រព័ន្ធ', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (178, 'search', 'Search by keyword', 'Search by keyword', 'ស្វែងរកតាមពាក្យគន្លឹះ', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (179, 'search', 'No results found', 'No results found', 'រកមិនឃើញលទ្ធផលឡើយ', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (180, 'search', 'Quick shortcut to ', 'Quick shortcut to ', 'ផ្លូវកាត់ទៅកាន់ ', '2026-04-13 14:06:39', '2026-04-13 14:06:39');
INSERT INTO `translations` VALUES (181, 'general', 'MAIN', 'MAIN', 'ទំព័រដើម', '2026-04-13 14:08:03', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (182, 'general', 'Management', 'Management', 'ការគ្រប់គ្រង', '2026-04-13 14:08:03', '2026-05-03 15:11:42');
INSERT INTO `translations` VALUES (183, 'general', 'SALES & ORDERS', 'SALES & ORDERS', 'ការលក់ និង លំដាប់', '2026-04-13 14:08:03', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (184, 'general', 'REPORTS', 'REPORTS', 'របាយការណ៍', '2026-04-13 14:08:03', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (185, 'general', 'SYSTEM', 'System', 'ប្រព័ន្ធ', '2026-04-13 14:08:03', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (186, 'general', 'Category Management', 'Category Management', 'ការគ្រប់គ្រងចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (187, 'general', 'Create Category', 'Create Category', 'បង្កើតចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (188, 'general', 'Edit Category', 'Edit Category', 'កែសម្រួលចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (189, 'general', 'Category Details', 'Category Details', 'ព័ត៌មានលម្អិតចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (190, 'general', 'Menu Item Management', 'Menu Item Management', 'ការគ្រប់គ្រងមុខម្ហូប', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (191, 'general', 'Create Menu Item', 'Create Menu Item', 'បង្កើតមុខម្ហូប', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (192, 'general', 'Edit Menu Item', 'Edit Menu Item', 'កែសម្រួលមុខម្ហូប', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (193, 'general', 'Menu Item Details', 'Menu Item Details', 'ព័ត៌មានលម្អិតមុខម្ហូប', '2026-04-13 14:09:49', '2026-04-13 14:17:00');
INSERT INTO `translations` VALUES (194, 'search', 'Create Order', 'Create Order', 'បង្កើតការបញ្ជាទិញ', '2026-04-13 14:09:49', '2026-04-13 14:09:49');
INSERT INTO `translations` VALUES (195, 'general', 'Menu Management', 'Menu Management', 'ការគ្រប់គ្រងមុខម្ហូប', '2026-04-13 14:20:28', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (196, 'general', 'Add New Item', 'Add New Item', 'បន្ថែមមុខម្ហូបថ្មី', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (197, 'general', 'Coordinate your culinary collection and service availability', 'Coordinate your culinary collection and service availability', 'រៀបចំបណ្តុំមុខម្ហូប និងភាពអាចរកបាននៃសេវាកម្មរបស់អ្នក', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (198, 'general', 'Search by name or description...', 'Search by name or description...', 'ស្វែងរកតាមឈ្មោះ ឬការពណ៌នា...', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (199, 'general', 'All Categories', 'All Categories', 'ប្រភេទទាំងអស់', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (200, 'general', 'Clear Filters', 'Clear Filters', 'សម្អាតការចម្រោះ', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (201, 'general', 'Image', 'Image', 'រូបភាព', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (202, 'general', 'Name', 'Name', 'ឈ្មោះ', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (203, 'general', 'Category', 'Category', 'ប្រភេទ', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (204, 'general', 'Price', 'Price', 'តម្លៃ', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (205, 'general', 'Actions', 'Actions', 'សកម្មភាព', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (206, 'general', 'View Details', 'View Details', 'មើលលម្អិត', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (207, 'general', 'Edit Item', 'Edit Item', 'កែសម្រួលមុខម្ហូប', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (208, 'general', 'Delete Item', 'Delete Item', 'លុបមុខម្ហូប', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (209, 'general', 'No items match your criteria.', 'No items match your criteria.', 'មិនមានមុខម្ហូបដែលត្រូវនឹងលក្ខខណ្ឌរបស់អ្នកទេ។', '2026-04-13 14:22:16', '2026-04-13 14:22:16');
INSERT INTO `translations` VALUES (210, 'general', 'Essential Metadata', 'Essential Metadata', 'ព័ត៌មានចាំបាច់', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (211, 'general', 'Category Name', 'Category Name', 'ឈ្មោះចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (212, 'general', 'Detailed Description', 'Detailed Description', 'ការពណ៌នាបញ្ជាក់លម្អិត', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (213, 'general', 'Initial Visibility', 'Initial Visibility', 'ភាពមើលឃើញដំបូង', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (214, 'general', 'Active & Visible', 'Active & Visible', 'សកម្ម និងអាចមើលឃើញ', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (215, 'general', 'Hidden / Disabled', 'Hidden / Disabled', 'លាក់ / បិទ', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (216, 'general', 'Items belonging to a disabled category will automatically be hidden from the menu grid.', 'Items belonging to a disabled category will automatically be hidden from the menu grid.', 'មុខម្ហូបដែលមាននៅក្នុងប្រភេទដែលត្រូវបានបិទ នឹងត្រូវបានលាក់ដោយស្វ័យប្រវត្តិពីបញ្ជីម្ហូប។', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (217, 'general', 'Visual Presentation', 'Visual Presentation', 'ការបង្ហាញរូបភាព', '2026-04-13 14:24:09', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (218, 'general', 'Tap to upload portrait', 'Tap to upload portrait', 'ចុចដើម្បីបង្ហោះរូបភាព', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (219, 'general', 'Recommend 800x800px', 'Recommend 800x800px', 'ណែនាំទំហំ ៨០០x៨០០ ភីកសែល', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (220, 'general', 'Initial Status', 'Initial Status', 'ស្ថានភាពដំបូង', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (221, 'general', 'Available for Ordering', 'Available for Ordering', 'អាចកុម្ម៉ង់បាន', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (222, 'general', 'Hidden from Menu', 'Hidden from Menu', 'លាក់ពីបញ្ជីម្ហូប', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (223, 'general', 'Pro Tip', 'Pro Tip', 'គន្លឹះមានប្រយោជន៍', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (224, 'general', 'High-quality images with neutral backgrounds perform 40% better in digital menus.', 'High-quality images with neutral backgrounds perform 40% better in digital menus.', 'រូបភាពដែលមានគុណភាពខ្ពស់ និងមានផ្ទៃខាងក្រោយធម្មតា ជួយឱ្យការលក់កើនឡើង ៤០% នៅក្នុងបញ្ជីម្ហូបឌីជីថល។', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (225, 'general', 'Essential Specifications', 'Essential Specifications', 'ព័ត៌មានបញ្ជាក់លម្អិត', '2026-04-13 14:24:09', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (226, 'general', 'Item Details', 'Item Details', 'ព័ត៌មានលម្អិតមុខម្ហូប', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (227, 'general', 'Item Name', 'Item Name', 'ឈ្មោះមុខម្ហូប', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (228, 'general', 'Category Assignment', 'Category Assignment', 'ការចាត់តាំងប្រភេទ', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (229, 'general', 'Select a Category', 'Select a category', 'ជ្រើសរើសចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (230, 'general', 'Culinary Description', 'Culinary Description', 'ការពណ៌នាមុខម្ហូប', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (231, 'general', 'Register Menu Item', 'Register Menu Item', 'ចុះឈ្មោះមុខម្ហូប', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (232, 'general', 'Discard Changes', 'Discard Changes', 'បោះបង់ការផ្លាស់ប្តូរ', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (233, 'general', 'Back to Menu', 'Back to Menu', 'ត្រឡប់ទៅបញ្ជីម្ហូប', '2026-04-13 14:24:09', '2026-04-13 14:24:09');
INSERT INTO `translations` VALUES (234, 'general', 'Update Category', 'Update Category', 'ធ្វើបច្ចុប្បន្នភាពចំណាត់ថ្នាក់ក្រុម', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (235, 'general', 'Update Menu Item', 'Update Menu Item', 'ធ្វើបច្ចុប្បន្នភាពមុខម្ហូប', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (236, 'general', 'Back', 'Back', 'ត្រឡប់ក្រោយ', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (237, 'general', 'Refining the specifications for', 'Refining the specifications for', 'កែសម្រួលព័ត៌មានលម្អិតសម្រាប់', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (238, 'general', 'ITEM NAME :', 'ITEM NAME :', 'ឈ្មោះមុខម្ហូប :', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (239, 'general', 'CATEGORY ASSIGNMENT :', 'CATEGORY ASSIGNMENT :', 'ការចាត់តាំងប្រភេទ :', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (240, 'general', 'PRICE ($) :', 'PRICE ($) :', 'តម្លៃ ($) :', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (241, 'general', 'CULINARY DESCRIPTION :', 'CULINARY DESCRIPTION :', 'ការពណ៌នាមុខម្ហូប :', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (242, 'general', 'CURRENT STATUS', 'Current Status', 'ស្ថានភាពបច្ចុប្បន្ន', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (243, 'general', 'Viewing information for', 'Viewing information for', 'កំពុងមើលព័ត៌មានសម្រាប់', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (244, 'general', 'ITEM INFORMATION', 'Item Information', 'ព័ត៌មានមុខម្ហូប', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (245, 'general', 'ITEM REFERENCE', 'Item Reference', 'លេខយោងមុខម្ហូប', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (246, 'general', 'DESCRIPTION :', 'DESCRIPTION :', 'ការពណ៌នា :', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (247, 'general', 'CREATED ON', 'CREATED ON', 'បង្កើតនៅថ្ងៃ', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (248, 'general', 'LAST UPDATE', 'LAST UPDATE', 'កែប្រែចុងក្រោយ', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (249, 'general', 'CAT. STATUS', 'CAT. STATUS', 'ស្ថានភាពប្រភេទ', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (250, 'general', 'ACTIVE', 'Active', 'សកម្ម', '2026-04-13 14:26:08', '2026-04-13 14:58:29');
INSERT INTO `translations` VALUES (251, 'general', 'No description available for this item.', 'No description available for this item.', 'មិនមានការពណ៌នាសម្រាប់មុខម្ហូបនេះទេ។', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (252, 'general', 'Updating structural metadata for organizational unit', 'Updating structural metadata for organizational unit', 'ធ្វើបច្ចុប្បន្នភាពទិន្នន័យរចនាសម្ព័ន្ធសម្រាប់អង្គភាព', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (253, 'general', 'Configuration', 'Configuration', 'ការកំណត់រចនាសម្ព័ន្ធ', '2026-04-13 14:26:08', '2026-04-13 14:26:08');
INSERT INTO `translations` VALUES (254, 'general', 'Available', 'Available', 'ទំនេរ', '2026-04-13 14:34:48', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (255, 'general', 'Table Management', 'Table Management', 'ការគ្រប់គ្រងតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (256, 'general', 'Organize your dining area and track occupancy', 'Organize your dining area and track occupancy', 'រៀបចំតំបន់ទទួលទានអាហារ និងតាមដាន', '2026-04-13 14:36:30', '2026-04-13 14:38:56');
INSERT INTO `translations` VALUES (257, 'general', 'Search by table name...', 'Search by table name...', 'ស្វែងរកតាមឈ្មោះតុ...', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (258, 'general', 'All Statuses', 'All Statuses', 'ស្ថានភាពទាំងអស់', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (259, 'general', 'Occupied', 'Occupied', 'កំពុងប្រើប្រាស់', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (260, 'general', 'Reserved', 'Reserved', 'បានកក់', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (261, 'general', 'Persons', 'Persons', 'នាក់', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (262, 'general', 'Guests', 'Guests', 'ភ្ញៀវ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (263, 'general', 'Dining Table', 'Dining Table', 'តុអាហារ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (264, 'general', 'Capacity', 'Capacity', 'ចំណុះ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (265, 'general', 'View Table Info', 'View Table Info', 'មើលព័ត៌មានតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (266, 'general', 'Edit Table', 'Edit Table', 'កែសម្រួលតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (267, 'general', 'Delete Table', 'Delete Table', 'លុបតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (268, 'general', 'No tables found matching your search.', 'No tables found matching your search.', 'រកមិនឃើញតុដែលត្រូវនឹងការស្វែងរករបស់អ្នកទេ។', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (269, 'general', 'New Dining Table', 'New Dining Table', 'តុអាហារថ្មី', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (270, 'general', 'Registering a new seating area for your restaurant', 'Registering a new seating area for your restaurant', 'ការចុះឈ្មោះកន្លែងអង្គុយថ្មីសម្រាប់ភោជនីយដ្ឋានរបស់អ្នក', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (271, 'general', 'Categorization', 'Categorization', 'ការចាត់ចំណាត់ថ្នាក់', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (272, 'general', 'Table Layout', 'Table Layout', 'ប្លង់តុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (273, 'general', 'Define the physical space and capacity for this seating unit.', 'Define the physical space and capacity for this seating unit.', 'កំណត់ទីតាំងជាក់ស្តែង និងចំណុះសម្រាប់កន្លែងអង្គុយនេះ។', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (274, 'general', 'Notice', 'Notice', 'ការជូនដំណឹង', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (275, 'general', 'Newly registered tables are set to \'Available\' by default for immediate guest seating.', 'Newly registered tables are set to \'Available\' by default for immediate guest seating.', 'តុដែលទើបនឹងចុះឈ្មោះត្រូវបានកំណត់ទៅជា \'ទំនេរ\' ជាលំនាំដើមសម្រាប់ការអង្គុយរបស់ភ្ញៀវភ្លាមៗ។', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (276, 'general', 'Table Specifications', 'Table Specifications', 'ព័ត៌មានបញ្ជាក់លម្អិតនៃតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (277, 'general', 'Table Number / Name :', 'Table Number / Name :', 'លេខតុ / ឈ្មោះ :', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (278, 'general', 'Register Table', 'Register Table', 'ចុះឈ្មោះតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (279, 'general', 'Back to Tables', 'Back to Tables', 'ត្រឡប់ទៅកាន់បញ្ជីតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (280, 'general', 'Modifying configuration for seating area', 'Modifying configuration for seating area', 'ការកែសម្រួលការកំណត់រចនាសម្ព័ន្ធសម្រាប់កន្លែងអង្គុយ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (281, 'general', 'Management Status', 'Management Status', 'ស្ថានភាពគ្រប់គ្រង', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (282, 'general', 'Changes to table status reflect immediately on the waiter\'s terminal and floor map.', 'Changes to table status reflect immediately on the waiter\'s terminal and floor map.', 'ការផ្លាស់ប្តូរស្ថានភាពតុឆ្លុះបញ្ចាំងភ្លាមៗនៅលើឧបករណ៍របស់អ្នករត់តុ និងប្លង់ជាន់។', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (283, 'general', 'Update Table', 'Update Table', 'ធ្វើបច្ចុប្បន្នភាពតុ', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (284, 'general', 'Edit Table:', 'Edit Table:', 'កែសម្រួលតុ:', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (285, 'general', 'Seating Capacity :', 'Seating Capacity :', 'ចំណុះកន្លែងអង្គុយ :', '2026-04-13 14:36:30', '2026-04-13 14:36:30');
INSERT INTO `translations` VALUES (286, 'general', 'Complete profile and occupancy status for', 'Complete profile and occupancy status for', 'ប្រវត្តិរូបពេញលេញ និងស្ថានភាពនៃការប្រើប្រាស់សម្រាប់', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (287, 'general', 'Edit Configuration', 'Edit Configuration', 'កែសម្រួលការកំណត់រចនាសម្ព័ន្ធ', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (288, 'general', 'Physical Seating Asset', 'Physical Seating Asset #', 'លេខយោងកន្លែងអង្គុយ #', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (289, 'general', 'Core Information', 'Core Information', 'ព័ត៌មានស្នូល', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (290, 'general', 'Asset Specifications', 'Asset Specifications', 'ព័ត៌មានបច្ចេកទេសនៃមធ្យោបាយ', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (291, 'general', 'Created At', 'Created At', 'បង្កើតនៅថ្ងៃ', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (292, 'general', 'Admin Notes', 'Admin Notes', 'ចំណាំរបស់អ្នកគ្រប់គ្រង', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (293, 'general', 'Table Tracking Notice', 'This table is currently tracked in the system. Any active orders linked to this table will prevent status changes until the bill is settled.', 'តុនេះកំពុងត្រូវបានតាមដាននៅក្នុងប្រព័ន្ធ។ រាល់ការបញ្ជាទិញដែលកំពុងសកម្មពាក់ព័ន្ធនឹងតុនេះ នឹងរារាំងដល់ការផ្លាស់ប្តូរស្ថានភាព រហូតដល់វិក្កយបត្រត្រូវបានបង់រួចរាល់។', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (294, 'general', 'Decommission Table', 'Decommission Table', 'បញ្ឈប់ដំណើរការតុ', '2026-04-13 14:37:48', '2026-04-13 14:37:48');
INSERT INTO `translations` VALUES (295, 'general', 'Information Table', 'Information Table', 'ព័ត៌មានតុ', '2026-04-13 14:49:00', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (296, 'general', 'Table created successfully!', 'Table created successfully!', 'តុត្រូវបានបង្កើតដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (297, 'general', 'Table updated successfully!', 'Table updated successfully!', 'តុត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (298, 'general', 'Table deleted successfully!', 'Table deleted successfully!', 'តុត្រូវបានលុបដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (299, 'general', 'Category created successfully!', 'Category created successfully!', 'ចំណាត់ថ្នាក់ក្រុមត្រូវបានបង្កើតដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (300, 'general', 'Category updated successfully!', 'Category updated successfully!', 'ចំណាត់ថ្នាក់ក្រុមត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (301, 'general', 'Category deleted successfully!', 'Category deleted successfully!', 'ចំណាត់ថ្នាក់ក្រុមត្រូវបានលុបដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (302, 'general', 'Menu Item created successfully!', 'Menu Item created successfully!', 'មុខម្ហូបត្រូវបានបង្កើតដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (303, 'general', 'Menu Item updated successfully!', 'Menu Item updated successfully!', 'មុខម្ហូបត្រូវបានធ្វើបច្ចុប្បន្នភាពដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (304, 'general', 'Menu Item deleted successfully!', 'Menu Item deleted successfully!', 'មុខម្ហូបត្រូវបានលុបដោយជោគជ័យ!', '2026-04-14 09:53:32', '2026-04-14 09:53:32');
INSERT INTO `translations` VALUES (305, 'general', 'New Transaction', 'New Transaction', 'ប្រតិបត្តិការថ្មី', '2026-05-21 13:41:23', '2026-05-21 13:41:23');
INSERT INTO `translations` VALUES (306, 'general', 'Modify Order', 'Modify Order', 'កែប្រែការបញ្ជាទិញ', '2026-05-21 13:41:23', '2026-05-21 13:41:23');
INSERT INTO `translations` VALUES (307, 'general', 'Back to POS', 'Back to POS', 'ត្រឡប់ទៅ POS វិញ', '2026-05-21 13:41:23', '2026-05-21 13:41:23');
INSERT INTO `translations` VALUES (308, 'menu', 'Add Translation', 'បន្ថែមការបកប្រែ', 'បន្ថែមការបកប្រែ', '2026-05-21 14:59:44', '2026-05-21 15:00:31');
INSERT INTO `translations` VALUES (309, 'general', 'System Backups', 'System Backups', 'ការបម្រុងទុកប្រព័ន្ធ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (310, 'general', 'Automated Backup Scheduler', 'Automated Backup Scheduler', 'កំណត់ពេលបម្រុងទុកស្វ័យប្រវត្តិ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (311, 'general', 'Enable Automated Backups', 'Enable Automated Backups', 'បើករការបម្រុងទុកស្វ័យប្រវត្តិ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (312, 'general', 'Run daily database backup automatically', 'Run daily database backup automatically', 'ដំណើរការបម្រុងទុកប្រចាំថ្ងៃដោយស្វ័យប្រវត្តិ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (313, 'general', 'Daily Trigger Time', 'Daily Trigger Time', 'ម៉ោងបម្រុងទុកប្រចាំថ្ងៃ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (314, 'general', 'Runs daily at the specified time using Laravel\'s schedule command.', 'Runs daily at the specified time using Laravel\'s schedule command.', 'ដំណើរការប្រចាំថ្ងៃតាមម៉ោងដែលបានកំណត់ដោយប្រើប្រាស់ពាក្យបញ្ជាកំណត់ពេលរបស់ Laravel។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (315, 'general', 'Backup Destination Folder Path', 'Backup Destination Folder Path', 'ទីតាំងថតដែលរក្សាទុកការបម្រុង', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (316, 'general', 'Absolute folder path where backups will be saved. Click Browse... to pick or create a folder, or leave empty to use default storage folder.', 'Absolute folder path where backups will be saved.', 'ផ្លូវថតដោយផ្ទាល់ដែលការបម្រុងទុកនឹងត្រូវបានរក្សា។ ចុច Browse... ដើម្បីជ្រើស ឬបង្កើតថត ឬទុកចោលដើម្បីប្រើថតផ្ទុកលំនាំដើម។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (317, 'general', 'Active Schedule', 'Active Schedule', 'កំណត់ពេលសកម្ម', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (318, 'general', 'Disabled', 'Disabled', 'បិទ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (319, 'general', 'Last Backup:', 'Last Backup:', 'ការបម្រុងទុកចុងក្រោយ:', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (320, 'general', 'No backup log found', 'No backup log found', 'រកមិនឃើញកំណត់ហេតុការបម្រុងទុកទេ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (321, 'general', 'Save Scheduler Settings', 'Save Scheduler Settings', 'រក្សាទុកការកំណត់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (322, 'general', 'Windows Task Scheduler Integration', 'Windows Task Scheduler Integration', 'ការរួមបញ្ចូល Windows Task Scheduler', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (323, 'general', 'To make this scheduler work automatically in the background on your Windows Server or PC, you must add a single task to the Windows Task Scheduler that executes Laravel\'s command scheduler every minute.', 'To make this scheduler work automatically, add a task to Windows Task Scheduler.', 'ដើម្បីឱ្យកំណត់ពេលនេះដំណើរការស្វ័យប្រវត្តិ សូមបន្ថែមភារកិច្ចទៅ Windows Task Scheduler ដើម្បីដំណើរការរៀងរាល់នាទី។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (324, 'general', 'Under Actions tab, select ', 'Under Actions tab, select ', 'នៅក្នុងផ្ទាំង Actions ជ្រើស ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (325, 'general', 'When I log on', 'When I log on', 'នៅពេលខ្ញុំចូលប្រព័ន្ធ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (326, 'general', 'Browse...', 'Browse...', 'រកមើល...', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (327, 'general', 'Create Backup Now', 'Create Backup Now', 'បង្កើតការបម្រុងទុកឥឡូវ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (328, 'general', 'Download', 'Download', 'ទាញយក', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (329, 'general', 'Delete', 'Delete', 'លុប', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (330, 'general', 'No backups found.', 'No backups found.', 'រកមិនឃើញការបម្រុងទុកទេ។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (331, 'general', 'Welcome back', 'Welcome back', 'សូមស្វាគមន៍ការត្រឡប់', '2026-05-22 06:24:59', '2026-05-22 07:18:11');
INSERT INTO `translations` VALUES (332, 'general', 'Today\'s Income', 'Today\'s Income', 'ចំណូលថ្ងៃនេះ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (333, 'general', 'Total Orders', 'Total Orders', 'ការបញ្ជាទិញសរុប', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (334, 'general', 'Total Items', 'Total Items', 'មុខម្ហូបសរុប', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (335, 'general', 'Total Categories', 'Total Categories', 'ចំនួនប្រភេទសរុប', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (336, 'general', 'View All', 'View All', 'មើលទាំងអស់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (337, 'general', 'View', 'View', 'មើល', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (338, 'general', 'View Order', 'View Order', 'មើលការបញ្ជាទិញ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (339, 'general', 'View Order #', 'View Order #', 'មើលការបញ្ជាទិញ #', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (340, 'general', 'UNPAID', 'UNPAID', 'មិនទាន់បង់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (341, 'general', 'Completed', 'Completed', 'បានបញ្ចប់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (342, 'general', 'Void', 'Void', 'មោឃៈ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (343, 'general', 'Type', 'Type', 'ប្រភេទ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (344, 'general', 'Type / Table', 'Type / Table', 'ប្រភេទ / តុ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (345, 'general', 'Time', 'Time', 'ម៉ោង', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (346, 'general', 'Table', 'Table', 'តុ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (347, 'general', 'Table #', 'Table #', 'តុ #', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (348, 'general', 'Table Details', 'Table Details', 'ព័ត៌មានលម្អិតអំពីតុ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (349, 'general', 'Table Information', 'Table Information', 'ព័ត៌មានតុ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (350, 'general', 'Table Name / Number', 'Table Name / Number', 'ឈ្មោះ / លេខតុ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (351, 'general', 'Taken', 'Taken', 'កំពុងប្រើ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (352, 'general', 'Unavailable', 'Unavailable', 'មិនអាចរកបាន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (353, 'general', 'Your cart is empty.', 'Your cart is empty.', 'កន្ត្រករបស់អ្នកទំនេរ។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (354, 'general', 'Viewing details for', 'Viewing details for', 'មើលព័ត៌មានលម្អិតសម្រាប់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (355, 'general', 'Viewing', 'Viewing', 'កំពុងមើល', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (356, 'general', 'Updating records for', 'Updating records for', 'ធ្វើបច្ចុប្បន្នភាពកំណត់ត្រាសម្រាប់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (357, 'general', 'This action cannot be reversed.', 'This action cannot be reversed.', 'សកម្មភាពនេះមិនអាចត្រឡប់ក្រោយបានទេ។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (358, 'general', 'Customer Management', 'Customer Management', 'ការគ្រប់គ្រងអតិថិជន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (359, 'general', 'New Customer', 'New Customer', 'អតិថិជនថ្មី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (360, 'general', 'Edit Customer', 'Edit Customer', 'កែសម្រួលអតិថិជន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (361, 'general', 'Customer Details', 'Customer Details', 'ព័ត៌មានអតិថិជន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (362, 'general', 'Walk-in Customer', 'Walk-in Customer', 'អតិថិជនទូទៅ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (363, 'general', 'Update Customer', 'Update Customer', 'ធ្វើបច្ចុប្បន្នភាពអតិថិជន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (364, 'general', 'Total Spent', 'Total Spent', 'ចំនួនប្រាក់ដែលបានចំណាយ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (365, 'general', 'Phone', 'Phone', 'ទូរស័ព្ទ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (366, 'general', 'Email', 'Email', 'អ៊ីមែល', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (367, 'general', 'Address', 'Address', 'អាសយដ្ឋាន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (368, 'general', 'Street Address', 'Street Address', 'អាសយដ្ឋានផ្លូវ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (369, 'general', 'customer@email.com', 'customer@email.com', 'customer@email.com', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (370, 'general', 'your@email.com', 'your@email.com', 'your@email.com', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (371, 'general', 'email@restaurant.com', 'email@restaurant.com', 'email@restaurant.com', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (372, 'general', 'User Management', 'User Management', 'ការគ្រប់គ្រងអ្នកប្រើ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (373, 'general', 'New Staff', 'New Staff', 'បុគ្គលិកថ្មី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (374, 'general', 'Edit Staff', 'Edit Staff', 'កែសម្រួលបុគ្គលិក', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (375, 'general', 'Role', 'Role', 'តួនាទី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (376, 'general', 'Password', 'Password', 'ពាក្យសម្ងាត់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (377, 'general', 'Update Password', 'Update Password', 'ធ្វើបច្ចុប្បន្នភាពពាក្យសម្ងាត់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (378, 'general', 'Update Account', 'Update Account', 'ធ្វើបច្ចុប្បន្នភាពគណនី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (379, 'general', 'Upload Photo', 'Upload Photo', 'បង្ហោះរូបថត', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (380, 'general', 'Verify Email', 'Verify Email', 'ផ្ទៀងផ្ទាត់អ៊ីមែល', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (381, 'general', 'e.g. Admin, Chef, Cashier', 'e.g. Admin, Chef, Cashier', 'ឧ. អ្នកគ្រប់គ្រង, ចុងភៅ, អ្នកគិតប្រាក់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (382, 'general', 'Update Role', 'Update Role', 'ធ្វើបច្ចុប្បន្នភាពតួនាទី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (383, 'general', 'Permissions', 'Permissions', 'សិទ្ធិ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (384, 'general', 'System Logo', 'System Logo', 'និមិត្តសញ្ញាប្រព័ន្ធ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (385, 'general', 'Visual Identity', 'Visual Identity', 'អត្តសញ្ញាណមើលឃើញ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (386, 'general', 'Restaurant Name', 'Restaurant Name', 'ឈ្មោះភោជនីយដ្ឋាន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (387, 'general', 'e.g. Gourmet Palace', 'e.g. Gourmet Palace', 'ឧ. Gourmet Palace', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (388, 'general', 'Used in invoices and dashboard', 'Used in invoices and dashboard', 'ប្រើក្នុងវិក្កយបត្រ និងផ្ទាំងគ្រប់គ្រង', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (389, 'general', 'Tax Percentage (%)', 'Tax Percentage (%)', 'អត្រាពន្ធ (%)', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (390, 'general', 'Currency', 'Currency', 'រូបិយប័ណ្ណ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (391, 'general', 'Currency Name', 'Currency Name', 'ឈ្មោះរូបិយប័ណ្ណ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (392, 'general', 'Symbol', 'Symbol', 'និមិត្តសញ្ញា', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (393, 'general', 'Update Currency', 'Update Currency', 'ធ្វើបច្ចុប្បន្នភាពរូបិយប័ណ្ណ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (394, 'general', 'e.g. $, ៛', 'e.g. $, ៛', 'ឧ. $, ៛', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (395, 'general', 'e.g. US Dollar, Cambodian Riel', 'e.g. US Dollar, Cambodian Riel', 'ឧ. ដុល្លារអាមេរិក, រៀលខ្មែរ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (396, 'general', 'Translation Key', 'Translation Key', 'គន្លឹះការបកប្រែ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (397, 'general', 'Update Translation', 'Update Translation', 'ធ្វើបច្ចុប្បន្នភាពការបកប្រែ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (398, 'general', 'e.g. welcome_message', 'e.g. welcome_message', 'ឧ. welcome_message', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (399, 'general', 'My Account', 'My Account', 'គណនីរបស់ខ្ញុំ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (400, 'general', 'Account Settings', 'Account Settings', 'ការកំណត់គណនី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (401, 'general', 'Full Name', 'Full Name', 'ឈ្មោះពេញ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (402, 'general', 'Current Password', 'Current Password', 'ពាក្យសម្ងាត់បច្ចុប្បន្ន', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (403, 'general', 'New Password', 'New Password', 'ពាក្យសម្ងាត់ថ្មី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (404, 'general', 'Confirm Password', 'Confirm Password', 'បញ្ជាក់ពាក្យសម្ងាត់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (405, 'general', 'of', 'of', 'នៃ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (406, 'general', 'to', 'to', 'ដល់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (407, 'general', 'items', 'Items', 'មុខម្ហូប', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (408, 'general', 'results', 'results', 'លទ្ធផល', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (409, 'general', 'e.g. Grilled Salmon', 'e.g. Grilled Salmon', 'ឧ. ត្រីសាម៉ុនអាំង', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (410, 'general', 'e.g. Italian Specialties', 'e.g. Italian Specialties', 'ឧ. មុខម្ហូបពិសេសអ៊ីតាលី', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (411, 'general', 'e.g. VIP-01', 'e.g. VIP-01', 'ឧ. VIP-01', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (412, 'general', 'e.g. VIP-01 or Table 12', 'e.g. VIP-01 or Table 12', 'ឧ. VIP-01 ឬ Table 12', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (413, 'general', 'Search...', 'Search...', 'ស្វែងរក...', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (414, 'general', 'Filter', 'Filter', 'ចម្រោះ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (415, 'general', 'Apply', 'Apply', 'អនុវត្ត', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (416, 'general', 'Reset', 'Reset', 'កំណត់ឡើងវិញ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (417, 'general', 'Save', 'Save', 'រក្សាទុក', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (418, 'general', 'Save Changes', 'Save Changes', 'រក្សាទុកការផ្លាស់ប្តូរ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (419, 'general', 'Create', 'Create', 'បង្កើត', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (420, 'general', 'Add', 'Add', 'បន្ថែម', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (421, 'general', 'Edit', 'Edit', 'កែសម្រួល', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (422, 'general', 'Update Item', 'Update Item', 'ធ្វើបច្ចុប្បន្នភាពធាតុ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (423, 'general', 'Visibility', 'Visibility', 'ភាពមើលឃើញ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (424, 'general', 'Visible on Menu', 'Visible on Menu', 'អាចមើលឃើញក្នុងបញ្ជីម្ហូប', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (425, 'general', 'Inactive', 'Inactive', 'អសកម្ម', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (426, 'general', 'Enabled', 'Enabled', 'បើក', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (427, 'general', 'Try adjusting your search or category filter.', 'Try adjusting your search or category filter.', 'ព្យាយាមកែប្រែការស្វែងរក ឬការចម្រោះប្រភេទរបស់អ្នក។', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (428, 'kitchen', 'Kitchen', 'Kitchen', 'ផ្ទះបាយ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (429, 'kitchen', 'View Kitchen', 'View Kitchen', 'មើលផ្ទះបាយ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (430, 'general', 'Login', 'Login', 'ចូលប្រព័ន្ធ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (431, 'general', 'Remember Me', 'Remember Me', 'ចងចាំខ្ញុំ', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (432, 'general', 'Forgot Password', 'Forgot Password', 'ភ្លេចពាក្យសម្ងាត់', '2026-05-22 06:24:59', '2026-05-22 06:24:59');
INSERT INTO `translations` VALUES (433, 'general', 'Checkout', 'Checkout', 'ទូទាត់ប្រាក់', NULL, NULL);
INSERT INTO `translations` VALUES (434, 'general', 'Point of Sale', 'Point of Sale', 'ចំណុចលក់ (POS)', NULL, NULL);
INSERT INTO `translations` VALUES (435, 'general', 'Service', 'Service', 'សេវាកម្ម', NULL, NULL);
INSERT INTO `translations` VALUES (436, 'general', 'Order Type', 'Order Type', 'ប្រភេទការបញ្ជាទិញ', NULL, NULL);
INSERT INTO `translations` VALUES (437, 'general', 'Select Table (Required)', 'Select Table (Required)', 'ជ្រើសរើសតុ (ចាំបាច់)', NULL, NULL);
INSERT INTO `translations` VALUES (438, 'general', 'Select Customer (Optional)', 'Select Customer (Optional)', 'ជ្រើសរើសអតិថិជន (ជាជម្រើស)', NULL, NULL);
INSERT INTO `translations` VALUES (439, 'general', 'Special requests or notes...', 'Special requests or notes...', 'សំណើពិសេស ឬកំណត់ចំណាំ...', NULL, NULL);
INSERT INTO `translations` VALUES (440, 'general', 'Clear', 'Clear', 'សម្អាត', NULL, NULL);
INSERT INTO `translations` VALUES (441, 'general', 'Save Later', 'Save Later', 'រក្សាទុកសិន', NULL, NULL);
INSERT INTO `translations` VALUES (442, 'general', 'Payment Method', 'Payment Method', 'វិធីសាស្ត្រទូទាត់', NULL, NULL);
INSERT INTO `translations` VALUES (443, 'general', 'Mobile Payment Info', 'Mobile Payment Info', 'ព័ត៌មានការទូទាត់តាមទូរស័ព្ទ', NULL, NULL);
INSERT INTO `translations` VALUES (444, 'general', 'Customer account name', 'Customer account name', 'ឈ្មោះគណនីអតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (445, 'general', 'Phone number or account id', 'Phone number or account id', 'លេខទូរស័ព្ទ ឬលេខគណនី', NULL, NULL);
INSERT INTO `translations` VALUES (446, 'general', 'Internal Order Notes', 'Internal Order Notes', 'កំណត់ចំណាំការបញ្ជាទិញ', NULL, NULL);
INSERT INTO `translations` VALUES (447, 'general', 'Search items...', 'Search items...', 'ស្វែងរកមុខម្ហូប...', NULL, NULL);
INSERT INTO `translations` VALUES (448, 'general', 'Loading...', 'Loading...', 'កំពុងផ្ទុក...', NULL, NULL);
INSERT INTO `translations` VALUES (449, 'general', 'New Category', 'New Category', 'ចំណាត់ថ្នាក់ក្រុមថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (450, 'general', 'Define a new structural group for your restaurant menu', 'Define a new structural group for your restaurant menu', 'កំណត់ក្រុមរចនាសម្ព័ន្ធថ្មីសម្រាប់បញ្ជីមុខម្ហូបភោជនីយដ្ឋានរបស់អ្នក', NULL, NULL);
INSERT INTO `translations` VALUES (451, 'general', 'Description', 'Description', 'ការពណ៌នា', NULL, NULL);
INSERT INTO `translations` VALUES (452, 'general', 'Briefly describe what items fall under this category...', 'Briefly describe what items fall under this category...', 'ពណ៌នាដោយសង្ខេបនូវមុខម្ហូបដែលស្ថិតនៅក្រោមចំណាត់ថ្នាក់ក្រុមនេះ...', NULL, NULL);
INSERT INTO `translations` VALUES (453, 'general', 'Items in a disabled category will be hidden from the menu grid.', 'Items in a disabled category will be hidden from the menu grid.', 'មុខម្ហូបនៅក្នុងចំណាត់ថ្នាក់ក្រុមដែលបានបិទ នឹងត្រូវបានលាក់ពីបញ្ជីមុខម្ហូប។', NULL, NULL);
INSERT INTO `translations` VALUES (454, 'general', 'Organize your menu items into structured groups', 'Organize your menu items into structured groups', 'រៀបចំមុខម្ហូបរបស់អ្នកទៅជាក្រុមមានរចនាសម្ព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (455, 'general', 'Add Category', 'Add Category', 'បន្ថែមចំណាត់ថ្នាក់ក្រុម', NULL, NULL);
INSERT INTO `translations` VALUES (456, 'general', 'Search category name...', 'Search category name...', 'ស្វែងរកឈ្មោះចំណាត់ថ្នាក់ក្រុម...', NULL, NULL);
INSERT INTO `translations` VALUES (457, 'general', '#', '#', 'ល.រ', NULL, NULL);
INSERT INTO `translations` VALUES (458, 'general', 'No description', 'No description', 'មិនមានការពណ៌នា', NULL, NULL);
INSERT INTO `translations` VALUES (459, 'general', 'No categories found', 'No categories found', 'រកមិនឃើញចំណាត់ថ្នាក់ក្រុមទេ', NULL, NULL);
INSERT INTO `translations` VALUES (460, 'general', 'Create your first category to start organizing the menu.', 'Create your first category to start organizing the menu.', 'បង្កើតចំណាត់ថ្នាក់ក្រុមដំបូងរបស់អ្នក ដើម្បីចាប់ផ្តើមរៀបចំបញ្ជីមុខម្ហូប។', NULL, NULL);
INSERT INTO `translations` VALUES (461, 'general', 'Manage and download database backups', 'Manage and download database backups', 'គ្រប់គ្រង និងទាញយកទិន្នន័យបម្រុងទុក', NULL, NULL);
INSERT INTO `translations` VALUES (462, 'general', 'Create Backup', 'Create Backup', 'បង្កើតការបម្រុងទុក', NULL, NULL);
INSERT INTO `translations` VALUES (463, 'general', 'File Name', 'File Name', 'ឈ្មោះឯកសារ', NULL, NULL);
INSERT INTO `translations` VALUES (464, 'general', 'Size', 'Size', 'ទំហំ', NULL, NULL);
INSERT INTO `translations` VALUES (465, 'general', 'Created', 'Created', 'បានបង្កើត', NULL, NULL);
INSERT INTO `translations` VALUES (466, 'general', 'Disk', 'Disk', 'ថាស', NULL, NULL);
INSERT INTO `translations` VALUES (467, 'general', 'Delete this backup?', 'Delete this backup?', 'លុបការបម្រុងទុកនេះ?', NULL, NULL);
INSERT INTO `translations` VALUES (468, 'general', 'No backups found', 'No backups found', 'រកមិនឃើញការបម្រុងទុកទេ', NULL, NULL);
INSERT INTO `translations` VALUES (469, 'general', 'Click \"Create Backup\" to get started.', 'Click \"Create Backup\" to get started.', 'ចុច \"បង្កើតការបម្រុងទុក\" ដើម្បីចាប់ផ្តើម។', NULL, NULL);
INSERT INTO `translations` VALUES (470, 'general', 'Runs daily at the specified time using Laravel\\\'s schedule command.', 'Runs daily at the specified time using Laravel\\\'s schedule command.', 'ដំណើរការប្រចាំថ្ងៃតាមពេលកំណត់ដោយប្រើពាក្យបញ្ជាកំណត់ពេលរបស់ Laravel។', NULL, NULL);
INSERT INTO `translations` VALUES (471, 'general', 'Daily @ ', 'Daily @ ', 'ប្រចាំថ្ងៃនៅម៉ោង @ ', NULL, NULL);
INSERT INTO `translations` VALUES (472, 'general', 'N/A', 'N/A', 'មិនមាន', NULL, NULL);
INSERT INTO `translations` VALUES (473, 'general', 'To make this scheduler work automatically in the background on your Windows Server or PC, you must add a single task to the Windows Task Scheduler that executes Laravel\\\'s command scheduler every minute.', 'To make this scheduler work automatically in the background on your Windows Server or PC, you must add a single task to the Windows Task Scheduler that executes Laravel\\\'s command scheduler every minute.', 'ដើម្បីឱ្យកម្មវិធីនេះដំណើរការដោយស្វ័យប្រវត្តិ សូមបន្ថែមការកំណត់នៅក្នុង Windows Task Scheduler ។', NULL, NULL);
INSERT INTO `translations` VALUES (474, 'general', 'Create a New Basic Task', 'Create a New Basic Task', 'បង្កើតភារកិច្ចថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (475, 'general', 'Open Windows Task Scheduler, click', 'Open Windows Task Scheduler, click', 'បើក Windows Task Scheduler ហើយចុច', NULL, NULL);
INSERT INTO `translations` VALUES (476, 'general', 'Create Basic Task...', 'Create Basic Task...', 'បង្កើតភារកិច្ចជាមូលដ្ឋាន...', NULL, NULL);
INSERT INTO `translations` VALUES (477, 'general', ', name it ', ', name it ', 'ហើយដាក់ឈ្មោះវាថា ', NULL, NULL);
INSERT INTO `translations` VALUES (478, 'general', ' and set Trigger to ', ' and set Trigger to ', ' និងកំណត់ពេលដំណើរការទៅកាន់ ', NULL, NULL);
INSERT INTO `translations` VALUES (479, 'general', 'Daily', 'Daily', 'ប្រចាំថ្ងៃ', NULL, NULL);
INSERT INTO `translations` VALUES (480, 'general', ' or ', ' or ', ' ឬ ', NULL, NULL);
INSERT INTO `translations` VALUES (481, 'general', 'Configure Repeating Interval', 'Configure Repeating Interval', 'កំណត់រយៈពេលធ្វើម្តងទៀត', NULL, NULL);
INSERT INTO `translations` VALUES (482, 'general', 'Once created, edit the task properties. Under Triggers, select the trigger, click Edit, tick ', 'Once created, edit the task properties. Under Triggers, select the trigger, click Edit, tick ', 'នៅពេលបង្កើតរួច កែសម្រួលការកំណត់របស់វា។', NULL, NULL);
INSERT INTO `translations` VALUES (483, 'general', 'Repeat task every:', 'Repeat task every:', 'ធ្វើភារកិច្ចឡើងវិញរៀងរាល់:', NULL, NULL);
INSERT INTO `translations` VALUES (484, 'general', ' and set duration to ', ' and set duration to ', ' និងកំណត់រយៈពេលទៅកាន់ ', NULL, NULL);
INSERT INTO `translations` VALUES (485, 'general', 'Indefinitely', 'Indefinitely', 'គ្មានកំណត់', NULL, NULL);
INSERT INTO `translations` VALUES (486, 'general', 'Configure Action Settings', 'Configure Action Settings', 'កំណត់សកម្មភាព', NULL, NULL);
INSERT INTO `translations` VALUES (487, 'general', 'Start a Program', 'Start a Program', 'ចាប់ផ្តើមកម្មវិធី', NULL, NULL);
INSERT INTO `translations` VALUES (488, 'general', ' and copy these values:', ' and copy these values:', ' ហើយចម្លងតម្លៃទាំងនេះ:', NULL, NULL);
INSERT INTO `translations` VALUES (489, 'general', 'Program/Script', 'Program/Script', 'កម្មវិធី/ស្គ្រីប', NULL, NULL);
INSERT INTO `translations` VALUES (490, 'general', 'Copy', 'Copy', 'ចម្លង', NULL, NULL);
INSERT INTO `translations` VALUES (491, 'general', 'Add Arguments (Optional)', 'Add Arguments (Optional)', 'បន្ថែមអាគុយម៉ង់ (ជាជម្រើស)', NULL, NULL);
INSERT INTO `translations` VALUES (492, 'general', 'Start In (Optional / Working Dir)', 'Start In (Optional / Working Dir)', 'ចាប់ផ្តើមនៅ (ថតការងារ)', NULL, NULL);
INSERT INTO `translations` VALUES (493, 'general', 'Select Backup Destination Folder', 'Select Backup Destination Folder', 'ជ្រើសរើសថតផ្ទុកទិន្នន័យបម្រុង', NULL, NULL);
INSERT INTO `translations` VALUES (494, 'general', 'Go Up', 'Go Up', 'ត្រឡប់ក្រោយ', NULL, NULL);
INSERT INTO `translations` VALUES (495, 'general', 'New folder name...', 'New folder name...', 'ឈ្មោះថតថ្មី...', NULL, NULL);
INSERT INTO `translations` VALUES (496, 'general', 'New Folder', 'New Folder', 'ថតថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (497, 'general', 'Folders', 'Folders', 'ថតឯកសារ', NULL, NULL);
INSERT INTO `translations` VALUES (498, 'general', 'Selected: ', 'Selected: ', 'បានជ្រើសរើស: ', NULL, NULL);
INSERT INTO `translations` VALUES (499, 'general', 'Select Folder', 'Select Folder', 'ជ្រើសរើសថតឯកសារ', NULL, NULL);
INSERT INTO `translations` VALUES (500, 'general', 'Backing up...', 'Backing up...', 'កំពុងបម្រុងទុក...', NULL, NULL);
INSERT INTO `translations` VALUES (501, 'general', 'Backup process started. Please wait...', 'Backup process started. Please wait...', 'ដំណើរការបម្រុងទុកបានចាប់ផ្តើម។ សូមរង់ចាំ...', NULL, NULL);
INSERT INTO `translations` VALUES (502, 'general', 'Loading folders...', 'Loading folders...', 'កំពុងផ្ទុកថតឯកសារ...', NULL, NULL);
INSERT INTO `translations` VALUES (503, 'general', 'No subfolders found', 'No subfolders found', 'រកមិនឃើញថតរងទេ', NULL, NULL);
INSERT INTO `translations` VALUES (504, 'general', 'Failed to load directories.', 'Failed to load directories.', 'បរាជ័យក្នុងការផ្ទុកថតឯកសារ។', NULL, NULL);
INSERT INTO `translations` VALUES (505, 'general', 'Please select a specific folder, not the drives list.', 'Please select a specific folder, not the drives list.', 'សូមជ្រើសរើសថតជាក់លាក់ មិនមែនបញ្ជីថាស។', NULL, NULL);
INSERT INTO `translations` VALUES (506, 'general', 'Backup folder selected.', 'Backup folder selected.', 'ថតបម្រុងទុកត្រូវបានជ្រើសរើស។', NULL, NULL);
INSERT INTO `translations` VALUES (507, 'general', 'Please enter a folder name.', 'Please enter a folder name.', 'សូមបញ្ចូលឈ្មោះថតឯកសារ។', NULL, NULL);
INSERT INTO `translations` VALUES (508, 'general', 'Cannot create folders directly in drive root list.', 'Cannot create folders directly in drive root list.', 'មិនអាចបង្កើតថតឯកសារនៅក្នុងបញ្ជីថាសផ្ទាល់បានទេ។', NULL, NULL);
INSERT INTO `translations` VALUES (509, 'general', 'Error creating folder.', 'Error creating folder.', 'មានកំហុសក្នុងការបង្កើតថតឯកសារ។', NULL, NULL);
INSERT INTO `translations` VALUES (510, 'general', 'Delete Category', 'Delete Category', 'លុបចំណាត់ថ្នាក់ក្រុម', NULL, NULL);
INSERT INTO `translations` VALUES (511, 'general', 'New Currency', 'New Currency', 'រូបិយប័ណ្ណថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (512, 'general', 'Define a new financial symbol for your platform', 'Define a new financial symbol for your platform', 'កំណត់និមិត្តសញ្ញាហិរញ្ញវត្ថុថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (513, 'general', 'Currency Details', 'Currency Details', 'ព័ត៌មានលម្អិតរូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (514, 'general', 'Display Symbol', 'Display Symbol', 'និមិត្តសញ្ញាបង្ហាញ', NULL, NULL);
INSERT INTO `translations` VALUES (515, 'general', 'Save Currency', 'Save Currency', 'រក្សាទុករូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (516, 'general', 'Active Symbol', 'Active Symbol', 'និមិត្តសញ្ញាសកម្ម', NULL, NULL);
INSERT INTO `translations` VALUES (517, 'general', 'Ensure symbols are correctly formatted for invoices and receipts.', 'Ensure symbols are correctly formatted for invoices and receipts.', 'ត្រូវប្រាកដថានិមិត្តសញ្ញាត្រឹមត្រូវសម្រាប់វិក្កយបត្រ។', NULL, NULL);
INSERT INTO `translations` VALUES (518, 'general', 'Edit Currency', 'Edit Currency', 'កែសម្រួលរូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (519, 'general', 'Modifying parameters for', 'Modifying parameters for', 'កែសម្រួលព័ត៌មានសម្រាប់', NULL, NULL);
INSERT INTO `translations` VALUES (520, 'general', 'All symbol changes are tracked in the audit log.', 'All symbol changes are tracked in the audit log.', 'រាល់ការផ្លាស់ប្តូរនិមិត្តសញ្ញាត្រូវបានកត់ត្រាទុក។', NULL, NULL);
INSERT INTO `translations` VALUES (521, 'general', 'Delete Currency', 'Delete Currency', 'លុបរូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (522, 'general', 'Currencies', 'Currencies', 'រូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (523, 'general', 'Currency Management', 'Currency Management', 'ការគ្រប់គ្រងរូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (524, 'general', 'Configure financial symbols and operational status for your platform', 'Configure financial symbols and operational status for your platform', 'កំណត់និមិត្តសញ្ញាហិរញ្ញវត្ថុ និងស្ថានភាពប្រតិបត្តិការ', NULL, NULL);
INSERT INTO `translations` VALUES (525, 'general', 'Add Currency', 'Add Currency', 'បន្ថែមរូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (526, 'general', 'Search by name or symbol...', 'Search by name or symbol...', 'ស្វែងរកឈ្មោះ ឬនិមិត្តសញ្ញា...', NULL, NULL);
INSERT INTO `translations` VALUES (527, 'general', 'Financial Token', 'Financial Token', 'និមិត្តសញ្ញាហិរញ្ញវត្ថុ', NULL, NULL);
INSERT INTO `translations` VALUES (528, 'general', 'No currencies found', 'No currencies found', 'រកមិនឃើញរូបិយប័ណ្ណទេ', NULL, NULL);
INSERT INTO `translations` VALUES (529, 'general', 'Add your first currency to get started.', 'Add your first currency to get started.', 'បន្ថែមរូបិយប័ណ្ណដំបូងរបស់អ្នកដើម្បីចាប់ផ្តើម។', NULL, NULL);
INSERT INTO `translations` VALUES (530, 'general', 'Create a new client record in your system', 'Create a new client record in your system', 'បង្កើតកំណត់ត្រាអតិថិជនថ្មីនៅក្នុងប្រព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (531, 'general', 'Profile Photo', 'Profile Photo', 'រូបថតប្រវត្តិរូប', NULL, NULL);
INSERT INTO `translations` VALUES (532, 'general', 'Max 2MB', 'Max 2MB', 'អតិបរមា 2MB', NULL, NULL);
INSERT INTO `translations` VALUES (533, 'general', 'Enter customer name', 'Enter customer name', 'បញ្ចូលឈ្មោះអតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (534, 'general', 'Email Address', 'Email Address', 'អាសយដ្ឋានអ៊ីមែល', NULL, NULL);
INSERT INTO `translations` VALUES (535, 'general', 'Phone Number', 'Phone Number', 'លេខទូរស័ព្ទ', NULL, NULL);
INSERT INTO `translations` VALUES (536, 'general', '+000 000 000', '+000 000 000', '+000 000 000', NULL, NULL);
INSERT INTO `translations` VALUES (537, 'general', 'City', 'City', 'ទីក្រុង', NULL, NULL);
INSERT INTO `translations` VALUES (538, 'general', 'Enter city', 'Enter city', 'បញ្ចូលទីក្រុង', NULL, NULL);
INSERT INTO `translations` VALUES (539, 'general', 'Full residential address', 'Full residential address', 'អាសយដ្ឋានលំនៅដ្ឋានពេញលេញ', NULL, NULL);
INSERT INTO `translations` VALUES (540, 'general', 'Create Customer', 'Create Customer', 'បង្កើតអតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (541, 'general', 'Change Photo', 'Change Photo', 'ប្តូររូបថត', NULL, NULL);
INSERT INTO `translations` VALUES (542, 'general', 'Customers', 'Customers', 'អតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (543, 'general', 'Manage your clientele records, contact details and histories', 'Manage your clientele records, contact details and histories', 'គ្រប់គ្រងកំណត់ត្រាអតិថិជន និងប្រវត្តិទំនាក់ទំនង', NULL, NULL);
INSERT INTO `translations` VALUES (544, 'general', 'Add Customer', 'Add Customer', 'បន្ថែមអតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (545, 'general', 'Search name, email or phone...', 'Search name, email or phone...', 'ស្វែងរកឈ្មោះ, អ៊ីមែល ឬលេខទូរស័ព្ទ...', NULL, NULL);
INSERT INTO `translations` VALUES (546, 'general', 'Customer', 'Customer', 'អតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (547, 'general', 'Location', 'Location', 'ទីតាំង', NULL, NULL);
INSERT INTO `translations` VALUES (548, 'general', 'Client', 'Client', 'អតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (549, 'general', 'No customers found', 'No customers found', 'រកមិនឃើញអតិថិជនទេ', NULL, NULL);
INSERT INTO `translations` VALUES (550, 'general', 'Add your first customer to get started.', 'Add your first customer to get started.', 'បន្ថែមអតិថិជនដំបូងរបស់អ្នកដើម្បីចាប់ផ្តើម។', NULL, NULL);
INSERT INTO `translations` VALUES (551, 'general', 'Customer Profile', 'Customer Profile', 'ប្រវត្តិរូបអតិថិជន', NULL, NULL);
INSERT INTO `translations` VALUES (552, 'general', 'Joined', 'Joined', 'បានចូលរួម', NULL, NULL);
INSERT INTO `translations` VALUES (553, 'general', 'Recent Orders', 'Recent Orders', 'ការបញ្ជាទិញថ្មីៗ', NULL, NULL);
INSERT INTO `translations` VALUES (554, 'general', 'Order No', 'Order No', 'លេខបញ្ជាទិញ', NULL, NULL);
INSERT INTO `translations` VALUES (555, 'general', 'No orders yet.', 'No orders yet.', 'មិនទាន់មានការបញ្ជាទិញ។', NULL, NULL);
INSERT INTO `translations` VALUES (556, 'general', 'Refreshing in 2mn', 'Refreshing in 2mn', 'ផ្ទុកឡើងវិញក្នុងរយៈពេល 2នាទី', NULL, NULL);
INSERT INTO `translations` VALUES (557, 'general', 'Refresh', 'Refresh', 'ផ្ទុកឡើងវិញ', NULL, NULL);
INSERT INTO `translations` VALUES (558, 'general', 'Live Item Preparation Queue', 'Live Item Preparation Queue', 'ជួររៀបចំមុខម្ហូបបច្ចុប្បន្ន', NULL, NULL);
INSERT INTO `translations` VALUES (559, 'general', 'Item', 'Item', 'មុខម្ហូប', NULL, NULL);
INSERT INTO `translations` VALUES (560, 'general', 'Notes', 'Notes', 'ចំណាំ', NULL, NULL);
INSERT INTO `translations` VALUES (561, 'general', 'Done', 'Done', 'រួចរាល់', NULL, NULL);
INSERT INTO `translations` VALUES (562, 'general', 'Delayed', 'Delayed', 'យឺតយ៉ាវ', NULL, NULL);
INSERT INTO `translations` VALUES (563, 'general', 'Start', 'Start', 'ចាប់ផ្តើម', NULL, NULL);
INSERT INTO `translations` VALUES (564, 'general', 'Kitchen Item Note', 'Kitchen Item Note', 'ចំណាំផ្ទះបាយ', NULL, NULL);
INSERT INTO `translations` VALUES (565, 'general', 'Close', 'Close', 'បិទ', NULL, NULL);
INSERT INTO `translations` VALUES (566, 'general', 'Instructions for', 'Instructions for', 'ការណែនាំសម្រាប់', NULL, NULL);
INSERT INTO `translations` VALUES (567, 'general', 'Save Note', 'Save Note', 'រក្សាទុកចំណាំ', NULL, NULL);
INSERT INTO `translations` VALUES (568, 'general', 'No active kitchen items currently pending.', 'No active kitchen items currently pending.', 'មិនមានមុខម្ហូបកំពុងរង់ចាំនៅក្នុងផ្ទះបាយទេ។', NULL, NULL);
INSERT INTO `translations` VALUES (569, 'general', 'New Menu Item', 'New Menu Item', 'មុខម្ហូបថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (570, 'general', 'Add a new item to your restaurant menu', 'Add a new item to your restaurant menu', 'បន្ថែមមុខម្ហូបថ្មីទៅបញ្ជីមុខម្ហូប', NULL, NULL);
INSERT INTO `translations` VALUES (571, 'general', 'Item Photo', 'Item Photo', 'រូបថតមុខម្ហូប', NULL, NULL);
INSERT INTO `translations` VALUES (572, 'general', 'Click to upload image', 'Click to upload image', 'ចុចដើម្បីបង្ហោះរូបភាព', NULL, NULL);
INSERT INTO `translations` VALUES (573, 'general', 'Recommended 800×800px', 'Recommended 800×800px', 'ណែនាំទំហំ 800x800px', NULL, NULL);
INSERT INTO `translations` VALUES (574, 'general', 'Availability', 'Availability', 'ភាពអាចរកបាន', NULL, NULL);
INSERT INTO `translations` VALUES (575, 'general', 'Available for Order', 'Available for Order', 'អាចកុម្ម៉ង់បាន', NULL, NULL);
INSERT INTO `translations` VALUES (576, 'general', 'High-quality images with neutral backgrounds work best in digital menus.', 'High-quality images with neutral backgrounds work best in digital menus.', 'រូបភាពគុណភាពខ្ពស់ជួយទាក់ទាញចំណាប់អារម្មណ៍។', NULL, NULL);
INSERT INTO `translations` VALUES (577, 'general', 'Describe ingredients, taste, and presentation...', 'Describe ingredients, taste, and presentation...', 'ពណ៌នាគ្រឿងផ្សំ, រសជាតិ និងការបង្ហាញ...', NULL, NULL);
INSERT INTO `translations` VALUES (578, 'general', 'Save Item', 'Save Item', 'រក្សាទុកមុខម្ហូប', NULL, NULL);
INSERT INTO `translations` VALUES (579, 'general', 'Editing', 'Editing', 'កំពុងកែសម្រួល', NULL, NULL);
INSERT INTO `translations` VALUES (580, 'general', 'Click to change image', 'Click to change image', 'ចុចដើម្បីប្តូររូបភាព', NULL, NULL);
INSERT INTO `translations` VALUES (581, 'general', 'Add Item', 'Add Item', 'បន្ថែមមុខម្ហូប', NULL, NULL);
INSERT INTO `translations` VALUES (582, 'general', 'No items match your criteria', 'No items match your criteria', 'មិនមានមុខម្ហូបតាមការស្វែងរករបស់អ្នកទេ', NULL, NULL);
INSERT INTO `translations` VALUES (583, 'general', 'No description available.', 'No description available.', 'មិនមានការពណ៌នាទេ។', NULL, NULL);
INSERT INTO `translations` VALUES (584, 'general', 'Last Updated', 'Last Updated', 'កែប្រែចុងក្រោយ', NULL, NULL);
INSERT INTO `translations` VALUES (585, 'general', 'Category Status', 'Category Status', 'ស្ថានភាពចំណាត់ថ្នាក់ក្រុម', NULL, NULL);
INSERT INTO `translations` VALUES (586, 'general', 'An unexpected error occurred.', 'An unexpected error occurred.', 'មានកំហុសមិនរំពឹងទុកបានកើតឡើង។', NULL, NULL);
INSERT INTO `translations` VALUES (587, 'general', 'QR Pay selected. Click OK once mobile transaction is complete.', 'QR Pay selected. Click OK once mobile transaction is complete.', 'បានជ្រើសរើសបង់ប្រាក់តាម QR។ ចុច OK ពេលប្រតិបត្តិការទូរស័ព្ទរួចរាល់។', NULL, NULL);
INSERT INTO `translations` VALUES (588, 'general', 'No valid items in cart. Please re-add your items.', 'No valid items in cart. Please re-add your items.', 'មិនមានមុខម្ហូបក្នុងកន្ត្រក។ សូមបញ្ចូលម្ហូបឡើងវិញ។', NULL, NULL);
INSERT INTO `translations` VALUES (589, 'general', 'Order completed successfully!', 'Order completed successfully!', 'ការកុម្ម៉ង់បានបញ្ចប់ដោយជោគជ័យ!', NULL, NULL);
INSERT INTO `translations` VALUES (590, 'general', 'Order saved to draft successfully!', 'Order saved to draft successfully!', 'ការកុម្ម៉ង់ត្រូវបានរក្សាទុកជាការព្រាងដោយជោគជ័យ!', NULL, NULL);
INSERT INTO `translations` VALUES (591, 'general', 'Search by Order ID...', 'Search by Order ID...', 'ស្វែងរកតាមលេខកុម្ម៉ង់...', NULL, NULL);
INSERT INTO `translations` VALUES (592, 'general', 'Created By', 'Created By', 'បង្កើតដោយ', NULL, NULL);
INSERT INTO `translations` VALUES (593, 'general', 'No orders found.', 'No orders found.', 'រកមិនឃើញការបញ្ជាទិញ។', NULL, NULL);
INSERT INTO `translations` VALUES (594, 'general', 'List Menu Order', 'List Menu Order', 'បញ្ជីម្ហូបដែលបានកុម្ម៉ង់', NULL, NULL);
INSERT INTO `translations` VALUES (595, 'general', 'No items in this order', 'No items in this order', 'មិនមានមុខម្ហូបក្នុងការកុម្ម៉ង់នេះទេ', NULL, NULL);
INSERT INTO `translations` VALUES (596, 'general', 'Select Payment Method', 'Select Payment Method', 'ជ្រើសរើសមធ្យោបាយបង់ប្រាក់', NULL, NULL);
INSERT INTO `translations` VALUES (597, 'general', 'QR Pay Instructions', 'QR Pay Instructions', 'ការណែនាំបង់ប្រាក់តាម QR', NULL, NULL);
INSERT INTO `translations` VALUES (598, 'general', 'Scan the QR code with your mobile wallet, then enter the payer name shown on the phone receipt.', 'Scan the QR code with your mobile wallet, then enter the payer name shown on the phone receipt.', 'ស្កេនកូដ QR រួចបញ្ចូលឈ្មោះអ្នកបង់។', NULL, NULL);
INSERT INTO `translations` VALUES (599, 'general', 'Open in new tab', 'Open in new tab', 'បើកក្នុងផ្ទាំងថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (600, 'general', 'Paid By', 'Paid by', 'បង់ប្រាក់ដោយ', NULL, NULL);
INSERT INTO `translations` VALUES (601, 'general', 'Account / Phone', 'Account / Phone', 'គណនី / ទូរស័ព្ទ', NULL, NULL);
INSERT INTO `translations` VALUES (602, 'general', 'Add Items / Checkout', 'Add Items / Checkout', 'បន្ថែមមុខម្ហូប / ទូទាត់', NULL, NULL);
INSERT INTO `translations` VALUES (603, 'general', 'Qty', 'Qty', 'ចំនួន', NULL, NULL);
INSERT INTO `translations` VALUES (604, 'general', 'Deleted Item', 'Deleted Item', 'លុបមុខម្ហូប', NULL, NULL);
INSERT INTO `translations` VALUES (605, 'general', 'Internal Notes', 'Internal Notes', 'ចំណាំផ្ទៃក្នុង', NULL, NULL);
INSERT INTO `translations` VALUES (606, 'general', 'Customer & Service', 'Customer & Service', 'អតិថិជន និងសេវាកម្ម', NULL, NULL);
INSERT INTO `translations` VALUES (607, 'general', 'No Table Assigned', 'No Table Assigned', 'មិនមានតុ', NULL, NULL);
INSERT INTO `translations` VALUES (608, 'general', 'Financial Summary', 'Financial Summary', 'របាយការណ៍សង្ខេបហិរញ្ញវត្ថុ', NULL, NULL);
INSERT INTO `translations` VALUES (609, 'general', 'Paid via Cash', 'Paid via Cash', 'បង់ជាសាច់ប្រាក់', NULL, NULL);
INSERT INTO `translations` VALUES (610, 'general', 'Paid via Card', 'Paid via Card', 'បង់តាមកាត', NULL, NULL);
INSERT INTO `translations` VALUES (611, 'general', 'Paid via QR', 'Paid via QR', 'បង់តាម QR', NULL, NULL);
INSERT INTO `translations` VALUES (612, 'general', 'Paid via KHQR', 'Paid via KHQR', 'បង់តាម KHQR', NULL, NULL);
INSERT INTO `translations` VALUES (613, 'general', 'Payment Settled', 'Payment Settled', 'ការបង់ប្រាក់បានទូទាត់រួចរាល់', NULL, NULL);
INSERT INTO `translations` VALUES (614, 'general', 'Mobile account', 'Mobile account', 'គណនីទូរស័ព្ទ', NULL, NULL);
INSERT INTO `translations` VALUES (615, 'general', 'Amount & Date', 'Amount & Date', 'ចំនួន និងកាលបរិច្ឆេទ', NULL, NULL);
INSERT INTO `translations` VALUES (616, 'general', 'No transactions found', 'No transactions found', 'រកមិនឃើញប្រតិបត្តិការទេ', NULL, NULL);
INSERT INTO `translations` VALUES (617, 'general', 'Change', 'Change', 'ប្រាក់អាប់', NULL, NULL);
INSERT INTO `translations` VALUES (618, 'general', 'Mobile', 'Mobile', 'ទូរស័ព្ទ', NULL, NULL);
INSERT INTO `translations` VALUES (619, 'general', 'Manage your personal credentials and contact info', 'Manage your personal credentials and contact info', 'គ្រប់គ្រងព័ត៌មានផ្ទាល់ខ្លួនរបស់អ្នក', NULL, NULL);
INSERT INTO `translations` VALUES (620, 'general', 'Shown across the admin console', 'Shown across the admin console', 'បង្ហាញនៅទូទាំងប្រព័ន្ធគ្រប់គ្រង', NULL, NULL);
INSERT INTO `translations` VALUES (621, 'general', 'Administrative Role', 'Administrative Role', 'តួនាទីគ្រប់គ្រង', NULL, NULL);
INSERT INTO `translations` VALUES (622, 'general', 'Roles are managed by system owners', 'Roles are managed by system owners', 'តួនាទីត្រូវបានគ្រប់គ្រងដោយម្ចាស់ប្រព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (623, 'general', 'Personal Information', 'Personal Information', 'ព័ត៌មានផ្ទាល់ខ្លួន', NULL, NULL);
INSERT INTO `translations` VALUES (624, 'general', 'Display Name', 'Display Name', 'ឈ្មោះបង្ហាញ', NULL, NULL);
INSERT INTO `translations` VALUES (625, 'general', 'Enter your name', 'Enter your name', 'បញ្ចូលឈ្មោះរបស់អ្នក', NULL, NULL);
INSERT INTO `translations` VALUES (626, 'general', 'Security & Password', 'Security & Password', 'សុវត្ថិភាព និងពាក្យសម្ងាត់', NULL, NULL);
INSERT INTO `translations` VALUES (627, 'general', 'Leave blank to keep current', 'Leave blank to keep current', 'ទុកឲ្យទទេដើម្បីរក្សាពាក្យសម្ងាត់បច្ចុប្បន្ន', NULL, NULL);
INSERT INTO `translations` VALUES (628, 'general', 'Repeat new password', 'Repeat new password', 'វាយពាក្យសម្ងាត់ថ្មីម្តងទៀត', NULL, NULL);
INSERT INTO `translations` VALUES (629, 'general', 'Enter your street address', 'Enter your street address', 'បញ្ចូលអាសយដ្ឋានផ្លូវ', NULL, NULL);
INSERT INTO `translations` VALUES (630, 'general', 'State / Region', 'State / Region', 'ខេត្ត / តំបន់', NULL, NULL);
INSERT INTO `translations` VALUES (631, 'general', 'Enter state', 'Enter state', 'បញ្ចូលខេត្ត', NULL, NULL);
INSERT INTO `translations` VALUES (632, 'general', 'Date Range', 'Date Range', 'ចន្លោះកាលបរិច្ឆេទ', NULL, NULL);
INSERT INTO `translations` VALUES (633, 'general', 'Failed to fetch report data. Please try again.', 'Failed to fetch report data. Please try again.', 'បរាជ័យក្នុងការទាញយករបាយការណ៍។ សូមព្យាយាមម្តងទៀត។', NULL, NULL);
INSERT INTO `translations` VALUES (634, 'general', 'All filtered transactions', 'All filtered transactions', 'ប្រតិបត្តិការដែលបានចម្រោះទាំងអស់', NULL, NULL);
INSERT INTO `translations` VALUES (635, 'general', 'Search ledgers...', 'Search ledgers...', 'ស្វែងរកបញ្ជី...', NULL, NULL);
INSERT INTO `translations` VALUES (636, 'general', 'Order #', 'Order #', 'ការបញ្ជាទិញ #', NULL, NULL);
INSERT INTO `translations` VALUES (637, 'general', 'Edit Role', 'Edit Role', 'កែសម្រួលតួនាទី', NULL, NULL);
INSERT INTO `translations` VALUES (638, 'general', 'New Role', 'New Role', 'តួនាទីថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (639, 'general', 'Configure access levels and permission groups', 'Configure access levels and permission groups', 'កំណត់សិទ្ធិអនុញ្ញាត និងក្រុម', NULL, NULL);
INSERT INTO `translations` VALUES (640, 'general', 'Role Details', 'Role Details', 'ព័ត៌មានលម្អិតតួនាទី', NULL, NULL);
INSERT INTO `translations` VALUES (641, 'general', 'Role Title', 'Role Title', 'ចំណងជើងតួនាទី', NULL, NULL);
INSERT INTO `translations` VALUES (642, 'general', 'Describe the access levels for this role...', 'Describe the access levels for this role...', 'ពណ៌នាសិទ្ធិសម្រាប់តួនាទីនេះ...', NULL, NULL);
INSERT INTO `translations` VALUES (643, 'general', 'Create Role', 'Create Role', 'បង្កើតតួនាទី', NULL, NULL);
INSERT INTO `translations` VALUES (644, 'general', 'Permissions Matrix', 'Permissions Matrix', 'តារាងសិទ្ធិ', NULL, NULL);
INSERT INTO `translations` VALUES (645, 'general', 'Select All', 'Select All', 'ជ្រើសរើសទាំងអស់', NULL, NULL);
INSERT INTO `translations` VALUES (646, 'general', 'Roles & Permissions', 'Roles & Permissions', 'តួនាទី និងសិទ្ធិ', NULL, NULL);
INSERT INTO `translations` VALUES (647, 'general', 'Define access hierarchies and system permission profiles', 'Define access hierarchies and system permission profiles', 'កំណត់កម្រិតសិទ្ធិក្នុងប្រព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (648, 'general', 'Staff', 'Staff', 'បុគ្គលិក', NULL, NULL);
INSERT INTO `translations` VALUES (649, 'general', 'No permissions', 'No permissions', 'មិនមានសិទ្ធិ', NULL, NULL);
INSERT INTO `translations` VALUES (650, 'general', 'Configure your restaurant\'s global parameters', 'Configure your restaurant\'s global parameters', 'កំណត់រចនាសម្ព័ន្ធទូទៅរបស់ភោជនីយដ្ឋាន', NULL, NULL);
INSERT INTO `translations` VALUES (651, 'general', 'Save All Settings', 'Save All Settings', 'រក្សាទុកការកំណត់ទាំងអស់', NULL, NULL);
INSERT INTO `translations` VALUES (652, 'general', 'Business Information', 'Business Information', 'ព័ត៌មានអាជីវកម្ម', NULL, NULL);
INSERT INTO `translations` VALUES (653, 'general', 'Legal Address', 'Legal Address', 'អាសយដ្ឋានស្របច្បាប់', NULL, NULL);
INSERT INTO `translations` VALUES (654, 'general', 'Full address...', 'Full address...', 'អាសយដ្ឋានពេញ...', NULL, NULL);
INSERT INTO `translations` VALUES (655, 'general', 'Financial & Service', 'Financial & Service', 'ហិរញ្ញវត្ថុ និងសេវាកម្ម', NULL, NULL);
INSERT INTO `translations` VALUES (656, 'general', 'Select Currency', 'Select Currency', 'ជ្រើសរើសរូបិយប័ណ្ណ', NULL, NULL);
INSERT INTO `translations` VALUES (657, 'general', 'Exchange Rate (1$ = ? ៛)', 'Exchange Rate (1$ = ? ៛)', 'អត្រាប្តូរប្រាក់ (1$ = ? ៛)', NULL, NULL);
INSERT INTO `translations` VALUES (658, 'general', 'Branding & Aesthetics', 'Branding & Aesthetics', 'ស្លាកសញ្ញា និងរូបរាង', NULL, NULL);
INSERT INTO `translations` VALUES (659, 'general', 'Change Logo', 'Change Logo', 'ប្តូរនិមិត្តសញ្ញា', NULL, NULL);
INSERT INTO `translations` VALUES (660, 'general', 'Browser Favicon', 'Browser Favicon', 'រូបតំណាង Browser', NULL, NULL);
INSERT INTO `translations` VALUES (661, 'general', 'Change Favicon', 'Change Favicon', 'ប្តូររូបតំណាង Browser', NULL, NULL);
INSERT INTO `translations` VALUES (662, 'general', 'Displayed in browser tabs (PNG or ICO)', 'Displayed in browser tabs (PNG or ICO)', 'បង្ហាញនៅផ្នែកខាងលើនៃ Browser (PNG ឬ ICO)', NULL, NULL);
INSERT INTO `translations` VALUES (663, 'general', 'High-resolution transparent PNGs are recommended for the best look across light and dark modes.', 'High-resolution transparent PNGs are recommended for the best look across light and dark modes.', 'គួរប្រើរូបភាព PNG គ្មានផ្ទៃខាងក្រោយដែលមានគុណភាពខ្ពស់។', NULL, NULL);
INSERT INTO `translations` VALUES (664, 'general', 'New Table', 'New Table', 'តុថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (665, 'general', 'Register a new seating area for your restaurant', 'Register a new seating area for your restaurant', 'ចុះឈ្មោះតុថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (666, 'general', 'New tables default to Available for immediate guest seating.', 'New tables default to Available for immediate guest seating.', 'តុថ្មីនឹងត្រូវបានកំណត់ជា \'ទំនេរ\' ជាស្រេច។', NULL, NULL);
INSERT INTO `translations` VALUES (667, 'general', 'Seating Capacity', 'Seating Capacity', 'ចំនួនអ្នកអង្គុយ', NULL, NULL);
INSERT INTO `translations` VALUES (668, 'general', 'Create Table', 'Create Table', 'បង្កើតតុ', NULL, NULL);
INSERT INTO `translations` VALUES (669, 'general', 'Status changes reflect immediately on the floor map.', 'Status changes reflect immediately on the floor map.', 'ការផ្លាស់ប្តូរស្ថានភាពនឹងបង្ហាញភ្លាមៗនៅលើប្លង់តុ។', NULL, NULL);
INSERT INTO `translations` VALUES (670, 'general', 'Add Table', 'Add Table', 'បន្ថែមតុ', NULL, NULL);
INSERT INTO `translations` VALUES (671, 'general', 'No tables found', 'No tables found', 'រកមិនឃើញតុទេ', NULL, NULL);
INSERT INTO `translations` VALUES (672, 'general', 'Add your first table to get started.', 'Add your first table to get started.', 'បន្ថែមតុដំបូងរបស់អ្នកដើម្បីចាប់ផ្តើម។', NULL, NULL);
INSERT INTO `translations` VALUES (673, 'general', 'Add a new key-value pair for localization', 'Add a new key-value pair for localization', 'បន្ថែមពាក្យបកប្រែថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (674, 'general', 'Group', 'Group', 'ក្រុម', NULL, NULL);
INSERT INTO `translations` VALUES (675, 'general', 'Must be unique and without spaces', 'Must be unique and without spaces', 'ត្រូវតែមានតែមួយ និងគ្មានដកឃ្លា', NULL, NULL);
INSERT INTO `translations` VALUES (676, 'general', 'English Text', 'English Text', 'អត្ថបទភាសាអង់គ្លេស', NULL, NULL);
INSERT INTO `translations` VALUES (677, 'general', 'Enter English translation...', 'Enter English translation...', 'បញ្ចូលអត្ថបទអង់គ្លេស...', NULL, NULL);
INSERT INTO `translations` VALUES (678, 'general', 'Khmer Text', 'Khmer Text', 'អត្ថបទភាសាខ្មែរ', NULL, NULL);
INSERT INTO `translations` VALUES (679, 'general', 'Save Translation', 'Save Translation', 'រក្សាទុកការបកប្រែ', NULL, NULL);
INSERT INTO `translations` VALUES (680, 'general', 'Edit Translation', 'Edit Translation', 'កែសម្រួលការបកប្រែ', NULL, NULL);
INSERT INTO `translations` VALUES (681, 'general', 'Key', 'Key', 'គន្លឹះ', NULL, NULL);
INSERT INTO `translations` VALUES (682, 'general', 'Manage multilingual key-value pairs for your application', 'Manage multilingual key-value pairs for your application', 'គ្រប់គ្រងការបកប្រែពហុភាសាសម្រាប់ប្រព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (683, 'general', 'Search by key or text...', 'Search by key or text...', 'ស្វែងរក...', NULL, NULL);
INSERT INTO `translations` VALUES (684, 'general', 'English', 'English', 'អង់គ្លេស', NULL, NULL);
INSERT INTO `translations` VALUES (685, 'general', 'Khmer', 'Khmer', 'ខ្មែរ', NULL, NULL);
INSERT INTO `translations` VALUES (686, 'general', 'No translations found', 'No translations found', 'រកមិនឃើញការបកប្រែទេ', NULL, NULL);
INSERT INTO `translations` VALUES (687, 'general', 'New Staff Member', 'New Staff Member', 'បុគ្គលិកថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (688, 'general', 'Create a new system user account', 'Create a new system user account', 'បង្កើតគណនីអ្នកប្រើប្រាស់ថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (689, 'general', 'Back to Staff', 'Back to Staff', 'ត្រឡប់ទៅបុគ្គលិក', NULL, NULL);
INSERT INTO `translations` VALUES (690, 'general', 'Account Details', 'Account Details', 'ព័ត៌មានលម្អិតគណនី', NULL, NULL);
INSERT INTO `translations` VALUES (691, 'general', 'Enter full name', 'Enter full name', 'បញ្ចូលឈ្មោះពេញ', NULL, NULL);
INSERT INTO `translations` VALUES (692, 'general', 'Select a role', 'Select a role', 'ជ្រើសរើសតួនាទី', NULL, NULL);
INSERT INTO `translations` VALUES (693, 'general', 'Security Credentials', 'Security Credentials', 'ព័ត៌មានសុវត្ថិភាព', NULL, NULL);
INSERT INTO `translations` VALUES (694, 'general', 'Minimum 8 characters', 'Minimum 8 characters', 'យ៉ាងហោចណាស់ 8 តួអក្សរ', NULL, NULL);
INSERT INTO `translations` VALUES (695, 'general', 'Repeat password', 'Repeat password', 'វាយពាក្យសម្ងាត់ម្តងទៀត', NULL, NULL);
INSERT INTO `translations` VALUES (696, 'general', 'Create Account', 'Create Account', 'បង្កើតគណនី', NULL, NULL);
INSERT INTO `translations` VALUES (697, 'general', 'Edit Staff Member', 'Edit Staff Member', 'កែសម្រួលបុគ្គលិក', NULL, NULL);
INSERT INTO `translations` VALUES (698, 'general', 'Change Password', 'Change Password', 'ប្តូរពាក្យសម្ងាត់', NULL, NULL);
INSERT INTO `translations` VALUES (699, 'general', '(leave blank to keep current)', '(leave blank to keep current)', '(ទុកឲ្យទទេដើម្បីរក្សាបច្ចុប្បន្ន)', NULL, NULL);
INSERT INTO `translations` VALUES (700, 'general', 'Coordinate your workforce and system access levels', 'Coordinate your workforce and system access levels', 'គ្រប់គ្រងកម្រិតសិទ្ធិប្រើប្រាស់ប្រព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (701, 'general', 'Add Staff', 'Add Staff', 'បន្ថែមបុគ្គលិក', NULL, NULL);
INSERT INTO `translations` VALUES (702, 'general', 'Search by name or email...', 'Search by name or email...', 'ស្វែងរកតាមឈ្មោះ ឬអ៊ីមែល...', NULL, NULL);
INSERT INTO `translations` VALUES (703, 'general', 'All Roles', 'All Roles', 'តួនាទីទាំងអស់', NULL, NULL);
INSERT INTO `translations` VALUES (704, 'general', 'Deactivate', 'Deactivate', 'បិទគណនី', NULL, NULL);
INSERT INTO `translations` VALUES (705, 'general', 'No staff members found', 'No staff members found', 'រកមិនឃើញបុគ្គលិកទេ', NULL, NULL);
INSERT INTO `translations` VALUES (706, 'general', 'Forgot Password?', 'Forgot Password?', 'ភ្លេចពាក្យសម្ងាត់?', NULL, NULL);
INSERT INTO `translations` VALUES (707, 'general', 'Confirm Identity', 'Confirm Identity', 'បញ្ជាក់អត្តសញ្ញាណ', NULL, NULL);
INSERT INTO `translations` VALUES (708, 'general', 'Please confirm your password before continuing to this secure area.', 'Please confirm your password before continuing to this secure area.', 'សូមបញ្ជាក់ពាក្យសម្ងាត់មុននឹងបន្តចូលកន្លែងសុវត្ថិភាពនេះ។', NULL, NULL);
INSERT INTO `translations` VALUES (709, 'general', 'Forgot Your Password?', 'Forgot Your Password?', 'តើអ្នកភ្លេចពាក្យសម្ងាត់មែនទេ?', NULL, NULL);
INSERT INTO `translations` VALUES (710, 'general', 'Reset Password', 'Reset Password', 'កំណត់ពាក្យសម្ងាត់ឡើងវិញ', NULL, NULL);
INSERT INTO `translations` VALUES (711, 'general', 'Enter your email below to receive a password reset link.', 'Enter your email below to receive a password reset link.', 'បញ្ចូលអ៊ីមែលរបស់អ្នកដើម្បីទទួលបានតំណកំណត់ពាក្យសម្ងាត់ថ្មី។', NULL, NULL);
INSERT INTO `translations` VALUES (712, 'general', 'Send Reset Link', 'Send Reset Link', 'ផ្ញើតំណកំណត់ឡើងវិញ', NULL, NULL);
INSERT INTO `translations` VALUES (713, 'general', 'Return to Login', 'Return to Login', 'ត្រឡប់ទៅការចូលប្រព័ន្ធ', NULL, NULL);
INSERT INTO `translations` VALUES (714, 'general', 'Create a new secure password for your account.', 'Create a new secure password for your account.', 'បង្កើតពាក្យសម្ងាត់សុវត្ថិភាពថ្មី។', NULL, NULL);
INSERT INTO `translations` VALUES (715, 'general', 'Confirm New Password', 'Confirm New Password', 'បញ្ជាក់ពាក្យសម្ងាត់ថ្មី', NULL, NULL);
INSERT INTO `translations` VALUES (716, 'general', 'Register', 'Register', 'ចុះឈ្មោះ', NULL, NULL);
INSERT INTO `translations` VALUES (717, 'general', 'Login here', 'Login here', 'ចូលប្រព័ន្ធនៅទីនេះ', NULL, NULL);
INSERT INTO `translations` VALUES (718, 'general', 'Before proceeding, please check your email for a verification link.', 'Before proceeding, please check your email for a verification link.', 'មុនពេលបន្ត សូមពិនិត្យអ៊ីមែលរបស់អ្នកសម្រាប់តំណផ្ទៀងផ្ទាត់។', NULL, NULL);
INSERT INTO `translations` VALUES (719, 'general', 'A fresh verification link has been sent to your email.', 'A fresh verification link has been sent to your email.', 'តំណផ្ទៀងផ្ទាត់ថ្មីត្រូវបានផ្ញើទៅកាន់អ៊ីមែលរបស់អ្នក។', NULL, NULL);
INSERT INTO `translations` VALUES (720, 'general', 'Did not receive the email?', 'Did not receive the email?', 'មិនបានទទួលអ៊ីមែលទេ?', NULL, NULL);
INSERT INTO `translations` VALUES (721, 'general', 'Resend Verification Email', 'Resend Verification Email', 'ផ្ញើអ៊ីមែលផ្ទៀងផ្ទាត់ឡើងវិញ', NULL, NULL);
INSERT INTO `translations` VALUES (722, 'general', 'Sign Out', 'Sign Out', 'ចាកចេញ', NULL, NULL);
INSERT INTO `translations` VALUES (723, 'general', 'Showing', 'Showing', 'កំពុងបង្ហាញ', NULL, NULL);
INSERT INTO `translations` VALUES (724, 'general', 'Dining Status', 'Dining Status', 'ស្ថានភាពអាហារ', NULL, NULL);
INSERT INTO `translations` VALUES (725, 'general', 'Real-time table occupancy', 'Real-time table occupancy', 'ការប្រើប្រាស់តុពេលបច្ចុប្បន្ន', NULL, NULL);
INSERT INTO `translations` VALUES (726, 'general', 'Free', 'Free', 'ទំនេរ', NULL, NULL);
INSERT INTO `translations` VALUES (727, 'general', 'Manage Tables', 'Manage Tables', 'គ្រប់គ្រងតុ', NULL, NULL);
INSERT INTO `translations` VALUES (728, 'general', 'Live Service Queue', 'Live Service Queue', 'ជួរសេវាកម្មពេលបច្ចុប្បន្ន', NULL, NULL);
INSERT INTO `translations` VALUES (729, 'general', 'Most recent orders across all stations', 'Most recent orders across all stations', 'ការបញ្ជាទិញថ្មីៗពីគ្រប់ផ្នែក', NULL, NULL);
INSERT INTO `translations` VALUES (730, 'general', 'No live orders', 'No live orders', 'មិនមានការបញ្ជាទិញថ្មីៗទេ', NULL, NULL);
INSERT INTO `translations` VALUES (731, 'general', 'Select Language', 'Select Language', 'ជ្រើសរើសភាសា', NULL, NULL);
INSERT INTO `translations` VALUES (732, 'general', 'Choose your preferred language for the system interface.', 'Choose your preferred language for the system interface.', 'ជ្រើសរើសភាសាសម្រាប់ប្រព័ន្ធនេះ។', NULL, NULL);
INSERT INTO `translations` VALUES (733, 'general', 'Current', 'Current', 'បច្ចុប្បន្ន', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE,
  INDEX `users_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 6, NULL, 'brohour00044@gmail.com', NULL, NULL, 'Active', 'users/2026-04-13-69dcb8ae3716a.jpg', NULL, '$2y$12$Xnxde.A1Ri9waqEVjbSRY.VlkbeU3mxIdb28YLJxxFozMU9Ezxw4e', '58eo0pp4qwW6pYcDJmcPkpbIp3NnMlBdg31ugFhCQzxzCxvaRHJchwMluVPI', '2026-04-13 12:00:02', '2026-05-21 15:06:11', '2026-05-21 15:06:11');
INSERT INTO `users` VALUES (2, 'Niiin NIin', NULL, NULL, 'admin@example.com', NULL, NULL, NULL, 'users/2026-04-13-69dcb8469ce8e.jpg', NULL, '$2y$12$db3cMloutVE0NdEFxfFyRulasBOI7bhTHNRD71Mut5jPlvtn48wGu', 'c8tABZ7K9QgbI4GvfCRC1K9zvQOonkPUWuwU3AnSZZE14gkNzKaHyMs8nz1Z', '2026-04-13 15:44:57', '2026-05-21 15:06:13', '2026-05-21 15:06:13');
INSERT INTO `users` VALUES (3, 'KK', NULL, '+85568642521', 'kitchen@ros.com', '116-122', 'Siem Reap', NULL, 'users/2026-04-13-69dcb87a88b08.jpg', NULL, '$2y$12$xxBKuYK2wbMIqUo8RsRWkO.3JUe.grLc8B6.65q./Dhun8Mw6W4k6', 'doMbTT7NftpQUvSdlMlYuUh289we6pQIPVYSy3WSRgslEvZNDmU1pdduka6N', '2026-04-13 16:27:33', '2026-05-21 15:06:17', '2026-05-21 15:06:17');
INSERT INTO `users` VALUES (4, 'Admin', 6, NULL, 'admin@ros.com', NULL, NULL, 'Active', 'users/2026-05-21-6a0efa5fc0284.png', NULL, '$2y$12$WUIQQKqIfihBD4FCTsjSZ.47H.439czhflL/BitTt.0taKkvVCwcC', 'H9J4zBzTWOEZ435EyDLhaxYUPTmhKhXrhEDUVhEruBxz75Guq6PbniQTQHdf', '2026-04-14 09:53:31', '2026-05-22 07:46:46', NULL);
INSERT INTO `users` VALUES (5, 'Admin 2', 6, NULL, 'admin2@ros.com', NULL, NULL, 'Active', NULL, NULL, '$2y$12$8R/jGf/bV5.uoRk2IUEvKuoE1cGLgbbNXUrrjCy.JSDxsSTzAmLhW', NULL, '2026-05-03 15:11:41', '2026-05-21 15:06:24', '2026-05-21 15:06:24');
INSERT INTO `users` VALUES (6, 'Devith', 1, '08188182121', 'devith@devith.com', NULL, NULL, NULL, 'users/2026-05-21-6a0ebf9d45bef.webp', NULL, '$2y$12$J1ftEpS/aVZK3Mhs9JgBJuDCTstqoLjhKGTrMDdBzjPEefsYHU4va', NULL, '2026-05-21 15:16:57', '2026-05-21 21:55:44', NULL);
INSERT INTO `users` VALUES (7, 'Kitchen', 9, '0686421133', 'kitchen@gmail.com', NULL, NULL, NULL, 'users/2026-05-21-6a0edf6f1f905.png', NULL, '$2y$12$NxYLXe6Z0P1WdHT.tjZL4uVtzUdvyizITDqkL8uDV669qCoqdePk.', NULL, '2026-05-21 17:33:09', '2026-05-21 21:57:23', NULL);

-- ----------------------------
-- View structure for view_daily_revenue_summary
-- ----------------------------
DROP VIEW IF EXISTS `view_daily_revenue_summary`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_daily_revenue_summary` AS select cast(`payments`.`paid_at` as date) AS `sale_date`,count(`payments`.`id`) AS `total_transactions`,sum(`payments`.`total_amount`) AS `gross_revenue`,sum(`payments`.`paid_amount`) AS `actual_cash_collected`,`payments`.`payment_method` AS `payment_method` from `payments` where (`payments`.`status` = 'paid') group by cast(`payments`.`paid_at` as date),`payments`.`payment_method`;

-- ----------------------------
-- Procedure structure for sp_complete_order
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_complete_order`;
delimiter ;;
CREATE PROCEDURE `sp_complete_order`(IN p_order_id INT, 
                IN p_method VARCHAR(20), 
                IN p_amount DECIMAL(10,2))
BEGIN
                DECLARE v_total DECIMAL(10,2);
                DECLARE v_table_id INT;

                SELECT total_amount, table_id INTO v_total, v_table_id FROM orders WHERE id = p_order_id;

                -- Record Payment
                INSERT INTO payments (order_id, payment_method, total_amount, paid_amount, change_amount, status, paid_at, created_at, updated_at)
                VALUES (p_order_id, p_method, v_total, p_amount, (p_amount - v_total), 'paid', NOW(), NOW(), NOW());

                -- Update Order status to completed
                UPDATE orders SET status = 'completed' WHERE id = p_order_id;

                -- Release Table status to available
                IF v_table_id IS NOT NULL THEN
                    UPDATE tables SET status = 'available' WHERE id = v_table_id;
                END IF;
            END
;;
delimiter ;

-- ----------------------------
-- Event structure for ev_cleanup_unpaid_orders
-- ----------------------------
DROP EVENT IF EXISTS `ev_cleanup_unpaid_orders`;
delimiter ;;
CREATE EVENT `ev_cleanup_unpaid_orders`
ON SCHEDULE
EVERY '1' DAY STARTS '2026-05-01 12:33:26'
DO UPDATE orders 
                SET status = 'cancelled' 
                WHERE status = 'pending' 
                AND created_at < NOW() - INTERVAL 1 DAY
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table order_items
-- ----------------------------
DROP TRIGGER IF EXISTS `tr_after_order_item_insert`;
delimiter ;;
CREATE TRIGGER `tr_after_order_item_insert` AFTER INSERT ON `order_items` FOR EACH ROW BEGIN
                UPDATE orders 
                SET subtotal = (SELECT IFNULL(SUM(subtotal), 0) FROM order_items WHERE order_id = NEW.order_id),
                    total_amount = (SELECT IFNULL(SUM(subtotal), 0) FROM order_items WHERE order_id = NEW.order_id) + tax
                WHERE id = NEW.order_id;
            END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table order_items
-- ----------------------------
DROP TRIGGER IF EXISTS `tr_after_order_item_update`;
delimiter ;;
CREATE TRIGGER `tr_after_order_item_update` AFTER UPDATE ON `order_items` FOR EACH ROW BEGIN
                UPDATE orders 
                SET subtotal = (SELECT IFNULL(SUM(subtotal), 0) FROM order_items WHERE order_id = NEW.order_id),
                    total_amount = (SELECT IFNULL(SUM(subtotal), 0) FROM order_items WHERE order_id = NEW.order_id) + tax
                WHERE id = NEW.order_id;
            END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table order_items
-- ----------------------------
DROP TRIGGER IF EXISTS `tr_after_order_item_delete`;
delimiter ;;
CREATE TRIGGER `tr_after_order_item_delete` AFTER DELETE ON `order_items` FOR EACH ROW BEGIN
                UPDATE orders 
                SET subtotal = (SELECT IFNULL(SUM(subtotal), 0) FROM order_items WHERE order_id = OLD.order_id),
                    total_amount = (SELECT IFNULL(SUM(subtotal), 0) FROM order_items WHERE order_id = OLD.order_id) + tax
                WHERE id = OLD.order_id;
            END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
