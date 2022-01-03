<?php

/**
 * [ 概要 ]
 * スパイラルのAPIを使ったサンプルプログラムです。
 *
 * [ サンプルで行う事 ]
 * - データベースへ１件登録する
 * -  データベースへ複数件登録する
 * - データベースを検索する
 *
 * このファイルはUTF8で保存してください。
 */

/**
 * [サンプルを動かすための準備]
 *
 * 0. PHPにcurlライブラリが組み込まれている必要があります。
 *    参考：http://www.php.net/manual/ja/intro.curl.php
 *
 * 1. スパイラルの操作画面の「管理グループ」「API設定」で、トークンを発行します。
 *    発行したら、下記の $TOKEN, $SECRET へ設定します。
 *
 * 2. スパイラルの操作画面の「ＤＢグループ」「通常ＤＢ管理」で、以下のような構成でＤＢを発行します。
 * 
 *    DBタイトル：
 *             api_sample
 *
 *    フィールド：
 *             No1 フィールド名　　：メールアドレス
 *                 フィールドタイプ：メールアドレス（大・小文字を無視）
 *                 差替えキーワード：mail
 *
 *             No2 フィールド名　　：テキストエリア
 *                 フィールドタイプ：テキストエリア(256bytes)
 *                 差替えキーワード：text
 *
 */

// サービス用のURL (ロケータから取得できます)
$APIURL = "https://reg31.smp.ne.jp";

// スパイラルの操作画面で発行したトークンを設定します。
$TOKEN  = "00051cE5b5IF2e1b3ed53b6e3c6728519c650280b014b0c391b5";
$SECRET = "450cf30511307c80db193c42ca782e55e9a3c777";

// サンプルで登録するメールアドレス
$MY_ADDRESS = "y-naruse@icye-japan.com";

// -----------------------------------------------------------------------------
// SELECT
// -----------------------------------------------------------------------------

// API用のHTTPヘッダ
$api_headers = array(
	"X-SPIRAL-API: database/select/request",
	"Content-Type: application/json; charset=UTF-8",
);


// 送信するJSONデータを作成
$parameters = array();
$parameters["spiral_api_token"] = $TOKEN;       //トークン
$parameters["db_title"]         = "api_sample"; //DBのタイトル
$parameters["passkey"]          = time();       //エポック秒


// 表示カラム名
$parameters["select_columns"] = array("mail", "text");


// 検索条件
$parameters["search_condition"] = array(
	array("name" => "text", "value" => "テキスト%", "operator" => "LIKE"),
);


// 署名を付けます
$key = $parameters["spiral_api_token"] . "&" . $parameters["passkey"];
$parameters["signature"] = hash_hmac('sha1', $key, $SECRET, false);


// 送信用のJSONデータを作成します。
$json = json_encode($parameters);


echo "===> database/select\n";


// curlライブラリを使って送信します。
$curl = curl_init($APIURL);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
curl_setopt($curl, CURLOPT_HTTPHEADER, $api_headers);
curl_exec($curl);
if (curl_errno($curl)) echo curl_error($curl);

$response = curl_multi_getcontent($curl);

curl_close($curl);


// 画面に表示
// 配列にしたい時は json_decode($response, true); とします。
//echo "$response\n\n";
print_r(json_decode($response, true));
