<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("school", "school", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "school", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "school", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "school", "staff", view:true, add:true, edit:true);
$this->add_right("school", "school", "registered", view:true, add:true);
$this->add_right("school", "school", "guest", view:true, );

$this->add_right("school", "class", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "class", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "class", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "class", "staff", view:true, add:true, edit:true);
$this->add_right("school", "class", "registered", view:true, add:true);
$this->add_right("school", "class", "guest", view:true, );


$this->add_right("school", "grade", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "grade", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "grade", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "grade", "staff", view:true, add:true, edit:true);
$this->add_right("school", "grade", "registered", view:true, add:true);
$this->add_right("school", "grade", "guest", view:true, );

$this->add_right("school", "subject", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "subject", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "subject", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("school", "subject", "staff", view:true, add:true, edit:true);
$this->add_right("school", "subject", "registered", view:true, add:true);
$this->add_right("school", "subject", "guest", view:true, );

