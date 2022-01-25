<?php
require_once("include/dbcommon.php");
require_once('classes/menupage.php');


if( !isLogged() || Security::isGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() || Security::isGuest() )
{
	return;
}

$duration = 30;
$url =  postvalue( "url" );
if( !$url ) {
	return;
}

$payload = array( 
	"username" => Security::getUserName(),
	"host" => hostFromUrl( $url ),
	"external" => true,
	"origin" => projectUrl()
);
$jwt = jwt_encode( $payload, $duration );
if( strpos( $url, '?' ) !== false ) {
	$url .= "&token=" . $jwt;
} else {
	$url .= "?token=" . $jwt;
}
header("Location: " . $url );
?>