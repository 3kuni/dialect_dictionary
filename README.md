# DialectDictionary

## UI
TODO: UI案をイラストで描いておく

## モデル設計
Mermaid記法でER図を書き出しておく

- User
  - 管理者権限

## nodeのバージョンをあわせる
開発時、nodeのバージョンを合わせる
`nvm use 18`

## ローカルでのlaravelの起動
 `php artisan serve` を実行
 これにより、`http://localhost:8000` でアクセスできるようになる

## TailwindCSS
1. headタグ内に以下を追加
```
@vite('resources/css/app.css')
```
2. `yarn run dev`でビルドする
3. `yarn run build`で本番環境用にビルドする

## 暫定版管理者ページのアクセス方法
`http://localhost:8000/admin?email=admin@example.com`
セキュリティ上の問題があるため、Userモデル作成後に修正する

## Heroku上でのデバッグ表示
デバックを表示するかを環境変数で設定している
`APP_DEBUG=true`
リリース時にはfalseにする