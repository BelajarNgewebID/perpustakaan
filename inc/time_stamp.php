<?php
//Srinivas Tamada http://9lessons.info
//Loading Comments link with load_updates.php 
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"<font size='2'>$seconds detik lalu</font><br />"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"<font size='2'>satu menit lalu</font><br />"; 
    }
   else
   {
   echo"<font size='2' color='e7e7e7'>$minutes menit lalu</font><br />"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"<font size='2' color='e7e7e7'>satu jam lalu</font><br />";
   }
  else
  {
  echo"<font size='2' color='e7e7e7'>$hours jam lalu</font><br />";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo "<font size='2' color='e7e7e7'>"."satu jam lalu"."</font><br />";
   }
  else
  {
  echo "<font size='2' color='e7e7e7'>"."$days days ago"."</font><br />";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo "<font size='2' color='e7e7e7'>"."one week ago"."</font><br />";
   }
  else
  {
  echo "<font size='2' color='e7e7e7'>"."$weeks weeks ago"."</font><br />";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo "<font size='2' color='e7e7e7'>"."one month ago"."</font><br />";
   }
  else
  {
  echo "<font size='2' color='e7e7e7'>"."$months months ago"."</font><br />";
  }
 
   
}

else
{
if($years==1)
   {
   echo "<font size='2' color='e7e7e7'>"."one year ago"."</font><br />";
   }
  else
  {
  echo "<font size='2' color='e7e7e7'>"."$years years ago"."</font><br />";
  }


}
 


} 



?></font>