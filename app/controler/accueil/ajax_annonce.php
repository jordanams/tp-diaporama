<?php

	if ($_SESSION['annonce'] == $_SESSION['count'])
	{
		$_SESSION['annonce'] = 0;
	}
	else
	{
		$_SESSION['annonce']++;
	}
?>