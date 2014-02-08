vagrant
----

### 概要
仮想マシンを立ち上げるツール

### 公式サイト
[Virtual Box](https://www.virtualbox.org/)

### 参考 
[どっとインストール](http://dotinstall.com/lessons/basic_vagrant)

### コマンド
仮想マシンのBox(テンプレート)取得
```
vagrant box add <name> <url>
```
仮想マシン立ち上げ
```
mkdir <dir>
cd <dir>
vagrant init <box name>
```
プラグインインストール
```
vagrant plugin install <name>
```
