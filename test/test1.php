<?php
/**Counties in the Republic of Kenya,Governors and their Political Parties.*/

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

/**You should not modify anything above this line*/

// @TODO : Your code starts here
$extrapolateData = explode(",",$county_data);
$arrlength = count($extrapolateData);
$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
body{


  background-color: dodgerblue;

}
}
h1 {
  color: blue;
}
p {
  color: red;
  .slideUp {
  animation-name: slideUp;
  -webkit-animation-name: slideUp;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  visibility: visible;
}
.test {
  background-color: yellow;
}}
</style

  <body>
<br><title>NAIROBI STATISTICS</title></br>
    <br
    <span style='font-size:50px;'>&#128071;</span>

    <p id="myP" style="position:absolute">Scroll down this page for more information</p>
  </br>
<br>
<script>
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("myP").className = "test";
  } else {
    document.getElementById("myP").className = "";
  }
}
</script>
</br>
<link rel="stylesheet" type="text/css" href="style.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
   <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
  <title>KENYAN COUNTIES AND THEIR GOVERNORS</title>
  <style>
  <h1 style="color:Tomato;">Hello World</h1>
  <p style="color:DodgerBlue;">Lorem ipsum...</p>
  <p style="color:MediumSeaGreen;">Ut wisi enim...</p>
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
  div {
  width: 100%;
  height: 400px;
  background-color: #efefef;

  background-size: cover;
  border: 1px solid red;
}
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    letter-spacing: 1px;
    font-family: sans-serif;
    font-size: .8rem;
}
th, td {
  padding: 15px;
}
th[scope="col"] {
    background-color: #696969;
    color: #fff;
}

      th[scope="row"] {
    background-color: #d7d9f2;
      }

      tr:nth-child(even) {background-color: #fefbd8;}
      caption {
      padding: 10px;
      caption-side: bottom;
      }
   </style>
</body>
</head>

<body>
  <h2>KENYAN COUNTIES AND THEIR GOVERNORS</h2>

    <p>This is a detailed list of counties its governor and their political party</p>
       <div style="overflow-x:auto;">
         <table style="width:100%">
           <caption>All counties starts
             <span style='font-size:100px;'>&#128077;</span></caption>
               <thead>

              <tr>
              <th># </th>
              <th>Name</th>
              <th>Governor</th>
              <th>Party</th>
              <th>Website</th>
              </tr>
              </thead>
              <tbody style="text-align:left">>


                <!---Dumping Data into the table-->
        <?php
        $j=1;
        for($x = 0; $x < $arrlength; $x++) {
        $getData = explode(" – ",$extrapolateData[$x]);
        $datalength = count($getData);?>
        <tr>
       <td><?php echo $j++?></td>
        <td>
            <?php
            $cleanString = str_replace($unwantedCharacters, "", $getData[0]);
            echo $cleanString;?>
            </td>
            <td>




                 <?php
                 echo $getData[1];?>
                 </td>
                 <td><?php
                 if(!empty($getData[2])){
                 if($getData[2] == "WDM K."){
                echo " 'WDM K','img src=";

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
               <?php
                 $cleanString = str_replace($unwantedCharacters, "", $getData[0]);
                  $link = strtolower(str_replace(' ', '', $cleanString));?>
                    <td><a target="_BLANK"
                      href="http://<?php echo $link?>.go.ke">http://<?php echo $link;?>.go.ke</a></td>
                       </tr>
            <?php
              }
            ?>
          </tbody>
        </div>
        </table>
</body>

</html>
