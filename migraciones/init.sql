CREATE DATABASE IF NOT EXISTS tacna21;
USE tacna21;

CREATE TABLE IF NOT EXISTS noticias (
  id INT(4) NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(255) COLLATE utf8_spanish_ci NOT NULL,
  articulo TEXT COLLATE utf8_spanish_ci NOT NULL,
  categoria ENUM('politica', 'policial', 'tecnologia', 'social') COLLATE utf8_spanish_ci DEFAULT NULL,
  autor VARCHAR(25) COLLATE utf8_spanish_ci NOT NULL,
  fecha DATE NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;