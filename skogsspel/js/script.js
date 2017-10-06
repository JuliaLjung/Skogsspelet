	
	var chanser = 10;
	var music = document.getElementById("myAudio");
	var playing = true;
	var play = document.getElementById("play");
	var points = 0;
	var ping = document.getElementById("ping");



	function stars() { 
		if(points == 1) {
			document.getElementById("yellow1").style.display = "block";
		}
		else if (points == 2){ 
			document.getElementById("yellow2").style.display = "block";
		}
		else if (points == 3){ 
			document.getElementById("yellow3").style.display = "block";
		}
		else if (points == 4){ 
			document.getElementById("yellow4").style.display = "block";
		}
		else if (points == 5){ 
			document.getElementById("yellow5").style.display = "block";
		}
		else if (points == 6){ 
			document.getElementById("yellow6").style.display = "block";
		}
	}

	//document.getElementById('sixth').style.display="block";
	//document.getElementById('sixth_empty').remove();

 Check if both fields are filled

	function checkform() {

		var f = document.forms["form"].elements;
		var cansubmit = true;

		for (var i = 0; i < f.length; i++) {
			if (f[i].value.length == 0) cansubmit = false;	}

		if (cansubmit) {
			document.getElementById('spela').disabled = false;
		}
		else {
			document.getElementById('spela').disabled = 'disabled';
		}

	}

// Store name in sessionStorage + start game

//	function startPlaying() {
//		document.getElementById("startpage").style.display = "none";
//		sessionStorage.name = document.getElementById("name").value;
//	}

// Music/sound
	play.addEventListener('click', toggleMusic);

	function toggleMusic() {
		
		if (playing) {
			myAudio.pause();
			play.src = 'img/pause.png';

		} else {
			myAudio.play();
			play.src = 'img/play.png';
		}
	}

	myAudio.onplaying = function() {
		playing = true;
	}
	myAudio.onpause = function() {
		playing = false;
	}
	

// Drag n Drop functions
	function begin(ev){
		ev.dataTransfer.setData("text/plain",ev.target.id);
	}

	function over(ev){
		ev.preventDefault();
	}

	

	function drop(ev){
		var data=ev.dataTransfer.getData("text/plain");
		var draggedElement = document.getElementById(data);
		chanser=chanser-1;
		document.getElementById('chances').innerHTML = chanser;

			if (draggedElement.dataset.animal == ev.target.dataset.animal){
				points++;
				draggedImg = document.getElementById("dragMeBadger");
				ev.target.src = draggedImg.src;
				document.getElementById("dragMeBadger").style.display = "none";

				ping.currentTime = 0;
				ping.play();

			} else {
				document.getElementById('error').play();
			}
			endPage();
			stars();
	}

		function drop2(ev){
		var data=ev.dataTransfer.getData("text/plain");
		var draggedElement = document.getElementById(data);
		chanser=chanser-1;
		document.getElementById('chances').innerHTML = chanser;
			if (draggedElement.dataset.animal == ev.target.dataset.animal){
				points++;
				draggedImg = document.getElementById("dragMeOwl");
				ev.target.src = draggedImg.src;
				document.getElementById("dragMeOwl").style.display = "none";

				ping.currentTime = 0;
				ping.play();
				} else {
					document.getElementById('error').play();
				}
				endPage();
				stars();
	}
		function drop3(ev){
		var data=ev.dataTransfer.getData("text/plain");
		var draggedElement = document.getElementById(data);
		chanser=chanser-1;
		document.getElementById('chances').innerHTML = chanser;
			if (draggedElement.dataset.animal == ev.target.dataset.animal){
				points++;
				draggedImg = document.getElementById("dragMeSquirrel");
				ev.target.src = draggedImg.src;
				document.getElementById("dragMeSquirrel").style.display = "none";

				ping.currentTime = 0;
				ping.play();
			} else {
				document.getElementById('error').play();
			}
			endPage();
			stars();
	}
		function drop4(ev){
		var data=ev.dataTransfer.getData("text/plain");
		var draggedElement = document.getElementById(data);
		chanser=chanser-1;
		document.getElementById('chances').innerHTML = chanser;
			if (draggedElement.dataset.animal == ev.target.dataset.animal){
				points++;
				draggedImg = document.getElementById("dragMeBunny");
				ev.target.src = draggedImg.src;
				document.getElementById("dragMeBunny").style.display = "none";

				ping.currentTime = 0;
				ping.play();
			} else {
				document.getElementById('error').play();
			}
			endPage();
			stars();
	}
		function drop5(ev){
		var data=ev.dataTransfer.getData("text/plain");
		var draggedElement = document.getElementById(data);
		chanser=chanser-1;
		document.getElementById('chances').innerHTML = chanser;
			if (draggedElement.dataset.animal == ev.target.dataset.animal){
				points++;
				draggedImg = document.getElementById("dragMeFox");
				ev.target.src = draggedImg.src;
				document.getElementById("dragMeFox").style.display = "none";

				ping.currentTime = 0;
				ping.play();
			} else {
				document.getElementById('error').play();
			}
			endPage();
			stars();
	}
		function drop6(ev){ 
		var data=ev.dataTransfer.getData("text/plain");
		var draggedElement = document.getElementById(data);
		chanser=chanser-1;
		document.getElementById('chances').innerHTML = chanser;
			if (draggedElement.dataset.animal == ev.target.dataset.animal){
				points++;
				draggedImg = document.getElementById("dragMeDeer");
				ev.target.src = draggedImg.src;
				document.getElementById("dragMeDeer").style.display = "none";

				ping.currentTime = 0;
				ping.play();
			}else {
				document.getElementById('error').play();
			}
			endPage();
			stars();
	}

// endPage
	function endPage(){

		if (chanser<=0 || points==6){ //obs skapa points
			document.getElementById("endpage").style.display = "block";
			document.getElementById("getName").innerHTML = "Bra jobbat," + " " + sessionStorage.name;
		}

		if(points == 1) {
			document.getElementById("star1").style.display = "inline-block";
		}
		else if (points == 2){ 
			document.getElementById("star2").style.display = "inline-block";
		}
		else if (points == 3){ 
			document.getElementById("star3").style.display = "inline-block";
		}
		else if (points == 4){ 
			document.getElementById("star4").style.display = "inline-block";
		}
		else if (points == 5){ 
			document.getElementById("star5").style.display = "inline-block";
		}
		else if (points == 6){ 
			document.getElementById("star6").style.display = "inline-block";
		}
	}

	function changePlayer() {
		sessionStorage.clear();
		location.reload();
	}

	function playAgain() { // Hur kan vi länka tillbaka till spelet ej till startsidan?
		/*document.getElementById("endpage").style.display = "none";
		points = 0;
		chanser = 10;
		document.getElementById("chances").innerHTML = " " + chanser;*/
		location.reload();	
	}


// if(sessionStorage.name !== undefined) {
//	document.getElementById("startpage").style.display = "none";
// }



 











