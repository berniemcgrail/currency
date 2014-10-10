<!DOCTYPE html>
<html>
	<head>
		<title>Currency Coverter</title>
		<link rel="stylesheet" type="text/css" href="normalize.css">
		<link rel="stylesheet" type="text/css" href="converter.css">
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="row">
			<div class="container">
				<h1>An Itty Bitty Currency Converter...</h1>
				<p>Up to date currency conversion. Free and simple.</p>
			</div>
			<div class="block">
				<div class="container">
					<div class="list-title">Currency I have:</div>
					<div class="selection">
						<div class="box">
							<?php echo $_GET['from']; ?>
							<div class="arrowdown"></div>
						</div>
						<div class="clear-fix"></div>
						<ul class="from">
					<li class="AED">AED - United Arab Emirates Dirham</li>
					<li class="ARS">ARS - Argentine Peso</li>
					<li class="AUD">AUD - Australian Dollar</li>
					<li class="AWG">AWG - Aruban Florin</li>
					<li class="BAM">BAM - Bosnia and Herzegovina convertible mark</li>
					<li class="BBD">BBD - Barbadian Dollar</li>
					<li class="BDT">BDT - Bangladeshi Taka</li>
					<li class="BGN">BGN - Bulgarian Lev</li>
					<li class="BHD">BHD - Bahraini Dinar</li>
					<li class="BMD">BMD - Bermudian Dollar</li>
					<li class="BOB">BOB - Bolivian Boliviano</li>
					<li class="BRL">BRL - Brazilian Real</li>
					<li class="BSD">BSD - Bahamian Dollar</li>
					<li class="CAD">CAD - Canadian Dollar</li>
					<li class="CHF">CHF - Swiss Franc</li>
					<li class="CLP">CLP - Chilean Peso</li>
					<li class="CNY">CNY - Chinese Yuan</li>
					<li class="COP">COP - Colombian Peso</li>
					<li class="CZK">CZK - Czech Koruna</li>
					<li class="DKK">DKK - Danish Krone</li>
					<li class="DOP">DOP - Dominican Peso</li>
					<li class="EGP">EGP - Egyptian Pound</li>
					<li class="EUR">EUR - Euro</li>
					<li class="FJD">FJD - Fijian Dollar</li>
					<li class="GBP">GBP - British Pound Sterling</li>
					<li class="GHS">GHS - Ghana Cedi</li>
					<li class="GMD">GMD - Gambian Dalasi</li>
					<li class="GTQ">GTQ - Guatemalan Quetzal</li>
					<li class="HKD">HKD - Hong Kong Dollar</li>
					<li class="HRK">HRK - Croatian Kuna</li>
					<li class="HUF">HUF - Hungarian Forint</li>
					<li class="IDR">IDR - Indonesian Rupiah</li>
					<li class="ILS">ILS - Israeli Sheqel</li>
					<li class="INR">INR - Indian Rupee</li>
					<li class="ISK">ISK - Icelandic Krona</li>
					<li class="JMD">JMD - Jamaican Dollar</li>
					<li class="JOD">JOD - Jordanian Dinar</li>
					<li class="JPY">JPY - Japanese Yen</li>
					<li class="KES">KES - Kenyan Shilling</li>
					<li class="KHR">KHR - Cambodian Riel</li>
					<li class="KRW">KRW - South Korean Won</li>
					<li class="KWD">KWD - Kuwaiti Dinar</li>
					<li class="LAK">LAK - Lao Kip</li>
					<li class="LBP">LBP - Lebanese Pound</li>
					<li class="LKR">LKR - Sri Lankan Rupee</li>
					<li class="LTL">LTL - Lithuanian Litas</li>
					<li class="MAD">MAD - Moroccan Dirham</li>
					<li class="MDL">MDL - Moldovan Leu</li>
					<li class="MGA">MGA - Malagasy Ariary</li>
					<li class="MKD">MKD - Macedonian Denar</li>
					<li class="MUR">MUR - Mauritian Rupee</li>
					<li class="MVR">MVR - Maldivian Rufiyaa</li>
					<li class="MXN">MXN - Mexican Peso</li>
					<li class="MYR">MYR - Malaysian Ringgit</li>
					<li class="NAD">NAD - Namibian Dollar</li>
					<li class="NGN">NGN - Nigerian Naira</li>
					<li class="NOK">NOK - Norwegian Krone</li>
					<li class="NPR">NPR - Nepalese Rupee</li>
					<li class="NZD">NZD - New Zealand Dollar</li>
					<li class="OMR">OMR - Omani Rial</li>
					<li class="PAB">PAB - Panamanian Balboa</li>
					<li class="PEN">PEN - Peruvian Sol</li>
					<li class="PHP">PHP - Philippine Peso</li>
					<li class="PKR">PKR - Pakistani Rupee</li>
					<li class="PLN">PLN - Polish Zloty</li>
					<li class="PYG">PYG - Paraguayan Guaraní</li>
					<li class="QAR">QAR - Qatari Riyal</li>
					<li class="RON">RON - Romanian Leu</li>
					<li class="RSD">RSD - Serbian Dinar</li>
					<li class="RUB">RUB - Russian Rouble</li>
					<li class="SAR">SAR - Saudi Riyal</li>
					<li class="SCR">SCR - Seychellois Rupee</li>
					<li class="SEK">SEK - Swedish Krona</li>
					<li class="SGD">SGD - Singapore Dollar</li>
					<li class="SYP">SYP - Syrian Pound</li>
					<li class="THB">THB - Thai Baht</li>
					<li class="TND">TND - Tunisian Dinar</li>
					<li class="TRY">TRY - Turkish Lira</li>
					<li class="TWD">TWD - Taiwanese Dollar</li>
					<li class="UAH">UAH - Ukraine Hryvnia</li>
					<li class="UGX">UGX - Ugandan Shilling</li>
					<li class="USD">USD - United States Dollar</li>
					<li class="UYU">UYU - Uruguayan Peso</li>
					<li class="VEF">VEF - Venezuelan Bolívar</li>
					<li class="VND">VND - Vietnamese Dong</li>
					<li class="XAF">XAF - Central African Franc</li>
					<li class="XCD">XCD - East Caribbean Dollar</li>
					<li class="XOF">XOF - West African Franc</li>
					<li class="XPF">XPF - CFP Franc</li>
					<li class="ZAR">ZAR - South African Rand</li>
				</ul>
				</div>
				<div class="list-title">Currency I Want:</div>
				<div class="selection">
					<div class="box">
						<?php echo $_GET['to']; ?>
						<div class="arrowdown"></div>
					</div>
					<div class="clear-fix"></div>
					<ul class="to">
					<li class="AED">AED - United Arab Emirates Dirham</li>
					<li class="ARS">ARS - Argentine Peso</li>
					<li class="AUD">AUD - Australian Dollar</li>
					<li class="AWG">AWG - Aruban Florin</li>
					<li class="BAM">BAM - Bosnia and Herzegovina convertible mark</li>
					<li class="BBD">BBD - Barbadian Dollar</li>
					<li class="BDT">BDT - Bangladeshi Taka</li>
					<li class="BGN">BGN - Bulgarian Lev</li>
					<li class="BHD">BHD - Bahraini Dinar</li>
					<li class="BMD">BMD - Bermudian Dollar</li>
					<li class="BOB">BOB - Bolivian Boliviano</li>
					<li class="BRL">BRL - Brazilian Real</li>
					<li class="BSD">BSD - Bahamian Dollar</li>
					<li class="CAD">CAD - Canadian Dollar</li>
					<li class="CHF">CHF - Swiss Franc</li>
					<li class="CLP">CLP - Chilean Peso</li>
					<li class="CNY">CNY - Chinese Yuan</li>
					<li class="COP">COP - Colombian Peso</li>
					<li class="CZK">CZK - Czech Koruna</li>
					<li class="DKK">DKK - Danish Krone</li>
					<li class="DOP">DOP - Dominican Peso</li>
					<li class="EGP">EGP - Egyptian Pound</li>
					<li class="EUR">EUR - Euro</li>
					<li class="FJD">FJD - Fijian Dollar</li>
					<li class="GBP">GBP - British Pound Sterling</li>
					<li class="GHS">GHS - Ghana Cedi</li>
					<li class="GMD">GMD - Gambian Dalasi</li>
					<li class="GTQ">GTQ - Guatemalan Quetzal</li>
					<li class="HKD">HKD - Hong Kong Dollar</li>
					<li class="HRK">HRK - Croatian Kuna</li>
					<li class="HUF">HUF - Hungarian Forint</li>
					<li class="IDR">IDR - Indonesian Rupiah</li>
					<li class="ILS">ILS - Israeli Sheqel</li>
					<li class="INR">INR - Indian Rupee</li>
					<li class="ISK">ISK - Icelandic Krona</li>
					<li class="JMD">JMD - Jamaican Dollar</li>
					<li class="JOD">JOD - Jordanian Dinar</li>
					<li class="JPY">JPY - Japanese Yen</li>
					<li class="KES">KES - Kenyan Shilling</li>
					<li class="KHR">KHR - Cambodian Riel</li>
					<li class="KRW">KRW - South Korean Won</li>
					<li class="KWD">KWD - Kuwaiti Dinar</li>
					<li class="LAK">LAK - Lao Kip</li>
					<li class="LBP">LBP - Lebanese Pound</li>
					<li class="LKR">LKR - Sri Lankan Rupee</li>
					<li class="LTL">LTL - Lithuanian Litas</li>
					<li class="MAD">MAD - Moroccan Dirham</li>
					<li class="MDL">MDL - Moldovan Leu</li>
					<li class="MGA">MGA - Malagasy Ariary</li>
					<li class="MKD">MKD - Macedonian Denar</li>
					<li class="MUR">MUR - Mauritian Rupee</li>
					<li class="MVR">MVR - Maldivian Rufiyaa</li>
					<li class="MXN">MXN - Mexican Peso</li>
					<li class="MYR">MYR - Malaysian Ringgit</li>
					<li class="NAD">NAD - Namibian Dollar</li>
					<li class="NGN">NGN - Nigerian Naira</li>
					<li class="NOK">NOK - Norwegian Krone</li>
					<li class="NPR">NPR - Nepalese Rupee</li>
					<li class="NZD">NZD - New Zealand Dollar</li>
					<li class="OMR">OMR - Omani Rial</li>
					<li class="PAB">PAB - Panamanian Balboa</li>
					<li class="PEN">PEN - Peruvian Sol</li>
					<li class="PHP">PHP - Philippine Peso</li>
					<li class="PKR">PKR - Pakistani Rupee</li>
					<li class="PLN">PLN - Polish Zloty</li>
					<li class="PYG">PYG - Paraguayan Guaraní</li>
					<li class="QAR">QAR - Qatari Riyal</li>
					<li class="RON">RON - Romanian Leu</li>
					<li class="RSD">RSD - Serbian Dinar</li>
					<li class="RUB">RUB - Russian Rouble</li>
					<li class="SAR">SAR - Saudi Riyal</li>
					<li class="SCR">SCR - Seychellois Rupee</li>
					<li class="SEK">SEK - Swedish Krona</li>
					<li class="SGD">SGD - Singapore Dollar</li>
					<li class="SYP">SYP - Syrian Pound</li>
					<li class="THB">THB - Thai Baht</li>
					<li class="TND">TND - Tunisian Dinar</li>
					<li class="TRY">TRY - Turkish Lira</li>
					<li class="TWD">TWD - Taiwanese Dollar</li>
					<li class="UAH">UAH - Ukraine Hryvnia</li>
					<li class="UGX">UGX - Ugandan Shilling</li>
					<li class="USD">USD - United States Dollar</li>
					<li class="UYU">UYU - Uruguayan Peso</li>
					<li class="VEF">VEF - Venezuelan Bolívar</li>
					<li class="VND">VND - Vietnamese Dong</li>
					<li class="XAF">XAF - Central African Franc</li>
					<li class="XCD">XCD - East Caribbean Dollar</li>
					<li class="XOF">XOF - West African Franc</li>
					<li class="XPF">XPF - CFP Franc</li>
					<li class="ZAR">ZAR - South African Rand</li>
				</ul>
					<form method="GET" action="/converterpage.php">
						<input class="input-from" type="text" name="from"><br>
						<input class="input-to" type="text" name="to">
						<div class="label">Amount I Have:</div> <input class="number" type="number" name="amount" value="<?php echo $_GET['amount']; ?>">
						<input class="submit" type="submit" value="Submit">
					</form>
					<div class="list-title2">Amount I Will Get:</div>


<?php
ini_set('allow_url_fopen ','ON');
//phpinfo();
if(isset($_GET['from'])){
	
	//input values - converted to upped case for the currency service
	$from= strtoupper($_GET['from']);
	$to= strtoupper($_GET['to']);
	$amount= $_GET['amount'];

	//fetch currency data
	function produce_XML_object_tree($raw_XML) {
	    libxml_use_internal_errors(true);
	    try {
	        $xmlTree = new SimpleXMLElement($raw_XML);
	    } catch (Exception $e) {
	        // Something went wrong.
	        $error_message = 'SimpleXMLElement threw an exception.';
	        foreach(libxml_get_errors() as $error_line) {
	            $error_message .= "\t" . $error_line->message;
	        }
	        trigger_error($error_message);
	        return false;
	    }
	    return $xmlTree;
	}

	$xml_feed_url = 'http://themoneyconverter.com/rss-feed/'.$from.'/rss.xml';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $xml_feed_url);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$xml = curl_exec($ch);
	curl_close($ch);

	$file = produce_XML_object_tree($xml);

	//find the correct record
	//set a counter
	$i=0;
	//regex to find $to
	$search= '/'.$to.'/';
	
	//loop through rows to find $to, stop at 100
	while($i<100){
		//put the title of each row in a variable
		$title=$file->channel->item [$i]->title;
		//check if the title matches our $to variable
		if(preg_match($search, $title)){
			//if they match, set $record as the current row number and break the loop
			$record=$i;
			$i=101;
		}else{
			//else go to the next record
			$i++;
		}
	}

	//check if we have a record
	if(isset($record)){
		//get its description
		$description=$file->channel->item [$record]->description;
		//do a reular expression (regex) to find the currency value in the description string
		preg_match('/[0-9]*\.[0-9]*/',$description,$rate);
		$value=$rate[0];
	}
	
	//calculate the answer
	$answer=$amount*$value;
	$answer=round($answer,2);
	echo '<div class="answer">';
	echo $answer;
	echo'</div';
	
}

?>
				
				</div>
			</div>
		</div><!--close row-->
		
		<!--scripts-->
		<script src="jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="converter.js" type="text/javascript" charset="utf-8"></script>
		
	</body>
</html>

