-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 30, 2019 lúc 05:21 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: id12092261_cse485
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attend`
--

CREATE TABLE `attend` (
  `ID` int(11) NOT NULL,
  `Dayattend` date DEFAULT NULL,
  `stu_obj` int(10) UNSIGNED NOT NULL,
  `ClassID` int(10) UNSIGNED NOT NULL,
  `status` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classone`
--

CREATE TABLE `classone` (
  `ClassID` int(10) UNSIGNED NOT NULL,
  `ClassName` varchar(10) NOT NULL,
  `homeroomTeacher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `classone`
--

INSERT INTO `classone` (`ClassID`, `ClassName`, `homeroomTeacher`) VALUES
(1, '59TH1', 1),
(2, '59TH2', 2),
(3, '59TH3', 3),
(4, '59HT', 4),
(5, '59PM1', 5),
(6, '59PM2', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `roleId` int(10) UNSIGNED NOT NULL,
  `roleName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`roleId`, `roleName`) VALUES
(1, 'Admin'),
(2, 'Teacher');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `StudentCode` char(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `ClassID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`StudentCode`, `name`, `sex`, `phone`, `ClassID`) VALUES
('175A010514', 'Nguyễn Hữu Thắng', 'Nam', '0963734576', 1),
('175A070269', 'Đỗ Ngọc Quang', 'Nam', '0963543126', 1),
('175A070275', 'Nguyễn Quí Tùng Lâm', 'Nam', '0934678280', 1),
('175A070278', 'Lê Đức Trung', 'Nam', '0963705678', 1),
('175A070326', 'Đặng Thị Trang', 'Nữ', '0963775885', 1),
('175A070555', 'Nguyễn Ngọc Thiên', 'Nam', '0963707543', 1),
('175A070666', 'Nguyễn Quốc Cường', 'Nam', '0963798456', 1),
('175A070681', 'Đỗ Minh Hiếu', 'Nam', '0963745780', 1),
('175A070741', 'Nguyễn Tống Hiền', 'Nam', '09637474', 1),
('175A070836', 'Đỗ Thành Nam', 'Nam', '0963708745', 1),
('175A0709605', 'Nguyễn Hữu Thu', 'Nam', '0963734567', 1),
('175A071063', 'Lê Minh Đức', 'Nam', '0456798280', 1),
('175A071084', 'Vương Đình An', 'Nam', '0978178764', 1),
('175A071118', 'Lê Hồng Quân', 'Nam', '096563456', 1),
('175A071120', 'Chu Đình Thái', 'Nam', '0963779674', 1),
('175A071123', 'Trần Xuân Lực', 'Nam', '0123706646', 1),
('175A071127', 'Đỗ Long Nhật', 'Nam', '0963689456', 1),
('175A071128', 'Lê Quốc Đạt', 'Nam', '0966778280', 1),
('175A071129', 'Lê Minh Quang', 'Nam', '0963785645', 1),
('175A071131', 'Vũ Huy Hoàng', 'Nam', '0236788280', 1),
('175A071135', 'Phạm Đình Quân', 'Nam', '0963700987', 1),
('175A071136', 'Nguyễn Tuấn Linh', 'Nam', '0965678480', 1),
('175A071137', 'Lê Hữu Độ', 'Nam', '0954398280', 1),
('175A071141', 'Vũ Quốc Chình', 'Nam', '0963798678', 1),
('175A071143', 'Dương Thanh Khiên', 'Nam', '0934677828', 1),
('175A071144', 'Phan Quỳnh Anh', 'Nữ', '0979809204', 1),
('175A071149', 'Dương Minh Sơn', 'Nam', '0963704566', 1),
('175A071150', 'Lê Thị Hoa', 'Nữ', '0356734280', 1),
('175A071152', 'Nguyễn Hoàng Trung', 'Nam', '0963706856', 1),
('175A071153', 'Dương Tiến Thắng', 'Nam', '0963436746', 1),
('175A071154', 'Nguyễn Vương Minh', 'Nam', '0963654346', 1),
('175A071156', 'Nguyễn Thái Hùng', 'Nam', '0963798888', 1),
('175A071159', 'Nguyễn Đăng Miên', 'Nam', '0963767846', 1),
('175A071160', 'Trần Quang Huy', 'Nam', '0953778280', 1),
('175A071162', 'Khổng Thị Hường', 'Nữ', '0945356897', 1),
('175A071165', 'Đào Nguyễn Minh Quang', 'Nam', '0963765567', 1),
('175A071166', 'Trần Thị An', 'Nữ', '0166978867', 1),
('175A071167', 'Nguyễn Văn Hữu', 'Nam', '0963765430', 1),
('175A071170', 'Phạm Huy Hùng', 'Nam', '096378765', 1),
('175A071171', 'Trần Sách Đức', 'Nam', '0432798280', 1),
('175A071175', 'Đặng Mạnh Luân', 'Nam', '0963706646', 1),
('175A071203', 'Nguyễn Minh Chiều', 'Nam', '0974131489', 1),
('175A071204', 'Bùi Thị Hoa', 'Nữ', '0935688280', 1),
('175A071213', 'Vũ Mạnh Dũng', 'Nam', '0963756280', 1),
('175A071221', 'Vũ Đức Đạt ', 'Nam', '0965498280', 1),
('175A071222', 'Ngỗ Văn Hải', 'Nam', '0963579280', 1),
('175A071249', 'Nguyễn Tuấn Anh', 'Nam', '0982725726', 1),
('175A071261', 'Lê Thị Diệu Hường', 'Nữ', '0963434567', 1),
('175A07134', 'Nguyễn Thu Lý', 'Nữ', '0963706456', 1),
('175A071344', 'Nguyễn Việt Hưng', 'Nam', '0965678934', 1),
('175A071346', 'Đỗ Thùy Linh', 'Nữ', '0964778980', 1),
('175A071350', 'Hồ Xuân Hiếu', 'Nam', '0234698280', 1),
('175A071351', 'Lê Quang Huy', 'Nam', '0463677982', 1),
('175A071353', 'Bùi Ngọc Khánh', 'Nam', '0963467880', 1),
('175A071363', 'Đồng Mạnh Hùng', 'Nam', '096377890', 1),
('175A071372', 'Mai Công Châu', 'Nam', '0937303282', 1),
('175A071375', 'Hoàng Minh Hiếu', 'Nam', '0963243280', 1),
('175A071379', 'Đinh Việt Đức', 'Nam', '0456398280', 1),
('175A071384', 'Đồng Mạnh Đức', 'Nam', '0931798280', 1),
('175A071406', 'Nguyễn Quang Hào', 'Nam', '0913298280', 1),
('175A071407', 'Hoàng Thị Hằng', 'Nữ', '0965236780', 1),
('175A071412', 'Lê Văn Đức', 'Nam', '096456280', 1),
('175A071425', 'Chu Việt Hoàng', 'Nam', '0467898280', 1),
('175A071429', 'Ngô Kim Hảo', 'Nữ', '0353798280', 1),
('175A071486', 'Bùi Trung Đức', 'Nam', '0964298280', 1),
('175A071530', 'Phi Vũ Hà Anh', 'Nam', '0905682529', 1),
('175A071536', 'Phạm Đức Huy', 'Nam', '096379366', 1),
('175A071575', 'Phạm Thị Hiên', 'Nữ', '0456798280', 1),
('175A071577', 'Đỗ Đức Dũng', 'Nam', '0963798679', 1),
('175A071597', 'Nguyễn Xuân An', 'Nam', '0914162689', 1),
('175TH21', 'Nguyễn Tuấn Anh ', 'Nam', '0961122334', 2),
('175TH210', 'Trịnh Quốc Dũng', 'Nam', '0967686778', 2),
('175TH211', ' Trần Thị Thùy Dương', 'Nữ', '09645664', 2),
('175TH212', 'Phạm Hồng Giang ', 'Nữ', '0963454366', 2),
('175TH213', 'Lê Thị Ngọc Hà', 'Nữ', '096768686', 2),
('175TH214', 'Nguyễn Thị Thúy Hằng', 'Nữ', '0962344234', 2),
('175TH215', 'Nguyễn Thị Thu Hạnh ', 'Nữ', '0966979769', 2),
('175TH216', 'Trần Thị Hậu ', 'Nữ', '096890085', 2),
('175TH217', 'Trần Thu Hiền', 'Nữ', '0963454354', 2),
('175TH218', 'Phạm Trung Hiếu', 'Nam', '0962324324', 2),
('175TH219', 'Triệu Xuân Hoa ', 'Nam', '0965465464', 2),
('175TH22', 'Nguyễn Thị Vân Anh', 'Nữ', '0962233445', 2),
('175TH220', ' Trần Huy Hoàng ', 'Nam', '0967876865', 2),
('175TH221', ' Nguyễn Đức Hùng', 'Nam', '0962343234', 2),
('175TH222', 'Nguyễn Thị Lan Hương', 'Nữ', '0966546456', 2),
('175TH223', ' Đỗ Thị Ngọc Huyền', 'Nữ', '096324234', 2),
('175TH224', 'Lê Thị Huyền ', 'Nữ', '0962344234', 2),
('175TH225', 'Phạm Thị Huyền', 'Nữ', '096123313', 2),
('175TH226', 'Phạm Đức Khôi', 'Nam', '0961231321', 2),
('175TH227', 'Trần Thị La', 'Nữ', '0961232131', 2),
('175TH228', 'Lý Thị Hương Lan', 'Nữ', '0965435353', 2),
('175TH229', 'Cao Thị Linh ', 'Nữ', '0962321321', 2),
('175TH23', 'Lê Việt Anh ', 'Nam', '096345645', 2),
('175TH230', 'Phùng Yến Linh ', 'Nữ', '0966546546', 2),
('175TH231', 'Nguyễn Thị Thảo Linh', 'Nữ', '0966576576', 2),
('175TH232', 'Trần Thế Long ', 'Nam', '0965676574', 2),
('175TH233', 'Dương Khánh Ly', 'Nữ', '0962342432', 2),
('175TH234', 'Nguyễn Lê Nguyệt Minh ', 'Nữ', '0964354353', 2),
('175TH235', 'Nguyễn Thị Hà My', 'Nữ', '096234424', 2),
('175TH236', 'Ngô Thị Ngân', 'Nữ', '0962343243', 2),
('175TH237', 'Vũ Thị Ngát', 'Nữ', '0961213213', 2),
('175TH238', 'Đoàn Thị Như', 'Nữ', '0965464646', 2),
('175TH24', 'Mai Đức Anh', 'Nam', '0965645621', 2),
('175TH25', 'Nguyễn Ngọc Anh ', 'Nữ', '0968975356', 2),
('175TH26', 'Đào Huy Bách', 'Nam', '096324324', 2),
('175TH27', 'Lưu Trung Cường', 'Nam', '0962342343', 2),
('175TH28', 'Dương Ngọc Danh ', 'Nam', '0962354654', 2),
('175TH29', 'Phạm Việt Đức', 'Nam', '0961231312', 2),
('175TH31', 'Đặng Thị Huyền Anh', 'Nữ', '0122342432', 3),
('175TH310', 'Đỗ Viết Dũng', 'Nữ', '056734244', 3),
('175TH311', 'Phạm Thị Hải Dương', 'Nữ', '0578864532', 3),
('175TH312', 'Đỗ Quang Hà', 'Nam', '0966577572', 3),
('175TH313', 'Ngô Thị Hằng', 'Nữ', '45768624', 3),
('175TH314', 'Phạm Hồng Hải', 'Nam', '032446424', 3),
('175TH315', 'Lê Hồng Hạnh', 'Nữ', '0968784324', 3),
('175TH316', 'Đỗ Thị Thúy Hiền', 'Nữ', '096256324', 3),
('175TH317', 'Vũ Thúy Hiền', 'Nữ', '0962765324', 3),
('175TH318', 'Đào Viết Hiếu', 'Nam', '094524324', 3),
('175TH319', 'Hoàng Thị Thiện Hoa', 'Nữ', '0923444324', 3),
('175TH32', 'Đỗ Thị Tú Anh', 'Nữ', '0342342432', 3),
('175TH320', 'Nguyễn Huy Hoàng', 'Nam', '096645324', 3),
('175TH321', 'Nguyễn Thanh Hùng', 'Nam', '0962342432', 3),
('175TH322', 'Lê Thị Lan Hương', 'Nữ', '0965464632', 3),
('175TH323', 'Lê Thị Lan Hương', 'Nữ', '0964564324', 3),
('175TH324', 'Nguyễn Thị Huyền', 'Nữ', '045424324', 3),
('175TH325', 'Đỗ Văn Khải', 'Nam', '0962398724', 3),
('175TH326', 'Phan Bá Khởi', 'Nam', '0962786683', 3),
('175TH327', 'Phạm Ngọc Lăng', 'Nam', '0956742432', 3),
('175TH328', 'Nguyễn Thị Thùy Linh', 'Nữ', '0962677573', 3),
('175TH329', 'Trần Thị Linh', 'Nữ', '0962566464', 3),
('175TH33', 'Lê Nguyễn Quỳnh Anh', 'Nữ', '0562342432', 3),
('175TH330', 'Vũ Phương Linh', 'Nữ', '093453454', 3),
('175TH331', 'Phan Thị Linh', 'Nữ', '096234533', 3),
('175TH332', 'Nguyễn Hoàng Long', 'Nam', '096233453', 3),
('175TH333', 'Lưu Thị Mai', 'Nữ', '0962345435', 3),
('175TH334', 'Đào Tiến Minh', 'Nam', '0962435353', 3),
('175TH3340', 'Phùng Thu Phương', 'Nữ', '0963454564', 3),
('175TH335', 'Vũ Ngọc Mỹ', 'Nữ', '0962323442', 3),
('175TH336', 'Trần Thị Kim Ngân', 'Nữ', '0962342442', 3),
('175TH337', 'Trần Thị Ngát', 'Nữ', '0964564342', 3),
('175TH338', 'Trần Hồng Nhung', 'Nữ', '0962345646', 3),
('175TH339', 'Bùi Thị Thu Phương', 'Nữ', '0962546543', 3),
('175TH34', 'Đinh Hải Anh', 'Nam', '0964353243', 3),
('175TH35', 'Vũ Thị Minh Ánh', 'Nữ', '0943532432', 3),
('175TH36', 'Trần Văn Chất', 'Nam', '0962334532', 3),
('175TH37', 'Nguyễn Văn Cường', 'Nam', '0966564654', 3),
('175TH38', 'Trần Thị Đào', 'Nữ', '0962356757', 3),
('175TH39', 'Nguyễn Thị Thùy Dung', 'Nữ', '096287868', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_subject`
--

CREATE TABLE `student_subject` (
  `Id` int(10) UNSIGNED NOT NULL,
  `StudentID` char(15) NOT NULL,
  `SubjectID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `SubjectID` int(10) UNSIGNED NOT NULL,
  `nameSubject` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`SubjectID`, `nameSubject`) VALUES
(1, 'Toán 1'),
(2, 'Toán 2'),
(3, 'Ngôn ngữ lập trình'),
(4, 'Ngôn ngữ lập trình nâng cao'),
(5, 'Công nghệ web'),
(6, 'Nguyên lý kế toán'),
(7, 'Tư tưởng Hồ Chí Minh'),
(8, 'Đường lối Đảng cộng sản Việt Nam'),
(9, 'Hệ quản trị cơ sở dữ liệu'),
(10, 'Phân tích yêu cầu phần mềm'),
(11, 'Trí tuệ nhân tạo'),
(12, 'Lý thuyết tính toán'),
(13, 'Tiếng Anh 1'),
(14, 'Tiếng Anh 2'),
(15, 'Tiếng Anh 3'),
(16, 'Bóng Đá'),
(17, 'Bóng Chuyền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `teacherCode` int(11) NOT NULL,
  `teacherName` varchar(40) NOT NULL,
  `birthDay` date DEFAULT NULL,
  `Phone` char(10) DEFAULT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`teacherCode`, `teacherName`, `birthDay`, `Phone`, `sex`, `level`) VALUES
(1, 'Kiều Tuấn Dũng', '1985-12-03', '0978891268', 'Nam', 'Thạc Sĩ'),
(2, 'Ngô Lê An', '1986-12-03', '0986789856', 'Nữ', 'Tiến Sĩ'),
(3, 'Nguyễn Thị Thu Hà', '1988-12-03', '0345879345', 'Nữ', 'Thạc Sĩ'),
(4, 'Vũ Thị Minh Huệ', '1980-11-03', '0475937593', 'Nữ', 'Thạc Sĩ'),
(5, 'Nguyễn Thiện Dũng', '1985-12-03', '0946783256', 'Nam', 'Đại học'),
(6, 'Ngô Thị Thanh Vân', '1985-12-03', '0147895467', 'Nữ', 'Thạc Sĩ'),
(7, 'Phùng Duy Hảo', '1985-12-03', '0475839557', 'Nam', 'Thạc Sĩ'),
(8, 'Trần Thị Hồng Phúc ', '1985-12-03', '0475839523', 'Nữ', 'Đại học'),
(9, 'Vũ Ngọc Luân', '1985-12-03', '0956723451', 'Nam', 'Thạc Sĩ'),
(10, ' Nguyễn Văn Phương', '1985-12-03', '0578945734', 'Nam', 'Thạc Sĩ'),
(11, 'Bùi Anh Tú ', '1985-12-03', '0937426485', 'Nam', 'Thạc Sĩ'),
(12, 'Phạm Thị Thanh Trang ', '1985-12-03', '0374627345', 'Nữ', 'Tiến Sĩ'),
(13, 'Nguyễn Thùy Trang', '1985-12-03', '046572845', 'Nữ', 'Đại học'),
(14, 'Nguyễn Thế Hòa', '1985-12-03', '0384756392', 'Nam', 'Thạc Sĩ'),
(15, 'Lê Thị Thu Hiền ', '1985-12-03', '0376382847', 'Nữ', 'Tiến Sĩ'),
(16, 'Trần Khắc Thạc', '1985-12-03', '0485638573', 'Nam', 'Đại học'),
(17, 'Phạm Văn Thành', '1985-12-03', '0386583856', 'Nam', 'Thạc Sĩ'),
(18, 'Đào Văn Hưng', '1985-12-03', '0475385734', 'Nam', 'Tiến Sĩ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher_subject_class`
--

CREATE TABLE `teacher_subject_class` (
  `ID` int(11) NOT NULL,
  `teacher_ID` int(11) DEFAULT NULL,
  `ClassID` int(10) UNSIGNED DEFAULT NULL,
  `SubjectID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userId` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Sdt` varchar(11) DEFAULT NULL,
  `roleId` int(10) UNSIGNED NOT NULL,
  `activity` bit(1) NOT NULL DEFAULT b'0',
  `verified` int(11) NOT NULL,
  `verification_code` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userId`, `name`, `password`, `Email`, `Sdt`, `roleId`, `activity`, `verified`, `verification_code`, `created`) VALUES
(1, 'Admin', '$2y$10$Yhp5Mq8kbzftCU4CBFUzQOvvJP.dswwFMy0VKO2.ZkPYj3rYQEWAO', 'bduc0248@gmail.com', '963798280', 1, b'1', 0, '', '2019-12-30 16:21:01'),
(2, 'Kiều Tuấn Dũng', '$2y$10$AJJ2tL5apHeN0aSeozH0fuWch9KpyimzevosN5rHXzyOdGPqPx21i', 'ktd@gmail.com', '912354584', 2, b'1', 0, '', '2019-12-30 16:21:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ClassID` (`ClassID`),
  ADD KEY `stu_obj` (`stu_obj`);

--
-- Chỉ mục cho bảng `classone`
--
ALTER TABLE `classone`
  ADD PRIMARY KEY (`ClassID`),
  ADD KEY `homeroomTeacher` (`homeroomTeacher`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentCode`),
  ADD KEY `ClassID` (`ClassID`);

--
-- Chỉ mục cho bảng `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectID`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherCode`);

--
-- Chỉ mục cho bảng `teacher_subject_class`
--
ALTER TABLE `teacher_subject_class`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `teacher_ID` (`teacher_ID`),
  ADD KEY `SubjectID` (`SubjectID`),
  ADD KEY `ClassID` (`ClassID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attend`
--
ALTER TABLE `attend`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `classone`
--
ALTER TABLE `classone`
  MODIFY `ClassID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `SubjectID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `teacher_subject_class`
--
ALTER TABLE `teacher_subject_class`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attend`
--
ALTER TABLE `attend`
  ADD CONSTRAINT `attend_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `classone` (`ClassID`),
  ADD CONSTRAINT `attend_ibfk_2` FOREIGN KEY (`stu_obj`) REFERENCES `student_subject` (`Id`);

--
-- Các ràng buộc cho bảng `classone`
--
ALTER TABLE `classone`
  ADD CONSTRAINT `classone_ibfk_1` FOREIGN KEY (`homeroomTeacher`) REFERENCES `teacher` (`teacherCode`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `classone` (`ClassID`);

--
-- Các ràng buộc cho bảng `student_subject`
--
ALTER TABLE `student_subject`
  ADD CONSTRAINT `student_subject_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentCode`),
  ADD CONSTRAINT `student_subject_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);

--
-- Các ràng buộc cho bảng `teacher_subject_class`
--
ALTER TABLE `teacher_subject_class`
  ADD CONSTRAINT `teacher_subject_class_ibfk_1` FOREIGN KEY (`teacher_ID`) REFERENCES `teacher` (`teacherCode`),
  ADD CONSTRAINT `teacher_subject_class_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`),
  ADD CONSTRAINT `teacher_subject_class_ibfk_3` FOREIGN KEY (`ClassID`) REFERENCES `classone` (`ClassID`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `role` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
