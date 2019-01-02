<?php
	include('database/include.php');
?>

<?php 
	function radio_cast( $string )
	{
		echo "<div id='" . $string . "_e' class='check' style='cursor:pointer;cursor:hand;' onmouseover=setI('" . $string . "_e') onmouseout=setO('" . $string . "_e') onclick=setL('" . $string . "_5')><span style='color:#999999;'>5 <input id='" . $string . "_5' type='radio' name='" . $string . "' "; if( $_POST[$string] == 5 ) echo "checked "; echo "value='5' style='cursor:pointer;cursor:hand;' /></span></div>\n";
		echo "<div id='" . $string . "_d' class='check' style='cursor:pointer;cursor:hand;' onmouseover=setI('" . $string . "_d') onmouseout=setO('" . $string . "_d') onclick=setL('" . $string . "_4')><span style='color:#999999;'>4 <input id='" . $string . "_4' type='radio' name='" . $string . "' "; if( $_POST[$string] == 4 ) echo "checked "; echo "value='4' style='cursor:pointer;cursor:hand;' /></span></div>\n";
		echo "<div id='" . $string . "_c' class='check' style='cursor:pointer;cursor:hand;' onmouseover=setI('" . $string . "_c') onmouseout=setO('" . $string . "_c') onclick=setL('" . $string . "_3')><span style='color:#999999;'>3 <input id='" . $string . "_3' type='radio' name='" . $string . "' "; if( $_POST[$string] == 3 ) echo "checked "; echo "value='3' style='cursor:pointer;cursor:hand;' /></span></div>\n";
		echo "<div id='" . $string . "_b' class='check' style='cursor:pointer;cursor:hand;' onmouseover=setI('" . $string . "_b') onmouseout=setO('" . $string . "_b') onclick=setL('" . $string . "_2')><span style='color:#999999;'>2 <input id='" . $string . "_2' type='radio' name='" . $string . "' "; if( $_POST[$string] == 2 ) echo "checked "; echo "value='2' style='cursor:pointer;cursor:hand;' /></span></div>\n";
		echo "<div id='" . $string . "_a' class='check' style='cursor:pointer;cursor:hand;' onmouseover=setI('" . $string . "_a') onmouseout=setO('" . $string . "_a') onclick=setL('" . $string . "_1')><span style='color:#999999;'>1 <input id='" . $string . "_1' type='radio' name='" . $string . "' "; if( $_POST[$string] == 1 ) echo "checked "; echo "value='1' style='cursor:pointer;cursor:hand;' /></span></div>\n";
	}
	
	?>

<!DOCTYPE html>
<html lang="kr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>설문조사</title>
	<style type="text/css" media="screen">@import "css/style4.css";</style> 

<script type="text/javascript">

function show( did )
{
	document.getElementById(did).style.display = 'block';
}

function hide( did )
{
	document.getElementById(did).style.display = 'none';
}

function setI( did )
{
	var elem = document.getElementById(did);
	elem.style.background = '#cccccc';
}

function setO( did )
{
	var elem = document.getElementById(did);
	elem.style.background = 'none';
}

function setL( did )
{
	var elem = document.getElementById(did);
	elem.checked = 'true';
}


</script>

</head>

<body>


<form id="survey" method="post" action="survey.php">
	<div id="wrapper">
		<div id="center">
			<div id="header"><img src="images/header.jpg" alt="Survey" width="670" /></div>
			<hr />
			
			<div class="question"><img alt=" " src="images/q1.gif" width="670" /></div>
			<div class="answer">
			<?php $line = 0; ?>
				<!-- 여기서부터 -->
				<div id="q1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">1. 현재 성에 관한 지식을 얻는 주된 경로는 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="1" <?php if( $_POST['q1'] == '1' ) echo "checked"; ?> />  친구</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="2" <?php if( $_POST['q1'] == '2' ) echo "checked"; ?> />  애인</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="3" <?php if( $_POST['q1'] == '3' ) echo "checked"; ?> />  부모님</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="4" <?php if( $_POST['q1'] == '4' ) echo "checked"; ?> />  선후배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="5" <?php if( $_POST['q1'] == '5' ) echo "checked"; ?> />  책 혹은 잡지</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="6" <?php if( $_POST['q1'] == '6' ) echo "checked"; ?> />  음란비디오</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="7" <?php if( $_POST['q1'] == '7' ) echo "checked"; ?> />  인터넷 및 성인사이트</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="8" <?php if( $_POST['q1'] == '8' ) echo "checked"; ?> />  학교 수업(성교육시간 포함)</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q1" value="9" <?php if( $_POST['q1'] == '9' ) echo "checked"; ?> />  기타 <input name="q1_etc" value="<?php echo $_POST['q1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q2" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">2. 처음으로 성교육을 받은 시기는 언제입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2" value="1" onmousedown="show('q2_1'); show('q2_2'); show('q2_3')" <?php if( $_POST['q2'] == '1' ) echo "checked"; ?> /> 초등학교</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2" value="2" onmousedown="show('q2_1'); show('q2_2'); show('q2_3')" <?php if( $_POST['q2'] == '2' ) echo "checked"; ?> /> 중, 고등학교</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2" value="3" onmousedown="show('q2_1'); show('q2_2'); show('q2_3')" <?php if( $_POST['q2'] == '3' ) echo "checked"; ?> />  고등학교 졸업 후~대학입학 전</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2" value="4" onmousedown="show('q2_1'); show('q2_2'); show('q2_3')" <?php if( $_POST['q2'] == '4' ) echo "checked"; ?> />  대학입학 후</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2" value="5" onmousedown="hide('q2_1'); hide('q2_2'); hide('q2_3')" <?php if( $_POST['q2'] == '5' ) echo "checked"; ?> />  받은 적 없다</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2" value="6" onmousedown="show('q2_1'); show('q2_2'); show('q2_3')" <?php if( $_POST['q2'] == '6' ) echo "checked"; ?> />  기타 <input name="q2_etc" value="<?php echo $_POST['q2_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q2_1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">2-1. 누구에게 받았습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_1" value="1" <?php if( $_POST['q2_1'] == '1' ) echo "checked"; ?> />  학교 선생님</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_1" value="2" <?php if( $_POST['q2_1'] == '2' ) echo "checked"; ?> />  부모님</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_1" value="3" <?php if( $_POST['q2_1'] == '3' ) echo "checked"; ?> />  친구</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_1" value="4" <?php if( $_POST['q2_1'] == '4' ) echo "checked"; ?> />  선후배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_1" value="5" <?php if( $_POST['q2_1'] == '5' ) echo "checked"; ?> />  성 상담 전문가</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_1" value="6" <?php if( $_POST['q2_1'] == '6' ) echo "checked"; ?> />  기타 <input name="q2_1_etc" value="<?php echo $_POST['q2_1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q2_2" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">2-2. 성교육의 주된 내용은 무엇이었습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="1" <?php if( $_POST['q2_2'] == '1' ) echo "checked"; ?> />  남녀의 생물학적 차이</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="2" <?php if( $_POST['q2_2'] == '2' ) echo "checked"; ?> />  성관계</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="3" <?php if( $_POST['q2_2'] == '3' ) echo "checked"; ?> />  성희롱 및 성폭력과 그 후유증</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="4" <?php if( $_POST['q2_2'] == '4' ) echo "checked"; ?> />  성병</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="5" <?php if( $_POST['q2_2'] == '5' ) echo "checked"; ?> />  피임</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="6" <?php if( $_POST['q2_2'] == '6' ) echo "checked"; ?> />  임신과 낙태</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_2" value="6" <?php if( $_POST['q2_2'] == '7' ) echo "checked"; ?> />  기타 <input name="q2_2_etc" value="<?php echo $_POST['q2_2_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q2_3" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">2-3. 어떤 내용이 본인에게 가장 유익하였습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="1" <?php if( $_POST['q2_3'] == '1' ) echo "checked"; ?> />  남녀의 생물학적 차이</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="2" <?php if( $_POST['q2_3'] == '2' ) echo "checked"; ?> />  성관계</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="3" <?php if( $_POST['q2_3'] == '3' ) echo "checked"; ?> />  성희롱 및 성폭력과 그 후유증</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="4" <?php if( $_POST['q2_3'] == '4' ) echo "checked"; ?> />  성병</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="5" <?php if( $_POST['q2_3'] == '5' ) echo "checked"; ?> />  피임</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="6" <?php if( $_POST['q2_3'] == '6' ) echo "checked"; ?> />  임신과 낙태</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q2_3" value="6" <?php if( $_POST['q2_3'] == '7' ) echo "checked"; ?> />  기타 <input name="q2_3_etc" value="<?php echo $_POST['q2_3_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->	
			</div>

			<br />
			<br />

			<div class="question"><img alt=" " src="images/q2.gif" width="670" /></div>
			<div class="answer">
			<?php $line = 0; ?>
				<!-- 여기서부터 -->
				<div id="q3" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3. 성관계 경험이 있습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3" value="1" onmousedown="show('q3_1'); show('q3_2'); show('q3_3'); show('q3_4'); show('q3_5'); show('q3_6')" <?php if( $_POST['q3'] == '1' ) echo "checked"; ?> />  예</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3" value="2" onmousedown="hide('q3_1'); hide('q3_2'); hide('q3_3'); hide('q3_4'); hide('q3_5'); hide('q3_6')" <?php if( $_POST['q3'] == '2' ) echo "checked"; ?> />  아니오
					</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q3_1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3-1. 처음 성관계를 가질 때, 그 계기는 무엇이었습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_1" value="1" <?php if( $_POST['q3_1'] == '1' ) echo "checked"; ?> />  서로의 합의 하에</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_1" value="2" <?php if( $_POST['q3_1'] == '2' ) echo "checked"; ?> />  상대방의 강요에 의해</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_1" value="3" <?php if( $_POST['q3_1'] == '3' ) echo "checked"; ?> />  술 마신 후 취기에</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_1" value="4" <?php if( $_POST['q3_1'] == '4' ) echo "checked"; ?> />  단순한 호기심에</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_1" value="5" <?php if( $_POST['q3_1'] == '5' ) echo "checked"; ?> />  기타 <input name="q3_1_etc" value="<?php echo $_POST['q3_1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q3_2" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3-2. 최초의 성관계 시기는 언제입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_2" value="1" <?php if( $_POST['q3_2'] == '1' ) echo "checked"; ?> />  초등학교</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_2" value="2" <?php if( $_POST['q3_2'] == '2' ) echo "checked"; ?> />  중, 고등학교</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_2" value="3" <?php if( $_POST['q3_2'] == '3' ) echo "checked"; ?> />  고등학교 졸업 후 ~ 대학입학 전</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_2" value="4" <?php if( $_POST['q3_2'] == '4' ) echo "checked"; ?> />  대학입학 후</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_2" value="5" <?php if( $_POST['q3_2'] == '5' ) echo "checked"; ?> />  군대 복무 중</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_2" value="6" <?php if( $_POST['q3_2'] == '6' ) echo "checked"; ?> />  기타 <input name="q3_2_etc" value="<?php echo $_POST['q3_2_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q3_3" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3-3. 최초의 성관계 상대자는 누구입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="1" <?php if( $_POST['q3_3'] == '1' ) echo "checked"; ?> />  애인</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="2" <?php if( $_POST['q3_3'] == '2' ) echo "checked"; ?> />  이성인 친구, 선후배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="3" <?php if( $_POST['q3_3'] == '3' ) echo "checked"; ?> />  동성인 친구, 선후배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="4" <?php if( $_POST['q3_3'] == '4' ) echo "checked"; ?> />  학교 선생님</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="5" <?php if( $_POST['q3_3'] == '5' ) echo "checked"; ?> />  가족, 친척</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="6" <?php if( $_POST['q3_3'] == '6' ) echo "checked"; ?> />  직장과 군대 등의 동료, 선후배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="7" <?php if( $_POST['q3_3'] == '7' ) echo "checked"; ?> />  모르는 사람</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="8" <?php if( $_POST['q3_3'] == '8' ) echo "checked"; ?> />  성매매 종사자</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_3" value="9" <?php if( $_POST['q3_3'] == '9' ) echo "checked"; ?> />  기타 <input name="q3_3_etc" value="<?php echo $_POST['q3_3_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q3_4" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3-4. 성관계 시 피임을 했습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_4" value="1" onmousedown="show('q3_5'); hide('q3_6')" <?php if( $_POST['q3_4'] == '1' ) echo "checked"; ?> />  항상 했다</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_4" value="2" onmousedown="show('q3_5'); hide('q3_6')" <?php if( $_POST['q3_4'] == '2' ) echo "checked"; ?> />  할 때도 있고 안할 때도 있다</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_4" value="3" onmousedown="hide('q3_5'); show('q3_6')" <?php if( $_POST['q3_4'] == '3' ) echo "checked"; ?> />  한번도 해본 적이 없다</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q3_5" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3-5. 주로 사용한 피임방법은 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="1" <?php if( $_POST['q3_5'] == '1' ) echo "checked"; ?> />  경구피임약 복용</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="2" <?php if( $_POST['q3_5'] == '2' ) echo "checked"; ?> />  콘돔사용</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="3" <?php if( $_POST['q3_5'] == '3' ) echo "checked"; ?> />  페미돔</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="4" <?php if( $_POST['q3_5'] == '4' ) echo "checked"; ?> />  자궁 내 장치요법 (루프 등)</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="5" <?php if( $_POST['q3_5'] == '5' ) echo "checked"; ?> />  자연주기법</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="6" <?php if( $_POST['q3_5'] == '6' ) echo "checked"; ?> />  질외사정법</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="7" <?php if( $_POST['q3_5'] == '7' ) echo "checked"; ?> />  사후피임약</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_5" value="8" <?php if( $_POST['q3_5'] == '8' ) echo "checked"; ?> />  기타 <input name="q3_5_etc" value="<?php echo $_POST['q3_5_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q3_6" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">3-6. 피임을 하지 않은 주된 이유는 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="1" <?php if( $_POST['q3_6'] == '1' ) echo "checked"; ?> />  아무 일이 없을 거라는 막연한 생각에서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="2" <?php if( $_POST['q3_6'] == '2' ) echo "checked"; ?> />  피임할 필요가 없다고 생각해서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="3" <?php if( $_POST['q3_6'] == '3' ) echo "checked"; ?> />  예기치 않은 성관계를 하게 되어서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="4" <?php if( $_POST['q3_6'] == '4' ) echo "checked"; ?> />  성 경험이 많아 보일까봐</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="5" <?php if( $_POST['q3_6'] == '5' ) echo "checked"; ?> />  피임하는 방법을 몰라서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="6" <?php if( $_POST['q3_6'] == '6' ) echo "checked"; ?> />  상대방이 준비하리라 생각했기 때문에</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="7" <?php if( $_POST['q3_6'] == '7' ) echo "checked"; ?> />  부작용이 걱정되어서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="8" <?php if( $_POST['q3_6'] == '8' ) echo "checked"; ?> />  성감이 떨어질까봐</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q3_6" value="9" <?php if( $_POST['q3_6'] == '9' ) echo "checked"; ?> />  기타 <input name="q3_6_etc" value="<?php echo $_POST['q3_6_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->
			</div>

			<br />
			<br />

			<div class="question"><img alt=" " src="images/q3.gif" width="670" /></div>
			<div class="answer">
			<?php $line = 0; ?>
				<!-- 여기서부터 -->
				<div id="q4" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">4. 당신은 성희롱·성폭력의 피해를 겪은 적이 있습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4" value="1" onmousedown="show('q4_1'); show('q4_2'); show('q4_3'); show('q4_4')" <?php if( $_POST['q4'] == '1' ) echo "checked"; ?> />  예</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4" value="2" onmousedown="hide('q4_1'); hide('q4_2'); hide('q4_3'); hide('q4_4')" <?php if( $_POST['q4'] == '2' ) echo "checked"; ?> />  아니오
					</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->
				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q4_1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">4-1. 성희롱·성폭력의 가해자는 누구였습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="1" <?php if( $_POST['q4_1'] == '1' ) echo "checked"; ?> />  친구</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="2" <?php if( $_POST['q4_1'] == '2' ) echo "checked"; ?> />  애인</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="3" <?php if( $_POST['q4_1'] == '3' ) echo "checked"; ?> />  선배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="4" <?php if( $_POST['q4_1'] == '4' ) echo "checked"; ?> />  후배</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="5" <?php if( $_POST['q4_1'] == '5' ) echo "checked"; ?> />  교수·강사</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="6" <?php if( $_POST['q4_1'] == '6' ) echo "checked"; ?> />  가족·친척</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="7" <?php if( $_POST['q4_1'] == '7' ) echo "checked"; ?> />  모르는 사람</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_1" value="8" <?php if( $_POST['q4_1'] == '8' ) echo "checked"; ?> />  기타 <input name="q4_1_etc" value="<?php echo $_POST['q4_1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q4_2" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">4-2. 성희롱·성폭력이 일어난 장소는 어디입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="1" <?php if( $_POST['q4_2'] == '1' ) echo "checked"; ?> />  강의실, 도서관</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="2" <?php if( $_POST['q4_2'] == '2' ) echo "checked"; ?> />  학과 사무실, 기타 사무실</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="3" <?php if( $_POST['q4_2'] == '3' ) echo "checked"; ?> />  교수연구실</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="4" <?php if( $_POST['q4_2'] == '4' ) echo "checked"; ?> />  동아리방</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="5" <?php if( $_POST['q4_2'] == '5' ) echo "checked"; ?> />  자취방</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="6" <?php if( $_POST['q4_2'] == '6' ) echo "checked"; ?> />  음식점, 노래방, 주점 등</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="7" <?php if( $_POST['q4_2'] == '7' ) echo "checked"; ?> />  MT 장소</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="8" <?php if( $_POST['q4_2'] == '8' ) echo "checked"; ?> />  기타교내(건물로비, 운동장등)</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_2" value="9" <?php if( $_POST['q4_2'] == '9' ) echo "checked"; ?> />  기타 <input name="q4_2_etc" value="<?php echo $_POST['q4_2_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q4_3" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">4-3. 성희롱·성폭력을 당했을 때 당신은 어떻게 대처했습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="1" <?php if( $_POST['q4_3'] == '1' ) echo "checked"; ?> />  불쾌했지만, 계속 봐야할 사람이므로 참았다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="2" <?php if( $_POST['q4_3'] == '2' ) echo "checked"; ?> />  대응을 못하고, 나중에 주변인들에게 얘기하고 기분을 풀었다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="3" <?php if( $_POST['q4_3'] == '3' ) echo "checked"; ?> />  일단 당시에는 참았지만, 나중에 당사자에게 조용히 얘기했다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="4" <?php if( $_POST['q4_3'] == '4' ) echo "checked"; ?> />  그 자리에서 당사자에게 잘못된 것을 지적하고 내 의사를 밝혔다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="5" <?php if( $_POST['q4_3'] == '5' ) echo "checked"; ?> />  인터넷 등을 통해 관련기관을 찾아 성희롱·성폭력 여부를 확인하고 신고했다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="6" <?php if( $_POST['q4_3'] == '6' ) echo "checked"; ?> />  전문적인 상담자와 상의했다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_3" value="7" <?php if( $_POST['q4_3'] == '7' ) echo "checked"; ?> />  기타 <input name="q4_3_etc" value="<?php echo $_POST['q4_3_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q4_4" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">4-4. 성희롱·성폭력에 적절히 대응하지 못했다면 그 이유는 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="1" <?php if( $_POST['q4_4'] == '1' ) echo "checked"; ?> />  문제를 제기해 봐야 소용없다고 생각하니까</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="2" <?php if( $_POST['q4_4'] == '2' ) echo "checked"; ?> />  어떻게 대처해야 할지 방법을 몰라서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="3" <?php if( $_POST['q4_4'] == '3' ) echo "checked"; ?> />  상대가 윗사람이라서 말을 꺼내기 곤란해서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="4" <?php if( $_POST['q4_4'] == '4' ) echo "checked"; ?> />  피해사실을 다른 사람에게 알리고 싶지 않아서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="5" <?php if( $_POST['q4_4'] == '5' ) echo "checked"; ?> />  다른 사람들로부터 눈총을 받을 것 같아서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="6" <?php if( $_POST['q4_4'] == '6' ) echo "checked"; ?> />  문제제기를 하면 상대방에게 보복 당할 것 같아서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q4_4" value="7" <?php if( $_POST['q4_4'] == '7' ) echo "checked"; ?> />  기타 <input name="q4_4_etc" value="<?php echo $_POST['q4_4_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q5" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">5. 우리 사회에서 성희롱·성폭력이 많이 일어나는 이유가 무엇이라고 생각합니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="1" <?php if( $_POST['q5'] == '1' ) echo "checked"; ?> />  여성이 약자이기 때문에 어쩔 수 없는 일이라 생각한다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="2" <?php if( $_POST['q5'] == '2' ) echo "checked"; ?> />  성희롱·성폭력에 대해 숨기려고 하고 처벌에 관대한 사회적 분위기 때문이다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="3" <?php if( $_POST['q5'] == '3' ) echo "checked"; ?> />  피해자가 성희롱·성폭력을 당할만할 원인의 소지를 제공했기 때문이다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="4" <?php if( $_POST['q5'] == '4' ) echo "checked"; ?> />  많이 일어나고 있었는가? 관심이 없어서 몰랐다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="5" <?php if( $_POST['q5'] == '5' ) echo "checked"; ?> />  이기적이고 무관심한 개인주의가 사회분위기를 지배하기 때문이다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="6" <?php if( $_POST['q5'] == '6' ) echo "checked"; ?> />  잘못된 혹은 미비한 성교육에 문제가 있다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q5" value="7" <?php if( $_POST['q5'] == '7' ) echo "checked"; ?> />  기타 <input name="q5_etc" value="<?php echo $_POST['q5_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->
				
			</div>

			<br />
			<br />

			<div class="question"><img alt=" " src="images/q4.gif" width="670" /></div>
			<div class="answer">
			<?php $line = 0; ?>
				<!-- 여기서부터 -->
				<div id="q6" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">6. 성매매 업소(성매매 집결지, 안마소, 키스방, 이미지방 등)를 이용해본 경험이 있습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6" value="1" onmousedown="show('q6_1'); show('q6_2'); show('q6_3'); hide('q6_4')" <?php if( $_POST['q6'] == '1' ) echo "checked"; ?> />  경험이 있다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6" value="2" onmousedown="hide('q6_1'); hide('q6_2'); hide('q6_3'); show('q6_4')" <?php if( $_POST['q6'] == '2' ) echo "checked"; ?> />  경험이 없다.</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q6_1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">6-1. 처음 성구매를 경험한 시기는 언제입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_1" value="1" <?php if( $_POST['q6_1'] == '1' ) echo "checked"; ?> />  중, 고등학교 시기</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_1" value="2" <?php if( $_POST['q6_1'] == '2' ) echo "checked"; ?> />  고등학교 졸업 후 대학 입학 전 시기</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_1" value="3" <?php if( $_POST['q6_1'] == '3' ) echo "checked"; ?> />  대학 입학 후</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_1" value="4" <?php if( $_POST['q6_1'] == '4' ) echo "checked"; ?> />  기타 <input name="q6_1_etc" value="<?php echo $_POST['q6_1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q6_2" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">6-2. 성매매 업소를 이용하게 된 동기는 무엇입니까?(복수응답가능)</div>
					<div class="clear"></div>
					<div class='check2'><input type="checkbox" name="q6_2_1" value="1" <?php if( $_POST['q6_2_1'] == '1' ) echo "checked"; ?> />  친구, 선후배의 권유로</div>
					<div class="clear"></div>
					<div class='check2'><input type="checkbox" name="q6_2_2" value="2" <?php if( $_POST['q6_2_2'] == '2' ) echo "checked"; ?> />  호기심에</div>
					<div class="clear"></div>
					<div class='check2'><input type="checkbox" name="q6_2_3" value="3" <?php if( $_POST['q6_2_3'] == '3' ) echo "checked"; ?> />  성적 욕구를 해소하기 위해</div>
					<div class="clear"></div>
					<div class='check2'><input type="checkbox" name="q6_2_4" value="4" <?php if( $_POST['q6_2_4'] == '4' ) echo "checked"; ?> />  스트레스를 해소하기 위해</div>
					<div class="clear"></div>
					<div class='check2'><input type="checkbox" name="q6_2_5" value="5" <?php if( $_POST['q6_2_5'] == '5' ) echo "checked"; ?> />  군입대를 계기로</div>
					<div class="clear"></div>
					<div class='check2'><input type="checkbox" name="q6_2_6" value="6" <?php if( $_POST['q6_2_6'] == '6' ) echo "checked"; ?> />  기타 <input name="q6_2_etc" value="<?php echo $_POST['q6_2_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q6_3" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">6-3. 성매매 업소를 얼마나 자주 이용하십니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_3" value="1" <?php if( $_POST['q6_3'] == '1' ) echo "checked"; ?> />  1~2회</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_3" value="2" <?php if( $_POST['q6_3'] == '2' ) echo "checked"; ?> />  3회 이상</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_3" value="3" <?php if( $_POST['q6_3'] == '3' ) echo "checked"; ?> />  정기적으로</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_3" value="4" <?php if( $_POST['q6_3'] == '4' ) echo "checked"; ?> />  기타 <input name="q6_3_etc" value="<?php echo $_POST['q6_3_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q6_4" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">6-4. 성구매를 하지 않는 이유는 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_4" value="1" <?php if( $_POST['q6_4'] == '1' ) echo "checked"; ?> />  범죄행위이기 때문에</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_4" value="2" <?php if( $_POST['q6_4'] == '2' ) echo "checked"; ?> />  미래를 준비해야하는 중요한 시기에 그런 곳에 가는 것은 시간 낭비여서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_4" value="3" <?php if( $_POST['q6_4'] == '3' ) echo "checked"; ?> />  성병 등 위생상의 문제가 염려되어서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_4" value="4" <?php if( $_POST['q6_4'] == '4' ) echo "checked"; ?> />  돈으로 성을 사고 파는 것은 인간 존엄성에 위배되는 행위이므로</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_4" value="5" <?php if( $_POST['q6_4'] == '5' ) echo "checked"; ?> />  관심이 없어서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q6_4" value="6" <?php if( $_POST['q6_4'] == '6' ) echo "checked"; ?> />  기타 <input name="q6_4_etc" value="<?php echo $_POST['q6_4_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q7" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">7. 성매매 업소에서 일 한 경험이 있습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q7" value="1" <?php if( $_POST['q7'] == '1' ) echo "checked"; ?> />  경험이 있다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q7" value="2" <?php if( $_POST['q7'] == '2' ) echo "checked"; ?> />  경험이 없다.</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q8" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">8. 성매매 행위가 불법인 것을 알고 있습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q8" value="1" <?php if( $_POST['q8'] == '1' ) echo "checked"; ?> />  알고 있다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q8" value="2" <?php if( $_POST['q8'] == '2' ) echo "checked"; ?> />  모르고 있다.</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q9" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">9. 성매매에 대해 어떻게 생각하십니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q9" value="1" <?php if( $_POST['q9'] == '1' ) echo "checked"; ?> />  성매매는 여성, 인간에 대한 폭력이므로 근절되어야 한다고 생각한다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q9" value="2" <?php if( $_POST['q9'] == '2' ) echo "checked"; ?> />  남성의 성욕구 충족을 위해 성매매는 필요하다고 생각한다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q9" value="3" <?php if( $_POST['q9'] == '3' ) echo "checked"; ?> />  인류가 존재하는 한 성매매는 근절될 수 없다고 생각한다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q9" value="4" <?php if( $_POST['q9'] == '4' ) echo "checked"; ?> />  성매매는 자발적으로 선택한 여성 개인의 문제라고 생각한다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q9" value="5" <?php if( $_POST['q9'] == '5' ) echo "checked"; ?> />  기타 <input name="q9_etc" value="<?php echo $_POST['q9_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

			</div>

			<br />
			<br />

			<div class="question"><img alt=" " src="images/q5.gif" width="670" /></div>
			<div class="answer">
			<?php $line = 0; ?>
				<!-- 여기서부터 -->
				<div id="q10" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">10. 교내 성폭력 관련 규정이 있다는 사실에 대하여 알고 있습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q10" value="1" <?php if( $_POST['q10'] == '1' ) echo "checked"; ?> />  매우 잘 알고 있으며, 내용도 정확히 알고 있다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q10" value="2" <?php if( $_POST['q10'] == '2' ) echo "checked"; ?> />  있다는 사실만 알고, 내용은 잘 모른다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q10" value="3" <?php if( $_POST['q10'] == '3' ) echo "checked"; ?> />  전혀 모른다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q10" value="4" <?php if( $_POST['q10'] == '4' ) echo "checked"; ?> />  관심 없다.</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q10" value="5" <?php if( $_POST['q10'] == '5' ) echo "checked"; ?> />  기타 <input name="q10_etc" value="<?php echo $_POST['q10_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q11" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">11. 교내 성평등상담실이 있다는 사실에 대하여 아십니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11" value="1" onmousedown="show('q11_1')" <?php if( $_POST['q11'] == '1' ) echo "checked"; ?> />  예</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11" value="2" onmousedown="hide('q11_1')" <?php if( $_POST['q11'] == '2' ) echo "checked"; ?> />  아니오</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q11_1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">11-1. 교내 성평등상담실을 어떻게 알게 되었습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="1" <?php if( $_POST['q11_1'] == '1' ) echo "checked"; ?> />  대학신문</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="2" <?php if( $_POST['q11_1'] == '2' ) echo "checked"; ?> />  성평등상담실 홈페이지</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="3" <?php if( $_POST['q11_1'] == '3' ) echo "checked"; ?> />  상담실의 홍보물</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="4" <?php if( $_POST['q11_1'] == '4' ) echo "checked"; ?> />  상담실 주관 교육이나 행사</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="5" <?php if( $_POST['q11_1'] == '5' ) echo "checked"; ?> />  주변사람들을 통해</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="6" <?php if( $_POST['q11_1'] == '6' ) echo "checked"; ?> />  신입생 오리엔테이션</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="7" <?php if( $_POST['q11_1'] == '7' ) echo "checked"; ?> />  지나가다 봤다</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q11_1" value="8" <?php if( $_POST['q11_1'] == '8' ) echo "checked"; ?> />  기타 <input name="q11_1_etc" value="<?php echo $_POST['q11_1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q12" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">12. 만약 성희롱·성폭력 사건이 발생할 시에 성평등상담실에 도움을 요청하겠습니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12" value="1" onmousedown="hide('q12_1')" <?php if( $_POST['q12'] == '1' ) echo "checked"; ?> />  예</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12" value="2" onmousedown="show('q12_1')" <?php if( $_POST['q12'] == '2' ) echo "checked"; ?> />  아니오</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q12_1" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">12-1. 도움을 요청하지 않는 이유는 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12_1" value="1" <?php if( $_POST['q12_1'] == '1' ) echo "checked"; ?> />  상담실에 가면 문제가 커질까봐</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12_1" value="2" <?php if( $_POST['q12_1'] == '2' ) echo "checked"; ?> />  상담실이 공정하게 일을 처리할지 의심스러워서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12_1" value="3" <?php if( $_POST['q12_1'] == '3' ) echo "checked"; ?> />  개인정보와 사건내용이 외부에 알려질까봐</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12_1" value="4" <?php if( $_POST['q12_1'] == '4' ) echo "checked"; ?> />  상담실에 관하여 아는 것이 별로 없어서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12_1" value="5" <?php if( $_POST['q12_1'] == '5' ) echo "checked"; ?> />  도움이 되지 않을 것 같아서</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q12_1" value="6" <?php if( $_POST['q12_1'] == '6' ) echo "checked"; ?> />  기타 <input name="q12_1_etc" value="<?php echo $_POST['q12_1_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q13" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">13. 교내 성희롱·성폭력을 예방하고 대처하기 위한 효과적인 방법은 무엇이라 생각합니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q13" value="1" <?php if( $_POST['q13'] == '1' ) echo "checked"; ?> />  학칙, 내부 규정 등 제도적 장치 마련</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q13" value="2" <?php if( $_POST['q13'] == '2' ) echo "checked"; ?> />  학생·교강사·직원의 성희롱예방교육 의무화</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q13" value="3" <?php if( $_POST['q13'] == '3' ) echo "checked"; ?> />  관련자료 및 소책자 배포</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q13" value="4" <?php if( $_POST['q13'] == '4' ) echo "checked"; ?> />  성평등상담실의 지속적인 홍보</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q13" value="5" <?php if( $_POST['q13'] == '5' ) echo "checked"; ?> />  특강 및 관련 행사 개최</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q13" value="6" <?php if( $_POST['q13'] == '6' ) echo "checked"; ?> />  기타 <input name="q13_etc" value="<?php echo $_POST['q13_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q14" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">14. 성평등상담실에 원하는 프로그램이 있다면 무엇입니까?</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q14" value="1" <?php if( $_POST['q14'] == '1' ) echo "checked"; ?> />  성교육 관련 특강</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q14" value="2" <?php if( $_POST['q14'] == '2' ) echo "checked"; ?> />  성희롱·성폭력에 관한 예방교육 실시</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q14" value="3" <?php if( $_POST['q14'] == '3' ) echo "checked"; ?> />  성문제 및 이성문제에 관한 상담</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q14" value="4" <?php if( $_POST['q14'] == '4' ) echo "checked"; ?> />  성매매 방지 및 예방교육 실시</div>
					<div class="clear"></div>
					<div class='check2'><input type="radio" name="q14" value="5" <?php if( $_POST['q14'] == '5' ) echo "checked"; ?> />  기타 <input name="q14_etc" value="<?php echo $_POST['q14_etc']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="q15" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
				<div class='check2'>15. 성평등 상담실에 바라는 점이 있다면 무엇입니까?
				<br /> <textarea name="q15" rows="5" cols="55"><?php echo $_POST['q15']; ?></textarea></div>
				<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="clear"><br /></div>
				</div>
				<!-- 여기까지 -->

			
			</div>
			<br />
			<br />

			<div class="question"><img alt=" " src="images/q6.gif" width="670" /></div>
			<div class="answer">
			<?php $line = 0; ?>
				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check4"><input type="radio" name="gender" value="남성" <?php if( $_POST['gender'] == '남성' ) echo "checked"; ?> /> 남성 &nbsp; <input type="radio" name="gender" value="여성" <?php if( $_POST['gender'] == '여성' ) echo "checked"; ?> /> 여성 </div>
					<div class="no">1</div>
					<div class="tag">성별</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check4">만 <input name="age" style="width: 50px;" value="<?php echo $_POST['age']; ?>" /> 세</div>
					<div class="no">2</div>
					<div class="tag">연령</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="part" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="no">3</div>
					<div class="tag">소속</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="1" <?php if( $_POST['part'] == '1' ) echo "checked"; ?> />  문과대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="2" <?php if( $_POST['part'] == '2' ) echo "checked"; ?> />  법과대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="3" <?php if( $_POST['part'] == '3' ) echo "checked"; ?> />  정경대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="4" <?php if( $_POST['part'] == '4' ) echo "checked"; ?> />  경영대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="5" <?php if( $_POST['part'] == '5' ) echo "checked"; ?> />  호텔관광대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="6" <?php if( $_POST['part'] == '6' ) echo "checked"; ?> />  이과대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="7" <?php if( $_POST['part'] == '7' ) echo "checked"; ?> />  생활과학대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="8" <?php if( $_POST['part'] == '8' ) echo "checked"; ?> />  의과대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="9" <?php if( $_POST['part'] == '9' ) echo "checked"; ?> />  한의과대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="10" <?php if( $_POST['part'] == '10' ) echo "checked"; ?> />  약학대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="11" <?php if( $_POST['part'] == '11' ) echo "checked"; ?> />  간호과학대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="12" <?php if( $_POST['part'] == '12' ) echo "checked"; ?> />  음악대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="13" <?php if( $_POST['part'] == '13' ) echo "checked"; ?> />  미술대학</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="14" <?php if( $_POST['part'] == '14' ) echo "checked"; ?> />  무용학부</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="part" value="15" <?php if( $_POST['part'] == '15' ) echo "checked"; ?> />  자율전공학과</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				<!-- 여기서부터 -->
				<div id="grade" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="no">4</div>
					<div class="tag">학년</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="grade" value="1" <?php if( $_POST['grade'] == '1' ) echo "checked"; ?> />  1학년</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="grade" value="2" <?php if( $_POST['grade'] == '2' ) echo "checked"; ?> />  2학년</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="grade" value="3" <?php if( $_POST['grade'] == '3' ) echo "checked"; ?> />  3학년</div>
					<div class="clear"></div>
					<div class='check4'><input type="radio" name="grade" value="4" <?php if( $_POST['grade'] == '4' ) echo "checked"; ?> />  4학년</div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

<br />
				<!-- 여기서부터 -->
				<div id="mobile" class="item<?php if( $line %2 == 0 ) echo "2"; $line++; ?>">
					<div class="check2">귀하의 핸드폰 번호를 적어주시면 추첨을 통하여 100명에게 1만원권 문화상품권을 드립니다.</div>
					<div class="clear"></div>
					<div class='check2'><input name="mobile" value="<?php echo $_POST['mobile']; ?>" /></div>
					<div class="clear"></div>
				</div>
				<!-- 여기까지 -->

				
			</div>
			<hr />

			<hr />
			
			<div><img src="images/thanks.jpg" style="margin: 0 10px;" alt="thanks" /></div>
			
			<hr />
			
			<div style="text-align:center"><input type="image" src="images/submit_red.gif" alt="Submit" /></div>
			
			<hr />
			
			<input type="hidden" name="first" value="false" />
			<input type="hidden" name="ip" value="<?php echo $ip; ?>" />

		</div>
	</div>
</form>

</body>
</html>