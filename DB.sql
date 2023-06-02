CREATE DATABASE "reservas-hotel";

CREATE TABLE banner (
  id INT AUTO_INCREMENT PRIMARY KEY,
  img varchar(100) NOT NULL,
  fecha TIMESTAMP
);

CREATE TABLE planes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio_alta DECIMAL(8, 2),
    precio_baja DECIMAL(8, 2),
    fecha DATE
);

INSERT into banner(img) values ("img/banner/banner01.jpg"),
                                ("img/banner/banner02.jpg"),
                                ("img/banner/banner03.jpg"),
                                ("img/banner/banner04.jpg");


-- INSERT into planes(img) values ("img/luna-de-miel.png"),
--                                 ("img/plan-aventura.png"),
--                                 ("img/plan-romantico.png"),
--                                 ("img/plan-spa.png");




INSERT INTO planes 
(id, tips, img, descripcion, precio_alta, precio_baja, fecha) VALUES 

(NULL, "Romantico","img/plan-remantico.png", "Ven y celebra con nosotros una fecha especial como aniversaric de bodas,novics o una pedida de mano.\r\n.
1 paguete incluye lo siguiente:\r\n-1 de Noche de Alojamiento en Hab. Matrimonial\r\n- Botells de Espumante\rin- Piqueo de Quesos ( 3 tipos)\rin-
Dezayunc buffet\r\n- Check in 3.88 pm\r\n-Free late check out hasts laz 3.88 pm\rin- Uzo del gimnazio y pizcina®\r\n- Estacicnamiento de
cortezia\r\nPrecio No incluye 18% de zervicioz y/o 18% de IGV", 484.00, 368.00, current_timestamp()), 

(NULL, "Luna de Miel", "img/luna-de-miel.png", "Comparte un momento romintico y especial con tu parejs.\r\nDecoracién de la habitacidn con lenceria especial\r\nDecoracidn con
bombaz, pétalos de rozaz y velaz\m\nChocolatez y Champada\r\nCena romintica en un lugar ezpecial e intimo del Hotel\r\nTelevizidn por cable\r\nk -
Fi\r\nSeguro = impuestos incluidos\r\nccezos 3 Zonaz recrestivaz\r\ndccezos 3 onaz humedsz", 1286.00, 1808.00, current_timestamp()), 

(NULL,"Aventura", "img/plan-aventura.png", "Muestros planes estin dizefados para personaz con espiritu aventurerc que quieran sacar zu
adrenzlina 3l extremo. Se combina 1a diversidn y los nervios en actividades como: TORRENTISMO, CANOPY, CAMINATAS, CANOTAJE, POLIGONO, CABALGATAS Y
MUCHAS COSAS MAS. ., permitiends experimentar una fuzidn de nervios, miedos y zatizfaccidn al vencer zus propios retes.", 1788.00, 158.00 ,current_timestamp()), 

(NULL, "Spa", "img/plan-spa.png", "Ubicado a tan zolo B8wts de distancia del predio, dizefamos un espacio
integral an medic de un parque de 2 hectireas con inmedorables vizuales en donde el relax, =l cuidado estético y la actividad fizica complementan
su estadia en nuestro Apart Hotel.", 250.00, 230.00, current_timestamp());


