<?php 


// array Case Change (Upper , Lower Etc)
// $arrayname = array(
// 	"rahim" =>"20", 
// 	"bahim" =>"30", 
// 	"cahim" =>"40", 
// 	"dahim" =>"50"  
// );
// print("<pre>");
//   print_r(array_change_key_case($arrayname, CASE_UPPER));
 
// print("</pre>");

// array column (multidimantional Array)
// $a = array(
//     array(
//         'id' =>40 , 
//         'first' =>"sakib" , 
//         'last' =>"40" , 
//     ),
//     array(
//         'id' =>40 , 
//         'first' =>"sakib" , 
//         'last' =>"40" , 
//     ),
//     array(
//         'id' =>40 , 
//         'first' =>"sakib" , 
//         'last' =>"40" , 
//     ) 

// );

// $first =array_column($a, "first");
// print("<pre>");
//   print_r($first);
 
// print("</pre>");

// array_combine
// $Name = array("Sakib","Rakib","Sohan");
// $Department = array("Bangla","English","math");
// $combine=array_combine($Name, $Department);
// print("<pre>");
//   print_r($combine);
// print("</pre>");

// array_count_value
// $Name = array("Sakib","Rakib","Sohan","Rakib","Sohan");
// $Department = array("Bangla","English","math","English","math","English","math");
// print("<pre>");
//   print_r(array_count_values($Name));
//   print_r(array_count_values($Department));
// print("</pre>");

// array exists
// $arrayName = array(
//     'gp' =>"sdjkbvjkdbsjkv" , 
//     'p' =>"sdjkbvjkdbsjkv" 
// );
// if (array_key_exists("gp", $arrayName)) {
//     // code...
//     echo "sdjhjhfjh";
// }

// array search

// $color = array(
//  "rahim" =>"red", 
//  "bahim" =>"green", 
//  "cahim" =>"blue", 
//  "dahim" =>"black"  
// );

// if (isset($_POST['text'])) {
//     // code...
//     global $text;
//     $text =$_POST['text'];
//     $result =array_search($text, $color);
//     echo "u have search $text key $result";
// }
//  ?>
<!-- // <form action="index.php" method="post">
//     <input type="text" name="text" value="<?php echo $text;?>">
//     <input type="submit" name="submit">
// </form -->
<?php 

	// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	// $a2=array("e"=>"red","f"=>"black","g"=>"purple");
	// $a3=array("a"=>"red","b"=>"black","h"=>"yellow");
	// print("<pre>");
	// print_r(array_intersect($a1,$a2,$a3));
	// print("</pre>");

?>
<?php
$a=array("Volvo","BMW");
if (array_key_exists(2,$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>>