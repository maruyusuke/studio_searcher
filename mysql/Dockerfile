# FROM mysql:8.0.30-debian
FROM mysql:latest


# コンテナ内で日本語が打てるようにlocalを変更といらないファイル削除
# RUN apt-get update \
#     && apt-get install -y locales \
#     && sed -i -E 's/# (ja_JP.UTF-8)/\1/' /etc/locale.gen \
#     && locale-gen \
#     && update-locale LANG=ja_JP.UTF-8 \
#     && apt-get clean \
#     && rm -rf /var/lib/apt/lists/*

COPY ./config/my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf

# ENV LC_ALL ja_JP.UTF-8