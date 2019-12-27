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
CREATE TABLE classone_subject(
ID int AUTO_INCREMENT not null PRIMARY KEY,
ClassID int unsigned,
SubjectID int unsigned not null,
foreign key(ClassID) references classone(ClassID),
foreign key(SubjectID) references Subject(SubjectID)
);

create table attend(
ID int unsign not null AUTO_INCREMENT primary key,
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
)

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



--role--

Insert Into Role('roleName')
Values ('Admin'),

--users-- ko cần chèn bảng này nưa
INSERT INTO 'users' ('name', 'password', 'Email', 'Sdt', 'roleId', 'activity', 'verified', 'verification_code', 'created') 
VALUES 		  ('Admin','admin',NULL,NULL,'1',b'1',NULL,NULL,current_timestamp()),
		  ('Kiều Tuấn Dũng', '123123',NULL,NULL,'2',b'1',NULL,NULL,current_timestamp());




--teacher-- Chèn Bảng này
INSERT INTO 'Teacher' ('teacherName','birthDay','Phone','sex','level')
Values  ('Kiều Tuấn Dũng','01/01/1980','0123456789','Nam','Thạc Sĩ'),
	('Kiều Tuấn Dũng','01/01/1980','0123456789','Nam','Thạc Sĩ')


--Class--  ko cần chèn bảng này nưa
Insert Into 'ClassOne' ('ClassName')
Values ('59TH1'),('59TH2),('59TH3),('59HT),('59PM1),('59PM2)

--Subject-- Chèn bảng này thêm vài môn
Insert into Subject ('nameSubject')
Values ('Cơ sở dữ liệu'),('Hệ Quản trị Cơ sở dữ liệu'),('Lý thuyết tính toán'),

create table Student(
StudentCode char(15) not null primary key,
name varchar(30) not null,
sex varchar(3),
phone char(10),
ClassID int unsigned not null,
foreign key(ClassID) references ClassOne(ClassID)
);
--Student-- Chèn bảng này khoảng 50 Sinh Viên Cai nào ko có thì cho giá trị là Null
Insert Into Student('StudentCode','name','sex','phone','ClassID')
Values ('175A071398','Bùi Văn Đức','nam','0963798280','1'),
	('175A071398','Bùi Văn Đức','nam',NULL,'1'),