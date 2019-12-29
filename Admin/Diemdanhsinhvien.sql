create table role(
roleId int unsigned auto_increment not null primary key,
roleName varchar(50) character set utf8 collate utf8_unicode_ci not null
);

create table post(
postID int unsigned not null,
postTitle varchar(200) not null,
postDecription varchar(300) character set utf8 collate utf8_unicode_ci not null,
link varchar(200) not null primary key,
Id int unsigned not null,
DatePost date not null
);


create table Subject(
SubjectID int unsigned auto_increment not null primary key,
nameSubject varchar(50) character set utf8 collate utf8_unicode_ci not null
);

create table ClassOne(
ClassID int unsigned not null auto_increment primary key,
ClassName varchar(10) not null
);

create table Student(
StudentCode char(15) not null primary key,
name varchar(30) not null,
sex varchar(3),
phone char(10),
ClassID int unsigned not null,
foreign key(ClassID) references ClassOne(ClassID)
);
create table Student_Subject(
Id int unsigned not null auto_increment primary key,
StudentID char(15) not null,
SubjectID int unsigned not null,
foreign key(StudentID) references Student(StudentCode),
foreign key(SubjectID) references Subject(SubjectID)
);


create table Users(
userId int unsigned auto_increment not null primary key,
name varchar(50) character set utf8 collate utf8_unicode_ci not null,
password varchar(80) not null,
Email varchar(50),
Sdt varchar(11),
roleId int unsigned not null ,
activity bit not null,
verified INT(11) NOT NULL,
verification_code VARCHAR(200) NOT NULL,
created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
foreign key(roleId) references role(roleId)
);
create table Teacher(
teacherCode int AUTO_INCREMENT PRIMARY KEY,
teacherName varchar(40) not null,
birthDay date ,
Phone char(10),
sex varchar(3),
level varchar(10)
);
CREATE TABLE teacher_subject_class(
ID int AUTO_INCREMENT not null PRIMARY KEY,
teacher_ID int,
ClassID int unsigned,
SubjectID int unsigned not null,
foreign key(teacher_ID) references teacher(teacherCode),
foreign key(SubjectID) references Subject(SubjectID),
foreign key(ClassID ) references ClassOne(ClassID)
);


create table attend(
ID int unsigned not null AUTO_INCREMENT primary key,
StudentID char(15) not null,
SubjectID int unsigned not null,
foreign key(StudentID) references Student(StudentCode),
foreign key(SubjectID) references Subject(SubjectID),
schooldDay1 bit,
schooldDay2 bit,
schooldDay3 bit,
schooldDay4 bit,
schooldDay5 bit,
schooldDay6 bit,
schooldDay7 bit,
schooldDay8 bit,
schooldDay9 bit,
schooldDay10 bit
);








Insert Into Role(roleName)
Values ('Admin'),('Teacher');

INSERT INTO users (name, password, Email, Sdt, roleId, activity, verified, verification_code, created) 
VALUES 		  ('Admin','admin',NULL,NULL,'1',b'1',NULL,NULL,current_timestamp()),
		  ('Kiều Tuấn Dũng', '123123',NULL,NULL,'2',b'1',NULL,NULL,current_timestamp());



INSERT INTO teacher (teacherCode, teacherName, birthDay, Phone, sex,level) 
VALUES
(1213,'Kiều Tuấn Dũng', '0000-00-00', '0978891268', 'Nam', 'Thạc Sĩ'),
(1214,'Ngô Lê An', '0000-00-00', '0986789856', 'Nữ', 'Tiến Sĩ'),
(1215,'Nguyễn Thị Thu Hà', '0000-00-00', '0345879345', 'Nữ', 'Thạc Sĩ'),
(1216,'Vũ Thị Minh Huệ', '0000-00-00', '0475937593', 'Nữ', 'Thạc Sĩ'),
(1217,'Nguyễn Thiện Dũng', '0000-00-00', '0946783256', 'Nam', 'Đại học'),
(1218,'Ngô Thị Thanh Vân', '0000-00-00', '0147895467', 'Nữ', 'Thạc Sĩ'),
(1219,'Phùng Duy Hảo', '0000-00-00', '0475839557', 'Nam', 'Thạc Sĩ'),
(1220,'Trần Thị Hồng Phúc ', '0000-00-00', '0475839523', 'Nữ', 'Đại học'),
(1221,'Vũ Ngọc Luân', '0000-00-00', '0956723451', 'Nam', 'Thạc Sĩ'),
(1222,' Nguyễn Văn Phương', '0000-00-00', '0578945734', 'Nam', 'Thạc Sĩ'),
(1223,'Bùi Anh Tú ', '0000-00-00', '0937426485', 'Nam', 'Thạc Sĩ'),
(1224,'Phạm Thị Thanh Trang ', '0000-00-00', '0374627345', 'Nữ', 'Tiến Sĩ'),
(1225,'Nguyễn Thùy Trang', '0000-00-00', '046572845', 'Nữ', 'Đại học'),
(1226,'Nguyễn Thế Hòa', '0000-00-00', '0384756392', 'Nam', 'Thạc Sĩ'),
(1227,'Lê Thị Thu Hiền ', '0000-00-00', '0376382847', 'Nữ', 'Tiến Sĩ'),
(1228,'Trần Khắc Thạc', '0000-00-00', '0485638573', 'Nam', 'Đại học'),
(1229,'Phạm Văn Thành', '0000-00-00', '0386583856', 'Nam', 'Thạc Sĩ'),
(1230,'Đào Văn Hưng', '0000-00-00', '0475385734', 'Nam', 'Tiến Sĩ');
Insert Into ClassOne (ClassName)
Values ('59TH1'),('59TH2'),('59TH3'),('59HT'),('59PM1'),('59PM2');

INSERT INTO subject (SubjectID, nameSubject) VALUES
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

INSERT INTO student (StudentCode, name, sex, phone, ClassID) VALUES
('175A070275', 'Nguyễn Quý Tùng Lâm', 'Nam', '0934678280', 1),
('175A070666', 'Nguyễn Quốc Cường', 'Nam', '0963798456', 1),
('175A070681', 'Đỗ Minh Hiếu', 'Nam', '0963745780', 1),
('175A070741', 'Nguyễn Tống Hiền', 'Nam', '09637474', 1),
('175A071063', 'Lê Minh Đức', 'Nam', '0456798280', 1),
('175A071084', 'Vương Đình An', 'Nam', '0978178764', 1),
('175A071128', 'Lê Quốc Đạt', 'Nam', '0966778280', 1),
('175A071131', 'Vũ Huy Hoàng', 'Nam', '0236788280', 1),
('175A071136', 'Nguyễn Tuấn Linh', 'Nam', '0965678480', 1),
('175A071137', 'Lê Hữu Độ', 'Nam', '0954398280', 1),
('175A071141', 'Vũ Quốc Chình', 'Nam', '0963798678', 1),
('175A071143', 'Dương Thanh Khiên', 'Nam', '0934677828', 1),
('175A071144', 'Phan Quỳnh Anh', 'Nữ', '0979809204', 1),
('175A071150', 'Lê Thị Hoa', 'Nữ', '0356734280', 1),
('175A071156', 'Nguyễn Thái Hùng', 'Nam', '0963798888', 1),
('175A071160', 'Trần Quang Huy', 'Nam', '0953778280', 1),
('175A071162', 'Khổng Thị Hường', 'Nữ', '0945356897', 1),
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
('175A071597', 'Nguyễn Xuân An', 'Nam', '0914162689', 1);