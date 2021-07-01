#リポジトリの名前：studio_searcher
このwebサイトはダンススタジオを探しやすくするためのサイトです

#概要
GoogleMap上からダンススタジオを探し、スタジオのコンビニエンスストアなどの周辺情報まで見ながら、ダンススタジオサイトの予約ページにアクセスすることができます

#仕組み
・バックエンド
データベースにスクレイピングしたダンススタジオのURL,スタジオの住所から得た経度・緯度を保存（python）
データベースから必要な情報をブラウザに渡す（php）

・フロントエンド
GoogleMap上にダンススタジオの位置にピンを配置し、クリックするとダンススタジオの予約ページをiframeで見ることができる（Javascript）

#サイトURL
http://maru-infra-aws.work/
ポートフォリオでのため、平日の10:00~18:00まで公開しています

#使用言語や環境など
- php 7.2.24
- Python 3.7.9
- Javascript
- MySQL 8.0.20
- AWS（EC2,RDS,Lambda,CloudWatch）
- GoogleMap API
- Geocode API

#著者
yusuke

#ライセンス
無断使用厳禁です

