-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2021 at 04:19 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
(16, 'PIXEL 6 МОЖНО БУДЕТ КУПИТЬ ЗА 649 ЕВРО?', 'Что ж, новый iPhone уже вышли в продажу и оставшийся анонс смартфонов от Google всё больше интригует. По слухам он состоится 19 октября — именно на эту дату указывают многие блогеры и инсайдеры. При этом старт продаж ожидается 28 октября..\r\n\r\nНа дня автор канала This Is Tech Today со ссылкой на источники в европейской рознице сообщил вероятную стоимость смартфонов от Google.\r\n\r\nИтак, европейская цена на Google Pixel 6 составит 649 евро или примерно 55 тысяч рублей, а за Pixel 6 Pro попросят куда больше — 899 евро или почти 77 тысяч рублей.\r\n\r\nДаже интересно, за сколько смартфоны можно будет приобрести в нашей стране. Напомним, что официально приобрести главные Android’ы в нашей стране невозможно.'),
(17, 'КРИСС ПРАТТ СТАНЕТ ГОЛОСОМ SUPER MARIO В МУЛЬТФИЛЬМЕ', 'Компании Nintendo, Illumination и Universal готовят анимационный фильм по вселенной Super Mario Bros.При этом они рассчитывают на звездный состав актеров. В частности главную роль — сантехника Марио Марио в знаменитой красной кепке озвучит Крисс Пратт, известный по роли Звездного Лорда в «Стражах Галактики» и не только.\r\n\r\nК Криссу Пратту присоединяться Аня Тейлор-Джой, которая озвучит принцессу Пич, Чарли Дэй в роли Луиджи, Джек Блэк в роли Боузера, Киган-Майкл Ки в роли Жабы и Сет Роген в роли Донки Конга.\r\n\r\nПродюсерами фильма выступят основатель Illumination Крис Меледандри и Сигэру Миямото из Nintendo. Режиссерами фильма станут дуэт Аарона Хорвата и Майкла Еленича, а автором сценария — Мэттью Фогель.\r\n\r\nВ недавнем заявлении Меледандри сказал: «Марио и Луиджи — два самых любимых героя во всей популярной культуре, и для нас большая честь иметь возможность работать в тесном сотрудничестве с Сигэру Миямото и командой Nintendo, обладающей богатым воображением, чтобы оживить этих персонажей в анимационном фильме, не похожем ни на один фильм, созданный Illumination на сегодняшний день».\r\n\r\nДва главных героя, Марио и Луиджи, появились в боевике 1993 года «Супер Марио Бразерс» с Бобом Хоскинсом и Джоном Легуизамо в главных ролях. С момента выхода фильма Nintendo бережно относилась к своим героям и редко позволяла делать какие-либо адаптации.'),
(18, 'IPAD MINI 2021: ПЕРВЫЙ ВЗГЛЯД НА БОЛЬШОЕ ОБНОВЛЕНИЕ МАЛЕНЬКОГО ПЛАНШЕТА', 'Сегодня у нас на тесте, а правильнее это будет назвать первым взглядом — iPad mini 2021. Давайте разбираться, что за девайс Apple нам представил, прогоним тесты, прикинем плюсы и минусы, а заодно сравним производительность с моим iPad Pro. Тут же новый A15 Bionic, а там M1: интересно кто кого…\r\nЧто изменилось? Ну, если сравнивать с прошлым поколением, то по сути всё. Да и в целом в линейке Apple остался всего один iPad c круглой кнопкой Home на передней панели. Это простой iPad или iPad 9-го поколения: он тоже обновился и он самый доступный. Наверное, его уже можно переименовать в iPad SE но мы не о нем.\r\n\r\nНовый iPad mini больше всего похож на последний Air. Тут угловатый дизайн, экран на всю переднюю панель с закруглениями. Понятно, что рамки есть, но тут они нужны, чтобы держать было удобно.'),
(19, 'Заголовок', 'Контент');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(60, 'admin', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec'),
(65, 'demo', 'demo', '26c669cd0814ac40e5328752b21c4aa6450d16295e4eec30356a06a911c23983aaebe12d5da38eeebfc1b213be650498df8419194d5a26c7e0a50af156853c79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
