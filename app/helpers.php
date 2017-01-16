<?php 

function alert($level = 'info', $message)
{
	session()->flash($level, $message);
}

function set_active($path)
{
	return Request::is($path) ? 'active' : '';
}
function inislise($name)
{
	//echo $name;
	//make initials
	$bn = explode(' ', $name);
    $initials =  $bn[0][0] . $bn[1][0];

    return $initials;
}