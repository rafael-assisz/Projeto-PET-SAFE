create database petsafe;
use petsafe;

-- CRIAÇÃO DAS TABELAS:

create table animaisPerdidos (
idAnimalP int primary key not null,
data date not null,
local varchar (50) not null,
nomeDono varchar (30) not null );

create table animaisDoacao(
idAnimalD int primary key not null,
dataNascimento date not null,
castrado boolean not null,
vacinado boolean not null);

create table animaisAchados(
idAnimalA int primary key not null,
local varchar (15) not null,
data date not null);

create table administrador(
idAdministrador int primary key not null,
email varchar (20) not null,
senha varchar (20) not null);

create table usuario(
idUsuario int primary key  not null,
tipo int(2) not null,
data_nascimento date not null,
nome varchar (30) not null,
telefone varchar (15) not null,
endereco varchar (30) not null
estado varchar (20) not null,
cidade varchar (20) not null,
cep varchar (12) not null,
bairro (30) not null,
idAdministrador int not null,
foreign key (idAdministrador)
references administrador (idAdministrador));

create table raca (
idRaca int primary key not null,
Poodle int,
Pinscher int,
Labrador int,
Yorkshire int,
Shih_Tzu int,
Maltês int,
Pug int,
Golden_Retriever int,
Bulldog_Frances int,
Lulu_da_Pomerânia int,
Rottweiler int,
Bulldog_Inglês int,
Lhasa_Apso int,
outros int;

create table porte (
idPorte int primary key not null,
Mini_ou_Toy int,
Pequeno_ou_Anao int,
Medio int,
Grande int,
Gigante int;

create table pelagem (
idPelagem int primary key not null,
Pelo_curto_liso int,
Pelo_curto_duro int,
Pelo_longo_liso int,
Pelo_longo_encaracolado int;

create table indole (
idIndole int primary key not null,
Docil int,
Agressivo int,
Brincalhao int;

create table animal(
idAnimal int primary key not null,
raca int (2) not null,
porte int (2) not null,
pelagem int (2) not null,
idade int (2) not null,
indole int (2) not null,
sexo int (1) not null,
foto varchar (128) not null,
idUsuario int not null,
idAnimalP int not null,
idAnimalD int not null,
idAnimalA int not null,
foreign key (idAnimalP)
references animaisPerdidos (idAnimalP),
foreign key (idAnimalD)
references animaisDoacao (idAnimalD),
foreign key (idAnimalA)
references animaisAchados (idAnimalA),
foreign key (idUsuario)
references usuario (idUsuario));