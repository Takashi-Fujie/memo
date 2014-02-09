#!/bin/sh
MEMO_HOME="~/git/memo"

# git設定
cp ${MEMO_HOME}/git/gitconfig ~/.gitconfig

# Jenkinsインストール
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install jenkins apache2 -y
