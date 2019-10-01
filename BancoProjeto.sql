create database if not exists ProjetoPWII;

-- if not exists Não deixa criar novamente caso o banco já existir --

use ProjetoPWII;
create table Credencial(
cod int primary key auto_increment,
email varchar(100) not null,
userName varchar(50) not null,
senha varchar(50) not null);

-- buscar todos os campos da tabela sem restrição --
select * from credencial;

/*busca no banco um registro especifico*/
select * from credencial WHERE cod = 1;

/*inserir dados na tabela*/
INSERT INTO credencial (email, userName, senha) VALUES ('indianarabrasilino@yahoo.com.br', 'indianarabrasilino', '123456');
INSERT INTO credencial (email, userName, senha) VALUES ('francisco@yahoo.com.br', 'franciscobrasilino', '123');
