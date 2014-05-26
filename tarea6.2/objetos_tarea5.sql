-- Objetos
USE tarea5;


delimiter $$
--
-- AGREGA UNA PELICULA A LA TABLA 
--
DROP PROCEDURE IF EXISTS agregar_pelicula_sp $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_pelicula_sp`(
			IN v_titulo 		VARCHAR(100),
			IN v_genero			ENUM('Accion', 'Drama', 'Ciencia Ficcion','Intriga', 'Misterio','Comedia'),
			IN v_duracion		INTEGER(11) ,
			IN v_puntuacion		DECIMAL(4,2),
			IN v_disponible		TINYINT(1),
			IN v_clasificacion 	ENUM('G','PG','PG-13','R','NC-17')
)
BEGIN

INSERT INTO peliculas(
			titulo, 
			genero,
			duracion,
			puntuacion,
			disponible,
			clasificacion
			)
			VALUES(
			v_titulo,
			v_genero,
			v_duracion,
			v_puntuacion,
			v_disponible,
			v_clasificacion
			);

END$$

--
-- MODIFICA UNA PELICULA
--
DELIMITER $$
DROP PROCEDURE IF EXISTS modificar_pelicula_sp $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificar_pelicula_sp`(
			IN v_id_pelicula 	INTEGER(11),
			IN v_titulo 		VARCHAR(100),
			IN v_genero			ENUM('Accion', 'Drama', 'Ciencia Ficcion','Intriga', 'Misterio','Comedia'),
			IN v_duracion		INTEGER(11) ,
			IN v_puntuacion		DECIMAL(4,2),
			IN v_disponible		TINYINT(1),
			IN v_clasificacion 	ENUM('G','PG','PG-13','R','NC-17')
)
BEGIN
	update peliculas set 	titulo = v_titulo, 
							genero = v_genero, 
							duracion = v_duracion, 
							puntuacion = v_puntuacion, 
							disponible = v_disponible, 
							clasificacion = v_clasificacion 
					 where 	id_pelicula = v_id_pelicula;

end $$
DELIMITER ;
--
-- ELIMINA UNA PELICULA DE LA TABLA 
--
DELIMITER $$
DROP PROCEDURE IF EXISTS eliminar_pelicula_sp $$
CREATE PROCEDURE eliminar_pelicula_sp(id INT)
BEGIN
	DELETE FROM peliculas where id_pelicula = id;
END $$

DELIMITER ;

DELIMITER $$
DROP PROCEDURE IF EXISTS dar_pelicula_sp $$
CREATE PROCEDURE dar_pelicula_sp(id INT)
BEGIN
		SELECT * FROM peliculas WHERE id_pelicula = id;
END $$

DELIMITER ;