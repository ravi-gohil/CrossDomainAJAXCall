<?php
	$a[] = "aarav";
	$a[] = "bhim";
	$a[] = "chatur";
	$a[] = "dimpi";
	$a[] = "elephant";
	$a[] = "frog";
	$a[] = "giger";
	$a[] = "hardik";
	$a[] = "jayesh";
	$a[] = "kamalesh";
	$a[] = "lalu";
	$a[] = "manu";
	$a[] = "nanu";
	$a[] = "palak";
	$a[] = "rao";
	$a[] = "sudhir";
	$a[] = "tushar";
	$a[] = "uttam";
	$a[] = "vella";
	$a[] = "yashvant";
	$a[] = "zinnaat";
	
	$q = $_REQUEST["q"];
	
	$hint = "";
	
	if($q !== "")
	{
		$q= strtolower($q);
		$len = strlen($q);
		foreach($a as $name)
		{
			if(stristr($q, substr($name, 0, $len)))
			{
				if ($hint ==="")
				{
					$hint = $name;
				}
				else
				{
					$hint .= ", $name";
				}
			}
		}
	}

	echo $hint === "" ? "no suggestion" : $hint;
?>