<?php
/*
 * Created on 7 avr. 10
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include("globals.php");
 
 //phpinfo();
 $service = new FieService();
 echo $service->helloFie();
 
 echo "<hr>";
 
 $transfer = new RemoteParameterListTO();
 $remoteparam = new RemoteParameterSet();
 $remoteparam->request = "fie://XML::channel[1]/item[2]//media:thumbnail/@url";
 $remoteparam->source = "http://localhost:8888/target/fie-projects/fie-app/config/articles.xml";
 
 $transfer->remoteParameterList = Array($remoteparam); 
 			echo '<pre>';
 var_dump( $service->getRemoteParameterList(  $transfer ) );
 			echo '</pre>';
 
?>


