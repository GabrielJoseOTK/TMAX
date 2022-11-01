create schema Hotel1;
use Hotel1;

create table Quarto1(
	Numero int primary key,
    Modelo varchar(15),
    Tamanho char(15),
    Valor int,
    N_de_quartos int
);
create table Serviços1(
	Tipo int primary key
    
);
create table Cliente1(
	CPF int primary key,
    foto varchar(40),
    Nome varchar(40),
    Numero_Quarto1 int,
    foreign key (Numero_Quarto1) references Quarto1(Numero),
	N°_de_pessoas smallint
    );
    create table inclui(
    Tipo_Serviços1 int,
    Numero_Quarto1 int,
    primary key( Tipo_Serviços1, Numero_Quarto1),
    foreign key (Tipo_Serviços1) references Serviços1(Tipo),
    foreign key (Numero_Quarto1) references Quarto1(Numero)
    );
    insert into Quarto1 values (1, 'luxo','grande', 350, 2);
    insert into Serviços1 values(5);
    insert into Cliente1 values(15065456,'xxxxxxxxx','GeovanniGilberto', 1, 3);
    insert into inclui values(5, 1);
    
    
	select * from Quarto1;
	select * from Serviços1;
	select * from Cliente1;
	select * from inclui;