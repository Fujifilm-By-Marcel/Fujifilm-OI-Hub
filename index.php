<!DOCTYPE html>
<html>
<head>
﻿<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
<!--  If necessary, please modify the charset parameter to specify the        -->
<!--  character set of your HTML page.                                        -->
<!--  ----------------------------------------------------------------------  -->

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="noindex, nofollow">

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="shortcut icon" href="/favicon.ico">
<style>
.required{color:red;}
.subhead{margin-left: 5px;}
h1.has-subhead{margin-bottom:0}
.subhead-h1{margin-bottom:1.68rem;font-weight:bold;font-size:24px;margin-top:0;}
h5.has-subhead{margin-bottom:0}
.subhead-h5{margin-bottom:.656rem;margin-top:2px;}
</style>

</head>
<body>
<div class="container">

<?php 
if( strpos($_SERVER['SERVER_NAME'], "stage") === false ){
	include 'live-config.php'; 
} else {
	include 'config.php'; 
}
?>


<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="heidi.asplund@fujifilm.com">                                     -->
<!--  ----------------------------------------------------------------------  -->

	<div class="row">
		<form id="myForm" action="<?php echo $formAction; ?>" method="POST" class="col s12">
			<input type=hidden name="oid" value="<?php echo $oidValue; ?>">
			<input type=hidden name="retURL" value="<?php echo $retURL; ?>">
			<h1 class="has-subhead">来訪申込</h1>
			<p class="subhead-h1">Open Innovation Hub</p>
			
			<div class="divider"></div>
			<div class="row">
				<div class="col s12">
					<div class="section">
						<h5 class="has-subhead">来訪者情報</h5>
						<p class="subhead-h5">Visitor Information</p>
					</div>
				</div>	
			</div>
			<div class="row">
				<!--Company-->
				<div class="input-field col s12 m4">
					<i class="material-icons prefix">business</i>
					<input id="company" maxlength="40" data-length="40" name="company" size="20" type="text" class="counter validate" required />
					<label for="company">会社名<span class="required">*</span></label>		
					<span class="helper-text" >略称ではなく正式な社名を入力してください</span>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>
			<div class="row">
				<!--Affiliation, Name and Title (full name)-->
				<div class="input-field col s12 m8 l6 xl4">
					<i class="material-icons prefix">account_circle</i>
					<textarea  id="00N1I00000Mifje" name="00N1I00000Mifje" rows="5" type="text" wrap="soft" class="materialize-textarea validate" required ></textarea>
					<label for="00N1I00000Mifje">所属・役職・氏名(フルネーム)<span class="required">*</span></label>
					<span class="helper-text">申込時点で判る範囲でご記入下さい。後日連絡でも結構です。</span>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>


			<div class="row">
				<!--Visit people-->
				<div class="input-field col s12 m4">
					<i class="material-icons prefix">account_circle</i>
					<input  id="00N1I00000Mifjj" name="00N1I00000Mifjj" size="20" type="number" class="validate" required />
					<label for="00N1I00000Mifjj">来訪人数<span class="required">*</span></label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>

			<div class="row">
				<!--Fields and industries-->
				<div class="input-field col s12 m8 l6 xl4">		
					<i class="material-icons prefix">work</i>
					<select id="00N1I00000Mifjo" name="00N1I00000Mifjo" title="分野・業種" class="validate" required>
						<option value="">--なし--</option>
						<option value="Government">官公庁</option>
						<option value="Research institutions (University)">研究機関(大学)</option>
						<option value="Research institutions (non-university)">研究機関(大学以外)</option>
						<option value="Fisheries">水産</option>
						<option value="Agriculture and forestry">農林</option>
						<option value="Mining industry">鉱業</option>
						<option value="construction">建設</option>
						<option value="Foodstuff">食品</option>
						<option value="fiber">繊維</option>
						<option value="pulp">パルプ</option>
						<option value="paper">紙</option>
						<option value="Chemistry">化学</option>
						<option value="oil">石油</option>
						<option value="Petroleum products">石油製品</option>
						<option value="Rubber product">ゴム製品</option>
						<option value="Ceramics">窯業</option>
						<option value="Iron and steel">鉄鋼</option>
						<option value="Non-ferrous metal">非鉄金属</option>
						<option value="Metal products">金属製品</option>
						<option value="machine">機械</option>
						<option value="Electrical equipment">電気機器</option>
						<option value="Transportation equipment">輸送用機器</option>
						<option value="Precision mechanical equipment">精密機器</option>
						<option value="Other manufacturing industries">その他製造業</option>
						<option value="Commerce">商業</option>
						<option value="Financial">金融</option>
						<option value="insurance">保険</option>
						<option value="real estate">不動産</option>
						<option value="Land transportation">陸運</option>
						<option value="Shipping">海運</option>
						<option value="Sky luck">空運</option>
						<option value="Warehouse">倉庫</option>
						<option value="Transportation-related">運輸関連</option>
						<option value="information">情報</option>
						<option value="communication">通信</option>
						<option value="Electric power">電力</option>
						<option value="gas">ガス</option>
						<option value="service">サービス</option>
						<option value="FF employees">FF社員</option>
						<option value="FF Group company">FFグループ会社</option>
						<option value="Student">学生</option>
						<option value="Otherwise">その他</option>
					</select>
					<label>分野・業種<span class="required">*</span></label>
				</div>
			</div>


			<div class="row">
				<!--Fields and industries details-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">work</i>
					<textarea  id="00N1I00000Mifjt" name="00N1I00000Mifjt" rows="3" type="text" wrap="soft" class="materialize-textarea"></textarea>
					<label for="00N1I00000Mifjt">分野・業種詳細</label>
					<span class="helper-text" >具体的な内容がわかれば記入</span>
				</div>
			</div>

			<div class="row">
				<!--Country name-->
				<div class="input-field col s12 m4">
					<i class="material-icons prefix">language</i>
					<input  id="00N1I00000Mifjy" maxlength="40" data-length="40" name="00N1I00000Mifjy" size="20" type="text" class="counter" />
					<label for="00N1I00000Mifjy">国名</label>
				</div>
			</div>

			<div class="row">
				<!--Relationship with Fujifilm-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">swap_horiz</i>
					<textarea  id="00N1I00000Mifk3" name="00N1I00000Mifk3" rows="5" type="text" wrap="soft" class="materialize-textarea validate" required ></textarea>
					<label for="00N1I00000Mifk3">富士フイルムとの関係<span class="required">*</span></label>
					<span class="helper-text" >今迄に取引や共同研究などのお付き合いがあるか、担当部門/担当者/商品など判る範囲で確認ください</span>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>






			<div class="divider"></div>
			<div class="section">
				<h5 class="has-subhead">引率者情報</h5>
				<p class="subhead-h5">Attendant Information</p>
			</div>

			<div class="row">
				<!--Affiliated section and department-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">mode_edit</i>
					<input  id="<?php echo $affiliatedSectionDepartmentID; ?>" maxlength="100" data-length="100" name="<?php echo $affiliatedSectionDepartmentID; ?>" size="20" type="text" class="counter validate" required />
					<label for="<?php echo $affiliatedSectionDepartmentID; ?>">所属部門<span class="required">*</span></label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>


			<div class="row">
				<!--Last name-->
				<div class="input-field col s12 m4">	
					<i class="material-icons prefix">account_circle</i>
					<input  id="last_name" maxlength="80" data-length="80" name="last_name" size="20" type="text" class="counter validate" required />
					<label for="last_name">姓<span class="required">*</span></label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
				<!--First name-->
				<div class="input-field col s12 m4">	
					<i class="material-icons prefix">account_circle</i>
					<input  id="first_name" maxlength="40" data-length="40" name="first_name" size="20" type="text" class="counter validate" required />
					<label for="first_name">名<span class="required">*</span></label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>


			<div class="row">
				<!--Email-->
				<div class="input-field col s12 m8 l6 xl4">		
					<i class="material-icons prefix">email</i>
					<input  id="email" maxlength="80" data-length="80" name="email" size="20" type="email" class="counter validate" required />
					<label for="email">メール<span class="required">*</span></label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>



			<div class="row">
				<!--Attendant phone number-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">phone</i>
					<input  id="phone" maxlength="40" data-length="40" name="phone" size="20" type="tel" class="counter validate" required />
					<label for="phone">電話<span class="required">*</span></label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>

			<div class="row">
				<!--Responsible business-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">business</i>
					<input  id="00N1I00000MifkN" maxlength="100" data-length="100" name="00N1I00000MifkN" size="20" type="text" class="counter validate" required />
					<label for="00N1I00000MifkN">担当業務<span class="required">*</span></label>					
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>

			<div class="row">
				<!--Application approver-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">account_circle</i>
					<input  id="00N1I00000MifkS" maxlength="80" data-length="80" name="00N1I00000MifkS" size="20" type="text" class="counter validate" required />
					<label for="00N1I00000MifkS">申込承認者<span class="required">*</span></label>
					<span class="helper-text" >統括マネージャ以上(承認依頼は飛びません。この申込を了承されている方を記入してください。)</span>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>

			<div class="row">
			<!--Attendant members (department, name)-->
				<div class="input-field col s12 m8">	
					<i class="material-icons prefix">account_circle</i>
					<input  id="00N1I00000MifkX" maxlength="100" data-length="100" name="00N1I00000MifkX" size="20" type="text" class="counter" />
					<label for="00N1I00000MifkX">引率・同席者(職場・氏名)</label>
				</div>
			</div>

			<div class="row">
				<!--Attendant members Total People-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">account_circle</i>
					<input  id="00N1I00000Mifkc" name="00N1I00000Mifkc" size="20" type="number"/>
					<label for="00N1I00000Mifkc">引率・同席人数合計</label>
					<span class="helper-text" >お客様･OI-Hubスタッフは含まない</span>
				</div>
			</div>





			<div class="divider"></div>
			<div class="section">
				<h5 class="has-subhead">目的</h5>
				<p class="subhead-h5">The Purpose</p>
			</div>





			<div class="row">
				<!--Purpose classification-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">contact_support</i>
					<select id="<?php echo $purposeOfVisitID; ?>" name="<?php echo $purposeOfVisitID; ?>" title="目的分類" class="validate" required >
					<option value="">--なし--</option>
					<option value="Existing B to B Customer">産産連携</option>
					<option value="Business-Academic Collaboration">産学連携</option>
					<option value="Industrial-Government Coporations">産官連携</option>
					<option value="Sales promotion">拡販</option>
					<option value="Study tour">視察</option>
					<option value="Internship,Recruit">リクルート</option>
					<option value="Internal FUJIFILM Education">社員教育</option>
					<option value="Media interview">取材</option>
					<option value="Investor Relationship">IR</option>
					<option value="Sales approach from visitor">顧客からの売り込み</option>
					<option value="Brand Development PR">ブランド</option>
					<option value="Others">その他</option>
					</select>
					<label>目的分類 <span class="required">*</span></label>
				</div>
			</div>

			<div class="row">
				<!--Visit History-->
				<div class="input-field col s12 m8">	
					<i class="material-icons prefix">history</i>
					<input  id="00N1I00000Mifkm" maxlength="100" data-length="100" name="00N1I00000Mifkm" size="20" type="text" class="counter" />
					<label for="00N1I00000Mifkm">来訪経緯</label>
				</div>
			</div>

			<div class="row">
				<!--Expected effect-->
				<div class="input-field col s12 m8">	
					<i class="material-icons prefix">announcement</i>
					<input  id="00N1I00000Mifkr" maxlength="255" data-length="255" name="00N1I00000Mifkr" size="20" type="text" class="counter" />
					<label for="00N1I00000Mifkr">期待する効果</label>
				</div>
			</div>




			<div class="divider"></div>
			<div class="section">
				<h5 class="has-subhead">日程</h5>
				<p class="subhead-h5">Date and Time</p>
			</div>



			<div class="row">
				<!--Start Date-->
				<div class="input-field col s12 m4">	
					<i class="material-icons prefix">date_range</i>
					<input  id="00N1I00000ODtn6" name="00N1I00000ODtn6" size="20" type="text" class="datepicker validate" required />
					<label for="00N1I00000ODtn6">開始日時<span class="required">*</span> (date)</label>		
					<span class="helper-text">予約状況を見てお申込みください</span>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
				<!--Start time-->
				<div class="input-field col s12 m4">	
					<i class="material-icons prefix">access_time</i>
					<input  id="00N1I00000ODtn7" name="00N1I00000ODtn7" size="20" type="text" class="timepicker validate" required />
					<label for="00N1I00000ODtn7">開始日時<span class="required">*</span> (time)</label>					
					<span class="helper-text" >標準時間(2時間)　①10:00-12:00、②13:00-15:00、③15:30-17:30　を基本にお申込ください。</span>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>

			<div class="row">
				<!--End Date-->
				<div class="input-field col s12 m4">	
					<i class="material-icons prefix">date_range</i>
					<input  id="00N1I00000ODtn4" name="00N1I00000ODtn4" size="20" type="text" class="datepicker validate" required />
					<label for="00N1I00000ODtn4">終了日時<span class="required">*</span> (date)</label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
				<!--Ending time-->
				<div class="input-field col s12 m4">		
					<i class="material-icons prefix">access_time</i>
					<input  id="00N1I00000ODtn5" name="00N1I00000ODtn5" size="20" type="text" class="timepicker validate" required />
					<label for="00N1I00000ODtn5">終了日時<span class="required">*</span> (time)</label>
					<span class="helper-text" data-error="error" data-success="good"></span>
				</div>
			</div>

			<div class="row">
				<!--Hope of explanation contents-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">mode_edit</i>
					<textarea  id="00N1I00000MiflB" name="00N1I00000MiflB" rows="3" type="text" wrap="soft" class="materialize-textarea"></textarea>
					<label for="00N1I00000MiflB">説明内容の希望</label>
					<span class="helper-text" >重点的に紹介したい展示や内容があれば記入してください</span>
				</div>
			</div>

			<div class="row">
				<!--Scheduled before and after the visit-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">mode_edit</i>
					<textarea  id="00N1I00000MiflG" name="00N1I00000MiflG" rows="3" type="text" wrap="soft" class="materialize-textarea"></textarea>
					<label for="00N1I00000MiflG">来訪前後の予定</label>
					<span class="helper-text" >判る範囲で結構です</span>
				</div>
			</div>






			<div class="divider"></div>
			<div class="section">
				<h5 class="has-subhead">当日対応</h5>
				<p class="subhead-h5">Corresponding Day</p>
			</div>




			<div class="row">
				<!--language-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">language</i>
					<select  id="00N1I00000MiflL" name="00N1I00000MiflL" title="対応言語" class="validate" required >
					<option value="" disabled selected>--なし--</option>
					<option value="Japanese">日本語</option>
					<option value="English">英語</option>
					<option value="Chinese">中国語</option>
					<option value="Japanese (FF staff traslates)">外国人だが日本語OK（引率者が通訳可能）</option>
					<option value="Japanese (Accompaning interpreter translates)">外国人だが日本語OK（通訳同行あり)</option>
					<option value="Japanese (Visitor speaks Japanese)">外国人だが日本語OK（日本語が話せる）</option>
					</select>
					<label>対応言語<span class="required">*</span></label>
					<span class="helper-text" >説明は日／英。中国語対応はパネル・PPTのみ(説明は日／英のどちらか)</span>
				</div>
			</div>


			<div class="row">
				<!--National flag-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">flag</i>
					<select id="00N1I00000MiflQ" name="00N1I00000MiflQ" title="国旗" class="validate" required >
					<option value="" disabled selected>--なし--</option>
					<option value="Required">要</option>
					<option value="Unnecessary">不要</option>
					</select>
					<label>国旗<span class="required">*</span></label>
				</div>
			</div>


			<div class="row">
				<!--Souvenir-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">shopping_basket</i>
					<select  id="00N1I00000MiflV" name="00N1I00000MiflV" title="お土産" class="validate" required >
					<option value="" disabled selected>--なし--</option>
					<option value="HydroAg + sustained eradication cross 40 pieces">HydroAg+ 持続除菌クロス40枚入り</option>
					<option value="ASTALIFT trial kit">アスタリフトトライアルキット</option>
					<option value="Hex color pen set">六角カラーペンセット</option>
					<option value="Prepare separately in the application department">申込部門にて別途手配</option>
					<option value="Unnecessary">不要</option>
					</select>
					<label>お土産<span class="required">*</span></label>
					<span class="helper-text" >費用は部門付替します。グループ会社には付替できませんので「申込部門で別途手配」を選択。申込部門で手配する場合は事前または当日ご持参ください。紙袋は提供します。</span>
				</div>
			</div>


			<div class="row">
				<!--Distribution department code-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">bookmark</i>
					<input  id="00N1I00000Mifla" maxlength="100" data-length="100"  name="00N1I00000Mifla" size="20" type="text" class="counter" />
					<label for="00N1I00000Mifla">付替部門コード</label>
					<span class="helper-text" >お土産費用付替(FFの部門コードのみ)</span>
				</div>
			</div>







			<div class="divider"></div>
			<div class="section">
				<h5 class="has-subhead">その他</h5>
				<p class="subhead-h5">Otherwise</p>
			</div>

			<div class="row">
				<!--Your requests and contact matters-->
				<div class="input-field col s12 m8 l6 xl4">	
					<i class="material-icons prefix">mode_edit</i>
					<textarea  id="00N1I00000Miflf" name="00N1I00000Miflf" rows="5" type="text" wrap="soft" class="materialize-textarea"></textarea>
					<label for="00N1I00000Miflf">ご要望・連絡事項等</label>
				</div>
			</div>


			<div class="divider"></div>


			<div class="row">
				<div class="input-field col s12 m8 l6 xl4">	
					<input type="hidden" id="lead_source" name="lead_source" value="Reservation Form JP" />
					<button class="btn waves-effect waves-light" type="submit" name="action" >Submit 
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>

		</form>
	</div>
</div>




<!--JavaScript at end of body for optimized loading-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>

	var datepickerOptions = {
			format: 'yyyy/mm/dd',
			firstDay: 1,
			i18n:{
				months: [ '1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月' ],
				monthsShort: [ '1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月' ],
				weekdays: [ '日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日' ],
				weekdaysShort: [ '日', '月', '火', '水', '木', '金', '土' ],
				clear: '消去'
			}		
	};
	
	var timepickerOptions = {
		twelveHour:false
	
	}
	

	//fix html5 select validation
	$("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});

	//initialize formselect, timepicker, datepicker, character counter
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('select');
		var instances = M.FormSelect.init(elems);
	});
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.timepicker');
		var instances = M.Timepicker.init(elems, timepickerOptions);
	});
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.datepicker');
		var instances = M.Datepicker.init(elems, datepickerOptions);
	});

	$(document).ready(function() {
		$('input.counter').characterCounter();
	});


	/* date and time listener */


	
	//takes array of fields. each node contains an array containing startDate ID and startTime ID 
	//validates field
	function dateListener(selectListen){
		for (var i=0;i<selectListen.length;i++){
			$(selectListen[i]).change(function(){					
				//get the date and time
				var d = new Date($(this).val());
				
				//datestring = d.getFullYear() + "/" + ("0"+(d.getMonth()+1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) ;
				
				//$(this).val(datestring);
								
				//if invalid clear field
				if (d == "Invalid Date"){$(this).val("")}
			});
		}
	}
	
	function timeListener(selectListen){
		for (var i=0;i<selectListen.length;i++){
			$(selectListen[i]).change(function(){				
				//get the date and time
				var d = new Date("Jan 14, 1400 "+$(this).val());
								
				//datestring = ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2);
				
				//$(this).val(datestring);				
				
				//if invalid clear field
				if (d == "Invalid Date"){$(this).val("")}
			});
		}
	}

	dateListener(['#00N0R000003Z7gF','#00N0R000003aX5v']);
	timeListener(['#00N0R000003Z7gK','#00N0R000003aX60']);
	

		
	



/*
We recommend you specify dates in the format yyyy-MM-ddTHH:mm:ss.SSS+/-HHmm:
yyyy is the four-digit year
MM is the two-digit month (01-12)
dd is the two-digit day (01-31)
HH is the two-digit hour (00-23)
mm is the two-digit minute (00-59)
ss is the two-digit seconds (00-59)
SSS is the three-digit milliseconds (000-999)
+/-HHmm is the Zulu (UTC) time zone offset
*/	



/* 

var dateFieldSelector = "":
var timeFieldSelector = "":

//get the date and time
var date = new Date($(dateFieldSelector).val());
var time = new Date("Jan 14, 1400 "+$(timeFieldSelector).val());


//Date(year, month, day, hours, minutes, seconds, milliseconds)
var d = new Date(date.getFullYear(),date.getMonth(),date.getDate(),time.getHours(),time.getMinutes(),0,0);		

/* output: MM/dd/yyyy HH:mm:ss */
//var datestring = ("0"+(d.getMonth()+1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) + "/" + d.getFullYear() + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":00";


/* output: "2008/02/28/ 15:30"  
var datestring = d.getFullYear() + "/" + ("0"+(d.getMonth()+1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2) + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2);
*/


/* output: "2019-03-13T06:46:00.000Z"
var datestring = d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" + ("0" + d.getDate()).slice(-2) + "T" + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":00.000Z";
*/



/* output: "2019-03-19T07:06:00.000+0400"
var zonehours = Math.floor( d.getTimezoneOffset() / 60);          
var zoneminutes = d.getTimezoneOffset() % 60;
var zonedirection
if (zonehours > 0) {zonedirection = "+"} else {zonedirection = "-"}		
var datestring = d.getFullYear() + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" + ("0" + d.getDate()).slice(-2) + "T" + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":00.000" + zonedirection + ("0" + Math.abs(zonehours)).slice(-2)  + ("0" + Math.abs(zoneminutes)).slice(-2);
*/


/* output: "2/28/2008 4:30 PM"  
var meridiem;
if( d.getHours()/12 >= 1 ){ meridiem = "PM" }else{ meridiem = "AM" }
var hours;
hours = d.getHours()%12;
if (hours == 0){ hours = 12 }
var datestring = d.getMonth()+1 + "/" + d.getDate() + "/" + d.getFullYear() + " " + hours + ":" + ("0" + d.getMinutes()).slice(-2) + " " + meridiem;
*/


	
</script>
</body>
</html>