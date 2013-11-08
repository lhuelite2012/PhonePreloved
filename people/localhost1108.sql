-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Nov 08, 2013, 09:57 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `phone_preloved`
-- 
CREATE DATABASE `phone_preloved` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phone_preloved`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `a_answer`
-- 

CREATE TABLE `a_answer` (
  `i_number` int(11) NOT NULL COMMENT '互動編號',
  `a_number` int(11) NOT NULL COMMENT '回覆編號',
  `a_content` varchar(80) NOT NULL COMMENT '回覆內容',
  `a_time` int(11) default NULL COMMENT '回覆時間',
  PRIMARY KEY  (`a_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='發問者回覆';

-- 
-- 列出以下資料庫的數據： `a_answer`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `administrator`
-- 

CREATE TABLE `administrator` (
  `admin_number` int(11) NOT NULL auto_increment COMMENT '管理員編號',
  `admin_account` varchar(40) NOT NULL COMMENT '管理員帳號',
  `admin_password` varchar(20) NOT NULL COMMENT '管理員密碼',
  `admin_name` varchar(10) NOT NULL COMMENT '管理員姓名',
  PRIMARY KEY  (`admin_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理員' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `administrator`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `all_answer`
-- 

CREATE TABLE `all_answer` (
  `all_number` int(11) NOT NULL auto_increment COMMENT '所有回答編號',
  `i_number` int(11) NOT NULL COMMENT '互動編號',
  `all_content` varchar(80) NOT NULL COMMENT '所有回答內容',
  `all_time` int(11) NOT NULL COMMENT '所有回答時間',
  PRIMARY KEY  (`all_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='所有發問者回覆' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `all_answer`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `answer`
-- 

CREATE TABLE `answer` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `q_number` int(11) NOT NULL COMMENT '問題編號',
  `answer` varchar(20) NOT NULL COMMENT '回答'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='個人回答';

-- 
-- 列出以下資料庫的數據： `answer`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `bid`
-- 

CREATE TABLE `bid` (
  `bid_number` int(11) NOT NULL auto_increment COMMENT '出價編號',
  `bid_price` int(11) NOT NULL COMMENT '出價價格',
  `bid_time` datetime default NULL COMMENT '出價時間',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  PRIMARY KEY  (`bid_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='出價' AUTO_INCREMENT=4 ;

-- 
-- 列出以下資料庫的數據： `bid`
-- 

INSERT INTO `bid` VALUES (1, 2350, '2013-11-08 17:55:10', 3, 109);
INSERT INTO `bid` VALUES (2, 2400, '2013-11-08 17:56:06', 5, 109);
INSERT INTO `bid` VALUES (3, 2410, '2013-11-08 17:56:37', 7, 109);

-- --------------------------------------------------------

-- 
-- 資料表格式： `brand`
-- 

CREATE TABLE `brand` (
  `b_number` int(11) NOT NULL auto_increment COMMENT '品牌編號',
  `b_name` varchar(50) NOT NULL COMMENT '品牌名稱',
  `logo` varchar(50) default NULL COMMENT 'LOGO',
  `aliases` varchar(20) default NULL COMMENT '別名',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  PRIMARY KEY  (`b_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商品品牌' AUTO_INCREMENT=18 ;

-- 
-- 列出以下資料庫的數據： `brand`
-- 

INSERT INTO `brand` VALUES (1, 'Nike', 'brand/nike-logo.jpg', '耐克', 0);
INSERT INTO `brand` VALUES (2, 'Balenciaga', 'brand/Balenciaga-Logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (3, 'BURBERRY', 'brand/burberry_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (4, 'CHANEL', 'brand/Chanel_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (5, 'COACH', 'brand/coach_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (6, 'Dior', 'brand/dior_logo.gif', NULL, 0);
INSERT INTO `brand` VALUES (7, 'Fendi', 'brand/Fendi-logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (8, 'GUCCI', 'brand/Gucci_Logo.gif', NULL, 0);
INSERT INTO `brand` VALUES (9, 'LACOSTE', 'brand/lacoste_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (10, 'HERMES', 'brand/hermes_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (11, 'LV', 'brand/lv_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (12, 'PRADA', 'brand/Prada_logo.gif', NULL, 0);
INSERT INTO `brand` VALUES (13, 'YSL', 'brand/ysl_logo.jpg', NULL, 0);
INSERT INTO `brand` VALUES (14, 'adidas', 'brand/adidas_logo.jpg', '愛迪達', 0);
INSERT INTO `brand` VALUES (15, 'New Balance', 'brand/newbalance_logo.jpg', 'NB', 0);
INSERT INTO `brand` VALUES (16, 'Fx creations', 'brand/Fx_creations.jpg', NULL, 0);
INSERT INTO `brand` VALUES (17, 'AEROSOLES', 'brand/AEROSOLES.jpg', NULL, 0);

-- --------------------------------------------------------

-- 
-- 資料表格式： `c_mode`
-- 

CREATE TABLE `c_mode` (
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `c_mode` varchar(20) NOT NULL COMMENT '交易方式'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='交易方式';

-- 
-- 列出以下資料庫的數據： `c_mode`
-- 

INSERT INTO `c_mode` VALUES (0, '郵寄');
INSERT INTO `c_mode` VALUES (3, '郵寄');
INSERT INTO `c_mode` VALUES (3, '全家');
INSERT INTO `c_mode` VALUES (5, '7-11');
INSERT INTO `c_mode` VALUES (5, '全家');
INSERT INTO `c_mode` VALUES (43, '全家');
INSERT INTO `c_mode` VALUES (43, '郵寄');
INSERT INTO `c_mode` VALUES (42, '全家');
INSERT INTO `c_mode` VALUES (42, '全家');
INSERT INTO `c_mode` VALUES (6, '7-11');
INSERT INTO `c_mode` VALUES (6, '全家');
INSERT INTO `c_mode` VALUES (6, '面交');
INSERT INTO `c_mode` VALUES (6, '郵寄');
INSERT INTO `c_mode` VALUES (9, '郵寄');
INSERT INTO `c_mode` VALUES (11, '全家');
INSERT INTO `c_mode` VALUES (11, '7-11');
INSERT INTO `c_mode` VALUES (11, '郵寄');
INSERT INTO `c_mode` VALUES (11, '面交');
INSERT INTO `c_mode` VALUES (12, '郵寄');
INSERT INTO `c_mode` VALUES (12, '7-11');
INSERT INTO `c_mode` VALUES (12, '全家');
INSERT INTO `c_mode` VALUES (12, '面交');
INSERT INTO `c_mode` VALUES (14, '郵寄');
INSERT INTO `c_mode` VALUES (14, '7-11');
INSERT INTO `c_mode` VALUES (14, '全家');
INSERT INTO `c_mode` VALUES (14, '面交');
INSERT INTO `c_mode` VALUES (15, '郵寄');
INSERT INTO `c_mode` VALUES (15, '郵寄');
INSERT INTO `c_mode` VALUES (16, '郵寄');
INSERT INTO `c_mode` VALUES (16, '郵寄');
INSERT INTO `c_mode` VALUES (16, '郵寄');
INSERT INTO `c_mode` VALUES (17, '郵寄');
INSERT INTO `c_mode` VALUES (17, '7-11');
INSERT INTO `c_mode` VALUES (17, '全家');
INSERT INTO `c_mode` VALUES (17, '面交');
INSERT INTO `c_mode` VALUES (18, '郵寄');
INSERT INTO `c_mode` VALUES (19, '面交');
INSERT INTO `c_mode` VALUES (20, '郵寄');
INSERT INTO `c_mode` VALUES (21, '面交');
INSERT INTO `c_mode` VALUES (22, '面交');
INSERT INTO `c_mode` VALUES (23, '面交');
INSERT INTO `c_mode` VALUES (24, '郵寄');
INSERT INTO `c_mode` VALUES (24, '7-11');
INSERT INTO `c_mode` VALUES (24, '全家');
INSERT INTO `c_mode` VALUES (24, '面交');
INSERT INTO `c_mode` VALUES (25, '郵寄');
INSERT INTO `c_mode` VALUES (25, '7-11');
INSERT INTO `c_mode` VALUES (25, '全家');
INSERT INTO `c_mode` VALUES (25, '面交');
INSERT INTO `c_mode` VALUES (26, '郵寄');
INSERT INTO `c_mode` VALUES (26, '7-11');
INSERT INTO `c_mode` VALUES (26, '全家');
INSERT INTO `c_mode` VALUES (27, '面交');
INSERT INTO `c_mode` VALUES (28, '面交');
INSERT INTO `c_mode` VALUES (29, '面交');
INSERT INTO `c_mode` VALUES (30, '郵寄');
INSERT INTO `c_mode` VALUES (30, '7-11');
INSERT INTO `c_mode` VALUES (30, '全家');
INSERT INTO `c_mode` VALUES (30, '面交');
INSERT INTO `c_mode` VALUES (31, '郵寄');
INSERT INTO `c_mode` VALUES (31, '7-11');
INSERT INTO `c_mode` VALUES (31, '全家');
INSERT INTO `c_mode` VALUES (31, '面交');
INSERT INTO `c_mode` VALUES (63, '郵寄');
INSERT INTO `c_mode` VALUES (62, '7-11店到店');
INSERT INTO `c_mode` VALUES (61, '郵寄');
INSERT INTO `c_mode` VALUES (32, '郵寄');
INSERT INTO `c_mode` VALUES (32, '7-11');
INSERT INTO `c_mode` VALUES (32, '全家');
INSERT INTO `c_mode` VALUES (32, '面交');
INSERT INTO `c_mode` VALUES (33, '7-11');
INSERT INTO `c_mode` VALUES (33, '全家');
INSERT INTO `c_mode` VALUES (33, '7-11');
INSERT INTO `c_mode` VALUES (33, '全家');
INSERT INTO `c_mode` VALUES (35, '7-11');
INSERT INTO `c_mode` VALUES (35, '全家');
INSERT INTO `c_mode` VALUES (36, '7-11');
INSERT INTO `c_mode` VALUES (36, '全家');
INSERT INTO `c_mode` VALUES (37, '郵寄');
INSERT INTO `c_mode` VALUES (37, '7-11');
INSERT INTO `c_mode` VALUES (37, '全家');
INSERT INTO `c_mode` VALUES (38, '7-11');
INSERT INTO `c_mode` VALUES (38, '全家');
INSERT INTO `c_mode` VALUES (39, '7-11');
INSERT INTO `c_mode` VALUES (39, '全家');
INSERT INTO `c_mode` VALUES (39, '面交');
INSERT INTO `c_mode` VALUES (39, '7-11');
INSERT INTO `c_mode` VALUES (39, '全家');
INSERT INTO `c_mode` VALUES (39, '面交');
INSERT INTO `c_mode` VALUES (40, '7-11');
INSERT INTO `c_mode` VALUES (40, '全家');
INSERT INTO `c_mode` VALUES (43, '面交');
INSERT INTO `c_mode` VALUES (44, '郵寄');
INSERT INTO `c_mode` VALUES (44, '7-11');
INSERT INTO `c_mode` VALUES (44, '全家');
INSERT INTO `c_mode` VALUES (2, '7-11店到店');
INSERT INTO `c_mode` VALUES (48, '郵寄');
INSERT INTO `c_mode` VALUES (47, '郵寄');
INSERT INTO `c_mode` VALUES (46, '7-11');
INSERT INTO `c_mode` VALUES (46, '全家');
INSERT INTO `c_mode` VALUES (2, '郵寄');
INSERT INTO `c_mode` VALUES (59, '面交');
INSERT INTO `c_mode` VALUES (64, '郵寄');
INSERT INTO `c_mode` VALUES (64, '7-11店到店');
INSERT INTO `c_mode` VALUES (67, '郵寄');
INSERT INTO `c_mode` VALUES (67, '面交');
INSERT INTO `c_mode` VALUES (71, '郵寄');
INSERT INTO `c_mode` VALUES (71, '7-11');
INSERT INTO `c_mode` VALUES (97, '郵寄');
INSERT INTO `c_mode` VALUES (97, '7-11');
INSERT INTO `c_mode` VALUES (98, '(null)');
INSERT INTO `c_mode` VALUES (98, '(null)');
INSERT INTO `c_mode` VALUES (98, '(null)');
INSERT INTO `c_mode` VALUES (98, '(null)');
INSERT INTO `c_mode` VALUES (99, '郵寄');
INSERT INTO `c_mode` VALUES (99, '7-11');
INSERT INTO `c_mode` VALUES (99, '全家');
INSERT INTO `c_mode` VALUES (100, '(null) ');
INSERT INTO `c_mode` VALUES (100, '(null) ');
INSERT INTO `c_mode` VALUES (100, '(null) ');
INSERT INTO `c_mode` VALUES (100, '(null) ');
INSERT INTO `c_mode` VALUES (102, '郵寄');
INSERT INTO `c_mode` VALUES (102, '7-11');
INSERT INTO `c_mode` VALUES (103, '7-11');
INSERT INTO `c_mode` VALUES (103, '面交');
INSERT INTO `c_mode` VALUES (106, '7-11');
INSERT INTO `c_mode` VALUES (106, '面交');
INSERT INTO `c_mode` VALUES (107, '郵寄');
INSERT INTO `c_mode` VALUES (107, '面交');
INSERT INTO `c_mode` VALUES (108, '郵寄');
INSERT INTO `c_mode` VALUES (108, '7-11');
INSERT INTO `c_mode` VALUES (108, '全家');
INSERT INTO `c_mode` VALUES (108, '面交');
INSERT INTO `c_mode` VALUES (109, '郵寄');
INSERT INTO `c_mode` VALUES (109, '面交');

-- --------------------------------------------------------

-- 
-- 資料表格式： `c_payment`
-- 

CREATE TABLE `c_payment` (
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `c_payment` varchar(20) NOT NULL COMMENT '付款方式'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='付款方式';

-- 
-- 列出以下資料庫的數據： `c_payment`
-- 

INSERT INTO `c_payment` VALUES (0, '匯款');
INSERT INTO `c_payment` VALUES (3, '匯款');
INSERT INTO `c_payment` VALUES (5, '匯款');
INSERT INTO `c_payment` VALUES (42, '面交');
INSERT INTO `c_payment` VALUES (42, '匯款');
INSERT INTO `c_payment` VALUES (6, '面交');
INSERT INTO `c_payment` VALUES (6, '匯款');
INSERT INTO `c_payment` VALUES (9, '匯款');
INSERT INTO `c_payment` VALUES (11, '面交');
INSERT INTO `c_payment` VALUES (11, '匯款');
INSERT INTO `c_payment` VALUES (12, '匯款');
INSERT INTO `c_payment` VALUES (12, '面交');
INSERT INTO `c_payment` VALUES (14, '匯款');
INSERT INTO `c_payment` VALUES (14, '面交');
INSERT INTO `c_payment` VALUES (15, '匯款');
INSERT INTO `c_payment` VALUES (15, '匯款');
INSERT INTO `c_payment` VALUES (16, '匯款');
INSERT INTO `c_payment` VALUES (16, '匯款');
INSERT INTO `c_payment` VALUES (16, '匯款');
INSERT INTO `c_payment` VALUES (17, '匯款');
INSERT INTO `c_payment` VALUES (17, '面交');
INSERT INTO `c_payment` VALUES (18, '匯款');
INSERT INTO `c_payment` VALUES (19, '面交');
INSERT INTO `c_payment` VALUES (20, '匯款');
INSERT INTO `c_payment` VALUES (21, '面交');
INSERT INTO `c_payment` VALUES (22, '面交');
INSERT INTO `c_payment` VALUES (23, '面交');
INSERT INTO `c_payment` VALUES (24, '匯款');
INSERT INTO `c_payment` VALUES (24, '面交');
INSERT INTO `c_payment` VALUES (25, '匯款');
INSERT INTO `c_payment` VALUES (25, '面交');
INSERT INTO `c_payment` VALUES (26, '匯款');
INSERT INTO `c_payment` VALUES (26, '匯款');
INSERT INTO `c_payment` VALUES (27, '面交');
INSERT INTO `c_payment` VALUES (28, '面交');
INSERT INTO `c_payment` VALUES (29, '面交');
INSERT INTO `c_payment` VALUES (30, '匯款');
INSERT INTO `c_payment` VALUES (30, '面交');
INSERT INTO `c_payment` VALUES (31, '匯款');
INSERT INTO `c_payment` VALUES (31, '面交');
INSERT INTO `c_payment` VALUES (55, '面交');
INSERT INTO `c_payment` VALUES (54, '面交');
INSERT INTO `c_payment` VALUES (32, '匯款');
INSERT INTO `c_payment` VALUES (32, '面交');
INSERT INTO `c_payment` VALUES (33, '匯款');
INSERT INTO `c_payment` VALUES (33, '匯款');
INSERT INTO `c_payment` VALUES (35, '匯款');
INSERT INTO `c_payment` VALUES (36, '匯款');
INSERT INTO `c_payment` VALUES (37, '匯款');
INSERT INTO `c_payment` VALUES (38, '匯款');
INSERT INTO `c_payment` VALUES (39, '匯款');
INSERT INTO `c_payment` VALUES (39, '面交');
INSERT INTO `c_payment` VALUES (39, '匯款');
INSERT INTO `c_payment` VALUES (39, '面交');
INSERT INTO `c_payment` VALUES (40, '匯款');
INSERT INTO `c_payment` VALUES (42, '匯款');
INSERT INTO `c_payment` VALUES (42, '面交');
INSERT INTO `c_payment` VALUES (43, '面交');
INSERT INTO `c_payment` VALUES (44, '匯款');
INSERT INTO `c_payment` VALUES (47, '匯款');
INSERT INTO `c_payment` VALUES (46, '匯款');
INSERT INTO `c_payment` VALUES (48, '匯款');
INSERT INTO `c_payment` VALUES (56, '面交');
INSERT INTO `c_payment` VALUES (57, '面交');
INSERT INTO `c_payment` VALUES (58, '面交');
INSERT INTO `c_payment` VALUES (59, '面交');
INSERT INTO `c_payment` VALUES (60, '面交');
INSERT INTO `c_payment` VALUES (67, '面交');
INSERT INTO `c_payment` VALUES (67, '匯款');
INSERT INTO `c_payment` VALUES (71, '匯款');
INSERT INTO `c_payment` VALUES (97, '匯款');
INSERT INTO `c_payment` VALUES (98, '(null)');
INSERT INTO `c_payment` VALUES (98, '(null)');
INSERT INTO `c_payment` VALUES (99, '匯款');
INSERT INTO `c_payment` VALUES (100, '(null) ');
INSERT INTO `c_payment` VALUES (100, '(null) ');
INSERT INTO `c_payment` VALUES (102, '匯款');
INSERT INTO `c_payment` VALUES (103, '匯款');
INSERT INTO `c_payment` VALUES (103, '面交');
INSERT INTO `c_payment` VALUES (106, '匯款');
INSERT INTO `c_payment` VALUES (106, '面交');
INSERT INTO `c_payment` VALUES (107, '匯款');
INSERT INTO `c_payment` VALUES (107, '面交');
INSERT INTO `c_payment` VALUES (108, '匯款');
INSERT INTO `c_payment` VALUES (108, '面交');
INSERT INTO `c_payment` VALUES (109, '郵局');
INSERT INTO `c_payment` VALUES (109, '面交');

-- --------------------------------------------------------

-- 
-- 資料表格式： `c_picture`
-- 

CREATE TABLE `c_picture` (
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `c_picture` varchar(50) NOT NULL COMMENT '商品圖片'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品圖片';

-- 
-- 列出以下資料庫的數據： `c_picture`
-- 

INSERT INTO `c_picture` VALUES (0, '0_6_131013062830.jpg');
INSERT INTO `c_picture` VALUES (0, '1_6_131013062831.JPG');
INSERT INTO `c_picture` VALUES (0, '2_6_131013062831.jpg');
INSERT INTO `c_picture` VALUES (0, '3_6_131013062831.jpg');
INSERT INTO `c_picture` VALUES (0, '4_6_131013062832.jpg');
INSERT INTO `c_picture` VALUES (0, '6_6_131013062832.JPG');
INSERT INTO `c_picture` VALUES (4, '0_2_131011035511.gif');
INSERT INTO `c_picture` VALUES (42, '2_2_131013040437.jpg');
INSERT INTO `c_picture` VALUES (42, '1_2_131013040434.jpg');
INSERT INTO `c_picture` VALUES (42, '0_2_131013040432.jpg');
INSERT INTO `c_picture` VALUES (8, '0_6_131011084223.jpg');
INSERT INTO `c_picture` VALUES (8, '1_6_131011084223.jpg');
INSERT INTO `c_picture` VALUES (8, '2_6_131011084224.jpg');
INSERT INTO `c_picture` VALUES (8, '3_6_131011084224.jpg');
INSERT INTO `c_picture` VALUES (8, '4_6_131011084224.jpg');
INSERT INTO `c_picture` VALUES (8, '6_6_131011084224.jpg');
INSERT INTO `c_picture` VALUES (9, '0_6_131011084629.jpg');
INSERT INTO `c_picture` VALUES (9, '1_6_131011084630.jpg');
INSERT INTO `c_picture` VALUES (9, '2_6_131011084630.jpg');
INSERT INTO `c_picture` VALUES (9, '3_6_131011084630.jpg');
INSERT INTO `c_picture` VALUES (9, '4_6_131011084631.jpg');
INSERT INTO `c_picture` VALUES (9, '6_6_131011084631.jpg');
INSERT INTO `c_picture` VALUES (11, '0_1_131013053032.jpg');
INSERT INTO `c_picture` VALUES (11, '2_1_131013053032.jpg');
INSERT INTO `c_picture` VALUES (11, '4_1_131013053033.jpg');
INSERT INTO `c_picture` VALUES (12, '0_1_131013060458.jpg');
INSERT INTO `c_picture` VALUES (12, '2_1_131013060458.jpg');
INSERT INTO `c_picture` VALUES (14, '0_1_131013060713.jpg');
INSERT INTO `c_picture` VALUES (14, '2_1_131013060713.jpg');
INSERT INTO `c_picture` VALUES (15, '0_6_131013063429.jpg');
INSERT INTO `c_picture` VALUES (15, '1_6_131013063430.jpg');
INSERT INTO `c_picture` VALUES (15, '2_6_131013063430.jpg');
INSERT INTO `c_picture` VALUES (15, '3_6_131013063431.jpg');
INSERT INTO `c_picture` VALUES (15, '4_6_131013063431.jpg');
INSERT INTO `c_picture` VALUES (15, '6_6_131013063431.JPG');
INSERT INTO `c_picture` VALUES (15, '0_6_131013063526.jpg');
INSERT INTO `c_picture` VALUES (15, '1_6_131013063526.jpg');
INSERT INTO `c_picture` VALUES (15, '2_6_131013063527.jpg');
INSERT INTO `c_picture` VALUES (15, '3_6_131013063527.jpg');
INSERT INTO `c_picture` VALUES (15, '4_6_131013063527.jpg');
INSERT INTO `c_picture` VALUES (15, '6_6_131013063528.JPG');
INSERT INTO `c_picture` VALUES (16, '0_6_131013063858.jpg');
INSERT INTO `c_picture` VALUES (16, '1_6_131013063858.jpg');
INSERT INTO `c_picture` VALUES (16, '2_6_131013063858.jpg');
INSERT INTO `c_picture` VALUES (16, '3_6_131013063859.jpg');
INSERT INTO `c_picture` VALUES (16, '4_6_131013063859.jpg');
INSERT INTO `c_picture` VALUES (16, '0_6_131013064148.jpg');
INSERT INTO `c_picture` VALUES (16, '1_6_131013064148.jpg');
INSERT INTO `c_picture` VALUES (16, '2_6_131013064149.jpg');
INSERT INTO `c_picture` VALUES (16, '3_6_131013064149.jpg');
INSERT INTO `c_picture` VALUES (16, '4_6_131013064149.jpg');
INSERT INTO `c_picture` VALUES (16, '0_6_131013064236.jpg');
INSERT INTO `c_picture` VALUES (16, '1_6_131013064236.jpg');
INSERT INTO `c_picture` VALUES (16, '2_6_131013064236.jpg');
INSERT INTO `c_picture` VALUES (16, '3_6_131013064237.jpg');
INSERT INTO `c_picture` VALUES (16, '4_6_131013064237.jpg');
INSERT INTO `c_picture` VALUES (16, '6_6_131013064238.jpg');
INSERT INTO `c_picture` VALUES (17, '0_1_131013064244.jpg');
INSERT INTO `c_picture` VALUES (17, '2_1_131013064244.jpg');
INSERT INTO `c_picture` VALUES (18, '0_6_131013064952.jpg');
INSERT INTO `c_picture` VALUES (18, '1_6_131013064952.jpg');
INSERT INTO `c_picture` VALUES (18, '2_6_131013064952.jpg');
INSERT INTO `c_picture` VALUES (18, '3_6_131013064953.jpg');
INSERT INTO `c_picture` VALUES (18, '4_6_131013064953.jpg');
INSERT INTO `c_picture` VALUES (18, '6_6_131013064954.jpg');
INSERT INTO `c_picture` VALUES (19, '0_6_131013073418.jpg');
INSERT INTO `c_picture` VALUES (19, '2_6_131013073418.jpg');
INSERT INTO `c_picture` VALUES (19, '4_6_131013073419.JPG');
INSERT INTO `c_picture` VALUES (19, '6_6_131013073419.JPG');
INSERT INTO `c_picture` VALUES (20, '0_6_131013073817.jpg');
INSERT INTO `c_picture` VALUES (20, '1_6_131013073817.jpg');
INSERT INTO `c_picture` VALUES (20, '2_6_131013073817.jpg');
INSERT INTO `c_picture` VALUES (20, '4_6_131013073818.jpg');
INSERT INTO `c_picture` VALUES (20, '6_6_131013073818.jpg');
INSERT INTO `c_picture` VALUES (21, '0_6_131013080116.jpg');
INSERT INTO `c_picture` VALUES (21, '1_6_131013080117.jpg');
INSERT INTO `c_picture` VALUES (21, '2_6_131013080117.jpg');
INSERT INTO `c_picture` VALUES (21, '4_6_131013080118.jpg');
INSERT INTO `c_picture` VALUES (21, '6_6_131013080118.jpg');
INSERT INTO `c_picture` VALUES (22, '0_6_131013082110.jpg');
INSERT INTO `c_picture` VALUES (22, '2_6_131013082110.jpg');
INSERT INTO `c_picture` VALUES (22, '4_6_131013082111.jpg');
INSERT INTO `c_picture` VALUES (22, '6_6_131013082111.jpg');
INSERT INTO `c_picture` VALUES (23, '0_6_131013082638.jpg');
INSERT INTO `c_picture` VALUES (23, '2_6_131013082639.jpg');
INSERT INTO `c_picture` VALUES (23, '4_6_131013082639.jpg');
INSERT INTO `c_picture` VALUES (23, '6_6_131013082639.jpg');
INSERT INTO `c_picture` VALUES (24, '0_1_131013083720.jpg');
INSERT INTO `c_picture` VALUES (24, '1_1_131013083720.jpg');
INSERT INTO `c_picture` VALUES (24, '2_1_131013083720.jpg');
INSERT INTO `c_picture` VALUES (24, '4_1_131013083721.jpg');
INSERT INTO `c_picture` VALUES (24, '6_1_131013083721.jpg');
INSERT INTO `c_picture` VALUES (25, '0_1_131013084328.jpg');
INSERT INTO `c_picture` VALUES (25, '1_1_131013084328.jpg');
INSERT INTO `c_picture` VALUES (25, '2_1_131013084329.jpg');
INSERT INTO `c_picture` VALUES (25, '4_1_131013084329.jpg');
INSERT INTO `c_picture` VALUES (25, '6_1_131013084329.jpg');
INSERT INTO `c_picture` VALUES (26, '0_6_131013085817.jpg');
INSERT INTO `c_picture` VALUES (26, '2_6_131013085818.jpg');
INSERT INTO `c_picture` VALUES (26, '4_6_131013085818.jpg');
INSERT INTO `c_picture` VALUES (26, '6_6_131013085819.jpg');
INSERT INTO `c_picture` VALUES (26, '0_7_131013015115.jpg');
INSERT INTO `c_picture` VALUES (26, '1_7_131013015116.jpg');
INSERT INTO `c_picture` VALUES (26, '2_7_131013015117.jpg');
INSERT INTO `c_picture` VALUES (26, '4_7_131013015117.jpg');
INSERT INTO `c_picture` VALUES (26, '6_7_131013015118.jpg');
INSERT INTO `c_picture` VALUES (27, '0_6_131013090748.jpg');
INSERT INTO `c_picture` VALUES (27, '2_6_131013090749.jpg');
INSERT INTO `c_picture` VALUES (27, '4_6_131013090749.jpg');
INSERT INTO `c_picture` VALUES (27, '6_6_131013090749.jpg');
INSERT INTO `c_picture` VALUES (28, '0_6_131013091033.jpg');
INSERT INTO `c_picture` VALUES (28, '2_6_131013091033.jpg');
INSERT INTO `c_picture` VALUES (28, '4_6_131013091034.jpg');
INSERT INTO `c_picture` VALUES (28, '6_6_131013091034.jpg');
INSERT INTO `c_picture` VALUES (29, '0_6_131013091234.jpg');
INSERT INTO `c_picture` VALUES (29, '2_6_131013091234.jpg');
INSERT INTO `c_picture` VALUES (29, '4_6_131013091235.jpg');
INSERT INTO `c_picture` VALUES (29, '6_6_131013091235.jpg');
INSERT INTO `c_picture` VALUES (30, '0_1_131013093701.jpg');
INSERT INTO `c_picture` VALUES (30, '2_1_131013093701.jpg');
INSERT INTO `c_picture` VALUES (31, '0_1_131013100832.jpg');
INSERT INTO `c_picture` VALUES (31, '2_1_131013100833.jpg');
INSERT INTO `c_picture` VALUES (32, '0_7_131013121807.jpg');
INSERT INTO `c_picture` VALUES (32, '2_7_131013121808.jpg');
INSERT INTO `c_picture` VALUES (32, '4_7_131013121808.jpg');
INSERT INTO `c_picture` VALUES (32, '6_7_131013121809.jpg');
INSERT INTO `c_picture` VALUES (33, '0_7_131013123856.jpg');
INSERT INTO `c_picture` VALUES (33, '1_7_131013123856.jpg');
INSERT INTO `c_picture` VALUES (33, '2_7_131013123856.jpg');
INSERT INTO `c_picture` VALUES (33, '4_7_131013123857.jpg');
INSERT INTO `c_picture` VALUES (33, '6_7_131013123857.jpg');
INSERT INTO `c_picture` VALUES (33, '0_7_131013124021.jpg');
INSERT INTO `c_picture` VALUES (33, '1_7_131013124021.jpg');
INSERT INTO `c_picture` VALUES (33, '2_7_131013124022.jpg');
INSERT INTO `c_picture` VALUES (33, '4_7_131013124022.jpg');
INSERT INTO `c_picture` VALUES (33, '6_7_131013124023.jpg');
INSERT INTO `c_picture` VALUES (35, '0_7_131013015503.jpg');
INSERT INTO `c_picture` VALUES (35, '1_7_131013015504.jpg');
INSERT INTO `c_picture` VALUES (35, '2_7_131013015504.jpg');
INSERT INTO `c_picture` VALUES (35, '4_7_131013015504.jpg');
INSERT INTO `c_picture` VALUES (35, '6_7_131013015505.jpg');
INSERT INTO `c_picture` VALUES (36, '0_7_131013021015.jpg');
INSERT INTO `c_picture` VALUES (36, '1_7_131013021016.jpg');
INSERT INTO `c_picture` VALUES (36, '2_7_131013021016.jpg');
INSERT INTO `c_picture` VALUES (36, '4_7_131013021017.jpg');
INSERT INTO `c_picture` VALUES (36, '6_7_131013021017.jpg');
INSERT INTO `c_picture` VALUES (38, '0_7_131013022533.jpg');
INSERT INTO `c_picture` VALUES (38, '2_7_131013022534.jpg');
INSERT INTO `c_picture` VALUES (38, '4_7_131013022534.jpg');
INSERT INTO `c_picture` VALUES (38, '6_7_131013022535.jpg');
INSERT INTO `c_picture` VALUES (39, '0_7_131013023357.jpg');
INSERT INTO `c_picture` VALUES (39, '1_7_131013023357.jpg');
INSERT INTO `c_picture` VALUES (39, '2_7_131013023358.jpg');
INSERT INTO `c_picture` VALUES (39, '4_7_131013023358.jpg');
INSERT INTO `c_picture` VALUES (39, '0_7_131013023429.jpg');
INSERT INTO `c_picture` VALUES (39, '1_7_131013023429.jpg');
INSERT INTO `c_picture` VALUES (39, '2_7_131013023430.jpg');
INSERT INTO `c_picture` VALUES (39, '4_7_131013023430.jpg');
INSERT INTO `c_picture` VALUES (39, '6_7_131013023431.jpg');
INSERT INTO `c_picture` VALUES (40, '0_7_131013024446.jpg');
INSERT INTO `c_picture` VALUES (40, '1_7_131013024447.jpg');
INSERT INTO `c_picture` VALUES (40, '2_7_131013024447.jpg');
INSERT INTO `c_picture` VALUES (40, '4_7_131013024448.jpg');
INSERT INTO `c_picture` VALUES (40, '6_7_131013024449.jpg');
INSERT INTO `c_picture` VALUES (42, '4_2_131013040439.jpg');
INSERT INTO `c_picture` VALUES (42, '6_2_131013040442.jpg');
INSERT INTO `c_picture` VALUES (42, '0_2_131013040456.jpg');
INSERT INTO `c_picture` VALUES (42, '1_2_131013040456.jpg');
INSERT INTO `c_picture` VALUES (42, '2_2_131013040456.jpg');
INSERT INTO `c_picture` VALUES (42, '4_2_131013040456.jpg');
INSERT INTO `c_picture` VALUES (42, '6_2_131013040456.jpg');
INSERT INTO `c_picture` VALUES (43, '0_2_131013042012.jpg');
INSERT INTO `c_picture` VALUES (43, '1_2_131013042015.jpg');
INSERT INTO `c_picture` VALUES (43, '2_2_131013042017.jpg');
INSERT INTO `c_picture` VALUES (43, '4_2_131013042020.jpg');
INSERT INTO `c_picture` VALUES (43, '6_2_131013042023.jpg');
INSERT INTO `c_picture` VALUES (47, '0_3_131013043954.jpg');
INSERT INTO `c_picture` VALUES (48, '0_3_131013044230.jpg');
INSERT INTO `c_picture` VALUES (67, '0_6_131014085859.jpg');
INSERT INTO `c_picture` VALUES (67, '1_6_131014085859.jpg');
INSERT INTO `c_picture` VALUES (67, '2_6_131014085900.jpg');
INSERT INTO `c_picture` VALUES (67, '4_6_131014085900.jpg');
INSERT INTO `c_picture` VALUES (67, '6_6_131014085900.jpg');
INSERT INTO `c_picture` VALUES (71, '0_6_131014101756.jpg');
INSERT INTO `c_picture` VALUES (71, '1_6_131014101757.jpg');
INSERT INTO `c_picture` VALUES (71, '2_6_131014101757.jpg');
INSERT INTO `c_picture` VALUES (71, '3_6_131014101758.jpg');
INSERT INTO `c_picture` VALUES (71, '4_6_131014101758.jpg');
INSERT INTO `c_picture` VALUES (97, '0_6_131014114719.jpg');
INSERT INTO `c_picture` VALUES (97, '2_6_131014114719.jpg');
INSERT INTO `c_picture` VALUES (97, '4_6_131014114720.jpg');
INSERT INTO `c_picture` VALUES (97, '6_6_131014114720.jpg');
INSERT INTO `c_picture` VALUES (99, '0_6_131014115920.jpg');
INSERT INTO `c_picture` VALUES (99, '2_6_131014115920.jpg');
INSERT INTO `c_picture` VALUES (99, '4_6_131014115921.jpg');
INSERT INTO `c_picture` VALUES (102, '0_6_131014121117.jpg');
INSERT INTO `c_picture` VALUES (102, '2_6_131014121118.jpg');
INSERT INTO `c_picture` VALUES (102, '4_6_131014121118.jpg');
INSERT INTO `c_picture` VALUES (103, '0_5_131015115455.jpg');
INSERT INTO `c_picture` VALUES (103, '2_5_131015115456.jpg');
INSERT INTO `c_picture` VALUES (106, '0_9_131015125849.jpg');
INSERT INTO `c_picture` VALUES (107, '0_9_131015011003.jpg');
INSERT INTO `c_picture` VALUES (107, '1_9_131015011006.jpg');
INSERT INTO `c_picture` VALUES (107, '2_9_131015011009.jpg');
INSERT INTO `c_picture` VALUES (107, '4_9_131015011011.jpg');
INSERT INTO `c_picture` VALUES (107, '6_9_131015011014.jpg');
INSERT INTO `c_picture` VALUES (108, '0_9_131016051129.jpg');
INSERT INTO `c_picture` VALUES (108, '2_9_131016051129.jpg');
INSERT INTO `c_picture` VALUES (109, '0_3_131016094814.jpg');
INSERT INTO `c_picture` VALUES (109, '2_3_131016094817.jpg');
INSERT INTO `c_picture` VALUES (109, '4_3_131016094820.jpg');
INSERT INTO `c_picture` VALUES (109, '6_3_131016094822.jpg');

-- --------------------------------------------------------

-- 
-- 資料表格式： `c_report`
-- 

CREATE TABLE `c_report` (
  `r_number` int(11) NOT NULL auto_increment COMMENT '檢舉編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `p_number` int(11) NOT NULL COMMENT '項目編號',
  `c_description` varchar(100) NOT NULL COMMENT '檢舉意見',
  `account` varchar(50) NOT NULL COMMENT '檢舉人的帳號',
  PRIMARY KEY  (`r_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='檢舉商品' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `c_report`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `city`
-- 

CREATE TABLE `city` (
  `city_number` int(11) NOT NULL COMMENT '市編號',
  `city_name` varchar(20) NOT NULL COMMENT '市名稱',
  `county_number` int(11) NOT NULL COMMENT '縣編號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='市';

-- 
-- 列出以下資料庫的數據： `city`
-- 

INSERT INTO `city` VALUES (1, '仁愛區', 1);
INSERT INTO `city` VALUES (2, '信義區', 1);
INSERT INTO `city` VALUES (3, '中正區', 1);
INSERT INTO `city` VALUES (4, '中山區', 1);
INSERT INTO `city` VALUES (5, '安樂區', 1);
INSERT INTO `city` VALUES (6, '暖暖區', 1);
INSERT INTO `city` VALUES (7, '七堵區', 1);
INSERT INTO `city` VALUES (1, '中正區', 2);
INSERT INTO `city` VALUES (2, '大同區', 2);
INSERT INTO `city` VALUES (3, '中山區', 2);
INSERT INTO `city` VALUES (4, '松山區', 2);
INSERT INTO `city` VALUES (5, '大安區', 2);
INSERT INTO `city` VALUES (6, '萬華區', 2);
INSERT INTO `city` VALUES (7, '信義區', 2);
INSERT INTO `city` VALUES (8, '士林區', 2);
INSERT INTO `city` VALUES (9, '北投區', 2);
INSERT INTO `city` VALUES (10, '內湖區', 2);
INSERT INTO `city` VALUES (11, '南港區', 2);
INSERT INTO `city` VALUES (12, '文山區', 2);
INSERT INTO `city` VALUES (1, '萬里區', 3);
INSERT INTO `city` VALUES (2, '金山區', 3);
INSERT INTO `city` VALUES (3, '板橋區', 3);
INSERT INTO `city` VALUES (4, '汐止區', 3);
INSERT INTO `city` VALUES (5, '深坑區', 3);
INSERT INTO `city` VALUES (6, '石碇區', 3);
INSERT INTO `city` VALUES (7, '瑞芳區', 3);
INSERT INTO `city` VALUES (8, '平溪區', 3);
INSERT INTO `city` VALUES (9, '雙溪區', 3);
INSERT INTO `city` VALUES (10, '貢寮區', 3);
INSERT INTO `city` VALUES (11, '新店區', 3);
INSERT INTO `city` VALUES (12, '坪林區', 3);
INSERT INTO `city` VALUES (13, '烏來區', 3);
INSERT INTO `city` VALUES (14, '永和區', 3);
INSERT INTO `city` VALUES (15, '中和區', 3);
INSERT INTO `city` VALUES (16, '土城區', 3);
INSERT INTO `city` VALUES (17, '三峽區', 3);
INSERT INTO `city` VALUES (18, '樹林區', 3);
INSERT INTO `city` VALUES (19, '鶯歌區', 3);
INSERT INTO `city` VALUES (20, '三重區', 3);
INSERT INTO `city` VALUES (21, '新莊區', 3);
INSERT INTO `city` VALUES (22, '泰山區', 3);
INSERT INTO `city` VALUES (23, '林口區', 3);
INSERT INTO `city` VALUES (24, '蘆洲區', 3);
INSERT INTO `city` VALUES (25, '五股區', 3);
INSERT INTO `city` VALUES (26, '八里區', 3);
INSERT INTO `city` VALUES (27, '淡水區', 3);
INSERT INTO `city` VALUES (28, '三芝區', 3);
INSERT INTO `city` VALUES (29, '石門區', 3);
INSERT INTO `city` VALUES (1, '東區', 5);
INSERT INTO `city` VALUES (2, '北區', 5);
INSERT INTO `city` VALUES (3, '香山區', 5);
INSERT INTO `city` VALUES (1, '竹北市', 6);
INSERT INTO `city` VALUES (2, '湖口鄉', 6);
INSERT INTO `city` VALUES (3, '新豐鄉', 6);
INSERT INTO `city` VALUES (4, '新埔鄉', 6);
INSERT INTO `city` VALUES (5, '關西鎮', 6);
INSERT INTO `city` VALUES (6, '芎林鄉', 6);
INSERT INTO `city` VALUES (7, '寶山鄉', 6);
INSERT INTO `city` VALUES (8, '竹東鎮', 6);
INSERT INTO `city` VALUES (9, '五峰鄉', 6);
INSERT INTO `city` VALUES (10, '橫山鄉', 6);
INSERT INTO `city` VALUES (11, '尖石鄉', 6);
INSERT INTO `city` VALUES (12, '北埔鄉', 6);
INSERT INTO `city` VALUES (13, '峨嵋鄉', 6);
INSERT INTO `city` VALUES (1, '竹南鎮', 7);
INSERT INTO `city` VALUES (2, '頭份鎮', 7);
INSERT INTO `city` VALUES (3, '三灣鄉', 7);
INSERT INTO `city` VALUES (4, '南庄鄉', 7);
INSERT INTO `city` VALUES (5, '獅潭鄉', 7);
INSERT INTO `city` VALUES (6, '後龍鎮', 7);
INSERT INTO `city` VALUES (7, '通霄鎮', 7);
INSERT INTO `city` VALUES (8, '苑裡鎮', 7);
INSERT INTO `city` VALUES (9, '苗栗市', 7);
INSERT INTO `city` VALUES (10, '造橋鄉', 7);
INSERT INTO `city` VALUES (11, '頭屋鄉', 7);
INSERT INTO `city` VALUES (12, '公館鄉', 7);
INSERT INTO `city` VALUES (13, '大湖鄉', 7);
INSERT INTO `city` VALUES (14, '泰安鄉', 7);
INSERT INTO `city` VALUES (15, '鉰鑼鄉', 7);
INSERT INTO `city` VALUES (16, '三義鄉', 7);
INSERT INTO `city` VALUES (17, '西湖鄉', 7);
INSERT INTO `city` VALUES (18, '卓蘭鄉', 7);
INSERT INTO `city` VALUES (1, '中區', 8);
INSERT INTO `city` VALUES (2, '東區', 8);
INSERT INTO `city` VALUES (3, '南區', 8);
INSERT INTO `city` VALUES (4, '西區', 8);
INSERT INTO `city` VALUES (5, '北區', 8);
INSERT INTO `city` VALUES (6, '北屯區', 8);
INSERT INTO `city` VALUES (7, '西屯區', 8);
INSERT INTO `city` VALUES (8, '南屯區', 8);
INSERT INTO `city` VALUES (9, '太平區', 8);
INSERT INTO `city` VALUES (10, '大里區', 8);
INSERT INTO `city` VALUES (11, '霧峰區', 8);
INSERT INTO `city` VALUES (12, '烏日區', 8);
INSERT INTO `city` VALUES (13, '豐原區', 8);
INSERT INTO `city` VALUES (14, '后里區', 8);
INSERT INTO `city` VALUES (15, '石岡區', 8);
INSERT INTO `city` VALUES (16, '東勢區', 8);
INSERT INTO `city` VALUES (17, '和平區', 8);
INSERT INTO `city` VALUES (18, '新社區', 8);
INSERT INTO `city` VALUES (19, '潭子區', 8);
INSERT INTO `city` VALUES (20, '大雅區', 8);
INSERT INTO `city` VALUES (21, '神岡區', 8);
INSERT INTO `city` VALUES (22, '大肚區', 8);
INSERT INTO `city` VALUES (23, '沙鹿區', 8);
INSERT INTO `city` VALUES (24, '龍井區', 8);
INSERT INTO `city` VALUES (25, '梧棲區', 8);
INSERT INTO `city` VALUES (26, '清水區', 8);
INSERT INTO `city` VALUES (27, '大甲區', 8);
INSERT INTO `city` VALUES (28, '外圃區', 8);
INSERT INTO `city` VALUES (29, '大安區', 8);
INSERT INTO `city` VALUES (1, '彰化市', 9);
INSERT INTO `city` VALUES (2, '芬園鄉', 9);
INSERT INTO `city` VALUES (3, '花壇鄉', 9);
INSERT INTO `city` VALUES (4, '秀水鄉', 9);
INSERT INTO `city` VALUES (5, '鹿港鎮', 9);
INSERT INTO `city` VALUES (6, '福興鄉', 9);
INSERT INTO `city` VALUES (7, '線西鄉', 9);
INSERT INTO `city` VALUES (8, '和美鎮', 9);
INSERT INTO `city` VALUES (9, '伸港鄉', 9);
INSERT INTO `city` VALUES (10, '員林鎮', 9);
INSERT INTO `city` VALUES (11, '社頭鄉', 9);
INSERT INTO `city` VALUES (12, '永靖鄉', 9);
INSERT INTO `city` VALUES (13, '埔心鄉', 9);
INSERT INTO `city` VALUES (14, '溪湖鎮', 9);
INSERT INTO `city` VALUES (15, '大村鄉', 9);
INSERT INTO `city` VALUES (16, '埔鹽鄉', 9);
INSERT INTO `city` VALUES (17, '田中鎮', 9);
INSERT INTO `city` VALUES (18, '北斗鎮', 9);
INSERT INTO `city` VALUES (19, '田尾鄉', 9);
INSERT INTO `city` VALUES (20, '埤頭鄉', 9);
INSERT INTO `city` VALUES (21, '溪州鄉', 9);
INSERT INTO `city` VALUES (22, '竹塘鄉', 9);
INSERT INTO `city` VALUES (23, '二林鎮', 9);
INSERT INTO `city` VALUES (24, '大城鄉', 9);
INSERT INTO `city` VALUES (25, '芳苑鄉', 9);
INSERT INTO `city` VALUES (26, '二水鄉', 9);
INSERT INTO `city` VALUES (1, '南投市', 10);
INSERT INTO `city` VALUES (2, '中寮鄉', 10);
INSERT INTO `city` VALUES (3, '草屯鎮', 10);
INSERT INTO `city` VALUES (4, '國姓鄉', 10);
INSERT INTO `city` VALUES (5, '埔里鎮', 10);
INSERT INTO `city` VALUES (6, '仁愛鄉', 10);
INSERT INTO `city` VALUES (7, '名間鄉', 10);
INSERT INTO `city` VALUES (8, '集集鄉', 10);
INSERT INTO `city` VALUES (9, '水里鄉', 10);
INSERT INTO `city` VALUES (10, '魚池鄉', 10);
INSERT INTO `city` VALUES (11, '信義鄉', 10);
INSERT INTO `city` VALUES (12, '竹山鎮', 10);
INSERT INTO `city` VALUES (13, '鹿谷鄉', 10);
INSERT INTO `city` VALUES (1, '斗南鎮', 11);
INSERT INTO `city` VALUES (2, '大埤鄉', 11);
INSERT INTO `city` VALUES (3, '虎尾鎮', 11);
INSERT INTO `city` VALUES (4, '土庫鎮', 11);
INSERT INTO `city` VALUES (5, '褒忠鄉', 11);
INSERT INTO `city` VALUES (6, '東勢鄉', 11);
INSERT INTO `city` VALUES (7, '臺西鄉', 11);
INSERT INTO `city` VALUES (8, '崙背鄉', 11);
INSERT INTO `city` VALUES (9, '麥寮鄉', 11);
INSERT INTO `city` VALUES (10, '斗六市', 11);
INSERT INTO `city` VALUES (11, '林內鄉', 11);
INSERT INTO `city` VALUES (12, '古坑鄉', 11);
INSERT INTO `city` VALUES (13, '莿桐鄉', 11);
INSERT INTO `city` VALUES (14, '西螺鎮', 11);
INSERT INTO `city` VALUES (15, '二崙鄉', 11);
INSERT INTO `city` VALUES (16, '北港鎮', 11);
INSERT INTO `city` VALUES (17, '水林鄉', 11);
INSERT INTO `city` VALUES (18, '口湖鄉', 11);
INSERT INTO `city` VALUES (19, '四湖鄉', 11);
INSERT INTO `city` VALUES (20, '元長鄉', 11);
INSERT INTO `city` VALUES (1, '東區', 12);
INSERT INTO `city` VALUES (2, '北區', 12);
INSERT INTO `city` VALUES (1, '番路鄉', 13);
INSERT INTO `city` VALUES (2, '梅山鄉', 13);
INSERT INTO `city` VALUES (3, '竹崎鄉', 13);
INSERT INTO `city` VALUES (4, '阿里山鄉', 13);
INSERT INTO `city` VALUES (5, '中埔鄉', 13);
INSERT INTO `city` VALUES (6, '大埔鄉', 13);
INSERT INTO `city` VALUES (7, '水上鄉', 13);
INSERT INTO `city` VALUES (8, '鹿草鄉', 13);
INSERT INTO `city` VALUES (9, '太保市', 13);
INSERT INTO `city` VALUES (10, '朴子市', 13);
INSERT INTO `city` VALUES (11, '東石鄉', 13);
INSERT INTO `city` VALUES (12, '六腳鄉', 13);
INSERT INTO `city` VALUES (13, '新港鄉', 13);
INSERT INTO `city` VALUES (14, '民雄鄉', 13);
INSERT INTO `city` VALUES (15, '大林鎮', 13);
INSERT INTO `city` VALUES (16, '漢口鄉', 13);
INSERT INTO `city` VALUES (17, '義竹鄉', 13);
INSERT INTO `city` VALUES (18, '布袋鎮', 13);
INSERT INTO `city` VALUES (1, '中西區', 14);
INSERT INTO `city` VALUES (2, '東區', 14);
INSERT INTO `city` VALUES (3, '南區', 14);
INSERT INTO `city` VALUES (4, '北區', 14);
INSERT INTO `city` VALUES (5, '安平區', 14);
INSERT INTO `city` VALUES (6, '安南區', 14);
INSERT INTO `city` VALUES (7, '永康區', 14);
INSERT INTO `city` VALUES (8, '歸仁區', 14);
INSERT INTO `city` VALUES (9, '新化區', 14);
INSERT INTO `city` VALUES (10, '左鎮區', 14);
INSERT INTO `city` VALUES (11, '玉井區', 14);
INSERT INTO `city` VALUES (12, '楠西區', 14);
INSERT INTO `city` VALUES (13, '南化區', 14);
INSERT INTO `city` VALUES (14, '仁德區', 14);
INSERT INTO `city` VALUES (15, '關廟區', 14);
INSERT INTO `city` VALUES (16, '龍崎區', 14);
INSERT INTO `city` VALUES (17, '官田區', 14);
INSERT INTO `city` VALUES (18, '麻豆區', 14);
INSERT INTO `city` VALUES (19, '佳里區', 14);
INSERT INTO `city` VALUES (20, '西港區', 14);
INSERT INTO `city` VALUES (21, '七股區', 14);
INSERT INTO `city` VALUES (22, '將軍區', 14);
INSERT INTO `city` VALUES (23, '學甲區', 14);
INSERT INTO `city` VALUES (24, '北門區', 14);
INSERT INTO `city` VALUES (25, '新營區', 14);
INSERT INTO `city` VALUES (26, '後壁區', 14);
INSERT INTO `city` VALUES (27, '白河區', 14);
INSERT INTO `city` VALUES (28, '東山區', 14);
INSERT INTO `city` VALUES (29, '六甲區', 14);
INSERT INTO `city` VALUES (30, '下營區', 14);
INSERT INTO `city` VALUES (31, '柳營區', 14);
INSERT INTO `city` VALUES (32, '鹽水區', 14);
INSERT INTO `city` VALUES (33, '善化區', 14);
INSERT INTO `city` VALUES (34, '大內區', 14);
INSERT INTO `city` VALUES (35, '山上區', 14);
INSERT INTO `city` VALUES (36, '新市區', 14);
INSERT INTO `city` VALUES (37, '安定區', 14);
INSERT INTO `city` VALUES (1, '新興區', 15);
INSERT INTO `city` VALUES (2, '前金區', 15);
INSERT INTO `city` VALUES (3, '苓雅區', 15);
INSERT INTO `city` VALUES (4, '鹽埕區', 15);
INSERT INTO `city` VALUES (5, '鼓山區', 15);
INSERT INTO `city` VALUES (6, '旗津區', 15);
INSERT INTO `city` VALUES (7, '前鎮區', 15);
INSERT INTO `city` VALUES (8, '三民區', 15);
INSERT INTO `city` VALUES (9, '楠梓區', 15);
INSERT INTO `city` VALUES (10, '小港區', 15);
INSERT INTO `city` VALUES (11, '左營區', 15);
INSERT INTO `city` VALUES (12, '仁武區', 15);
INSERT INTO `city` VALUES (13, '大社區', 15);
INSERT INTO `city` VALUES (14, '東沙群島', 15);
INSERT INTO `city` VALUES (15, '南沙群島', 15);
INSERT INTO `city` VALUES (16, '岡山區', 15);
INSERT INTO `city` VALUES (17, '路竹區', 15);
INSERT INTO `city` VALUES (18, '阿蓮區', 15);
INSERT INTO `city` VALUES (19, '田寮區', 15);
INSERT INTO `city` VALUES (20, '燕巢區', 15);
INSERT INTO `city` VALUES (21, '橋頭區', 15);
INSERT INTO `city` VALUES (22, '梓官區', 15);
INSERT INTO `city` VALUES (23, '彌陀區', 15);
INSERT INTO `city` VALUES (24, '永安區', 15);
INSERT INTO `city` VALUES (25, '湖內區', 15);
INSERT INTO `city` VALUES (26, '鳳山區', 15);
INSERT INTO `city` VALUES (27, '大寮區', 15);
INSERT INTO `city` VALUES (28, '林園區', 15);
INSERT INTO `city` VALUES (29, '鳥松區', 15);
INSERT INTO `city` VALUES (30, '大樹區', 15);
INSERT INTO `city` VALUES (31, '旗山區', 15);
INSERT INTO `city` VALUES (32, '美濃區', 15);
INSERT INTO `city` VALUES (33, '六龜區', 15);
INSERT INTO `city` VALUES (34, '內門區', 15);
INSERT INTO `city` VALUES (35, '杉林區', 15);
INSERT INTO `city` VALUES (36, '甲仙區', 15);
INSERT INTO `city` VALUES (37, '桃源區', 15);
INSERT INTO `city` VALUES (38, '那瑪夏區', 15);
INSERT INTO `city` VALUES (39, '茂林區', 15);
INSERT INTO `city` VALUES (40, '茄萣區', 15);
INSERT INTO `city` VALUES (1, '屏東市', 16);
INSERT INTO `city` VALUES (2, '三地門鄉', 16);
INSERT INTO `city` VALUES (3, '霧臺鄉', 16);
INSERT INTO `city` VALUES (4, '瑪家鄉', 16);
INSERT INTO `city` VALUES (5, '九如鄉', 16);
INSERT INTO `city` VALUES (6, '里港鄉', 16);
INSERT INTO `city` VALUES (7, '高樹鄉', 16);
INSERT INTO `city` VALUES (8, '鹽埔鄉', 16);
INSERT INTO `city` VALUES (9, '長治鄉', 16);
INSERT INTO `city` VALUES (10, '麟洛鄉', 16);
INSERT INTO `city` VALUES (11, '竹田鄉', 16);
INSERT INTO `city` VALUES (12, '內埔鄉', 16);
INSERT INTO `city` VALUES (13, '萬丹鄉', 16);
INSERT INTO `city` VALUES (14, '潮州鎮', 16);
INSERT INTO `city` VALUES (15, '泰武鄉', 16);
INSERT INTO `city` VALUES (16, '來義鄉', 16);
INSERT INTO `city` VALUES (17, '萬巒鄉', 16);
INSERT INTO `city` VALUES (18, '嵌頂鄉', 16);
INSERT INTO `city` VALUES (19, '新埤鄉', 16);
INSERT INTO `city` VALUES (20, '南州鄉', 16);
INSERT INTO `city` VALUES (21, '林邊鄉', 16);
INSERT INTO `city` VALUES (22, '東港鎮', 16);
INSERT INTO `city` VALUES (23, '琉球鄉', 16);
INSERT INTO `city` VALUES (24, '佳冬鄉', 16);
INSERT INTO `city` VALUES (25, '新園鄉', 16);
INSERT INTO `city` VALUES (26, '枋寮鄉', 16);
INSERT INTO `city` VALUES (27, '枋山鄉', 16);
INSERT INTO `city` VALUES (28, '春日鄉', 16);
INSERT INTO `city` VALUES (29, '獅子鄉', 16);
INSERT INTO `city` VALUES (30, '車城鄉', 16);
INSERT INTO `city` VALUES (31, '牡丹鄉', 16);
INSERT INTO `city` VALUES (32, '恆春鎮', 16);
INSERT INTO `city` VALUES (33, '滿州鄉', 16);
INSERT INTO `city` VALUES (1, '臺東市', 17);
INSERT INTO `city` VALUES (2, '綠島鄉', 17);
INSERT INTO `city` VALUES (3, '蘭嶼鄉', 17);
INSERT INTO `city` VALUES (4, '延平鄉', 17);
INSERT INTO `city` VALUES (5, '卑南鄉', 17);
INSERT INTO `city` VALUES (6, '鹿野鄉', 17);
INSERT INTO `city` VALUES (7, '關山鎮', 17);
INSERT INTO `city` VALUES (8, '海端鄉', 17);
INSERT INTO `city` VALUES (9, '池上鄉', 17);
INSERT INTO `city` VALUES (10, '東河鄉', 17);
INSERT INTO `city` VALUES (11, '成功鎮', 17);
INSERT INTO `city` VALUES (12, '長濱鄉', 17);
INSERT INTO `city` VALUES (13, '太麻里鄉', 17);
INSERT INTO `city` VALUES (14, '金峰鄉', 17);
INSERT INTO `city` VALUES (15, '大武鄉', 17);
INSERT INTO `city` VALUES (16, '達仁鄉', 17);
INSERT INTO `city` VALUES (1, '花蓮市', 18);
INSERT INTO `city` VALUES (2, '新城鄉', 18);
INSERT INTO `city` VALUES (3, '秀林鄉', 18);
INSERT INTO `city` VALUES (4, '吉安鄉', 18);
INSERT INTO `city` VALUES (5, '壽豐鄉', 18);
INSERT INTO `city` VALUES (6, '鳳林鎮', 18);
INSERT INTO `city` VALUES (7, '光復鄉', 18);
INSERT INTO `city` VALUES (8, '豐濱鄉', 18);
INSERT INTO `city` VALUES (9, '瑞穗鄉', 18);
INSERT INTO `city` VALUES (10, '萬榮鄉', 18);
INSERT INTO `city` VALUES (11, '玉里鎮', 18);
INSERT INTO `city` VALUES (12, '卓溪鄉', 18);
INSERT INTO `city` VALUES (13, '富里鄉', 18);
INSERT INTO `city` VALUES (1, '宜蘭市', 19);
INSERT INTO `city` VALUES (2, '頭城鎮', 19);
INSERT INTO `city` VALUES (3, '礁溪鄉', 19);
INSERT INTO `city` VALUES (4, '壯圍鄉', 19);
INSERT INTO `city` VALUES (5, '員山鄉', 19);
INSERT INTO `city` VALUES (6, '羅東鎮', 19);
INSERT INTO `city` VALUES (7, '三星鄉', 19);
INSERT INTO `city` VALUES (8, '大同鄉', 19);
INSERT INTO `city` VALUES (9, '五結鄉', 19);
INSERT INTO `city` VALUES (10, '冬山鄉', 19);
INSERT INTO `city` VALUES (11, '蘇澳鎮', 19);
INSERT INTO `city` VALUES (12, '南澳鄉', 19);
INSERT INTO `city` VALUES (13, '釣魚台', 19);
INSERT INTO `city` VALUES (1, '中壢市', 4);
INSERT INTO `city` VALUES (2, '平鎮市', 4);
INSERT INTO `city` VALUES (3, '龍潭鄉', 4);
INSERT INTO `city` VALUES (4, '楊梅鎮', 4);
INSERT INTO `city` VALUES (5, '新屋鄉', 4);
INSERT INTO `city` VALUES (6, '觀音鄉', 4);
INSERT INTO `city` VALUES (7, '桃園市', 4);
INSERT INTO `city` VALUES (8, '龜山鄉', 4);
INSERT INTO `city` VALUES (9, '八德市', 4);
INSERT INTO `city` VALUES (10, '大溪鎮', 4);
INSERT INTO `city` VALUES (11, '復興鄉', 4);
INSERT INTO `city` VALUES (12, '大園鄉', 4);
INSERT INTO `city` VALUES (13, '蘆竹鄉', 4);

-- --------------------------------------------------------

-- 
-- 資料表格式： `colors`
-- 

CREATE TABLE `colors` (
  `colors_number` int(11) NOT NULL auto_increment COMMENT '色系編號',
  `colors_name` varchar(5) NOT NULL COMMENT '色系名稱',
  `colors_code` varchar(10) NOT NULL COMMENT '色系代碼',
  PRIMARY KEY  (`colors_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='色系' AUTO_INCREMENT=14 ;

-- 
-- 列出以下資料庫的數據： `colors`
-- 

INSERT INTO `colors` VALUES (1, '紅色系', '#FF0000');
INSERT INTO `colors` VALUES (2, '橘色系', '#FF8C00');
INSERT INTO `colors` VALUES (3, '黃色系', '#FFFF00');
INSERT INTO `colors` VALUES (4, '綠色系', '#96E100');
INSERT INTO `colors` VALUES (5, '灰色系', '#808080');
INSERT INTO `colors` VALUES (6, '金色系', '#FEF78A');
INSERT INTO `colors` VALUES (7, '藍色系', '#0096E1');
INSERT INTO `colors` VALUES (8, '紫色系', '#C778FF');
INSERT INTO `colors` VALUES (9, '黑色系', '#000000');
INSERT INTO `colors` VALUES (10, '白色系', '#FFFFFF');
INSERT INTO `colors` VALUES (11, '棕色系', '#B96D3A');
INSERT INTO `colors` VALUES (12, '銀色系', '#C0C0C0');

-- --------------------------------------------------------

-- 
-- 資料表格式： `commodity`
-- 

CREATE TABLE `commodity` (
  `c_number` int(11) NOT NULL auto_increment COMMENT '商品編號',
  `c_name` varchar(50) NOT NULL COMMENT '商品名稱',
  `hi_bid_price` int(11) NOT NULL COMMENT '最高出價價格',
  `bid_price` int(11) NOT NULL COMMENT '得標價格',
  `c_price` int(11) NOT NULL COMMENT '價格',
  `c_gender` varchar(3) NOT NULL COMMENT '商品性質',
  `location` varchar(20) NOT NULL COMMENT '所在地',
  `oan` varchar(20) NOT NULL COMMENT '商品新舊',
  `uptime` datetime NOT NULL COMMENT '上架時間',
  `downtime` datetime NOT NULL COMMENT '下架時間',
  `c_mp` varchar(50) default NULL COMMENT '主要圖片',
  `c_movie` varchar(50) default NULL COMMENT '商品影片',
  `c_rp` varchar(50) default NULL COMMENT '旋轉圖片',
  `c_date` datetime default NULL COMMENT '購買日期',
  `c_address` varchar(50) NOT NULL COMMENT '購買地址',
  `pop` varchar(50) default NULL COMMENT '購買憑證',
  `c_height` float default NULL COMMENT '商品長度',
  `c_shoulder` float default NULL COMMENT '商品寬度',
  `c_bust` float default NULL COMMENT '商品胸寬',
  `c_waistline` float default NULL COMMENT '商品腰寬',
  `c_hips` float default NULL COMMENT '商品臀寬',
  `c_try_height` float NOT NULL COMMENT '試穿者身高',
  `c_try_weight` float NOT NULL COMMENT '試穿者體重',
  `c_try_shoulder` float NOT NULL COMMENT '試穿者肩寬',
  `c_try_bust` float NOT NULL COMMENT '試穿者胸圍',
  `c_try_waistline` float NOT NULL COMMENT '試穿者腰圍',
  `c_try_hips` float NOT NULL COMMENT '試穿者臀圍',
  `c_try_foot` varchar(10) NOT NULL COMMENT '試穿者腳尺寸',
  `c_try_foot2` float NOT NULL COMMENT '試穿者腳尺寸2',
  `material` varchar(50) default NULL COMMENT '商品材質',
  `orbidder` int(11) default NULL COMMENT '得標者',
  `orsell` int(1) NOT NULL default '0' COMMENT '是否交易完成',
  `orend` int(1) NOT NULL default '0' COMMENT '是否截止',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `b_number` int(11) NOT NULL COMMENT '品牌編號',
  `s_number` int(11) NOT NULL COMMENT '分類編號',
  `colors_number` int(11) NOT NULL COMMENT '色系編號',
  `s_size` varchar(10) NOT NULL COMMENT '尺寸格式',
  `size` varchar(10) NOT NULL COMMENT '尺寸',
  `UDHeight` float default NULL COMMENT '上下高度',
  `LRLength` float default NULL COMMENT '左右寬度',
  `bWidth` float default NULL COMMENT '底部寬度',
  `MWidth` float default NULL COMMENT '提把寬度',
  `SLongest` float default NULL COMMENT '背帶最長',
  `c_description` varchar(100) NOT NULL COMMENT '商品描述',
  `lowest_record` int(11) NOT NULL COMMENT '評價限制',
  `report_count` int(11) NOT NULL COMMENT '被檢舉次數',
  PRIMARY KEY  (`c_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商品' AUTO_INCREMENT=112 ;

-- 
-- 列出以下資料庫的數據： `commodity`
-- 

INSERT INTO `commodity` VALUES (3, '螢光色綠色磨砂蟒蛇皮尖頭高跟鞋', 15000, 0, 15000, '女', '新北市', '九成新', '2013-10-09 21:38:38', '2013-11-30 21:38:38', '3_131009013805.jpg', '', NULL, '2011-08-11 00:00:00', '台北市萬華區', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '蟒蛇皮', NULL, 0, 0, 3, 6, 17, 4, '美國(女)', '11', 0, 0, 0, 0, 0, '鞋跟10公分', 1, 0);
INSERT INTO `commodity` VALUES (5, 'GUCCI卡其色防水拉鍊托特包(大)', 23000, 0, 23000, '女', '新北市', '七成新', '2013-10-11 13:56:49', '2013-11-27 13:56:49', '3_131011063659.jpeg', '', NULL, '2013-01-28 00:00:00', '台北市信義區', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'PVC+牛皮', NULL, 0, 0, 3, 8, 11, 11, '', '', 31, 50, 12, 4, 53, '內層格式：收納夾層 × 1 手機袋 × 1 ', 0, 0);
INSERT INTO `commodity` VALUES (9, 'Nike Lunar Force 1 City Pack 男', 1550, 0, 1550, '男', '新北市', '九成新', '2013-10-11 16:46:29', '2013-11-22 16:46:29', '6_131011084419.jpg', '', NULL, '2013-03-07 00:00:00', ' 新北市板橋區中山路一段3之4號 摩曼頓', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '美國(男)', 8, '網布', NULL, 0, 0, 6, 1, 14, 7, '美國(男)', '8', 0, 0, 0, 0, 0, '因為很少穿到 所以想賣掉\r\n只穿過兩次，幾乎沒有污痕喔!', 1, 0);
INSERT INTO `commodity` VALUES (11, 'NIKE 運動刷毛長褲 ', 1500, 0, 1500, '男', '新北市', '九成新', '2013-10-13 13:30:32', '2013-11-29 13:30:32', '1_131013052954.jpg', '', NULL, '2013-06-20 00:00:00', '西門町', '', 100, 0, 0, 14, 12, 0, 0, 0, 0, 0, 0, '', 0, '刷毛', NULL, 0, 0, 1, 1, 9, 5, '', 'L', 0, 0, 0, 0, 0, '', 0, 0);
INSERT INTO `commodity` VALUES (17, 'Adidas Original 圖案標語白', 550, 0, 500, '男', '桃園縣', '全新', '2013-10-13 14:42:44', '2013-11-28 14:42:44', '1_131013064227.jpg', '', NULL, '2013-08-08 00:00:00', '鴻金寶', '1_131013064227.jpg', 74, 44, 20, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '純棉', NULL, 0, 0, 1, 14, 7, 10, '', 'M', 0, 0, 0, 0, 0, '', 0, 0);
INSERT INTO `commodity` VALUES (19, 'New balance420 女鞋', 2000, 0, 2000, '女', '桃園縣', '八成新', '2013-10-13 15:34:18', '2013-11-26 15:34:18', '6_131013073104.jpg', '', NULL, '2013-06-26 00:00:00', '桃園南崁 台茂購物城', '', 0, 0, 0, 0, 0, 160, 0, 0, 0, 0, 0, '日本', 23.5, '人造皮革+網布', NULL, 0, 0, 6, 15, 15, 8, '日本', '23.5', 0, 0, 0, 0, 0, '此鞋板型較小,建議23公分腳長的人購買  \r\n只穿過三次,其中一次是在家穿\r\n幾乎沒有汙痕!\r\n', 1, 0);
INSERT INTO `commodity` VALUES (21, 'Gucci 黑色牛皮時尚休閒單肩包310306 A7', 50000, 0, 50000, '女', '高雄縣', '全新', '2013-10-13 16:01:16', '2013-11-24 16:01:16', '6_131013075951.jpg', '', NULL, '2013-02-05 00:00:00', '高雄 漢神百貨', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '牛皮', NULL, 0, 0, 6, 8, 12, 9, '', '', 17, 33, 46, 0, 25, ' 1內貼袋，1拉鍊暗袋\r\n', 5, 0);
INSERT INTO `commodity` VALUES (25, 'COACH 灰黑男用證件皮夾', 4500, 0, 4500, '男', '新北市', '全新', '2013-10-13 16:43:28', '2013-11-19 16:43:28', '1_131013084246.jpg', '', NULL, '2013-08-15 00:00:00', '新北板橋大遠百', '1pop_131013084245.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'PVC', NULL, 0, 0, 1, 5, 21, 5, '', '', 10, 12, 2, 0, 0, '', 0, 0);
INSERT INTO `commodity` VALUES (26, 'BURBERRY棉質圓領短袖套頭T(BB2Y090050)', 7000, 0, 7000, '女', '新北市', '全新', '2013-10-13 21:51:15', '2013-11-20 21:51:15', '6_131013085220.jpg', '', NULL, '2013-09-17 00:00:00', '日本,東京', '', 71, 35, 88, 0, 0, 165, 47, 15, 88, 64, 84, '日本', 24, '90%棉10%萊卡', NULL, 0, 0, 6, 3, 6, 9, '', 'M', 0, 0, 0, 0, 0, '皮革\r\n舒適\r\n迷彩 柔軟\r\n慢跑鞋\r\n戶外休閒鞋', 3, 0);
INSERT INTO `commodity` VALUES (29, 'FENDI芬迪提包灰色8BH250 D7E F0NJ3 ', 45000, 0, 45000, '女', '臺北市', '全新', '2013-10-13 17:12:34', '2013-11-25 17:12:34', '6_131013091210.jpg', '', NULL, '2013-10-01 00:00:00', '台北市信義區台北101', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '100%小牛皮', NULL, 0, 0, 6, 7, 11, 5, '', '', 27, 34, 13, 14, 31, '內部拉鍊中央分隔欄、內貼口袋、條紋襯里和真皮標誌牌匾', 5, 0);
INSERT INTO `commodity` VALUES (30, 'ADIDAS ORIGINALS CAMPUS II', 899, 0, 899, '男', '新北市', '全新', '2013-10-13 17:37:01', '2013-11-27 17:37:01', '1_131013093507.jpg', '', NULL, '2012-11-30 00:00:00', '板橋大遠百', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '皮革', NULL, 0, 0, 1, 14, 16, 10, '美國(男)', '4', 0, 0, 0, 0, 0, '', 0, 0);
INSERT INTO `commodity` VALUES (31, 'Adidas Originals 後背包-天空藍', 1300, 0, 1300, '男', '新北市', '全新', '2013-10-13 18:08:32', '2013-11-28 18:08:32', '1_131013100811.jpg', '', NULL, '2013-08-06 00:00:00', '西門町', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'Polyester', NULL, 0, 0, 1, 14, 13, 7, '', '', 41, 33, 12, 0, 0, '', 0, 0);
INSERT INTO `commodity` VALUES (32, 'PRADA CITY CALF系列立體浮雕LOGO手提包', 75000, 0, 75000, '女', '新北市', '全新', '2013-10-13 20:18:07', '2013-11-25 20:18:07', '7_131013120810.jpg', '', NULL, '2013-09-10 00:00:00', '日本,東京', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '小牛皮', NULL, 0, 0, 7, 12, 11, 9, '', '', 45.5, 34.5, 15, 2, 13.5, '內層格式：\r\n暗釦開口；拉鍊外貼袋 X2｜暗釦內貼袋X1｜內貼袋X2｜拉鍊內貼袋X2', 0, 0);
INSERT INTO `commodity` VALUES (35, '【adidas】迷彩柔軟慢跑鞋(紅/白女款no447)', 2000, 0, 2000, '女', '新北市', '九成新', '2013-10-13 21:55:03', '2013-11-14 21:55:03', '7_131013015332.jpg', '', NULL, '2013-01-15 00:00:00', '日本,東京', '', 0, 0, 0, 0, 0, 165, 47, 15, 88, 64, 84, '日本', 24, '皮革', NULL, 0, 0, 7, 14, 15, 1, '日本', '24', 0, 0, 0, 0, 0, '皮革\r\n舒適\r\n迷彩 柔軟\r\n慢跑鞋\r\n戶外休閒鞋', 0, 0);
INSERT INTO `commodity` VALUES (36, 'COACH PVC雙色直紋漆皮長夾(卡其藍)', 4000, 0, 4000, '女', '臺北市', '九成新', '2013-10-13 22:10:15', '2013-11-15 22:10:15', '7_131013020814.jpg', '', NULL, '2013-09-02 00:00:00', '日本,東京', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'pvc', NULL, 0, 0, 7, 5, 21, 7, '', '', 10, 19.5, 2, 0, 0, '◆輕巧便利 收納方便\r\n◆兼具耐用百搭與典雅氣質', 0, 0);
INSERT INTO `commodity` VALUES (38, '【YSL】時尚跳色系列性感魚口鞋(紅/白/黑)', 28000, 0, 28000, '女', '新北市', '請選擇', '2013-10-13 22:25:33', '2013-11-14 22:25:33', '7_131013022331.jpg', '', NULL, '2013-04-02 00:00:00', '日本,東京', '', 0, 0, 0, 0, 0, 165, 47, 15, 88, 64, 84, '日本', 24, '牛皮', NULL, 0, 0, 7, 13, 17, 1, '日本', '24', 0, 0, 0, 0, 0, '繞腳踝性感設計\r\n雙材質拼', 0, 0);
INSERT INTO `commodity` VALUES (39, '【FENDI】經典復古方型肩背包(棕色)', 38888, 0, 38888, '女', '新北市', '九成新', '2013-10-13 22:34:29', '2013-11-15 22:34:29', '7_131013023233.jpg', '', NULL, '2013-08-05 00:00:00', '日本,神戶', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '牛皮', NULL, 0, 0, 7, 7, 12, 11, '', '', 24, 20, 8, 2, 85, '獨特方型包款\r\n高級牛皮製作\r\n質感肩背包', 0, 0);
INSERT INTO `commodity` VALUES (40, '【BURBERRY】英倫卡其色單排釦紳士長版風衣外套', 8888, 0, 8888, '女', '新北市', '九成新', '2013-10-13 22:44:46', '2013-11-17 22:44:46', '7_131013024311.jpg', '', NULL, '2013-07-10 00:00:00', '美國', '', 117, 44, 60, 0, 0, 165, 47, 15, 88, 64, 84, '日本', 24, '棉', NULL, 0, 0, 7, 3, 6, 10, '', 'M', 0, 0, 0, 0, 0, '產品材質： \r\nOUTER：52% COTTON/28% POLYAMIDE/20% POLYURETHANE \r\nLINING：100% COTTON \r\n義大利精製，內裡以經典格紋呈現\r\n柔美線條', 0, 0);
INSERT INTO `commodity` VALUES (46, '(男)Adidas*D ROSE 773 II', 3200, 0, 3200, '男', '臺中市', '八成新', '2013-10-14 00:27:15', '2013-11-30 12:58:49', '3_131013042705.jpeg', '', NULL, '2012-10-11 00:00:00', '台中市西屯區台中區福星路428號', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '透氣布、橡膠', NULL, 0, 0, 3, 14, 15, 9, '美國(男)', '9.5', 0, 0, 0, 0, 0, '', 0, 0);
INSERT INTO `commodity` VALUES (48, 'BURBERRY BLUE LABEL-小洋裝', 4500, 0, 4500, '女', '新北市', '九成新', '2013-10-14 00:42:30', '2013-11-14 00:42:30', '3_131013044148.jpg', '', NULL, '2013-01-07 00:00:00', '台中市北區三民路三段161號', '', 74, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '棉', NULL, 0, 0, 3, 3, 20, 1, '', 'M', 0, 0, 0, 0, 0, '收腰設計，十分顯瘦，荷葉裙可以遮蓋不滿意的臀圍或大腿， 讓腿部更修長，可以輕松遮蓋身材的不足之處', 0, 0);
INSERT INTO `commodity` VALUES (71, 'Fx creations長夾', 1300, 0, 1300, '女', '桃園縣', '九成新', '2013-10-14 18:17:56', '2013-11-24 18:17:56', '6_131014101715.jpg', 'C:WindowsTempphp4FB.tmp', NULL, '2013-09-26 00:00:00', '桃園新光三越站前店', '6pop_131014101714.jpg', 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '', 0, '頭層牛皮', NULL, 0, 0, 6, 16, 21, 1, '', '', 15, 7.5, 0, 0, 0, '卡層x13 鈔票層x3 內層x1 證件層x1 皮面經特別處理,光澤效果,不易刮傷 只買三個禮拜,幾乎全新喔!', 0, 0);
INSERT INTO `commodity` VALUES (97, 'New balance 豹紋鞋', 1800, 0, 1800, '男', '苗栗縣', '全新', '2013-10-14 19:47:19', '2013-11-19 19:47:19', '6_131014114421.jpg', '', NULL, '2013-08-08 00:00:00', ' 新北市板橋區中山路666號 摩曼頓', '', 0, 0, 0, 0, 0, 173, 68, 50, 52, 48, 54, '美國(男)', 9, '網布+人造皮', NULL, 0, 0, 6, 15, 14, 7, '美國(男)', '9.5', 0, 0, 0, 0, 0, '限量款 只穿過一次\r\nNB鞋建議買大一號', 0, 0);
INSERT INTO `commodity` VALUES (99, 'GUCCI斜背包', 20000, 0, 20000, '女', '臺中市', '九成新', '2013-10-14 19:59:20', '2013-11-16 19:59:20', '6_131014115800.jpg', '', NULL, '2013-06-18 00:00:00', '台北市台北01', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '牛皮', NULL, 0, 0, 6, 8, 12, 9, '', '', 20, 35, 15, 0, 50, '可手拿或肩背,非常實用', 0, 0);
INSERT INTO `commodity` VALUES (102, 'GUCCI皮夾', 30000, 0, 30000, '中性', '臺中縣', '九成新', '2013-10-14 20:11:17', '2013-11-17 20:11:17', '6_131014120809.jpg', '', NULL, '2013-05-30 00:00:00', '台中新光三越中港店', '', 0, 0, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '', 0, '牛皮', NULL, 0, 0, 6, 8, 21, 4, '', '', 10, 19, 0, 0, 0, '卡層X3 鈔票層X2', 0, 0);
INSERT INTO `commodity` VALUES (106, '迷你配飾手拿包', 9600, 0, 9600, '女', '臺北市', '九成新', '2013-10-15 20:58:49', '2013-11-15 20:58:49', '9_131015125819.jpg', '', NULL, '2013-10-01 00:00:00', '台北市信義區', '9pop_131015125818.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '滑面皮革', NULL, 0, 0, 9, 11, 11, 11, '', '', 14, 9, 2, 0, 0, '巧克力色滑面皮革包邊，紅色布襯裡', 0, 0);
INSERT INTO `commodity` VALUES (108, '手機test已得標', 500, 0, 500, '男', '南投縣', '全新', '2013-10-16 13:11:29', '2013-11-26 17:48:14', '9_131016051037.jpg', '', NULL, '2013-09-01 00:00:00', '板橋大遠百', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 'PVC', NULL, 0, 0, 9, 14, 13, 5, '', '', 100, 70, 50, 0, 0, '帥氣', 0, 0);
INSERT INTO `commodity` VALUES (109, 'NB ML674RUN 丈青色', 2410, 0, 2000, '男', '新北市', '八成新', '2013-10-16 17:48:14', '2013-11-30 16:53:46', '3_131016094456.jpg', '3_131016094454.mp4', NULL, '2013-09-20 00:00:00', '台東縣中華路千田', '3_131016094455.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '美國(男)', 9.5, '布', NULL, 0, 0, 9, 15, 15, 7, '美國(男)', '10.5', 0, 0, 0, 0, 0, '剛買不到1個月 鞋盒和發票都還留著喔\r\nNB的鞋款必須要大1號\r\n', 0, 0);

-- --------------------------------------------------------

-- 
-- 資料表格式： `county`
-- 

CREATE TABLE `county` (
  `county_number` int(11) NOT NULL auto_increment COMMENT '縣編號',
  `county_name` varchar(15) NOT NULL COMMENT '縣名稱',
  PRIMARY KEY  (`county_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='縣' AUTO_INCREMENT=20 ;

-- 
-- 列出以下資料庫的數據： `county`
-- 

INSERT INTO `county` VALUES (1, '基隆市');
INSERT INTO `county` VALUES (2, '台北市');
INSERT INTO `county` VALUES (3, '新北市');
INSERT INTO `county` VALUES (4, '桃園縣');
INSERT INTO `county` VALUES (5, '新竹市');
INSERT INTO `county` VALUES (6, '新竹縣');
INSERT INTO `county` VALUES (7, '苗栗縣');
INSERT INTO `county` VALUES (8, '台中市');
INSERT INTO `county` VALUES (9, '彰化縣');
INSERT INTO `county` VALUES (10, '南投縣');
INSERT INTO `county` VALUES (11, '雲林縣');
INSERT INTO `county` VALUES (12, '嘉義市');
INSERT INTO `county` VALUES (13, '嘉義縣');
INSERT INTO `county` VALUES (14, '台南市');
INSERT INTO `county` VALUES (15, '高雄市');
INSERT INTO `county` VALUES (16, '屏東縣');
INSERT INTO `county` VALUES (17, '台東縣');
INSERT INTO `county` VALUES (18, '花蓮縣');
INSERT INTO `county` VALUES (19, '宜蘭縣');

-- --------------------------------------------------------

-- 
-- 資料表格式： `f_record`
-- 

CREATE TABLE `f_record` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) default NULL COMMENT '商品編號',
  `f_number` int(11) NOT NULL COMMENT '分數編號',
  `f_time` datetime default NULL COMMENT '加扣分時間',
  `comment` varchar(50) default NULL COMMENT '評論'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分數紀錄';

-- 
-- 列出以下資料庫的數據： `f_record`
-- 

INSERT INTO `f_record` VALUES (1, NULL, 15, '2013-10-09 20:17:56', NULL);
INSERT INTO `f_record` VALUES (1, NULL, 5, '2013-10-09 20:17:56', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 15, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 5, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 7, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 8, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 9, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 14, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 16, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (2, NULL, 17, '2013-10-09 20:26:19', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 15, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 15, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 5, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 7, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 8, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 9, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 13, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (3, NULL, 14, '2013-10-09 20:49:27', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 15, '2013-10-09 20:52:24', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 5, '2013-10-09 20:52:24', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 7, '2013-10-09 20:52:24', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 9, '2013-10-09 20:52:24', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 14, '2013-10-09 20:52:24', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 15, '2013-10-09 20:55:10', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 5, '2013-10-09 20:55:10', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 7, '2013-10-09 20:55:10', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 9, '2013-10-09 20:55:10', NULL);
INSERT INTO `f_record` VALUES (4, NULL, 14, '2013-10-09 20:55:10', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 15, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 5, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 7, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 8, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 9, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 10, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 11, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 12, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 13, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 14, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 16, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (5, NULL, 17, '2013-10-09 20:57:56', NULL);
INSERT INTO `f_record` VALUES (6, NULL, 15, '2013-10-09 21:00:58', NULL);
INSERT INTO `f_record` VALUES (6, NULL, 5, '2013-10-09 21:00:58', NULL);
INSERT INTO `f_record` VALUES (6, NULL, 7, '2013-10-09 21:00:58', NULL);
INSERT INTO `f_record` VALUES (6, NULL, 9, '2013-10-09 21:00:58', NULL);
INSERT INTO `f_record` VALUES (6, NULL, 14, '2013-10-09 21:00:58', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 15, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 15, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 5, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 7, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 8, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 9, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 10, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 11, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 12, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 13, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 14, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 16, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (7, NULL, 17, '2013-10-11 12:44:06', NULL);
INSERT INTO `f_record` VALUES (8, NULL, 15, '2013-10-11 12:57:44', NULL);
INSERT INTO `f_record` VALUES (8, NULL, 15, '2013-10-11 12:57:44', NULL);
INSERT INTO `f_record` VALUES (8, NULL, 5, '2013-10-11 12:57:44', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 15, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 15, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 5, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 7, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 8, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 9, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 10, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 11, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 12, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 13, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 14, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 16, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (9, NULL, 17, '2013-10-11 13:07:16', NULL);
INSERT INTO `f_record` VALUES (3, 5, 23, '2013-10-11 14:34:53', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 15, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 15, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 5, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 7, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 8, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 9, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 13, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (10, NULL, 14, '2013-10-11 15:01:16', NULL);
INSERT INTO `f_record` VALUES (3, 6, 23, '2013-10-11 15:51:16', NULL);
INSERT INTO `f_record` VALUES (1, 14, 23, '2013-10-13 14:08:23', NULL);
INSERT INTO `f_record` VALUES (6, 15, 23, '2013-10-13 14:36:36', NULL);
INSERT INTO `f_record` VALUES (6, 16, 23, '2013-10-13 14:46:18', NULL);
INSERT INTO `f_record` VALUES (6, 18, 23, '2013-10-13 15:36:32', NULL);
INSERT INTO `f_record` VALUES (6, 27, 23, '2013-10-13 17:09:08', NULL);
INSERT INTO `f_record` VALUES (6, 28, 23, '2013-10-13 17:11:11', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 15, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 6, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 5, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 7, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 8, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 9, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 10, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 11, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 12, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 13, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 14, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (11, NULL, 16, '2013-10-13 19:30:42', NULL);
INSERT INTO `f_record` VALUES (7, 37, 23, '2013-10-13 22:22:36', NULL);
INSERT INTO `f_record` VALUES (3, 45, 23, '2013-10-14 00:27:43', NULL);
INSERT INTO `f_record` VALUES (7, 38, 23, '2013-10-14 15:53:37', NULL);
INSERT INTO `f_record` VALUES (7, 32, 23, '2013-10-16 21:25:34', NULL);
INSERT INTO `f_record` VALUES (12, NULL, 15, '2013-10-17 01:07:50', NULL);
INSERT INTO `f_record` VALUES (12, NULL, 15, '2013-10-17 01:07:50', NULL);
INSERT INTO `f_record` VALUES (12, NULL, 5, '2013-10-17 01:07:50', NULL);
INSERT INTO `f_record` VALUES (12, NULL, 16, '2013-10-17 01:07:50', NULL);
INSERT INTO `f_record` VALUES (12, NULL, 17, '2013-10-17 01:07:50', NULL);
INSERT INTO `f_record` VALUES (13, NULL, 15, '2013-10-17 08:38:41', NULL);
INSERT INTO `f_record` VALUES (13, NULL, 6, '2013-10-17 08:38:41', NULL);
INSERT INTO `f_record` VALUES (13, NULL, 5, '2013-10-17 08:38:41', NULL);
INSERT INTO `f_record` VALUES (13, NULL, 7, '2013-10-17 08:38:41', NULL);
INSERT INTO `f_record` VALUES (13, NULL, 16, '2013-10-17 08:38:41', NULL);
INSERT INTO `f_record` VALUES (13, NULL, 17, '2013-10-17 08:38:41', NULL);

-- --------------------------------------------------------

-- 
-- 資料表格式： `f_record_`
-- 

CREATE TABLE `f_record_` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `fr_number` int(11) NOT NULL COMMENT '分數編號',
  `f_time` datetime NOT NULL COMMENT '加扣分時間',
  `comment_` varchar(50) NOT NULL COMMENT '評論'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='評價紀錄';

-- 
-- 列出以下資料庫的數據： `f_record_`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `fraction`
-- 

CREATE TABLE `fraction` (
  `f_number` int(11) NOT NULL auto_increment COMMENT '分數編號',
  `fraction_type` int(11) NOT NULL default '3' COMMENT '分數類型',
  `f_reason` varchar(50) NOT NULL COMMENT '加扣分原因',
  `fraction` int(11) NOT NULL COMMENT '分數',
  PRIMARY KEY  (`f_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分數表' AUTO_INCREMENT=37 ;

-- 
-- 列出以下資料庫的數據： `fraction`
-- 

INSERT INTO `fraction` VALUES (1, 3, '註冊-出生日期', 5);
INSERT INTO `fraction` VALUES (2, 3, '註冊-大頭貼', 5);
INSERT INTO `fraction` VALUES (3, 3, '註冊-身高', 5);
INSERT INTO `fraction` VALUES (4, 3, '註冊-體重', 5);
INSERT INTO `fraction` VALUES (5, 3, '註冊-衣服尺寸', 5);
INSERT INTO `fraction` VALUES (6, 3, '註冊-胸圍', 5);
INSERT INTO `fraction` VALUES (7, 3, '註冊-腰圍', 5);
INSERT INTO `fraction` VALUES (8, 3, '註冊-臀圍', 5);
INSERT INTO `fraction` VALUES (9, 3, '註冊-肩寬', 5);
INSERT INTO `fraction` VALUES (10, 3, '註冊-鞋子尺寸', 5);
INSERT INTO `fraction` VALUES (11, 3, '註冊-基本分數', 100);
INSERT INTO `fraction` VALUES (12, 3, '註冊-FB帳號', 25);
INSERT INTO `fraction` VALUES (13, 3, '註冊-LINE帳號', 25);
INSERT INTO `fraction` VALUES (14, 2, '上架商品-上傳影片', 50);
INSERT INTO `fraction` VALUES (15, 2, '上架商品-上傳商品憑證', 50);
INSERT INTO `fraction` VALUES (16, 2, '試穿者身高', 10);
INSERT INTO `fraction` VALUES (17, 2, '試穿者體重', 10);
INSERT INTO `fraction` VALUES (18, 2, '試穿者肩寬', 10);
INSERT INTO `fraction` VALUES (19, 2, '試穿者胸圍', 10);
INSERT INTO `fraction` VALUES (20, 2, '試穿者腰圍', 10);
INSERT INTO `fraction` VALUES (21, 2, '試穿者臀圍', 10);
INSERT INTO `fraction` VALUES (22, 2, '試穿者腳尺寸2', 10);
INSERT INTO `fraction` VALUES (23, 2, '下架-有出價紀錄', -600);
INSERT INTO `fraction` VALUES (24, 2, '上架超過1天', -200);
INSERT INTO `fraction` VALUES (25, 3, '最佳回答', 50);
INSERT INTO `fraction` VALUES (26, 1, '非常滿意', 1000);
INSERT INTO `fraction` VALUES (27, 1, '滿意', 600);
INSERT INTO `fraction` VALUES (28, 1, '普通', 200);
INSERT INTO `fraction` VALUES (29, 1, '不滿意', -200);
INSERT INTO `fraction` VALUES (30, 1, '非常不滿意', -600);
INSERT INTO `fraction` VALUES (31, 2, '非常滿意', 1000);
INSERT INTO `fraction` VALUES (32, 2, '滿意', 600);
INSERT INTO `fraction` VALUES (33, 2, '普通', 200);
INSERT INTO `fraction` VALUES (34, 2, '不滿意', -200);
INSERT INTO `fraction` VALUES (35, 2, '非常不滿意', -600);
INSERT INTO `fraction` VALUES (36, 3, '商品被檢舉3次', 200);

-- --------------------------------------------------------

-- 
-- 資料表格式： `fraction_`
-- 

CREATE TABLE `fraction_` (
  `fr_number` int(11) NOT NULL COMMENT '分數編號',
  `fraction_type` int(11) NOT NULL default '3' COMMENT '分數類型',
  `f_reason` varchar(50) NOT NULL COMMENT '加扣分原因',
  `fraction` int(11) NOT NULL COMMENT '分數'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='評價表';

-- 
-- 列出以下資料庫的數據： `fraction_`
-- 

INSERT INTO `fraction_` VALUES (26, 1, '非常滿意', 1000);
INSERT INTO `fraction_` VALUES (27, 1, '滿意', 600);
INSERT INTO `fraction_` VALUES (28, 1, '普通', 200);
INSERT INTO `fraction_` VALUES (29, 1, '不滿意', -200);
INSERT INTO `fraction_` VALUES (30, 1, '非常不滿意', -600);
INSERT INTO `fraction_` VALUES (31, 2, '非常滿意', 1000);
INSERT INTO `fraction_` VALUES (32, 2, '滿意', 600);
INSERT INTO `fraction_` VALUES (33, 2, '普通', 200);
INSERT INTO `fraction_` VALUES (34, 2, '不滿意', -200);
INSERT INTO `fraction_` VALUES (35, 2, '非常不滿意', -600);

-- --------------------------------------------------------

-- 
-- 資料表格式： `i_answer`
-- 

CREATE TABLE `i_answer` (
  `an_number` int(11) NOT NULL auto_increment COMMENT '回答編號',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `i_number` int(11) NOT NULL COMMENT '互動編號',
  `answer_content` varchar(200) NOT NULL COMMENT '回答內容',
  `answer_time` datetime default NULL COMMENT '回答時間',
  `best` int(11) NOT NULL default '0' COMMENT '最佳答案',
  PRIMARY KEY  (`an_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='互動區回答' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `i_answer`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `interactive`
-- 

CREATE TABLE `interactive` (
  `i_number` int(11) NOT NULL auto_increment COMMENT '互動編號',
  `i_title` varchar(50) NOT NULL COMMENT '詢問標題',
  `i_time` datetime default NULL COMMENT '詢問時間',
  `i_content` varchar(100) NOT NULL COMMENT '詢問內容',
  `i_picture` varchar(50) default NULL COMMENT '詢問圖片',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  PRIMARY KEY  (`i_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='互動區' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `interactive`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `members`
-- 

CREATE TABLE `members` (
  `m_number` int(11) NOT NULL auto_increment COMMENT '會員編號',
  `account` varchar(40) NOT NULL COMMENT '會員帳號',
  `password` varchar(20) NOT NULL COMMENT '會員密碼',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `gender` enum('男','女') NOT NULL COMMENT '性別',
  `birthday` date NOT NULL COMMENT '生日',
  `file` varchar(50) default NULL COMMENT '大頭照',
  `phone` varchar(11) NOT NULL COMMENT '手機',
  `address` varchar(40) default NULL COMMENT '地址',
  `county` int(10) NOT NULL COMMENT '縣',
  `city` int(10) NOT NULL COMMENT '市',
  `height` float default NULL COMMENT '身高',
  `weight` float default NULL COMMENT '體重',
  `shoulder` float default NULL COMMENT '肩寬',
  `bust` float default NULL COMMENT '胸圍',
  `waistline` float default NULL COMMENT '腰圍',
  `hips` float default NULL COMMENT '臀圍',
  `clothes_size` varchar(10) NOT NULL COMMENT '衣服尺寸',
  `shoes_size` varchar(10) NOT NULL default '0' COMMENT '鞋子尺寸',
  `shoes_size2` float NOT NULL default '0' COMMENT '鞋子尺寸2',
  `fb_id` varchar(100) default NULL COMMENT 'FB帳號',
  `line_id` varchar(100) default NULL COMMENT 'Line 帳號',
  `rank_account` varchar(20) default NULL COMMENT '銀行帳號',
  `personally1` varchar(50) default NULL COMMENT '面交資料',
  `m_addtime` datetime NOT NULL COMMENT '加入時間',
  `total` float NOT NULL default '0' COMMENT '總分',
  `buy` int(11) NOT NULL default '0' COMMENT '買分數',
  `sell` int(11) NOT NULL default '0' COMMENT '賣分數',
  `score` int(11) NOT NULL default '0' COMMENT '其他分數',
  `people` int(11) NOT NULL default '0' COMMENT '自然人憑證',
  PRIMARY KEY  (`m_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='會員' AUTO_INCREMENT=14 ;

-- 
-- 列出以下資料庫的數據： `members`
-- 

INSERT INTO `members` VALUES (1, '104@gmail.com', '104', '王智群', '男', '1992-08-12', 'upload/104.jpg', '0987654320', '萬壽路一段300號', 4, 8, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', NULL, NULL, '2013-10-09 20:17:56', 200, 0, 0, 130, 1);
INSERT INTO `members` VALUES (2, '55', '55', '劉冠甫', '男', '1991-11-27', 'upload/test.jpg', '0921926498', '臺東縣屏東市衡陽路92號', 0, 0, 175, 68, 0, 0, 0, 0, 'L', '日本', 275, 'jason12113@yahoo.com.tw', 'chocolateegg55', NULL, NULL, '2013-10-09 20:26:19', 0, 0, 0, 185, 0);
INSERT INTO `members` VALUES (3, 'd994241009@gmail.com', '12345', '高于婷', '女', '1991-12-19', 'upload/201204222313186878_3536.jpg', '0981515806', '新北市新莊區中華路85巷11號', 0, 0, 160, 50, 35, 0, 0, 0, 'S', '日本', 23.5, '', '', NULL, NULL, '2013-10-09 20:49:27', 0, 0, 0, 140, 0);
INSERT INTO `members` VALUES (5, 'd994241010@gmail.com', 'd994241010', '翁翊庭', '女', '1992-04-30', 'upload/1184979_539120362822165_2131272105_n.jpg', '0917340689', '昌平街31巷8號4樓', 3, 21, 158, 49, 11, 11, 11, 11, 'S', '日本', 23.5, 'leleopq126@yahoo.com.tw', 'leleopq126@yahoo.com.tw', '0123456789', NULL, '2013-10-09 20:57:56', 0, 0, 0, 195, 0);
INSERT INTO `members` VALUES (6, 'd994241016@gm.lhu.edu.tw', 'd994241016', '劉曼儀', '女', '1992-05-08', 'upload/548904_565579313508478_1977966618_n.jpg', '0981666666', '長壽路201號', 4, 8, 160, 0, 0, 0, 0, 0, 'M', '台灣', 23.5, NULL, NULL, NULL, NULL, '2013-10-09 21:00:58', 0, 0, 0, 160, 0);
INSERT INTO `members` VALUES (7, 'd994241022@gmail.com', '994241022', '留琬如', '女', '1992-07-07', 'upload/7_131016012252.jpg', '0980602017', '中正路新旺巷37弄3號3樓', 3, 21, 165, 47, 15, 35, 24, 33, 'S', '日本', 24, 'th49565@yahoo.com.tw', NULL, NULL, NULL, '2013-10-13 19:30:42', 0, 0, 0, 175, 1);
INSERT INTO `members` VALUES (8, 'buyer1', 'buyer1', '買家1', '男', '1992-04-30', 'upload/買家1.png', '0912345678', '昌隆街', 3, 21, 158, 48, 0, 0, 0, 0, '', '日本', 27.5, NULL, NULL, NULL, NULL, '2013-10-11 12:57:44', 0, 0, 0, 105, 1);
INSERT INTO `members` VALUES (9, 'seller', 'seller', '賣家', '女', '1991-11-27', 'upload/賣家.png', '0921926498', '萬壽路一段300號', 4, 8, 175, 68, 50, 52, 48, 54, 'L', '日本', 22, 'jason12113@yahoo.com.tw', 'chocolateegg55', NULL, NULL, '2013-10-11 13:07:16', 0, 0, 0, 210, 0);
INSERT INTO `members` VALUES (10, 'buyer2', 'buyer2', '買家2', '女', '1980-07-27', 'upload/買家2.png', '0955363270', '宜蘭縣宜蘭市泰山路394號', 0, 0, 170, 56, 40, 0, 0, 0, 'M', '日本', 28, NULL, NULL, NULL, NULL, '2013-10-11 15:01:16', 1000, 1000, 0, 130, 0);
INSERT INTO `members` VALUES (13, 'leleopq126@yahoo.com.tw', '11111', '翁翊庭1', '女', '2013-10-08', 'upload/', '0917340689', '臺北市中正區11111', 0, 0, 111, 0, 0, 0, 0, 0, '', '', 0, 'leleopq126@yahoo.com.tw', 'leleopq126', NULL, NULL, '2013-10-17 08:38:41', 0, 0, 0, 165, 0);

-- --------------------------------------------------------

-- 
-- 資料表格式： `p_brand`
-- 

CREATE TABLE `p_brand` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `b_number` int(11) NOT NULL COMMENT '品牌編號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='偏愛品牌';

-- 
-- 列出以下資料庫的數據： `p_brand`
-- 

INSERT INTO `p_brand` VALUES (1, 14);
INSERT INTO `p_brand` VALUES (2, 1);
INSERT INTO `p_brand` VALUES (3, 1);
INSERT INTO `p_brand` VALUES (4, 13);
INSERT INTO `p_brand` VALUES (4, 13);
INSERT INTO `p_brand` VALUES (5, 6);
INSERT INTO `p_brand` VALUES (6, 12);
INSERT INTO `p_brand` VALUES (8, 15);
INSERT INTO `p_brand` VALUES (9, 12);
INSERT INTO `p_brand` VALUES (10, 6);
INSERT INTO `p_brand` VALUES (7, 12);
INSERT INTO `p_brand` VALUES (12, 15);
INSERT INTO `p_brand` VALUES (13, 2);

-- --------------------------------------------------------

-- 
-- 資料表格式： `p_color`
-- 

CREATE TABLE `p_color` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `s_number` int(11) NOT NULL COMMENT '分類編號',
  `colors_number` int(8) NOT NULL COMMENT '色系編號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='偏愛顏色';

-- 
-- 列出以下資料庫的數據： `p_color`
-- 

INSERT INTO `p_color` VALUES (1, 0, 10);
INSERT INTO `p_color` VALUES (1, 0, 9);
INSERT INTO `p_color` VALUES (2, 0, 10);
INSERT INTO `p_color` VALUES (2, 0, 9);
INSERT INTO `p_color` VALUES (2, 0, 7);
INSERT INTO `p_color` VALUES (3, 0, 7);
INSERT INTO `p_color` VALUES (4, 0, 9);
INSERT INTO `p_color` VALUES (4, 0, 10);
INSERT INTO `p_color` VALUES (4, 0, 9);
INSERT INTO `p_color` VALUES (4, 0, 10);
INSERT INTO `p_color` VALUES (5, 0, 1);
INSERT INTO `p_color` VALUES (5, 0, 7);
INSERT INTO `p_color` VALUES (6, 0, 4);
INSERT INTO `p_color` VALUES (3, 0, 10);
INSERT INTO `p_color` VALUES (12, 0, 2);
INSERT INTO `p_color` VALUES (8, 0, 9);
INSERT INTO `p_color` VALUES (8, 0, 7);
INSERT INTO `p_color` VALUES (8, 0, 4);
INSERT INTO `p_color` VALUES (9, 0, 10);
INSERT INTO `p_color` VALUES (9, 0, 9);
INSERT INTO `p_color` VALUES (9, 0, 7);
INSERT INTO `p_color` VALUES (10, 0, 11);
INSERT INTO `p_color` VALUES (10, 0, 10);
INSERT INTO `p_color` VALUES (10, 0, 4);
INSERT INTO `p_color` VALUES (1, 0, 7);
INSERT INTO `p_color` VALUES (7, 0, 9);
INSERT INTO `p_color` VALUES (7, 0, 8);
INSERT INTO `p_color` VALUES (7, 0, 7);
INSERT INTO `p_color` VALUES (7, 0, 3);
INSERT INTO `p_color` VALUES (7, 0, 1);
INSERT INTO `p_color` VALUES (12, 0, 3);
INSERT INTO `p_color` VALUES (12, 0, 4);
INSERT INTO `p_color` VALUES (13, 0, 1);
INSERT INTO `p_color` VALUES (13, 0, 7);
INSERT INTO `p_color` VALUES (2, 0, 1);
INSERT INTO `p_color` VALUES (9, 0, 4);

-- --------------------------------------------------------

-- 
-- 資料表格式： `push`
-- 

CREATE TABLE `push` (
  `p_number` int(11) NOT NULL auto_increment,
  `p_type` varchar(10) NOT NULL COMMENT '通知類型',
  `p_time` datetime NOT NULL COMMENT '通知時間',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `push_m_number` int(11) NOT NULL COMMENT '會員編號',
  `p_check` tinyint(4) NOT NULL default '0' COMMENT '已讀',
  PRIMARY KEY  (`p_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='推播' AUTO_INCREMENT=4 ;

-- 
-- 列出以下資料庫的數據： `push`
-- 

INSERT INTO `push` VALUES (1, '販賣被出價', '2013-11-08 17:55:10', 109, 9, 1);
INSERT INTO `push` VALUES (2, '販賣被出價', '2013-11-08 17:56:06', 109, 9, 1);
INSERT INTO `push` VALUES (3, '販賣被出價', '2013-11-08 17:56:37', 109, 9, 1);

-- --------------------------------------------------------

-- 
-- 資料表格式： `q_answer`
-- 

CREATE TABLE `q_answer` (
  `q_number` int(11) NOT NULL COMMENT '問答編號',
  `qa_content` varchar(100) NOT NULL COMMENT '回答內容',
  `qa_time` datetime default NULL COMMENT '回答時間'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='問與答回答';

-- 
-- 列出以下資料庫的數據： `q_answer`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `qa`
-- 

CREATE TABLE `qa` (
  `q_number` int(11) NOT NULL auto_increment COMMENT '問答編號',
  `q_content` varchar(100) NOT NULL COMMENT '發問內容',
  `q_time` datetime default NULL COMMENT '發問時間',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  PRIMARY KEY  (`q_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='問與答' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `qa`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `question`
-- 

CREATE TABLE `question` (
  `q_number` int(11) NOT NULL COMMENT '問題編號',
  `question` varchar(50) NOT NULL COMMENT '問題'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='個人問題';

-- 
-- 列出以下資料庫的數據： `question`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `recommend`
-- 

CREATE TABLE `recommend` (
  `r_type` int(11) NOT NULL COMMENT '推薦類型',
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `r_score` int(11) NOT NULL COMMENT '推薦分數'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='推薦';

-- 
-- 列出以下資料庫的數據： `recommend`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `related`
-- 

CREATE TABLE `related` (
  `related_type` int(11) NOT NULL COMMENT '相關類型',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `related_c_number` int(11) NOT NULL COMMENT '相似商品',
  `related_score` int(11) NOT NULL COMMENT '推薦分數'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='相關商品';

-- 
-- 列出以下資料庫的數據： `related`
-- 

INSERT INTO `related` VALUES (6, 11, 109, 1);
INSERT INTO `related` VALUES (6, 11, 31, 1);
INSERT INTO `related` VALUES (6, 11, 30, 1);
INSERT INTO `related` VALUES (6, 11, 25, 1);
INSERT INTO `related` VALUES (6, 11, 9, 1);
INSERT INTO `related` VALUES (5, 11, 97, 2);
INSERT INTO `related` VALUES (5, 11, 31, 2);
INSERT INTO `related` VALUES (5, 11, 30, 2);
INSERT INTO `related` VALUES (5, 11, 9, 2);
INSERT INTO `related` VALUES (4, 11, 109, 2);
INSERT INTO `related` VALUES (4, 11, 97, 2);
INSERT INTO `related` VALUES (4, 11, 31, 2);
INSERT INTO `related` VALUES (4, 11, 30, 2);
INSERT INTO `related` VALUES (4, 11, 9, 2);
INSERT INTO `related` VALUES (3, 11, 108, 3);
INSERT INTO `related` VALUES (3, 11, 25, 3);
INSERT INTO `related` VALUES (1, 11, 9, 8);
INSERT INTO `related` VALUES (2, 3, 38, 5);
INSERT INTO `related` VALUES (4, 3, 40, 2);
INSERT INTO `related` VALUES (4, 3, 99, 2);
INSERT INTO `related` VALUES (4, 3, 106, 2);
INSERT INTO `related` VALUES (5, 3, 40, 2);
INSERT INTO `related` VALUES (5, 3, 99, 2);
INSERT INTO `related` VALUES (5, 3, 106, 2);
INSERT INTO `related` VALUES (6, 3, 5, 1);
INSERT INTO `related` VALUES (6, 3, 26, 1);
INSERT INTO `related` VALUES (6, 3, 32, 1);
INSERT INTO `related` VALUES (6, 3, 35, 1);
INSERT INTO `related` VALUES (6, 3, 38, 1);
INSERT INTO `related` VALUES (6, 3, 39, 1);
INSERT INTO `related` VALUES (6, 3, 40, 1);
INSERT INTO `related` VALUES (6, 3, 48, 1);
INSERT INTO `related` VALUES (2, 19, 35, 5);
INSERT INTO `related` VALUES (4, 19, 35, 2);
INSERT INTO `related` VALUES (4, 19, 71, 2);
INSERT INTO `related` VALUES (5, 19, 35, 2);
INSERT INTO `related` VALUES (5, 19, 71, 2);
INSERT INTO `related` VALUES (6, 19, 71, 1);
INSERT INTO `related` VALUES (1, 17, 30, 8);
INSERT INTO `related` VALUES (1, 17, 31, 8);
INSERT INTO `related` VALUES (1, 17, 46, 8);
INSERT INTO `related` VALUES (1, 17, 108, 8);
INSERT INTO `related` VALUES (3, 17, 30, 3);
INSERT INTO `related` VALUES (4, 17, 108, 2);
INSERT INTO `related` VALUES (5, 17, 108, 2);
INSERT INTO `related` VALUES (1, 21, 5, 8);
INSERT INTO `related` VALUES (1, 21, 99, 8);
INSERT INTO `related` VALUES (2, 21, 39, 5);
INSERT INTO `related` VALUES (2, 21, 99, 5);
INSERT INTO `related` VALUES (3, 21, 26, 3);
INSERT INTO `related` VALUES (3, 21, 32, 3);
INSERT INTO `related` VALUES (3, 21, 99, 3);
INSERT INTO `related` VALUES (4, 21, 29, 2);
INSERT INTO `related` VALUES (4, 21, 32, 2);
INSERT INTO `related` VALUES (4, 21, 38, 2);
INSERT INTO `related` VALUES (4, 21, 39, 2);
INSERT INTO `related` VALUES (5, 21, 29, 2);
INSERT INTO `related` VALUES (5, 21, 32, 2);
INSERT INTO `related` VALUES (5, 21, 38, 2);
INSERT INTO `related` VALUES (5, 21, 39, 2);
INSERT INTO `related` VALUES (1, 99, 5, 8);
INSERT INTO `related` VALUES (1, 99, 21, 8);
INSERT INTO `related` VALUES (2, 99, 21, 5);
INSERT INTO `related` VALUES (2, 99, 39, 5);
INSERT INTO `related` VALUES (3, 99, 21, 3);
INSERT INTO `related` VALUES (3, 99, 26, 3);
INSERT INTO `related` VALUES (3, 99, 32, 3);
INSERT INTO `related` VALUES (4, 99, 3, 2);
INSERT INTO `related` VALUES (4, 99, 5, 2);
INSERT INTO `related` VALUES (4, 99, 38, 2);
INSERT INTO `related` VALUES (5, 99, 3, 2);
INSERT INTO `related` VALUES (5, 99, 5, 2);
INSERT INTO `related` VALUES (5, 99, 38, 2);
INSERT INTO `related` VALUES (2, 32, 5, 5);
INSERT INTO `related` VALUES (2, 32, 29, 5);
INSERT INTO `related` VALUES (2, 32, 106, 5);
INSERT INTO `related` VALUES (3, 32, 21, 3);
INSERT INTO `related` VALUES (3, 32, 26, 3);
INSERT INTO `related` VALUES (3, 32, 99, 3);
INSERT INTO `related` VALUES (4, 32, 21, 2);
INSERT INTO `related` VALUES (4, 32, 29, 2);
INSERT INTO `related` VALUES (4, 32, 39, 2);
INSERT INTO `related` VALUES (5, 32, 21, 2);
INSERT INTO `related` VALUES (5, 32, 29, 2);
INSERT INTO `related` VALUES (5, 32, 39, 2);
INSERT INTO `related` VALUES (6, 32, 3, 1);
INSERT INTO `related` VALUES (6, 32, 5, 1);
INSERT INTO `related` VALUES (6, 32, 26, 1);
INSERT INTO `related` VALUES (6, 32, 35, 1);
INSERT INTO `related` VALUES (6, 32, 38, 1);
INSERT INTO `related` VALUES (6, 32, 39, 1);
INSERT INTO `related` VALUES (6, 32, 40, 1);
INSERT INTO `related` VALUES (6, 32, 48, 1);
INSERT INTO `related` VALUES (2, 38, 3, 5);
INSERT INTO `related` VALUES (3, 38, 35, 3);
INSERT INTO `related` VALUES (3, 38, 48, 3);
INSERT INTO `related` VALUES (3, 38, 71, 3);
INSERT INTO `related` VALUES (4, 38, 3, 2);
INSERT INTO `related` VALUES (4, 38, 5, 2);
INSERT INTO `related` VALUES (4, 38, 39, 2);
INSERT INTO `related` VALUES (4, 38, 99, 2);
INSERT INTO `related` VALUES (5, 38, 3, 2);
INSERT INTO `related` VALUES (5, 38, 5, 2);
INSERT INTO `related` VALUES (5, 38, 39, 2);
INSERT INTO `related` VALUES (5, 38, 99, 2);
INSERT INTO `related` VALUES (6, 38, 3, 1);
INSERT INTO `related` VALUES (6, 38, 5, 1);
INSERT INTO `related` VALUES (6, 38, 26, 1);
INSERT INTO `related` VALUES (6, 38, 32, 1);
INSERT INTO `related` VALUES (6, 38, 35, 1);
INSERT INTO `related` VALUES (6, 38, 39, 1);
INSERT INTO `related` VALUES (6, 38, 40, 1);
INSERT INTO `related` VALUES (6, 38, 48, 1);
INSERT INTO `related` VALUES (6, 109, 31, 1);
INSERT INTO `related` VALUES (6, 109, 30, 1);
INSERT INTO `related` VALUES (6, 109, 25, 1);
INSERT INTO `related` VALUES (6, 109, 11, 1);
INSERT INTO `related` VALUES (6, 109, 9, 1);
INSERT INTO `related` VALUES (5, 109, 97, 2);
INSERT INTO `related` VALUES (5, 109, 46, 2);
INSERT INTO `related` VALUES (5, 109, 31, 2);
INSERT INTO `related` VALUES (5, 109, 11, 2);
INSERT INTO `related` VALUES (5, 109, 9, 2);
INSERT INTO `related` VALUES (4, 109, 97, 2);
INSERT INTO `related` VALUES (4, 109, 31, 2);
INSERT INTO `related` VALUES (4, 109, 11, 2);
INSERT INTO `related` VALUES (4, 109, 9, 2);
INSERT INTO `related` VALUES (3, 109, 97, 3);
INSERT INTO `related` VALUES (3, 109, 31, 3);
INSERT INTO `related` VALUES (3, 109, 9, 3);
INSERT INTO `related` VALUES (2, 109, 46, 5);
INSERT INTO `related` VALUES (1, 109, 97, 8);

-- --------------------------------------------------------

-- 
-- 資料表格式： `report_project`
-- 

CREATE TABLE `report_project` (
  `p_number` int(11) NOT NULL auto_increment COMMENT '項目編號',
  `p_name` varchar(20) NOT NULL COMMENT '項目名稱',
  PRIMARY KEY  (`p_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='檢舉項目' AUTO_INCREMENT=9 ;

-- 
-- 列出以下資料庫的數據： `report_project`
-- 

INSERT INTO `report_project` VALUES (1, '仿冒/盜版');
INSERT INTO `report_project` VALUES (2, '色情物品');
INSERT INTO `report_project` VALUES (3, '保育動物(製品)');
INSERT INTO `report_project` VALUES (4, '其他違法物品');
INSERT INTO `report_project` VALUES (5, '垃圾廣告');
INSERT INTO `report_project` VALUES (6, '不當標題');
INSERT INTO `report_project` VALUES (7, '詐欺/網路釣魚');
INSERT INTO `report_project` VALUES (8, '其他違規刊登');

-- --------------------------------------------------------

-- 
-- 資料表格式： `size`
-- 

CREATE TABLE `size` (
  `s_number` int(11) NOT NULL COMMENT '分類編號',
  `size` varchar(10) NOT NULL COMMENT '尺寸'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='尺寸';

-- 
-- 列出以下資料庫的數據： `size`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `sort`
-- 

CREATE TABLE `sort` (
  `s_number` int(11) NOT NULL auto_increment COMMENT '分類編號',
  `s_name` varchar(50) NOT NULL COMMENT '分類名稱',
  `s_fsort` varchar(50) default NULL COMMENT '父分類',
  PRIMARY KEY  (`s_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商品分類' AUTO_INCREMENT=22 ;

-- 
-- 列出以下資料庫的數據： `sort`
-- 

INSERT INTO `sort` VALUES (1, '衣服', NULL);
INSERT INTO `sort` VALUES (2, '褲子', NULL);
INSERT INTO `sort` VALUES (3, '包包', NULL);
INSERT INTO `sort` VALUES (4, '鞋子', NULL);
INSERT INTO `sort` VALUES (5, '洋裝', NULL);
INSERT INTO `sort` VALUES (6, '長袖', '1');
INSERT INTO `sort` VALUES (7, '短袖', '1');
INSERT INTO `sort` VALUES (8, '背心', '1');
INSERT INTO `sort` VALUES (9, '長褲', '2');
INSERT INTO `sort` VALUES (10, '短褲', '2');
INSERT INTO `sort` VALUES (11, '手拿包', '3');
INSERT INTO `sort` VALUES (12, '斜背包', '3');
INSERT INTO `sort` VALUES (13, '後背包', '3');
INSERT INTO `sort` VALUES (14, '籃球鞋', '4');
INSERT INTO `sort` VALUES (15, '跑步鞋', '4');
INSERT INTO `sort` VALUES (16, '休閒鞋', '4');
INSERT INTO `sort` VALUES (17, '高跟鞋', '4');
INSERT INTO `sort` VALUES (18, '平底鞋', '4');
INSERT INTO `sort` VALUES (19, '長洋裝', '5');
INSERT INTO `sort` VALUES (20, '短洋裝', '5');
INSERT INTO `sort` VALUES (21, '皮夾', '3');

-- --------------------------------------------------------

-- 
-- 資料表格式： `track`
-- 

CREATE TABLE `track` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `track_time` datetime default NULL COMMENT '追蹤時間'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='追蹤';

-- 
-- 列出以下資料庫的數據： `track`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `transaction`
-- 

CREATE TABLE `transaction` (
  `t_number` int(11) NOT NULL auto_increment COMMENT '交易編號',
  `t_schedule` varchar(30) NOT NULL default '選擇交易方式' COMMENT '交易進度',
  `tr_mode` varchar(10) default NULL COMMENT '交易方式',
  `tr_payment` varchar(10) default NULL COMMENT '付款方式',
  `t_time` datetime default NULL COMMENT '得標時間',
  `m_number` int(11) NOT NULL COMMENT '得標者',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `payTimeButton` datetime default NULL COMMENT '付款時間',
  `sendTimeButton` datetime default NULL COMMENT '寄出時間',
  `per_dateButton` datetime default NULL COMMENT '收貨日期',
  `check_time` datetime default NULL COMMENT '對帳時間',
  `check_YN` varchar(3) NOT NULL default '0' COMMENT '對帳狀態',
  `check_ans` varchar(20) NOT NULL COMMENT '對帳備註',
  `changealter` varchar(20) default NULL COMMENT '提出修改',
  `personally` varchar(50) NOT NULL COMMENT '面交詳細資料',
  `per_time` varchar(20) NOT NULL COMMENT '面交時段',
  `sendtime` varchar(20) NOT NULL COMMENT '郵寄取貨時段',
  `buy_paydate` date NOT NULL COMMENT '買家面交日期',
  `buy_paytime` varchar(20) NOT NULL COMMENT '買家面交時段',
  `buy_pay` varchar(20) NOT NULL COMMENT '詳細面交地點',
  `buy_remit` varchar(20) NOT NULL COMMENT '匯款後五碼',
  `buy_remitmoney` varchar(20) NOT NULL COMMENT '匯款總金額',
  `buy_remitdate` date NOT NULL COMMENT '匯款的日期',
  `storename` varchar(20) NOT NULL COMMENT '店門市名稱',
  `storenumber` varchar(20) NOT NULL COMMENT '店門市店號',
  `remark` varchar(20) NOT NULL COMMENT '備註',
  PRIMARY KEY  (`t_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='交易' AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `transaction`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `view`
-- 

CREATE TABLE `view` (
  `m_number` int(11) NOT NULL COMMENT '會員編號',
  `c_number` int(11) NOT NULL COMMENT '商品編號',
  `v_time` datetime default NULL COMMENT '瀏覽時間'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='瀏覽';

-- 
-- 列出以下資料庫的數據： `view`
-- 

