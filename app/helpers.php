<?php 

function alert($level = 'info', $message)
{
	session()->flash($level, $message);
}

function set_active($path)
{
	return Request::is($path) ? 'active' : '';
}
