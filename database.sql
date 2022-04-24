CREATE DATABASE db_094;

USE db_094;

CREATE TABLE tbl_ninieng(
	id_ninieng INT NOT NULL AUTO_INCREMENT,
	nama_ninieng VARCHAR(100) NOT NULL,
	email_ninieng VARCHAR(100) NOT NULL,
	alamat_ninieng text NOT NULL,
	primary key (id_ninieng)
	) ENGINE = InnoDB;