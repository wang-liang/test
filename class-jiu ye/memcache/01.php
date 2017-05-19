<?php

$mem = new Memcache();

$flag = $mem -> connect('localhost',11211);

$mem -> set('week','Tuesday',0,3600*24);