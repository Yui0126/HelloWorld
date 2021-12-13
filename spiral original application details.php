<?php //<!-- SMP_DYNAMIC_PAGE DISPLAY_ERRORS=OFF NAME=admin01 --> ?>
<?php require_once('admin01/admin01_designHeader.php'); ?>

				<!-- SMP_TEMPLATE_HEADER start -->

	<!--SMP:DISP:REG:START-->
	<p class="header_rmesg">必要事項をご入力の上、送信ボタンを押してください。</p>
	<!--SMP:DISP:REG:END-->

	
				<!-- SMP_TEMPLATE_HEADER end -->

				<!-- SMP_TEMPLATE_FORM start -->
	<form method="post" action="/regist/Reg2">
	%SMPAREA%
		<div class="smp_tmpl">
					<dl class="cf">
						<dt class="title">
							申込日時
						</dt><dd class="data ">
						 %val:usr:registDate% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							会員ID
						</dt><dd class="data ">
						 %val:usr:memberID% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							姓
						</dt><dd class="data ">
						 %val:usr:nameSei% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							名
						</dt><dd class="data ">
						 %val:usr:nameMei% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							セイ
						</dt><dd class="data ">
						 %val:usr:kanaSei% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							メイ
						</dt><dd class="data ">
						 %val:usr:kanaMei% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							携帯番号
						</dt><dd class="data phone">
						 %val:usr:tell% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							メールアドレス
						</dt><dd class="data ">
						 %val:usr:email% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							国籍
						</dt><dd class="data ">
						 %val:usr:citizenship% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							性別
						</dt><dd class="data multi2">
						 %val:usr:gender% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【現住所】郵便番号
						</dt><dd class="data zipcode">
						 %val:usr:zipCode% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【現住所】都道府県
						</dt><dd class="data ">
						 %val:usr:pref% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【現住所】市町村/番地/部屋番号
						</dt><dd class="data ">
						 %val:usr:address% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【現住所】住所フリガナ
						</dt><dd class="data ">
						 %val:usr:addressKana:br% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【現住所】電話番号
						</dt><dd class="data phone">
						 %val:usr:phone_fax% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							パスポートの有無
						</dt><dd class="data multi2">
						 %val:usr:passport% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							パスポート番号
						</dt><dd class="data ">
						 %val:usr:passportNum% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							パスポート有効期限
						</dt><dd class="data time">
						 %val:usr:expiration% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【帰省先】郵便番号
						</dt><dd class="data zipcode">
						 %val:usr:home_zipCode% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【帰省先】都道府県
						</dt><dd class="data ">
						 %val:usr:home_pref% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【帰省先】市町村/番地/部屋番号
						</dt><dd class="data ">
						 %val:usr:home_address% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【帰省先】住所フリガナ
						</dt><dd class="data ">
						 %val:usr:home_addressKana:br% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【帰省先】電話番号
						</dt><dd class="data phone">
						 %val:usr:home_phone_fax% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							学校名
						</dt><dd class="data ">
						 %val:usr:schoool% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							学部
						</dt><dd class="data ">
						 %val:usr:undergraduate% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							学科
						</dt><dd class="data ">
						 %val:usr:department% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							学年
						</dt><dd class="data ">
						 %val:usr:grade% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							会社名
						</dt><dd class="data ">
						 %val:usr:company% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【緊急連絡先】名前
						</dt><dd class="data ">
						 %val:usr:emergency_name% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【緊急連絡先】フリガナ
						</dt><dd class="data ">
						 %val:usr:emergency_kana% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【緊急連絡先】続柄
						</dt><dd class="data ">
						 %val:usr:emergency_relate% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【緊急連絡先】電話番号
						</dt><dd class="data phone">
						 %val:usr:emergency_phone% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【緊急連絡先】メールアドレス
						</dt><dd class="data ">
						 %val:usr:emergency_email% <br>						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							会員種別 <span class="need">＊</span>
						</dt><dd class="data multi2">
							<ul class="radio cf">
								<li><label><input class="input" type="radio" name="type" value="1" %val:usr:type:r1%><span>正会員</span></label></li>
								<li><label><input class="input" type="radio" name="type" value="2" %val:usr:type:r2%><span>賛助会員</span></label></li>
								<li><label><input class="input" type="radio" name="type" value="3" %val:usr:type:r3%><span>メンバー校在学生</span></label></li>
							</ul>
							<input type="hidden" value="" name="type">
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ホストファミリーの受け入れ可否
						</dt><dd class="data multi2">
							<ul class="radio cf">
								<li><label><input class="input" type="radio" name="hostFamily" value="1" %val:usr:hostFamily:r1%><span>~1週間</span></label></li>
								<li><label><input class="input" type="radio" name="hostFamily" value="2" %val:usr:hostFamily:r2%><span>~1ヶ月</span></label></li>
								<li><label><input class="input" type="radio" name="hostFamily" value="3" %val:usr:hostFamily:r3%><span>１ヶ月~</span></label></li>
								<li><label><input class="input" type="radio" name="hostFamily" value="4" %val:usr:hostFamily:r4%><span>不可</span></label></li>
							</ul>
							<input type="hidden" value="" name="hostFamily">
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							派遣国
						</dt><dd class="data ">
							
							<input class="input " type="text" name="dispatch" value="%val:usr:dispatch%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							派遣年度
						</dt><dd class="data ">
							
							<input class="input " type="text" name="dispatchYear" value="%val:usr:dispatchYear%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ICYEを知ったきっかけ <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="cue_" rows="4" wrap="soft" >%val:usr:cue_%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							選んだ決め手の理由 <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="motive" rows="4" wrap="soft" >%val:usr:motive%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第一希望】プログラム名 <span class="need">＊</span>
							<span class="caution"><input type="button" value="プログラム一覧" onClick="window.open('%url/rel:mpgt:MPG02_list%&inputName=1')"></span>
						</dt><dd class="data ">
							
							<input class="input " type="text" name="programName_1" value="%val:usr:programName_1%" maxlength="128" placeholder="" readonly="readonly">
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第一希望】国 <span class="need">＊</span>
						</dt><dd class="data ">
							
							<select class="" name="country_1">
								<option value="">----- 選択してください -----</option>
								<option value="1" %val:usr:country_1:1%>ガーナ</option>
								<option value="2" %val:usr:country_1:2%>ケニア</option>
								<option value="3" %val:usr:country_1:3%>モロッコ</option>
								<option value="4" %val:usr:country_1:4%>モザンビーク</option>
								<option value="5" %val:usr:country_1:5%>ナイジェリア</option>
								<option value="6" %val:usr:country_1:6%>南アフリカ</option>
								<option value="7" %val:usr:country_1:7%>タンザニア</option>
								<option value="8" %val:usr:country_1:8%>トーゴ</option>
								<option value="9" %val:usr:country_1:9%>ウガンダ</option>
								<option value="10" %val:usr:country_1:10%>アルゼンチン</option>
								<option value="11" %val:usr:country_1:11%>ボリビア</option>
								<option value="12" %val:usr:country_1:12%>ブラジル</option>
								<option value="13" %val:usr:country_1:13%>コロンビア</option>
								<option value="14" %val:usr:country_1:14%>コスタリカ</option>
								<option value="15" %val:usr:country_1:15%>エクアドル</option>
								<option value="16" %val:usr:country_1:16%>ホンジュラス</option>
								<option value="17" %val:usr:country_1:17%>メキシコ</option>
								<option value="18" %val:usr:country_1:18%>ペルー</option>
								<option value="19" %val:usr:country_1:19%>アメリカ</option>
								<option value="20" %val:usr:country_1:20%>インド</option>
								<option value="21" %val:usr:country_1:21%>インドネシア</option>
								<option value="22" %val:usr:country_1:22%>日本</option>
								<option value="23" %val:usr:country_1:23%>ネパール</option>
								<option value="24" %val:usr:country_1:24%>ニュージーランド</option>
								<option value="25" %val:usr:country_1:25%>フィリピン</option>
								<option value="26" %val:usr:country_1:26%>韓国</option>
								<option value="27" %val:usr:country_1:27%>台湾</option>
								<option value="28" %val:usr:country_1:28%>ベトナム</option>
								<option value="29" %val:usr:country_1:29%>オーストリア</option>
								<option value="30" %val:usr:country_1:30%>デンマーク</option>
								<option value="31" %val:usr:country_1:31%>フィンランド</option>
								<option value="32" %val:usr:country_1:32%>フランス</option>
								<option value="33" %val:usr:country_1:33%>ドイツ</option>
								<option value="34" %val:usr:country_1:34%>アイスランド</option>
								<option value="35" %val:usr:country_1:35%>イタリア</option>
								<option value="36" %val:usr:country_1:36%>ポーランド</option>
								<option value="37" %val:usr:country_1:37%>ロシア</option>
								<option value="38" %val:usr:country_1:38%>スロバキア</option>
								<option value="39" %val:usr:country_1:39%>スペイン</option>
								<option value="40" %val:usr:country_1:40%>スイス</option>
								<option value="41" %val:usr:country_1:41%>イギリス</option>
							</select>
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第一希望】開始日・終了日 <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="holding_1" rows="4" wrap="soft" placeholder="" readonly="readonly">%val:usr:holding_1%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第一希望】志望理由 <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="reason_1" rows="4" wrap="soft" >%val:usr:reason_1%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第二希望】プログラム名
							<span class="caution"><input type="button" value="プログラム一覧" onClick="window.open('%url/rel:mpgt:MPG02_list%&inputName=2')"></span>
						</dt><dd class="data ">
							
							<input class="input " type="text" name="programName_2" value="%val:usr:programName_2%" maxlength="128" placeholder="" readonly="readonly">
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第二希望】国
						</dt><dd class="data ">
							
							<select class="" name="country_2">
								<option value="">----- 選択してください -----</option>
								<option value="1" %val:usr:country_2:1%>ガーナ</option>
								<option value="2" %val:usr:country_2:2%>ケニア</option>
								<option value="3" %val:usr:country_2:3%>モロッコ</option>
								<option value="4" %val:usr:country_2:4%>モザンビーク</option>
								<option value="5" %val:usr:country_2:5%>ナイジェリア</option>
								<option value="6" %val:usr:country_2:6%>南アフリカ</option>
								<option value="7" %val:usr:country_2:7%>タンザニア</option>
								<option value="8" %val:usr:country_2:8%>トーゴ</option>
								<option value="9" %val:usr:country_2:9%>ウガンダ</option>
								<option value="10" %val:usr:country_2:10%>アルゼンチン</option>
								<option value="11" %val:usr:country_2:11%>ボリビア</option>
								<option value="12" %val:usr:country_2:12%>ブラジル</option>
								<option value="13" %val:usr:country_2:13%>コロンビア</option>
								<option value="14" %val:usr:country_2:14%>コスタリカ</option>
								<option value="15" %val:usr:country_2:15%>エクアドル</option>
								<option value="16" %val:usr:country_2:16%>ホンジュラス</option>
								<option value="17" %val:usr:country_2:17%>メキシコ</option>
								<option value="18" %val:usr:country_2:18%>ペルー</option>
								<option value="19" %val:usr:country_2:19%>アメリカ</option>
								<option value="20" %val:usr:country_2:20%>インド</option>
								<option value="21" %val:usr:country_2:21%>インドネシア</option>
								<option value="22" %val:usr:country_2:22%>日本</option>
								<option value="23" %val:usr:country_2:23%>ネパール</option>
								<option value="24" %val:usr:country_2:24%>ニュージーランド</option>
								<option value="25" %val:usr:country_2:25%>フィリピン</option>
								<option value="26" %val:usr:country_2:26%>韓国</option>
								<option value="27" %val:usr:country_2:27%>台湾</option>
								<option value="28" %val:usr:country_2:28%>ベトナム</option>
								<option value="29" %val:usr:country_2:29%>オーストリア</option>
								<option value="30" %val:usr:country_2:30%>デンマーク</option>
								<option value="31" %val:usr:country_2:31%>フィンランド</option>
								<option value="32" %val:usr:country_2:32%>フランス</option>
								<option value="33" %val:usr:country_2:33%>ドイツ</option>
								<option value="34" %val:usr:country_2:34%>アイスランド</option>
								<option value="35" %val:usr:country_2:35%>イタリア</option>
								<option value="36" %val:usr:country_2:36%>ポーランド</option>
								<option value="37" %val:usr:country_2:37%>ロシア</option>
								<option value="38" %val:usr:country_2:38%>スロバキア</option>
								<option value="39" %val:usr:country_2:39%>スペイン</option>
								<option value="40" %val:usr:country_2:40%>スイス</option>
								<option value="41" %val:usr:country_2:41%>イギリス</option>
							</select>
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第二希望】開始日・終了日
						</dt><dd class="data ">
							<textarea class="" name="holding_2" rows="4" wrap="soft" placeholder="" readonly="readonly">%val:usr:holding_2%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第二希望】志望理由
						</dt><dd class="data ">
							<textarea class="" name="reason_2" rows="4" wrap="soft" >%val:usr:reason_2%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第三希望】プログラム名
							<span class="caution"><input type="button" value="プログラム一覧" onClick="window.open('%url/rel:mpgt:MPG02_list%&inputName=3')"></span>
						</dt><dd class="data ">
							
							<input class="input " type="text" name="programName_3" value="%val:usr:programName_3%" maxlength="128" placeholder="" readonly="readonly">
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第三希望】国
						</dt><dd class="data ">
							
							<select class="" name="country_3">
								<option value="">----- 選択してください -----</option>
								<option value="1" %val:usr:country_3:1%>ガーナ</option>
								<option value="2" %val:usr:country_3:2%>ケニア</option>
								<option value="3" %val:usr:country_3:3%>モロッコ</option>
								<option value="4" %val:usr:country_3:4%>モザンビーク</option>
								<option value="5" %val:usr:country_3:5%>ナイジェリア</option>
								<option value="6" %val:usr:country_3:6%>南アフリカ</option>
								<option value="7" %val:usr:country_3:7%>タンザニア</option>
								<option value="8" %val:usr:country_3:8%>トーゴ</option>
								<option value="9" %val:usr:country_3:9%>ウガンダ</option>
								<option value="10" %val:usr:country_3:10%>アルゼンチン</option>
								<option value="11" %val:usr:country_3:11%>ボリビア</option>
								<option value="12" %val:usr:country_3:12%>ブラジル</option>
								<option value="13" %val:usr:country_3:13%>コロンビア</option>
								<option value="14" %val:usr:country_3:14%>コスタリカ</option>
								<option value="15" %val:usr:country_3:15%>エクアドル</option>
								<option value="16" %val:usr:country_3:16%>ホンジュラス</option>
								<option value="17" %val:usr:country_3:17%>メキシコ</option>
								<option value="18" %val:usr:country_3:18%>ペルー</option>
								<option value="19" %val:usr:country_3:19%>アメリカ</option>
								<option value="20" %val:usr:country_3:20%>インド</option>
								<option value="21" %val:usr:country_3:21%>インドネシア</option>
								<option value="22" %val:usr:country_3:22%>日本</option>
								<option value="23" %val:usr:country_3:23%>ネパール</option>
								<option value="24" %val:usr:country_3:24%>ニュージーランド</option>
								<option value="25" %val:usr:country_3:25%>フィリピン</option>
								<option value="26" %val:usr:country_3:26%>韓国</option>
								<option value="27" %val:usr:country_3:27%>台湾</option>
								<option value="28" %val:usr:country_3:28%>ベトナム</option>
								<option value="29" %val:usr:country_3:29%>オーストリア</option>
								<option value="30" %val:usr:country_3:30%>デンマーク</option>
								<option value="31" %val:usr:country_3:31%>フィンランド</option>
								<option value="32" %val:usr:country_3:32%>フランス</option>
								<option value="33" %val:usr:country_3:33%>ドイツ</option>
								<option value="34" %val:usr:country_3:34%>アイスランド</option>
								<option value="35" %val:usr:country_3:35%>イタリア</option>
								<option value="36" %val:usr:country_3:36%>ポーランド</option>
								<option value="37" %val:usr:country_3:37%>ロシア</option>
								<option value="38" %val:usr:country_3:38%>スロバキア</option>
								<option value="39" %val:usr:country_3:39%>スペイン</option>
								<option value="40" %val:usr:country_3:40%>スイス</option>
								<option value="41" %val:usr:country_3:41%>イギリス</option>
							</select>
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第三希望】開始日・終了日
						</dt><dd class="data ">
							<textarea class="" name="holding_3" rows="4" wrap="soft" placeholder="" readonly="readonly">%val:usr:holding_3%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【第三希望】志望理由
						</dt><dd class="data ">
							<textarea class="" name="reason_3" rows="4" wrap="soft" >%val:usr:reason_3%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【確定枠】プログラム名
							<span class="caution"><input type="button" value="プログラム一覧" onClick="window.open('%url/rel:mpgt:MPG02_list%&inputName=Con')"></span>
						</dt><dd class="data ">
							
							<input class="input " type="text" name="programName" value="%val:usr:programName%" maxlength="128" placeholder="" readonly="readonly">
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【確定枠】国
						</dt><dd class="data ">
							
							<select class="" name="country">
								<option value="">----- 選択してください -----</option>
								<option value="1" %val:usr:country:1%>ガーナ</option>
								<option value="2" %val:usr:country:2%>ケニア</option>
								<option value="3" %val:usr:country:3%>モロッコ</option>
								<option value="4" %val:usr:country:4%>モザンビーク</option>
								<option value="5" %val:usr:country:5%>ナイジェリア</option>
								<option value="6" %val:usr:country:6%>南アフリカ</option>
								<option value="7" %val:usr:country:7%>タンザニア</option>
								<option value="8" %val:usr:country:8%>トーゴ</option>
								<option value="9" %val:usr:country:9%>ウガンダ</option>
								<option value="10" %val:usr:country:10%>アルゼンチン</option>
								<option value="11" %val:usr:country:11%>ボリビア</option>
								<option value="12" %val:usr:country:12%>ブラジル</option>
								<option value="13" %val:usr:country:13%>コロンビア</option>
								<option value="14" %val:usr:country:14%>コスタリカ</option>
								<option value="15" %val:usr:country:15%>エクアドル</option>
								<option value="16" %val:usr:country:16%>ホンジュラス</option>
								<option value="17" %val:usr:country:17%>メキシコ</option>
								<option value="18" %val:usr:country:18%>ペルー</option>
								<option value="19" %val:usr:country:19%>アメリカ</option>
								<option value="20" %val:usr:country:20%>インド</option>
								<option value="21" %val:usr:country:21%>インドネシア</option>
								<option value="22" %val:usr:country:22%>日本</option>
								<option value="23" %val:usr:country:23%>ネパール</option>
								<option value="24" %val:usr:country:24%>ニュージーランド</option>
								<option value="25" %val:usr:country:25%>フィリピン</option>
								<option value="26" %val:usr:country:26%>韓国</option>
								<option value="27" %val:usr:country:27%>台湾</option>
								<option value="28" %val:usr:country:28%>ベトナム</option>
								<option value="29" %val:usr:country:29%>オーストリア</option>
								<option value="30" %val:usr:country:30%>デンマーク</option>
								<option value="31" %val:usr:country:31%>フィンランド</option>
								<option value="32" %val:usr:country:32%>フランス</option>
								<option value="33" %val:usr:country:33%>ドイツ</option>
								<option value="34" %val:usr:country:34%>アイスランド</option>
								<option value="35" %val:usr:country:35%>イタリア</option>
								<option value="36" %val:usr:country:36%>ポーランド</option>
								<option value="37" %val:usr:country:37%>ロシア</option>
								<option value="38" %val:usr:country:38%>スロバキア</option>
								<option value="39" %val:usr:country:39%>スペイン</option>
								<option value="40" %val:usr:country:40%>スイス</option>
								<option value="41" %val:usr:country:41%>イギリス</option>
								<option value="99" %val:usr:country:99%>手配中</option>
							</select>
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【確定枠】開始日・終了日
						</dt><dd class="data ">
							<textarea class="" name="holding" rows="4" wrap="soft" placeholder="" >%val:usr:holding%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							過去の海外経験 <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="experience" rows="4" wrap="soft" >%val:usr:experience%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ICYEプログラムに期待すること <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="expectation" rows="4" wrap="soft" >%val:usr:expectation%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							他にも迷ったプログラム <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="waver" rows="4" wrap="soft" >%val:usr:waver%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							趣味・特技 <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="speciality" rows="4" wrap="soft" >%val:usr:speciality%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							資格 <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="qualification" rows="4" wrap="soft" >%val:usr:qualification%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							アレルギーなど注意が必要なこと <span class="need">＊</span>
						</dt><dd class="data ">
							<textarea class="" name="allergy" rows="4" wrap="soft" >%val:usr:allergy%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名1
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name1" value="%val:usr:family_name1%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄1
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate1" value="%val:usr:family_relate1%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢1
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age1" value="%val:usr:family_age1%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業1
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job1" value="%val:usr:family_job1%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名2
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name2" value="%val:usr:family_name2%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄2
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate2" value="%val:usr:family_relate2%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢2
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age2" value="%val:usr:family_age2%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業2
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job2" value="%val:usr:family_job2%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名3
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name3" value="%val:usr:family_name3%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄3
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate3" value="%val:usr:family_relate3%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢3
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age3" value="%val:usr:family_age3%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業3
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job3" value="%val:usr:family_job3%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名4
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name4" value="%val:usr:family_name4%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄4
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate4" value="%val:usr:family_relate4%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢4
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age4" value="%val:usr:family_age4%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業4
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job4" value="%val:usr:family_job4%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名5
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name5" value="%val:usr:family_name5%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄5
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate5" value="%val:usr:family_relate5%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢5
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age5" value="%val:usr:family_age5%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業5
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job5" value="%val:usr:family_job5%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名6
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name6" value="%val:usr:family_name6%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄6
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate6" value="%val:usr:family_relate6%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢6
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age6" value="%val:usr:family_age6%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業6
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job6" value="%val:usr:family_job6%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】氏名7
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_name7" value="%val:usr:family_name7%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】続柄7
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_relate7" value="%val:usr:family_relate7%" maxlength="32" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】年齢7
						</dt><dd class="data integer">
							
							<input class="input " type="text" name="family_age7" value="%val:usr:family_age7%" maxlength="10" style="text-align: right;" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							【家族構成】職業7
						</dt><dd class="data ">
							
							<input class="input " type="text" name="family_job7" value="%val:usr:family_job7%" maxlength="128" >
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							記述項目
						</dt><dd class="data ">
							<textarea class="" name="note" rows="4" wrap="soft" >%val:usr:note%</textarea><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ステイタス（ユーザー側）
						</dt><dd class="data ">
							
							<select class="" name="status">
								<option value="">----- 選択してください -----</option>
								<option value="1" %val:usr:status:1%>受付中</option>
								<option value="2" %val:usr:status:2%>申し込み完了</option>
								<option value="3" %val:usr:status:3%>書類待ち</option>
								<option value="4" %val:usr:status:4%>最終案内</option>
								<option value="5" %val:usr:status:5%>出発待ち</option>
								<option value="6" %val:usr:status:6%>帰国済み</option>
								<option value="7" %val:usr:status:7%>キャンセル</option>
							</select>
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ステイタス（管理者側）
						</dt><dd class="data ">
							
							<select class="" name="m_status">
								<option value="">----- 選択してください -----</option>
								<option value="1" %val:usr:m_status:1%>　オンライン登録中</option>
								<option value="2" %val:usr:m_status:2%>　入金済み</option>
								<option value="3" %val:usr:m_status:3%>　手配中</option>
								<option value="4" %val:usr:m_status:4%>　残金入金済み</option>
								<option value="5" %val:usr:m_status:5%>　最終案内待ち</option>
								<option value="6" %val:usr:m_status:6%>　出発待ち</option>
								<option value="7" %val:usr:m_status:7%>　参加中</option>
								<option value="8" %val:usr:m_status:8%>　帰国済み</option>
								<option value="9" %val:usr:m_status:9%>　途中帰国</option>
								<option value="10" %val:usr:m_status:10%>　キャンセル</option>
							</select>
							<br>
						</dd>
					</dl>
			</div>
		<input type="hidden" name="detect" value="判定">
		<!-- 管理ID -->
		<input type="hidden" name="SMPFORM" value="%smpform:MC_form%">
		<input type="hidden" name="id" value="%val:sys:id%">
		<input type="hidden" name="registDate" value="%val:usr:registDate%">
		<input type="hidden" name="memberID" value="%val:usr:memberID%">
		<input type="hidden" name="nameSei" value="%val:usr:nameSei%">
		<input type="hidden" name="nameMei" value="%val:usr:nameMei%">
		<input type="hidden" name="kanaSei" value="%val:usr:kanaSei%">
		<input type="hidden" name="kanaMei" value="%val:usr:kanaMei%">
		<input type="hidden" name="tell" value="%val:usr:tell%">
		<input type="hidden" name="email" value="%val:usr:email%">
		<input type="hidden" name="citizenship" value="%val:usr:citizenship%">
		<input type="hidden" name="gender" value="%val:usr:gender:id%">
		<input type="hidden" name="zipCode" value="%val:usr:zipCode%">
		<input type="hidden" name="pref" value="%val:usr:pref%">
		<input type="hidden" name="address" value="%val:usr:address%">
		<input type="hidden" name="addressKana" value="%val:usr:addressKana%">
		<input type="hidden" name="phone_fax" value="%val:usr:phone_fax%">
		<input type="hidden" name="passport" value="%val:usr:passport:id%">
		<input type="hidden" name="passportNum" value="%val:usr:passportNum%">
		<input type="hidden" name="expiration" value="%val:usr:expiration%">
		<input type="hidden" name="home_zipCode" value="%val:usr:home_zipCode%">
		<input type="hidden" name="home_pref" value="%val:usr:home_pref%">
		<input type="hidden" name="home_address" value="%val:usr:home_address%">
		<input type="hidden" name="home_addressKana" value="%val:usr:home_addressKana%">
		<input type="hidden" name="home_phone_fax" value="%val:usr:home_phone_fax%">
		<input type="hidden" name="schoool" value="%val:usr:schoool%">
		<input type="hidden" name="undergraduate" value="%val:usr:undergraduate%">
		<input type="hidden" name="department" value="%val:usr:department%">
		<input type="hidden" name="grade" value="%val:usr:grade%">
		<input type="hidden" name="company" value="%val:usr:company%">
		<input type="hidden" name="emergency_name" value="%val:usr:emergency_name%">
		<input type="hidden" name="emergency_kana" value="%val:usr:emergency_kana%">
		<input type="hidden" name="emergency_relate" value="%val:usr:emergency_relate%">
		<input type="hidden" name="emergency_phone" value="%val:usr:emergency_phone%">
		<input type="hidden" name="emergency_email" value="%val:usr:emergency_email%">
		<input type="hidden" name="authKey2" value="%val:usr:authKey2%">
		<input type="hidden" name="programCode" value="%val:usr:programCode%">
		<input type="hidden" name="programCode_1" value="%val:usr:programCode_1%">
		<input type="hidden" name="programCode_2" value="%val:usr:programCode_2%">
		<input type="hidden" name="programCode_3" value="%val:usr:programCode_3%">
		<input class="submit" type="submit" name="submit" value="確認">  
	</form>

	<div class="btn_wrapper">
		<a href="%url/card:MD02_tampyo%" style="margin: 100px 5px 26px 5px;">リプライする</a>
	</div>

	%sf:usr:ML02_list:mstfilter:table%

				<!-- SMP_TEMPLATE_FORM end -->

				<!-- SMP_TEMPLATE_FOOTER start -->
				<!-- SMP_TEMPLATE_FOOTER end -->

<?php require_once('admin01/admin01_designFooter.php'); ?>
