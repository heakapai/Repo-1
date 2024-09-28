<?php

require 'vendor/autoload.php';

$rows = selectAll('todos');

include 'views/index.view.php';