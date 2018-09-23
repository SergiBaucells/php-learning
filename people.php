<?php

require 'framework/bootstrap.php';
require 'models/Person.php';

$people = Person::all();

require 'views/people.blade.php';