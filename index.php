<?php

use Caraballo\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$students = new StudentModel;

$students->id = 12345;
$students->name = "Rea Magtubo";
$students->course = "BSED";
$students->year_level = 2;
$students->section = "B";

$students->update(12345);
