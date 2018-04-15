/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  04/04/2018 17:16:19                      */
/*==============================================================*/


drop table if exists ami;

drop table if exists appartient;

drop table if exists groupe;

drop table if exists participe;

drop table if exists realise;

drop table if exists trajet;

drop table if exists traverse;

drop table if exists utilisateur;

drop table if exists ville;

drop table if exists voiture;

/*==============================================================*/
/* Table : ami                                                  */
/*==============================================================*/
create table ami
(
   nom_groupe           varchar(20) not null,
   id_user              int not null,
   primary key (nom_groupe)
);

/*==============================================================*/
/* Table : appartient                                           */
/*==============================================================*/
create table appartient
(
   id_user              int not null,
   nom_groupe           varchar(20) not null,
   primary key (id_user, nom_groupe)
);

/*==============================================================*/
/* Table : groupe                                               */
/*==============================================================*/
create table groupe
(
   nom_groupe           varchar(20) not null,
   nombre_personnes     int,
   type                 varchar(20),
   primary key (nom_groupe)
);

/*==============================================================*/
/* Table : participe                                            */
/*==============================================================*/
create table participe
(
   id_user              int not null,
   id_trajet            int not null,
   primary key (id_user, id_trajet)
);

/*==============================================================*/
/* Table : realise                                              */
/*==============================================================*/
create table realise
(
   nom_groupe           varchar(20) not null,
   id_trajet            int not null,
   primary key (nom_groupe, id_trajet)
);

/*==============================================================*/
/* Table : trajet                                               */
/*==============================================================*/
create table trajet
(
   id_trajet            int not null auto_increment,
   id_user              int,
   id_voiture           int not null,
   lieu_depart          varchar(30) not null,
   lieu_arrivee         varchar(30) not null,
   heure_depart         timestamp not null,
   nombre_places        int not null,
   heure_arrivee        timestamp not null,
   commentaire          varchar(500),
   primary key (id_trajet)
);

/*==============================================================*/
/* Table : traverse                                             */
/*==============================================================*/
create table traverse
(
   id_trajet            int not null,
   id_ville             int not null,
   primary key (id_trajet, id_ville)
);

/*==============================================================*/
/* Table : utilisateur                                          */
/*==============================================================*/
create table utilisateur
(
   id_user              int not null auto_increment,
   nom_user             varchar(30) not null,
   prenom_user          varchar(30) not null,
   password             char(50),
   est_admin            smallint not null,
   telephone            char(10) not null,
   email                varchar(70) not null,
   nombre_trajets_realises int,
   site                 varchar(20),
   type                 varchar(20),
   fonction             varchar(20),
   primary key (id_user)
);

/*==============================================================*/
/* Table : ville                                                */
/*==============================================================*/
create table ville
(
   id_ville             int not null auto_increment,
   nom_ville            varchar(30) not null,
   code_postal          char(5) not null,
   code_insee           char(5),
   primary key (id_ville)
);

/*==============================================================*/
/* Table : voiture                                              */
/*==============================================================*/
create table voiture
(
   id_voiture           int not null auto_increment,
   id_user              int not null,
   modele               varchar(20) not null,
   couleur              varchar(20),
   nombre_places        int not null,
   taille_bagage        varchar(10),
   primary key (id_voiture)
);

alter table ami add constraint FK_gerer foreign key (id_user)
      references utilisateur (id_user) on delete cascade on update cascade;

alter table ami add constraint FK_heritage_2 foreign key (nom_groupe)
      references groupe (nom_groupe) on delete cascade on update cascade;

alter table appartient add constraint FK_appartient foreign key (id_user)
      references utilisateur (id_user) on delete cascade on update cascade;

alter table appartient add constraint FK_appartient2 foreign key (nom_groupe)
      references groupe (nom_groupe) on delete cascade on update cascade;

alter table participe add constraint FK_participe foreign key (id_user)
      references utilisateur (id_user) on delete cascade on update cascade;

alter table participe add constraint FK_participe2 foreign key (id_trajet)
      references trajet (id_trajet) on delete cascade on update cascade;

alter table realise add constraint FK_realise foreign key (nom_groupe)
      references groupe (nom_groupe) on delete cascade on update cascade;

alter table realise add constraint FK_realise2 foreign key (id_trajet)
      references trajet (id_trajet) on delete cascade on update cascade;

alter table trajet add constraint FK_effacer foreign key (id_user)
      references utilisateur (id_user) on delete cascade on update cascade;

alter table trajet add constraint FK_fait foreign key (id_voiture)
      references voiture (id_voiture) on delete restrict on update cascade;

alter table trajet add constraint FK_propose foreign key (id_user)
      references utilisateur (id_user) on delete cascade on update cascade;

alter table traverse add constraint FK_traverse foreign key (id_trajet)
      references trajet (id_trajet) on delete cascade on update cascade;

alter table traverse add constraint FK_traverse2 foreign key (id_ville)
      references ville (id_ville) on delete restrict on update cascade;

alter table voiture add constraint FK_possede foreign key (id_user)
      references utilisateur (id_user) on delete cascade on update cascade;
