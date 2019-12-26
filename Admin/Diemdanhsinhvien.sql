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
create table Teacher(
teacherCode int AUTO_INCREMENT PRIMARY KEY,
teacherName varchar(40) not null,
birthDay date ,
Phone char(10),
sex varchar(3),
level varchar(10)
);

create table User1(
userId int unsigned auto_increment not null primary key,
name varchar(50) character set utf8 collate utf8_unicode_ci not null,
password varchar(60) not null,
Email varchar(50),
Sdt varchar(11),
roleId int unsigned not null ,
activity bit not null,
verified INT(11) NOT NULL,
verification_code VARCHAR(200) NOT NULL,
created datetime NOT NULL,
teacher_ID int(11) not null,
foreign key(teacher_ID) references teacher(teacherCode),
foreign key(roleId) references role(roleId)
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
foreign key(ClassID) references classone(ClassID),
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

