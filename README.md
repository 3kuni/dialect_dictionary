# DialectDictionary

## UI
UI案をイラストで描いておく

## モデル設計
Mermaid記法でER図を書き出しておく

- User
  - 管理者権限

## TailwindCSS
1. headタグ内に以下を追加
```
@vite('resources/css/app.css')
```
2. `yarn run dev`でビルドする

## nodeのバージョンをあわせる
開発時、nodeのバージョンを合わせる
`nvm use 18`

## Heroku上でのデバッグ表示
環境変数でデバッグ設定をしている
`APP_DEBUG=true`
リリース時にはfalseにする