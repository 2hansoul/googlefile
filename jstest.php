bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb
<!DOCTYPE html>
<!-- saved from url=(0126)https://learn.hansung.ac.kr/bbcswebdav/pid-157811-dt-content-rid-328913_1/courses/20171AIT0003A/WP_Final_2016_Prob%281%29.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf8">
<h3>aaaaaaa</h3>    
    <script>
      // (1) ==================================
      function myFocus(x) {

      }
      function myBlur(x) {

      }
      // (2) ==================================
      function light(x) {

      }
      // (3) ==================================
      function myText(x) {
        var x = document.getElementById("color").value;
        //console.log(x);
        document.getElementById('textColor').style.color =x;
      } 
      function myBackground(x) {
        var x = document.getElementById('color1').value;
        console.log(x);
        document.getElementById('bgColor').style.backgroundColor= x;
     
      } 
      // (4) ==================================
      function myRandomNo(type) {
       var x = new Array(6);
       var view= document.getElementById('myNumber1').innerText; //
       console.log(x);
       for(var i=0; i<x.length; i++){
          x[i]=  Math.floor((Math.random() * 45)+1);  //Math.random() 함수의 결과는 0~45.99999..
          for(var j=0; j<i; j++){
            if(x[i] == x[j]){           //x[0] = x[0] 같으면 중복이라고 판단 한다 
              i--;                      //같은 배열에서 중복이 아닐때 까지 i--를 하여 랜덤숫자를 뽑는다 
            }else{
              document.getElementById('myNumber').innerText = x;
            }
          }   
        }
       if(type === "button"){    //누른만큼 카운트 하기
        view=parseInt(view)+1;
      }
      document.getElementById('myNumber1').innerText=view;
      }
       // (5) ==================================
      function show(obj) {

      }
      function hide(obj) {

      }   
      // (6) ==================================
      function calculate() {
        var price = document.getElementById('price').value; 
        var tax  = document.getElementById('tax').value;
        var taxresult = (price*tax)/100;
        var total = parseFloat(price)+ parseFloat(taxresult);
        console.log(price);
        console.log(tax);
        console.log(taxresult);
        console.log(total);
        document.getElementById("total").innerText = total;
      }
      // (7) ======================================
      var timer;
      function blinking() {

      }

      function stoptimer() {

      }
      // (8) ==================================
      function convert() {
            var temp = document.getElementById('temp').value;
            var convert = document.getElementById('convert').value;
            console.log(convert);
            console.log(temp);
            var F ="";
            var C ="";
            if(convert == "CtoF"){
                F = (temp*9/5)+32; 
                console.log(F);
                document.getElementById("answer").value = F;
            }else{
                 C = Math.round(((temp-32)*(5/9)*10)/10);
                console.log(C);
                document.getElementById("answer").value = C;
            }
      }
      // (9) ==================================
      var txtsize = 15;
      function bigger() {

      }

      function smaller() {

      }
     
    </script> 

    <title>WP_Final(2014)</title>
  
  <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>
  
  <body>
    <!--          -->
    <b> (1) When the input field gets focus, background-color change into
      yellow and return to white and transformed to uppercase when blurred. <br>
      Enter your name: 
      First <input onfocus="myFocus(this)" onblur="myBlur(this)" type="text">
      Last <input onfocus="myFocus(this)" onblur="myBlur(this)" type="text">
    </b>
    [ Hint : toUpperCase() method ]
    <hr> 
    <!--          -->
    <b> (2) 
      <img src="http://www.w3schools.com/js/bulboff.gif" id="mybolb" width="40" height="70">
      <input onmousedown="light(&#39;on&#39;)" onmouseup="light(&#39;off&#39;)" value="Switch" type="button">
    </b>
      [Hint: bulbon image is at http://www.w3schools.com/js/bulbon.gif &amp; x.match() method]

    <hr> 
    <!--          -->
    <b> (3) </b>
      <div id="testArea" style="width:100; height:60; border:1px solid;"> 
        <b> <b id="textColor">Select Text Color</b> 
        <input id="color" name="color" onchange="myText(this)" type="color"> : 
        <span id=""> </span> <br>
         <b id="bgColor"> Select Background Color!</b> 
        <input id="color1" name="color1" onchange="myBackground(this)" type="color"> : 
        <span ></span> <br>
        </b>
      </div>
    <hr> 
<!--          -->
    <b> (4) math.range ㅎㅎ
      <input value="Give Me!" onclick="myRandomNo(type)" type="button">
      <span id="myNumber"> 00, 00, 00, 00, 00, 00 </span>
      <span>카운트</span><span id="myNumber1">0</span>
    </b>
    <hr> 
<!--          -->
    <b>(5) 
      <span onmouseover="show(this)" onmouseout="hide(this)" id="hidden_message" style="background-color:lightpink; color:lightpink; width:200px; height:20px; padding:5px; border:1px solid">
      Wish you a GOOD LUCK ! 
      </span>
    </b>
    <hr>
<!--          -->
    <b> (6) Tax Calculator : 
      Price ($) <input id="price" size="6" type="text"> 
      Tax (%) <input id="tax" size="6" type="text">  </b> 
      <input value="Calulate" onclick="calculate();" type="button"> 
      <b> Your total : <span id="total"> $0.00 </span> </b>
      [ Hint: parseFloat() ] 
    <hr>
<!--          -->
    <b> (7) Blinking : </b> 
      fast <input id="speed" type="range" name="speed" min="50" max="500" step="50" value="250"> slow
      <button onclick="blinking()"> Start </button>
      <button onclick="stoptimer()"> Stop </button>
      <b> <span id="message"> !!! BLINKING SIGN !!! </span> </b> 
      [ Hint: fastest = 50 msec, slowest = 500 msec interval]
    <hr>
<!--          -->
    <b>(8) Temp Converter </b> :
    <input id="temp" size="5" type="text">
    <select id="convert">
      <option value="CtoF"> &deg;C to &deg;F</option>
      <option value="FtoC"> &deg;F to &deg;C</option>
    </select>
    <button onclick="convert()"> Calculate </button>
    <input id="answer" size="6" type="text">
    [ Hint: &deg;F = (&deg;C&times;9/5)+32 ; &deg;C = (&deg;F-32)&times;5/9 ; Math.round(value *10)/10 ]
    <hr>
<!--          -->
    <b> (9) Growing Text : 
    <button onclick="bigger()"> Bigger +5 </button> 
    <button onclick="smaller()"> Smaller -5 </button>
    <span id="msgfield"> Yeh~~  Summer Vacation ! </span> 
    </b> 
    [ Hint : *.style.fontSize = txtsize+"px" ]
    <br>
    <hr> 

  

</body></html>
