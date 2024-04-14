CREATE TABLE `progreso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(255) DEFAULT NULL,
  `materia` varchar(255) DEFAULT NULL,
  `avance` varchar(255)DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO progreso (curso, materia, avance, fecha) VALUES 
('pildoras', 'programacion', '1/255', '2024-01-05'),
('pildoras', 'programacion', '5/100', '2024-04-13');

