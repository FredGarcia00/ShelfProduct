<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Stove Shelf
      </div>
      <div id="author">
        Joseph Lewis | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="./img/splash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>The best way I can put this is: I spend so much time in the kitchen, I came to accept the idea that the cooking process was a creative one, and that creativity always comes with a certain level of mess, clutter, and in some cases, unmitigated disaster.</p>

      <p>I’ve been a stay-at-home mom for six years. My husband and I were married for almost three years before we had our son, and then my daughter came just barely a year after, so I’ve got my hands full (to say the least!) with keeping up on the house, but where I really shine is in the kitchen. Cooking has been a passion of mine ever since I was in high school, but I didn’t really start to get good at it until I was married.</p>

      <p>My biggest issue is that a lot of the meals I prepare require a good sense of timing. It’s not that the timing is hard, necessarily, because I’m a woman and multi-tasking was encoded into my DNA at birth; it’s more that things just get cluttered and built up on my counter space. Just picture me adding veggie broth and trying to keep my risotto at a constant stir as I’m running back and forth from my pantry to grab some spices and the vanilla extract, or the salt and pepper, squeezing lemon juice, zesting an orange, cracking the eggs and whipping those up for my signature French toasts, and I have the cheesy egg hash brown skillet going in the oven…it can get out of hand real quick. Usually by the end, there’s an assortment of spices, oils and implements spread across the counter, and it looks like a tornado ran through my kitchen.</p>

      <div class="articleImgsmall">
        <img src="./img/messyCounter.jpg" width="100%"/>
      </div>

      <p>I accepted the mess as an irreversible side-effect of the cooking experience.</p>

      <p>Until I found out about [Product Name].</p>

      <p>I was at a home improvement store a few weeks ago when I saw a man in the appliance section with a small crowd gathered around him. I was curious what this was about, so joined the crowd.</p>

        <p>
          “It’s called the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>” he was saying. “I’ve been a chef for thirty-one years, and in that time I’ve seen a lot of famous chefs and very successful restaurateurs use similar things in their kitchens. I thought to myself, ‘why don’t more people know about this? I could make something just like what these high-end chefs have, and make it affordable for the average home cook.’ So that’s what I did.”
        </p>
		

      <p>He showed the shelf and slapped it on the top of the stove, where it clicked right into place.</p>
      </div>
      <div class="blockQuote">
         <i>
         “You see, just a pair of simple magnets, and now you have a shelf right over the stove that consolidates any add-ins you need for your dishes, as well as enough space to rest your implements. Just like that. No more clutter, easy access to cut down on mad dashes to the pantry. I opted for stainless steel, so it’s not an eye-sore in your kitchen.”
		</i>
      </div>
      <p>I was impressed. The [Product Name] looked like the one thing I was missing in my kitchen.</p>

      <p>“How much is it and where do I get it?” I asked, excited.</p>

      <p>“Oh, ma’am, this here is my prototype. I wanted to keep the price low enough for the average home chef to afford, so I don’t sell it in stores. By cutting out the middle man, I’m able to offer this to you for [price]. And,” he held up a finger, “the best part of this is the magnet idea I had. No tools required for installation. Just place it where you like it, move the magnets if you want a custom fit, and it’s good to go.”</p>

      <p>I was floored. I got the official website from him, and by the time I got home, the first thing I did was research the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>.</p>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>
      is a simple and elegant method to streamline your cooking experience—based on the same technology professional chefs rely on! Get yourself an extra 30” of storage space right where you need it, just above the stove. This keeps your kitchen tools, spices, oils and so much more within easy reach. The [Product Name] is not a merely a form over function product; the stainless steel shelf looks great on stoves of any color, adding to the aesthetics of your kitchen space!</p>

      <p>With [Product Name], we tried to think of everything—we decided a magnetic stove shelf was the way to go; no screws, drilling, or bracket installation required. Two silicone-encased neodymium magnets keep your kitchen shelf firmly affixed in place, and can be repositioned along the shelf for a custom fit on any stove. The 3” width accommodates most of our common kitchen implements (spatulas, stir spoons and sampling spoons, tongs, etc.) and add-ins to your recipes, from salt and pepper to spices and oils.</p>

    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>Now that the secret is out, the [Product Name] has sold over 10 million units directly to consumers, even without the help of being sold in stores. The [Product Name] has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on Instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The [Product Name] has started to develop a cult following, and with over 8,000 5-star reviews, it’s easy to see why. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Luke L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
        The product was larger than I expected, in a good way ;). The materials are solid and the interior looks like it could definitely handle a few spills. The support sticks used to hold it open seem like they could fall out since there is no sleeve, but otherwise everything looks good.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Anne A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/30/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
         Love this car trashcan! Fits my 2008 Toyota Corolla. Both passenger and driver can easily reach it. Can use a regular plastic bag from Walmart to fit inside. I especially like the Velcro strip on the underside that sticks to the carpet to secure it in place. Highly Recommend! Great price!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Kim C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        4/2/21
      </div>
      <div class="clear"></div>
     
    </div>
   
    <div class="articleSubheader">
    I Tried It Myself…Here’s What I Found
    </div>
    <div class="articleText">
      <p>After I placed my order on the official website, my [Product Name] showed up at my door 2 days later. I was amazed…that’s even faster than Amazon nowadays! The excitement didn’t end there. As a homemaker, my job is never really done, and I was just about to prepare dinner, so the timing was perfect for me to try it out.</p>

      <div class="articleImgsmall">
      <img src="../img/IGCarTrash1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
	  <p>I unboxed it, amazed at the quality of the shelf in my hands. The stainless steel was sturdy but light, and the magnets snapped right on. I placed it on the top of my stove and…it just looked great. I felt like it was supposed to be there, like my stove had been missing this all along. Just look at how I was able to consolidate my heavy-use spices and oils:</p>
      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>When you spend as much time in the kitchen as I do, you understand the benefits right away. I no longer have to keep my recipe add-ins sprawled around my counter, nor do I have to sprint back and forth from my pantry as I’m monitoring my stove-top and oven dishes. The website mentioned streamlining the cooking process, and I have to admit, that is exactly what I experience with my [Product Name]. Having everything on the shelf, right there in the middle of the action, is so useful!</p>

      <p>It’s pretty easy to see all those five star reviews were there for a reason. I appreciate the organization and, honestly, the visual appeal of the [Product Name] on my stove. The shelf itself looks great, and the common-use items lined up on it are just one more thing that helps me keep things organized. I feel like I’m in on a secret that was previously only known to the professionals.</p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>And oh, yes, people noticed.</p>

      <p>We have friends over just about every weekend, and it never fails they notice my new [Product Name] when they see me working in the kitchen. It’s always the same reaction, things like “Wow, that’s pretty cool! Where’d you get something like that?” or, “Woah, that’s a cute setup you have there, did that come with the stove?” I’m more than happy to point people to the website, and I know a few of my friends have already ordered their own [Product Name]s for their stoves.</p>

      <p>To put it plainly, the [Product Name] is exactly what I needed to simplify my cooking adventures. It works great for me, and I know it will work great for you, too. </p>
    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at the official website for just $[price]!</p>

      <p>Get your hands on the revolutionary [Product Name] and experience the elegance for yourself. Don’t spend another day with clutter spread over your kitchen counters, lamenting the mess—take action now and let [Product Name] enhance your cooking experience. Enjoy the eye-catching stainless steel stove shelf and the streamlined functionality of having everything you need right where you need it!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	Of course! My wife is stuck carting the kids to and from school and all over the city for their sports. If you have kids, you know they tend to be messy—especially our kids, when they’re constantly moving between activities—and the TidyCar Car Trash Can is an easy way to cut down on that mess significantly. I can’t recommend TidyCar Car Trash Can enough. I just wish I knew about it sooner; I might have been able to save myself that three-star review!</p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">TidyCar</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 10 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
