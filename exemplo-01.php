

<form method="post">
	
		<input type="text" name="busca">
		<button type="submit">Enviar</button>

</form>


<?php

if(isset($_POST['busca'])) {

//código de segurança para evitar colocar tags no preenchimento na busca
	//echo strip_tags($_POST['busca']);

// escreve tags na tela não executa vira texto
	echo htmlentities($_POST['busca']);
}


?>