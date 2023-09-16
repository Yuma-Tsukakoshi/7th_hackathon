DROP DATABASE IF EXISTS posts;
CREATE DATABASE posts;
USE posts;

DROP table IF EXISTS users;
CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) COMMENT "名前",
  kisei VARCHAR(255) COMMENT "期生",
  image  VARCHAR(255) COMMENT "写真", -- Assuming you store images as BLOB data
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
  harborsdate VARCHAR(255) COMMENT "よくはばずにいる日時",
  hobby VARCHAR(255) COMMENT "趣味",
  message TEXT COMMENT "自己紹介",
  user_exist TINYINT COMMENT "ユーザーがはばずにいるかどうか",
  created_at DATETIME COMMENT "作成日時"
) CHARSET=utf8;

INSERT INTO users (name, kisei, image, tate, yoko, brosis, highschool, college, faculty, grade, birthday, circle, station, nickname, harborsdate, hobby, message, user_exist, created_at)
VALUES
  ('田中太郎', '4期生', 'path/to/image1.jpg', '縦もくA', '横もくB', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', '月曜日 18:00', '趣味A', '自己紹介1', '1', '2023-09-17 10:30:00'),
  ('山田花子', '5期生', 'path/to/image2.jpg', '縦もくB', '横もくC', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', '水曜日 19:30', '趣味B', '自己紹介2', '0', '2023-09-16 15:45:00'),
  ('佐藤次郎', '3期生', 'path/to/image3.jpg', '縦もくC', '横もくA', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', '金曜日 17:15', '趣味C', '自己紹介3', '0', '2023-09-15 20:20:00');

CREATE TABLE user_follower_relation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT COMMENT 'ユーザーのID',
  follower_id INT COMMENT 'フォロワーのID',
  status_id INT COMMENT '状態のID'
) CHARSET=utf8;

-- user_follower_relationテーブルにダミーデータを挿入
INSERT INTO user_follower_relation (user_id, follower_id, status_id)
VALUES
  (1, 2, 1), -- ユーザー1がユーザー2をフォロー中 (status_id=1)
  (2, 1, 1), -- ユーザー2がユーザー1をフォロー中 (status_id=1)
  (1, 3, 2), -- ユーザー1がユーザー3をフォロー解除 (status_id=2)
  (3, 2, 1); -- ユーザー3がユーザー2をフォロー中 (status_id=1)


CREATE TABLE user_event_relation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT COMMENT 'ユーザーID',
  event_id INT COMMENT 'イベントID',
  status_id INT COMMENT '状態のID'
) CHARSET=utf8;

-- user_event_relationテーブルにダミーデータを挿入
INSERT INTO user_event_relation (user_id, event_id, status_id)
VALUES
  (1, 1, 1), -- ユーザー1がイベント1に参加中 (status_id=1)
  (2, 2, 1), -- ユーザー2がイベント2に参加中 (status_id=1)
  (1, 3, 2), -- ユーザー1がイベント3の参加をキャンセル (status_id=2)
  (3, 1, 1); -- ユーザー3がイベント1に参加中 (status_id=1)


CREATE TABLE event (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) COMMENT 'イベント名',
  date DATE COMMENT '日付',
  time TIME COMMENT '時間',
  kisei VARCHAR(255) COMMENT '期生',
  description TEXT COMMENT '説明',
  author_id INT COMMENT '作成者ID',
  created_at DATETIME COMMENT '発行日時'
) CHARSET=utf8;

-- eventテーブルにダミーデータを挿入
INSERT INTO event (title, date, time, kisei, description, author_id, created_at)
VALUES
  ('イベント1', '2023-09-20', '15:00', '4期生', 'イベント1の説明', 1, '2023-09-10 09:30:00'),
  ('イベント2', '2023-09-25', '14:30', '5期生', 'イベント2の説明', 2, '2023-09-12 11:45:00'),
  ('イベント3', '2023-09-30', '16:00', '3期生', 'イベント3の説明', 3, '2023-09-14 13:20:00');


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
  ('invite1@example.com', 'hashed_password1', 1, '2023-09-05 08:00:00'),
  ('invite2@example.com', 'hashed_password2', 2, '2023-09-06 09:30:00'),
  ('invite3@example.com', 'hashed_password3', 3, '2023-09-07 10:45:00');
