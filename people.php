<?php

require 'models/Person.php';
require 'framework/bootstrap.php';

$people = Person::all();

require 'views/people.blade.php';