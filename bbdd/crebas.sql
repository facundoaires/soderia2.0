/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     28/6/2023 21:55:39                           */
/*==============================================================*/


drop table if exists ARTICULO;

drop table if exists CATEGORIAPERSONA;

drop table if exists CUENTA_CORRIENTE;

drop table if exists DETALLEFACTURA;

drop table if exists DETALLEPAGOFACTURA;

drop table if exists FACTURA;

drop table if exists LOCALIDADPERSONA;

drop table if exists PAGOFACTURA;

drop table if exists PERSONA;

/*==============================================================*/
/* Table: ARTICULO                                              */
/*==============================================================*/
create table ARTICULO
(
   IDARTICULO           int not null auto_increment,
   DETALLEARTICULO      char(30),
   TIPOARTICULO         char(15),
   PRECIOARTICULO_DETALLEART numeric(8,0),
   ENTRADAARTICULO      numeric(8,0),
   SALIDAARTICULO       numeric(8,0),
   STOCK                numeric(8,0),
   primary key (IDARTICULO)
);

/*==============================================================*/
/* Table: CATEGORIAPERSONA                                      */
/*==============================================================*/
create table CATEGORIAPERSONA
(
   IDCATEGORIAPERSONA   int not null auto_increment,
   CONTRASENAPERSONA    char(10),
   TIPOPERSONA          numeric(8,0),
   USUARIOPERSONA       varchar(256),
   primary key (IDCATEGORIAPERSONA)
);

/*==============================================================*/
/* Table: CUENTA_CORRIENTE                                      */
/*==============================================================*/
create table CUENTA_CORRIENTE
(
   ID_CTACTE            int not null,
   primary key (ID_CTACTE)
);

/*==============================================================*/
/* Table: DETALLEFACTURA                                        */
/*==============================================================*/
create table DETALLEFACTURA
(
   IDDETALLEFACTURA     int not null auto_increment,
   IDFACTURA            int not null,
   IDDETALLEPAGO        int,
   IDARTICULO           int,
   PRECIOARTICULO_DETALLEART numeric(8,0),
   CANTIDADARTICULO     numeric(8,0),
   primary key (IDDETALLEFACTURA)
);

/*==============================================================*/
/* Table: DETALLEPAGOFACTURA                                    */
/*==============================================================*/
create table DETALLEPAGOFACTURA
(
   IDDETALLEPAGO        int not null,
   IDDETALLEFACTURA     int,
   CANTIDADARTICULOPAGO int,
   primary key (IDDETALLEPAGO)
);

/*==============================================================*/
/* Table: FACTURA                                               */
/*==============================================================*/
create table FACTURA
(
   NUMFACTURA           int not null,
   IDFACTURA            int not null,
   ID_CTACTE            int,
   IDPAGOFACTURA        int,
   IDPERSONA            int,
   FECHAFACTURA         date,
   TIPOCOMPRA_VENTA     numeric(8,0),
   TOTALFACTURA         numeric(8,0),
   CLIENTEFACTURA       char(30),
   primary key (IDFACTURA)
);

/*==============================================================*/
/* Table: LOCALIDADPERSONA                                      */
/*==============================================================*/
create table LOCALIDADPERSONA
(
   IDLOCALIDAD          int not null auto_increment,
   IDPERSONA            int,
   LOCALIDAD            char(256),
   PROVINCIA            char(256),
   primary key (IDLOCALIDAD)
);

/*==============================================================*/
/* Table: PAGOFACTURA                                           */
/*==============================================================*/
create table PAGOFACTURA
(
   IDPAGOFACTURA        int not null,
   ID_CTACTE            int,
   IDPERSONA            int,
   IDFACTURA            int,
   FECHAPAGOFACTURA     date,
   DINERORENDIDO        float,
   MERCADERIADEVUELTA   float,
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
   primary key (IDPERSONA)
);

alter table DETALLEFACTURA add constraint FK_DETALLEFACTURA_ARTICULO foreign key (IDARTICULO)
      references ARTICULO (IDARTICULO) on delete restrict on update restrict;

alter table DETALLEFACTURA add constraint FK_FACTURA_DETALLEFACTURA foreign key (IDFACTURA)
      references FACTURA (IDFACTURA) on delete restrict on update restrict;

alter table DETALLEFACTURA add constraint FK_RELATIONSHIP_13 foreign key (IDDETALLEPAGO)
      references DETALLEPAGOFACTURA (IDDETALLEPAGO) on delete restrict on update restrict;

alter table DETALLEPAGOFACTURA add constraint FK_RELATIONSHIP_12 foreign key (IDDETALLEFACTURA)
      references DETALLEFACTURA (IDDETALLEFACTURA) on delete restrict on update restrict;

alter table FACTURA add constraint FK_PERSONA_FACTURA foreign key (IDPERSONA)
      references PERSONA (IDPERSONA) on delete restrict on update restrict;

alter table FACTURA add constraint FK_RELATIONSHIP_11 foreign key (IDPAGOFACTURA)
      references PAGOFACTURA (IDPAGOFACTURA) on delete restrict on update restrict;

alter table FACTURA add constraint FK_RELATIONSHIP_7 foreign key (ID_CTACTE)
      references CUENTA_CORRIENTE (ID_CTACTE) on delete restrict on update restrict;

alter table LOCALIDADPERSONA add constraint FK_PERSONA_LOCALIDADPERSONA foreign key (IDPERSONA)
      references PERSONA (IDPERSONA) on delete restrict on update restrict;

alter table PAGOFACTURA add constraint FK_RELATIONSHIP_10 foreign key (IDFACTURA)
      references FACTURA (IDFACTURA) on delete restrict on update restrict;

alter table PAGOFACTURA add constraint FK_RELATIONSHIP_8 foreign key (IDPERSONA)
      references PERSONA (IDPERSONA) on delete restrict on update restrict;

alter table PAGOFACTURA add constraint FK_RELATIONSHIP_9 foreign key (ID_CTACTE)
      references CUENTA_CORRIENTE (ID_CTACTE) on delete restrict on update restrict;

alter table PERSONA add constraint FK_PERSONA_CATEGORIA foreign key (IDCATEGORIAPERSONA)
      references CATEGORIAPERSONA (IDCATEGORIAPERSONA) on delete restrict on update restrict;

