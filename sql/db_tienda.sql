create database db_tienda;

DROP TABLE T_ARTICULOS;

CREATE TABLE T_ARTICULOS (
	ART_ID INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    ART_NOM VARCHAR(100) NOT NULL, 
    FAB_ID INT UNSIGNED NOT NULL,
    ART_PRECIO DECIMAL(10,2),
    PRIMARY KEY (ART_ID) 
);

DROP TABLE T_FABRICANTES;

CREATE TABLE T_FABRICANTES (
	FAB_ID INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    FAB_NOM VARCHAR(50) NOT NULL, 
    PRIMARY KEY (FAB_ID)
);

ALTER TABLE T_FABRICANTES ADD CONSTRAINT CT_UQ_FAB_NOM UNIQUE(FAB_NOM); 

ALTER TABLE T_ARTICULOS
	ADD INDEX FK_FAB_ART (FAB_ID),     
    ADD CONSTRAINT FK_FAB_ART         
    FOREIGN KEY (FAB_ID)
    REFERENCES T_FABRICANTES (FAB_ID);
    
INSERT INTO T_FABRICANTES (FAB_NOM) 
	VALUES (
		'ASUS'
	),
    (
		'SAMSUNG'
	),
    (
		'LENOVO'
	),
    (
		'MICROSOFT'
	),
    (   
		'TOSHIBA'
	),
    (
        'MSI'
	),
    (
        'ACER'
	);

INSERT INTO T_ARTICULOS (ART_NOM,FAB_ID,ART_PRECIO) 
	VALUES (
		'Portatil gaming',6, 1200
	);
INSERT INTO T_ARTICULOS (ART_NOM,FAB_ID,ART_PRECIO) 
	VALUES (
		'Portatil Yoga 900',3, 980
	);
INSERT INTO T_ARTICULOS (ART_NOM,FAB_ID,ART_PRECIO) 
	VALUES (
		'Teclado Natural',4, 60
	);
INSERT INTO T_ARTICULOS (ART_NOM,FAB_ID,ART_PRECIO) 
	VALUES (
		'Portatil Portege R930',5, 1100
	);

INSERT INTO T_ARTICULOS (ART_NOM,FAB_ID,ART_PRECIO) 
	VALUES (
		'Tablet Iconia',7, 240
	);
INSERT INTO T_ARTICULOS (ART_NOM,FAB_ID,ART_PRECIO) 
	VALUES (
		'SmartPhone S7',2, 540
	);

INSERT INTO T_ARTICULOS (ART_NOMBRE,FAB_ID,ART_PRECIO) 
	VALUES (
		'SmartPhone S6',2, 340
	);


SELECT count(art_id) from t_articulos where art_precio>200;

SELECT * from t_articulos where art_precio between 50 and 200;

SELECT a.art_nombre, a.art_precio, (round((a.art_precio*166.386),2)) as pvp_pesetas, f.fab_nom from t_articulos a inner join t_fabricantes f on a.fab_id=f.fab_id;

select avg(art_precio) from t_articulos;

SELECT count(art_id) from t_articulos where art_precio>200;

SELECT * from t_articulos where art_precio between 50 and 200;

SELECT a.art_nombre, a.art_precio, (round((a.art_precio*166.386),2)) as pvp_pesetas, f.fab_nom from t_articulos a inner join t_fabricantes f on a.fab_id=f.fab_id;

select round(avg(art_precio),2) as media_precios from t_articulos;

select round(avg(art_precio),2) as media_precios from t_articulos where FAB_ID=2;

SELECT * FROM t_articulos ORDER BY art_precio desc, art_nombre;

SELECT * FROM t_articulos where art_precio>=180 ORDER BY art_precio desc, art_nombre;

select a.fab_id, COUNT(a.ART_ID),round(avg(a.art_precio),2) as media_precios,f.fab_nom from t_articulos a inner join t_fabricantes f on a.fab_id=f.fab_id GROUP BY FAB_ID;

SELECT * FROM t_articulos where art_precio>=180 ORDER BY art_precio desc, art_nombre;

select a.fab_id, COUNT(a.ART_ID),round(avg(a.art_precio),2) as media_precios,f.fab_nom from t_articulos a inner join t_fabricantes f on a.fab_id=f.fab_id GROUP BY FAB_ID;

select a.fab_id, COUNT(a.ART_ID),round(avg(a.art_precio),2) as media_precios,f.fab_nom from t_articulos a inner join t_fabricantes f on a.fab_id=f.fab_id GROUP BY FAB_ID HAVING media_precios>=150;