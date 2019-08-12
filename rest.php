<?php
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
	header('Access-Control-Allow-Headers: token, Content-Type');
	die();
}
 
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once './class/Login.php';
require_once './class/Company.php';

/**
 * POST
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $postBody = file_get_contents("php://input");
    $postBody = json_decode($postBody);

}