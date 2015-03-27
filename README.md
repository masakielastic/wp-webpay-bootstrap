# webpay-php-bootstrap-wp-view
https://github.com/masakielastic/webpay-php-bootstrap で WordPress のテンプレートを使ったビューのコードです。

## インストール

app/views に `index.php` を設置します。`include` の行で指定されているサーバーにインストールされている WordPress の `wp-blog-header.php` のパスを指定します。

```php
include '/path/to/wp-blog-header.php';
```

`index.twig` がすでにある場合、別の名前に変更するか削除します。
