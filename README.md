# wp-webpay-bootstrap
https://github.com/masakielastic/silex-webpay-bootstrap で WordPress のテンプレートを使う場合のビューのコードです。

## インストール

app/views に `index.example.php` を設置します。`include` の行で指定されているサーバーにインストールされている WordPress の `wp-blog-header.php` のパスを指定します。

```php
include '/path/to/wp-blog-header.php';
```

`index.example.twig` がすでにある場合、config.php の `views` の項目を修正して、読み込む順番を変更するか、別の名前に変更したり、削除します。

## ライセンス

GPL v2.0 とします。
