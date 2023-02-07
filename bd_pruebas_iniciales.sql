/*
SQLyog Ultimate v9.02 
MySQL - 5.7.33 : Database - proyecto_base
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyecto_base` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `proyecto_base`;

/*Table structure for table `config_menu_base` */

DROP TABLE IF EXISTS `config_menu_base`;

CREATE TABLE `config_menu_base` (
  `id_config_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion_fun` varchar(50) DEFAULT NULL,
  `id_padre_config` int(11) DEFAULT NULL,
  `orden` varchar(50) DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id_config_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `config_menu_base` */

insert  into `config_menu_base`(`id_config_menu`,`nombre`,`descripcion_fun`,`id_padre_config`,`orden`,`estado`,`fecha_registro`) values (1,'Inicio','Inicio',0,'1','1','2023-02-05'),(2,'Configuraciones','Configuraciones',0,'2','1','2023-02-05'),(3,'Administraciones','Administraciones',0,'3','1','2023-02-05'),(4,'Usuarios','llamado_usuarios_menu()',2,'1','1','2023-02-06'),(5,'Perfiles','Perfiles',2,'2','1','2023-02-06');

/*Table structure for table `menu_perfil_base` */

DROP TABLE IF EXISTS `menu_perfil_base`;

CREATE TABLE `menu_perfil_base` (
  `id_menu_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `id_config_menu` int(11) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_menu_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `menu_perfil_base` */

insert  into `menu_perfil_base`(`id_menu_perfil`,`id_config_menu`,`id_perfil`,`estado`,`fecha`) values (1,1,1,'1','2023-02-05 20:29:55'),(2,2,1,'1','2023-02-05 20:30:21'),(3,3,1,'1','2023-02-05 20:30:33'),(4,4,1,'1','2023-02-06 23:09:50'),(5,5,1,'1','2023-02-06 23:09:47');

/*Table structure for table `perfiles_base` */

DROP TABLE IF EXISTS `perfiles_base`;

CREATE TABLE `perfiles_base` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_perfil` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `perfiles_base` */

insert  into `perfiles_base`(`id_perfil`,`nombre_perfil`,`descripcion`,`estado`,`fecha`) values (1,'Administrador','Administrador',1,'2023-02-05');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_identificacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `identificacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `passw` text COLLATE utf8_spanish_ci,
  `perfil` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_pais` int(100) DEFAULT NULL,
  `id_depto` int(100) DEFAULT NULL,
  `id_muni` int(100) DEFAULT NULL,
  `foto` text COLLATE utf8_spanish_ci,
  `estado` int(11) DEFAULT NULL,
  `ultimo_login` datetime DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`tipo_identificacion`,`identificacion`,`nombre_completo`,`fecha_nacimiento`,`correo`,`celular`,`usuario`,`passw`,`perfil`,`id_pais`,`id_depto`,`id_muni`,`foto`,`estado`,`ultimo_login`,`fecha_creacion`,`id_perfil`) values (1,'cc','1095815913','daniel','0000-00-00','danielecastilla@gmail.com',NULL,'decastilla','12345','Administrador',1,1,1,NULL,1,'2023-02-06 23:23:47','2023-02-05 20:26:14',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
