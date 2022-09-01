create database grupkpop;
use grupkpop;

create table biodataanggota(
	id_kpop int primary key not null auto_increment,
	nama_kpop varchar(50) not null,
    jk_kpop char(1) not null,
    dob_kpop date not null,
    asalgrup_kpop varchar(50) not null
);


insert into biodataanggota VALUES
(1,'Choi Seung Cheol','L', '1995-08-08', 'Seventen'),
(2,'Yoon Jeong Han','L', '1995-10-04', 'Seventen');