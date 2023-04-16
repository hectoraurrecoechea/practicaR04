CREATE DATABASE palabras;
USE palabras;

CREATE TABLE palabras(
                         id_palabra INT AUTO_INCREMENT,
                         palabra VARCHAR(30) NOT NULL ,
                         CONSTRAINT palabras_pk PRIMARY KEY(id_palabra),
                         CONSTRAINT palabras_uk1 UNIQUE(palabra)
);

CREATE USER palabras@localhost IDENTIFIED BY 'lfajsdkjlf';

GRANT select, insert, update, delete ON palabras.* TO palabras@localhost;