<?php
require_once("../database.php");
require_once("../models/functions.php");

$link = db_connect();

include("../views/admin/main_admin.php");