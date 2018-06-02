<?php

	$allowAll = array();
	$allowOnly = array();

	$allowAll['session']['login'] = True;
	$allowAll['common']['unauthorized'] = True;
	$allowAll['session']['logout'] = True;

	// $allowOnly[group][controller][action]
	// 1 -> admin; 2 -> registered users
	$allowAll['user']['login'] = True;
	$allowAll['user']['register'] = True;
	
	$allowOnly[1]['user']['logout'] = True;
	$allowOnly[1]['user']['list_users'] = True;
	$allowOnly[2]['user']['logout'] = True;
	$allowOnly[2]['user']['list_users'] = True;
	
	$allowOnly[1]['activity']['list_activities'] = True;
	$allowOnly[2]['activity']['list_activities'] = True;
	
	$allowOnly[1]['home']['index'] = True;
	$allowOnly[2]['home']['index'] = True;
	
	$allowOnly[1]['item']['list_items'] = True;
	$allowOnly[2]['item']['list_items'] = True;
	
	$allowOnly[1]['message']['list_messages'] = True;
	$allowOnly[2]['message']['list_messages'] = True;
	
	$allowOnly[1]['admin']['index'] = True;
	$allowOnly[2]['admin']['index'] = False;
	$allowOnly[1]['admin']['item'] = True;

	$allowOnly[1]['common']['home'] = True;
	$allowOnly[2]['common']['home'] = True;
	
?>