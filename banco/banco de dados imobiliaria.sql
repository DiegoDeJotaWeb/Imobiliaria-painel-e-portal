create database imobiliaria;
-- drop database imobiliaria;
use imobiliaria;

-- create table usuarios(
-- 	idUsuario int primary key auto_increment,
--     nomeUsuario varchar(50),
--    cpfUsuario varchar(20),
--    emailUsuario varchar(50),
--     senhaUsuario varchar(25),
--     senhaUsuarioCrip varchar(255),
--     nivelUsuario varchar(25),
--     fotoUsuario varchar(100)
-- );
--  select * from usuarios;
 
 CREATE TABLE funcionarios(
		idFuncionario int primary key auto_increment,
		nomeFuncionario varchar(50),
		cpfFuncionario varchar(20),
		emailFuncionario varchar(50),
		telefoneFuncionario varchar(20),
		dataAdmissaoFuncionario date,
		cargoFuncionario varchar(30),
		creciFuncionario varchar(20),
		bancoFuncionario varchar(20),
		tipoFuncionario varchar(20),
		agenciaFuncionario varchar(20),
		contaFuncionario varchar(20),
		pixFuncionario varchar(100),
		enderecoFuncionario varchar(100),
		fotoFuncionario varchar(50),
		obsFuncionario text(500),
        senhaFuncionario varchar(50),
        senhaCripFuncionario varchar(50),
        administradorFuncionario varchar(5)
 );
 select * from funcionarios;
 select * from funcionarios where administradorFuncionario = 's';
 
 select nomeFuncionario from funcionarios where cargoFuncionario = 'Corretor';
 
create table cargos(
	idCargo int primary key auto_increment,
    nomeCargo varchar(50)
);

 select * from cargos;


CREATE TABLE tipoImovel 
( 
 idTipoImovel INT PRIMARY KEY NOT NULL UNIQUE AUTO_INCREMENT,  
 nomeTipoImovel VARCHAR(50),  
 fotoTipoImovel VARCHAR(50), 
 nomeFotoTipoImovel VARCHAR(50),
 fotoFichaTipoImovel VARCHAR(50), 
 nomeFotoFichaTipoImovel VARCHAR(50)
); 

select * from tipoImovel;

CREATE TABLE cidade 
( 
 idCidade INT PRIMARY KEY AUTO_INCREMENT,  
 nomeCidade VARCHAR(50),
 statusCidade VARCHAR(50)
); 


 select * from cidade ORDER BY idCidade DESC;

CREATE TABLE bairro 
( 
 idBairro INT PRIMARY KEY AUTO_INCREMENT,  
 nomeBairro VARCHAR(50),
 statusBairro varchar(50)
); 

select * from bairro;



CREATE TABLE contaBancaria 
( 
 idContaBancaria INT PRIMARY KEY AUTO_INCREMENT,  
 nomeContaBancaria VARCHAR(50),  
 bancoContaBancaria VARCHAR(50),
 contaContaBancaria VARCHAR(50),  
 agenciaContaBancaria VARCHAR(50)  
); 

select * from contaBancaria;

CREATE TABLE frequencia 
( 
 idFrequencia INT PRIMARY KEY AUTO_INCREMENT,  
 nomeFrequencia VARCHAR(50),  
 diasFrequencia INT 
); 

select * from frequencia;

CREATE TABLE imovel 
( 
 idImovel INT PRIMARY KEY AUTO_INCREMENT,  
 donoImovel VARCHAR(50),  
 corretor INT 
); 

CREATE TABLE arquivosPdf (
idArquivo INT PRIMARY KEY AUTO_INCREMENT,  
nomeArquivo VARCHAR(100) 
);

CREATE TABLE arquivosImagem (
idArquivo INT PRIMARY KEY AUTO_INCREMENT,  
nomeArquivo VARCHAR(100) 
);

CREATE TABLE permissoes (
idAtivo INT PRIMARY KEY AUTO_INCREMENT,  
homePermissoes enum('s','n'),
                        cadastroCargosPermissoes enum('s','n'),
                        cadastroTiposImoveisPermissoes enum('s','n'),
                        cadastroCidadesPermissoes enum('s','n'),
                        cadastroBairrosPermissoes enum('s','n'),
                        cadastroContasBancariasPermissoes enum('s','n'),
                        cadastroFrequenciaPermissoes enum('s','n'),
                        cadastroAcessosPermissoes enum('s','n'),
                        imoveisCadastradosPermissoes enum('s','n'),
                        imoveisVendaPermissoes enum('s','n'),
                        imoveisLocacaoPermissoes enum('s','n'),
                        imoveisVendidosPermissoes enum('s','n'),
                        imoveisAlugadosPermissoes enum('s','n'),
                        imoveisInativosPermissoes enum('s','n'),
                        cadastroFuncionarioPermissoes enum('s','n'),
                        cadastroProprietariosPermissoes enum('s','n'),
                        cadastroCompradoresPermissoes enum('s','n'),
                        cadastroLocatariosPermissoes enum('s','n'),
                        gestaoUsuariosPermissoes enum('s','n'),
                        agendaPermissoes enum('s','n'),
                        tarefasPermissoes enum('s','n'),
                        contasAPagarPermissoes enum('s','n'),
                        contasAReceberPermissoes enum('s','n'),
                        extratoCaixaMovimentacoesPermissoes enum('s','n'),
                        comissoesPermissoes enum('s','n'),
                        listaVendasFinanceiroPermissoes enum('s','n'),
                        listaAlugueisFinanceiroPermissoes enum('s','n'),
                        relatorioMovimentacoesPermissoes enum('s','n'),
                        relatorioComissoesPermissoes enum('s','n'),
                        relatorioVendasPermissoes enum('s','n'),
                        relatorioAlugueisPermissoes enum('s','n'),
                        relatorioContasAPagarPermissoes enum('s','n'),
                        relatorioContasAReceberPermissoes enum('s','n'),
                        reciboPagamentoPermissoes enum('s','n'),
                        propostaCompraPermissoes enum('s','n'),
                        propostaLocacaoPermissoes enum('s','n'),
                        laudoVistoriaPermissoes enum('s','n'),
                        vendasJuridicoPermissoes enum('s','n'),
                        alugueisJuridicoPermissoes enum('s','n'),
                        configuracaoPermissoes enum('s','n'),
                        funcionarioId int

);

select * from permissoes;


CREATE TABLE mensagens (
idMensagem INT PRIMARY KEY AUTO_INCREMENT,  
assuntoMensagem VARCHAR(255),
mensagemMensagem TEXT,
idRemetente int,
idDestinatario int,
dataMensagem date
);

select * from mensagens;
SELECT * FROM funcionarios where idFuncionario = 4;

SELECT * FROM mensagens INNER JOIN funcionarios ON funcionarios.idFuncionario where mensagens.idRemetente = 1 and funcionarios.idFuncionario = 1 and dataMensagem = '2022-05-28';

SELECT * FROM mensagens INNER JOIN funcionarios ON funcionarios.idFuncionario where mensagens.idRemetente = 1 and funcionarios.idFuncionario = 1 and dataMensagem = '2022-05-28';

SELECT nomeFuncionario FROM funcionarios where idFuncionario = 4;

SELECT * FROM mensagens INNER JOIN funcionarios ON mensagens.idDestinatario where funcionarios.idFuncionario = 1;

insert into mensagens (assuntoMensagem,mensagemMensagem,idRemetente,idDestinatario,dataMensagem)
values('Qualquer assunto1','Corpo da mensagem1',2,1,'2022-05-28');

 


SELECT * FROM mensagens INNER JOIN funcionarios ON funcionarios.idFuncionario where mensagens.idRemetente = 3 and funcionarios.idFuncionario = 3;
SELECT * FROM mensagens INNER JOIN funcionarios ON funcionarios.idFuncionario where mensagens.idRemetente = 1 and funcionarios.idFuncionario = 1;

SELECT CURTIME() AS HORA, TIME_FORMAT(CURTIME(), '%h - %i - %s') AS HORA_FORMATADA;

SELECT *
FROM mensagens
INNER JOIN funcionarios
ON mensagens.idRemetente where funcionarios.idFuncionario = 2;



CREATE TABLE listaTodo (
idlistaTodo INT PRIMARY KEY AUTO_INCREMENT,  
itemListaTodo VARCHAR(255),
statusListaTodo enum('s','n'),
idFuncionario int
);

-- insert into listaTodo (itemListaTodo,statusListaTodo,idFuncionario)
-- values('segundo item da lista (qualquer coisa 2)','s',2);

SELECT *
FROM listaTodo
INNER JOIN funcionarios
ON listaTodo.idlistaTodo where listaTodo.idFuncionario = 2  and funcionarios.idFuncionario = 2;

SELECT * FROM mensagens INNER JOIN funcionarios ON funcionarios.idFuncionario where mensagens.idRemetente = 3 and funcionarios.idFuncionario = 3;

select * from funcionarios where idFuncionario = 1;

select * from listaTodo;
-- INSERT INTO cargos (nomeCargo)VALUES 
-- ('Corretor');

-- INSERT INTO cargos (nomeCargo)VALUES 
-- ('Gerente');

-- INSERT INTO cargos (nomeCargo)VALUES 
-- ('Limpeza');

-- INSERT INTO cargos (nomeCargo)VALUES 
-- ('Tesoureiro');

-- select * from usuarios where idUsuario = 1;
-- select * from usuarios;

-- INSERT INTO Usuarios (nomeUsuario, cpfUsuario, emailUsuario, senhaUsuario,senhaUsuarioCrip, nivelUsuario,fotoUsuario)VALUES 
-- ('diego', '404.830.988.91', 'diego@diego1','admin','21232f297a57a5a743894a0e4a801fc3','Administrador','avatar2.png');

-- UPDATE usuarios SET nomeUsuario='admina', cpfUsuario='000.000.000-00', emailUsuario='diego@caipora.com.br', senhaUsuario='admin', senhaUsuarioCrip='21232f297a57a5a743894a0e4a801fc3' WHERE idUsuario=1;

-- UPDATE usuarios SET nomeUsuario = 'admin', cpfUsuario = '000.000.000-00', senhaUsuario = 'admin', senhaUsuarioCrip = '21232f297a57a5a743894a0e4a801fc3', emailUsuario = 'diego@caipora.com.br' WHERE idUsuario = 1;