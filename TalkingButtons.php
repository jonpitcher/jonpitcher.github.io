<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">

		function myfunction(){	
			
			var msg = new SpeechSynthesisUtterance('whale');
			window.speechSynthesis.speak(msg);
			var diVV= document.getElementById("greenBtn");
			diVV.style.backgroundColor = "grey";
			setTimeout(function(){
				var diVV= document.getElementById("greenBtn");
					diVV.style.backgroundColor = "blue";
			},1000)
		}

		function myfunction2(){
			
			
			var msg = new SpeechSynthesisUtterance('dog');
			window.speechSynthesis.speak(msg);
			var diVV= document.getElementById("redBtn");
			diVV.style.backgroundColor = "grey";
			setTimeout(function(){
				var diVV= document.getElementById("redBtn");
					diVV.style.backgroundColor = "red";
			},1000)
		}

function myfunction3(){
			
			
			var msg = new SpeechSynthesisUtterance('cat');
			window.speechSynthesis.speak(msg);
			var diVV= document.getElementById("yellowBtn");
			diVV.style.backgroundColor = "grey";
			setTimeout(function(){
				var diVV= document.getElementById("yellowBtn");
					diVV.style.backgroundColor = "yellow";
			},1000)
		}


function myfunction4(){
			
			
			var msg = new SpeechSynthesisUtterance('fish');
			window.speechSynthesis.speak(msg);
			var diVV= document.getElementById("orangeBtn");
			diVV.style.backgroundColor = "grey";
			setTimeout(function(){
				var diVV= document.getElementById("orangeBtn");
					diVV.style.backgroundColor = "orange";
			},1000)
		}

		function myfunction5(){
			
			
			var msg = new SpeechSynthesisUtterance('animal');
			window.speechSynthesis.speak(msg);
			var diVV= document.getElementById("pinkBtn");
			diVV.style.backgroundColor = "grey";
			setTimeout(function(){
				var diVV= document.getElementById("pinkBtn");
					diVV.style.backgroundColor = "pink";
			},1000)
		}





	</script>

	<style type="text/css">
		
		#greenBtn{

			background-color: blue;
			float: bottom;
			width: 120px;
			height: 120px;
			position: absolute;
			bottom: 50px;
			text-align:center;
			font-size: 30px;

		}

		#redBtn{

			background-color: red;
			float: bottom;
			width: 120px;
			height: 120px;
			position: absolute;
			margin-left: 130px;
			bottom: 50px;
			text-align:center;
			font-size: 30px;

		}

#yellowBtn{

			background-color: yellow;
			float: bottom;
			width: 120px;
			height: 120px;
			position: absolute;
			margin-left: 260px;
			bottom: 50px;
			text-align:center;
			font-size: 30px;

		}

		#orangeBtn{

			background-color: orange;
			float: bottom;
			width: 120px;
			height: 120px;
			position: absolute;
			margin-left: 390px;
			bottom: 50px;
			text-align:center;
			font-size: 30px;

		}

		#pinkBtn{

			background-color: pink;
			float: bottom;
			width: 120px;
			height: 120px;
			position: absolute;
			margin-left: 520px;
			bottom: 50px;
			text-align:center;
			font-size: 30px;

		}


	</style>


</head>
<body>

<div id="greenBtn" onclick="myfunction();">
	
One

</div>

<div id="redBtn" onclick="myfunction2()";>
	
Two

</div>

<div id="yellowBtn" onclick="myfunction3()";>
	
Three

</div>

<div id="orangeBtn" onclick="myfunction4();">
	
Four

</div>

<div id="pinkBtn" onclick="myfunction5();">
	
Five

</div>

<audio id="myAudio">
  <source src="C:\Users\Jon\Desktop\audioTest.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>


</body>
</html>