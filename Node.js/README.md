Node.js
====

### 公式サイト
http://nodejs.org/

### インストール
Ubuntu
```
sudo apt-get install git curl build-essential libssl-dev -y
git clone https://github.com/creationix/nvm.git ~/.nvm
. ~/.nvm/nvm.sh
# インストールできるバージョン
nvm ls-remote
nvm install <version>
# 起動時に読み込み
echo '. ~/.nvm/nvm.sh' >> ~/.bashrc
echo 'nvm use v0.10.25' >> ~/.bashrc
```

#### バージョンについて
Node.jsはバージョン番号が偶数が安定バージョン、奇数は開発バージョン
