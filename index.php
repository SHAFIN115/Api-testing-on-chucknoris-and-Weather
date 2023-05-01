<?php

$response = json_decode(file_get_contents("https://api.chucknorris.io/jokes/random"), true);

if(!empty($response)){
	?>
		<img src="<?=$response['https://assets.chucknorris.host/img/avatar/chuck-norris.png']?>" /><br/><br/>

		<p> Joke: </p>
		<p><?=$response['value']?></p>
	<?php
}