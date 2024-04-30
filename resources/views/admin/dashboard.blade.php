<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ダッシュボード</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="bg-white shadow-xl rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">管理者ダッシュボード</h1>
            <p class="text-gray-600">ここから管理タスクを選択してください。</p>
            <div class="mt-6">
                <a href="/admin/users" class="block text-center bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                    ユーザー管理
                </a>
                <a href="/admin/reports" class="block text-center bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded mt-4">
                    レポート
                </a>
                <a href="/admin/settings" class="block text-center bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded mt-4">
                    設定
                </a>
            </div>
        </div>
    </div>
</body>
</html>