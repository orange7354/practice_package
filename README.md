# このパッケージはpractice-packageです

[![Latest Version on Packagist](https://img.shields.io/packagist/v/orange7354/practice-package.svg?style=flat-square)](https://packagist.org/packages/orange7354/practice-package)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/orange7354/practice-package/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/orange7354/practice-package/actions?query=workflow%3Arun-tests+branch%3Amain)
 [![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/orange7354/practice-package/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/orange7354/practice-package/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/orange7354/practice-package.svg?style=flat-square)](https://packagist.org/packages/orange7354/practice-package)

パッケージをスケルトンから自動生成後に、ここにパッケージの概要を書きましょう。1〜2パラグラフ程度の内容に留め、簡単な例を記載しましょう

## Spatieをサポートしてね

Spatieでは多くの労力を注力して[最高レベルのオープンソースパッケージ](https://spatie.be/open-source)を作ってるので、サポートしてくれるなら[有償版の製品を何個か買ってくれると助かります](https://spatie.be/open-source/support-us).

それと、あなたの住んでる地元のポストカード使って、僕らの作ったパッケージの中から、あなたのお気に入りを書いて送ってくれると嬉しいです。住所は[ここに書いてあるよ](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## インストール

composerを使ってインストールしてください:

```bash
composer require orange7354/practice-package
```

下記のコマンドで必要なマイグレーションファイルの出力とマイグレーションを実行します:

```bash
php artisan vendor:publish --tag="practice-package-migrations"
php artisan migrate
```

Configファイルは下記のコマンドで出力可能です:

```bash
php artisan vendor:publish --tag="practice-package-config"
```

出力されたConfigファイルの中身は次のような感じです:

```php
return [
];
```

オプションとして次のコマンドを実行すとでViewファイルも出力可能です:

```bash
php artisan vendor:publish --tag="practice-package-views"
```

## 使い方

```php
$practicePackage = new Orange7354\PracticePackage();
echo $practicePackage->echoPhrase('Hello, Orange7354!');
```

## テスト方法

```bash
composer test
```

## 変更履歴

最近の変更履歴については[CHANGELOG](CHANGELOG.md)を参照してください

## 貢献について

このパッケージに貢献したい人は[CONTRIBUTING](CONTRIBUTING.md)を参考にしてください

## セキュリティや脆弱性について

[セキュリティポリシー](../../security/policy)を見て、必要な情報を送ってくれると助かります

## 貢献者

- [takei-revite](https://github.com/orange7354)
- [All Contributors](../../contributors)

## ライセンス

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
