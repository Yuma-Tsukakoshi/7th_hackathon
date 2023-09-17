DROP DATABASE IF EXISTS harbors;
CREATE DATABASE harbors;
USE harbors;

DROP table IF EXISTS users;
CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) COMMENT "名前",
  kisei VARCHAR(255) COMMENT "期生",
  image  VARCHAR(255) COMMENT "写真",
  tate VARCHAR(255) COMMENT "縦もく",
  yoko VARCHAR(255) COMMENT "横もく",
  brosis VARCHAR(255) COMMENT "ブラシス",
  highschool VARCHAR(255) COMMENT "高校",
  college VARCHAR(255) COMMENT "大学",
  faculty VARCHAR(255) COMMENT "学部",
  grade VARCHAR(255) COMMENT "学年",
  birthday DATE COMMENT "誕生日",
  circle VARCHAR(255) COMMENT "兼サー先",
  station VARCHAR(255) COMMENT "最寄り駅",
  nickname VARCHAR(255) COMMENT "ニックネーム",
  instagram VARCHAR(255) COMMENT "インスタグラム",
  github VARCHAR(255) COMMENT "githubURL",
  harborsdate VARCHAR(255) COMMENT "よくはばずにいる日時",
  hobby VARCHAR(255) COMMENT "趣味",
  message TEXT COMMENT "自己紹介",
  user_exist TINYINT COMMENT "ユーザーがはばずにいるかどうか",
  created_at DATETIME COMMENT "作成日時"
) CHARSET=utf8;

INSERT INTO users (name, kisei, image, tate, yoko, brosis, highschool, college, faculty, grade, birthday, circle, station, nickname, instagram,github,harborsdate, hobby, message, user_exist, created_at)
VALUES
  ('田中太郎1', '4期生', 'path/to/image1.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '月曜日 18:00', '趣味A', '

こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '1', '2023-09-17 10:30:00'),
  ('山田花子1', '5期生', 'path/to/image2.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '水曜日 19:30', '趣味B', '自己紹介2', '0', '2023-09-16 15:45:00'),
  ('佐藤次郎1', '3期生', 'path/to/image3.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '金曜日 17:15', '趣味C', '自己紹介3', '0', '2023-09-15 20:20:00'),
  ('田中太郎2', '4期生', 'path/to/image1.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '月曜日 18:00', '趣味A', '自己紹介1', '1', '2023-09-17 10:30:00'),
  ('山田花子2', '5期生', 'path/to/image2.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '水曜日 19:30', '趣味B', '自己紹介2', '0', '2023-09-16 15:45:00'),
  ('佐藤次郎2', '3期生', 'path/to/image3.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '金曜日 17:15', '趣味C', '自己紹介3', '0', '2023-09-15 20:20:00'),
  ('田中太郎3', '4期生', 'path/to/image1.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '月曜日 18:00', '趣味A', '自己紹介1', '1', '2023-09-17 10:30:00'),
  ('山田花子3', '5期生', 'path/to/image2.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '水曜日 19:30', '趣味B', '自己紹介2', '0', '2023-09-16 15:45:00'),
  ('佐藤次郎3', '3期生', 'path/to/image3.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '金曜日 17:15', '趣味C', '自己紹介3', '0', '2023-09-15 20:20:00'),
  ('田中太郎4', '4期生', 'path/to/image1.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '月曜日 18:00', '趣味A', '自己紹介1', '1', '2023-09-17 10:30:00'),
  ('山田花子4', '5期生', 'path/to/image2.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '水曜日 19:30', '趣味B', '自己紹介2', '0', '2023-09-16 15:45:00'),
  ('佐藤次郎4', '3期生', 'path/to/image3.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'b.com/Yuma-Tsukakoshi/2023_hackathon_project/issues', '金曜日 17:15', '趣味C', '自己紹介3', '0', '2023-09-15 20:20:00');

CREATE TABLE user_follower_relation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT COMMENT 'ユーザーID',
  follower_id INT COMMENT 'フォロワーID',
  status_id boolean COMMENT '状態のID'
) CHARSET=utf8;

-- user_follower_relationテーブルにダミーデータを挿入
INSERT INTO user_follower_relation (user_id, follower_id, status_id)
VALUES
  (1, 2, 1),
  (2, 1, 1),
  (1, 3, 0),
  (3, 2, 1),
  (2, 3, 1),
  (3, 1, 0),
  (4, 5, 1),
  (5, 4, 1),
  (4, 6, 0),
  (6, 5, 1);

  CREATE TABLE user_visit_log (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT COMMENT 'ユーザーID',
  created_at DATETIME COMMENT '発行日時'
) CHARSET=utf8;

INSERT INTO user_visit_log (user_id, created_at)
VALUES
  (1, '2023-09-13 08:30:00'),
  (1, '2023-09-18 10:15:00'),
  (2, '2023-09-14 12:45:00'),
  (2, '2023-09-20 14:20:00'),
  (3, '2023-09-21 16:00:00'),
  (3, '2023-09-22 17:40:00'),
  (4, '2023-09-23 19:25:00'),
  (4, '2023-09-24 21:10:00'),
  (5, '2023-09-25 22:55:00'),
  (5, '2023-09-26 00:30:00'),
  (6, '2023-09-27 02:15:00'),
  (6, '2023-09-28 03:50:00'),
  (7, '2023-09-29 05:35:00'),
  (7, '2023-09-30 07:20:00');



CREATE TABLE user_event_relation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT COMMENT 'ユーザーID',
  event_id INT COMMENT 'イベントID',
  status_id boolean COMMENT '状態のID'
) CHARSET=utf8;


  -- user_event_relationテーブルにダミーデータを10件ずつ挿入
INSERT INTO user_event_relation (user_id, event_id, status_id)
VALUES
  (1, 1, 1),
  (2, 2, 1),
  (1, 3, 0),
  (3, 1, 1),
  (2, 3, 1),
  (3, 2, 0),
  (4, 1, 1),
  (5, 2, 0),
  (6, 3, 1),
  (7, 1, 0);


CREATE TABLE event (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) COMMENT 'イベント名',
  date DATE COMMENT '日付',
  place VARCHAR(255) COMMENT '場所',
  start_time TIME COMMENT '開始時間',
  end_time TIME COMMENT '終了時間',
  kisei VARCHAR(255) COMMENT '期生',
  description TEXT COMMENT '説明',
  author_id INT COMMENT '作成者ID',
  created_at DATETIME COMMENT '発行日時'
) CHARSET=utf8;

-- eventテーブルにダミーデータを挿入
INSERT INTO event (title, date, place, start_time,end_time, kisei, description, author_id, created_at)
VALUES
  ('イベント1', '2023-09-20', 'POSSEルーム', '12:00', '14:00', '4期生', 'イベント1の説明', 1, '2023-09-10 09:30:00'),
  ('イベント2', '2023-09-25', '屋上' ,'11:00', '14:30', '5期生', 'イベント2の説明', 2, '2023-09-12 11:45:00'),
  ('イベント3', '2023-09-30', 'カフェスペース','10:00', '16:00', '3期生', 'イベント3の説明', 3, '2023-09-14 13:20:00');


CREATE TABLE user_invitations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mail VARCHAR(255) COMMENT 'メールアドレス',
  password VARCHAR(255) COMMENT 'パスワード',
  user_id INT COMMENT 'ユーザーID',
  created_at DATETIME COMMENT '発行日時'
) CHARSET=utf8;

-- user_invitationsテーブルにダミーデータを挿入
INSERT INTO user_invitations (mail, password, user_id, created_at)
VALUES
  ('invite4@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 4, '2023-10-12 08:00:00'),
  ('invite5@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 5, '2023-10-14 09:30:00'),
  ('invite6@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 6, '2023-10-16 10:45:00'),
  ('invite7@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 7, '2023-10-18 11:15:00'),
  ('invite8@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 8, '2023-10-20 12:30:00'),
  ('invite9@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 9, '2023-10-22 13:45:00'),
  ('invite10@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 10, '2023-10-24 14:15:00'),
  ('invite11@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 11, '2023-10-26 15:00:00'),
  ('invite12@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 12, '2023-10-28 16:30:00'),
  ('invite13@example.com', '$2a$12$byHvyvLQINYVC32wSk7INu6vUHsfUre.OWG9IIvNALuDEDVYxvgPS', 13, '2023-10-30 17:45:00');
