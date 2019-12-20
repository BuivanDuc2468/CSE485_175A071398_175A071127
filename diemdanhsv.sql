create database diemdanh
go
use diemdanh

go
create table nguoidung(
Id int unsigned auto_increment NOT NULL primary key,
Hoten varchar(50) character set utf8 collate utf8_unicode_ci notnull,
Matkhau varchar(30) not null,
Email varchar(50) not null,
Ngaysinh date not null,
Sdt varchar(11) not null,
NgayDB date not null
);
go
create table khoa(
Makhoa int unsigned auto_increment not null primary key,
Tenkhoa varchar(50) character set utf8 collate utf8_unicode_ci not null
);
go
create table mon(
Mamon int unsigned auto_increment not null primary key,
Tenmon varchar(50) character set utf8 collate utf8_unicode_ci not null
);
go
create table lop(
Lop varchar(10) not null primary key,
Makhoa int unsigned not null,
foreign key(Makhoa) references khoa(Makhoa)
);
go
create table sinhvien(
Id int unsigned not null,
Masv char(15) not null primary key,
Khoa int not null,
Lop varchar(10) not null,
NgayKT date not null,
foreign key(Id) references nguoidung(Id),
foreign key(Lop) references lop(Lop)
);
go
create table gv_vc(
Id int unsigned not null,
Taikhoan varchar(30) not null primary key,
Makhoa int unsigned,
Mamon  int unsigned,
foreign key(Id) references nguoidung(Id),
foreign key(Makhoa) references khoa(Makhoa),
foreign key(Mamon) references mon(Mamon)
);
go
create table phanquyen(
Id int unsigned not null,
Quyen char(5) not null,
foreign key(Id) references nguoidung(Id)
);

