-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2015 at 10:19 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hill`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(5) NOT NULL,
  `countryName` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryName`) VALUES
(1, 'Andorra'),
(2, 'United Arab Emirates'),
(3, 'Afghanistan'),
(4, 'Antigua and Barbuda'),
(5, 'Anguilla'),
(6, 'Albania'),
(7, 'Armenia'),
(8, 'Angola'),
(9, 'Antarctica'),
(10, 'Argentina'),
(11, 'American Samoa'),
(12, 'Austria'),
(13, 'Australia'),
(14, 'Aruba'),
(15, 'Åland'),
(16, 'Azerbaijan'),
(17, 'Bosnia and Herzegovina'),
(18, 'Barbados'),
(19, 'Bangladesh'),
(20, 'Belgium'),
(21, 'Burkina Faso'),
(22, 'Bulgaria'),
(23, 'Bahrain'),
(24, 'Burundi'),
(25, 'Benin'),
(26, 'Saint Barthélemy'),
(27, 'Bermuda'),
(28, 'Brunei'),
(29, 'Bolivia'),
(30, 'Bonaire'),
(31, 'Brazil'),
(32, 'Bahamas'),
(33, 'Bhutan'),
(34, 'Bouvet Island'),
(35, 'Botswana'),
(36, 'Belarus'),
(37, 'Belize'),
(38, 'Canada'),
(39, 'Cocos [Keeling] Islands'),
(40, 'Democratic Republic of the Congo'),
(41, 'Central African Republic'),
(42, 'Republic of the Congo'),
(43, 'Switzerland'),
(44, 'Ivory Coast'),
(45, 'Cook Islands'),
(46, 'Chile'),
(47, 'Cameroon'),
(48, 'China'),
(49, 'Colombia'),
(50, 'Costa Rica'),
(51, 'Cuba'),
(52, 'Cape Verde'),
(53, 'Curacao'),
(54, 'Christmas Island'),
(55, 'Cyprus'),
(56, 'Czech Republic'),
(57, 'Germany'),
(58, 'Djibouti'),
(59, 'Denmark'),
(60, 'Dominica'),
(61, 'Dominican Republic'),
(62, 'Algeria'),
(63, 'Ecuador'),
(64, 'Estonia'),
(65, 'Egypt'),
(66, 'Western Sahara'),
(67, 'Eritrea'),
(68, 'Spain'),
(69, 'Ethiopia'),
(70, 'Finland'),
(71, 'Fiji'),
(72, 'Falkland Islands'),
(73, 'Micronesia'),
(74, 'Faroe Islands'),
(75, 'France'),
(76, 'Gabon'),
(77, 'United Kingdom'),
(78, 'Grenada'),
(79, 'Georgia'),
(80, 'French Guiana'),
(81, 'Guernsey'),
(82, 'Ghana'),
(83, 'Gibraltar'),
(84, 'Greenland'),
(85, 'Gambia'),
(86, 'Guinea'),
(87, 'Guadeloupe'),
(88, 'Equatorial Guinea'),
(89, 'Greece'),
(90, 'South Georgia and the South Sandwich Islands'),
(91, 'Guatemala'),
(92, 'Guam'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Hong Kong'),
(96, 'Heard Island and McDonald Islands'),
(97, 'Honduras'),
(98, 'Croatia'),
(99, 'Haiti'),
(100, 'Hungary'),
(101, 'Indonesia'),
(102, 'Ireland'),
(103, 'Israel'),
(104, 'Isle of Man'),
(105, 'India'),
(106, 'British Indian Ocean Territory'),
(107, 'Iraq'),
(108, 'Iran'),
(109, 'Iceland'),
(110, 'Italy'),
(111, 'Jersey'),
(112, 'Jamaica'),
(113, 'Jordan'),
(114, 'Japan'),
(115, 'Kenya'),
(116, 'Kyrgyzstan'),
(117, 'Cambodia'),
(118, 'Kiribati'),
(119, 'Comoros'),
(120, 'Saint Kitts and Nevis'),
(121, 'North Korea'),
(122, 'South Korea'),
(123, 'Kuwait'),
(124, 'Cayman Islands'),
(125, 'Kazakhstan'),
(126, 'Laos'),
(127, 'Lebanon'),
(128, 'Saint Lucia'),
(129, 'Liechtenstein'),
(130, 'Sri Lanka'),
(131, 'Liberia'),
(132, 'Lesotho'),
(133, 'Lithuania'),
(134, 'Luxembourg'),
(135, 'Latvia'),
(136, 'Libya'),
(137, 'Morocco'),
(138, 'Monaco'),
(139, 'Moldova'),
(140, 'Montenegro'),
(141, 'Saint Martin'),
(142, 'Madagascar'),
(143, 'Marshall Islands'),
(144, 'Macedonia'),
(145, 'Mali'),
(146, 'Myanmar [Burma]'),
(147, 'Mongolia'),
(148, 'Macao'),
(149, 'Northern Mariana Islands'),
(150, 'Martinique'),
(151, 'Mauritania'),
(152, 'Montserrat'),
(153, 'Malta'),
(154, 'Mauritius'),
(155, 'Maldives'),
(156, 'Malawi'),
(157, 'Mexico'),
(158, 'Malaysia'),
(159, 'Mozambique'),
(160, 'Namibia'),
(161, 'New Caledonia'),
(162, 'Niger'),
(163, 'Norfolk Island'),
(164, 'Nigeria'),
(165, 'Nicaragua'),
(166, 'Netherlands'),
(167, 'Norway'),
(168, 'Nepal'),
(169, 'Nauru'),
(170, 'Niue'),
(171, 'New Zealand'),
(172, 'Oman'),
(173, 'Panama'),
(174, 'Peru'),
(175, 'French Polynesia'),
(176, 'Papua New Guinea'),
(177, 'Philippines'),
(178, 'Pakistan'),
(179, 'Poland'),
(180, 'Saint Pierre and Miquelon'),
(181, 'Pitcairn Islands'),
(182, 'Puerto Rico'),
(183, 'Palestine'),
(184, 'Portugal'),
(185, 'Palau'),
(186, 'Paraguay'),
(187, 'Qatar'),
(188, 'Réunion'),
(189, 'Romania'),
(190, 'Serbia'),
(191, 'Russia'),
(192, 'Rwanda'),
(193, 'Saudi Arabia'),
(194, 'Solomon Islands'),
(195, 'Seychelles'),
(196, 'Sudan'),
(197, 'Sweden'),
(198, 'Singapore'),
(199, 'Saint Helena'),
(200, 'Slovenia'),
(201, 'Svalbard and Jan Mayen'),
(202, 'Slovakia'),
(203, 'Sierra Leone'),
(204, 'San Marino'),
(205, 'Senegal'),
(206, 'Somalia'),
(207, 'Suriname'),
(208, 'South Sudan'),
(209, 'São Tomé and Príncipe'),
(210, 'El Salvador'),
(211, 'Sint Maarten'),
(212, 'Syria'),
(213, 'Swaziland'),
(214, 'Turks and Caicos Islands'),
(215, 'Chad'),
(216, 'French Southern Territories'),
(217, 'Togo'),
(218, 'Thailand'),
(219, 'Tajikistan'),
(220, 'Tokelau'),
(221, 'East Timor'),
(222, 'Turkmenistan'),
(223, 'Tunisia'),
(224, 'Tonga'),
(225, 'Turkey'),
(226, 'Trinidad and Tobago'),
(227, 'Tuvalu'),
(228, 'Taiwan'),
(229, 'Tanzania'),
(230, 'Ukraine'),
(231, 'Uganda'),
(232, 'U.S. Minor Outlying Islands'),
(233, 'United States'),
(234, 'Uruguay'),
(235, 'Uzbekistan'),
(236, 'Vatican City'),
(237, 'Saint Vincent and the Grenadines'),
(238, 'Venezuela'),
(239, 'British Virgin Islands'),
(240, 'U.S. Virgin Islands'),
(241, 'Vietnam'),
(242, 'Vanuatu'),
(243, 'Wallis and Futuna'),
(244, 'Samoa'),
(245, 'Kosovo'),
(246, 'Yemen'),
(247, 'Mayotte'),
(248, 'South Africa'),
(249, 'Zambia'),
(250, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `e_answer`
--

CREATE TABLE IF NOT EXISTS `e_answer` (
`no` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `eq_id` int(11) NOT NULL,
  `ea_value` text NOT NULL,
  `ea_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `e_answer`
--

INSERT INTO `e_answer` (`no`, `guest_id`, `eq_id`, `ea_value`, `ea_date`) VALUES
(1, 1, 1, 'Sometimes the server encountered an internal error, please come back after a few minutes. Sorry for this inconvenience.', '2015-07-06'),
(2, 1, 2, 'Don''t write new code that uses the mysql_* functions. They are deprecated and will eventually be removed from PHP. Use MySQLi or PDO instead (I personally recommend PDO, YMMV)', '2015-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `e_question`
--

CREATE TABLE IF NOT EXISTS `e_question` (
`eq_id` int(11) NOT NULL,
  `eq_value` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `e_question`
--

INSERT INTO `e_question` (`eq_id`, `eq_value`) VALUES
(1, 'Was there an employee of The Hill Hotel & Resort Sibolangit who made your stay more pleasurable?'),
(2, 'Please write your review about the The Hill Hotel & Resort Sibolangit and our service');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
`guest_id` int(11) NOT NULL,
  `guest_name` varchar(50) NOT NULL,
  `guest_stay` int(11) NOT NULL,
  `guest_email` varchar(50) NOT NULL,
  `guest_phone` varchar(20) NOT NULL,
  `guest_nationality` varchar(50) NOT NULL,
  `guest_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `guest_name`, `guest_stay`, `guest_email`, `guest_phone`, `guest_nationality`, `guest_date`) VALUES
(1, 'Marvin', 1, 'vnz_inside@vadine.net', '', 'Indonesia', '2015-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `m_answer`
--

CREATE TABLE IF NOT EXISTS `m_answer` (
`no` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `mq_id` varchar(11) NOT NULL,
  `ma_value` varchar(50) NOT NULL,
  `ma_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `m_answer`
--

INSERT INTO `m_answer` (`no`, `guest_id`, `mq_id`, `ma_value`, `ma_date`) VALUES
(1, 1, '1', 'Yes', '2015-07-06'),
(2, 1, '2', 'i_travel_agent', '2015-07-06'),
(3, 1, '3', 'Excellence', '2015-07-06'),
(4, 1, '4a', 'Excellence', '2015-07-06'),
(5, 1, '4b', 'Excellence', '2015-07-06'),
(6, 1, '4c', 'Excellence', '2015-07-06'),
(7, 1, '4d', 'Excellence', '2015-07-06'),
(8, 1, '4e', 'Excellence', '2015-07-06'),
(9, 1, '4f', 'Excellence', '2015-07-06'),
(10, 1, '4g', 'Excellence', '2015-07-06'),
(11, 1, '5a', 'Excellence', '2015-07-06'),
(12, 1, '5b', 'Excellence', '2015-07-06'),
(13, 1, '6', 'Excellence', '2015-07-06'),
(14, 1, '7a', 'Yes', '2015-07-06'),
(15, 1, '7b', 'Yes', '2015-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `m_question`
--

CREATE TABLE IF NOT EXISTS `m_question` (
  `mq_id` varchar(11) NOT NULL,
  `mq_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_question`
--

INSERT INTO `m_question` (`mq_id`, `mq_value`) VALUES
('1', 'Was this your first time to book through The Hill Hotel & Resort'),
('2', 'How did you learn of The Hill Hotel & Resort'),
('3', 'How was your reservation handled?'),
('4a', 'Cleanliness and Hygienes'),
('4b', 'Houskeeping service'),
('4c', 'Friendliness of staff'),
('4d', 'Competence of staff'),
('4e', 'Quality of service provided'),
('4f', 'Hotel Ambiance'),
('4g', 'Hotel location'),
('5a', 'How do you rate your overal stay?'),
('5b', 'How do you rate The Hill Hotel service?'),
('6', 'How do you rate the relationship between price/cuality'),
('7a', 'Would you consider service in the future'),
('7b', 'Would you recommend us to someone else?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_answer`
--
ALTER TABLE `e_answer`
 ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `e_question`
--
ALTER TABLE `e_question`
 ADD PRIMARY KEY (`eq_id`), ADD UNIQUE KEY `eq_id` (`eq_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
 ADD PRIMARY KEY (`guest_id`), ADD UNIQUE KEY `guest_id` (`guest_id`);

--
-- Indexes for table `m_answer`
--
ALTER TABLE `m_answer`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `m_question`
--
ALTER TABLE `m_question`
 ADD PRIMARY KEY (`mq_id`), ADD UNIQUE KEY `mq_id` (`mq_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `e_answer`
--
ALTER TABLE `e_answer`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `e_question`
--
ALTER TABLE `e_question`
MODIFY `eq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `m_answer`
--
ALTER TABLE `m_answer`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
