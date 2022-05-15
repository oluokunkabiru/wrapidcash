-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2022 at 06:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapidcash`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `longcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gateway` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_with_bank` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `slug`, `code`, `created_at`, `updated_at`, `longcode`, `gateway`, `pay_with_bank`, `active`, `country`, `currency`, `type`) VALUES
(2, 'Abbey Mortgage Bank', 'abbey-mortgage-bank', '801', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(3, 'Access Bank', 'access-bank', '044', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '044150149', 'emandate', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(4, 'Access Bank (Diamond)', 'access-bank-diamond', '063', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '063150162', 'emandate', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(5, 'ALAT by WEMA', 'alat-by-wema', '035A', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '035150103', 'emandate', '1', '1', 'Nigeria', 'NGN', 'nuban'),
(6, 'Amju Unique MFB', 'amju-unique-mfb', '50926', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '511080896', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(7, 'ASO Savings and Loans', 'asosavings', '401', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(8, 'Bainescredit MFB', 'bainescredit-mfb', '51229', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(9, 'Bowen Microfinance Bank', 'bowen-microfinance-bank', '50931', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(10, 'Carbon', 'carbon', '565', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(11, 'CEMCS Microfinance Bank', 'cemcs-microfinance-bank', '50823', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(12, 'Citibank Nigeria', 'citibank-nigeria', '023', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '023150005', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(13, 'Coronation Merchant Bank', 'coronation-merchant-bank', '559', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(14, 'Ecobank Nigeria', 'ecobank-nigeria', '050', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '050150010', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(15, 'Ekondo Microfinance Bank', 'ekondo-microfinance-bank', '562', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(16, 'Eyowo', 'eyowo', '50126', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(17, 'Fidelity Bank', 'fidelity-bank', '070', '2021-09-26 19:58:30', '2021-09-26 19:58:30', '070150003', 'emandate', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(18, 'Firmus MFB', 'firmus-mfb', '51314', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(19, 'First Bank of Nigeria', 'first-bank-of-nigeria', '011', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '011151003', 'ibank', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(20, 'First City Monument Bank', 'first-city-monument-bank', '214', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '214150018', 'emandate', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(21, 'FSDH Merchant Bank Limited', 'fsdh-merchant-bank-limited', '501', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(22, 'Globus Bank', 'globus-bank', '00103', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '103015001', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(23, 'GoMoney', 'gomoney', '100022', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '', NULL, '1', '1', 'Nigeria', 'NGN', 'nuban'),
(24, 'Guaranty Trust Bank', 'guaranty-trust-bank', '058', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '058152036', 'ibank', '1', '1', 'Nigeria', 'NGN', 'nuban'),
(25, 'Hackman Microfinance Bank', 'hackman-microfinance-bank', '51251', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(26, 'Hasal Microfinance Bank', 'hasal-microfinance-bank', '50383', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(27, 'Heritage Bank', 'heritage-bank', '030', '2021-09-26 19:58:31', '2021-09-26 19:58:31', '030159992', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(28, 'Ibile Microfinance Bank', 'ibile-mfb', '51244', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(29, 'Infinity MFB', 'infinity-mfb', '50457', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(30, 'Jaiz Bank', 'jaiz-bank', '301', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '301080020', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(31, 'Keystone Bank', 'keystone-bank', '082', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '082150017', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(32, 'Kredi Money MFB LTD', 'kredi-money-mfb', '50200', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(33, 'Kuda Bank', 'kuda-bank', '50211', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', 'digitalbankmandate', '1', '1', 'Nigeria', 'NGN', 'nuban'),
(34, 'Lagos Building Investment Company Plc.', 'lbic-plc', '90052', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(35, 'Links MFB', 'links-mfb', '50549', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(36, 'Mayfair MFB', 'mayfair-mfb', '50563', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(37, 'Mint MFB', 'mint-mfb', '50304', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(38, 'Paga', 'paga', '100002', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(39, 'PalmPay', 'palmpay', '999991', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(40, 'Parallex Bank', 'parallex-bank', '526', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(41, 'Parkway - ReadyCash', 'parkway-ready-cash', '311', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(42, 'Paycom', 'paycom', '999992', '2021-09-26 19:58:32', '2021-09-26 19:58:32', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(43, 'Petra Mircofinance Bank Plc', 'petra-microfinance-bank-plc', '50746', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(44, 'Polaris Bank', 'polaris-bank', '076', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '076151006', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(45, 'Providus Bank', 'providus-bank', '101', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(46, 'Rand Merchant Bank', 'rand-merchant-bank', '502', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(47, 'Rubies MFB', 'rubies-mfb', '125', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(48, 'Sparkle Microfinance Bank', 'sparkle-microfinance-bank', '51310', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(49, 'Stanbic IBTC Bank', 'stanbic-ibtc-bank', '221', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '221159522', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(50, 'Standard Chartered Bank', 'standard-chartered-bank', '068', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '068150015', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(51, 'Sterling Bank', 'sterling-bank', '232', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '232150016', 'emandate', '1', '1', 'Nigeria', 'NGN', 'nuban'),
(52, 'Suntrust Bank', 'suntrust-bank', '100', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(53, 'TAJ Bank', 'taj-bank', '302', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(54, 'Tangerine Money', 'tangerine-money', '51269', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(55, 'TCF MFB', 'tcf-mfb', '51211', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(56, 'Titan Bank', 'titan-bank', '102', '2021-09-26 19:58:33', '2021-09-26 19:58:33', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(57, 'Union Bank of Nigeria', 'union-bank-of-nigeria', '032', '2021-09-26 19:58:34', '2021-09-26 19:58:34', '032080474', 'emandate', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(58, 'United Bank For Africa', 'united-bank-for-africa', '033', '2021-09-26 19:58:34', '2021-09-26 19:58:34', '033153513', 'emandate', '1', '1', 'Nigeria', 'NGN', 'nuban'),
(59, 'Unity Bank', 'unity-bank', '215', '2021-09-26 19:58:34', '2021-09-26 19:58:34', '215154097', 'emandate', '0', '1', 'Nigeria', 'NGN', 'nuban'),
(60, 'VFD Microfinance Bank Limited', 'vfd', '566', '2021-09-26 19:58:34', '2021-09-26 19:58:34', '', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(61, 'Wema Bank', 'wema-bank', '035', '2021-09-26 19:58:34', '2021-09-26 19:58:34', '035150103', NULL, '0', '1', 'Nigeria', 'NGN', 'nuban'),
(62, 'Zenith Bank', 'zenith-bank', '057', '2021-09-26 19:58:34', '2021-09-26 19:58:34', '057150013', 'emandate', '1', '1', 'Nigeria', 'NGN', 'nuban');

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `name`, `price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Wrap ladie', '2000.00', 'active', '2021-09-21 06:45:41', '2021-09-30 11:09:45'),
(3, 'Wrap master', '545.00', 'disabled', '2021-09-21 06:46:12', '2021-09-30 11:09:25'),
(4, 'Wrap', '23232.00', 'active', '2021-09-21 14:47:09', '2021-09-30 11:07:54'),
(5, 'Wrap lite', '6565.00', 'active', '2021-09-30 11:07:12', '2021-09-30 11:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`payment`)),
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_percentage` decimal(8,2) DEFAULT NULL,
  `investment_percentage` decimal(8,2) DEFAULT NULL,
  `investment_charges` decimal(8,2) DEFAULT NULL,
  `withdraw_charges` decimal(8,2) DEFAULT NULL,
  `investment_duration` int(11) DEFAULT NULL,
  `referral_max_withdraw` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `name`, `email`, `phone`, `payment`, `address`, `about`, `mission`, `vision`, `referral_percentage`, `investment_percentage`, `investment_charges`, `withdraw_charges`, `investment_duration`, `referral_max_withdraw`, `created_at`, `updated_at`) VALUES
(1, 'RAPIDCASH', 'Customercare@wrapvestglobal.com', '+2349024270729', '{\"transfer\":\"transfer\"}', NULL, 'Rapid Cash is Set to improve the World of Finance with his Digital Asset That Generates Liquidity Over Time. With people who have lost hope on different circumstances for financial freedom to live their desired life dreams, we have put together systems for you all to have that desired life dreams and lifestyle you want with Wrap Coin (RP) giving you 100% Returns Liquidity in 30 days.\r\n\r\nThis is a Legitimate and Genuine platform designed to help individuals overcome their financial challenges with our Digital Asset, in a country where much efforts produce little financial', NULL, NULL, '0.05', '0.03', '0.03', '0.05', 30, '1000.00', '2021-10-17 15:46:47', '2021-11-03 11:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('read','unread') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `user_id`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Village boy adesina', 0, 'admin@vb.com', 'Second testing', 'hajkhdjahsdjksjdhasjd ajdhajkdhdasjdhasjdhasjhdajkhjkashdajk', 'unread', '2021-10-17 11:41:13', '2021-10-17 11:41:13'),
(2, 'Village boy adesina', 0, 'admin@vb.com', 'Second testing', 'hajkhdjahsdjksjdhasjd ajdhajkdhdasjdhasjdhasjhdajkhjkashdajk', 'unread', '2021-10-17 11:46:07', '2021-10-17 11:46:07'),
(3, 'Village boy adesina', 0, 'admin@vb.com', 'Second testing', 'Good morning oga wrapcash, how are we going to invest', 'read', '2021-10-17 12:02:25', '2021-10-17 12:49:32'),
(4, 'Liadi Kafayat', NULL, 'inv1@vb.com', 'How to get it', 'CHAPTER ONE is a bit more than a couple of things that we are like family members and', 'read', '2021-10-17 12:28:47', '2021-10-17 13:38:20'),
(5, 'Liadi Kafayat', 14, 'inv1@vb.com', 'How to get it', 'CHAPTER ONE is a bit more than a couple of things that we are like family members and', 'read', '2021-10-17 12:30:46', '2021-10-17 12:47:55'),
(6, 'Oluokun Kabiru', NULL, 'admin@vb.com', 'Trying to correct error', 'Good morning and this is Oluokun Kabiru\r\nI\'m currenty feeling sleepy write now', 'unread', '2021-10-20 01:50:57', '2021-10-20 01:50:57'),
(7, 'Oluokun Kabiru Adesina', NULL, 'Oluokunkabiru2015@gmail.com', 'Unknow', 'sdhfjsdhf sjdshjksh fsjdh sjkh jkdhfsdfjsklfjslkjfksjflkjakljasljf aksljfa\r\nakasdkasjdkasd kasjda\r\naskdaskjdklasjd asjdasl\r\nasdkasdkjdkas dasl', 'read', '2021-11-21 01:11:30', '2021-11-21 01:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `investor_id` bigint(20) UNSIGNED NOT NULL,
  `coin_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `status` enum('active','pending','disable','withdraw','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment` enum('card','transfer','cash','not-specify') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not-specify',
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depositor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invest_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `revenue` float DEFAULT NULL,
  `invest_amount` decimal(10,0) NOT NULL,
  `expected_amount` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `investor_id`, `coin_id`, `quantity`, `status`, `payment`, `ref`, `depositor_name`, `invest_date`, `end_date`, `revenue`, `invest_amount`, `expected_amount`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '7', 'active', 'transfer', NULL, 'Liadi Kafayat', '2021-10-09', '2021-11-08', 1711.71, '2000', '3800', '2021-10-02 00:39:04', '2021-10-14 14:50:06'),
(2, 3, 5, '3', 'active', 'card', 'KOADIT_5656464534_1633138961', 'Liadi Kafayat', '2021-10-09', '2021-11-08', 733.59, '19695', '12474', '2021-10-02 00:43:18', '2021-10-14 14:50:13'),
(3, 3, 4, '2', 'active', 'card', 'KOADIT_5656464534_1633152582', 'Liadi Kafayat', '2021-10-02', '2021-10-15', 1093.86, '23232', '44141', '2021-10-02 04:30:09', '2021-10-14 14:50:28'),
(4, 2, 2, '1', 'active', 'card', 'KOADIT_90432943909_1634215218', 'Village Boy Adesina', '2021-10-14', '2021-11-13', 28.53, '2000', '3800', '2021-10-14 11:41:16', '2021-10-14 14:50:29'),
(5, 2, 5, '1', 'active', 'transfer', NULL, 'Village Boy Adesina', '2021-10-19', '2021-11-18', 0.03, '6565', '12474', '2021-10-19 10:59:57', '2021-10-19 11:01:01'),
(7, 8, 5, '2', 'active', 'transfer', NULL, 'Oluokun Kabiru', '2021-10-19', '2021-11-18', 0.06, '6565', '12474', '2021-10-19 11:13:25', '2021-10-19 11:24:13'),
(8, 8, 5, '2', 'active', 'transfer', NULL, 'Oluokun Kabiru', '2021-10-19', '2021-11-18', 0.06, '6565', '12474', '2021-10-19 11:25:43', '2021-10-19 11:26:00'),
(9, 9, 5, '3', 'withdraw', 'transfer', NULL, 'Oluokun Kabiru', '2021-10-19', '2021-10-19', 0.09, '6565', '12474', '2021-10-19 11:31:08', '2021-10-19 11:33:21'),
(10, 9, 5, '3', 'active', 'card', 'KOADIT_9248973847_1634650932', 'Oluokun Kabiru', '2021-10-19', '2021-11-18', 0.09, '19695', '12474', '2021-10-19 12:43:05', '2021-10-19 12:43:05'),
(11, 9, 5, '5', 'active', 'card', 'KOADIT_9248973847_1634651350', 'Oluokun Kabiru', '2021-10-19', '2021-11-18', 0.15, '32825', '12474', '2021-10-19 12:49:43', '2021-10-19 12:49:43'),
(12, 9, 5, '1', 'active', 'card', 'WRAPCOIN_9248973847_1634653102', 'Oluokun Kabiru', '2021-10-19', '2021-11-18', 0.03, '6565', '12474', '2021-10-19 13:19:08', '2021-10-19 13:19:08'),
(13, 9, 2, '10', 'active', 'card', 'WRAPCOIN_9248973847_1634653447', 'Oluokun Kabiru', '2021-10-19', '2021-11-18', 0.3, '20000', '3800', '2021-10-19 13:24:45', '2021-10-19 13:24:45'),
(14, 3, 5, '1', 'rejected', 'transfer', NULL, 'Liadi Kafayat', NULL, NULL, NULL, '6565', '12474', '2021-10-26 20:03:56', '2021-07-13 16:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invest_date` date DEFAULT NULL,
  `referral_bonus` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `user_id`, `balance`, `username`, `invest_date`, `referral_bonus`, `created_at`, `updated_at`) VALUES
(2, 13, '0.00', 'village_boy_adesina', NULL, '1641.25', '2021-09-22 03:28:24', '2021-10-19 11:31:40'),
(3, 14, '3463.20', 'liadi_kafayat', NULL, '0.00', '2021-09-22 10:15:03', '2021-10-14 11:19:28'),
(4, 15, '0.00', 'liadi_kafayat0', NULL, '0.00', '2021-09-22 10:16:44', '2021-10-14 11:19:29'),
(5, 16, '0.00', 'assaulting_marshal_on_duty', NULL, '0.00', '2021-09-22 12:42:28', '2021-10-14 11:19:29'),
(6, 17, '0.00', 'oluokun_kabiru', NULL, '0.00', '2021-09-26 12:15:15', '2021-10-14 11:19:29'),
(7, 18, '0.00', 'liadi_kafayat1', NULL, NULL, '2021-10-11 07:51:00', '2021-10-14 11:19:29'),
(8, 20, NULL, 'oluokun_kabiru0', NULL, NULL, '2021-10-19 11:03:57', '2021-10-19 11:03:57'),
(9, 21, NULL, 'oluokun_kabiru1', NULL, NULL, '2021-10-19 11:28:20', '2021-10-19 11:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'App\\Models\\Coin', 2, '5d419fc2-db23-4c1e-a6d2-7af37515c4ab', 'coin-avatar', 'model_1', 'model_1.png', 'image/png', 'uploads', 'uploads', 1610332, '[]', '[]', '[]', '[]', 1, '2021-09-21 06:45:42', '2021-09-21 06:45:42'),
(6, 'App\\Models\\Coin', 3, '3b320c41-15bf-4801-9b47-fa143896e9f2', 'coin-avatar', 'about_1', 'about_1.jpg', 'image/jpeg', 'uploads', 'uploads', 130531, '[]', '[]', '[]', '[]', 2, '2021-09-21 06:46:12', '2021-09-21 06:46:12'),
(7, 'App\\Models\\Coin', 4, '12c461b6-1559-47da-9c12-12a17e91ba0a', 'coin-avatar', 'coins', 'coins.jpg', 'image/jpeg', 'uploads', 'uploads', 225000, '[]', '[]', '[]', '[]', 3, '2021-09-21 14:47:11', '2021-09-21 14:47:11'),
(8, 'App\\Models\\investor\\Investment', 1, '1fc94bda-ab04-4e3f-bebc-71d079199e8a', 'evidence', 'koadit_cbt_00000', 'koadit_cbt_00000.png', 'image/png', 'uploads', 'uploads', 535531, '[]', '[]', '[]', '[]', 4, '2021-09-22 10:28:51', '2021-09-22 10:28:51'),
(9, 'App\\Models\\investor\\Investment', 2, 'f43f34a6-39ee-4270-8df9-1c6a6ce56b6f', 'evidence', 'koadit_cbt_00000', 'koadit_cbt_00000.png', 'image/png', 'uploads', 'uploads', 535531, '[]', '[]', '[]', '[]', 5, '2021-09-22 10:32:55', '2021-09-22 10:32:55'),
(10, 'App\\Models\\investor\\Investment', 4, 'fe6d5411-8b40-4aa9-b071-c9ea8a08d66f', 'evidence', 'koadit_cbt_00002', 'koadit_cbt_00002.png', 'image/png', 'uploads', 'uploads', 6495, '[]', '[]', '[]', '[]', 6, '2021-09-22 19:56:32', '2021-09-22 19:56:32'),
(11, 'App\\Models\\investor\\Investment', 10, 'fbbd2771-4a91-40a9-b1f1-40a8a8dd5f34', 'evidence', 'apple-store-2', 'apple-store-2.png', 'image/png', 'uploads', 'uploads', 4281, '[]', '[]', '[]', '[]', 7, '2021-09-26 12:21:43', '2021-09-26 12:21:43'),
(12, 'App\\Models\\User', 14, '74ceb382-3ba7-472f-af77-db1db0c82843', 'avatar', 'frsc-img-plain', 'frsc-img-plain.png', 'image/png', 'uploads', 'uploads', 64882, '[]', '[]', '[]', '[]', 8, '2021-09-27 03:49:30', '2021-09-27 03:49:30'),
(13, 'App\\Models\\User', 14, '76ded838-477d-47ee-910c-bf2e792bc906', 'avatar', 'frsc-img-plain', 'frsc-img-plain.png', 'image/png', 'uploads', 'uploads', 64882, '[]', '[]', '[]', '[]', 9, '2021-09-27 03:56:55', '2021-09-27 03:56:55'),
(16, 'App\\Models\\Coin', 5, 'a18d47c4-5561-4859-bd21-00c5c9311df4', 'coin-avatar', 'rc_Logo', 'rc_Logo.png', 'image/png', 'uploads', 'uploads', 340286, '[]', '[]', '[]', '[]', 11, '2021-09-30 11:07:13', '2021-09-30 11:07:13'),
(17, 'App\\Models\\investor\\Investment', 1, '6966647a-b5fa-4619-9b64-e1231ef39702', 'evidence', 'img_3', 'img_3.jpg', 'image/jpeg', 'uploads', 'uploads', 66555, '[]', '[]', '[]', '[]', 12, '2021-10-02 00:39:04', '2021-10-02 00:39:04'),
(18, 'App\\Models\\User', 13, '792f3fe3-a64d-4478-ab09-5cb28059b9de', 'avatar', 'HAB', 'HAB.jpg', 'image/jpeg', 'uploads', 'uploads', 1072120, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"HAB___avatar_37_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzcgNTAiPgoJPGltYWdlIHdpZHRoPSIzNyIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FLd0FnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvVDJPWUhwV2pNSTZGaFpBUldacWgyNFVGQzBBY3VtcXJERTBqTndveWExWnpuenI4Uy8ydG9mRFBpVTZaYWtFbzJHT2E1SjFWSFE5Q2xRYzFjOXgrRW54R2krSU9nUjNpTUMyT2NWY0pjeU01eDVIWTlBRENyTWJuak9xYXM4bWszS3h0aHloeFd6V2hqRjZuNWovQUJsMXVhdytKRjFGY0hkSTBweHo3MTRkWnZtMVBwc1B5OG1oOThmc2F5VFFlQ1kza1VxcmdFWnJ1dy93bmw0dHJtMFBwZUs2RERyWFdlY2VGUld0M1BZekxnN3lweFg1dm1IRzJDd3VrWlhPK2xncHkzUGdENHcvQi94RHFueGJXNGEzZG9tbUJCQTdacXNQeEJoc1hSOXZ6SHRRb09FYkkvUUw0UVdMZUV2QTlqREpINWJwRU1qSHRYRGgrTjhGN1gyTW1lZFd3czIrWkZxNitQV2xhZGN5d1N2c2VNNElOZmYwTXdwWW1DblRkMGVmN0ozc3pWdGJ5QzNKV1FxcEhyWDhFdXBWcXU3MVB0SlJTVjBZdXVQNGQrMHJjM0t4Tkt2SWJBelh0WWVyakl3NUlOMk1ia1gvQUFuZW0zVzIydHlHN0FDc0t1RXJ3WHRKTXFGbTdIaEh4MTBPM3RMOWJ2ZjluV1Rra0hGZjBSd0ZqbmljTjdPVDFSNFdONWFNcm5xbmo2NmxndlNJNUdRWTdHdnlQTGNQU2F1NG50dHZsUEw5WHZKNVEyK1ZtK3ByMUhDTVpXU015ejRBZG4xMklNU1J1NzE1T2E2VUdiVTl5bisyTTV0L0NVRHhuWTJPb3I3VHczYjlvendzMFIvLzJRPT0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 13, '2021-10-14 11:40:03', '2021-10-14 11:40:06'),
(19, 'App\\Models\\User', 19, 'cedfe12f-e021-44eb-9915-35cf00d1765e', 'avatar', 'WhatsApp Image 2021-08-25 at 9.27.47 AM', 'WhatsApp-Image-2021-08-25-at-9.27.47-AM.jpeg', 'image/jpeg', 'uploads', 'uploads', 52188, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"WhatsApp-Image-2021-08-25-at-9.27.47-AM___avatar_33_50.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzMgNTAiPgoJPGltYWdlIHdpZHRoPSIzMyIgaGVpZ2h0PSI1MCIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FNQUFnQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvTUc4aE52ZFl4aW9POW5zWHdXK0Q5ejQ4a01uM1lmV3ZMeGVOV0gwUG84c3l0NHYzcGJIWWZGUDlsYTY4UDZOTHFOb1RJRUc1Z0s1OE5tQ3F1ek8vSFpKN0dIUEIzUG1pYUZyYVo0bkdHVTRJcjNFN254MGs0Nk0yOWNzOHlDUUR2VFpiUjliZnNyM0QyV2lLNnFOdmMxOFZtYi9BSGg5N2xybEhEWGllNytLdFZqdi9ER29SeWxXRFJrQWZoWEhSa28yWjY5RnlyWGhJL05QeDFiZlpmRk44Z0cwZVllUHhyN21nK2FDWitiWTZuN092S0p2UTJIOXEvdXdwWmoyRmJQUXdTNXRENm4rQ1dnM1dqK0VRcFFveDlhK0N6T3BldG9mc09TWmY3VENlOGRWZXpYVjJEQVFWVWpCOTY0WTFkRDE4UGxycFNiWjg3L0V6NEhYdC9xTTk3YmZNV09jQ3Z1TXZtNmxNL0xlSWNOR2pYY2t5ZjRGNkJCcVYyOXhNZ2RVNlpyMTFIbVI4eEdYTEpIMUZwWWp0OUVmeVVIeWpvQlh3V053MHFtSWNVZnR1VlpoQ2pnbEtYUTVpZS91cHJrSXNSQkp4bXRxT1VWT1pjeHpZcmlpakdENU55U0JKWTd4SXBsRWhKeml2dE1OUmpRaHlvL0lzZmpKWXlvNXM4aCtCMm5OcHVndmZ5WktIdFhUSFNOemkzWjY5b25pMkZyV1FJUFlxYTh2Mk1aVmVjOTk0eWNNUDdLNWszL2pPSzJqa2NnQjFQQXIwcFRVRmRuZ3BTcU95TVB3bDRtMUM4OFVtYWZLMng2YnE1S2VJVlNWa2IxTU02VWJzby9DYlc5UGk4TXJiczZrZDFOZHNiTldPWlhXcDZGcGVtMkUwVXQxR2dFZU1uRk5RakhZSlRsTGM0bTloaDFuVldXM2kvY28yQ2E4K3ZUbFdka2RsR3JHaXJ2Y1RWOVN0ZENqOHNnS3c2NHFxTkJVRVJXeEVxN1AvOWs9Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 14, '2021-10-16 13:59:35', '2021-10-16 13:59:45'),
(20, 'App\\Models\\Configuration', 1, 'a90f280d-383a-4d9f-a7ee-3887a5fa7d91', 'logo', 'koadit_cbt_00080', 'koadit_cbt_00080.png', 'image/png', 'uploads', 'uploads', 119841, '[]', '[]', '{\"logo\":true}', '{\"logo\":{\"urls\":[\"koadit_cbt_00080___logo_50_31.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzEiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzMSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FFd0FlQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE5YkgvQUFUVzhOVHR4SVJXbk1SWWYvdzdROE9Sbkt6RVVjNDdHRHJIL0JPM3dwcDdNMGtqRWlvOXJyWTNWSnVQTVkwUDdEL2hEQlZXZmoycStZNTJqOUdZRndhektKbkdSUUJ6V3NhUTl5N09RR1QwSXJKeGZOYzY0MVVvY3BrUmVIN2JibjdPb1AwclU1VHVvUlFCS3c0b0FpWlFRY2lnQ3BQRWdJd29vQS8vMlE9PSI+Cgk8L2ltYWdlPgo8L3N2Zz4=\"}}', 15, '2021-10-17 15:46:47', '2021-10-17 15:46:51'),
(21, 'App\\Models\\investor\\Investment', 5, '9ca9c971-a073-46de-85c4-57f9b54de94d', 'evidence', 'koadit_cbt_00083', 'koadit_cbt_00083.png', 'image/png', 'uploads', 'uploads', 187919, '[]', '[]', '[]', '[]', 16, '2021-10-19 10:59:57', '2021-10-19 10:59:57'),
(22, 'App\\Models\\User', 20, 'c302987d-e975-4474-a4ca-155a3263131c', 'avatar', 'koadit_cbt_00081', 'koadit_cbt_00081.png', 'image/png', 'uploads', 'uploads', 187798, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"koadit_cbt_00081___avatar_50_31.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzEiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzMSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FFd0FlQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE4TC9aYitDV2wvRzN4SzFqUDhpQ3ZUclUxVFJ3VWFybTdIMmZiZjhBQk5UdzNFdnl5bkpyZzV6dEhOL3dUUjhNdXhMU2ttam5DeFRtL3dDQ2N2aHUxYmFwSkZRNmp1WVNrMDdIZ3Y4QXdUVVVmOEozTjlLOW5GN0hEaGR6OVk0VGpBOXE4VTljVmp5YUFLVXNrZTdERVo5NkxDMFB5Zy80SnJ1UjhRWlJuaXZheGZ3bmtZYjRqOWFvZjRmcFhpbnJvSE9HYWdaNWo0enY3aURVeXNjeklQUUd1aUNWakNUMVAvL1oiPgoJPC9pbWFnZT4KPC9zdmc+\"}}', 17, '2021-10-19 11:07:52', '2021-10-19 11:07:55'),
(23, 'App\\Models\\investor\\Investment', 6, 'd98f4e30-f94f-4900-9ad5-f2583209ed87', 'evidence', 'koadit_cbt_00082', 'koadit_cbt_00082.png', 'image/png', 'uploads', 'uploads', 174664, '[]', '[]', '[]', '[]', 18, '2021-10-19 11:08:28', '2021-10-19 11:08:28'),
(24, 'App\\Models\\investor\\Investment', 7, 'd763835b-ec79-4489-8f5d-dfa86483818d', 'evidence', 'koadit_cbt_00080', 'koadit_cbt_00080.png', 'image/png', 'uploads', 'uploads', 119841, '[]', '[]', '[]', '[]', 19, '2021-10-19 11:13:25', '2021-10-19 11:13:25'),
(25, 'App\\Models\\investor\\Investment', 8, '10cf910a-6d09-4729-87a8-bca8850988c5', 'evidence', 'koadit_cbt_00082', 'koadit_cbt_00082.png', 'image/png', 'uploads', 'uploads', 174664, '[]', '[]', '[]', '[]', 20, '2021-10-19 11:25:43', '2021-10-19 11:25:43'),
(26, 'App\\Models\\User', 21, '39e92b7b-0088-4a43-8fb9-a9ed4211cd54', 'avatar', 'koadit_cbt_00060', 'koadit_cbt_00060.png', 'image/png', 'uploads', 'uploads', 127206, '[]', '[]', '{\"avatar\":true}', '{\"avatar\":{\"urls\":[\"koadit_cbt_00060___avatar_50_31.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTAgMzEiPgoJPGltYWdlIHdpZHRoPSI1MCIgaGVpZ2h0PSIzMSIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJOaklwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FFd0FlQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEE4UEh3SjArUkJtdFZLNU5ySHV2d28vWVAwL3h0cEMzWWsyQTAyN0J1YzM4WXYySzlOOEEzU0F5YncxVHpsV1ZqelpmZ1BwY1F3S09jbXg2djVmbFl6V1pSNi84QUQvNDlYZmdqU2x0SUV5b3JzcHpwcGU4WVNVdWh6bnhTK0t0MThRWFY1VndWckdzNHY0QzRKcmM4NlNRc09heDZGM0xsMzBGQXlzQ2MwQUtlbEFFQjYwQ1AvOWs9Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}', 21, '2021-10-19 11:30:41', '2021-10-19 11:30:42'),
(27, 'App\\Models\\investor\\Investment', 9, 'adcaeca3-14a6-4a20-80be-763bdaca80ad', 'evidence', 'qrcode_attack', 'qrcode_attack.png', 'image/png', 'uploads', 'uploads', 799, '[]', '[]', '[]', '[]', 22, '2021-10-19 11:31:09', '2021-10-19 11:31:09'),
(28, 'App\\Models\\investor\\Investment', 14, '24c40de7-00f3-4215-938a-64db87f3761e', 'evidence', 'koadit_cbt_00096', 'koadit_cbt_00096.png', 'image/png', 'uploads', 'uploads', 100157, '[]', '[]', '[]', '[]', 23, '2021-10-26 20:03:56', '2021-10-26 20:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_20_200320_create_media_table', 2),
(6, '2021_09_20_202156_create_permission_tables', 3),
(7, '2021_09_20_205304_create_coins_table', 4),
(8, '2021_09_21_155224_create_investors_table', 5),
(9, '2021_09_21_172604_create_referrals_table', 5),
(10, '2021_09_22_075850_create_banks_table', 6),
(11, '2021_09_22_092254_create_investments_table', 7),
(12, '2021_09_22_134903_create_transactions_table', 8),
(13, '2021_09_22_201854_create_notifications_table', 8),
(14, '2021_09_26_043930_create_configurations_table', 9),
(15, '2021_09_30_122126_create_withdraws_table', 10),
(16, '2021_10_16_105732_create_news_table', 11),
(17, '2021_10_17_115128_create_contacts_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 19);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Good morning buddies', 'disabled', '2021-10-16 11:59:17', '2021-10-16 11:59:38'),
(3, 'Good morning buddies yooo', 'active', '2021-10-16 11:59:25', '2021-10-16 11:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('000a3f83-e280-479c-b996-affdd1d2e2e4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view due investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:18:06', '2021-10-17 14:40:58'),
('0225c481-1547-4d97-a82f-7d79365c571c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment details to Super Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:56:48', '2021-10-19 10:56:48'),
('023fcc3a-79cf-4cdb-9918-9bebe9fab930', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw read contact message from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:38:26', '2021-10-17 14:40:57'),
('028dff5b-239e-411c-a743-3301a459c76b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of 47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 15:08:42', '2021-10-11 07:19:10'),
('029886e2-2f0d-4ef6-bd8c-8879149bcac4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-10-26 20:03:57', '2021-10-26 20:03:57'),
('03897f30-179c-43fe-84bd-bb0eb4966a1d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view withdrawal request from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:55', '2021-10-17 14:25:04', '2021-10-17 14:40:55'),
('0435b875-4ac3-467e-b2e4-a6205d4b37f6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process withdrawal request with paystack to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:54', '2021-10-17 14:40:08', '2021-10-17 14:40:54'),
('04f0e0e6-e879-46f1-a8e8-0c23c90e6a43', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-account-check\",\"message\":\"You update your profile \",\"bg\":\"bg-success\"}', '2021-10-19 11:39:18', '2021-10-19 11:30:42', '2021-10-19 11:39:18'),
('0631ec3b-eb26-418a-ab6a-9a13138d3b9b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw add role from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:16:41', '2021-10-17 15:16:41'),
('06acc4e5-468a-4069-9b46-f9198b94d87f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:41', '2021-10-01 23:52:25', '2021-10-07 11:37:41'),
('0701ed8c-5632-4c27-ba15-a287b366f32b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 13:36:56', '2021-10-11 07:19:10'),
('082f4f8d-0d0f-43ca-92fe-e40274d78a5f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view manage role from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:50', '2021-10-17 14:40:59'),
('0d96c5f9-3a57-44cf-b484-d36cf3992820', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 13, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:01:01', '2021-10-19 11:01:01'),
('135b40ab-fe3d-41ff-9520-0ec3242fb268', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-currency-ngn\",\"message\":\"Your withdraw request of 3.09 have received and it will processed very soon\",\"bg\":\"bg-warning\"}', '2021-10-19 11:39:18', '2021-10-19 11:33:21', '2021-10-19 11:39:18'),
('15eb272e-ebee-4656-9a0a-a0066f759e5d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add role to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:09', '2021-10-17 14:40:56'),
('16181bc5-ca27-4d2c-852f-30f6ac174cdc', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw process pending investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:18:09', '2021-10-17 14:40:57'),
('17db55de-1cff-45d6-8b06-62023adb7805', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  update coin to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:41:00', '2021-10-17 12:55:28', '2021-10-17 14:41:00'),
('1902072a-2315-4f44-8a17-a49278b7bce4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-currency-ngn\",\"message\":\"Liadi Kafayat requst to  withdraw 2.03 Wrap, please process the request \",\"bg\":\"bg-warning\"}', '2021-10-07 13:22:05', '2021-10-05 21:29:52', '2021-10-07 13:22:05'),
('193b6cf8-84d4-431e-b432-1304138b564b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', '2021-10-19 11:39:18', '2021-10-19 11:31:40', '2021-10-19 11:39:18'),
('1a1c8c9a-5097-4fd7-b1c0-8bd4735aedc1', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  manage user to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:18:52', '2021-10-17 14:40:55'),
('1c7c105e-ceaf-421b-b63e-ae6d1ecdeb91', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw add role from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:46', '2021-10-17 14:40:59'),
('1dce583d-7cf4-4744-987c-4e6cbea9d71a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add coin to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:34', '2021-10-17 14:40:55'),
('1df4b138-3114-4918-94f4-4d6cc13fe722', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 13:24:46', '2021-10-19 13:24:46'),
('1e4f0e48-23e5-4a98-bd1d-79409da55298', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You delete news feed\",\"bg\":\"bg-danger\"}', '2021-10-16 13:21:30', '2021-10-16 11:56:29', '2021-10-16 13:21:30'),
('21fc2e0f-cbc3-42bb-a580-f1ad963d6bfc', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view active investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:17:58', '2021-10-17 14:40:58'),
('2279cbed-13b3-45cd-af24-840c01e2afe6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  enable coin to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:01:39', '2021-10-17 15:01:39'),
('22f74373-ba77-4d24-83ab-bb8c600f2ff5', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 13, '{\"icon\":\"mdi mdi-account-check\",\"message\":\"You update your profile \",\"bg\":\"bg-success\"}', '2021-10-16 12:18:34', '2021-10-14 11:40:07', '2021-10-16 12:18:34'),
('2333569c-4ed3-440f-bd00-f65d436f1ebd', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  enable user to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:17', '2021-10-17 14:40:56'),
('26967a09-908a-41ea-a1d3-fd495b56f0f5', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view processed withdrawal to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:54', '2021-10-17 14:27:46', '2021-10-17 14:40:54'),
('28b87b26-febe-4ba1-9b2b-ea096d89da61', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with cash\",\"bg\":\"bg-success\"}', '2021-09-27 06:16:38', '2021-09-26 12:21:43', '2021-09-27 06:16:38'),
('29bc159e-6e26-42a5-b01c-892c35b06482', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  manage permission to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:25:42', '2021-10-17 15:25:42'),
('2a2c193d-30e8-4c97-b05e-218d02d9b5f0', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 13, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You received984.75 from Oluokun Kabiru\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:31:40', '2021-10-19 11:31:40'),
('2aba5832-ab2e-438e-9fb6-a3021e2f7798', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view active investment details from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:54', '2021-10-17 14:36:21', '2021-10-17 14:40:54'),
('2b3d882e-4add-4ccc-bd21-98a145788bac', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw delete role from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:20:37', '2021-10-17 15:20:37'),
('2cc9e4bf-9772-42b0-832b-5ee8db1a2700', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view staff to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:59:48', '2021-10-17 14:40:57'),
('2d4b66fc-f2b4-4368-a44d-a7277661fd70', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:36', '2021-10-17 14:40:59'),
('2fcaa5b2-5f48-4d1c-9e4a-234981ceecce', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw read contact messag from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:45', '2021-10-17 14:40:59'),
('2fe3aba9-9136-4633-93f5-db39afb0bb12', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You delete  investment payment \",\"bg\":\"bg-danger\"}', NULL, '2021-11-06 11:44:52', '2021-11-06 11:44:52'),
('31098d4f-7e06-46b1-9fbf-559dc4c00aaf', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view pending investment to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:57:22', '2021-10-19 10:57:22'),
('31182ec9-affa-44f7-9401-079e9a135630', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  login to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:01:15', '2021-10-17 15:01:15'),
('316c4874-2f57-4ac7-aa77-68d172999b0a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  disable user to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:20:42', '2021-10-17 14:40:55'),
('318ff010-36f4-4c51-91cb-d4111e8eef8c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw manage user from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:55', '2021-10-17 14:10:01', '2021-10-17 14:40:55'),
('32acf484-b7cd-40e5-9489-4cf0c401cbdf', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view website setting from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:18:02', '2021-10-17 14:40:58'),
('330f8cca-1ef3-4341-a949-0728d1f89d3d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw add permission from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:18:04', '2021-10-17 14:40:58'),
('3320a646-9d25-4a24-9fb2-45e8c8e59bd0', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  edit role to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:20:35', '2021-10-17 15:20:35'),
('34c345f0-50f7-42cc-b40b-cde7799bbee3', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 13:19:09', '2021-10-19 13:19:09'),
('35210bf1-2598-4dbc-a3c0-fc89b035cc20', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  disable user to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:18', '2021-10-17 14:40:56'),
('354c1903-6c71-4f12-8fef-d2ae56b602a0', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view contact message from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:49', '2021-10-17 14:40:59'),
('38c2fccf-e0d0-4c33-a6cd-5dd28fa88ba2', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-currency-ngn\",\"message\":\"Liadi Kafayat requst to  withdraw referral bonus of 2000.00, please process the request \",\"bg\":\"bg-warning\"}', '2021-10-07 13:22:05', '2021-10-05 22:14:06', '2021-10-07 13:22:05'),
('3afaeb00-ffbc-4c1a-ab7a-aa21e518e128', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw read contact message from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:38:01', '2021-10-17 14:40:57'),
('3b264e6d-4a4f-4eec-8320-321506000ce9', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-10-19 11:25:43', '2021-10-19 11:25:43'),
('3cf07380-f2f4-4d33-b5e0-d9950eba53f3', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process withdrawal request to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:20', '2021-10-17 14:40:56'),
('3eada354-7fa3-46e5-9e55-865cc251dd27', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of <span class=\\\" mdi mdi-currency-ngn \\\"><\\/span>47160.96 was processing\",\"bg\":\"bg-processing\"}', '2021-10-09 15:49:35', '2021-10-09 15:29:45', '2021-10-09 15:49:35'),
('42408598-3b94-40b8-9c52-bacbc18f6799', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:04:59', '2021-10-17 14:40:56'),
('42479923-64dc-40c8-994e-a9cfc9a17c2b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw edit website setting from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:55', '2021-10-17 14:40:59'),
('447068bd-c4af-47f7-8987-618f7abf7453', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view contact message to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:32:04', '2021-10-17 14:40:57'),
('46350134-8336-4296-a412-91b183e1ba06', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  edit website setting to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:41:00', '2021-10-17 13:17:13', '2021-10-17 14:41:00'),
('46ba92d1-ea38-4a40-b6f7-35b06100af44', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of \\u20a647160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 15:59:08', '2021-10-11 07:19:10'),
('4774aabe-9dee-4fd9-a818-9ea2a1c23994', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view active investment details from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:53', '2021-10-17 14:40:59'),
('4c111b58-cd58-4642-aca3-d0da190b67d2', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:54', '2021-10-17 14:39:02', '2021-10-17 14:40:54'),
('4c5cf4bc-3740-4797-959f-3f7d7cec7998', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process withdrawal request with transfer to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:57:30', '2021-10-17 14:40:57'),
('4ec13771-bad3-4958-96d8-0841921c1376', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view withdrawal request to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 14:44:32', '2021-10-17 14:44:32'),
('4ecd76d2-e6e3-4860-96e2-23bbb611790d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process withdrawal request to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:34:11', '2021-10-19 11:34:11'),
('4f59272b-1956-44c2-a59d-bea7ade0d15a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:09:12', '2021-10-19 11:09:12'),
('50cb056b-2fce-446c-bb3a-79508f1084be', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  manage permission to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:04:46', '2021-10-17 14:40:57'),
('52100a94-4a3b-4a04-af2f-32081c884de1', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view website setting from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:11:47', '2021-10-17 15:11:47'),
('52baecdb-1144-4b48-ba47-780b1e955c94', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-10-19 11:13:25', '2021-10-19 11:13:25'),
('55632c6e-0763-41f0-b842-36229701ddee', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment details to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:54', '2021-10-17 14:38:32', '2021-10-17 14:40:54'),
('58f41efe-5d45-42e3-b8da-173f08c64ce4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of \\u20a647160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-16 13:21:30', '2021-10-09 15:59:08', '2021-10-16 13:21:30'),
('59470ae2-d06f-405e-b717-c2bdfb0fb86c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  delete role to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:20:38', '2021-10-17 15:20:38'),
('5b6b6cbe-2d75-48df-a89e-910802c51666', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-account-check\",\"message\":\"You update your profile \",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:07:55', '2021-10-19 11:07:55'),
('5bd90dc5-d882-481c-9d09-0f98498ec54d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-account-key\",\"message\":\"You added new role Super Admin\",\"bg\":\"bg-info\"}', NULL, '2021-10-17 15:08:19', '2021-10-17 15:08:19'),
('5e415bfb-0a94-46fc-bdde-7f0fa516a2f9', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  edit website setting to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:04', '2021-10-17 14:40:56'),
('5e9f169a-ba13-4816-80b3-0df4ac4f9c3b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  edit website setting to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:45:29', '2021-10-17 15:45:29'),
('5eae4af5-a718-4d1e-a231-7b78bc4e5942', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 13, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You received656.5 from Oluokun Kabiru\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:24:13', '2021-10-19 11:24:13'),
('5f6706dd-76ee-45ee-ba00-86e782a4f51a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add staff to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:00:20', '2021-10-17 14:40:57'),
('60a1c1a4-d543-496e-a7e0-aacbdf3b7dec', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw enable coin from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:00:42', '2021-10-17 15:00:42'),
('616f2924-9465-4021-bd71-7bc1d68898cc', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process pending investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:04:54', '2021-10-17 14:40:57'),
('6330fb94-8b84-4171-a47d-4f604f5da0d9', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view pending investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:32', '2021-10-17 14:40:59'),
('6404d406-0f3a-4dc5-9ecd-195c8d6d1a93', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with credit card\",\"bg\":\"bg-success\"}', '2021-09-27 06:16:39', '2021-09-26 08:34:45', '2021-09-27 06:16:39'),
('64d16747-9be2-4fa4-a86a-27d9070ec0c6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view pending investment from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 14:49:36', '2021-10-17 14:49:36'),
('6551f694-6cac-4346-9298-4c306da0b777', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of &#8358;47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 15:49:19', '2021-10-11 07:19:10'),
('655a43b0-3ac0-4dac-be1b-39a3fa814387', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view withdrawal request from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 14:44:22', '2021-10-17 14:44:22'),
('65c1a431-1862-45f8-8e49-b00174c14c92', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view active investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:54', '2021-10-17 14:36:41', '2021-10-17 14:40:54'),
('660c3225-5eca-42a3-8e86-c226bac08446', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-07-13 16:43:13', '2021-07-13 16:43:13'),
('6784be13-3834-4734-aeb6-8472fbdc2fdc', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of 47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-09 15:27:51', '2021-10-09 15:26:13', '2021-10-09 15:27:51'),
('67b00e72-88c2-4993-9db0-9eaedbedc27d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view manage coin to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:04:42', '2021-10-17 14:40:57'),
('6830b180-f195-4187-8b08-323efd728e4b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with credit card\",\"bg\":\"bg-success\"}', '2021-09-27 06:16:39', '2021-09-23 04:37:47', '2021-09-27 06:16:39'),
('6bab3320-3193-46f6-8174-466fd60291ac', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add coin to Super Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:56:54', '2021-10-19 10:56:54'),
('6c0ad4c4-3b2f-4d3b-a3a3-0932b0c65250', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of \\u20a619271.56 was processing\",\"bg\":\"bg-processing\"}', NULL, '2021-10-19 11:35:02', '2021-10-19 11:35:02'),
('6caeac79-4eb9-4ea9-aba7-f53463bc8346', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view processed withdrawal from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:54', '2021-10-17 14:27:44', '2021-10-17 14:40:54'),
('6d70f3a0-2383-4347-b033-96a0ed14037d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  read contact message to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:10', '2021-10-17 14:40:56'),
('6d80c753-0f94-439b-9a73-18600c99573c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"  mdi mdi-toggle-switch-off  \",\"message\":\"You delete news feed\",\"bg\":\"bg-success\"}', '2021-10-16 13:21:30', '2021-10-16 11:56:13', '2021-10-16 13:21:30'),
('6f6e2606-73bc-447d-bfae-3f11dff09e96', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw disable coin from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:00:21', '2021-10-17 15:00:21'),
('70a3f2df-2578-42e4-b209-f5e4f76ac48d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-currency-ngn\",\"message\":\"Oluokun Kabiru requst to  withdraw 3.09 Wrap lite, please process the request \",\"bg\":\"bg-warning\"}', NULL, '2021-10-19 11:33:21', '2021-10-19 11:33:21'),
('70d41815-2bc3-43bc-b91b-ce70590a403c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 19, '{\"icon\":\"mdi mdi-account-check\",\"message\":\"You update your profile \",\"bg\":\"bg-success\"}', NULL, '2021-10-16 14:01:17', '2021-10-16 14:01:17'),
('71b9050d-3a65-4686-9980-c2931fbecf4b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process withdrawal request with transfer to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:39', '2021-10-17 14:40:59'),
('73539da7-3968-4604-ab44-eda2dc637552', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:40', '2021-10-02 04:30:09', '2021-10-07 11:37:40'),
('73b07b1a-6faf-414c-95c5-ac290792de6f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-07 12:31:33', '2021-10-11 07:19:10'),
('746f2a1e-f5cc-47fb-95a4-a191cd30f44c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view contact message to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:29:34', '2021-10-17 14:40:57'),
('7690fc40-f948-4ba4-a4a2-d79033fbab88', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  enable user to Super Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:56:52', '2021-10-19 10:56:52'),
('781cc8ac-5067-4bf2-969b-185424ea07fa', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view withdrawal request to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:21', '2021-10-17 14:40:56'),
('7b6d2af8-40c2-4683-ad97-fd41d64cc150', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of 47160.96 was processing\",\"bg\":\"bg-processing\"}', '2021-10-09 15:27:51', '2021-10-09 15:22:19', '2021-10-09 15:27:51'),
('7d08bcf7-eeb4-48c7-b32f-0d282f38ba92', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-human-male-female\",\"message\":\"Your withdraw request for referral bonus of 2000.00 have received and it will processed very soon\",\"bg\":\"bg-warning\"}', '2021-10-07 11:37:40', '2021-10-05 22:15:42', '2021-10-07 11:37:40'),
('7e53bd5f-8c48-485b-980b-47de54ed5145', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view website setting to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:13', '2021-10-17 14:40:56'),
('7e8a8c26-15a1-4364-a1fd-277a84fa907c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 20 with cash\",\"bg\":\"bg-warning\"}', '2021-09-22 20:26:10', '2021-09-22 19:56:33', '2021-09-22 20:26:10'),
('7ede641c-8ba2-470e-aaa3-f31b2b24453c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-account-check\",\"message\":\"You update your profile \",\"bg\":\"bg-success\"}', '2021-09-27 06:16:38', '2021-09-27 03:56:55', '2021-09-27 06:16:38'),
('811a4d68-6b26-44a8-aac6-382402857be2', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 12:43:06', '2021-10-19 12:43:06'),
('8160304c-d317-41e7-b847-8c211ba7249a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You delete Super Admin\",\"bg\":\"bg-danger\"}', '2021-09-27 07:48:23', '2021-09-27 07:10:55', '2021-09-27 07:48:23'),
('8320c4d7-5e72-4f25-9d87-000389f29062', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view user to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:01', '2021-10-17 14:40:56'),
('83259c48-f80b-4ec8-a9fb-452af4d16a3e', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  disable coin to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:00:40', '2021-10-17 15:00:40'),
('86b98bbf-117a-4af5-ba01-2253f1d372c5', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  delete staff to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:32', '2021-10-17 14:40:55'),
('86c539a0-08ac-43ea-b65a-334e7f612821', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw process withdrawal request from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 14:46:05', '2021-10-17 14:46:05'),
('8835b6fd-fd2d-4925-acd6-952f1bfd6c21', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process due investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:04:50', '2021-10-17 14:40:57'),
('8906676d-0728-43d5-936a-1968423c2a51', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', '2021-10-07 11:37:40', '2021-10-02 00:39:05', '2021-10-07 11:37:40'),
('8a6adaa8-91ce-453a-93df-9922073d6a03', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-account-key\",\"message\":\"You added new role super admin\",\"bg\":\"bg-info\"}', '2021-09-27 07:48:23', '2021-09-27 07:10:28', '2021-09-27 07:48:23'),
('8cb8b9da-87c2-4b0e-a7b6-b5cd3af5a5cb', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 12:49:44', '2021-10-19 12:49:44'),
('8e977766-4d09-4844-93a8-5a721163cdbc', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process due investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:26', '2021-10-17 14:40:59'),
('9076587b-9028-4d75-887f-8b53aee2414c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view pending investment to Super Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:56:45', '2021-10-19 10:56:45'),
('90b473f2-5742-4df9-9c38-a363b3b72563', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of <span class=\\\" mdi mdi-currency-ngn \\\"><\\/span>47160.96 was processing\",\"bg\":\"bg-processing\"}', '2021-10-11 07:19:10', '2021-10-09 15:29:45', '2021-10-11 07:19:10'),
('9117d617-6ee6-4c64-875c-d29549ea5e45', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add permission to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:16', '2021-10-17 14:40:59'),
('9118459a-5bb4-4562-a110-61c5cad37b57', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view contact message to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:41:00', '2021-10-17 13:17:12', '2021-10-17 14:41:00'),
('935a6700-e256-4010-b318-55e93b1093dc', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 13, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-10-19 10:59:58', '2021-10-19 10:59:58'),
('949bbb5c-8782-426c-9db4-668951cb1e88', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  update coin to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:35', '2021-10-17 14:40:55'),
('97022958-aff6-4bf6-861b-6bef68e8507d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw edit role from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:20:33', '2021-10-17 15:20:33'),
('976b8e47-de52-4a57-a6ba-b16747e03e2f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:41', '2021-10-02 00:14:22', '2021-10-07 11:37:41'),
('9be54930-a1f1-4cfd-8c07-2cf219c67720', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view due investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:04:52', '2021-10-17 14:40:57'),
('9fa373e3-b5a3-4571-ab5d-53c4fb4213b4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-currency-ngn\",\"message\":\"Liadi Kafayat requst to  withdraw referral bonus of 2000.00, please process the request \",\"bg\":\"bg-warning\"}', '2021-10-07 13:22:04', '2021-10-05 22:15:42', '2021-10-07 13:22:04'),
('a05c759e-884b-411f-b420-901a67443c04', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-human-male-female\",\"message\":\"Your withdraw request for referral bonus of 2000.00 have received and it will processed very soon\",\"bg\":\"bg-warning\"}', '2021-10-07 11:37:40', '2021-10-05 22:14:06', '2021-10-07 11:37:40'),
('a05c8148-e8db-404d-b7f2-3dbdcc78c530', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view manage role to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:23', '2021-10-17 14:40:59'),
('a1b59644-4f73-4566-9c8a-7714a7f7d05b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of \\u20a619271.56 was success\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:38:56', '2021-10-19 11:38:56'),
('a1bf4f82-5e36-4de4-92e1-28c6600e4418', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw manage permission from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:18:10', '2021-10-17 14:40:57'),
('a26b24cf-0e0e-4fc6-ada5-b3c5574ce91a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  edit staff to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:31', '2021-10-17 14:40:55'),
('a2e5c5c0-b6d2-4bb8-93ff-dd3769701112', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with credit card\",\"bg\":\"bg-success\"}', '2021-09-27 06:16:39', '2021-09-23 04:44:35', '2021-09-27 06:16:39'),
('a3d90a96-936c-4819-a9b2-8866903aa17d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw update coin from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:18:14', '2021-10-17 14:40:57'),
('a4543d8b-3643-419f-92aa-99464344b3a3', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view pending investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 14:04:55', '2021-10-17 14:40:57'),
('a514459e-27b8-43a6-b9c7-68ce81f795b4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:41', '2021-10-02 00:09:09', '2021-10-07 11:37:41'),
('a570c66f-cebd-4fb4-8420-c3427278f6f7', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view active investment details from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:54', '2021-10-17 14:40:42', '2021-10-17 14:40:54'),
('a6200f58-8de6-4619-bebf-4c9ab56424ae', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw add staff from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:08:50', '2021-10-17 15:08:50'),
('a69e0503-faa4-420d-a061-6617e84532a4', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', '2021-10-19 11:39:18', '2021-10-19 11:31:09', '2021-10-19 11:39:18'),
('a7ac1199-deb4-4072-b749-2c83ab1f7d47', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 13, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-16 12:18:34', '2021-10-14 11:41:17', '2021-10-16 12:18:34'),
('a80249b9-4169-401c-8a51-71208a8d323a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of \\u20a619271.56 was processing\",\"bg\":\"bg-processing\"}', '2021-10-19 11:39:18', '2021-10-19 11:35:02', '2021-10-19 11:39:18'),
('a84f9815-a651-48e4-843c-b85a1adaafa6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment details to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:57:23', '2021-10-19 10:57:23'),
('a8f44f73-8f95-416c-9d9d-0081017c4144', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  read contact messag to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:41:00', '2021-10-17 13:17:10', '2021-10-17 14:41:00'),
('aa6f5585-5df0-46a9-8a0e-735583278905', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-10-19 11:08:29', '2021-10-19 11:08:29'),
('ab7b20e7-df29-448b-8c50-824c9ce34e7b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  enable coin to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:26', '2021-10-17 14:40:55'),
('acd9c316-e340-46ea-8562-b5d8094286b3', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view contact message from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:29:39', '2021-10-17 14:40:57'),
('b1476c2d-b1bd-4c5c-903f-bb57ef800dcf', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with credit card\",\"bg\":\"bg-success\"}', '2021-09-27 06:16:39', '2021-09-26 07:40:56', '2021-09-27 06:16:39'),
('b1b5cebd-5551-4ae7-bb2d-cc891a5e0a5e', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment details to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:34', '2021-10-17 14:40:59'),
('b26c3fec-cafa-47cb-89a0-6bea4c54da17', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view settled investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:05', '2021-10-17 14:40:56'),
('b2b0a352-fc86-4808-b95b-a59448d523e0', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view website setting to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:12:03', '2021-10-17 15:12:03'),
('b4adc8a6-93d6-4aea-bfd3-795e3a99fb2f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw enable user from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:55', '2021-10-17 14:20:46', '2021-10-17 14:40:55'),
('b4e65a7a-f293-47e1-a10e-0e771569b568', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  manage permission to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:18', '2021-10-17 14:40:59'),
('b620677b-56c9-4888-a6c7-583217e73a05', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view active investment details to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:04:57', '2021-10-17 14:40:56'),
('b91e5144-236b-4882-b8ef-7c672494cc9c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 17, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with cash\",\"bg\":\"bg-warning\"}', NULL, '2021-09-26 12:21:44', '2021-09-26 12:21:44'),
('b9bb5aa7-709c-4c37-bf72-22a015f2a23b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view website setting to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:41:00', '2021-10-17 13:17:15', '2021-10-17 14:41:00'),
('bae272bf-72e9-44f6-86b8-33e9d4a0e3e3', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view pending investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:47', '2021-10-17 14:40:59'),
('bb4df118-8a59-49eb-afac-c43d35d755ab', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:40', '2021-10-02 00:43:18', '2021-10-07 11:37:40'),
('bcac8604-3957-4c47-820f-8ff7f4c49c4d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:26:00', '2021-10-19 11:26:00'),
('c1b4d04e-ff36-4889-a864-6857a53f70d8', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  disable coin to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:28', '2021-10-17 14:40:55'),
('c425030f-1c68-4238-bfc6-ff587b35bfef', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw process withdrawal request with transfer from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:18:07', '2021-10-17 14:40:58'),
('c48105f0-c149-4318-ac68-5ea65de200a3', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw process withdrawal request with paystack from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:18:00', '2021-10-17 14:40:58'),
('c52b69f4-fb05-449b-b6ca-8ded255524af', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  read contact message to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:38:09', '2021-10-17 14:40:57'),
('c97e789c-d6e2-4fc3-a958-79ab6108132f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy 45345 with credit card\",\"bg\":\"bg-success\"}', '2021-09-27 06:16:39', '2021-09-26 08:27:28', '2021-09-27 06:16:39'),
('c9871653-3b84-4848-9c50-b8ba466fe6e6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw process due investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:58', '2021-10-17 13:18:01', '2021-10-17 14:40:58'),
('c9e94d2d-a8b7-44e6-b21d-e7461cf31e7f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 19, '{\"icon\":\"mdi mdi-account-check\",\"message\":\"You update your profile \",\"bg\":\"bg-success\"}', NULL, '2021-10-16 13:59:46', '2021-10-16 13:59:46'),
('c9fa7795-606d-4fb7-830a-db660d06088a', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view investments to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:46:30', '2021-10-17 14:40:57'),
('cd0e4892-ee44-4a79-8e40-e8bbf23034db', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"  mdi mdi-toggle-switch-off  \",\"message\":\"You delete news feed\",\"bg\":\"bg-success\"}', '2021-10-16 13:21:30', '2021-10-16 11:59:38', '2021-10-16 13:21:30'),
('d10a52f5-bb45-4a89-90f4-392b880ac97b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view manage role to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:07', '2021-10-17 14:40:56'),
('d16490f4-6a65-47d3-af42-dff838000bf6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of 47160.96 was processing\",\"bg\":\"bg-processing\"}', '2021-10-11 07:19:10', '2021-10-09 15:22:19', '2021-10-11 07:19:10');
INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('d19392e2-6bbb-40c0-9dab-16041a44f830', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view settled investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:24', '2021-10-17 14:40:59'),
('d196c4fb-75b4-4a38-9595-3adf2b289ef7', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add role to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:57:25', '2021-10-19 10:57:25'),
('d25ddb0b-75a8-45fb-9b0d-0a0463f4f550', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process pending investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:30', '2021-10-17 14:40:59'),
('d38f9d33-7389-4fcd-ad2a-bc4c36cad524', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view staff from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:57', '2021-10-17 13:59:46', '2021-10-17 14:40:57'),
('d94c389e-8972-477c-8c71-e0516231acbd', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add role to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:21', '2021-10-17 14:40:59'),
('d9a5d5cd-f79d-4c39-be14-2cbe18479173', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view transaction history to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:25', '2021-10-17 14:40:55'),
('dbac4f72-23ba-471a-a561-ae860b952d9b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  login to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:15', '2021-10-17 14:40:56'),
('dfaf06b4-2daa-46d4-9949-f3cb1e0b87b7', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of 47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 15:26:13', '2021-10-11 07:19:10'),
('e06d8052-f41a-4f12-9a32-3007e5845a95', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw view settled investment from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:57', '2021-10-17 14:40:59'),
('e209fc1a-17fe-4394-8c2e-3b1426c5a9ff', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw disable user from Admin\",\"bg\":\"bg-danger\"}', '2021-10-17 14:40:55', '2021-10-17 14:20:20', '2021-10-17 14:40:55'),
('e24ca4b2-3250-453b-aafc-1d1a4a01fd21', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of &#8358;47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-09 15:49:35', '2021-10-09 15:49:19', '2021-10-09 15:49:35'),
('e67112dc-de9e-4d3c-a91e-37a0a508931f', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-table-edit \",\"message\":\"You edit role  Super Admins\",\"bg\":\"bg-warning\"}', '2021-09-27 07:48:23', '2021-09-27 07:10:39', '2021-09-27 07:48:23'),
('e70f331d-050e-4def-ba87-f307d98085dd', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-currency-ngn\",\"message\":\"Your withdraw request of 2.03 have received and it will processed very soon\",\"bg\":\"bg-warning\"}', '2021-10-07 11:37:40', '2021-10-05 21:29:52', '2021-10-07 11:37:40'),
('e800efd2-9859-4b4b-90a4-12ae783e0ed5', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-account-star \",\"message\":\"New staff with Admin role added successfully\",\"bg\":\"bg-success\"}', '2021-10-16 13:21:30', '2021-10-16 13:20:28', '2021-10-16 13:21:30'),
('ea1ef6ca-1799-4e55-9b8b-e582b08878ee', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-table-edit \",\"message\":\"You edit role  Super Admin\",\"bg\":\"bg-warning\"}', '2021-09-27 07:48:23', '2021-09-27 07:10:49', '2021-09-27 07:48:23'),
('eb618e6a-853c-418d-9dec-195338b40cb9', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment request of  <span class=\\\" mdi mdi-currency-ngn \\\"><\\/span>47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-09 15:58:33', '2021-10-09 15:55:12', '2021-10-09 15:58:33'),
('ec7cbc39-ad7d-40d3-9f2a-661e25412bd6', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view withdrawal request to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:54', '2021-10-17 14:25:36', '2021-10-17 14:40:54'),
('ec7ffef2-b840-49d9-904d-70ce7b93f02e', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  view due investment to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:27', '2021-10-17 14:40:59'),
('ee3da63e-9e9c-44b6-97db-731c4c2d910b', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  read contact message to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:57', '2021-10-17 13:37:57', '2021-10-17 14:40:57'),
('eea6f943-0d17-4c21-8d9f-d8b5841e89e2', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  process withdrawal request with paystack to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:59', '2021-10-17 13:17:38', '2021-10-17 14:40:59'),
('efbefdc3-3bc3-41f0-90fd-9617ff76572c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 21, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of \\u20a619271.56 was success\",\"bg\":\"bg-success\"}', '2021-10-19 11:39:18', '2021-10-19 11:38:56', '2021-10-19 11:39:18'),
('f01299b6-a899-468c-8124-f3065e93d39c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 20, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 11:24:13', '2021-10-19 11:24:13'),
('f0186666-ba2d-41bd-99da-0b276f1ce7de', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your withdraw request of <span class=\\\" mdi mdi-currency-ngn \\\"><\\/span>47160.96 was success\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 15:55:12', '2021-10-11 07:19:10'),
('f14055cb-7918-4739-be33-2abcd2538dfe', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', '2021-10-11 07:19:10', '2021-10-09 13:37:05', '2021-10-11 07:19:10'),
('f45ae344-682e-4ea3-aa6c-8ff8e48c8bc2', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"You buy  with credit card\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:41', '2021-10-01 23:54:45', '2021-10-07 11:37:41'),
('f49a3334-de0a-4fcc-87a1-3907881b8c38', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your investment on Wrap ladie with transfer was rejected please cheched your transfer evidence\",\"bg\":\"bg-danger\"}', NULL, '2021-10-26 11:44:36', '2021-10-26 11:44:36'),
('f4f03bf0-2c1c-4066-9f30-7d50668eef1d', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your investment on Wrap lite with transfer was rejected please cheched your transfer evidence\",\"bg\":\"bg-danger\"}', NULL, '2021-07-13 16:57:21', '2021-07-13 16:57:21'),
('f59d0e57-5acd-4d5e-99a4-1823194fba63', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add staff to Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-17 15:08:59', '2021-10-17 15:08:59'),
('f5c31e28-0556-46f3-bb59-9438cf210d94', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add role to Super Admin\",\"bg\":\"bg-success\"}', NULL, '2021-10-19 10:56:50', '2021-10-19 10:56:50'),
('f87c0762-4917-4263-b787-836d5c25d56c', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw add coin from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:02:38', '2021-10-17 15:02:38'),
('f8d84714-017f-4306-97b2-e79a0eb46440', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your investment on Wrap ladie with transfer was rejected please cheched your transfer evidence\",\"bg\":\"bg-danger\"}', NULL, '2021-11-06 11:39:54', '2021-11-06 11:39:54'),
('fa46d81f-e302-48c4-b032-dd6b66644173', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  add permission to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:56', '2021-10-17 14:05:12', '2021-10-17 14:40:56'),
('fbc5b1b9-72d3-495e-b372-6cfa21cf1745', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 14, '{\"icon\":\"mdi mdi-cash-multiple\",\"message\":\"Your payment of buy  with transfer have confirmed\",\"bg\":\"bg-success\"}', '2021-10-07 11:37:40', '2021-10-07 11:36:15', '2021-10-07 11:37:40'),
('fe0de99c-01d7-463c-92f6-ab3ec94de7cb', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw edit website setting from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:13:11', '2021-10-17 15:13:11'),
('ff23431f-613e-453e-a219-afb5c00dbd39', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-delete  \",\"message\":\"You withdraw manage permission from Admin\",\"bg\":\"bg-danger\"}', NULL, '2021-10-17 15:25:39', '2021-10-17 15:25:39'),
('ff369679-37b1-443b-a316-47f64ac33141', 'App\\Notifications\\InvestorNotification', 'App\\Models\\User', 2, '{\"icon\":\" mdi mdi-book-plus   \",\"message\":\"You assigned  manage user to Admin\",\"bg\":\"bg-success\"}', '2021-10-17 14:40:55', '2021-10-17 14:05:29', '2021-10-17 14:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add staff', 'web', '2021-10-17 12:54:34', '2021-10-17 12:54:34'),
(2, 'edit staff', 'web', '2021-10-17 12:54:41', '2021-10-17 12:54:41'),
(3, 'delete staff', 'web', '2021-10-17 12:54:48', '2021-10-17 12:54:48'),
(4, 'add coin', 'web', '2021-10-17 12:54:58', '2021-10-17 12:54:58'),
(5, 'update coin', 'web', '2021-10-17 12:55:05', '2021-10-17 12:55:05'),
(6, 'enable coin', 'web', '2021-10-17 12:56:08', '2021-10-17 12:56:08'),
(7, 'disable coin', 'web', '2021-10-17 12:56:16', '2021-10-17 12:56:16'),
(8, 'manage user', 'web', '2021-10-17 12:56:28', '2021-10-17 12:56:28'),
(9, 'disable user', 'web', '2021-10-17 12:56:37', '2021-10-17 12:56:37'),
(10, 'enable user', 'web', '2021-10-17 12:56:53', '2021-10-17 12:56:53'),
(11, 'login', 'web', '2021-10-17 12:57:08', '2021-10-17 12:57:08'),
(12, 'view user', 'web', '2021-10-17 12:57:39', '2021-10-17 12:57:39'),
(13, 'view transaction history', 'web', '2021-10-17 12:58:14', '2021-10-17 12:58:14'),
(14, 'view withdrawal request', 'web', '2021-10-17 12:59:46', '2021-10-17 12:59:46'),
(15, 'process withdrawal request', 'web', '2021-10-17 12:59:57', '2021-10-17 12:59:57'),
(16, 'process withdrawal request with transfer', 'web', '2021-10-17 13:01:57', '2021-10-17 13:01:57'),
(17, 'process withdrawal request with paystack', 'web', '2021-10-17 13:02:05', '2021-10-17 13:02:05'),
(18, 'view active investment', 'web', '2021-10-17 13:02:43', '2021-10-17 13:02:43'),
(19, 'view active investment details', 'web', '2021-10-17 13:02:48', '2021-10-17 13:02:48'),
(20, 'view pending investment', 'web', '2021-10-17 13:03:51', '2021-10-17 13:03:51'),
(21, 'process pending investment', 'web', '2021-10-17 13:04:26', '2021-10-17 13:04:26'),
(22, 'view due investment', 'web', '2021-10-17 13:04:52', '2021-10-17 13:04:52'),
(23, 'process due investment', 'web', '2021-10-17 13:05:52', '2021-10-17 13:05:52'),
(24, 'view settled investment', 'web', '2021-10-17 13:06:21', '2021-10-17 13:06:21'),
(25, 'view manage role', 'web', '2021-10-17 13:08:10', '2021-10-17 13:08:10'),
(26, 'add role', 'web', '2021-10-17 13:08:21', '2021-10-17 13:08:21'),
(27, 'manage permission', 'web', '2021-10-17 13:08:37', '2021-10-17 13:08:37'),
(28, 'add permission', 'web', '2021-10-17 13:08:49', '2021-10-17 13:08:49'),
(29, 'view website setting', 'web', '2021-10-17 13:09:26', '2021-10-17 13:09:26'),
(30, 'edit website setting', 'web', '2021-10-17 13:09:41', '2021-10-17 13:09:41'),
(31, 'view contact message', 'web', '2021-10-17 13:11:17', '2021-10-17 13:11:17'),
(33, 'read contact message', 'web', '2021-10-17 13:36:13', '2021-10-17 13:36:13'),
(34, 'view investments', 'web', '2021-10-17 13:45:00', '2021-10-17 13:45:00'),
(35, 'view manage coin', 'web', '2021-10-17 13:54:23', '2021-10-17 13:54:23'),
(36, 'view staff', 'web', '2021-10-17 13:57:59', '2021-10-17 13:57:59'),
(37, 'view processed withdrawal', 'web', '2021-10-17 14:26:55', '2021-10-17 14:26:55'),
(38, 'edit role', 'web', '2021-10-17 15:18:54', '2021-10-17 15:18:54'),
(39, 'delete role', 'web', '2021-10-17 15:19:07', '2021-10-17 15:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `investor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `user_id`, `investor_id`, `created_at`, `updated_at`) VALUES
(2, 13, NULL, '2021-09-22 03:28:24', '2021-09-22 03:28:24'),
(3, 14, NULL, '2021-09-22 10:15:03', '2021-09-22 10:15:03'),
(4, 15, 14, '2021-09-22 10:16:44', '2021-09-22 10:16:44'),
(5, 16, 14, '2021-09-22 12:42:28', '2021-09-22 12:42:28'),
(6, 17, 3, '2021-09-26 12:15:15', '2021-09-26 12:15:15'),
(7, 18, NULL, '2021-10-11 07:51:00', '2021-10-11 07:51:00'),
(8, 20, 14, '2021-10-19 11:03:57', '2021-10-19 11:03:57'),
(9, 21, 14, '2021-10-19 11:28:20', '2021-10-19 11:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-09-27 06:55:55', '2021-09-27 06:55:55'),
(3, 'Super Admin', 'web', '2021-10-17 15:08:18', '2021-10-17 15:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 3),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(26, 3),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_id` bigint(20) DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('approved','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `investment_id`, `action`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, '14', 4, 'Purchase 20 wrap coin by transfer', '2000.00', 'pending', '2021-09-22 19:56:33', '2021-09-22 19:56:33'),
(2, '14', 5, 'Purchase 45345 wrap coin by credit card', '23232.00', 'pending', '2021-09-23 04:37:47', '2021-09-23 04:37:47'),
(3, '14', 6, 'Purchase 45345 wrap coin by credit card', '23232.00', 'pending', '2021-09-23 04:44:35', '2021-09-23 04:44:35'),
(4, '14', 7, 'Purchase 45345 wrap coin by credit card', '23232.00', 'pending', '2021-09-26 07:40:56', '2021-09-26 07:40:56'),
(5, '14', 8, 'Purchase 45345 wrap coin by credit card', '23232.00', 'pending', '2021-09-26 08:27:28', '2021-09-26 08:27:28'),
(6, '14', 9, 'Purchase 45345 wrap coin by credit card', '23232.00', 'pending', '2021-09-26 08:34:45', '2021-09-26 08:34:45'),
(7, '17', 10, 'Purchase 45345 wrap coin by transfer', '23232.00', 'pending', '2021-09-26 12:21:44', '2021-09-26 12:21:44'),
(8, '14', 11, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-01 23:52:25', '2021-10-01 23:52:25'),
(9, '14', 12, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-01 23:54:45', '2021-10-01 23:54:45'),
(10, '14', 13, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-02 00:09:09', '2021-10-02 00:09:09'),
(11, '14', 14, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-02 00:14:22', '2021-10-02 00:14:22'),
(12, '14', 1, 'Purchase 7 wrap coin by transfer', '2000.00', 'pending', '2021-10-02 00:39:05', '2021-10-02 00:39:05'),
(13, '14', 2, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-02 00:43:18', '2021-10-02 00:43:18'),
(14, '14', 3, 'Purchase  wrap coin by credit card', '23232.00', 'pending', '2021-10-02 04:30:09', '2021-10-02 04:30:09'),
(15, '14', 1, 'Purchase  wrap coin by credit card', '2000.00', 'pending', '2021-10-07 11:36:15', '2021-10-07 11:36:15'),
(16, '14', 1, 'Purchase  wrap coin by transfer card', '2000.00', 'pending', '2021-10-07 12:31:33', '2021-10-07 12:31:33'),
(17, '14', 1, 'Purchase  wrap coin by transfer card', '2000.00', 'pending', '2021-10-09 13:36:56', '2021-10-09 13:36:56'),
(18, '14', 2, 'Purchase  wrap coin by transfer card', '6565.00', 'pending', '2021-10-09 13:37:05', '2021-10-09 13:37:05'),
(19, '13', 4, 'Purchase  wrap coin by credit card', '2000.00', 'pending', '2021-10-14 11:41:17', '2021-10-14 11:41:17'),
(20, '13', 5, 'Purchase 1 wrap coin by transfer', '6565.00', 'pending', '2021-10-19 10:59:58', '2021-10-19 10:59:58'),
(21, '13', 5, 'Purchase  wrap coin by transfer card', '6565.00', 'pending', '2021-10-19 11:01:01', '2021-10-19 11:01:01'),
(22, '20', 6, 'Purchase 2 wrap coin by transfer', '6565.00', 'pending', '2021-10-19 11:08:29', '2021-10-19 11:08:29'),
(23, '20', 6, 'Purchase  wrap coin by transfer card', '6565.00', 'pending', '2021-10-19 11:09:12', '2021-10-19 11:09:12'),
(24, '20', 7, 'Purchase 2 wrap coin by transfer', '6565.00', 'pending', '2021-10-19 11:13:25', '2021-10-19 11:13:25'),
(25, '13', NULL, 'Received bonus from referral', '656.5', 'pending', '2021-10-19 11:24:13', '2021-10-19 11:24:13'),
(26, '20', 7, 'Purchase  wrap coin by transfer card', '6565.00', 'pending', '2021-10-19 11:24:13', '2021-10-19 11:24:13'),
(27, '20', 8, 'Purchase 2 wrap coin by transfer', '6565.00', 'pending', '2021-10-19 11:25:44', '2021-10-19 11:25:44'),
(28, '20', 8, 'Purchase  wrap coin by transfer card', '6565.00', 'pending', '2021-10-19 11:26:00', '2021-10-19 11:26:00'),
(29, '21', 9, 'Purchase 3 wrap coin by transfer', '6565.00', 'pending', '2021-10-19 11:31:09', '2021-10-19 11:31:09'),
(30, '13', NULL, 'Received bonus from referral', '984.75', 'pending', '2021-10-19 11:31:40', '2021-10-19 11:31:40'),
(31, '21', 9, 'Purchase  wrap coin by transfer card', '6565.00', 'pending', '2021-10-19 11:31:40', '2021-10-19 11:31:40'),
(32, '21', 10, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-19 12:43:07', '2021-10-19 12:43:07'),
(33, '21', 11, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-19 12:49:44', '2021-10-19 12:49:44'),
(34, '21', 12, 'Purchase  wrap coin by credit card', '6565.00', 'pending', '2021-10-19 13:19:09', '2021-10-19 13:19:09'),
(35, '21', 13, 'Purchase  wrap coin by credit card', '2000.00', 'pending', '2021-10-19 13:24:46', '2021-10-19 13:24:46'),
(36, '14', 14, 'Purchase 1 wrap coin by transfer', '6565.00', 'pending', '2021-10-26 20:03:57', '2021-10-26 20:03:57'),
(37, '14', 15, 'Purchase 1 wrap coin by transfer', '2000.00', 'pending', '2021-07-13 16:43:13', '2021-07-13 16:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','disabled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` bigint(20) DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `role`, `status`, `bank_id`, `account_name`, `account_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Liadi kafayat', 'kafayat@vb.com', '87827897394', '2021-10-14 09:55:57', '$2y$10$fMe8ArWinipfECWBWSphZOEJjnebNEqFg6jTIiSGhbSWk1v3Ew2fC', 'admin', 'active', 0, NULL, '', NULL, '2021-09-20 15:38:54', '2021-10-14 09:55:57'),
(13, 'Village Boy Adesina', 'inv@vb.com', '90432943909', '2021-10-14 10:32:10', '$2y$10$zEBgTsoInVhJU/8fP8niOuH.1enn9WuCIbui97IAX6Uj2hYym3fTu', 'user', 'active', 14, 'OLUOKUN KABIRU ADESINA', '4793060505', NULL, '2021-09-22 03:28:24', '2021-10-14 11:40:06'),
(14, 'Liadi Kafayat', 'inv1@vb.com', '5656464534', '2021-10-17 12:27:43', '$2y$10$SZF5a5.SshsoP1AZaXa61OqcfJHKdFXWyU3rR8C75GF9Jpwm15Z/K', 'user', 'active', 58, 'OLUOKUN KABIRU ADESINA', '2073581143', NULL, '2021-09-22 10:15:02', '2021-10-17 12:27:43'),
(15, 'Liadi kafayat', 'inv2@vb.com', '242342432', NULL, '$2y$10$jqBrAA1XqC5/sjnazMYuc.n3Z0g6W9i8Dp8xtDgBGPhZZM.Z3r05O', 'user', 'active', 0, NULL, '', NULL, '2021-09-22 10:16:43', '2021-09-22 10:16:43'),
(16, 'Assaulting marshal on duty', 'inv4@vb.com', '9043294', NULL, '$2y$10$kSD9vBCzw0J8R2GWdwXRKOuGA3yFGdcoWhdABFSUaw2VPtty4INc6', 'user', 'active', 0, NULL, '', NULL, '2021-09-22 12:42:28', '2021-09-22 12:42:28'),
(17, 'Oluokun kabiru', 'inv5@vb.com', 'admin@vb.com', NULL, '$2y$10$QLg4rIMHhZSvugFJMjQ0Zuwsez/a6KuA7ZvB8LGwyQwEyAfYAITam', 'user', 'active', 0, NULL, '', NULL, '2021-09-26 12:15:15', '2021-09-27 07:48:07'),
(18, 'Liadi kafayat', 'admin1@vb.com', 'inv1@vb.com', '2021-10-14 11:35:53', '$2y$10$29/lkle7JtHDMCBSyi1UcOsJdrrtNcE0ANzu23xDGqplZcKCNgeoC', 'user', 'active', NULL, NULL, NULL, NULL, '2021-10-11 07:51:00', '2021-10-14 11:35:53'),
(19, 'Oluokun kabiru adesina', 'okaas@vb.com', '93092842023', '2021-10-16 13:29:38', '$2y$10$M99oHTTF0J.lkeYS8pmYuOvR9ms2tVjhXRoZXWlnzPyYORjwdfKyO', 'admin', 'disabled', NULL, NULL, NULL, 'irVyj7t0gtcVxdqTjzVnhUnlj4VBTuZevbWnQvy1UNpFTvb3l5cK30TrgUcS', '2021-10-16 13:20:25', '2021-10-17 14:20:53'),
(20, 'Oluokun Kabiru', 'inv6@vb.com', '923749237427', '2021-10-19 11:04:29', '$2y$10$shG/h/bAHmGf26Vqlw/akO9Hx73ACXFO55nRpzFiLAmKkbs.thAiu', 'user', 'active', 58, 'OLUOKUN KABIRU ADESINA', '2073581143', NULL, '2021-10-19 11:03:57', '2021-10-19 11:07:55'),
(21, 'Oluokun Kabiru', 'inv7@vb.com', '9248973847', '2021-10-19 11:28:49', '$2y$10$1PTu4tjbxXHRjGgSM49bpe.e9XDBVtLGy32wY2S5KKdwgK4Gvxsmy', 'user', 'active', 58, 'OLUOKUN KABIRU ADESINA', '2073581143', NULL, '2021-10-19 11:28:20', '2021-10-19 11:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `investor_id` bigint(20) NOT NULL,
  `investment_id` bigint(20) DEFAULT NULL,
  `status` enum('pending','processing','success','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `type` enum('coin','referral') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'coin',
  `amount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `investor_id`, `investment_id`, `status`, `type`, `amount`, `created_at`, `updated_at`) VALUES
(1, 14, 3, 3, 'success', 'coin', '47160.96', '2021-10-05 21:29:51', '2021-10-09 15:59:08'),
(3, 14, 3, NULL, 'pending', 'referral', '2000.00', '2021-10-05 22:15:41', '2021-10-05 22:15:41'),
(4, 21, 9, 9, 'success', 'coin', '19271.56', '2021-10-19 11:33:21', '2021-10-19 11:38:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
