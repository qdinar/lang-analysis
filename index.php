<?php
header('Content-Type: text/html; charset=utf-8');
//header('Content-Type: text/html; charset=ucs-2');



$corpus=file_get_contents('corpus.txt');
//echo $corpus;
mb_internal_encoding('utf8');
$corpus=mb_strtolower($corpus);
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


$split=explode(u(' '),$corpus);
//foreach($split as $value){
	//echo mb_convert_encoding($value,'utf-8').' ';
//}
//wngram($split,1);
//wngram($split,2);
//wngram($split,3);

function wngram($split,$n){
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
	$nwi=implode(u(' '),$nw);
	if(!isset($wngram[$n][$nwi])){
		$wngram[$n][$nwi]=1;
	}else{
		$wngram[$n][$nwi]++;
	};
	for($i=$n;$i<$splitc-$n+1;$i++){
		array_push($nw,$split[$i]);
		array_shift($nw);
		$nwi=implode(u(' '),$nw);
		if(!isset($wngram[$n][$nwi])){
			$wngram[$n][$nwi]=1;
		}else{
			$wngram[$n][$nwi]++;
		};
	}
	arsort($wngram[$n]);
	foreach($wngram[$n] as $k=>$v){
		echo '"'.mb_convert_encoding($k,'utf-8').'" '.$v.'; ';
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
	foreach($ngram[$n] as $key=>$value){
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
		echo '"'.mb_convert_encoding($key,'utf-8').'"';
		echo ' '.$value;
		if(isset($ngram[$ostalma_ozonlogo])&&$n>1&&$bas_ozonlogo>0&&$t!=3){
			if(!isset($tmparr))$tmparr=array();
			$tmparr[$key]=round(100*$value/$ngram[$ostalma_ozonlogo][$ostalma]);
			//echo ' '.$tmparr[$key];
		}
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
			echo '"'.mb_convert_encoding($key,'utf-8').'" '.$value.'; ';
		}
	}
	echo '<br><br>';
}


function u($inp){
	return mb_convert_encoding($inp,'ucs-2','utf-8');
	//return iconv('utf-8','ucs-2',$inp);
}
















?>