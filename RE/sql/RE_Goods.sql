CREATE TABLE RE_Goods (
              RE_GoodID MEDIUMINT NOT NULL AUTO_INCREMENT,
              RE_Name varchar(120) NOT NULL DEFAULT '',
              RE_Desc varchar(255) NOT NULL DEFAULT '',
              RE_Img varchar(120) NOT NULL DEFAULT '',
			  RE_Unit varchar(120) NOT NULL DEFAULT '',
              RE_PriceIni int(10) unsigned NOT NULL DEFAULT '0',
              RE_PriceAct int(10) unsigned NOT NULL DEFAULT '0',
			  RE_Quant int(10) unsigned NOT NULL DEFAULT '0',
             PRIMARY KEY (RE_GoodID)
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Materias primas';

CREATE TABLE RE_Groups (
              RE_GroupID int(10) unsigned NOT NULL DEFAULT '0', 
              RE_Name varchar(120) NOT NULL DEFAULT '',
              RE_Desc varchar(255) NOT NULL DEFAULT '',
             PRIMARY KEY (RE_GroupID)
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Grupos';

CREATE TABLE RE_GoodsGroups (
              RE_GroupID int(10) unsigned NOT NULL DEFAULT '0', 
              RE_GoodID int(10) unsigned NOT NULL DEFAULT '0', 
             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Asociacion Grupos - materias primas';
