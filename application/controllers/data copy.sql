use epiz_33551551_takalo;

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


