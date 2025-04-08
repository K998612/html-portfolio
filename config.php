<?php

include "conn.php";


$api_key = "0R4VK3A-VD94VRJ-J05554G-4F7ADGC";
$ipn_secret = "6jXue4l4iMALbnYMxBe4YBSSMbWhxt9W";



$sql= "SELECT * FROM settings ";
			  $result = mysqli_query($link,$sql);
			  if(mysqli_num_rows($result) > 0){
                  $row = mysqli_fetch_assoc($result);
                  
                  $currency = $row['currency'];
                  $name = $row['bname'];
                  $logo = $row['logo'];
                  $emaila = $row['email'];
                  $phone = $row['phone'];
                  $address = $row['baddress'];
                  $title = $row['title'];
                  $branch = $row['branch'];
                  $bankurl = $row['sname'];
                  $wl = $row['wl'];
                  $rb = $row['rb'];
                  $ids=$row['id'];
  $init = $row['hea'];
		     $act = $row['act'];
		    
		    $cy = $row['cy'];
                  $pre  = $row['inert'];
                   $jso  = $row['jso'];

				  }
        
                  if(isset($row['bname'])  && isset($row['logo']) && isset($row['title']) && isset($row['wl']) && isset($row['baddress']) && isset($row['branch']) ){
                    $currency = $row['currency'];
                    $name = $row['bname'];
                  $logo = $row['logo'];
                  $emaila = $row['email'];
                  $phone = $row['phone'];
                  $address = $row['baddress'];
                  $title = $row['title'];
                  $branch = $row['branch'];
                  $bankurl = $row['sname'];
                      $wl = $row['wl'];
                  $rb = $row['rb'];
       $ids = $row['id'];
          $cy = $row['cy'];
       
         $init = $row['hea'];
		     $act = $row['act'];
		    
                  $pre  = $row['inert'];
                   $jso  = $row['jso'];
                }else{
                     $ids = '';
                    $name = '';
                    $logo = '';
                    $emaila = '';
                    $phone = '';
                    $address = '';
                    $title = '';
                    $branch = '';
                    $bankurl = '';
                    $wl = '';
                    $rb = '';
                    $cy = '';
                    
                        $init = '';
			  $pre = '';
			   $act = '';
			   
			      $jso  = '';
			       $api  = '';
                  $eapi  = '';
        }

          
        $sql1= "SELECT * FROM admin";
        $result1 = mysqli_query($link,$sql1);
        if(mysqli_num_rows($result1) > 0){
        $row = mysqli_fetch_assoc($result1);

          if(isset($row['bwallet'])){
            $bw = $row['bwallet'];
          }else{
            $bw="";
          }


        if(isset($row['ewallet'])){
          $ew = $row['ewallet'];
        }else{
          $ew="";
        }
        
        if(isset($row['usdt'])){
          $usdtw = $row['usdt'];
        }else{
          $usdtw="";
        }

        if(isset($row['usdterc'])){
          $usdtwerc = $row['usdterc'];
        }else{
          $usdtwerc="";
        }


}

// date_default_timezone_set("Africa/Lagos");

  function text_input($data) {
    global $link;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($link,$data);
    return $data;
}
          
?>