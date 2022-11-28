/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : lanchonete

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 28/11/2022 19:12:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefone` char(14) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_endereco` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_endereco`(`id_endereco` ASC) USING BTREE,
  CONSTRAINT `id_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES (5, 'teste novo', '99999999999', 'email@email.com', 5);
INSERT INTO `clientes` VALUES (8, 'Wudson', '(21) 99987-054', 'teste@twste', 8);
INSERT INTO `clientes` VALUES (9, 'Wudson', '21988820554', 'teste@twste', 9);
INSERT INTO `clientes` VALUES (10, 'Wudson', '21988820554', 'teste@twste', 10);
INSERT INTO `clientes` VALUES (11, 'Wudson', '21988820554', 'teste@twste', 11);
INSERT INTO `clientes` VALUES (12, 'Wudson', '21988820554', 'teste@twste', 12);
INSERT INTO `clientes` VALUES (13, 'Wudson', '21988820554', 'teste@twste', 13);
INSERT INTO `clientes` VALUES (14, 'Wudson', '21988820554', 'teste@twste', 14);
INSERT INTO `clientes` VALUES (15, 'Wudson', '21988820554', 'teste@twste', 15);
INSERT INTO `clientes` VALUES (16, 'Wudson', '21988820554', 'teste@twste', 16);
INSERT INTO `clientes` VALUES (17, 'Wudson Teste', '(21) 98882-055', 'wudson06b.roberto@gmail.com', 17);

-- ----------------------------
-- Table structure for endereco
-- ----------------------------
DROP TABLE IF EXISTS `endereco`;
CREATE TABLE `endereco`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `rua` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bairro` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cidade` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `uf` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `numero` char(3) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cep` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of endereco
-- ----------------------------
INSERT INTO `endereco` VALUES (5, 'moon', 'brairo', 'cidade', 'rs', '10', '6999');
INSERT INTO `endereco` VALUES (8, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (9, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (10, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (11, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (12, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (13, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (14, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (15, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (16, 'ddddddd', 'dddddd', 'ddddddddddd', 'rj', '9', '22222222');
INSERT INTO `endereco` VALUES (17, 'rua de teste', 'Branco', 'Rio de Janeiro', 'rj', '7', '25267-320');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin');
INSERT INTO `users` VALUES (2, 'Wudson', '123');

SET FOREIGN_KEY_CHECKS = 1;
