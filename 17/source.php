<?php

	$single  = [1 => "one", 2 => "two", 3 => "three", 4 => "four", 5 => "five", 6 => "six", 7 => "seven", 8 => "eight", 9 => "nine"];

	$teens    = [1 => "ten", 2 => "twenty", 3 => "thirty", 4 => "forty", 5 => "fifty", 6 => "sixty", 7 => "seventy", 8 => "eighty", 9 => "ninety"];

	$hundreds = [1 => "onehundredand", 2 => "twohundredand", 3 => "threehundredand", 4 => "fourhundredand", 5 => "fivehundredand", 6 => "sixhundredand", 7 => "sevenhundredand", 8 => "eighthundredand", 9 => "ninehundredand"];

$finish="";

	function teens($a){
	global $teens, $single, $teens,$finish;
		$others = [10,11,12,13,14,15,16,17,18,19,20,30,40,50,60,70,80,90];
		if(!in_array($a, $others)){
			$first = substr($a, 0, 1);
			if($first != 0){
				$tmp1 = $teens[$first];
				$tmpLen = strlen($tmp1);

				$second = substr($a, 1, 1);
				$tmp2 = $single[$second];
				$tmpLen2 = strlen($tmp2);
				$number = "".$tmp1.$tmp2;
				$len = $tmpLen + $tmpLen2;
				$finish.=$number;
				echo"{$number}";
				return($len);
				}
			else{
				$second = substr($a, 1, 1);
				$tmp = $single[$second];
				$tmpLen2 = strlen($tmp);
				$number = "".$tmp;
				$len = $tmpLen2;
				$finish.=$number;
				echo"{$number}";
				return($len);	
			}

		}
		else{
			switch($a){
				case 10: $finish.="ten";echo"ten";return(strlen("ten")); break;
				case 11: $finish.="eleven";echo"eleven";return(strlen("eleven")); break;
				case 12: $finish.="twelve";echo"twelve";return(strlen("twelve")); break;
				case 13: $finish.="thirteen";echo"thirteen";return(strlen("thirteen")); break;
				case 14: $finish.="fourteen";echo"fourteen";return(strlen("fourteen")); break;
				case 15: $finish.="fifteen";echo"fifteen";return(strlen("fifteen")); break;
				case 16: $finish.="sixteen";echo"sixteen";return(strlen("sixteen")); break;
				case 17: $finish.="seventeen";echo"seventeen";return(strlen("seventeen")); break;
				case 18: $finish.="eighteen";echo"eighteen";return(strlen("eighteen")); break;
				case 19: $finish.="nineteen";echo"nineteen";return(strlen("nineteen")); break;
				case 20: $finish.="twenty";echo"twenty";return(strlen("twenty")); break;
				case 30: $finish.="thirty";echo"thirty";return(strlen("thirty")); break;
				case 40: $finish.="forty";echo"forty";return(strlen("forty")); break;
				case 50: $finish.="fifty";echo"fifty";return(strlen("fifty")); break;
				case 60: $finish.="sixty";echo"sixty";return(strlen("sixty")); break;
				case 70: $finish.="seventy";echo"seventy";return(strlen("seventy")); break;
				case 80: $finish.="eighty";echo"eighty";return(strlen("eighty")); break;
				case 90: $finish.="ninety";echo"ninety";return(strlen("ninety")); break;
			}
		}
	}


	function countChar($a){
		global $chars, $teens, $hundreds, $single,$finish;
		if(strlen($a) == 4){
			$tmp = "onethousand";
			$len = strlen($tmp);
			$finish.=$tmp;
			echo"{$tmp}";
			return($len);
		}
		elseif(strlen($a) == 1){
			$tmp = $single[$a];
			$len = strlen($tmp);
			$finish.=$tmp;
			echo"{$tmp}";
			return($len);
		}
		elseif(strlen($a) == 2){
			teens($a);
		}
		elseif(strlen($a) == 3){
			//hundreds($a);
			$others = [100,200,300,400,500,600,700,800,900];
			if(!in_array($a, $others)){
				$first = substr($a, 0, 1);
				$tmp1 = $hundreds[$first];
				$tmpLen = strlen($tmp1);
				$finish.=$tmp1;
				echo"{$tmp1}";
				$tmpTwo = substr($a, 1, 2);
				$lenTwo = teens($tmpTwo);

				$len = $tmpLen + $lenTwo;
				return($len);
			}
			else{
				switch($a){
					case 100: $finish.="onehundred";echo"onehundred"; return(strlen("onehundred")); break;
					case 200: $finish.="twohundred";echo"twohundred";return(strlen("twohundred")); break;
					case 300: $finish.="threehundred";echo"threehundred";return(strlen("threehundred")); break;
					case 400: $finish.="fourhundred";echo"fourhundred";return(strlen("fourhundred")); break;
					case 500: $finish.="fivehundred";echo"fivehundred";return(strlen("fivehundred")); break;
					case 600: $finish.="sixhundred";echo"sixhundred";return(strlen("sixhundred")); break;
					case 700: $finish.="Sevenhundred";echo"sevenhundred";return(strlen("sevenhundred")); break;
					case 800: $finish.="eighthundred";echo"eighthundred";return(strlen("eighthundred")); break;
					case 900: $finish.="ninehundred";echo"ninehundred";return(strlen("ninehundred")); break;
				}
		}
		}
	}

	function main (){
		global $finish;
		$sum = 0;
		for($i=1; $i <= 1000; $i++){
			//echo"\n tmp num: {$i}\n";
			$sum += countChar($i);
			echo"\n";
		}
			echo"\nFinish: {$finish}";
			$flen = strlen($finish);
			echo"\nFinishLen: {$flen}";
	}



	main();


?>