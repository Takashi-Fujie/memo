#### 問題編
* Chefで全てを管理
構成管理ツールに全てを任せている
* Chefのレシピのコードの複雑か
* 運用上の課題
 * Chef Serverの接続エラー
 * Chefの実行結果を追跡しづらい：fluentdでログを送るとよい

chef サーバー内で簡潔

Provisioning Toolchain

http://www.slideshare.net/TakashiHonda0628/jenkins-conference-2015

#### 改善編

##### Bootstrapping
* Kickstartをベースに作業
* chefを実行できる環境に

##### Configuration
* Jenkins、chef
 * Chef Solo
 * Jenkinsからknife solo

##### Orchestration実践
* Serf
* https://github.com/hashicorp/serf


