<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mobile ZBX</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<link rel="apple-touch-icon" href="../iui/iui-logo-touch-icon.png" />
<meta name="apple-touch-fullscreen" content="YES" />

<script src="jqtouch/jquery.1.3.2.min.js" type="application/x-javascript" charset="utf-8"></script>
<script src="jqtouch/jqtouch.min.js" type="application/x-javascript" charset="utf-8"></script>
<style type="text/css" media="screen">@import "jqtouch/jqtouch.min.css";</style>
<style type="text/css" media="screen">@import "themes/<?=$arrSettings["appTheme"]?>/theme.min.css";</style>
<style type="text/css" media="screen">@import "css/custom_style.css";</style>

<script type="text/javascript">
	var jQT = new $.jQTouch({
		icon: 'images/MoZBX.png',
		addGlossToIcon: false,
		startupScreen: 'images/MoZBX_startup.png',
		statusBar: '<?=$arrSettings["appStatusbarColor"]?>-translucent',
		formSelector: false,
		useFastTouch: false,
		preloadImages: [			
			'themes/<?=$arrSettings["appTheme"]?>/img/grayButton.png',
			'themes/<?=$arrSettings["appTheme"]?>/img/whiteButton.png',
			'themes/<?=$arrSettings["appTheme"]?>/img/loading.gif',
			'images/about.png',
			'images/blank.png',
			'images/chart.png',
			'images/feedback.png',
			'images/host.png',
			'images/hostgroups.png',
			'images/hosts.png',
			'images/logout.png',
			'images/refresh.png',
			'images/search.png',
			'images/settings.png',
			'images/trigger.png'			
		]
	});
	
	$(function(){ // Make sure we do onReady
		$('#refresh_home').tap(function(){
			window.location='<?=$arrSettings["urlApplication"]?>'; // Use your URL
			return false;
		});
	});
	
	$(function(){ // Make sure we do onReady
		$('#logout_home').tap(function(){
			window.location='<?=$arrSettings["urlApplication"]?>/logout.php'; // Use your URL
			return false;
		});
	});

</script>
<?=$arrSettings["googleAnalytics"]?>

</head>

<body>