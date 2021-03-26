<?php

function isPanagram($text) {
	$latinAlphabet = str_split("abcdefghijklmnopqrstuvwxyz");
	foreach($latinAlphabet as $char)
    {
		if (strpos(strtolower($text), $char)===false) 
        {
			return false;
		}
	}
	return true;
}
echo(ispanagram("The quick brown fox jumps over the lazy dog") ? 'true' : 'false');

?>