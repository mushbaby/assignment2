$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

/*You should not modify anything above this line/

// @TODO : Your code starts here
$extrapolateData = explode(",",$county_data);
$arrlength = count($extrapolateData);
$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NAIROBI STATISTICS</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        KIMANI(DONKEY)
      </a>
    </div>
  </div>
</nav>
        <div class="container">
			<table id="parties" class="table is-bordered">
          <thead>
            <tr>
              <th># </th>
              <th>Name</th>
              <th>Governor</th>
              <th hidden>Party</th>
              <th>Website</th>
            </tr>
          </thead>
          <tbody>
		  <!---Dumping Data into the table-->
            <?php
            $n=1;
			//$arrlength=47
            for($x = 0; $x < $arrlength; $x++) {
              $getData = explode(" – ",$extrapolateData[$x]);
              $datalength = count($getData);?>
            <tr>
			<!-- For the # column--->
              <td><?php echo $n++?></td>
			  <!-- For the county name column--->
              <td>
                <?php
				$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
				 echo $countyName = str_replace($unwantedCharacters, "",$getData[0]);
                  //$cleanString = str_replace($unwantedCharacters, "", $getData[0]);
                  //echo $getData[0];?>
              </td>
			  <td>
                <?php
                  if(!empty($getData[2])){
                    echo $getData[1];
                    if($getData[2]=="ODM"){ ?>
                    <img width="5%" height="30%" src="download.jpg">
                    <?php }elseif ($getData[2]=="Jubilee"){ ?>
                    <img width="5%" height="30%" src="download1.png">
                    <?php }elseif ($getData[2]=="KANU"){ ?>
                    <img width="5%" height="30%" src="">
                    <?php }elseif ($getData[2]=="WDM K"||$getData[2]=="WDM K."){ ?>
                    <img width="5%" height="30%" src="">
                    <?php } elseif ($getData[2]=="CCM"){ ?>
                    <img width="5%" height="30%" src="">
                    <?php } elseif ($getData[2]=="FORD Kenya"){ ?>
                    <img width="5%" height="30%" src="">
                    <?php } elseif ($getData[2]=="Narc Kenya"){ ?>
                    <img width="5%" height="30%" src="">
                    <?php }
                        }
                    else {
                      if(strpos($getData[1],"- Jubilee")){
                        echo str_replace("- Jubilee","",$getData[1]);?>
                          <img width="5%" height="30%" src="download.jpg">
                <?php }
                      else if(strpos($getData[1],"- ODM")){
                        echo str_replace("- ODM","",$getData[1]);?>
                <img width="5%" height="30%" src="download1.png">
                <?php }

                    }?>
              </td>
			  <!-- Party Column -->
              <td hidden><?php
              if(!empty($getData[2])){
                if($getData[2] == "WDM K."){
                  echo "WDM K";
                }else{
                  echo $getData[2];
                }
              }
              else {
                if(strpos($getData[1],"- Jubilee")){
                  echo "Jubilee";
                }
                elseif(strpos($getData[1],"- ODM")){
                    echo "ODM";
                }
              }?></td>
			  <!---Link column----->
              <?php
                $countyName = str_replace($unwantedCharacters, "", $getData[0]);
				//tanariver
				$unwantedValuesinlink = array('-'," "," ' ");
                $link = (str_replace($unwantedValuesinlink, '', $countyName));?>
				<?php //echo strtolower(str_replace(' ', '', $cleanString));?>
              <td><a target="_BLANK" href ="https://www.<?php echo strtolower($link);?>.go.ke">https://<?php echo strtolower($link);?>.go.ke</a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
		</div>
</body>

</html>
