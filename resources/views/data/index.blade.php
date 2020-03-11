<!DOCTYPE html>
<head></head>	
<body>
	<form method="post" action="/add">
	@csrf
		名前<select id="name" name="name" required>
			<option selected>shiny-luminas</option>
			<option>|a-ta|</option>
			<option>twin9le_pN</option>
		</select>

		マップ<select id="map" name="map" required>
			<option selected></option>
			<option>山荘</option>
			<option>カフェ・ドフトエフスキー</option>
			<option>運河</option>
			<option>クラブハウス</option>
			<option>アウトバック</option>
			<option>オレゴン</option>
			<option>国境</option>
			<option>銀行</option>
			<option>テーマパーク</option>
			<option>ヴィラ</option>
		</select>

		キル<input id="kill" type="text" name="kill" required>

		デス<input id="death" type="text" name="death" required>

		アシスト<input id="assist" type="text" name="assist" required>
		
		スコア<input id="score" type="text" name="score" required>

		<button type="submit">
			送信
		</button>
	</form>
</body>	
</html>