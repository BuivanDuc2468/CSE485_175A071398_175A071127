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

create table Teacher(
teacherCode int AUTO_INCREMENT PRIMARY KEY,
teacherName varchar(40) not null,
birthDay date ,
Phone char(10),
sex varchar(3),
level varchar(10)
);
create table ClassOne(
ClassID int unsigned not null auto_increment primary key,
ClassName varchar(10) not null,
homeroomTeacher int,
foreign key(homeroomTeacher) references teacher(teacherCode)
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
Email varchar(50) not null,
Sdt varchar(11),
roleId int unsigned not null ,
activity bit not null DEFAULT b'0',
verified INT(11) NOT NULL,
verification_code VARCHAR(200) NOT NULL,
created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
foreign key(roleId) references role(roleId)
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
ID int AUTO_INCREMENT not null primary key,
StudentID char(15) not null ,
Dayattend date,
SubjectID int unsigned not null ,
ClassID int unsigned not null,
status bit DEFAULT b'1',
foreign key(StudentID) references Student(StudentCode),
foreign key(SubjectID) references Subject(SubjectID),
foreign key(ClassID ) references ClassOne(ClassID)
);
Insert Into Role(roleName)
Values ('Admin'),('Teacher');

INSERT INTO users (name, password, Email, Sdt, roleId, activity, verified, verification_code, created) 
VALUES 		  ('Admin','$2y$10$xoCyB6q7/dRIFR2esyI2gOevBUrOldOnVEea/7Sdth1efPuPZsppm','bduc0248@gmail.com',0963798280,'1',b'1',NULL,NULL,current_timestamp()),
		  ('Kiều Tuấn Dũng', '$2y$10$AJJ2tL5apHeN0aSeozH0fuWch9KpyimzevosN5rHXzyOdGPqPx21i','ktd@gmail.com',NULL,'2',b'1',NULL,NULL,current_timestamp());
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
('175A071597',N'Nguyễn Xuân An','Nam','0914162689','1'),
 ('175A071166',N'Trần Thị An',N'Nữ','01669788679','1'),
 ('175A071084',N'Vương Đình An','Nam','0978178764','1'),
 ('175A071144',N'Phan Quỳnh Anh',N'Nữ','0979809204','1'),
 ('175A071530',N'Phi Vũ Hà Anh','Nam','0905682529','1'),
 ('175A071249',N'Nguyễn Tuấn Anh','Nam','0982725726','1'),
 ('175A071372',N'Mai Công Châu','Nam','0937303282','1'),
 ('175A071203',N'Nguyễn Minh Chiều','Nam','09741314891',1),
 ('175A071141',N'Vũ Quốc Chình','Nam','0963798678','1'),
 ('175A071213',N'Vũ Mạnh Dũng','Nam','0963756280','1'),
 ('175A071128',N'Lê Quốc Đạt','Nam','0966778280','1'),
 ('175A070666',N'Nguyễn Quốc Cường','Nam','0963798456','1'),
 ('175A071577',N'Đỗ Đức Dũng','Nam','0963798679','1'),
 ('175A071221',N'Vũ Đức Đạt ','Nam','0965498280','1'),
 ('175A071137',N'Lê Hữu Độ','Nam','0954398280','1'),
 ('175A071063',N'Lê Minh Đức','Nam','0456798280','1'),
 ('175A071171',N'Trần Sách Đức','Nam','0432798280','1'),
 ('175A071379',N'Đinh Việt Đức','Nam','0456398280','1'),
 ('175A071486',N'Bùi Trung Đức','Nam','0964298280','1'),
 ('175A071384',N'Đồng Mạnh Đức','Nam','0931798280','1'),
 ('175A071412',N'Lê Văn Đức','Nam','096456280','1'),
 ('175A071222',N'Ngỗ Văn Hải','Nam','0963579280','1'),
 ('175A071407',N'Hoàng Thị Hằng',N'Nữ','0965236780','1'),
 ('175A071406',N'Nguyễn Quang Hào','Nam','0913298280','1'),
 ('175A071429',N'Ngô Kim Hảo',N'Nữ','0353798280','1'),
 ('175A071575',N'Phạm Thị Hiên',N'Nữ','0456798280','1'),
 ('175A070741',N'Nguyễn Tống Hiền','Nam','09637474','1'),
 ('175A070681',N'Đỗ Minh Hiếu','Nam','0963745780','1'),
 ('175A071375',N'Hoàng Minh Hiếu','Nam','0963243280','1'),
 ('175A071350',N'Hồ Xuân Hiếu','Nam','0234698280','1'),
 ('175A071150',N'Lê Thị Hoa',N'Nữ','0356734280','1'),
 ('175A071204',N'Bùi Thị Hoa',N'Nữ','0935688280','1'),
 ('175A071131',N'Vũ Huy Hoàng','Nam','0236788280','1'),
 ('175A071425',N'Chu Việt Hoàng','Nam','0467898280','1'),
 ('175A071160',N'Trần Quang Huy','Nam','0953778280','1'),
 ('175A071351',N'Lê Quang Huy','Nam','046367798280','1'),
 ('175A071536',N'Phạm Đức Huy','Nam','096379366','1'),
 ('175A071156',N'Nguyễn Thái Hùng','Nam','0963798888','1'),
 ('175A071363',N'Đồng Mạnh Hùng','Nam','096377890','1'),
 ('175A071170',N'Phạm Huy Hùng','Nam','096378765','1'),
 ('175A071344',N'Nguyễn Việt Hưng','Nam','0965678934','1'),
 ('175A071162',N'Khổng Thị Hường',N'Nữ','0945356897','1'),
 ('175A071261',N'Lê Thị Diệu Hường',N'Nữ','09634345670','1'),
 ('175A071167',N'Nguyễn Văn Hữu','Nam','0963765430','1'),
 ('175A071353',N'Bùi Ngọc Khánh','Nam','0963467880','1'),
 ('175A071143',N'Dương Thanh Khiên','Nam','09346778280','1'),
 ('175A070275',N'Nguyễn Quí Tùng Lâm','Nam','0934678280','1'),
 ('175A071136',N'Nguyễn Tuấn Linh','Nam','0965678480','1'),
 ('175A071346',N'Đỗ Thùy Linh',N'Nữ','0964778980','1'),
 ('175A071175',N'Đặng Mạnh Luân','Nam','0963706646','1'),
 ('175A071123',N'Trần Xuân Lực','Nam','0123706646','1'),
 ('175A07134',N'Nguyễn Thu Lý',N'Nữ','0963706456','1'),
 ('175A071159',N'Nguyễn Đăng Miên','Nam','0963767846','1'),
 ('175A071154',N'Nguyễn Vương Minh','Nam','0963654346','1'),
 ('175A070836',N'Đỗ Thành Nam','Nam','0963708745','1'),
 ('175A071127',N'Đỗ Long Nhật','Nam','0963689456','1'),
 ('175A071118',N'Lê Hồng Quân','Nam','096563456','1'),
 ('175A071135',N'Phạm Đình Quân','Nam','0963700987','1'),
 ('175A071165',N'Đào Nguyễn Minh Quang','Nam','0963765567','1'),
 ('175A070269',N'Đỗ Ngọc Quang','Nam','0963543126','1'),
 ('175A071129,N'Lê Minh Quang','Nam','09637856456','1'),
 ('175A071149',N'Dương Minh Sơn','Nam','0963704566','1'),
 ('175A071120',N'Chu Đình Thái','Nam','0963779674','1'),
 ('175A071153',N'Dương Tiến Thắng','Nam','0963436746','1'),
 ('175A010514',N'Nguyễn Hữu Thắng','Nam','0963734576','1'),
 ('175A070555',N'Nguyễn Ngọc Thiên','Nam','0963707543','1'),
 ('175A0709605',N'Nguyễn Hữu Thu','Nam','09637345676','1'),
 ('175A070326',N'Đặng Thị Trang',N'Nữ','0963775885','1'),
 ('175A070278',N'Lê Đức Trung','Nam','09637056786','1'),
 ('175A071152',N'Nguyễn Hoàng Trung','Nam','0963706856','1'),

  ('175TH21',N'Nguyễn Tuấn Anh ','Nam','0961122334','2'),
  ('175TH22',N'Nguyễn Thị Vân Anh',N'Nữ','0962233445','2'),
  ('175TH23',N'Lê Việt Anh ','Nam','096345645','2'),
  ('175TH24',N'Mai Đức Anh','Nam','0965645621','2'),
  ('175TH25',N'Nguyễn Ngọc Anh ',N'Nữ','0968975356','2'),
  ('175TH26',N'Đào Huy Bách','Nam','096324324','2'),
  ('175TH27',N'Lưu Trung Cường','Nam','09623423432','2'),
  ('175TH28',N'Dương Ngọc Danh ','Nam','09623546546','2'),
  ('175TH29',N'Phạm Việt Đức','Nam','09612313123','2'),
  ('175TH210',N'Trịnh Quốc Dũng','Nam','0967686778','2'),
  ('175TH211',N' Trần Thị Thùy Dương',N'Nữ','09645664','2'),
  ('175TH212',N'Phạm Hồng Giang ',N'Nữ','0963454366','2'),
  ('175TH213',N'Lê Thị Ngọc Hà',N'Nữ','096768686','2'),
  ('175TH214',N'Nguyễn Thị Thúy Hằng',N'Nữ','0962344234','2'),
  ('175TH215',N'Nguyễn Thị Thu Hạnh ',N'Nữ','09669797696','2'),
  ('175TH216',N'Trần Thị Hậu ',N'Nữ','096890085','2'),
  ('175TH217',N'Trần Thu Hiền',N'Nữ','096345435477','2'),
  ('175TH218',N'Phạm Trung Hiếu','Nam','0962324324','2'),
  ('175TH219',N'Triệu Xuân Hoa ','Nam','0965465464','2'),
  ('175TH220',N' Trần Huy Hoàng ','Nam','09678768657','2'),
  ('175TH221',N' Nguyễn Đức Hùng','Nam','096234323432','2'),
  ('175TH222',N'Nguyễn Thị Lan Hương',N'Nữ','0966546456','2'),
  ('175TH223',N' Đỗ Thị Ngọc Huyền',N'Nữ','096324234','2'),
  ('175TH224',N'Lê Thị Huyền ',N'Nữ','0962344234','2'),
  ('175TH225',N'Phạm Thị Huyền',N'Nữ','096123313','2'),
  ('175TH226',N'Phạm Đức Khôi','Nam','0961231321','2'),
  ('175TH227',N'Trần Thị La',N'Nữ','0961232131','2'),
  ('175TH228',N'Lý Thị Hương Lan',N'Nữ','09654353535','2'),
  ('175TH229',N'Cao Thị Linh ',N'Nữ','096232132131','2'),
  ('175TH230',N'Phùng Yến Linh ',N'Nữ','096654654654','2'),
  ('175TH231',N'Nguyễn Thị Thảo Linh',N'Nữ','096657657657','2'),
  ('175TH232',N'Trần Thế Long ','Nam','0965676574','2'),
  ('175TH233',N'Dương Khánh Ly','Nữ','09623424324','2'),
  ('175TH234',N'Nguyễn Lê Nguyệt Minh ','Nữ','09643543534','2'),
  ('175TH235',N'Nguyễn Thị Hà My',N'Nữ','096234424','2'),
  ('175TH236',N'Ngô Thị Ngân','Nữ','09623432432','2'),
  ('175TH237',N'Vũ Thị Ngát','Nữ','0961213213',2),
  ('175TH238','Đoàn Thị Như','Nữ','09654646465','2'),
  ('175TH31',N'Đặng Thị Huyền Anh',N'Nữ','01223424324','3'),
  ('175TH32',N'Đỗ Thị Tú Anh',N'Nữ','03423424324','3'),
  ('175TH33',N'Lê Nguyễn Quỳnh Anh',N'Nữ','05623424324','3'),
  ('175TH34',N'Đinh Hải Anh','Nam','096435324324','3'),
  ('175TH35',N'Vũ Thị Minh Ánh',N'Nữ','09435324324','3'),
  ('175TH36',N'Trần Văn Chất','Nam','0962334535324','3'),
  ('175TH37',N'Nguyễn Văn Cường','Nam','0966564654','3'),
  ('175TH38',N'Trần Thị Đào',N'Nữ','09623567574','3'),
  ('175TH39',N'Nguyễn Thị Thùy Dung',N'Nữ','096287868324','3'),
  ('175TH310',N'Đỗ Viết Dũng',N'Nữ','056734244','3'),
  ('175TH311',N'Phạm Thị Hải Dương',N'Nữ','05788645324',3),
  ('175TH312','Đỗ Quang Hà','Nam','09665775724','3'),
  ('175TH313',N'Ngô Thị Hằng', N'Nữ','45768624','3'),
  ('175TH314',N'Phạm Hồng Hải','Nam','032446424','3'),
  ('175TH315',N'Lê Hồng Hạnh', N'Nữ','0968784324','3'),
  ('175TH316',N'Đỗ Thị Thúy Hiền',N'Nữ' ,'096256324','3'),
  ('175TH317',N'Vũ Thúy Hiền', N'Nữ','0962765324','3'),
  ('175TH318',N'Đào Viết Hiếu','Nam','094524324','3'),
  ('175TH319',N'Hoàng Thị Thiện Hoa', N'Nữ','0923444324','3'),
  ('175TH320',N'Nguyễn Huy Hoàng', 'Nam','096645324','3'),
  ('175TH321',N'Nguyễn Thanh Hùng','Nam','09623424324','3'),
  ('175TH322',N'Lê Thị Lan Hương',N'Nữ','09654646324','3'),
  ('175TH323',N'Lê Thị Lan Hương',N'Nữ','0964564324','3'),
  ('175TH324',N'Nguyễn Thị Huyền',N'Nữ','045424324','3'),
  ('175TH325',N'Đỗ Văn Khải','Nam','0962398724','3'),
  ('175TH326',N'Phan Bá Khởi','Nam','096278668324','3'),
  ('175TH327',N'Phạm Ngọc Lăng','Nam','09567424324','3'),
  ('175TH328',N'Nguyễn Thị Thùy Linh',N'Nữ','096267757324','3'),
  ('175TH329',N'Trần Thị Linh',N'Nữ','0962566464324','3'),
  ('175TH330',N'Vũ Phương Linh',N'Nữ','093453454324','3'),
  ('175TH331',N'Phan Thị Linh',N'Nữ','09623453324','3'),
  ('175TH332',N'Nguyễn Hoàng Long', 'Nam','096233453524','3'),
  ('175TH333',N'Lưu Thị Mai',N'Nữ','09623454354','3'),
  ('175TH334',N'Đào Tiến Minh','Nam','096243535324','3'),
  ('175TH335',N'Vũ Ngọc Mỹ',N'Nữ','096232344234324','3'),
  ('175TH336',N'Trần Thị Kim Ngân',N'Nữ','0962342442324324','3'),
  ('175TH337',N'Trần Thị Ngát',N'Nữ',   '096456434324','3'),
  ('175TH338',N'Trần Hồng Nhung',N'Nữ',   '0962345646324','3'),
  ('175TH339',N'Bùi Thị Thu Phương',N'Nữ',   '096254654324','3'),
  ('175TH3340',N'Phùng Thu Phương',N'Nữ',   '0963454564','3');