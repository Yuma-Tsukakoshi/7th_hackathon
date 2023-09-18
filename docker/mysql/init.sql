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
  ('木村宥哉', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_1.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'https://github.co.jp/', '月曜日 18:00', '趣味A', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '1', '2023-09-17 10:30:00'),
  ('鈴木大騎', '3.5期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_2.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'https://github.co.jp/', '水曜日 19:30', '趣味B', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-16 15:45:00'),
  ('平手美羽', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_3.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'https://github.co.jp/', '金曜日 17:15', '趣味C', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-15 20:20:00'),
  ('岩城和輝', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_4.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'https://github.co.jp/', '月曜日 18:00', '趣味A','こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '1', '2023-09-17 10:30:00'),
  ('森はるか', '3.5期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_5.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'https://github.co.jp/', '水曜日 19:30', '趣味B', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-16 15:45:00'),
  ('小野媛乃', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_6.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'https://github.co.jp/', '金曜日 17:15', '趣味C', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-15 20:20:00'),
  ('井上岳', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_7.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'https://github.co.jp/', '月曜日 18:00', '趣味A','こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。','1', '2023-09-17 10:30:00'),
  ('野呂美智子', '3.5期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_8.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/', 'https://github.co.jp/', '水曜日 19:30', '趣味B', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-16 15:45:00'),
  ('塚越雄真', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_9.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'https://github.co.jp/', '金曜日 17:15', '趣味C', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。','0', '2023-09-15 20:20:00'),
  ('神野豪気', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_10.jpg', 'A', 'B', 'ブラシスX', '高校A', '大学X', '学部A', '1年', '2000-01-15', 'サークル1', '最寄り駅A', 'ニックネーム1', 'https://www.instagram.com/', 'https://github.co.jp/', '月曜日 18:00', '趣味A', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '1', '2023-09-17 10:30:00'),
  ('上野侑紗', '3.0期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_11.jpg', 'B', 'C', 'ブラシスY', '高校B', '大学Y', '学部B', '2年', '1999-03-20', 'サークル2', '最寄り駅B', 'ニックネーム2', 'https://www.instagram.com/','https://github.co.jp/', '水曜日 19:30', '趣味B', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-16 15:45:00'),
  ('辻健世', '3.5期生', '../assets/img/LINE_ALBUM_3期生アイコン画像_230917_12.jpg', 'C', 'A', 'ブラシスZ', '高校C', '大学Z', '学部C', '3年', '1998-07-10', 'サークル3', '最寄り駅C', 'ニックネーム3', 'https://www.instagram.com/', 'https://github.co.jp/', '金曜日 17:15', '趣味C', 'こんにちは！私は太郎と言います。28歳で、東京に住んでいます。現在、私はソフトウェアエンジニアとして働いています。Webアプリケーションの開発に携わり、ユーザー体験を向上させるために日々努力しています。チームでの協力が私の仕事の中心です。', '0', '2023-09-15 20:20:00');

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
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT '発行日時'
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
  status_id boolean DEFAULT 0 COMMENT '状態のID'
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
  (7, 1, 0),
  (8, 3, 0),
  (9, 1, 1),
  (10, 2, 0),
  (11, 3, 1),
  (12, 1, 0),
  (13, 2, 1),
  (14, 3, 0),
  (15, 1, 1),
  (16, 2, 0),
  (17, 3, 1),
  (18, 1, 0);



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
  ('イベント3', '2023-09-30', 'カフェスペース','10:00', '16:00', '3期生', 'イベント3の説明', 3, '2023-09-14 13:20:00'),
  ('イベント4', '2023-09-22', '会議室A', '14:00', '16:00', '2期生', 'イベント4の説明', 4, '2023-09-16 15:30:00'),
  ('イベント5', '2023-09-23', 'アウトドア広場', '09:30', '12:30', '6期生', 'イベント5の説明', 5, '2023-09-17 10:15:00'),
  ('イベント6', '2023-09-24', 'ラウンジ', '18:00', '20:30', '4期生', 'イベント6の説明', 6, '2023-09-18 16:45:00'),
  ('イベント7', '2023-09-26', '音楽室', '16:30', '18:30', '5期生', 'イベント7の説明', 7, '2023-09-19 14:00:00'),
  ('イベント8', '2023-09-27', '屋内スポーツ場', '13:00', '16:00', '3期生', 'イベント8の説明', 8, '2023-09-20 12:10:00'),
  ('イベント9', '2023-09-29', 'プール', '10:30', '13:30', '7期生', 'イベント9の説明', 9, '2023-09-21 09:55:00'),
  ('イベント10', '2023-10-01', 'カフェテリア', '08:00', '10:30', '6期生', 'イベント10の説明', 10, '2023-09-22 07:45:00'),
  ('イベント11', '2023-10-03', 'テニスコート', '17:30', '19:30', '4期生', 'イベント11の説明', 11, '2023-09-23 16:20:00'),
  ('イベント12', '2023-10-05', '芝生広場', '12:30', '15:30', '8期生', 'イベント12の説明', 12, '2023-09-24 11:35:00'),
  ('イベント13', '2023-10-07', 'アートスタジオ', '14:30', '17:30', '5期生', 'イベント13の説明', 13, '2023-09-25 13:45:00'),
  ('イベント14', '2023-10-10', '屋上', '11:00', '13:00', '3期生', 'イベント14の説明', 14, '2023-09-26 10:30:00'),
  ('イベント15', '2023-10-12', '図書室', '15:00', '17:00', '7期生', 'イベント15の説明', 15, '2023-09-27 14:15:00');


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
