<?php

$tasks = App::get('database')->selectAll('todos');
require 'views/test6.view.php';