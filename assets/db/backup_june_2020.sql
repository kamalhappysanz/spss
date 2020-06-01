-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 06:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spc_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `autonomous_exam`
--

CREATE TABLE `autonomous_exam` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  `file_position` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autonomous_exam`
--

INSERT INTO `autonomous_exam` (`id`, `title`, `file_upload`, `file_position`, `status`, `updated_by`, `updated_at`) VALUES
(1, 'You Tube Channel 123333', '1573214602.jpg', 2, 'Active', 1, '2019-11-08 17:33:32'),
(2, 'CanvasJS HTML5 JavaScript Charts', '1573214713.jpg', 3, 'Inactive', 1, '2019-11-08 17:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_img` varchar(50) NOT NULL,
  `file_position` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_img`, `file_position`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(3, 'Slider1', '1572866417.jpg', 0, 'Active', '2019-11-04 16:49:50', 1, '2019-11-04 16:50:16', 1),
(4, 'Second', '1576839187.jpg', 0, 'Active', '2019-12-20 16:23:06', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dept_faculty`
--

CREATE TABLE `dept_faculty` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `desgination` varchar(50) NOT NULL,
  `faculty_position` int(11) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `profile_file` varchar(50) NOT NULL,
  `file_upload` varchar(50) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `faculty_email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_faculty`
--

INSERT INTO `dept_faculty` (`id`, `dept_id`, `faculty_name`, `desgination`, `faculty_position`, `degree`, `profile_file`, `file_upload`, `experience`, `faculty_email`, `status`, `updated_at`, `updated_by`) VALUES
(1, 3, 'Kamal Raj', '1212', 2, '11', '1574854353.docx', '1574854353.jpg', '1111', 'kamal@kamal.com', 'Active', '2019-11-27 17:02:32', 1),
(2, 2, 'Kamal Raj  12121', 'Principal', 2, 'wwww', '1578046020.jpg', '1578045782.jpg', 'asd', 'kamal@kamal.com', 'Active', '2020-01-03 15:37:00', 1),
(3, 2, 'kamal', 'HOD', 1, 'Lecture', '', '', '', '', 'Active', '0000-00-00 00:00:00', 0),
(4, 4, 'bala', 'HOD', 2, 'M.E', '1578391717.jpg', '1578391717.jpg', '8', 'Bala@gmail.com', 'Active', '2020-01-07 15:38:36', 1),
(5, 4, 'Raj', 'Principal', 1, 'ME', '1578391799.jpg', '1578391799.jpg', '7', 'kamal@kamal.com', 'Active', '2020-01-07 15:39:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dept_lab_facility`
--

CREATE TABLE `dept_lab_facility` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(100) NOT NULL,
  `lab_position` int(11) NOT NULL,
  `description` text NOT NULL,
  `lab_image` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_lab_facility`
--

INSERT INTO `dept_lab_facility` (`id`, `lab_name`, `lab_position`, `description`, `lab_image`, `status`, `updated_at`, `updated_by`, `dept_id`) VALUES
(1, 'mech lab', 1, '<p>description</p>', '1573820188.jpg', 'Active', '2019-11-15 17:46:28', 1, 2),
(2, 'Mech 2 aaaa', 2, '<p>aaaaaaaaaaaaaaa vvvvvvvvvvvvvvvvvvvv</p>', '1574007824.jpg', 'Active', '2019-11-17 21:56:28', 1, 3),
(3, 'DDDd', 2, '<p>dsfsdfd</p>', '1574057854.jpg', 'Active', '2019-11-18 11:47:33', 1, 4),
(4, 'dddd3333', 1, '<p>sfsdfsdf</p>', '1574057865.jpg', 'Active', '2019-11-18 11:47:44', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dept_syllabus_activity`
--

CREATE TABLE `dept_syllabus_activity` (
  `id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `syllabus_association` varchar(15) NOT NULL,
  `ac_sy_name` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_position` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_syllabus_activity`
--

INSERT INTO `dept_syllabus_activity` (`id`, `dept_id`, `syllabus_association`, `ac_sy_name`, `file_name`, `file_position`, `status`, `updated_by`, `updated_at`) VALUES
(1, 2, 'Association', 'asss 21212121 aaa', '1574054174.jpg', 3, 'Inactive', 1, '2019-11-18 10:46:13'),
(2, 2, 'Association', 'aaa', '1574054908.jpg', 2, 'Active', 1, '2019-11-18 10:58:27'),
(3, 2, 'Association', 'QQQQ', '1574054967.jpg', 1, 'Active', 1, '2019-11-18 11:45:44'),
(4, 2, 'Syllabus', 'sss', '1574055235.jpg', 1, 'Active', 1, '2019-11-18 11:03:54'),
(5, 2, 'Syllabus', 'sssss12', '1574055255.jpg', 2, 'Active', 1, '2019-11-18 11:04:14'),
(6, 4, 'Association', 'mech', '1574057775.jpg', 1, 'Active', 1, '2019-11-18 11:46:14'),
(7, 4, 'Syllabus', 'mech sylla', '1574057822.jpg', 1, 'Active', 1, '2019-11-18 11:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_type` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `name`, `email`, `phone`, `username`, `password`, `admin_type`, `gender`, `address`, `city`, `qualification`, `profile_pic`, `id_proof`, `otp`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Kamal Raj', 'admin@citspc.in', '9789108819', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'Male', 'Coimbatore', '', '', '', '', 717026, 'Active', '0000-00-00 00:00:00', 0, '2019-11-04 16:51:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year_of_passing` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `file_upload` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`id`, `course`, `year_of_passing`, `first_name`, `last_name`, `mobile_no`, `dob`, `gender`, `email`, `address`, `file_upload`, `status`, `updated_at`, `updated_by`) VALUES
(1, 'sfs', 'erfwer', 'Kamal', 'Raj', '09876543210', '0000-00-00', 'Kamal Raj', 'kamal@kamal.com', 'Coimbatore', '1579763177.jpg', 'Active', '2020-01-23 12:36:17', 0),
(2, 'sfs', 'erfwer', 'Kamal', 'Raj', '09876543210', '0000-00-00', 'Kamal Raj', 'kamal@kamal.com', 'Coimbatore', '1579763719.jpg', 'Active', '2020-01-23 12:45:18', 0),
(3, 'sfs', '1212123', 'Kamal', 'Raj', '09876543210', '0000-00-00', 'Kamal Raj', 'kamal@kamal.com', 'Coimbatore', '1579763766.jpg', 'Active', '2020-01-23 12:46:05', 0),
(4, 'sfs', 'kamal@kama', 'Kamal', 'Raj', '09876543210', '0000-00-00', 'Kamal Raj', 'kamal@kamal.com', 'Coimbatore', '1579763803.jpg', 'Active', '2020-01-23 12:46:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ciipc_photos`
--

CREATE TABLE `tbl_ciipc_photos` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file_position` int(11) NOT NULL,
  `image_1` varchar(30) NOT NULL,
  `image_2` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ciipc_photos`
--

INSERT INTO `tbl_ciipc_photos` (`id`, `title`, `file_position`, `image_1`, `image_2`, `status`, `updated_at`, `updated_by`) VALUES
(1, 'Celebration 12222', 2, '1575007824.jpg', '1575007833.jpg', 'Inactive', '2019-11-29 11:41:25', 1),
(2, 'ssss', 4, '1575005006.jpg', '110.jpg', 'Active', '2019-11-29 10:53:25', 1),
(3, 'aaaa', 3, '1575005061.jpg', '1575005060.jpg', 'Active', '2019-11-29 10:54:20', 1),
(4, 'ffff', 1, '1575005093.jpg', '', 'Active', '2019-11-29 10:54:53', 1),
(5, 'Event', 2, '', '', 'Active', '2020-01-08 10:09:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_position` int(11) NOT NULL,
  `history` text NOT NULL,
  `vision` text NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`id`, `dept_name`, `dept_position`, `history`, `vision`, `description`, `status`, `updated_at`, `updated_by`) VALUES
(1, 'Mech', 3, '<p>Mech<br></p>', '<p>Mech<br></p>', '<p>Mech<br></p>', 'Inactive', '2019-11-14 14:12:38', 1),
(2, 'CSE', 1, '', '<p style=\"margin-bottom: 20px; font-weight: 400; font-size: 13px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">History</strong></p><p justify;\\\"=\"\" style=\"margin-bottom: 20px; font-weight: 400; font-size: 13px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif;\">One of the founding departments of CIT Sandwich Polytechnic College, the Mechanical Engineering Sandwich Department has played a leading role in evolving an Engineering Science based curriculum since 1961.</p>', '<p style=\"margin-bottom: 20px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 400;\"><br></p><p style=\"margin-bottom: 20px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 400;\"><strong style=\"font-weight: bold;\">Mission&nbsp;</strong></p><p justify;\\\"=\"\" style=\"margin-bottom: 20px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 400;\">The Mechanical Engineering Department Sandwich imparts sound knowledge in engineering along with realized social responsibilities to enable its students to address the current and impending challenges faced globally.&nbsp;</p><p justify;\\\"=\"\" style=\"margin-bottom: 20px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 400;\">The department offers certificate courses and non-formal &nbsp;programmes through a variety of delivery modes for the students, public and the employees of industries.</p><p style=\"margin-bottom: 20px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 400;\"><strong style=\"font-weight: bold;\">Vision&nbsp;</strong></p><p justify;\\\"=\"\" style=\"margin-bottom: 20px; color: rgb(102, 102, 102); font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: 400;\">The Mechanical Engineering sandwich Department of CITSPC aims to provide and be recognized by the society at large as one of the top ranking Mechanical Engineering Programmes in the country.</p>', 'Active', '2020-01-03 12:34:07', 1),
(3, 'ssss', 2, '', '', '', 'Active', '2019-11-14 16:51:17', 1),
(4, 'dddd', 4, '', '', '', 'Active', '2019-11-14 16:52:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general`
--

CREATE TABLE `tbl_general` (
  `id` int(11) NOT NULL,
  `tbl_master_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file_upload` varchar(50) NOT NULL,
  `file_position` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_general`
--

INSERT INTO `tbl_general` (`id`, `tbl_master_id`, `title`, `file_upload`, `file_position`, `description`, `status`, `updated_at`, `updated_by`) VALUES
(1, 1, 'sss', '1574158949.jpg', 2, '', 'Active', '2019-11-19 15:52:29', 1),
(2, 1, 'sss1', '1578313621.jpg', 1, '', 'Active', '2020-01-06 17:57:00', 1),
(3, 2, 'aaaa', '1574159144.jpg', 1, '', 'Active', '2019-11-19 15:55:44', 1),
(4, 2, 'aaaaaaaa', '1574159154.jpg', 2, '', 'Active', '2019-11-19 15:55:54', 1),
(5, 4, 'spic12444', '1574221655.jpg', 1, '', 'Active', '2019-11-20 09:19:10', 1),
(6, 3, 'spic12', '1574848342.jpg', 2, '', 'Active', '2019-11-27 15:22:21', 1),
(7, 10, 'PPPlace ments', '1578287452.jpg', 1, '', 'Active', '2020-01-06 10:40:51', 1),
(8, 13, 'Sample', '1576841872.jpg', 2, '', 'Active', '2019-12-20 17:07:52', 1),
(9, 13, 'aaaa', '1577965983.jpg', 1, '', 'Active', '2020-01-02 17:23:03', 1),
(10, 12, 'Placement', '1578286168.jpg', 1, '', 'Active', '2020-01-06 10:19:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_governing_council`
--

CREATE TABLE `tbl_governing_council` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desgination` varchar(100) NOT NULL,
  `file_upload` varchar(50) NOT NULL,
  `file_position` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_governing_council`
--

INSERT INTO `tbl_governing_council` (`id`, `name`, `desgination`, `file_upload`, `file_position`, `description`, `status`, `updated_at`, `updated_by`) VALUES
(1, 'Governor1222', 'Principal12121', '1574230145.jpg', 2, '<p>Addresss22222</p>', 'Active', '2019-11-20 11:39:04', 1),
(2, 'CSE', 'Principal', '1574229422.jpg', 1, '<p>Princccc</p>', 'Active', '2019-11-20 11:27:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_latest_events`
--

CREATE TABLE `tbl_latest_events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `file_upload` varchar(30) NOT NULL,
  `file_position` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_latest_events`
--

INSERT INTO `tbl_latest_events` (`id`, `title`, `event_date`, `file_upload`, `file_position`, `status`, `updated_by`, `updated_at`) VALUES
(1, 'aaaa', '0000-00-00', '1578459304.jpg', 3, 'Active', 1, '2020-01-08 10:25:03'),
(2, 'aaaa', '0000-00-00', '1578459504.jpg', 1, 'Active', 1, '2020-01-08 15:37:30'),
(3, 'CanvasJS HTML5 JavaScript Charts', '2020-01-22', '1578477851.jpg', 2, 'Active', 1, '2020-01-08 15:36:47'),
(4, 'Title3423', '2020-01-23', '1578478000.jpg', 4, 'Active', 1, '2020-01-08 15:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masters`
--

CREATE TABLE `tbl_masters` (
  `id` int(11) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masters`
--

INSERT INTO `tbl_masters` (`id`, `module_name`, `status`, `updated_at`, `updated_by`) VALUES
(1, 'Student Union', 'Active', '0000-00-00 00:00:00', 0),
(2, 'Downloads', 'Active', '0000-00-00 00:00:00', 0),
(3, 'Syllabi', 'Active', '0000-00-00 00:00:00', 0),
(4, 'Academic Calendar', 'Active', '0000-00-00 00:00:00', 0),
(5, 'Committee', 'Active', '0000-00-00 00:00:00', 0),
(6, 'Extra- Curricular Activities', 'Active', '0000-00-00 00:00:00', 0),
(7, 'Sports', 'Active', '0000-00-00 00:00:00', 0),
(8, 'CIICP Events', 'Active', '0000-00-00 00:00:00', 0),
(9, 'CIICP SPIC Members', 'Active', '0000-00-00 00:00:00', 0),
(10, 'Placement records', 'Active', '0000-00-00 00:00:00', 0),
(11, 'SPIC members', 'Active', '0000-00-00 00:00:00', 0),
(12, 'Placement Activites', 'Active', '0000-00-00 00:00:00', 0),
(13, 'Announcements', 'Active', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_announcement`
--

CREATE TABLE `tb_announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file_upload` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `file_position` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autonomous_exam`
--
ALTER TABLE `autonomous_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_faculty`
--
ALTER TABLE `dept_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_lab_facility`
--
ALTER TABLE `dept_lab_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_syllabus_activity`
--
ALTER TABLE `dept_syllabus_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ciipc_photos`
--
ALTER TABLE `tbl_ciipc_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_general`
--
ALTER TABLE `tbl_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_governing_council`
--
ALTER TABLE `tbl_governing_council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_latest_events`
--
ALTER TABLE `tbl_latest_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_masters`
--
ALTER TABLE `tbl_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autonomous_exam`
--
ALTER TABLE `autonomous_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dept_faculty`
--
ALTER TABLE `dept_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dept_lab_facility`
--
ALTER TABLE `dept_lab_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dept_syllabus_activity`
--
ALTER TABLE `dept_syllabus_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_ciipc_photos`
--
ALTER TABLE `tbl_ciipc_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_general`
--
ALTER TABLE `tbl_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_governing_council`
--
ALTER TABLE `tbl_governing_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_latest_events`
--
ALTER TABLE `tbl_latest_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_masters`
--
ALTER TABLE `tbl_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
