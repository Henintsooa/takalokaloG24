create database takalo;
use takalo;

create table User(
    idUser int NOT NULL auto_increment,
    nom VARCHAR(200),
    mail VARCHAR(100),
    password VARCHAR(100),
    type int,
    PRIMARY key (idUser)
);
INSERT INTO User VALUES(1,"Henintsoa","henintsoa@gmail.com","123",1);
INSERT INTO User VALUES(4,"Rotsy","rotsy@gmail.com","123",1);

create table Objet(
    idObjet int NOT NULL auto_increment,
    titre VARCHAR(200),
    photo VARCHAR(100),
    categorie VARCHAR(100),
    descris VARCHAR(300),
    idUser int,
    PRIMARY key (idObjet),
    FOREIGN key (idUser) references User(idUser)
);
INSERT INTO Objet VALUES(null,"Haut","assets/img/akanjo.jpg","Haut","Haut",1);
INSERT INTO Objet VALUES(null,"Tennis","assets/img/kiraro3.jpg","chaussure","chaussure",1);
INSERT INTO Objet VALUES(null,"Livre1","assets/img/livre.jpg","livre","livre",1);



create table Echange(
    idEchange int NOT NULL auto_increment,
    idUser1 int,
    idUser2 int,
    idObjet1 int,
    idObjet2 int,
    statut varchar(100),
    dateDemande datetime,
    dateAcceptation datetime,
    PRIMARY key (idEchange),
    FOREIGN key (idUser1) references User(idUser),
    FOREIGN key (idUser2) references User(idUser),
    FOREIGN key (idObjet1) references Objet(idObjet),
    FOREIGN key (idObjet2) references Objet(idObjet)
);

create table ObjetEchange(
    idObjetEchange int NOT NULL auto_increment,
    idObjet int,
    titre VARCHAR(200),
    photo VARCHAR(100),
    categorie VARCHAR(100),
    descris VARCHAR(300),
    idUser int,
    dateEchange datetime,
    PRIMARY key (idObjetEchange),
    FOREIGN key (idObjet) references User(idUser),
    FOREIGN key (idUser) references User(idUser)
);
---------- Notification Demande d'echange envoyer User1
select * from echange where statut="Attente" and idUser1=1;

---------- Demande d'echange a acepter ou annuler User2
-- (Info momba ny mpandefa user1)
select idEchange,idObjet1,idUser1,nom,titre,photo,categorie,descris from echange 
join objet on objet.idObjet=echange.idObjet1 join user on user.idUser=echange.idUser1
where statut="Attente" and idUser2=4;

-- (Info mombany andefasana user2)
select idEchange,idObjet2,idUser2,nom,titre,photo,categorie,descris from echange 
join objet on objet.idObjet=echange.idObjet2 join user on user.idUser=echange.idUser2
where statut="Attente" and idUser2=4;

---------- Accaptation
update echange set dateAcceptation=now() ,statut="Accepter" where idEchange=3;

