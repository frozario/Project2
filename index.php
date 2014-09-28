<!DOCTYPE html>
<html>
<head>
	<title>An xkcd Style Password Generator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>An xkcd Style Password Generator</h1>
	<fieldset>
		<legend class="left">New generated password</legend>
		<h3><?php include 'logic.php';  ?></h3>
	</fieldset>
	<form action="?" method="GET">
		<fieldset class="left">
			<legend>Password structure</legend>
			<label for="c"># of Words (Max 9): </label>
			<input type="number" min="2" max="9" id="c" name="c" value="4" />
			<br/>
			<input type="checkbox" id="n" name="n" value="1" <?php echo ($n == 1) ? "checked=\"checked\"" : ""; ?> /> <label for="n">Include a number?</label>
			<br/>
			<input type="checkbox" id="ch" name="ch" value="1" <?php echo ($ch == 1) ? "checked=\"checked\"" : ""; ?> /> <label for="ch">Include a special symbol (one random of @,#,$,%,&)?</label>
			<br/>
			<div class="button"><input type="submit" value="Generate!" /></div>
		</fieldset>
	</form>
	<fieldset class="left">
		<legend>What it is?</legend>
		<p>
			An <a href="http://en.wikipedia.org/wiki/xkcd">xkcd</a> Style Passwords become after publishing a <a href="http://xkcd.com/936/">webcomic</a> about passwords strength (by Randall Munroe).<br/>
			<img src="http://imgs.xkcd.com/comics/password_strength.png" alt="webcomic" /><br/>
			This comic is saying that the password in the top frames "Tr0ub4dor&3" is easier for password cracking software to guess
			because it has less <a href="http://en.wikipedia.org/wiki/Entropy_(information_theory)">entropy</a> than "correcthorsebatterystaple" and also more difficult for a human to remember,
			leading to undesirable results.<br/><br/>
			That's why it's better to choose an xkcd style passwords, structured like displayed in bottom part of comic.<br/>
			This system generates strong passwords using 2 or more random common English words.
			In addition, if you want, it's possible to add one special symbol and/or one number at the end, to get even more safe password. Enjoy!
		</p>
	</fieldset>
</body>
</html>
