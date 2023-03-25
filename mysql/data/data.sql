SET NAMES 'utf8mb4';
set global general_log = on;

CREATE DATABASE IF NOT EXISTS search_studio;

DROP TABLE IF EXISTS place;

CREATE TABLE place (
  id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
  lat varchar(255),
  lng varchar(255),
  name varchar(255),
  url varchar(255) DEFAULT NULL,
  is_studio boolean DEFAULT 0
);
INSERT INTO place (lat, lng, name, url, is_studio) values
(35.729503, 139.7109, '池袋駅', NULL, 0),
(35.689622, 139.7004647, '新宿駅', NULL, 0),
(35.7282141, 139.7139013, 'worcle池袋', 'https://www.studioworcle.com/ikebukuro/', 1),
(35.728012, 139.712803, 'BUZZ池袋本店', 'https://buzz-st.com/ikebukuro4', 1),
(35.733851, 139.708953, 'Studio M Ikebukuro Tokyo', 'https://mstudio-ikebukuro.com/contact/', 1),
(35.733763, 139.707796, 'BUZZ池袋西口タワー', 'https://buzz-st.com/ikebukuro3', 1),
(35.697002, 139.696662, 'ソニズレンタルスタジオ新宿店', 'https://sonis.jp/yoyaku/yoyaku.php?mode=step1&aid=2', 1),
(35.694613, 139.696367, '新宿 だんすた', 'https://shinjuku2.inforent.jp/%E3%82%B9%E3%82%B1%E3%82%B8%E3%83%A5%E3%83%BC%E3%83%AB', 1),
(35.694549, 139.698137, '新宿マイスタジオ', 'https://mystudio.resv.jp/reserve/calendar.php?x=1679175992', 1);




