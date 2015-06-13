<?php
echo "Hoje é dia " . date('d F Y');
echo " agora são " . date('H:i:s a');

if(6 - date('w') == 0){
	echo ", hoje é sábado!";
}
else{
	echo ", faltam " . (6 - date('w'));
}
