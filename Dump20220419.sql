-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: collaboration
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_03_13_033632_create_quottimes_table',1),(6,'2022_03_27_102210_create_my_posts_table',1),(7,'2022_04_09_094730_add_admin_to_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_posts`
--

DROP TABLE IF EXISTS `my_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `my_posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_posts`
--

LOCK TABLES `my_posts` WRITE;
/*!40000 ALTER TABLE `my_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quottimes`
--

DROP TABLE IF EXISTS `quottimes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quottimes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quottimes_gambar_unique` (`gambar`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quottimes`
--

LOCK TABLES `quottimes` WRITE;
/*!40000 ALTER TABLE `quottimes` DISABLE KEYS */;
INSERT INTO `quottimes` VALUES (1,2,'Aperiam.','Et.','Magni esse unde consequatur facere aut recusandae. Atque quis non inventore ipsa. Laborum aut vero ea nemo rerum laudantium qui.',NULL,'2022-04-18 23:14:52','2022-04-18 23:14:52'),(2,5,'Assumenda ipsam.','Earum ut necessitatibus.','Doloremque ratione quia deleniti asperiores optio omnis deleniti. Ut quisquam blanditiis quod velit et iure consequuntur. Inventore fugiat vel ad saepe incidunt excepturi reiciendis.',NULL,'2022-04-18 23:14:52','2022-04-18 23:14:52'),(3,4,'Corporis.','Illum quaerat eos.','Sed quibusdam blanditiis laudantium qui omnis aliquid odio. Quasi delectus vel aut tenetur est ea. Et magni soluta et. Voluptate sint repellendus autem vitae atque ex qui aliquid. Voluptatum natus et quas iste unde.',NULL,'2022-04-18 23:14:52','2022-04-18 23:14:52'),(4,2,'Et et.','In recusandae ullam qui mollitia.','A ducimus asperiores debitis. Reiciendis perferendis quos quis et nesciunt animi.',NULL,'2022-04-18 23:14:53','2022-04-18 23:14:53'),(5,3,'Omnis modi.','Sapiente non quia illo quis et ipsum.','Corrupti et voluptatibus debitis officia rem ut. Nisi quis et incidunt ipsam. Beatae quaerat voluptates est numquam.',NULL,'2022-04-18 23:14:53','2022-04-18 23:14:53'),(6,5,'Quia vero nisi.','Ducimus.','Sit omnis quod et nihil id ut tenetur placeat. Praesentium animi hic ea similique. Optio quibusdam architecto recusandae qui minus.',NULL,'2022-04-18 23:14:53','2022-04-18 23:14:53'),(7,4,'Sed fugiat.','Adipisci unde facere.','Facere assumenda libero sunt a. Esse ut exercitationem earum. Voluptatum ex aliquid voluptate sed modi a. Consectetur omnis odit quidem ipsa minus officiis ad.',NULL,'2022-04-18 23:14:53','2022-04-18 23:14:53'),(8,2,'Nemo vel.','At similique assumenda.','Eum id commodi minus numquam. Ut et consectetur aut non aut rerum eos porro. Et dolorem omnis voluptatem asperiores enim ut architecto omnis.',NULL,'2022-04-18 23:14:53','2022-04-18 23:14:53'),(9,1,'Tempore dolore autem.','Omnis neque suscipit quo in quia.','Minima repellat veritatis perspiciatis veniam atque molestiae itaque corrupti. Labore iusto neque assumenda porro delectus. Voluptate non architecto modi eos.',NULL,'2022-04-18 23:14:53','2022-04-18 23:14:53'),(10,5,'Autem iusto.','Officia ut quo sint tempora ex.','Et a aut ducimus et. Occaecati dicta et eum ipsam. Et minima quia voluptas quo quis natus dolorum. Eveniet harum earum asperiores qui aut non commodi.',NULL,'2022-04-18 23:14:54','2022-04-18 23:14:54'),(11,5,'Harum est.','Dicta impedit incidunt.','Inventore eum fugiat sit. Quia vitae corrupti adipisci. Unde autem iure soluta. At perspiciatis sed corrupti nostrum nobis.',NULL,'2022-04-18 23:14:54','2022-04-18 23:14:54'),(12,5,'Praesentium dicta et.','At similique repellendus.','Voluptatem libero excepturi non omnis illo fugiat aspernatur natus. Voluptatem dolore aperiam fugiat fuga nesciunt ut nostrum. Quo voluptas nemo nulla inventore dolorem architecto minima quis. Eveniet nemo eos totam fugiat aliquid.',NULL,'2022-04-18 23:14:54','2022-04-18 23:14:54');
/*!40000 ALTER TABLE `quottimes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Winton Almundarisna','wintonalmundarisna@gmail.com',NULL,'$2y$10$i6HBKstayyQqyFnlIEoQg.xErGNDQpw/xch.35TAREm/YHzYcSNtO',NULL,'2022-04-18 23:14:51','2022-04-18 23:14:51',1),(2,'Ryan Fakhroji','ryan@gmail.com',NULL,'$2y$10$rx3zvZnLHOS39appqzpn0uPQLn.h9KLTkmggHdrnpPJ5BNSmHZUcC',NULL,'2022-04-18 23:14:51','2022-04-18 23:14:51',0),(3,'Sandi Winanto','sandi@gmail.com',NULL,'$2y$10$QUhteIUtX7vW/emIe.2.QOlF8Uf9ulYM0VBMusXU0BgGb45ycFw1q',NULL,'2022-04-18 23:14:51','2022-04-18 23:14:51',0),(4,'Jaydon Boehm','dorothea.luettgen@example.net','2022-04-18 23:14:52','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Zz4jTcpyA8','2022-04-18 23:14:52','2022-04-18 23:14:52',0),(5,'Krystina Gutkowski','jacey05@example.net','2022-04-18 23:14:52','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','O806MIzKDE','2022-04-18 23:14:52','2022-04-18 23:14:52',0),(6,'Dr. Brandy Schowalter IV','archibald65@example.net','2022-04-18 23:14:52','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','oCXBqMU3iA','2022-04-18 23:14:52','2022-04-18 23:14:52',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-20 21:28:50
