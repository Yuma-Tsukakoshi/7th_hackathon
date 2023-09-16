
DROP DATABASE IF EXISTS posts;
CREATE DATABASE posts;
USE posts;

DROP table IF EXISTS users;
CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  kisei FLOAT NULL,
  tate VARCHAR(255) NOT NULL,
  yoko VARCHAR(255) NOT NULL,
  birthday VARCHAR(255) NOT NULL,
  mail VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  is_valid boolean default true
) CHARSET=utf8;

insert into users(name, kisei, tate, yoko, birthday, mail) values 
("塚越 雄真", 3.0, "H", "C", "2002-09-10","yuma@gmail.com"),
("上野 侑紗", 3.0, "A", "C", "2002-09-10","arisa@gmail.com"),
("野呂 美智子", 3.5, "B", "C", "2002-09-10","mitti@gmail.com"),
("森 はるか", 3.5, "C", "C", "2002-09-10","moriharu@gmail.com");

DROP TABLE IF EXISTS good_new;
CREATE TABLE good_new(
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  post VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  exist int default true
) CHARSET=utf8;

insert into good_new(user_id, post) values
(1, "ハッカソンでコード賞獲得！！！"),
(2, "ハッカソンでプレゼン賞獲得！！！"),
(3, "ハッカソンで要件定義賞獲得！！！"),
(4, "ハッカソンで優勝！！！！！");


DROP TABLE IF EXISTS user_invitations;
CREATE TABLE user_invitations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  password VARCHAR(255) NOT NULL,
  invited_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
) CHARSET=utf8;

insert into user_invitations(user_id, password,invited_at) values 
(1, "$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS",DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)),
(2, "$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS",DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY)),
(3, "$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS",DATE_SUB(CURRENT_DATE, INTERVAL 3 DAY)),
(4, "$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS",DATE_SUB(CURRENT_DATE, INTERVAL 4 DAY));
