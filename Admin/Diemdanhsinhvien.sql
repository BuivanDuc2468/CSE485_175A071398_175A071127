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
StudentID char(15) not null ,
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
CREATE TABLE teacher_subject(
ID int AUTO_INCREMENT not null PRIMARY KEY,
teacher_ID int,
SubjectID int unsigned not null,
foreign key(teacher_ID) references teacher(teacherCode),
foreign key(SubjectID) references Subject(SubjectID)
);
CREATE TABLE classone_subject(
ID int AUTO_INCREMENT not null PRIMARY KEY,
ClassID int unsigned,
SubjectID int unsigned not null,
foreign key(ClassID) references ClassOne(ClassID),
foreign key(SubjectID) references Subject(SubjectID)
);



create table slide(
Anh varchar(200) not null primary key,
Chitiet varchar(500),
tinhtrang int(1)
);

create table chuyenmuc(
Machuyenmuc int unsigned auto_increment not null primary key,
Tenchuyenmuc varchar(100) character set utf8 collate utf8_unicode_ci not null,
Duongdan varchar(200) not null
);


create table Student-attend(
StudentCode char(15) not null,
ClassID int unsigned,
SubjectID int unsigned not null,
foreign key(ClassID) references classone(ClassID),
foreign key(SubjectID) references Subject(SubjectID)
);
--role--

Insert Into Role('roleName')
Values ('Admin'),

--users-- ko cần chèn bảng này nưa
INSERT INTO 'users' ('name', 'password', 'Email', 'Sdt', 'roleId', 'activity', 'verified', 'verification_code', 'created') 
VALUES 		  ('Admin','admin',NULL,NULL,'1',b'1',NULL,NULL,current_timestamp()),
		  ('Kiều Tuấn Dũng', '123123',NULL,NULL,'2',b'1',NULL,NULL,current_timestamp());




--teacher-- Chèn Bảng này
INSERT INTO 'Teacher' ('teacherName','birthDay','Phone','sex','level')
Values  ('Kiều Tuấn Dũng','01/01/1980','0978891268','Nam','Thạc Sĩ'),
Values  ('Ngô Lê An','01/01/1981','0986789856','Nữ','Tiến Sĩ'),
Values  ('Nguyễn Thị Thu Hà','01/01/1985','0345879345','Nữ','Thạc Sĩ'),
Values  ('Vũ Thị Minh Huệ','01/01/1984','0475937593','Nữ','Thạc Sĩ'),
Values  ('Nguyễn Thiện Dũng','01/01/1983','0946783256','Nam','Đại học'),
Values  ('Ngô Thị Thanh Vân','01/01/1988','0147895467','Nữ','Thạc Sĩ'),
Values  ('Phùng Duy Hảo','01/01/1989','0475839557','Nam','Thạc Sĩ'),
Values  ('Trần Thị Hồng Phúc ','01/01/1982','0475839523','Nữ','Đại học'),
Values  ('Vũ Ngọc Luân','01/01/1980','0956723451','Nam','Thạc Sĩ'),
Values  (' Nguyễn Văn Phương','01/01/1982','0578945734','Nam','Thạc Sĩ'),
Values  ('Bùi Anh Tú ','01/01/1985','0937426485','Nam','Thạc Sĩ'),
Values  ('Phạm Thị Thanh Trang ','01/01/1987','0374627345','Nữ','Tiến Sĩ'),
Values  ('Nguyễn Thùy Trang','01/01/1988','046572845','Nữ','Đại học'),
Values  ('Nguyễn Thế Hòa','01/01/1989','0384756392','Nam','Thạc Sĩ'),
Values  ('Lê Thị Thu Hiền ','01/01/1984','03763828475','Nữ','Tiến Sĩ'),
Values  ('Trần Khắc Thạc','01/01/1986','0485638573','Nam','Đại học'),
Values  ('Phạm Văn Thành','01/01/1987','0386583856','Nam','Thạc Sĩ'),
Values  ('Đào Văn Hưng','01/01/1988','0475385734','Nam','Tiến Sĩ');
	


--Class--  ko cần chèn bảng này nưa
Insert Into 'ClassOne' ('ClassName')
Values ('59TH1'),('59TH2),('59TH3),('59HT),('59PM1),('59PM2)


INSERT INTO Subject ('nameSubject') Values ('Toán 1'),
('Toán 2'),
('Ngôn ngữ lập trình'),
('Ngôn ngữ lập trình nâng cao'),
('Công nghệ web'),
('Nguyên lý kế toán'),
('Tư tưởng Hồ Chí Minh'),
('Đường lối Đảng cộng sản Việt Nam'),
('Hệ quản trị cơ sở dữ liệu'),
('Phân tích yêu cầu phần mềm'),
('Trí tuệ nhân tạo'),
('Lý thuyết tính toán'),
('Tiếng Anh 1'),
('Tiếng Anh 2'),
('Tiếng Anh 3'),
Values ('Bóng Đá'),
('Bóng Chuyền');


--Student-- Chèn bảng này khoảng 50 Sinh Viên Cai nào ko có thì cho giá trị là Null
Insert Into Student('StudentCode','name','sex','phone','ClassID')
Values ('175A071597','Nguyễn Xuân An','Nam','0914162689','1'),
Values ('175A071166','Trần Thị An','Nữ','01669788679','1'),
Values ('175A071084','Vương Đình An','Nam','0978178764','1'),
Values ('175A071143','Phan Quỳnh Anh','Nữ','0979809204','1'),
Values ('175A071530','Phi Vũ Hà Anh','Nam','0905682529','1'),
Values ('175A071249','Nguyễn Tuấn Anh','Nam','0982725726','1'),
Values ('175A071372','Mai Công Châu','Nam','0937303282','1'),
Values ('175A071203','Nguyễn Minh Chiều','Nam','09741314891'),
Values ('175A071141','Vũ Quốc Chình','Nam','0963798678','1'),
Values ('175A070666','Nguyễn Quốc Cường','Nam','0963798456','1'),
Values ('175A071577','Đỗ Đức Dũng','Nam','0963798679','1'),
Values ('175A071213','Vũ Mạnh Dũng','Nam','0963756280','1'),
Values ('175A071128','Lê Quốc Đạt','Nam','0966778280','1'),
Values ('175A071221','Vũ Đức Đạt ','Nam','0965498280','1'),
Values ('175A071137','Lê Hữu Độ','Nam','0954398280','1'),
Values ('175A071063','Lê Minh Đức','Nam','0456798280','1'),
Values ('175A071171','Trần Sách Đức','Nam','0432798280','1'),
Values ('175A071379','Đinh Việt Đức','Nam','0456398280','1'),
Values ('175A071486','Bùi Trung Đức','Nam','0964298280','1'),
Values ('175A071384','Đồng Mạnh Đức','Nam','0931798280','1'),
Values ('175A071412','Lê Văn Đức','Nam','096456280','1'),
Values ('175A071222','Ngỗ Văn Hải','Nam','0963579280','1'),
Values ('175A071407','Hoàng Thị Hằng','Nữ','0965236780','1'),
Values ('175A071406','Nguyễn Quang Hào','Nam','0913298280','1'),
Values ('175A071429','Ngô Kim Hảo','Nữ','0353798280','1'),
Values ('175A071575','Phạm Thị Hiên','Nữ','0456798280','1'),
Values ('175A070741','Nguyễn Tống Hiền','Nam','09637474','1'),
Values ('175A070681','Đỗ Minh Hiếu','Nam','0963745780','1'),
Values ('175A071375','Hoàng Minh Hiếu','Nam','0963243280','1'),
Values ('175A071350','Hồ Xuân Hiếu','Nam','0234698280','1'),
Values ('175A071150','Lê Thị Hoa','Nữ','0356734280','1'),
Values ('175A071204','Bùi Thị Hoa','Nữ','0935688280','1'),
Values ('175A071131','Vũ Huy Hoàng','Nam','0236788280','1'),
Values ('175A071425','Chu Việt Hoàng','Nam','0467898280','1'),
Values ('175A071160','Trần Quang Huy','Nam','0953778280','1'),
Values ('175A071351','Lê Quang Huy','Nam','046367798280','1'),
Values ('175A071536','Phạm Đức Huy','Nam','096379366','1'),
Values ('175A071156','Nguyễn Thái Hùng','Nam','0963798888','1'),
Values ('175A071363','Đồng Mạnh Hùng','Nam','096377890','1'),
Values ('175A071170','Phạm Huy Hùng','Nam','096378765','1'),
Values ('175A071344','Nguyễn Việt Hưng','Nam','0965678934','1'),
Values ('175A071162','Khổng Thị Hường','Nữ','0945356897','1'),
Values ('175A071261','Lê Thị Diệu Hường','Nữ','09634345670','1'),
Values ('175A071167','Nguyễn Văn Hữu','Nam','0963765430','1'),
Values ('175A071353','Bùi Ngọc Khánh','Nam','0963467880','1'),
Values ('175A071143','Dương Thanh Khiên','Nam','09346778280','1'),
Values ('175A070275','Nguyễn Quí Tùng Lâm','Nam','0934678280','1'),
Values ('175A071136','Nguyễn Tuấn Linh','Nam','0965678480','1'),
Values ('175A071346','Đỗ Thùy Linh','Nữ','0964778980','1'),
Values ('175A071175','Đặng Mạnh Luân','Nam','0963706646','1');
	