CREATE TABLE RE_Habilidades_pj_SOL (
  RE_ID int(10) unsigned NOT NULL DEFAULT '0',
  RE_Pj varchar(30) NOT NULL DEFAULT '',
  RE_Valor varchar(120) NOT NULL DEFAULT '0',
  RE_Efecto varchar(120) NOT NULL DEFAULT '',
  RE_Status tinyint(3) NOT NULL DEFAULT '0',
  RE_DateUpd int(10) unsigned NOT NULL DEFAULT '0',
  RE_Inspect varchar(30) NOT NULL DEFAULT '',
  RE_SHA varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (RE_ID, RE_Pj)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Solicitudes Habilidad'