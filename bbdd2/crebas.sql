/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     17/7/2023 17:54:15                           */
/*==============================================================*/


drop table if exists ARTICULO;

drop table if exists CATEGORIAPERSONA;

drop table if exists DETALLEFACTURA;

drop table if exists DETALLEPAGOFACTURA;

drop table if exists DINEROEFECTIVO;

drop table if exists FACTURA;

drop table if exists PAGOFACTURA;

drop table if exists PERSONA;

/*==============================================================*/
/* Table: ARTICULO                                              */
/*==============================================================*/
create table ARTICULO
(
   IDARTICULO           int not null auto_increment,
   NOMBREARTICULO       char(30),
   PRECIOARTICULODETALLE numeric(8,0),
   primary key (IDARTICULO)
);

/*==============================================================*/
/* Table: CATEGORIAPERSONA                                      */
/*==============================================================*/
create table CATEGORIAPERSONA
(
   IDCATEGORIAPERSONA   int not null auto_increment,
   TIPOPERSONA          numeric(8,0),
   primary key (IDCATEGORIAPERSONA)
);

/*==============================================================*/
/* Table: DETALLEFACTURA                                        */
/*==============================================================*/
create table DETALLEFACTURA
(
   IDDETALLEFACTURA     int not null auto_increment,
   IDFACTURA            int not null,
   IDARTICULO           int,
   PRECIOARTICULODETALLE numeric(8,0),
   CANTIDADARTICULO     numeric(8,0),
   primary key (IDDETALLEFACTURA)
);

/*==============================================================*/
/* Table: DETALLEPAGOFACTURA                                    */
/*==============================================================*/
create table DETALLEPAGOFACTURA
(
   IDDETALLEPAGO        int not null,
   IDPAGOFACTURA        int,
   IDARTICULO           int,
   CANTIDADARTICULOPAGO int,
   PRECIOARTICULOPAGO   float,
   primary key (IDDETALLEPAGO)
);

/*==============================================================*/
/* Table: DINEROEFECTIVO                                        */
/*==============================================================*/
create table DINEROEFECTIVO
(
   ID_DINEROEFECTIVO    int not null,
   CANTIDADDINERO       float,
   primary key (ID_DINEROEFECTIVO)
);

/*==============================================================*/
/* Table: FACTURA                                               */
/*==============================================================*/
create table FACTURA
(
   NUMFACTURA           int not null,
   IDFACTURA            int not null,
   IDPERSONA            int,
   IDPAGOFACTURA        int,
   ID_DINEROEFECTIVO    int,
   FECHAFACTURA         date,
   TIPOCOMPRA_VENTA     numeric(8,0),
   TOTALFACTURA         numeric(8,0),
   CLIENTEFACTURA       char(30),
   primary key (IDFACTURA)
);

/*==============================================================*/
/* Table: PAGOFACTURA                                           */
/*==============================================================*/
create table PAGOFACTURA
(
   IDPAGOFACTURA        int not null,
   IDPERSONA            int,
   IDFACTURA            int,
   ID_DINEROEFECTIVO    int,
   FECHAPAGOFACTURA     date,
   TOTALPAGOFACTURA     float,
   primary key (IDPAGOFACTURA)
);

/*==============================================================*/
/* Table: PERSONA                                               */
/*==============================================================*/
create table PERSONA
(
   IDPERSONA            int not null auto_increment,
   IDCATEGORIAPERSONA   int,
   NOMBREPERSONA        char(20),
   CUILPERSONA          numeric(8,0),
   DOMICILIOPERSONA     char(60),
   TELEFONOPERSONA      numeric(8,0),
   USUARIOPERSONA       varchar(256),
   CONTRASENAPERSONA    char(10),
   primary key (IDPERSONA)
);

alter table DETALLEFACTURA add constraint FK_DETALLEFACTURA_ARTICULO foreign key (IDARTICULO)
      references ARTICULO (IDARTICULO) on delete restrict on update restrict;

alter table DETALLEFACTURA add constraint FK_FACTURA_DETALLEFACTURA foreign key (IDFACTURA)
      references FACTURA (IDFACTURA) on delete restrict on update restrict;

alter table DETALLEPAGOFACTURA add constraint FK_RELATIONSHIP_11 foreign key (IDARTICULO)
      references ARTICULO (IDARTICULO) on delete restrict on update restrict;

alter table DETALLEPAGOFACTURA add constraint FK_RELATIONSHIP_9 foreign key (IDPAGOFACTURA)
      references PAGOFACTURA (IDPAGOFACTURA) on delete restrict on update restrict;

alter table FACTURA add constraint FK_PERSONA_FACTURA foreign key (IDPERSONA)
      references PERSONA (IDPERSONA) on delete restrict on update restrict;

alter table FACTURA add constraint FK_RELATIONSHIP_13 foreign key (ID_DINEROEFECTIVO)
      references DINEROEFECTIVO (ID_DINEROEFECTIVO) on delete restrict on update restrict;

alter table FACTURA add constraint FK_RELATIONSHIP_14 foreign key (IDPAGOFACTURA)
      references PAGOFACTURA (IDPAGOFACTURA) on delete restrict on update restrict;

alter table PAGOFACTURA add constraint FK_RELATIONSHIP_10 foreign key (IDFACTURA)
      references FACTURA (IDFACTURA) on delete restrict on update restrict;

alter table PAGOFACTURA add constraint FK_RELATIONSHIP_12 foreign key (ID_DINEROEFECTIVO)
      references DINEROEFECTIVO (ID_DINEROEFECTIVO) on delete restrict on update restrict;

alter table PAGOFACTURA add constraint FK_RELATIONSHIP_8 foreign key (IDPERSONA)
      references PERSONA (IDPERSONA) on delete restrict on update restrict;

alter table PERSONA add constraint FK_PERSONA_CATEGORIA foreign key (IDCATEGORIAPERSONA)
      references CATEGORIAPERSONA (IDCATEGORIAPERSONA) on delete restrict on update restrict;

