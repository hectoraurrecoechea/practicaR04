CREATE DATABASE tareas;
USE tareas;

CREATE TABLE tareas(
                       id_tarea INT AUTO_INCREMENT,
                       tarea VARCHAR(30) NOT NULL ,
                       CONSTRAINT palabras_pk PRIMARY KEY(id_tarea),
                       CONSTRAINT palabras_uk1 UNIQUE(tarea)
);

CREATE USER tareas@localhost IDENTIFIED BY '12345';

GRANT SELECT, INSERT, DELETE, UPDATE on tareas.* TO tareas@localhost;

INSERT INTO tareas (id_tarea, tarea) VALUES('1','Leer libros');
INSERT INTO tareas (id_tarea, tarea) VALUES('2','Coger cargador');
INSERT INTO tareas (id_tarea, tarea) VALUES('3','Ver pelis');

SELECT * FROM tareas;

DELETE FROM tareas WHERE id_tarea='1';