/*
 Navicat Premium Data Transfer

 Source Server         : Productos
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : tienda

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001
 Name DB: tienda

 Date: 30/07/2020 02:26:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `categoria` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_expiracion` date NOT NULL,
  `precio` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`codigo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES (1, 'Leche', 'Lacteos', '2020-07-25', 1.75);
INSERT INTO `producto` VALUES (2, 'Lechuga', 'Legumbres', '2020-07-16', 0.40);
INSERT INTO `producto` VALUES (3, ' 1lb Tomate', 'Legumbres', '2020-08-08', 0.90);
INSERT INTO `producto` VALUES (6, 'Coca Cola 2L', 'Bebidas', '2020-11-27', 3.50);
INSERT INTO `producto` VALUES (10, 'salchichas', 'Carnes', '2020-08-11', 1.70);

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `USERNAME` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PASSWORD` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `NAME` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ROL` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`USERNAME`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('danette', '3031', 'Anette Mora', 'USR');
INSERT INTO `usuario` VALUES ('dasandoval', '30101997', 'Dennise Sandoval', 'ADM');

SET FOREIGN_KEY_CHECKS = 1;
