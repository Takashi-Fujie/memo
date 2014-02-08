npm
====

### 公式サイト
https://npmjs.org/

### 概要
npmはnode.jsのpackageを管理するためのツール

インストール
```
# ローカル環境
npm install <package>
# グローバル環境
npm install <package>
```

対話形式でprojectの初期設定を行う
```
npm init
```

installしたlibraryの情報を自動でpackage.jsonに書き込む
```
npm install --save <package>
# 開発環境のみ
npm install --save-dev <package>
```
