bbbbbbbbbbbbb
<!--
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
var time = 325; //5분25초시간 맞춤
var min = "";
var sec= "";
// setInterval 일정한 간격으로 특정 함수 호출하는 함수
var x = setInterval(function(){
         
        min = parseInt(time/60);  //325을 325/60을 하면 몫은 5가 나오고 나머지는 25가 나오고  몫은 min이 되고 나머지는 sec
        sec = time%60;
    document.getElementById("test").innerHTML = min +"분"+sec + "초후확인aaaaa";
    time--;

if(time < 0){
 clearInterval(x);
    if(confirm("이동하려면 yes 아니면 no")){
        location.href="https://hansoul.tistory.com/";
    }else{
        document.querySelector("#test").innerHTML = "<a href='https://hansoul.tistory.com/'>tistory</a>"; 
    }
}
} , 10); // 1000ms 는 1s 입니다 맞춤!!! (1000밀리세컨드 = 1세컨드(초))

</script>
<div id="test"></div>
<h3>timer</h3>
-->

<script>
function move(){
     if(confirm("이동하시려면 yes 아니면 no"))
 {
     location.href="https://hansoul.tistory.com/";
 }
 else
 {
 alert('no를 누르셨습니다');
 }
}
var time = 3;
var min = "";
var sec= "";

var x = setInterval(function(){

        sec= time%60;

    document.getElementById("test").innerHTML = '다운로드까지 '+sec+'초 남았습니다.';
    time--;

if(time < 0){
 clearInterval(x);
   document.querySelector("#test").innerHTML = "gogogogo";
}
} , 1000);
</script>
<div id='test' onclick="move()" style="cursor: pointer;color:red"></div>
