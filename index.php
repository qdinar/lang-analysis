<?php
$t1=microtime(true);
header('Content-Type: text/html; charset=utf-8');
//header('Content-Type: text/html; charset=ucs-2');



$corpus=file_get_contents('corpus.txt');
//echo $corpus;
mb_internal_encoding('utf8');
//$corpus=mb_strtolower($corpus);
//echo $corpus;
$corpus=mb_convert_encoding($corpus,'ucs-2');
mb_internal_encoding('ucs-2');
/*
$corpus_ozonlogo=mb_strlen($corpus);
//echo $corpus_ozonlogo;
//echo $corpus;
//exit;
$bir=array();
for($i=0,$harif='';$i<$corpus_ozonlogo;$i++,$harif=mb_substr($corpus,$i,1)){
	//$harif=mb_convert_encoding($harif,'utf-8');
	//echo $harif;
	//echo mb_convert_encoding($harif,'utf-8');
	if(!isset($bir[$harif])){
		$bir[$harif]=1;
	}else{
		$bir[$harif]++;
	};
	//echo $bir[$harif];
}
//$bir_ozonlogo=count($bir);
//echo $bir_ozonlogo;
arsort($bir);
//echo'<pre>';
//var_dump($bir);
//print_r($bir);
foreach($bir as $key=>$value){
	if(!isset($prev))$prev=$value;
	if(!isset($prevmin))$prevmin=$value;
	echo '"'.mb_convert_encoding($key,'utf-8').'" '.$value.' ';
	$min=round(($value/$prev)*100);
	if($min<=$prevmin){
		$prevmin=$min;
		echo '<span style="color:red;">'.$min.'%</span>; ';
	}else{
		echo $min.'%; ';
	}
	$prev=$value;
}
echo '<br><br>';
*/

ngram(1,$corpus,u(''),1);


/*
ngram(2,$corpus,u(' '));
ngram(3,$corpus,u(' б'));
ngram(3,$corpus,u(' к'));
ngram(3,$corpus,u(' т'));
ngram(3,$corpus,u(' а'));
ngram(3,$corpus,u(' д'));
ngram(4,$corpus,u(' бе'));
ngram(4,$corpus,u(' ка'));
ngram(4,$corpus,u(' та'));
ngram(4,$corpus,u(' ал'));
ngram(4,$corpus,u(' ди'));
ngram(5,$corpus,u(' бел'));
ngram(5,$corpus,u(' кар'));
ngram(5,$corpus,u(' тат'));
ngram(5,$corpus,u(' ала'));
ngram(5,$corpus,u(' дип'));
ngram(6,$corpus,u(' белә'));
ngram(6,$corpus,u(' кара'));
ngram(6,$corpus,u(' тата'));
ngram(6,$corpus,u(' алар'));
ngram(6,$corpus,u(' дип '));
ngram(7,$corpus,u(' белән'));
ngram(7,$corpus,u(' караг'));
ngram(7,$corpus,u(' татар'));
ngram(7,$corpus,u(' алар '));
ngram(7,$corpus,u(' дип ә'));
ngram(8,$corpus,u(' белән '));
ngram(8,$corpus,u(' карага'));
ngram(8,$corpus,u(' татар '));
ngram(8,$corpus,u(' алар б'));
ngram(8,$corpus,u(' дип әй'));
*/
/*
ngram(2,$corpus,u('а'));
ngram(3,$corpus,u('ар'));
ngram(4,$corpus,u('ар '));
ngram(5,$corpus,u('ар б'));
ngram(6,$corpus,u('ар бе'));
ngram(3,$corpus,u('а '));
ngram(3,$corpus,u('ан'));
*/
/*
ngram(2,$corpus,u('н'));
ngram(3,$corpus,u('н '));
ngram(3,$corpus,u('ны'));
*/
/*
ngram(2,$corpus,u('ә'));
ngram(3,$corpus,u('ә '));
ngram(3,$corpus,u('әр'));
ngram(4,$corpus,u('әре'));
*/
/*
ngram(2,$corpus,u('е'));
ngram(3,$corpus,u('ен'));
ngram(3,$corpus,u('е '));
ngram(3,$corpus,u('ел'));
*/
/*
ngram(2,$corpus,u('л'));
ngram(3,$corpus,u('ла'));
ngram(3,$corpus,u('лә'));
ngram(3,$corpus,u('лы'));
ngram(3,$corpus,u('ле'));
ngram(4,$corpus,u('лар'));
ngram(4,$corpus,u('ләр'));
*/


/*
ngram(2,$corpus,u(' '),2);
ngram(2,$corpus,u('а'),2);
ngram(2,$corpus,u('н'),2);
ngram(2,$corpus,u('ә'),2);
ngram(2,$corpus,u('л'),2);
ngram(2,$corpus,u('р'),2);
ngram(2,$corpus,u('ы'),2);
*/
/*
ngram(3,$corpus,u('а '),2);
ngram(3,$corpus,u('н '),2);
ngram(3,$corpus,u('ә '),2);
ngram(3,$corpus,u('. '),2);
ngram(3,$corpus,u('ла'),2);
ngram(3,$corpus,u('лә'),2);
ngram(3,$corpus,u('ал'),2);
ngram(3,$corpus,u('ел'),2);
ngram(3,$corpus,u('ар'),2);
ngram(3,$corpus,u('әр'),2);
ngram(3,$corpus,u('ер'),2);
ngram(3,$corpus,u('да'),2);
*/

/*
ngram(4,$corpus,u('да '),2);
ngram(4,$corpus,u('дә '),2);
ngram(4,$corpus,u('нә '),2);
ngram(4,$corpus,u('гә '),2);
ngram(4,$corpus,u('ала'),2);
ngram(4,$corpus,u('ула'),2);
ngram(4,$corpus,u('лла'),2);
ngram(4,$corpus,u('елә'),2);
ngram(4,$corpus,u('әлә'),2);
ngram(4,$corpus,u(' ал'),2);
ngram(4,$corpus,u('кал'),2);
ngram(4,$corpus,u('бал'),2);
ngram(4,$corpus,u('бел'),2);
ngram(4,$corpus,u(' ел'),2);
ngram(4,$corpus,u('тел'),2);
ngram(4,$corpus,u('гел'),2);
ngram(4,$corpus,u('чел'),2);
ngram(4,$corpus,u('лар'),2);
ngram(4,$corpus,u('ләр'),2);
ngram(4,$corpus,u('бер'),2);
ngram(4,$corpus,u('тер'),2);
ngram(4,$corpus,u('кер'),2);
ngram(4,$corpus,u('нда'),2);
ngram(4,$corpus,u(' да'),2);
*/

/*
ngram(2,$corpus,u(' '),1);
ngram(2,$corpus,u(' '),2);
ngram(2,$corpus,u('а'),1);
ngram(2,$corpus,u('а'),2);

ngram(2,$corpus,u('('),1);
ngram(2,$corpus,u('('),2);
ngram(2,$corpus,u('—'),1);
ngram(2,$corpus,u('—'),2);
ngram(2,$corpus,u('«'),2);
ngram(2,$corpus,u('э'),2);
*/

//ngram(2,$corpus,u(''),1);

//ngram(3,$corpus,u(' '),3);
//ngram(3,$corpus,u('а'),3);

//ngram(3,$corpus,u(''),1);

//ngram(6,$corpus,u(' б'),3);
//ngram(6,$corpus,u('ар'),3);

//ngram(4,$corpus,u(''),1);
//ngram(5,$corpus,u(''),1);
//ngram(6,$corpus,u(''),1);
//ngram(7,$corpus,u(''),1);

//$sp=' ';
//$split=explode(u($sp),$corpus);
//foreach($split as $value){
	//echo mb_convert_encoding($value,'utf-8').' ';
//}
//wngram($split,1,$sp);
//wngram($split,2,$sp);
//wngram($split,3,$sp);

//$sp='а';
//$split=explode(u($sp),$corpus);
//wngram($split,1,$sp);
//wngram($split,2,$sp);

//$sp='н';
//$split=explode(u($sp),$corpus);
//wngram($split,1,$sp);

//ngvdist(1);
//diagram(1);

//test:
//$tmparr=array('a'=>9);
//echo($tmparr[0]);
//does not work

//ngram(2,$corpus,u(''),1);
//diagram(2);

//ngram(2,$corpus,u(''),1);
//" б" 4088; "ар" 3743; " к" 3632; "а " 3629; "н " 3339; "ла" 3083; ", " 2866; "ан" 2828; " т" 2798; "лә" 2663; "ә " 2540; "ен" 2173; "га" 2160; " а" 2149; "ал" 2126; "та" 2105; ". " 2053; "р " 2039; "е " 2030; "әр" 2003; "ел" 1949; "ы " 1945; "ән" 1860; "да" 1808; "ын" 1805; "ка" 1770; " д" 1680; "ер" 1668; "ны" 1599; " и" 1563; "бе" 1549; "дә" 1408; " м" 1398; "ул" 1383; "на" 1374; " с" 1364; "ре" 1320; "нд" 1311; "ры" 1309; "ат" 1289; "лы" 1276; "ң " 1235; "п " 1226; "ба" 1213; "ле" 1191; "ра" 1167; "те" 1138; "бу" 1127; "гә" 1118; "не" 1080; "к " 1038; "нә" 1005; ....

//$corpus=str_replace(u(' б'),u(char('e000')),$corpus);
//$corpus=str_replace(u(' б'),"\xe0\x00",$corpus);

ngram(2,$corpus,u(''),1);
$search=array();
$replace=array();
$searchvalstoshow=array();

$i=0;
$howmanytimes=3;
for($j=0;$j<$howmanytimes;$j++){
	$search[$j]=array();
	$replace[$j]=array();
	$searchvalstoshow[$j]=array();
	$ngtogetc=floor(count($ngram[2])/25);
	$m=0;
	echo '<h5>'.$j.'</h5><br>';
	foreach($ngram[2] as $k=>$v){
		//if($i==100*$j+100)break;
		if($m==$ngtogetc)break;
		$search[$j][$i]=$k;
		//$searchvalstoshow[$j][$i]=$k;
		$searchvalstoshow[$j][$i]=u('(').$k.u(')');
		$replace[$j][$i]=int_to_u(0xe000+$i);
		echo getu8($search[$j][$i]).' '.getu8($replace[$j][$i]).'; ';
		$i++;
		$m++;
	}
	echo '<br>';
	//print_r($search);
	//print_r($replace);
	//print_r($ngram[1]);
	$corpus=str_replace($search[$j],$replace[$j],$corpus);
	// $se=$search[$j];
	// $re=$replace[$j];
	// $corpus=str_replace($se,$re,$corpus);
	//echo getu8($corpus);
	unset($ngram);
	ngram(1,$corpus,u(''),1);
	ngram(2,$corpus,u(''),1);
}


/*
$i=0;
foreach($ngram[2] as $k=>$v){
	if($i==100)break;
	$search[$i]=$k;
	//$replace[$i]=u(char(dechex(0xe000+$i)));
	$replace[$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search,$replace,$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);

$i=100;
foreach($ngram[2] as $k=>$v){
	if($i==200)break;
	$search[$i]=$k;
	//$replace[$i]=u(char(dechex(0xe000+$i)));
	$replace[$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search,$replace,$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);

$i=200;
foreach($ngram[2] as $k=>$v){
	if($i==300)break;
	$search[$i]=$k;
	$replace[$i]=u(char(dechex(0xe000+$i)));
	$replace[$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search,$replace,$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);
*/
/*
$search1=array();
$replace1=array();
$i=0;
foreach($ngram[2] as $k=>$v){
	if($i==100)break;
	$search1[$i]=$k;
	$replace1[$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search1,$replace1,$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);

$search2=array();
$replace2=array();
$i=100;
foreach($ngram[2] as $k=>$v){
	if($i==200)break;
	$search2[$i]=$k;
	$replace2[$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search2,$replace2,$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);
*/

/*
$search[0]=array();
$replace[0]=array();
$i=0;
foreach($ngram[2] as $k=>$v){
	if($i==100)break;
	$search[0][$i]=$k;
	$replace[0][$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search[0],$replace[0],$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);

$search[1]=array();
$replace[1]=array();
$i=100;
foreach($ngram[2] as $k=>$v){
	if($i==200)break;
	$search[1][$i]=$k;
	$replace[1][$i]=int_to_u(0xe000+$i);
	echo getu8($search[1][$i]).' '.getu8($replace[1][$i]).'; ';
	$i++;
}
echo '<br>';
$corpus=str_replace($search[1],$replace[1],$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);

$search[2]=array();
$replace[2]=array();
$i=100;
foreach($ngram[2] as $k=>$v){
	if($i==200)break;
	$search[2][$i]=$k;
	$replace[2][$i]=int_to_u(0xe000+$i);
	$i++;
}
$corpus=str_replace($search[2],$replace[2],$corpus);
unset($ngram);
ngram(1,$corpus,u(''),1);
ngram(2,$corpus,u(''),1);
*/



$t2=microtime(true);
$time=$t2-$t1;
echo '<br />'.$time;

//test from http://stackoverflow.com/questions/6058394/unicode-character-in-php-string
//$unicodeChar = '\u1000';
//echo json_decode('"'.$unicodeChar.'"');
//test
//echo getu8("\x10\x00");//က
//echo dechex(0xe000+1);//e001
//$n1='10';$n2='00';
//echo getu8("\x$n1\x$n2");/does not work
//echo ("\x$n1\x$n2");//\x10\x00
//echo (eval('"\x$n1\x$n2"'));//Parse error: syntax error, unexpected end of file in C:\xampp\htdocs\lang-analysis\index.php(263) : eval()'d code on line 1
//eval("echo(\"\x$n1\x$n2\");");//Notice: Undefined variable: n1 in C:\xampp\htdocs\lang-analysis\index.php on line 264

function diagram($n){
	global $ngram;
	foreach($ngram[$n] as $k=>$v){
		echo '<div title="'.getu8($k).'" style="border:1px solid; height:'.$v.'px; width:10px; display:inline-block;"></div>';
		/*
		if($k!=u(' ')){
			echo '<div title="'.getu8($k).'" style="border:1px solid; height:'.(100*$prev/$v).'px; width:10px; display:inline-block;"></div>';
		}
		$prev=$v;
		*/
	}
}

function ngvdist($n){
	global $ngram;
	$tmparr=array();
	$prevv=0;
	foreach($ngram[$n] as $k=>$v){
		$tmparr[$k]=abs($prevv-$ngram[$n][$k]);
		$prevv=$ngram[$n][$k];
	}
	arsort($tmparr);
	foreach($tmparr as $k=>$v){
		echo '"'.getu8($k).'" '.$v.'; ';
	}
}

function wngram($split,$n,$sp){
	global $wngram;
	$splitc=count($split);
	if(!isset($wngram)){
		$wngram=array();
	}
	if(!isset($wngram[$n])){
		$wngram[$n]=array();
	}
	// foreach($split as $w){
		// if(!isset($wngram[$n][$w])){
			// $wngram[$n][$w]=1;
		// }else{
			// $wngram[$n][$w]++;
		// }
	// }
	$nw=array();
	for($i=0;$i<$n;$i++){
		array_push($nw,$split[$i]);
	}
	$nwi=implode(u($sp),$nw);
	if(!isset($wngram[$n][$nwi])){
		$wngram[$n][$nwi]=1;
	}else{
		$wngram[$n][$nwi]++;
	};
	for($i=$n;$i<$splitc-$n+1;$i++){
		array_push($nw,$split[$i]);
		array_shift($nw);
		$nwi=implode(u($sp),$nw);
		if(!isset($wngram[$n][$nwi])){
			$wngram[$n][$nwi]=1;
		}else{
			$wngram[$n][$nwi]++;
		};
	}
	arsort($wngram[$n]);
	foreach($wngram[$n] as $k=>$v){
		echo '"'.getu8($k).'" '.$v.'; ';
	}
}

function ngram($n,$corpus,$bas,$t){
	global $ngram;
	$corpus_ozonlogo=mb_strlen($corpus);
	//$ngram=array();
	if(!isset($ngram)){
		$ngram=array();
	}
	$bas_ozonlogo=mb_strlen($bas);
	$ostalma_ozonlogo=$n-$bas_ozonlogo;
	if(!isset($ngram[$n])){
		$ngram[$n]=array();
		//else{echo'ready';}
		//echo $bas_ozonlogo;
		//echo $bas;
		for($i=0,$nharif='';$i<$corpus_ozonlogo-$n+1;$i++,$nharif=mb_substr($corpus,$i,$n)){
			/*
			if(!isset($ngram[$nharif])){
				$ngram[$nharif]=1;
			}else{
				$ngram[$nharif]++;
			};
			*/
			if(!isset($ngram[$n][$nharif])){
				$ngram[$n][$nharif]=1;
			}else{
				$ngram[$n][$nharif]++;
			};
		}
		//arsort($ngram);
		arsort($ngram[$n]);
	}
	//foreach($ngram as $key=>$value){
	$counter=0;
	foreach($ngram[$n] as $key=>$value){
		$counter++;
		if($t==1){
			if($bas!=mb_substr($key,0,$bas_ozonlogo)){
				continue;
			}
			$ostalma=mb_substr($key,$bas_ozonlogo);
		}
		elseif($t==2){
			if($bas!=mb_substr($key,-$bas_ozonlogo)){
				continue;
			}
			$ostalma=mb_substr($key,0,$bas_ozonlogo);
		}
		elseif($t==3){
			if($bas!=mb_substr($key,$bas_ozonlogo,$bas_ozonlogo)){
				continue;
			}
		}
		/*
		//if(!isset($prev))$prev=$value;
		echo '"'.mb_convert_encoding($key,'utf-8').'" '.$value.' ';
		//echo round(($value/$prev)*100).'% ';
		//$prev=$value;
		*/
		//echo $counter.' ';
		echo '"'.getu8($key).'"';
		echo ' '.$value;
		/*
		if(isset($ngram[$ostalma_ozonlogo])&&$n>1&&$bas_ozonlogo>0&&$t!=3){
			if(!isset($tmparr))$tmparr=array();
			$tmparr[$key]=round(100*$value/$ngram[$ostalma_ozonlogo][$ostalma]);
			echo ' '.$tmparr[$key];
		}
		*/
		//echo '<div style="border:1px solid; height:'.round($value/100).'px; width:0px; display:inline-block;"></div>';// font-size:0px;
		/*
		if(!isset($prev))$prev=$value;
		if(!isset($prevmin))$prevmin=$value;
		$perc=round(($value/$prev)*100);
		if($perc<=$prevmin){
			$prevmin=$perc;
			echo ' <span style="color:red;">'.$perc.'%</span>';
		}else{
			echo ' '.$perc.'%';
		}
		$prev=$value;
		if(!isset($prevperc))$prevperc=$perc;
		$percch=round(($perc/$prevperc)*100);
		$prevperc=$perc;
		if(!isset($percchmin))$percchmin=$percch;
		if($percch<=$percchmin){
			$percchmin=$percch;
			echo ' <span style="color:blue;">'.$percch.'%</span>';
		}else{
			echo ' '.$percch.'%';
		}
		*/
		echo '; ';
	}
	if(isset($tmparr)){
		echo '<br>';
		arsort($tmparr);
		foreach($tmparr as $key=>$value){
			echo '"'.getu8($key).'" '.$value.'; ';
		}
	}
	echo '<br><br>';
}


function u($inp){
	return mb_convert_encoding($inp,'ucs-2','utf-8');
	//return iconv('utf-8','ucs-2',$inp);
}

function getu8($inp){
	global $replace, $search, $howmanytimes;
	global $searchvalstoshow;
	for($j=$howmanytimes-1;$j>=0;$j--){
		if(isset($search[$j]))$inp=str_replace($replace[$j],$searchvalstoshow[$j],$inp);
	}
	// if(isset($search[2]))$inp=str_replace($replace[2],$search[2],$inp);
	// if(isset($search[1]))$inp=str_replace($replace[1],$search[1],$inp);
	// if(isset($search[0]))$inp=str_replace($replace[0],$search[0],$inp);
	// $inp=str_replace($replace,$search,$inp);
	// $inp=str_replace($replace,$search,$inp);
	// $inp=str_replace($replace,$search,$inp);
	
	// global $replace1, $search1;
	// global $replace2, $search2;
	// $inp=str_replace($replace2,$search2,$inp);
	// $inp=str_replace($replace1,$search1,$inp);
	
	return mb_convert_encoding($inp,'utf-8');
}

function enc($inp){
	return json_decode('"'.$inp.'"');
}

function char($inp){
	return json_decode('"\u'.$inp.'"');
}

function int_to_u($num){
	return mb_convert_encoding(json_decode('"\u'.dechex($num).'"'),'ucs-2','utf-8');
	/*
	//i think this will not work if i try it, i tested that way in line 262
	$div=$num/0x100;//10/4=2.5
	$divint=floor($div);//2
	$remainder=$num-$divint*0x100;//10-2*4=2
	return "\x{$divint}\x{$remainder}";
	*/
}










?>