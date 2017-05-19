<?php

$mem = new Memcache();

$flag = $mem -> connect('localhost',11211);

var_dump($mem -> get('week'));