<?php

include("../admin/functions/main-function.php");


$hotel_id = $_REQUEST['hotel'];

$number_con = array(
    'hotel_id' => $hotel_id
);
$hotel = display_where("hotels", $number_con);

$hotel_detail_con = array(
    'hd_hotel_id' => $hotel_id
);
$hotel_detail = display_where('hotel_details', $hotel_detail_con);
