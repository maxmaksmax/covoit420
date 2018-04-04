/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 10                        */
/* Date de création :  14/03/2018 15:15:22                      */
/*==============================================================*/


if exists(select 1 from sys.sysforeignkey where role='FK_AMI_GERER_UTILISAT') then
    alter table ami
       delete foreign key FK_AMI_GERER_UTILISAT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_AMI_HERITAGE__GROUPE') then
    alter table ami
       delete foreign key FK_AMI_HERITAGE__GROUPE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_APPARTIE_APPARTIEN_UTILISAT') then
    alter table appartient
       delete foreign key FK_APPARTIE_APPARTIEN_UTILISAT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_APPARTIE_APPARTIEN_GROUPE') then
    alter table appartient
       delete foreign key FK_APPARTIE_APPARTIEN_GROUPE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PARTICIP_PARTICIPE_UTILISAT') then
    alter table participe
       delete foreign key FK_PARTICIP_PARTICIPE_UTILISAT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_PARTICIP_PARTICIPE_TRAJET') then
    alter table participe
       delete foreign key FK_PARTICIP_PARTICIPE_TRAJET
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_REALISE_REALISE_GROUPE') then
    alter table realise
       delete foreign key FK_REALISE_REALISE_GROUPE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_REALISE_REALISE2_TRAJET') then
    alter table realise
       delete foreign key FK_REALISE_REALISE2_TRAJET
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TRAJET_EFFACER_UTILISAT') then
    alter table trajet
       delete foreign key FK_TRAJET_EFFACER_UTILISAT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TRAJET_FAIT_VOITURE') then
    alter table trajet
       delete foreign key FK_TRAJET_FAIT_VOITURE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TRAJET_PROPOSE_UTILISAT') then
    alter table trajet
       delete foreign key FK_TRAJET_PROPOSE_UTILISAT
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TRAVERSE_TRAVERSE_TRAJET') then
    alter table traverse
       delete foreign key FK_TRAVERSE_TRAVERSE_TRAJET
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_TRAVERSE_TRAVERSE2_VILLE') then
    alter table traverse
       delete foreign key FK_TRAVERSE_TRAVERSE2_VILLE
end if;

if exists(select 1 from sys.sysforeignkey where role='FK_VOITURE_POSSEDE_UTILISAT') then
    alter table voiture
       delete foreign key FK_VOITURE_POSSEDE_UTILISAT
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='GERER_FK'
     and t.table_name='ami'
) then
   drop index ami.GERER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='AMI_PK'
     and t.table_name='ami'
) then
   drop index ami.AMI_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ami'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ami
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='APPARTIENT2_FK'
     and t.table_name='appartient'
) then
   drop index appartient.APPARTIENT2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='APPARTIENT_FK'
     and t.table_name='appartient'
) then
   drop index appartient.APPARTIENT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='APPARTIENT_PK'
     and t.table_name='appartient'
) then
   drop index appartient.APPARTIENT_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='appartient'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table appartient
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='GROUPE_PK'
     and t.table_name='groupe'
) then
   drop index groupe.GROUPE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='groupe'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table groupe
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PARTICIPE2_FK'
     and t.table_name='participe'
) then
   drop index participe.PARTICIPE2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PARTICIPE_FK'
     and t.table_name='participe'
) then
   drop index participe.PARTICIPE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PARTICIPE_PK'
     and t.table_name='participe'
) then
   drop index participe.PARTICIPE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='participe'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table participe
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='REALISE2_FK'
     and t.table_name='realise'
) then
   drop index realise.REALISE2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='REALISE_FK'
     and t.table_name='realise'
) then
   drop index realise.REALISE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='REALISE_PK'
     and t.table_name='realise'
) then
   drop index realise.REALISE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='realise'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table realise
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='EFFACER_FK'
     and t.table_name='trajet'
) then
   drop index trajet.EFFACER_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='FAIT_FK'
     and t.table_name='trajet'
) then
   drop index trajet.FAIT_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='PROPOSE_FK'
     and t.table_name='trajet'
) then
   drop index trajet.PROPOSE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TRAJET_PK'
     and t.table_name='trajet'
) then
   drop index trajet.TRAJET_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='trajet'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table trajet
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TRAVERSE2_FK'
     and t.table_name='traverse'
) then
   drop index traverse.TRAVERSE2_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TRAVERSE_FK'
     and t.table_name='traverse'
) then
   drop index traverse.TRAVERSE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='TRAVERSE_PK'
     and t.table_name='traverse'
) then
   drop index traverse.TRAVERSE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='traverse'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table traverse
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='UTILISATEUR_PK'
     and t.table_name='utilisateur'
) then
   drop index utilisateur.UTILISATEUR_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='utilisateur'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table utilisateur
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VILLE_PK'
     and t.table_name='ville'
) then
   drop index ville.VILLE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ville'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ville
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='POSSEDE_FK'
     and t.table_name='voiture'
) then
   drop index voiture.POSSEDE_FK
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='VOITURE_PK'
     and t.table_name='voiture'
) then
   drop index voiture.VOITURE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='voiture'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table voiture
end if;

if exists(select 1 from sys.sysusertype where type_name='id') then
   drop domain id
end if;

if exists(select 1 from sys.sysusertype where type_name='noms_et_prenoms') then
   drop domain noms_et_prenoms
end if;

/*==============================================================*/
/* Domaine : id                                                 */
/*==============================================================*/
create domain id as integer not null;

/*==============================================================*/
/* Domaine : noms_et_prenoms                                    */
/*==============================================================*/
create domain noms_et_prenoms as varchar(30);

/*==============================================================*/
/* Table : ami                                                  */
/*==============================================================*/
create table ami 
(
   nom_groupe           varchar(20)                    not null,
   id_user              integer                        not null,
   constraint PK_AMI primary key clustered (nom_groupe)
);

/*==============================================================*/
/* Index : AMI_PK                                               */
/*==============================================================*/
create unique clustered index AMI_PK on ami (
nom_groupe ASC
);

/*==============================================================*/
/* Index : GERER_FK                                             */
/*==============================================================*/
create index GERER_FK on ami (
id_user ASC
);

/*==============================================================*/
/* Table : appartient                                           */
/*==============================================================*/
create table appartient 
(
   id_user              integer                        not null,
   nom_groupe           varchar(20)                    not null,
   constraint PK_APPARTIENT primary key clustered (id_user, nom_groupe)
);

/*==============================================================*/
/* Index : APPARTIENT_PK                                        */
/*==============================================================*/
create unique clustered index APPARTIENT_PK on appartient (
id_user ASC,
nom_groupe ASC
);

/*==============================================================*/
/* Index : APPARTIENT_FK                                        */
/*==============================================================*/
create index APPARTIENT_FK on appartient (
id_user ASC
);

/*==============================================================*/
/* Index : APPARTIENT2_FK                                       */
/*==============================================================*/
create index APPARTIENT2_FK on appartient (
nom_groupe ASC
);

/*==============================================================*/
/* Table : groupe                                               */
/*==============================================================*/
create table groupe 
(
   nom_groupe           varchar(20)                    not null,
   nombre_personnes     integer                        null,
   type                 varchar(20)                    null
      constraint CKC_TYPE_GROUPE check (type is null or (type in ('agent','etudiant'))),
   constraint PK_GROUPE primary key (nom_groupe)
);

/*==============================================================*/
/* Index : GROUPE_PK                                            */
/*==============================================================*/
create unique index GROUPE_PK on groupe (
nom_groupe ASC
);

/*==============================================================*/
/* Table : participe                                            */
/*==============================================================*/
create table participe 
(
   id_user              integer                        not null,
   id_trajet            id                             not null,
   constraint PK_PARTICIPE primary key clustered (id_user, id_trajet)
);

/*==============================================================*/
/* Index : PARTICIPE_PK                                         */
/*==============================================================*/
create unique clustered index PARTICIPE_PK on participe (
id_user ASC,
id_trajet ASC
);

/*==============================================================*/
/* Index : PARTICIPE_FK                                         */
/*==============================================================*/
create index PARTICIPE_FK on participe (
id_user ASC
);

/*==============================================================*/
/* Index : PARTICIPE2_FK                                        */
/*==============================================================*/
create index PARTICIPE2_FK on participe (
id_trajet ASC
);

/*==============================================================*/
/* Table : realise                                              */
/*==============================================================*/
create table realise 
(
   nom_groupe           varchar(20)                    not null,
   id_trajet            id                             not null,
   constraint PK_REALISE primary key clustered (nom_groupe, id_trajet)
);

/*==============================================================*/
/* Index : REALISE_PK                                           */
/*==============================================================*/
create unique clustered index REALISE_PK on realise (
nom_groupe ASC,
id_trajet ASC
);

/*==============================================================*/
/* Index : REALISE_FK                                           */
/*==============================================================*/
create index REALISE_FK on realise (
nom_groupe ASC
);

/*==============================================================*/
/* Index : REALISE2_FK                                          */
/*==============================================================*/
create index REALISE2_FK on realise (
id_trajet ASC
);

/*==============================================================*/
/* Table : trajet                                               */
/*==============================================================*/
create table trajet 
(
   id_trajet            id                             not null,
   id_user              integer                        null,
   id_voiture           id                             not null,
   lieu_depart          varchar(30)                    not null,
   lieu_arrivee         varchar(30)                    not null,
   heure_depart         timestamp                      not null,
   nombre_places        integer                        not null,
   heure_arrivee        timestamp                      not null,
   commentaire          varchar(500)                   null,
   constraint PK_TRAJET primary key (id_trajet)
);

/*==============================================================*/
/* Index : TRAJET_PK                                            */
/*==============================================================*/
create unique index TRAJET_PK on trajet (
id_trajet ASC
);

/*==============================================================*/
/* Index : PROPOSE_FK                                           */
/*==============================================================*/
create index PROPOSE_FK on trajet (
id_user ASC
);

/*==============================================================*/
/* Index : FAIT_FK                                              */
/*==============================================================*/
create index FAIT_FK on trajet (
id_voiture ASC
);

/*==============================================================*/
/* Index : EFFACER_FK                                           */
/*==============================================================*/
create index EFFACER_FK on trajet (
id_user ASC
);

/*==============================================================*/
/* Table : traverse                                             */
/*==============================================================*/
create table traverse 
(
   id_trajet            id                             not null,
   id_ville             id                             not null,
   constraint PK_TRAVERSE primary key clustered (id_trajet, id_ville)
);

/*==============================================================*/
/* Index : TRAVERSE_PK                                          */
/*==============================================================*/
create unique clustered index TRAVERSE_PK on traverse (
id_trajet ASC,
id_ville ASC
);

/*==============================================================*/
/* Index : TRAVERSE_FK                                          */
/*==============================================================*/
create index TRAVERSE_FK on traverse (
id_trajet ASC
);

/*==============================================================*/
/* Index : TRAVERSE2_FK                                         */
/*==============================================================*/
create index TRAVERSE2_FK on traverse (
id_ville ASC
);

/*==============================================================*/
/* Table : utilisateur                                          */
/*==============================================================*/
create table utilisateur 
(
   id_user              integer                        not null,
   nom_user             noms_et_prenoms                not null,
   prenom_user          noms_et_prenoms                not null,
   password             char(50)                       null,
   est_admin            smallint                       not null,
   telephone            char(10)                       not null,
   email                varchar(70)                    not null,
   nombre_trajets_realises integer                        null,
   site                 varchar(20)                    not null
      constraint CKC_SITE_UTILISAT check (site in ('Lille','Douai')),
   type                 varchar(20)                    null
      constraint CKC_TYPE_UTILISAT check (type is null or (type in ('agent','etudiant'))),
   fonction             varchar(20)                    null,
   constraint PK_UTILISATEUR primary key (id_user)
);

/*==============================================================*/
/* Index : UTILISATEUR_PK                                       */
/*==============================================================*/
create unique index UTILISATEUR_PK on utilisateur (
id_user ASC
);

/*==============================================================*/
/* Table : ville                                                */
/*==============================================================*/
create table ville 
(
   id_ville             id                             not null,
   nom_ville            varchar(30)                    not null,
   code_postal          char(5)                        not null,
   code_insee           char(5)                        null,
   constraint PK_VILLE primary key (id_ville)
);

/*==============================================================*/
/* Index : VILLE_PK                                             */
/*==============================================================*/
create unique index VILLE_PK on ville (
id_ville ASC
);

/*==============================================================*/
/* Table : voiture                                              */
/*==============================================================*/
create table voiture 
(
   id_voiture           id                             not null,
   id_user              integer                        not null,
   modele               varchar(20)                    not null,
   couleur              varchar(20)                    null,
   nombre_places        integer                        not null,
   taille_bagage        varchar(10)                    null
      constraint CKC_TAILLE_BAGAGE_VOITURE check (taille_bagage is null or (taille_bagage in ('petit','moyen','gros'))),
   constraint PK_VOITURE primary key (id_voiture)
);

/*==============================================================*/
/* Index : VOITURE_PK                                           */
/*==============================================================*/
create unique index VOITURE_PK on voiture (
id_voiture ASC
);

/*==============================================================*/
/* Index : POSSEDE_FK                                           */
/*==============================================================*/
create index POSSEDE_FK on voiture (
id_user ASC
);

alter table ami
   add constraint FK_AMI_GERER_UTILISAT foreign key (id_user)
      references utilisateur (id_user)
      on update restrict
      on delete restrict;

alter table ami
   add constraint FK_AMI_HERITAGE__GROUPE foreign key (nom_groupe)
      references groupe (nom_groupe)
      on update restrict
      on delete restrict;

alter table appartient
   add constraint FK_APPARTIE_APPARTIEN_UTILISAT foreign key (id_user)
      references utilisateur (id_user)
      on update restrict
      on delete restrict;

alter table appartient
   add constraint FK_APPARTIE_APPARTIEN_GROUPE foreign key (nom_groupe)
      references groupe (nom_groupe)
      on update restrict
      on delete restrict;

alter table participe
   add constraint FK_PARTICIP_PARTICIPE_UTILISAT foreign key (id_user)
      references utilisateur (id_user)
      on update restrict
      on delete restrict;

alter table participe
   add constraint FK_PARTICIP_PARTICIPE_TRAJET foreign key (id_trajet)
      references trajet (id_trajet)
      on update restrict
      on delete restrict;

alter table realise
   add constraint FK_REALISE_REALISE_GROUPE foreign key (nom_groupe)
      references groupe (nom_groupe)
      on update restrict
      on delete restrict;

alter table realise
   add constraint FK_REALISE_REALISE2_TRAJET foreign key (id_trajet)
      references trajet (id_trajet)
      on update restrict
      on delete restrict;

alter table trajet
   add constraint FK_TRAJET_EFFACER_UTILISAT foreign key (id_user)
      references utilisateur (id_user)
      on update restrict
      on delete restrict;

alter table trajet
   add constraint FK_TRAJET_FAIT_VOITURE foreign key (id_voiture)
      references voiture (id_voiture)
      on update restrict
      on delete restrict;

alter table trajet
   add constraint FK_TRAJET_PROPOSE_UTILISAT foreign key (id_user)
      references utilisateur (id_user)
      on update restrict
      on delete restrict;

alter table traverse
   add constraint FK_TRAVERSE_TRAVERSE_TRAJET foreign key (id_trajet)
      references trajet (id_trajet)
      on update restrict
      on delete restrict;

alter table traverse
   add constraint FK_TRAVERSE_TRAVERSE2_VILLE foreign key (id_ville)
      references ville (id_ville)
      on update restrict
      on delete restrict;

alter table voiture
   add constraint FK_VOITURE_POSSEDE_UTILISAT foreign key (id_user)
      references utilisateur (id_user)
      on update restrict
      on delete restrict;

