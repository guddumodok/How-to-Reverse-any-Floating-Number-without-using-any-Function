<?php
include".vista";
p("<form action=''method='post'>
<input type='text'name='q'><input type='submit'name='s'value='Reverce'>
</form>");
if(isset($_POST["s"]) && $_POST["q"]!=null && $_POSt[""]){
	$no=$_POST["q"];

	p("<h1>You Entered ".$no);
	///////////////////////////
	$b=$no/10;
	$b1=$no/100;
	$b2=$no/1000;
	$b3=$no/10000;
	$b4=$no/100000;
	$b5=$no/1000000;
	if($b%10==0){
		$d=$b*10;
		if($d==$no){
			$pos=10;
		}else if($b*100==$no){
			$pos=100;
		}else if($b*1000==$no){
			$pos=1000;
		}else if($b*10000==$no){
			$pos=10000;
		}else if($b*100000==$no){
			$pos=100000;
		}else if($b*1000000==$no){
			$pos=1000000;
		}else if($b*10000000==$no){
			$pos=10000000;
		}
	}else if($b1%10==0){
		$d=$b1*10;
		if($d==$no){
			$pos=10;
		}else if($b1*100==$no){
			$pos=100;
		}else if($b1*1000==$no){
			$pos=1000;
		}else if($b1*10000==$no){
			$pos=10000;
		}else if($b1*100000==$no){
			$pos=100000;
		}else if($b1*1000000==$no){
			$pos=1000000;
		}else if($b1*10000000==$no){
			$pos=10000000;
		}
	}else if($b2%10==0){
		$d=$b2*10;
		if($d==$no){
			$pos=10;
		}else if($b2*100==$no){
			$pos=100;
		}else if($b2*1000==$no){
			$pos=1000;
		}else if($b2*10000==$no){
			$pos=10000;
		}else if($b2*100000==$no){
			$pos=100000;
		}else if($b2*1000000==$no){
			$pos=1000000;
		}else if($b2*10000000==$no){
			$pos=10000000;
		}
	}else if($b3%10==0){
		$d=$b3*10;
		if($d==$no){
			$pos=10;
		}else if($b3*100==$no){
			$pos=100;
		}else if($b3*1000==$no){
			$pos=1000;
		}else if($b3*10000==$no){
			$pos=10000;
		}else if($b3*100000==$no){
			$pos=100000;
		}else if($b3*1000000==$no){
			$pos=1000000;
		}else if($b3*10000000==$no){
			$pos=10000000;
		}
	}else if($b4%10==0){
		$d=$b4*10;
		if($d==$no){
			$pos=10;
		}else if($b4*100==$no){
			$pos=100;
		}else if($b4*1000==$no){
			$pos=1000;
		}else if($b4*10000==$no){
			$pos=10000;
		}else if($b4*100000==$no){
			$pos=100000;
		}else if($b4*1000000==$no){
			$pos=1000000;
		}else if($b4*10000000==$no){
			$pos=10000000;
		}
	}else if($b5%10==0){
		$d=$b5*10;
		if($d==$no){
			$pos=10;
		}else if($b5*100==$no){
			$pos=100;
		}else if($b5*1000==$no){
			$pos=1000;
		}else if($b5*10000==$no){
			$pos=10000;
		}else if($b5*100000==$no){
			$pos=100000;
		}else if($b5*1000000==$no){
			$pos=1000000;
		}else if($b5*10000000==$no){
			$pos=10000000;
		}
	}
	echo "Floating Position is ".$pos;
	echo"<br>";
	$number=$no*$pos;
	echo ".Now the Number without Point is ".$number;
	echo"<hr>";
$num =$number;  
$revnum = 0;  
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10);   
}  
echo "Reverse without point is ".$revnum;  
echo"<hr>";
$result=$revnum/$pos;
echo "<h1>Finally Result is ".$result;
}
?>
