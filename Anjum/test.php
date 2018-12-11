
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
a=new XMLHttpRequest();
a.onload=function(){I=JSON.parse(this.responseText);if(window.initData)initData();};
a.open('get','/ajax_get_le_data'+(window.img?'?i='+img.id:''),true);
a.send();
</script>
<script>
var _gaq=_gaq||[];
_gaq.push(['_setAccount','UA-20041150-5']);
_gaq.push(['_setDomainName','imgflip.com']);
_gaq.push(['_setSiteSpeedSampleRate',5]);
_gaq.push(['_trackPageview']);
(function(d){
var ga=d.createElement('script');ga.type='text/javascript';ga.async=true;
ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
var s=d.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
})(document);
version=784;
spriteNum=2370;
IMAGE_DOMAIN='//i.imgflip.com/';
STATIC_DOMAIN='//s.imgflip.com/';
mm=0;
</script>
<style>
.imgflip-banner-top{width:320px;height:50px;vertical-align:top;}
@media(min-width:500px){.imgflip-banner-top{width:468px;height:60px;}}
@media(min-width:760px){.imgflip-banner-top{width:728px;height:90px;}}
</style>
<link rel="icon" href="/favicon.ico?b" />
<link rel="icon" sizes="128x128" href="/apple-touch-icon.png" />
<link rel='stylesheet' href='//s.imgflip.com/v784/style.css' media='screen' />
<link rel='stylesheet' href='//s.imgflip.com/v784/m.css' media='screen' />
<title>Meme Generator - Imgflip</title>
<meta name="description" content="Insanely fast, mobile-friendly meme generator. Caption memes or upload your own images to make custom memes" />
<meta name="keywords" content="meme generator, meme maker, meme, caption, image macro" />
<style>
#memewrap div.im{background-image:url(//s.imgflip.com/ms2370.jpg)}</style>
</head>
<body class="wide">
<div id="panel-back">
<div id="panel">
<div id="miniNots"></div>
<a class="nav" href="/">
<img id="logo" alt="Imgflip Logo" src="/imgflip_white_96.png">
</a>
<div class="nav menu-wrap" id="nav-make">
<div id="nav-make-inner" class="menu-btn">Create <small>▼</small></div>
<div id="make-list" class="menu">
<a class="make-item" href="/memegenerator" title="Meme Generator">
<svg width=30 height=30 class="make-icon make-icon-meme">
<g transform="scale(.3)">
<path d="M 20 0 l 30 50 l -50 -10 l 0 -40 z" />
<path d="M 60 0 l 40 0 l -50 50 z" />
<path d="M 100 60 l 0 40 l -20 0 l -30 -50 z" />
<path d="M 40 100 l -40 0 l 50 -50 z" />
</g>
</svg>
Caption a Meme or Image
</a>
<a class="make-item" href="/gif-maker" title="Animated GIF Maker (from video, youtube, images, etc.)">
<svg class="make-icon make-icon-gif">
<g transform="scale(.3)">
<rect width=66 height=66 x=31 y=3 />
<rect width=66 height=66 x=17 y=17 />
<rect width=66 height=66 x=3 y=31 />
<path d="M 24 50 l 25 14 l -25 14 z" />
</g>
</svg>
Make a GIF
</a>
<a class="make-item" href="/piemaker" title="Pie Chart Maker">
<svg class="make-icon make-icon-pie">
<g transform="scale(.3)">
<circle r=25 cx=50 cy=50 />
</g>
</svg>
Make a Pie Chart
</a>
<a class="make-item" href="/demotivational-maker" title="Demotivational Poster Maker">
<div class="make-icon make-icon-demo"><div class="make-icon-demo-inner"></div></div>
Make a Demotivational
</a>
</div>
</div>
<div class="nav img-flip" id="iFlip">
<svg width=40 height=20 class="rand-arrows" style="margin:16px 0 0">
<g transform="scale(.3)">
<path class="line" fill="none" stroke="#aaa" stroke-width="8" stroke-linejoin="round" d="M 22 15 l 30 0 l 10 10 m 10 10 l 10 10 l 20 0" />
<path class="arrow" fill="#aaa" d="M 102 45 l 0 -10 l 20 10 l -20 10 l 0 -10" />
<path class="line" fill="none" stroke="#aaa" stroke-width="8" stroke-linejoin="round" d="M 22 45 l 30 0 l 30 -30 l 20 0" />
<path class="arrow" fill="#aaa" d="M 102 15 l 0 -10 l 20 10 l -20 10 l 0 -10" />
</g>
</svg>
<div class="navTip">Flip Through Images</div>
</div>
<div class="nav menu-wrap" id="userTitle">
<div id="uTitle" class="menu-btn">
<span id="u-long"></span><small>▼</small>
</div>
<div id="userMenu" class="menu"></div>
</div>
<svg width=30 height=30 id="panel-search-icon" class="s-icon">
<g transform="scale(.3)">
<path d="M 15 85 l 35 -35" />
<circle r=20 cx=64 cy=36 />
</g>
</svg>
<div class="clear"></div>
</div>
<div id="panel-search-back" class="hidden">
<div id="panel-search">
<form class="s-form" action="/search" method="get">
<input id="panel-search-input" name="q" type="text" placeholder="Search memes, gifs, tags, users" autocomplete="off" autocapitalize="off" autocorrect="off" />
</form>
<div class="s-submit l but">
<svg width=30 height=30 class="s-icon">
<g transform="scale(.3)">
<path d="M 15 85 l 35 -35" />
<circle r=20 cx=64 cy=36 />
</g>
</svg>
</div>
</div>
</div>
</div>
<div id="fb-root"></div>
<div style="font:400 2px/2px impact,impac;opacity:0;position:fixed;">s</div>
<div id="page" class="m">
<div id="testline" style="display:none;position:absolute;"></div>
<div class="head clearfix">
<h1>Meme Generator</h1>
<h2>The Fastest Meme Generator on the Planet. Easily add text to images or memes.</h2>
</div>
<div class="m mm-main ibox clearfix">
<div id="mm-preview-outer">
<div class="mm-preview">
<canvas class="mm-canv"></canvas>
<img class="mm-img shadow" alt="meme generator image preview" />
</div>
</div

	><div id="mm-settings">
<div id="mm-show-upload" class="l but">Upload your own image</div>
<input id="mm-search" type="text" placeholder="Search all memes" />
<div id="mm-tabs" class="clearfix">
<div id="memetab" class="mm-tab" title="Top Memes This Month">Popular</div>
<div id="mytab" class="mm-tab" title="My Saved Templates">My</div>
<h4 id="mm-meme-title"></h4>
<div id="mm-search-dropdown" class="mm-search-results mm-hidden">
<div class="mm-search-loading">loading...</div>
<table class="mm-search-results-table"></table>
</div>
</div>
<div id="sel">
<div id="mygen"></div>
<div id="memewrap"><div class='im' style='background-position:0px 0' onclick='mm.select(0)' alt='Distracted Boyfriend Meme' title='Make Distracted Boyfriend Meme'></div><div class='im' style='background-position:-50px 0' onclick='mm.select(1)' alt='Surprised Pikachu Meme' title='Make Surprised Pikachu Meme'></div><div class='im' style='background-position:-100px 0' onclick='mm.select(2)' alt='Two Buttons Meme' title='Make Two Buttons Meme'></div><div class='im' style='background-position:-150px 0' onclick='mm.select(3)' alt='Mocking Spongebob Meme' title='Make Mocking Spongebob Meme'></div><div class='im' style='background-position:-200px 0' onclick='mm.select(4)' alt='Expanding Brain Meme' title='Make Expanding Brain Meme'></div><div class='im' style='background-position:-250px 0' onclick='mm.select(5)' alt='Batman Slapping Robin Meme' title='Make Batman Slapping Robin Meme'></div><div class='im' style='background-position:-300px 0' onclick='mm.select(6)' alt='Left Exit 12 Off Ramp Meme' title='Make Left Exit 12 Off Ramp Meme'></div><div class='im' style='background-position:-350px 0' onclick='mm.select(7)' alt='Roll Safe Think About It Meme' title='Make Roll Safe Think About It Meme'></div><div class='im' style='background-position:-400px 0' onclick='mm.select(8)' alt='Waiting Skeleton Meme' title='Make Waiting Skeleton Meme'></div><div class='im' style='background-position:-450px 0' onclick='mm.select(9)' alt='Blank Nut Button Meme' title='Make Blank Nut Button Meme'></div><div class='im' style='background-position:-500px 0' onclick='mm.select(10)' alt='Is This A Pigeon Meme' title='Make Is This A Pigeon Meme'></div><div class='im' style='background-position:-550px 0' onclick='mm.select(11)' alt='One Does Not Simply Meme' title='Make One Does Not Simply Meme'></div><div class='im' style='background-position:-600px 0' onclick='mm.select(12)' alt='Boardroom Meeting Suggestion Meme' title='Make Boardroom Meeting Suggestion Meme'></div><div class='im' style='background-position:-650px 0' onclick='mm.select(13)' alt='Inhaling Seagull Meme' title='Make Inhaling Seagull Meme'></div><div class='im' style='background-position:-700px 0' onclick='mm.select(14)' alt='Hide the Pain Harold Meme' title='Make Hide the Pain Harold Meme'></div><div class='im' style='background-position:-750px 0' onclick='mm.select(15)' alt='Ancient Aliens Meme' title='Make Ancient Aliens Meme'></div><div class='im' style='background-position:-800px 0' onclick='mm.select(16)' alt='American Chopper Argument Meme' title='Make American Chopper Argument Meme'></div><div class='im' style='background-position:-850px 0' onclick='mm.select(17)' alt='The Most Interesting Man In The World Meme' title='Make The Most Interesting Man In The World Meme'></div><div class='im' style='background-position:-900px 0' onclick='mm.select(18)' alt='Futurama Fry Meme' title='Make Futurama Fry Meme'></div><div class='im' style='background-position:-950px 0' onclick='mm.select(19)' alt='The Scroll Of Truth Meme' title='Make The Scroll Of Truth Meme'></div><div class='im' style='background-position:-1000px 0' onclick='mm.select(20)' alt='Oprah You Get A Meme' title='Make Oprah You Get A Meme'></div><div class='im' style='background-position:-1050px 0' onclick='mm.select(21)' alt='Y&#039;all Got Any More Of That Meme' title='Make Y&#039;all Got Any More Of That Meme'></div><div class='im' style='background-position:-1100px 0' onclick='mm.select(22)' alt='X, X Everywhere Meme' title='Make X, X Everywhere Meme'></div><div class='im' style='background-position:-1150px 0' onclick='mm.select(23)' alt='Trump Bill Signing Meme' title='Make Trump Bill Signing Meme'></div><div class='im' style='background-position:-1200px 0' onclick='mm.select(24)' alt='The Rock Driving Meme' title='Make The Rock Driving Meme'></div><div class='im' style='background-position:-1250px 0' onclick='mm.select(25)' alt='Hard To Swallow Pills Meme' title='Make Hard To Swallow Pills Meme'></div><div class='im' style='background-position:-1300px 0' onclick='mm.select(26)' alt='Disaster Girl Meme' title='Make Disaster Girl Meme'></div><div class='im' style='background-position:-1350px 0' onclick='mm.select(27)' alt='Brace Yourselves X is Coming Meme' title='Make Brace Yourselves X is Coming Meme'></div><div class='im' style='background-position:-1400px 0' onclick='mm.select(28)' alt='Evil Kermit Meme' title='Make Evil Kermit Meme'></div><div class='im' style='background-position:-1450px 0' onclick='mm.select(29)' alt='Finding Neverland Meme' title='Make Finding Neverland Meme'></div><div class='im' style='background-position:-1500px 0' onclick='mm.select(30)' alt='Bad Luck Brian Meme' title='Make Bad Luck Brian Meme'></div><div class='im' style='background-position:-1550px 0' onclick='mm.select(31)' alt='Leonardo Dicaprio Cheers Meme' title='Make Leonardo Dicaprio Cheers Meme'></div><div class='im' style='background-position:-1600px 0' onclick='mm.select(32)' alt='That Would Be Great Meme' title='Make That Would Be Great Meme'></div><div class='im' style='background-position:-1650px 0' onclick='mm.select(33)' alt='Third World Skeptical Kid Meme' title='Make Third World Skeptical Kid Meme'></div><div class='im' style='background-position:-1700px 0' onclick='mm.select(34)' alt='Y U No Meme' title='Make Y U No Meme'></div><div class='im' style='background-position:-1750px 0' onclick='mm.select(35)' alt='Black Girl Wat Meme' title='Make Black Girl Wat Meme'></div><div class='im' style='background-position:-1800px 0' onclick='mm.select(36)' alt='Who Would Win? Meme' title='Make Who Would Win? Meme'></div><div class='im' style='background-position:-1850px 0' onclick='mm.select(37)' alt='But Thats None Of My Business Meme' title='Make But Thats None Of My Business Meme'></div><div class='im' style='background-position:-1900px 0' onclick='mm.select(38)' alt='First World Problems Meme' title='Make First World Problems Meme'></div><div class='im' style='background-position:-1950px 0' onclick='mm.select(39)' alt='Creepy Condescending Wonka Meme' title='Make Creepy Condescending Wonka Meme'></div><div class='im' style='background-position:-2000px 0' onclick='mm.select(40)' alt='X All The Y Meme' title='Make X All The Y Meme'></div><div class='im' style='background-position:-2050px 0' onclick='mm.select(41)' alt='Grandma Finds The Internet Meme' title='Make Grandma Finds The Internet Meme'></div><div class='im' style='background-position:-2100px 0' onclick='mm.select(42)' alt='Doge Meme' title='Make Doge Meme'></div><div class='im' style='background-position:-2150px 0' onclick='mm.select(43)' alt='Success Kid Meme' title='Make Success Kid Meme'></div><div class='im' style='background-position:-2200px 0' onclick='mm.select(44)' alt='Captain Picard Facepalm Meme' title='Make Captain Picard Facepalm Meme'></div><div class='im' style='background-position:-2250px 0' onclick='mm.select(45)' alt='Dont You Squidward Meme' title='Make Dont You Squidward Meme'></div><div class='im' style='background-position:-2300px 0' onclick='mm.select(46)' alt='Am I The Only One Around Here Meme' title='Make Am I The Only One Around Here Meme'></div><div class='im' style='background-position:-2350px 0' onclick='mm.select(47)' alt='Laughing Men In Suits Meme' title='Make Laughing Men In Suits Meme'></div><div class='im' style='background-position:-2400px 0' onclick='mm.select(48)' alt='Put It Somewhere Else Patrick Meme' title='Make Put It Somewhere Else Patrick Meme'></div><div class='im' style='background-position:-2450px 0' onclick='mm.select(49)' alt='Star Wars Yoda Meme' title='Make Star Wars Yoda Meme'></div><div class='im' style='background-position:-2500px 0' onclick='mm.select(50)' alt='Face You Make Robert Downey Jr Meme' title='Make Face You Make Robert Downey Jr Meme'></div><div class='im' style='background-position:-2550px 0' onclick='mm.select(51)' alt='Matrix Morpheus Meme' title='Make Matrix Morpheus Meme'></div><div class='im' style='background-position:-2600px 0' onclick='mm.select(52)' alt='Evil Toddler Meme' title='Make Evil Toddler Meme'></div><div class='im' style='background-position:-2650px 0' onclick='mm.select(53)' alt='Maury Lie Detector Meme' title='Make Maury Lie Detector Meme'></div><div class='im' style='background-position:-2700px 0' onclick='mm.select(54)' alt='Third World Success Kid Meme' title='Make Third World Success Kid Meme'></div><div class='im' style='background-position:-2750px 0' onclick='mm.select(55)' alt='Dr Evil Laser Meme' title='Make Dr Evil Laser Meme'></div><div class='im' style='background-position:-2800px 0' onclick='mm.select(56)' alt='Be Like Bill Meme' title='Make Be Like Bill Meme'></div><div class='im' style='background-position:-2850px 0' onclick='mm.select(57)' alt='Ill Just Wait Here Meme' title='Make Ill Just Wait Here Meme'></div><div class='im' style='background-position:-2900px 0' onclick='mm.select(58)' alt='Philosoraptor Meme' title='Make Philosoraptor Meme'></div><div class='im' style='background-position:-2950px 0' onclick='mm.select(59)' alt='Grumpy Cat Meme' title='Make Grumpy Cat Meme'></div><a class='y but' id='allTemplates' tabindex='-1' href='/memetemplates' title='Blank Meme Templates'>View All Meme Templates (1,000s more...)</a></div>
</div>
<div class="mm-boxes"></div>
<div class="mm-transparency-color-wrap clearfix">
<div class="color-picker mm-transparency-color-picker"></div>
<div class="mm-transparency-color-label">← Transparency color. Used as background since this image contains transparency. Click to change.</div>
</div>
<div class="mm-toggle-opts a">More Options ▼</div>
<div class="mm-opts">
<div><div class="mm-opt">Note: font can now be customized per-textbox by clicking the gear icon.</div></div>
<div><span class="mm-opt mm-add-text l but sml">+ Add Another Textbox</span></div>
<div><label class="mm-opt">
<input type="checkbox" class="mm-toggle-drag" checked />
<span class="checkbox-text">Enable drag/drop & resize</span>
</label></div>
<div><label class="mm-opt">
<input type="checkbox" class="mm-output-original-resolution" />
<span class="checkbox-text">Use resolution of original template image, do not resize. Potentially higher quality, but larger filesize.</span>
</label></div>
</div>
<div class="gen-wrap clearfix">
<div class="gen-login-wrap">
Pro-tip: If you <span class="a show-login">Login or Join Imgflip</span>,
your captioned memes will be saved in your account
</div>
<p>
<label>
<input type="checkbox" class="gen-private" name="private" value="1" />
<span class="checkbox-text">Private <small>(must download image to save or share)</small></span>
</label>
</p>
<p class="gen-anon-wrap">
<label>
<input type="checkbox" class="gen-anon" name="anon" value="1" />
<span class="checkbox-text">
Create Anonymously
<span class="tip">If this is checked, your username will not be associated with this image after you create it.</span>
</span>
</label>
</p>
<p class="gen-no-watermark-wrap">
<label>
<input type="checkbox" class="gen-no-watermark" name="no_watermark" />
<span class="checkbox-text">Remove "imgflip.com" watermark</span>
</label>
</p>
<div class='mm-generate b but'>Generate Meme</div> <div class="mm-reset reset l but">Reset</div>
<div class="mm-set-default-settings l but">Save Text Box Settings</div>
</div>
</div>
</div>
<div id="mm-recs" class="ibox"><h2>Hot Memes Right Now <a class='mm-rec-link' href='/?tgz=memes'>View All Memes</a></h2><a href='/i/2o9zu1'><img class='mm-rec' alt='Grumpy Cat Not Amused Meme | TALKING TO YOU IS LIKE TAKING A DOG WITH NO LEGS FOR A WALK A REAL DRAG | image tagged in memes,grumpy cat not amused,grumpy cat | made w/ Imgflip meme maker' src='//i.imgflip.com/2/2o9zu1.jpg' /></a><a href='/i/2o2a8b'><img class='mm-rec' alt='plot twist | NOT SURE IF I SUCK AT MAKING MEMES OR IF Y&#039;ALL SUCK AT USING THE UPVOTE BUTTON | image tagged in memes,futurama fry,trhtimmy | made w/ Imgflip meme maker' src='//i.imgflip.com/2/2o2a8b.jpg' /></a><a href='/i/2o8kez'><img class='mm-rec' alt='Boardroom Meeting Suggestion Meme | We need to get upvotes on this meme useless advertising blackmail actually making this a quality meme | image tagged in memes,boardroom meeting suggestion | made w/ Imgflip meme maker' src='//i.imgflip.com/2/2o8kez.jpg' /></a><a href='/i/2oaz6i'><img class='mm-rec' alt='Batman Slapping Robin Meme | JINGLE BELLS BATMAN SME- I DON&#039;T SMELL! BUT YOU LAID AN EGG | image tagged in memes,batman slapping robin,christmas | made w/ Imgflip meme maker' src='//i.imgflip.com/2/2oaz6i.jpg' /></a><a href='/i/2o9zik'><img class='mm-rec' alt='Sell Your Coal! (Christmas Vacation Week - Dec 2nd to Dec 8th a Thparky event) | GOT COAL FOR CHRISTMAS? SELL IT. | image tagged in memes,roll safe think about it,coal,christmas,lol | made w/ Imgflip meme maker' src='//i.imgflip.com/2/2o9zik.jpg' /></a><a href='/i/2o3k24'><img class='mm-rec' alt='As somebody once said: If you want to make the world a better place; take a look at yourself, and then make a change | IF YOU RUN INTO AN ASSHOLE AT SOME POINT IN YOUR DAY, THAT PERSON IS AN ASSHOLE IF YOU RUN INTO MULTIPLE ASSHOLES THROUGHOUT YOUR DAY, YOU&#039;R | image tagged in memes,actual advice mallard | made w/ Imgflip meme maker' src='//i.imgflip.com/2/2o3k24.jpg' /></a></div>

<div id="mm-pro-basic-popup-wrap">
<div id="mm-pro-basic-popup">
<div style="margin:0 0 20px"><b>You can remove the imgflip.com watermark with Imgflip Pro Basic!</b></div>
<table>
<tr>
<th style="border:none;"></th>
<th>Free</th>
<th><b>Pro Basic</b></th>
</tr>
<tr>
<td>Access to the biggest meme template database on the interwebz</td>
<td class="green">Yes</td>
<td class="green">Yes</td>
</tr>
<tr>
<td>Ability to remove "imgflip.com" watermark from memes you create</td>
<td class="red">No</td>
<td class="green"><b>Yes</b></td>
</tr>
<tr>
<td>Disable all advertisements on imgflip.com (yay faster pageloads!)</td>
<td class="red">No</td>
<td class="green"><b>Yes</b></td>
</tr>
</table>
<div class="go-pro-wrap">
<div class="go-pro-label">2.95 / month. Cancel at any time.</div>
<div class="go-pro-stripe-btn b but">Pay With Card</div>
<img class="go-pro-stripe-powered" src="/powered_by_stripe.png" />
</div>
<p>
<p><b>Q</b>: Y U NO give us this for free instead?!?</p>
<p><b>A</b>: We don't like bothering people with ads, and we want you to be able to support Imgflip in a way that gives you
the best experience. Before we introduced this, there was no way to remove the watermark from memes without
paying for the full <a href='/pro'>Imgflip Pro</a>, which is more expensive.</p>
</p>
</div> </div>
</div>
<script>
usermemeID=0;memes=[{"id":112126428,"uid":0,"name":"Distracted Boyfriend","w":1200,"h":800,"altNames":"distracted bf, guy checking out another girl, man looking at other woman, jealous girlfriend, guy looking back, cheater temptation","default_settings":"[{\"x\":117,\"y\":502,\"w\":431,\"h\":164,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":570,\"y\":328,\"w\":320,\"h\":159,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":906,\"y\":401,\"w\":269,\"h\":205,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Distracted-Boyfriend"},{"id":155067746,"uid":0,"name":"Surprised Pikachu","w":1893,"h":1893,"altNames":"shocked pikachu","default_settings":"[{\"x\":27,\"y\":15,\"w\":1850,\"h\":166,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"left\",\"vertical_align\":\"top\"},{\"x\":27,\"y\":278,\"w\":1850,\"h\":162,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"left\",\"vertical_align\":\"bottom\"},{\"x\":27,\"y\":533,\"w\":1850,\"h\":166,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"left\",\"vertical_align\":\"middle\"}]","url_name":"Surprised-Pikachu"},{"id":87743020,"uid":0,"name":"Two Buttons","w":600,"h":908,"altNames":"2 red buttons, choice button, which button, daily struggle, hard choice to make","default_settings":"[{\"x\":56,\"y\":85,\"w\":188,\"h\":91,\"rotation\":349,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":274,\"y\":56,\"w\":144,\"h\":82,\"rotation\":352,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Two-Buttons"},{"id":102156234,"uid":0,"name":"Mocking Spongebob","w":502,"h":353,"altNames":"spongebob mock, spongebob chicken, retarded spongebob, sarcastic spongebob, spongebob stupid, spongebob derp, spongebob bird, spongebob mocking face","default_settings":"[{\"x\":4.09795918367347,\"y\":4.09795918367347,\"w\":492.7795918367347,\"h\":86.05714285714285,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"top\"},{\"x\":4.09795918367347,\"y\":267.39183673469387,\"w\":492.7795918367347,\"h\":70.68979591836735,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"bottom\"}]","url_name":"Mocking-Spongebob"},{"id":93895088,"uid":0,"name":"Expanding Brain","w":857,"h":1202,"altNames":"","default_settings":"[{\"x\":6.995918367346939,\"y\":6.995918367346939,\"w\":407.5122448979592,\"h\":283.33469387755105,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":6.995918367346939,\"y\":307.8204081632653,\"w\":407.5122448979592,\"h\":292.0795918367347,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":6.995918367346939,\"y\":615.6408163265306,\"w\":407.5122448979592,\"h\":260.5979591836735,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":6.995918367346939,\"y\":899.3000000000002,\"w\":407.5122448979592,\"h\":276.0142857142857,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Expanding-Brain"},{"id":438680,"uid":0,"name":"Batman Slapping Robin","w":400,"h":387,"altNames":"","default_settings":"[{\"x\":14,\"y\":4,\"w\":175,\"h\":74,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":223,\"y\":5,\"w\":168,\"h\":72,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Batman-Slapping-Robin"},{"id":124822590,"uid":0,"name":"Left Exit 12 Off Ramp","w":804,"h":767,"altNames":"car drifts off highway","default_settings":"[{\"x\":114,\"y\":93,\"w\":191,\"h\":170,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":420,\"y\":92,\"w\":167,\"h\":170,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":175,\"y\":627,\"w\":449,\"h\":117,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Left-Exit-12-Off-Ramp"},{"id":89370399,"uid":0,"name":"Roll Safe Think About It","w":702,"h":395,"altNames":"thinking black guy, black guy pointing at his head, can't blank if you don't blank, smart black dude","default_settings":"","url_name":"Roll-Safe-Think-About-It"},{"id":4087833,"uid":0,"name":"Waiting Skeleton","w":298,"h":403,"altNames":"skeleton waiting on bench in the park","default_settings":"","url_name":"Waiting-Skeleton"},{"id":119139145,"uid":0,"name":"Blank Nut Button","w":600,"h":446,"altNames":"blank blue button, smash button, press button, button slam","default_settings":"[{\"x\":6,\"y\":6,\"w\":587,\"h\":111,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":51,\"y\":210,\"w\":217,\"h\":140,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Blank-Nut-Button"},{"id":100777631,"uid":0,"name":"Is This A Pigeon","w":1587,"h":1425,"altNames":"is this a pidgeon, anime butterfly guy, oblivious butterfly man anime, is this a bird","default_settings":"[{\"x\":45,\"y\":38,\"w\":806,\"h\":336,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":923,\"y\":472,\"w\":618,\"h\":281,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":16,\"y\":1159,\"w\":1554,\"h\":229,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Is-This-A-Pigeon"},{"id":61579,"uid":0,"name":"One Does Not Simply","w":568,"h":335,"altNames":"one does not simply walk into morder, lord of the rings boromir","default_settings":"","url_name":"One-Does-Not-Simply"},{"id":1035805,"uid":0,"name":"Boardroom Meeting Suggestion","w":500,"h":649,"altNames":"throw a guy out the boardroom window","default_settings":"[{\"x\":150,\"y\":3.061224489795918,\"w\":306.12244897959187,\"h\":56.12244897959184,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":20.408163265306122,\"y\":246.9387755102041,\"w\":108.16326530612245,\"h\":29.591836734693878,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":160.20408163265307,\"y\":255.10204081632654,\"w\":88.77551020408164,\"h\":28.571428571428573,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":300,\"y\":255.10204081632654,\"w\":146.9387755102041,\"h\":51.02040816326531,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Boardroom-Meeting-Suggestion"},{"id":114585149,"uid":0,"name":"Inhaling Seagull","w":1269,"h":2825,"altNames":"inhaling bird","default_settings":"[{\"x\":12,\"y\":12,\"w\":1243,\"h\":232,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":15,\"y\":686,\"w\":1243,\"h\":206,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":748,\"y\":1579,\"w\":486,\"h\":164,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":15,\"y\":2545,\"w\":1240,\"h\":255,\"rotation\":null,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Inhaling-Seagull"},{"id":27813981,"uid":0,"name":"Hide the Pain Harold","w":480,"h":601,"altNames":"sad life harold, maurice","default_settings":"","url_name":"Hide-the-Pain-Harold"},{"id":101470,"uid":27,"name":"Ancient Aliens","w":500,"h":437,"altNames":"Giorgio Tsoukalos, History Channel Guy","default_settings":"","url_name":"Ancient-Aliens"},{"id":134797956,"uid":0,"name":"American Chopper Argument","w":640,"h":1800,"altNames":"orange county choppers fight, american chopper hot take","default_settings":"[{\"x\":7,\"y\":231,\"w\":626,\"h\":124,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":222,\"y\":591,\"w\":410,\"h\":124,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":156,\"y\":957,\"w\":475,\"h\":119,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":5,\"y\":1298,\"w\":283,\"h\":139,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":6,\"y\":1689,\"w\":628,\"h\":94,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"American-Chopper-Argument"},{"id":61532,"uid":0,"name":"The Most Interesting Man In The World","w":550,"h":690,"altNames":"I dont always... but when I do, Dos Equis Man, I don't always","default_settings":"","url_name":"The-Most-Interesting-Man-In-The-World"},{"id":61520,"uid":0,"name":"Futurama Fry","w":552,"h":414,"altNames":"Not sure if X or Y, Skeptical Fry","default_settings":"","url_name":"Futurama-Fry"},{"id":123999232,"uid":27,"name":"The Scroll Of Truth","w":1280,"h":1236,"altNames":"I've finally found it... after 15 years, nyehhh","default_settings":"[{\"x\":237.71428571428572,\"y\":707.9183673469388,\"w\":224.6530612244898,\"h\":266.44897959183675,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":650.4489795918367,\"y\":1060.5714285714287,\"w\":548.5714285714286,\"h\":117.55102040816327,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"The-Scroll-Of-Truth"},{"id":28251713,"uid":0,"name":"Oprah You Get A","w":620,"h":465,"altNames":"oprah giveway, oprah winfrey, oprah you get a car, everyone gets a car, you get an oprah, oprah excited","default_settings":"","url_name":"Oprah-You-Get-A"},{"id":124055727,"uid":27,"name":"Y'all Got Any More Of That","w":600,"h":471,"altNames":"Tyrone Biggums, Dave Chappelle, Chappelles Show, yall got any more of that stuff, powder lips neck scratch","default_settings":"","url_name":"Yall-Got-Any-More-Of-That"},{"id":91538330,"uid":0,"name":"X, X Everywhere","w":2118,"h":1440,"altNames":"woody and buzz lightyear pointing, toy story, dicks everywhere, toystory everywhere","default_settings":"","url_name":"X-X-Everywhere"},{"id":91545132,"uid":1017800,"name":"Trump Bill Signing","w":1866,"h":1529,"altNames":"executive order trump","default_settings":"[{\"x\":742.5918367346939,\"y\":555.9918367346938,\"w\":445.5551020408163,\"h\":601.6897959183673,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#beced9\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":1271.9265306122447,\"y\":563.6081632653061,\"w\":449.3632653061224,\"h\":456.97959183673464,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#beced3\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Trump-Bill-Signing"},{"id":21735,"uid":284,"name":"The Rock Driving","w":568,"h":700,"altNames":"","default_settings":"[{\"x\":316.45714285714286,\"y\":28.979591836734695,\"w\":239.9510204081633,\"h\":118.23673469387755,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":330.36734693877554,\"y\":261.9755102040817,\"w\":229.5183673469388,\"h\":106.64489795918368,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"The-Rock-Driving"},{"id":132769734,"uid":0,"name":"Hard To Swallow Pills","w":680,"h":979,"altNames":"hard pills to swallow","default_settings":"[{\"x\":111,\"y\":557,\"w\":424,\"h\":160,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":15,\"y\":737,\"w\":234,\"h\":121,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Hard-To-Swallow-Pills"},{"id":97984,"uid":1851,"name":"Disaster Girl","w":500,"h":375,"altNames":"","default_settings":"","url_name":"Disaster-Girl"},{"id":61546,"uid":0,"name":"Brace Yourselves X is Coming","w":622,"h":477,"altNames":"imminent ned from game of thrones, brace yourselves winter is coming, brace yourself","default_settings":"","url_name":"Brace-Yourselves-X-is-Coming"},{"id":84341851,"uid":0,"name":"Evil Kermit","w":700,"h":325,"altNames":"kermit me to me, kermit inner me, sith kermit, kermit dark side","default_settings":"[{\"x\":4.285714285714286,\"y\":4.285714285714286,\"w\":405.7142857142857,\"h\":64.28571428571429,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"top\"},{\"x\":230.00000000000003,\"y\":235.71428571428572,\"w\":464.28571428571433,\"h\":80,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"bottom\"}]","url_name":"Evil-Kermit"},{"id":6235864,"uid":0,"name":"Finding Neverland","w":423,"h":600,"altNames":"Johnny Depp And Little Kid Crying","default_settings":"[{\"x\":4,\"y\":155,\"w\":415,\"h\":45,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"bottom\"},{\"x\":5,\"y\":332,\"w\":413,\"h\":75,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"bottom\"},{\"x\":5,\"y\":521,\"w\":413,\"h\":68,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"bottom\"}]","url_name":"Finding-Neverland"},{"id":61585,"uid":0,"name":"Bad Luck Brian","w":475,"h":562,"altNames":"","default_settings":"","url_name":"Bad-Luck-Brian"},{"id":5496396,"uid":0,"name":"Leonardo Dicaprio Cheers","w":600,"h":400,"altNames":"The Great Gatsby party with Jay Gatsby","default_settings":"","url_name":"Leonardo-Dicaprio-Cheers"},{"id":563423,"uid":0,"name":"That Would Be Great","w":526,"h":440,"altNames":"Bill Lumbergh, office space, yea that'd be great","default_settings":"","url_name":"That-Would-Be-Great"},{"id":101288,"uid":27,"name":"Third World Skeptical Kid","w":426,"h":426,"altNames":"African skeptical child","default_settings":"","url_name":"Third-World-Skeptical-Kid"},{"id":61527,"uid":0,"name":"Y U No","w":500,"h":500,"altNames":"","default_settings":"","url_name":"Y-U-No"},{"id":14230520,"uid":0,"name":"Black Girl Wat","w":599,"h":626,"altNames":"confused black girl, black girl with hand out, seriously black girl","default_settings":"","url_name":"Black-Girl-Wat"},{"id":101910402,"uid":558216,"name":"Who Would Win?","w":802,"h":500,"altNames":"","default_settings":"[{\"x\":9.820408163265306,\"y\":96.5673469387755,\"w\":394.4530612244898,\"h\":114.57142857142857,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":427.1877551020408,\"y\":96.5673469387755,\"w\":361.71836734693875,\"h\":114.57142857142857,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Who-Would-Win"},{"id":16464531,"uid":0,"name":"But Thats None Of My Business","w":600,"h":600,"altNames":"Kermit the frog, kermit drinking lipton iced tea","default_settings":"","url_name":"But-Thats-None-Of-My-Business"},{"id":61539,"uid":0,"name":"First World Problems","w":552,"h":367,"altNames":"fwp, woman crying","default_settings":"","url_name":"First-World-Problems"},{"id":61582,"uid":0,"name":"Creepy Condescending Wonka","w":550,"h":545,"altNames":"willy wonka stare, sarcastic wonka, tell me more about X, tell me again, gene wilder","default_settings":"","url_name":"Creepy-Condescending-Wonka"},{"id":61533,"uid":0,"name":"X All The Y","w":500,"h":355,"altNames":"all the things","default_settings":"","url_name":"X-All-The-Y"},{"id":61556,"uid":0,"name":"Grandma Finds The Internet","w":640,"h":480,"altNames":"","default_settings":"","url_name":"Grandma-Finds-The-Internet"},{"id":8072285,"uid":0,"name":"Doge","w":620,"h":620,"altNames":"Shiba Inu","default_settings":"[{\"x\":44.285714285714285,\"y\":40.48979591836735,\"w\":250.53061224489798,\"h\":53.142857142857146,\"rotation\":0,\"font\":\"comic sans ms\",\"font_color\":\"#dd00cc\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":331.51020408163265,\"y\":127.79591836734694,\"w\":232.81632653061226,\"h\":54.40816326530612,\"rotation\":0,\"font\":\"comic sans ms\",\"font_color\":\"#ff3333\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":288.48979591836735,\"y\":322.6530612244898,\"w\":222.69387755102042,\"h\":54.40816326530612,\"rotation\":0,\"font\":\"comic sans ms\",\"font_color\":\"#22ee22\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":16.448979591836736,\"y\":496,\"w\":242.9387755102041,\"h\":49.3469387755102,\"rotation\":0,\"font\":\"comic sans ms\",\"font_color\":\"#3333ff\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":372,\"y\":525.1020408163265,\"w\":222.69387755102042,\"h\":54.40816326530612,\"rotation\":0,\"font\":\"comic sans ms\",\"font_color\":\"#ff8800\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Doge"},{"id":61544,"uid":0,"name":"Success Kid","w":500,"h":500,"altNames":"Motivation Baby, Motivation Kid, Success Baby","default_settings":"","url_name":"Success-Kid"},{"id":1509839,"uid":0,"name":"Captain Picard Facepalm","w":500,"h":324,"altNames":"star trek face palm","default_settings":"","url_name":"Captain-Picard-Facepalm"},{"id":101511,"uid":2076,"name":"Dont You Squidward","w":500,"h":333,"altNames":"spongebob","default_settings":"","url_name":"Dont-You-Squidward"},{"id":259680,"uid":27,"name":"Am I The Only One Around Here","w":500,"h":348,"altNames":"Angry Walter from The Big Lebowski","default_settings":"","url_name":"Am-I-The-Only-One-Around-Here"},{"id":922147,"uid":0,"name":"Laughing Men In Suits","w":500,"h":333,"altNames":"Men laughing, And then I said, And then I told them, rich men laughing","default_settings":"","url_name":"Laughing-Men-In-Suits"},{"id":61581,"uid":0,"name":"Put It Somewhere Else Patrick","w":343,"h":604,"altNames":"patrick from spongebob","default_settings":"","url_name":"Put-It-Somewhere-Else-Patrick"},{"id":14371066,"uid":0,"name":"Star Wars Yoda","w":620,"h":714,"altNames":"master yoda","default_settings":"","url_name":"Star-Wars-Yoda"},{"id":9440985,"uid":0,"name":"Face You Make Robert Downey Jr","w":460,"h":523,"altNames":"","default_settings":"","url_name":"Face-You-Make-Robert-Downey-Jr"},{"id":100947,"uid":27,"name":"Matrix Morpheus","w":500,"h":303,"altNames":"what if I told you","default_settings":"","url_name":"Matrix-Morpheus"},{"id":235589,"uid":0,"name":"Evil Toddler","w":500,"h":332,"altNames":"evil baby","default_settings":"","url_name":"Evil-Toddler"},{"id":444501,"uid":0,"name":"Maury Lie Detector","w":381,"h":378,"altNames":"The lie detector determined that was a lie. The fact that you X determined that was a lie. Maury Povich.","default_settings":"","url_name":"Maury-Lie-Detector"},{"id":101287,"uid":27,"name":"Third World Success Kid","w":500,"h":500,"altNames":"happy african child, african kids dancing","default_settings":"","url_name":"Third-World-Success-Kid"},{"id":40945639,"uid":27,"name":"Dr Evil Laser","w":500,"h":405,"altNames":"Dr. Evil quotation marks, Dr Evil Air Quotes","default_settings":"","url_name":"Dr-Evil-Laser"},{"id":56225174,"uid":0,"name":"Be Like Bill","w":913,"h":907,"altNames":"bill the stick figure with a hat","default_settings":"[{\"x\":24.222448979591835,\"y\":29.812244897959182,\"w\":542.2102040816326,\"h\":210.5489795918367,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":24.222448979591835,\"y\":253.40408163265306,\"w\":542.2102040816326,\"h\":206.82244897959183,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":24.222448979591835,\"y\":465.81632653061223,\"w\":542.2102040816326,\"h\":191.91632653061222,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"},{\"x\":24.222448979591835,\"y\":661.4591836734694,\"w\":544.073469387755,\"h\":197.5061224489796,\"rotation\":0,\"font\":\"arial\",\"font_color\":\"#000000\",\"outline_color\":\"#ffffff\",\"force_caps\":false,\"text_align\":\"center\",\"vertical_align\":\"middle\"}]","url_name":"Be-Like-Bill"},{"id":109765,"uid":2327,"name":"Ill Just Wait Here","w":491,"h":550,"altNames":"waiting skeleton","default_settings":"[{\"x\":5.010204081632653,\"y\":167.34081632653061,\"w\":480.9795918367347,\"h\":99.20204081632653,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"bottom\"},{\"x\":5.010204081632653,\"y\":443.90408163265306,\"w\":480.9795918367347,\"h\":89.18163265306123,\"rotation\":0,\"font\":\"impact\",\"font_color\":\"#ffffff\",\"outline_color\":\"#000000\",\"force_caps\":true,\"text_align\":\"center\",\"vertical_align\":\"bottom\"}]","url_name":"Ill-Just-Wait-Here"},{"id":61516,"uid":0,"name":"Philosoraptor","w":500,"h":500,"altNames":"green dinosaur","default_settings":"","url_name":"Philosoraptor"},{"id":405658,"uid":0,"name":"Grumpy Cat","w":500,"h":617,"altNames":"","default_settings":"","url_name":"Grumpy-Cat"}];sfw=1;init_meme = '37';</script>
<div id="footer">

<div id="findUs">
<a id="on-fb" href="https://www.facebook.com/imgflip">Facebook</a>
<a id="on-tw" href="https://twitter.com/imgflip">Twitter</a>
</div>
<div id="footline">copy right.created by acs students<br />2018</div>
</div>
<div class="feedback feedback-open" data-from="global" title="Submit feedback about the site">Feedback</div>
<!--[if lt IE 9]>
<script src="https://s.imgflip.com/jq-old.js"></script>
<![endif]--><!--[if gte IE 9]><!-->
<script src="https://s.imgflip.com/jq.js"></script>
<![endif]-->
<script src='//s.imgflip.com/v784/common.js'></script>
<script src='//s.imgflip.com/v784/m.js'></script><script async src='//s.imgflip.com/v784/ImageCropper.js'></script><script>
	lzs('//s.imgflip.com/v784/ImageCropper.css');
	$(function(){

mm = new MemeMaker(memes, {
	selectCallback: ajaxUpdateRecommendedMemes,
	allowBoxRotation: true,
	numTexts: 2
});
mm.init();
mm.initPopMemes();
mm.select(init_meme);

		webkitWarn("Imgflip Meme Generator");
		memeInit();
	});
</script>
</body>