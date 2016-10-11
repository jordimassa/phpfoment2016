CREATE DATABASE DB_GALMACENES;

USE DB_GALMACENES;

CREATE TABLE T_CAJEROS(
	CAJ_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	CAJ_NOM VARCHAR(50) NOT NULL,
	CAJ_APE VARCHAR(50) NOT NULL,    
	PRIMARY KEY (CAJ_ID)
);

CREATE TABLE T_TPV(
	TPV_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	TPV_NOM VARCHAR(100) NOT NULL,
	TPV_PLANT tinyint NOT NULL,
	PRIMARY KEY (TPV_ID)
);

CREATE TABLE T_PRODUCTOS(
	PROD_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	PROD_NOM VARCHAR(50) NOT NULL,
    PROD_PREC NUMERIC (10,2),
	PRIMARY KEY (PROD_ID)
);

CREATE TABLE T_VENTAS(
	VENT_ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	CAJ_ID INT UNSIGNED NOT NULL,
    TPV_ID INT UNSIGNED NOT NULL,
    PROD_ID INT UNSIGNED NOT NULL,
    VENT_FECH timestamp NOT NULL,
	PRIMARY KEY (VENT_ID)
);

ALTER TABLE T_VENTAS
	ADD INDEX FK_VENT_CAJ (CAJ_ID),
    ADD CONSTRAINT FK_VENT_CAJ
    FOREIGN KEY (CAJ_ID)
    REFERENCES T_CAJEROS (CAJ_ID)
    ON UPDATE CASCADE
	ON DELETE CASCADE;


ALTER TABLE T_VENTAS
	ADD INDEX FK_VENT_TPV (TPV_ID),
    ADD CONSTRAINT FK_VENT_TPV
    FOREIGN KEY (TPV_ID)
    REFERENCES T_TPV (TPV_ID)
    ON UPDATE CASCADE
	ON DELETE CASCADE;

ALTER TABLE T_VENTAS
	ADD INDEX FK_VENT_PROD (PROD_ID),
    ADD CONSTRAINT FK_VENT_PROD
    FOREIGN KEY (PROD_ID)
    REFERENCES T_PRODUCTOS (PROD_ID)
    ON UPDATE CASCADE
	ON DELETE CASCADE;


INSERT INTO `db_galmacenes`.`t_cajeros` (`CAJ_NOM`, `CAJ_APE`) VALUES ('Carmen', 'Gónzalez');
INSERT INTO `db_galmacenes`.`t_cajeros` (`CAJ_NOM`, `CAJ_APE`) VALUES ('Dolores', 'Méndez');
INSERT INTO `db_galmacenes`.`t_cajeros` (`CAJ_NOM`, `CAJ_APE`) VALUES ('Juan ', 'Gámez');
INSERT INTO `db_galmacenes`.`t_cajeros` (`CAJ_NOM`, `CAJ_APE`) VALUES ('Marc', 'Terribas');

INSERT INTO `db_galmacenes`.`t_tpv` (`TPV_NOM`, `TPV_PLANT`) VALUES ('Centra', '1');
INSERT INTO `db_galmacenes`.`t_tpv` (`TPV_NOM`, `TPV_PLANT`) VALUES ('Central', '2');
INSERT INTO `db_galmacenes`.`t_tpv` (`TPV_NOM`, `TPV_PLANT`) VALUES ('Alimentación', '1');
INSERT INTO `db_galmacenes`.`t_tpv` (`TPV_NOM`, `TPV_PLANT`) VALUES ('Electrodomésticos', '2');

INSERT INTO `db_galmacenes`.`t_productos` (`PROD_NOM`, `PROD_PREC`) VALUES ('Yogourt Griego', '1.20');
INSERT INTO `db_galmacenes`.`t_productos` (`PROD_NOM`, `PROD_PREC`) VALUES ('Entrecot 500Kg', '12.99');
INSERT INTO `db_galmacenes`.`t_productos` (`PROD_NOM`, `PROD_PREC`) VALUES ('Queso Manchego', '6.99');
INSERT INTO `db_galmacenes`.`t_productos` (`PROD_NOM`, `PROD_PREC`) VALUES ('Lavadora-secadora', '560');
INSERT INTO `db_galmacenes`.`t_productos` (`PROD_ID`, `PROD_NOM`, `PROD_PREC`) VALUES ('', 'TV 52\" Sony', '1100');
INSERT INTO `db_galmacenes`.`t_productos` (`PROD_NOM`, `PROD_PREC`) VALUES ('Espaguettis', '1.45');

INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('1', '1', '1', '2016-04-01');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('2', '2', '2', '2016-01-04');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('2', '1', '5', '2016-02-03');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('4', '3', '6', '2016-08-03');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('4', '4', '3', '2016-07-02');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('2', '2', '6', '2016-05-02');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('4', '4', '4', '2016-02-02');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('3', '3', '3', '2016-04-04');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('4', '3', '6', '2016-03-03');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('1', '2', '1', '2016-01-01');
INSERT INTO `db_galmacenes`.`t_ventas` (`CAJ_ID`, `TPV_ID`, `PROD_ID`, `VENT_FECH`) VALUES ('1', '1', '2', '2016-03-03');


select v.prod_id, pr.prod_nom,count(v.prod_id) as num_vent from t_ventas v 
inner join t_productos pr on v.prod_id= pr.prod_id 
group by v.prod_id 
order by num_vent desc;

select v.prod_id,sum(p.prod_prec) as importe_venta from t_ventas v 
inner join t_productos p on v.prod_id=p.prod_id 
inner join t_tpv t on v.TPV_ID=t.TPV_ID 
group by t.TPV_PLANT

