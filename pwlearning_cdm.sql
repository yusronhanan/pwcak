/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     1/13/2018 1:32:17 AM                         */
/*==============================================================*/


drop table if exists BROADCAST;

drop table if exists COMMENT;

drop table if exists CONFIG;

drop table if exists COURSE_CONTENT;

drop table if exists COURSE_TITLE;

drop table if exists ENROLL_COURSE;

drop table if exists LIKE_COMMENT;

drop table if exists LIKE_COURSE;

drop table if exists NOTIFICATION;

drop table if exists SUBSCRIBE;

drop table if exists USER;

/*==============================================================*/
/* Table: BROADCAST                                             */
/*==============================================================*/
create table BROADCAST
(
   ID_BROADCAST         int not null,
   ID_USER              int,
   SUBJECT_BC           varchar(40),
   TEXT_BC              text,
   LINK                 text,
   THUMBNAIL_BC         text,
   CREATED_AT_BC        datetime,
   primary key (ID_BROADCAST)
);

/*==============================================================*/
/* Table: COMMENT                                               */
/*==============================================================*/
create table COMMENT
(
   ID_COMMENT           int not null,
   ID_TITLE             int,
   ID_USER              int,
   SUBJECT_C            varchar(40),
   TEXT_COMMENT         text,
   REPLY_ID             int,
   CREATED_AT_C         datetime,
   primary key (ID_COMMENT)
);

/*==============================================================*/
/* Table: CONFIG                                                */
/*==============================================================*/
create table CONFIG
(
   ID_CONFIG            int not null,
   ID_USER              int,
   TYPE_CON             varchar(50),
   TEXT_CON             text,
   IMG                  text,
   CREATED_AT_CON       datetime,
   LAST_UPDATE_CON      datetime,
   primary key (ID_CONFIG)
);

/*==============================================================*/
/* Table: COURSE_CONTENT                                        */
/*==============================================================*/
create table COURSE_CONTENT
(
   ID_COURSE            int not null,
   ID_TITLE             int,
   ID_USER              int,
   STEP_NUMBER          int,
   STEP_TITLE           varchar(40),
   CONTENT              text,
   CREATED_AT_CC        datetime,
   LAST_UPDATE_CC       datetime,
   primary key (ID_COURSE)
);

/*==============================================================*/
/* Table: COURSE_TITLE                                          */
/*==============================================================*/
create table COURSE_TITLE
(
   ID_TITLE             int not null,
   ID_USER              int,
   TITLE                varchar(200),
   SUBJECT_CT           varchar(40),
   DESCRIPTION          text,
   THUMBNAIL_CT         text,
   CREATED_AT_CT        datetime,
   LAST_UPDATE_CT       datetime,
   STATUS_CT            int,
   PICK                 int,
   VISITOR              int,
   RANDOM_CODE          varchar(11),
   primary key (ID_TITLE)
);

/*==============================================================*/
/* Table: ENROLL_COURSE                                         */
/*==============================================================*/
create table ENROLL_COURSE
(
   ID_ENROLL            int not null,
   ID_USER              int,
   ID_TITLE             int,
   CREATED_AT_EC        datetime,
   primary key (ID_ENROLL)
);

/*==============================================================*/
/* Table: LIKE_COMMENT                                          */
/*==============================================================*/
create table LIKE_COMMENT
(
   ID_LIKECOMMENT       int not null,
   ID_USER              int,
   ID_TITLE             int,
   TYPE_LC              varchar(50),
   CREATED_AT_LC        datetime,
   primary key (ID_LIKECOMMENT)
);

/*==============================================================*/
/* Table: LIKE_COURSE                                           */
/*==============================================================*/
create table LIKE_COURSE
(
   ID_LIKECOURSE        int not null,
   ID_TITLE             int,
   ID_USER              int,
   CREATED_AT_LCR       datetime,
   primary key (ID_LIKECOURSE)
);

/*==============================================================*/
/* Table: NOTIFICATION                                          */
/*==============================================================*/
create table NOTIFICATION
(
   ID_NOTIF             int not null,
   ID_USER              int,
   GET_ID               int,
   TYPE_N               varchar(50),
   STATUS_N             int,
   CREATED_AT_N         datetime,
   primary key (ID_NOTIF)
);

/*==============================================================*/
/* Table: SUBSCRIBE                                             */
/*==============================================================*/
create table SUBSCRIBE
(
   ID_SUBSCRIBE         int not null,
   ID_USER              int,
   FOR_ID               int,
   CREATED_AT_SC        datetime,
   primary key (ID_SUBSCRIBE)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null,
   EMAIL                varchar(200),
   USERNAME             varchar(40),
   PASSWORD             text,
   NAME                 text,
   CITY                 varchar(100),
   BIO                  text,
   STATUS_U             int,
   PHOTO                varchar(200),
   ROLE                 int,
   CREATED_AT_U         datetime,
   LAST_UPDATE_U        datetime,
   primary key (ID_USER)
);

alter table BROADCAST add constraint FK_RELATIONSHIP_9 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table COMMENT add constraint FK_RELATIONSHIP_12 foreign key (ID_TITLE)
      references COURSE_TITLE (ID_TITLE) on delete restrict on update restrict;

alter table COMMENT add constraint FK_RELATIONSHIP_3 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table CONFIG add constraint FK_RELATIONSHIP_10 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table COURSE_CONTENT add constraint FK_RELATIONSHIP_1 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table COURSE_CONTENT add constraint FK_RELATIONSHIP_11 foreign key (ID_TITLE)
      references COURSE_TITLE (ID_TITLE) on delete restrict on update restrict;

alter table COURSE_TITLE add constraint FK_RELATIONSHIP_5 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table ENROLL_COURSE add constraint FK_RELATIONSHIP_14 foreign key (ID_TITLE)
      references COURSE_TITLE (ID_TITLE) on delete restrict on update restrict;

alter table ENROLL_COURSE add constraint FK_RELATIONSHIP_6 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table LIKE_COMMENT add constraint FK_RELATIONSHIP_13 foreign key (ID_TITLE)
      references COURSE_TITLE (ID_TITLE) on delete restrict on update restrict;

alter table LIKE_COMMENT add constraint FK_RELATIONSHIP_2 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table LIKE_COURSE add constraint FK_RELATIONSHIP_15 foreign key (ID_TITLE)
      references COURSE_TITLE (ID_TITLE) on delete restrict on update restrict;

alter table LIKE_COURSE add constraint FK_RELATIONSHIP_7 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table NOTIFICATION add constraint FK_RELATIONSHIP_4 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table SUBSCRIBE add constraint FK_RELATIONSHIP_8 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

