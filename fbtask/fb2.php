<?php
// Fill up array with names
$a[]="Anusha";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Deepthi";
$a[]="Dilip";
$a[]="Surya";
$a[]="Deepika";
$a[]="Rupa";
$a[]="Gayathri";
$a[]="Haritha";
$a[]="Indira";
$a[]="Jhansi";
$a[]="Keerthana";
$a[]="Lavanya";
$a[]="Neeraj";
$a[]="Ohani";
$a[]="Pavan";
$a[]="Amrutha";
$a[]="Ram";
$a[]="Charan";
$a[]="Divya";
$a[]="Emran";
$a[]="Evita";
$a[]="Sai";
$a[]="Tomesh";
$a[]="Uma devi";
$a[]="Varun";
$a[]="Lalitha";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

// get the q parameter from URL
$q=$_REQUEST["q"]; $hint="";

// lookup all hints from array if $q is different from "" 
if ($q !== "")
  { $q=strtolower($q); $len=strlen($q);
    foreach($a as $name)
    { if (stristr($q, substr($name,0,$len)))
      { if ($hint==="")
        { $hint=$name; }
        else
         { $hint .= "<br /> $name"; }
      }
    }
  }

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint==="" ? "no suggestion" : $hint;
//echo "<option value='$name'>$name</option>";
?>

