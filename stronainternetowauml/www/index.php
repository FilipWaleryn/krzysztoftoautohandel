<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Klata Industries</title>
    <style>


body {
    background-color: black;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: rgb(251, 112, 12);
}

header {
    color: rgb(251, 112, 12);
    font-size: 20px;
    height: 60px;
}

.nrtel {
    padding-top: 10px;
    float: left;
    margin-left: 20%;
}

.mail {
    padding-top: 10px;
    float: left;
    margin-left: 10%;
}

.jezyk {
    padding-top: 10px;
    float: right;
    margin-right: 20%;
}

.zwrot {
    padding-top: 10px;
    float: right;
    margin-right: 10%;
}

.menu {
    width: 100%;
    height: 200px;
    text-align: center;
    background-image: linear-gradient(black, orange, orange, orange, orange, orange);
}
.logo {
    float: left;
    font-size: 50px;
    padding-top: 1%;
    padding-left: 15%;
    color: black;
}

.logoimg {
    width: 200px;
    position: absolute;
}

.logowanie, .waleryn{
    font-size: 35px;
    padding-top: 5%;
    float: left;
    padding-left: 30%;
}
.waleryn{
    position: absolute;
    color: black;
    margin-left: 16.5%;
}
.koszykpo{
    font-size: 35px;
    padding-top: 4%;
    float: left;
    padding-left: 64%;
}
a{
    text-decoration: none;
    color: black;
}
a:hover{
    color: rgb(251, 112, 12);
    text-shadow: 2px 2px black;
}

.koszyk{
    font-size: 35px;
    padding-top: 4%;
    float: left;
    padding-left: 25%;
}

.kategorie{
    width: 100%;
    height: 60px;
    background-color: white;
    background-image: linear-gradient(orange, orange, black);
    font-size: 30px;
}

.lawki{
    float: left;
    margin-left: 10%;
}
.gryfy{
    float: left;
    margin-left: 10%;
}
.obciazenie{
    float: right;
    margin-right: 10%;
}
.inne{
    float: right;
    margin-right: 10%;
}
.baner{
    width: 100%;
    height: 460px;
    background-color: black;
}
.footerlogowanie{
    clear: both;
    height: 83.5px;
    background-image: linear-gradient(black);
}

footer{
    clear: both;
    height: 83.5px;
    background-image: linear-gradient(orange,orange, orange, black );
    padding-bottom: 50px;
}
.logowaniediv{
    text-align: center;
    width: 100%;
    height: 745.5px;
    background-image: linear-gradient(black, orange, orange, orange, orange, orange, black);
    text-shadow: 2px 2px black;
    font-size: 20px;
}


.rejestracjatext{
    padding-top: 20px;
}
.logowanietext{
    padding-top: 180px;
}

.submitrej, .submitlog{
    background-color: orange;
    border:black 1px solid;
    border-radius: 20px;
    width: 100px;
    height: 50px;
}
.submitrej:hover, .submitlog:hover{
    background-color: rgb(251, 112, 12);
}

.rejestracjadiv{
    text-align: center;
    width: 100%;
    height: 745.5px;
    background-image: linear-gradient(black, orange, orange, orange, orange, orange, black);
    text-shadow: 2px 2px black;
    font-size: 20px;
}
.tlo{
    width: 100%;
    height: 500px;
    background-color: white;
    text-align: center;
    font-size: 30px;
}
.lawkaprosta{
    margin-left: 3%;
    float:left;
    width: 30%;
    height: 100%;
}
.lawkaregulowana{
    float: left;
    width: 30%;
    margin-left: 2%;
    height: 100%;
}
.lawkazestojakami{
    float: left;
    width: 30%;
    margin-left: 2%;
    margin-right: 2%;
    height: 100%;
}
.lawkaprosta:hover, .lawkaregulowana:hover, .lawkazestojakami:hover{
    background: radial-gradient(circle, rgba(235,134,29,1) , black 60%);
}
.stojaki, .prosta, .regulowana, .hantle, .gryfolimpijskilamany, .gryfolimpijski, .gumowe, .zeliwne{
    width: 70%;
    height: 70%;
}
.tlolawek{
    width: 100%;
    height: 500px;
    background-color: black;
    text-align: center;
    font-size: 30px;
}
.lawkaprostaimg, .lawkaregulowanainfo, .lawkazestojakamiinfo, .hantleinfo , .gryfolimpijskilamanyinfo , .gryfolimpijskiinfo{
    margin-left: 3%;
    float:left;
    width: 30%;
    height: 400px;
    background: radial-gradient(circle, rgba(235,134,29,1) , black 60%);
    color: rgb(251, 112, 12);
    text-shadow: 2px 2px black;
}

.produktinfo{
    float: left;
    width: 60%;
    position: absolute;
    padding-left: 600px;
    padding-top: 175px;
}

.zamow{
    background: orange;
    color: black;
    width: 300px;
    height: 90px;
    border: black;
    font-size: 30px;
}
.zamow:hover{
    background-color: rgb(251, 112, 12);
}

.brak{
    margin-top:10%;
}
.koszyktabela, .koszyktr, .koszyktd{
    border-color: rgb(251, 112, 12);
    background-color: black;
}
.koszyktd{
    height: 10%;
}
.zaproszenie{
    text-align: center;
    padding-top: 8%;
    font-size: 60px;
}
footer{
    text-align: center;
    color: black;
    background-color: (rgba(235,134,29,1) , black 60%);
}
.zawartosc{
    background-color: #696969;
    width: 20%;
    height: 100%;
    float: right;
    margin-right: 10%;
    text-align: center;
}

.foot{
   margin-top: 10%;
   border-top: 3px solid black;
   font-size: 18px;
   text-align: center;
   text-align: center;
}
.total, .cena{
    display: inline;
}
.kup{
    padding: 20px 30px 20px 30px;
    color: black;
    background-color: rgb(251, 112, 12);
}
.kup:hover{
    background-color: orange;
}
.kupp{
    margin-top:30px;
}


    </style>

<script>
   global: total=0
   global: p2 = 0
   global: p1 = 0

function prod1(){
    p1 = p1 +1
    total = total+229
    document.getElementById("gryfprostyquantity").innerHTML = p1
    document.getElementById("total").innerHTML = total
    if (p1!=0 ||p2!=0){
    document.getElementById("cartItem").style.visibility= "hidden" ;}
    if (p1!=0 ||p2!=0){
    document.getElementById("gryfprosty").style.visibility= "visible" ;}}
function prod2(){
    p2 = p2 +1
    total = total+89
    document.getElementById("gryfłamanyquantity").innerHTML = p2
    document.getElementById("total").innerHTML = total
    if (p1!=0 || p2!=0){
    document.getElementById("cartItem").style.visibility= "hidden" ;}
    if (p1!=0 ||p2!=0){
    document.getElementById("gryfłamany").style.visibility= "visible" ;}}

    function usun2(){
    p2 = p2 -1
    total = total-89
    document.getElementById("gryfłamanyquantity").innerHTML = p2
    document.getElementById("total").innerHTML = total
    if (p1!=0 || p2!=0){
    document.getElementById("cartItem").style.visibility= "hidden" ;}
    if (p2<1){
    document.getElementById("gryfłamany").style.visibility= "hidden" ;}}

    function usun1(){
    p1 = p1 -1
    total = total-229
    document.getElementById("gryfprostyquantity").innerHTML = p1
    document.getElementById("total").innerHTML = total
    if (p1!=0 || p2!=0){
    document.getElementById("cartItem").style.visibility= "hidden" ;}
    if (p1<1){
    document.getElementById("gryfprosty").style.visibility= "hidden" ;}}
// usuwanie pozycji/odejmowanie ilosci i ceny total  oraz znikanie diva jak value=0 przycisk kup ktory wysyla jakas informacje do konsoli ewentualnie php jak zdązymy albo robi loda za darmo 


</script>
</head>

<body>
    <header>
        <div class="nrtel">
            +48 601 991 591
        </div>
        <div class="mail">
            KlataIndustries@gmail.com
        </div>
        <div class="jezyk">
            Język: Polski 🇵🇱
        </div>
        <div class="zwrot">
            30 dni na zwrot
        </div>
    </header>
    <div class="menu">
        <div class="logo">
            <img src="img/logo.png" class="logoimg"></a>
        </div>
    </div>
    <div class="tlolawek">
       <a class="lawkaprosta"  onclick="prod1()"><img src="img/gryfolimpijski.png" class="prosta"><br>Gryf Olimpijski</a>
        <a class="lawkaregulowana"  onclick="prod2()"><img src="img/gryfolimpijskilamany.png" class="regulowana"><br>Gryf Olimpijski Łamany</a>
        <div class="zawartosc">
            <div class="koszyk">
                <p>Koszyk 🛒</p>
                <div id="cartItem">pusto</div>
                <div id="gryfprosty" style="visibility: hidden;">Gryf Prosty <a id="gryfprostyquantity">0</a><inupt type="button" id="usunprosty"onclick="usun1()">➖</input></div>
                <div id="gryfłamany" style="visibility: hidden;" >Gryf Łamany <a id="gryfłamanyquantity">0</a><inupt type="button" id="usunłamany"onclick="usun2()">➖</input></div>
                <div class="foot">
                    <p>do zapłaty</p>
                    <p id="total" class="total">0.00</p><p class="cena"> zł</p>
                    <div class="kupp"><a href="logowanko.html" class="kup">KUP</a></div>
                </div>
            </div>
        </div>
       
    </div>
    <footer>
        <br>
     <p>   duze chlopy - gwarancja dożywotnia, bez limitu obciążenia</p>
    </footer>
</body>

</html>