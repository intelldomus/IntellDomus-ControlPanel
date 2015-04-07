Create table Amico(

ID int auto_increment primary key,

Nome varchar(30),

Cognome varchar(30),

Face varchar(30) unique,

);

Create table Proprietario(

ID int auto_increment primary key,

Nome varchar(30),

Cognome varchar(30),

Face varchar(30) unique,

IMEI varchar(18) unique,

Username varchar(30) not null unique,

Password varchar(20) not null,

NomeTelefono varchar(20),

);

Create table Accesso(

ID int auto_increment primary key,

DataOra date not null,

IDAccesso int references Proprietario(ID) on update cascade on delete set NULL,

);

Create table Allarme(

ID int auto_increment primary key,

DataOra date not null,

Stato varchar(10),

IDAttivazione int references Proprietario(ID) on update cascade on delete set NULL,

IDDisattivazione int references Proprietario(ID) on update cascade on delete set NULL,

);

Create table Rilevazione(

ID int auto_increment primary key,

DataOra date not null,

Temperatura decimal(5,2),

Umidità decimal(5,2),

);