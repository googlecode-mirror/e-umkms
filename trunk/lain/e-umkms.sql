/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     26/11/2012 19:50:13                          */
/*==============================================================*/


drop table if exists PEMBELI;

drop table if exists PEMBELIAN;

drop table if exists PENJUALAN;

drop table if exists PRODUK;

drop table if exists UMKM;

drop table if exists USER;

/*==============================================================*/
/* Table: PEMBELI                                               */
/*==============================================================*/
create table PEMBELI
(
   ID_USER              char(10) not null,
   FIRST_NAME_USER      varchar(15),
   LAST_NAME_USER       varchar(15),
   ALAMAT_USER          varchar(100),
   EMAIL_USER           varchar(20),
   PASSWORD_USER        char(6),
   HAK_AKSES            bool,
   NO_KTP_PB            char(20),
   NO_REK_PB            char(20),
   primary key (ID_USER)
);

/*==============================================================*/
/* Table: PEMBELIAN                                             */
/*==============================================================*/
create table PEMBELIAN
(
   ID_BELI              char(10) not null,
   ID_USER              char(10) not null,
   JUMLAH_BELI          int,
   TOTAL_HARGA          float(8,2),
   TANGGAL_BELI         datetime,
   primary key (ID_BELI)
);

/*==============================================================*/
/* Table: PENJUALAN                                             */
/*==============================================================*/
create table PENJUALAN
(
   ID_JUAL              char(10) not null,
   ID_USER              char(10) not null,
   BANYAK_JUAL          int,
   HARGA_JUAL           float(8,2),
   TANGGAL_JUAL         datetime,
   primary key (ID_JUAL)
);

/*==============================================================*/
/* Table: PRODUK                                                */
/*==============================================================*/
create table PRODUK
(
   ID_PRODUK            char(10) not null,
   ID_BELI              char(10) not null,
   ID_JUAL              char(10) not null,
   NAMA_PRODUK          varchar(30),
   KATEGORI_PRODUK      varchar(20),
   HARGA_PRODUK         int,
   GAMBAR_PRODUK        longblob,
   DESKRIPSI_PRODUK     text,
   primary key (ID_PRODUK)
);

/*==============================================================*/
/* Table: UMKM                                                  */
/*==============================================================*/
create table UMKM
(
   ID_USER              char(10) not null,
   FIRST_NAME_USER      varchar(15),
   LAST_NAME_USER       varchar(15),
   ALAMAT_USER          varchar(100),
   EMAIL_USER           varchar(20),
   PASSWORD_USER        char(6),
   HAK_AKSES            bool,
   NO_REK_UMKM          char(20),
   NO_IJIN_USAHA        varchar(30),
   primary key (ID_USER)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              char(10) not null,
   FIRST_NAME_USER      varchar(15),
   LAST_NAME_USER       varchar(15),
   ALAMAT_USER          varchar(100),
   EMAIL_USER           varchar(20),
   PASSWORD_USER        char(6),
   HAK_AKSES            bool,
   primary key (ID_USER)
);

alter table PEMBELI add constraint FK_INHERITANCE_2 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table PEMBELIAN add constraint FK_RELATIONSHIP_2 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table PENJUALAN add constraint FK_RELATIONSHIP_1 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table PRODUK add constraint FK_RELATIONSHIP_4 foreign key (ID_BELI)
      references PEMBELIAN (ID_BELI) on delete restrict on update restrict;

alter table PRODUK add constraint FK_RELATIONSHIP_7 foreign key (ID_JUAL)
      references PENJUALAN (ID_JUAL) on delete restrict on update restrict;

alter table UMKM add constraint FK_INHERITANCE_4 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

