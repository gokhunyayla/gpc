-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 07:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `_business_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `_contact`
--

CREATE TABLE `_contact` (
  `_id` int(11) NOT NULL,
  `_status` varchar(255) DEFAULT NULL,
  `_status_date` datetime DEFAULT NULL,
  `_admin` varchar(255) DEFAULT NULL,
  `_language` varchar(255) DEFAULT NULL,
  `_content` text DEFAULT NULL,
  `_insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `_update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_contact`
--

INSERT INTO `_contact` (`_id`, `_status`, `_status_date`, `_admin`, `_language`, `_content`, `_insert_date`, `_update_date`) VALUES
(10, 'not-seen', '2019-12-08 11:27:10', NULL, 'tr', '{\"name\":\"s\"}', '2019-12-08 13:27:10', NULL),
(11, 'not-seen', '2019-12-08 11:47:58', NULL, 'tr', '{\"subject\":\"İletişim Formu\",\"name\":\"a\",\"phone\":\"a\",\"message\":\"a\"}', '2019-12-08 13:47:58', NULL),
(12, 'not-seen', '2019-12-08 11:53:06', NULL, 'tr', '{\"subject\":\"İletişim Formu\",\"name\":\"a\",\"phone\":\"a\",\"message\":\"a\"}', '2019-12-08 13:53:06', NULL),
(13, 'not-seen', '2019-12-08 11:54:54', NULL, 'tr', '{\"subject\":\"İletişim Formu\",\"redirect\":\"portfolyo\",\"name\":\"e\",\"phone\":\"e\",\"message\":\"e\"}', '2019-12-08 13:54:54', NULL),
(14, 'not-seen', '2019-12-08 11:55:30', NULL, 'tr', '{\"subject\":\"İletişim Formu\",\"name\":\"a\",\"phone\":\"a\",\"email\":\"a\",\"message\":\"a\"}', '2019-12-08 13:55:30', NULL),
(15, 'not-seen', '2019-12-08 11:56:09', NULL, 'tr', '{\"subject\":\"İletişim Formu\",\"redirect\":\"iletişim\",\"name\":\"a\",\"phone\":\"a\",\"email\":\"alperyaylafounder@gmail.com\",\"message\":\"a\"}', '2019-12-08 13:56:09', NULL),
(16, 'not-seen', '2019-12-08 11:56:21', NULL, 'tr', '{\"subject\":\"İletişim Formu\",\"redirect\":\"iletişim\",\"name\":\"e\",\"phone\":\"e\",\"email\":\"e\",\"message\":\"e\"}', '2019-12-08 13:56:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_link`
--

CREATE TABLE `_link` (
  `_id` int(11) NOT NULL,
  `_variable` varchar(255) DEFAULT NULL,
  `_required` varchar(255) NOT NULL DEFAULT 'not-required',
  `_status` varchar(255) DEFAULT 'not-live',
  `_status_date` datetime DEFAULT NULL,
  `_owner` varchar(255) DEFAULT NULL,
  `_category` int(11) NOT NULL DEFAULT -1,
  `_insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `_update_date` datetime DEFAULT NULL,
  `_link_tr` varchar(255) DEFAULT NULL,
  `_content_tr` longtext DEFAULT NULL,
  `_comment_tr` text DEFAULT NULL,
  `_count_tr` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_link`
--

INSERT INTO `_link` (`_id`, `_variable`, `_required`, `_status`, `_status_date`, `_owner`, `_category`, `_insert_date`, `_update_date`, `_link_tr`, `_content_tr`, `_comment_tr`, `_count_tr`) VALUES
(1, 'home', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, './', '{\"link-mask\":\"Anasayfa\",\"structure\":[\"home\"],\"head\":{\"title\":\"Anasayfamıza Hoşgeldiniz\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(2, '404', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'sayfa-bulunamadı', '{\"link-mask\":\"404\",\"structure\":[\"404\"],\"head\":{\"title\":\"404 - Sayfa Bulunamadı\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(3, 'search-add-check', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'ara', '{\"link-mask\":\"Arama Sayfası\",\"head\":{\"title\":\"Arama Sayfası\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\"./\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"}}}', NULL, 0),
(5, 'contact-add', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'iletişim', '{\"link-mask\":\"İletişim\",\"head\":{\"title\":\"İletişim\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\"./\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"}},\"structure\":[\"contact-add\"]}', NULL, 0),
(6, 'corporate-list', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'kurumsal', '{\"link-mask\":\"Kurumsal\",\"head\":{\"title\":\"Kurumsal\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\"./\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[\"kurumsal.png\"]}}', NULL, 0),
(7, 'corporate-look', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', 6, '2019-10-25 00:38:21', NULL, 'kurumsal/biz-kimiz', '{\"link-mask\":\"Biz Kimiz?\",\"structure\":[\"who-are-we\"],\"head\":{\"title\":\"Biz Kimiz?\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(8, 'testimonials-list', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'kurumsal/müşteri-yorumları', '{\"link-mask\":\"Müşteri Yorumları\",\"structure\":[\"testimonial-list\"],\"head\":{\"title\":\"Müşteri Yorumları\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(9, 'portfolio-list', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'portfolyo', '{\"link-mask\":\"Portfolyo Listesi\",\"structure\":[\"portfolio-list\"],\"head\":{\"title\":\"Portfolyo Listesi\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(10, 'blog-list', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'blog', '{\"link-mask\":\"Blog\",\"structure\":[\"blog-list\"],\"head\":{\"title\":\"Blog\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(11, 'contact-add-check', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', -1, '2019-10-25 00:38:21', NULL, 'iletişim-kontrolü', '{\"link-mask\":\"Dönüşüm Kayıt Sayfası\",\"structure\":[\"contact-add-check\"],\"head\":{\"title\":\"Dönüşüm Kayıt Sayfası\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\"iletişim-kontrolü\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(12, 'blog-look', 'not-required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', 10, '2019-10-25 00:38:21', NULL, 'blog/nasıl-yapılıyor', '{\"link-mask\":\"Nasıl Yapılıyor?\",\"structure\":[\"blog-look\"],\"head\":{\"title\":\"Nasıl Yapılıyor?\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', '[{\"status\":\"read\",\"name\":\"Abdurrezzak\",\"comment\":\"Site yaptınız mı?\",\"insert-date\":\"2019-12-08 11:36:32\",\"answer\":[{\"0\":\"not-seen\",\"name\":\"Sinan\",\"comment\":\"Cevabı ben yazdım\",\"insert-date\":\"2019-12-08 11:36:32\"}]},{\"status\":\"approved\",\"name\":\"f\",\"comment\":\"f\"},{\"name\":\"r\",\"comment\":\"r\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:47:39\"},{\"name\":\"t\",\"comment\":\"t\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:49:48\"},{\"name\":\"e\",\"comment\":\"e\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:50:43\"},{\"name\":\"r\",\"comment\":\"r\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:51:00\"},{\"name\":\"w\",\"comment\":\"w\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:51:09\"},{\"name\":\"e\",\"comment\":\"e\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:51:23\"},{\"name\":\"e\",\"comment\":\"e\",\"status\":\"not-seen\",\"insert-date\":\"2019-12-08 11:51:33\"}]', 0),
(13, 'portfolio-look', 'not-required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', 9, '2019-10-25 00:38:21', NULL, 'portfolyo/çalışma-1', '{\"link-mask\":\"Portfolyo İçeriği\",\"structure\":[\"portfolio-look\"],\"head\":{\"title\":\"Portfolyo İçeriği\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\".\\/\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0),
(21, 'comment-add-check', 'required', 'live', '2019-10-25 00:00:00', 'Gökhun YAYLA', 9, '2019-10-25 00:38:21', NULL, 'yorum-ekleme', '{\"link-mask\":\"Yorum Kayıt Sayfası\",\"structure\":[\"comment-add-check\"],\"head\":{\"title\":\"Yorum Kayıt Sayfası\",\"meta-description\":\"Bu sayfanın açıklamasıdır. - en fazla 160 karakter olmalıdır.\",\"meta-keywords\":\"web, tasarım, kodlama, yazılım, gokhun, gökhun\",\"meta-author\":\"Gökhun Yayla\",\"link-canonical\":\"Yorum Kayıt Sayfası\"},\"body\":{\"text\":{\"title\":\"Sayfanın İçine Girildikten Sonra Görünen Başlığı\",\"summary\":\"Sayfa Özet Metnidir en fazla 200 karakter olmalıdır.\",\"detail\":\"Sayfanın detaylı açıklamasıdır. İsterseniz HTML kod gömebilirsiniz.\"},\"image\":[],\"video\":[]}}', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_option`
--

CREATE TABLE `_option` (
  `_id` int(11) NOT NULL,
  `_variable` varchar(255) DEFAULT NULL,
  `_tr` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_option`
--

INSERT INTO `_option` (`_id`, `_variable`, `_tr`) VALUES
(1, 'language', '[{\"name\":\"Türkçe\",\"code\":\"tr\"}]'),
(2, 'template', '{\"name\":\"Gökhun\",\"folder\":\"gokhun\"}'),
(3, 'path', '{\"assets\":\"template/{{template}}/assets\",\"module\":\"template/{{template}}/module\",\"media\":\"media/{{language}}\"}'),
(4, 'word', '{\"send\":\"Gönder\",\"copyright\":\"Telif Hakkı\",\"contact\":\"İletişim\",\"address\":\"Adres\",\"phone\":\"Telefon\",\"email\":\"E-Posta\",\"latest-blog\":\"Son Bloglar\",\"site-linkage\":\"Site Bağlantıları\",\"hour\":\"Saat\",\"published-at\":\"\'de yayınlandı.\",\"by\":\"Yayınlayan: \",\"read-more\":\"Devamı...\",\"searching-area\":\"Arama Alanı\",\"up-categories\":\"Benzer Kategoridekiler\",\"sub-categories\":\"Alt Kategoriler\",\"search\":\"Ara\",\"there-is-no-content-yet\":\"Henüz hiç bir içerik yüklenmemiş. Lütfen daha sonra tekrar deneyin.\",\"write-a-comment\":\"Sen de bir yorum yaz...\",\"write-your-name\":\"Adınızı giriniz\",\"write-your-comment\":\"Yorumunuzu giriniz\",\"homepage\":\"Anasayfa\",\"testimonials\":\"Müşteri Yorumları\",\"portfolio\":\"Portfolyo\",\"our-corporate\":\"Şirketimiz\",\"who-are-we\":\"Biz Kimiz?\",\"download-here\":\"Buradan indirebilirsiniz\",\"download\":\"İndir\",\"contact-area\":\"İletişim Alanı\",\"contact-form\":\"İletişim Formu\",\"write-your-phone\":\"Telefon numaranızı giriniz\",\"write-your-email\":\"E-Posta adresinizi giriniz\",\"write-your-message\":\"Mesajınızı giriniz\",\"name\":\"Adınız & Soyadınız\",\"message\":\"Mesajınız\",\"your-form-cannot-be-submited\":\"Formunuz gönderilirken bir hata oluştu!. Lütfen tekrar deneyin.\",\"no-data-is-sent\":\"Hiçbir veri gönderilmemiş! Lütfen tekrar deneyin.\",\"your-data-has-been-saved\":\"Gönderiniz başarılı bir şekilde kaydedildi! Teşekkür ederiz.\",\"please-fill-the-requireds\":\"Lütfen zorunlu alanları doldurunuz...\",\"form-cannot-be-saved\":\"Gönderiniz malesef kaydedilemedi! Lütfen tekrar deneyiniz.\",\"close\":\"Kapat\",\"please-write-to-search\":\"Aramak için birşeyler yazın...\",\"searched-keyword\":\"Aranan Kelime\",\"nothing-found\":\"Aradığınız kritere uygun içerik bulunamamıştır.\"}'),
(5, 'corporate', '{\"name\":\"Gokhun\",\"slogan\":\"En iyi şirket...\",\"email\":\"bilgi@sirketim.com\",\"map\":\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10477.152347602512!2d28.836365257664937!3d41.05212262411474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa5435bc53d6f%3A0xb440db71b79c2dd5!2sMedipol%20Mega%20%C3%9Cniversite%20Hastanesi!5e0!3m2!1str!2str!4v1575395373887!5m2!1str!2str\",\"phone\":\"+902122122222\",\"address\":\"Yıldıztabya Mah. Gülsevenler Sok. No:1\",\"summary\":\"Şirket açıklaması özet metni\",\"detail\":\"Şirket açıklaması detaylı metin\",\"copyright\":\"Tüm Hakları Saklıdır © 2019\",\"app-store\":\"#\",\"google-play\":\"#\"}'),
(6, 'social-media', '[{\"name\":\"Facebook\",\"link\":\"https://facebook.com/blablabla\",\"class\":\"fa fa-facebook\"},{\"name\":\"Youtube\",\"link\":\"https://youtube.com/blablabla\",\"class\":\"fa fa-youtube\"},{\"name\":\"LinkedIn\",\"link\":\"https://linkedin.com/in/blablabla\",\"class\":\"fa fa-linkedin\"}]'),
(7, 'verification', '{\"google\":\"XYZ3T\",\"yandex\":\"XYZ3T----\"}'),
(8, 'measurement', '{\"google\":\"abc\",\"yandex\":\"def\"}'),
(9, 'top-navigation', '[{\"category\":\"-1\",\"link-mask\":\"\",\"link\":\"./\",\"class\":\"fa fa-home\"},{\"category\":\"-1\",\"link-mask\":\"Kurumsal\",\"link\":\"kurumsal\",\"class\":\"\"},{\"category\":\"1\",\"link-mask\":\"Biz Kimiz?\",\"link\":\"kurumsal/biz-kimiz\",\"class\":\"\"},{\"category\":\"1\",\"link-mask\":\"Müşteri Yorumları\",\"link\":\"kurumsal/müşteri-yorumları\",\"class\":\"\"},{\"category\":\"-1\",\"link-mask\":\"Portfolyo\",\"link\":\"portfolyo\",\"class\":\"\"},{\"category\":\"-1\",\"link-mask\":\"Blog\",\"link\":\"blog\",\"class\":\"\"},{\"category\":\"-1\",\"link-mask\":\"İletişim\",\"link\":\"iletişim\",\"class\":\"\"}]'),
(10, 'bottom-navigation', '[{\"category\":\"-1\",\"link-mask\":\"Gizlilik ve Güvenlik\",\"link\":\"gizlilik-ve-güvenlik\",\"class\":\"\"},{\"category\":\"-1\",\"link-mask\":\"Kişisel Verilerin Korunması Kanunu\",\"link\":\"kişisel-verilerin-korunması-kanunu\",\"class\":\"\"}]'),
(11, 'testimonails', '[]'),
(12, 'brand-image', '{\"corporate-image\":\"corporate-image.png\",\"logo-dark\":\"logo-dark.gif\",\"logo-light\":\"logo-light.png\",\"favicon\":\"favicon.png\"}'),
(13, 'slider', '[{\"new-tag\":\"Yeni\",\"new-content\":\"Ürünümüzü gördünüz mü?\",\"title\":\"Yeni sitemiz artık daha hoş ve basit bir görünüme sahip.\",\"summary\":\"Hafif ve çok yer kaplamayan dosyalar ile Googlea çalışma kalitenizi göstereceksiniz.\",\"button-tag\":\"Devamı...\",\"button-link\":\"#\",\"image\":\"Yeni-sitemiz-artik-daha-hos-ve-basit-bir-gorunume-sahip-.gif\"}]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_contact`
--
ALTER TABLE `_contact`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_link`
--
ALTER TABLE `_link`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `_option`
--
ALTER TABLE `_option`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_contact`
--
ALTER TABLE `_contact`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `_link`
--
ALTER TABLE `_link`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `_option`
--
ALTER TABLE `_option`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
