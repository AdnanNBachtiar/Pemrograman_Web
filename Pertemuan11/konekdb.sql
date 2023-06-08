create table if not exists user(
    id int(11) not null auto_increment,
    nama varchar(50) not null,
    alamat text not null,
    pekerjaan varchar(50) not null,
    primary key(id)
) engine=InnoDB default charset=Latin1 auto_increment=64;

-- dumping date for table 'user'

insert into user ('id', 'nama', 'alamat', 'pekerja') values
(1, 'andi', 'surabaya', 'web programing'),
(2, 'santoso', 'jakarta', 'web designer'),
(6, 'samsul', 'sumedang', 'pegawai');