<!DOCTYPE html>
<head></head>	
<body>
	<form method="post" action="/apexadd">
	@csrf
		Name<select id="name" name="name" required>
			<option selected>shiny-luminas</option>
			<option>|a-ta|</option>
			<option>twin9le_pN</option>
		</select>

		Legends<select id="legends" name="legends" required>
			<option selected>Bloodhound</option>
			<option>Gibraltar</option>
			<option>Lifeline</option>
			<option>Pathfinder</option>
			<option>Wraith</option>
			<option>Bangalore</option>
			<option>Coustic</option>
			<option>Mirage</option>
			<option>Octane</option>
			<option>Wattson</option>
			<option>Crypt</option>
			<option>Revenant</option>
		</select>

		kill<input id="kill" type="text" name="kill" required>

		assist<input id="assist" type="text" name="assist" required>
		
		score<input id="score" type="text" name="score" required>

		<button type="submit">
			送信
		</button>
	</form>
	<a href="/data">r6s</a>
</body>	
</html>