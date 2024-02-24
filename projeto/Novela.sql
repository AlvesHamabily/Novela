create database Novela;
use Novela;

create table TbNovela(
	codigo int primary key auto_increment,
    nome_novela varchar(100),
    numero_capitulo int,
    data_primeiro_capitulo date,
    data_ultimo_capitulo date
);
/*select * from TbNovela;
select nome_novela from TbNovela where codigo=1;*/
    