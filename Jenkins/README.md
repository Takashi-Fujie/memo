Jenkins
====

### 公式サイト
http://jenkins-ci.org/

### インストール
Ubuntu
```
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install jenkins apache2
```

### 設定
```
# 下記を追加し再起動
sudo vim /etc/default/jenkins
---
JAVA_ARGS="-Dfile.encoding=utf-8"
---
sudo service jenkins restart
```

### 確認
http://host:8080

### Jenkinsのアップデート
```
cd /usr/share/jenkins
sudo mv jenkins.war jenkins.war.bak
# 最新のwarファイルのURLはJenkinsの管理画面で
sudo wget http://updates.jenkins-ci.org/download/war/1.532.1/jenkins.war
# restart
service jenkins restart
service apache restart
```
