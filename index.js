
  	function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

	$(document).ready(function(){
	     $(document).on("keydown", disableF5);
	});

    
	const lucky_numbers=[];
	let animation_duration=4000;

	function start(event){
		event.preventDefault();
		let minute=document.getElementById("selected_minute").value;
		let second=document.getElementById("selected_second").value;
		let time=(parseInt(minute)*60)+parseInt(second);
		animation_duration=time*1000;
		countdown_timer(time);
	}

	countdown_timer=(t)=>{
		let x = setInterval(()=>{
			let minutes = Math.floor(t/60); 
			let seconds = Math.floor(t%60); 
			document.getElementById("countdown_timer").innerHTML =  minutes +":"+seconds;
			t--;
		    if (t < 0) { 
		        clearInterval(x); 
		        document.getElementById("countdown_timer").innerHTML = "0:00"; 
		        calculate_lucky_number();
		    } 
		}, 1000); 

		random_animation=setInterval(()=>{
								var ranNum = Math.floor( 1 + Math.random() * 1000 );
								document.getElementById("result").innerHTML = ranNum;
							},20)
	}

	calculate_lucky_number=()=>{
		let min=parseInt(document.getElementById("min_no").value);
		let max=parseInt(document.getElementById("max_no").value);
		var result = Math.floor(Math.random() * (max-min+1)+min) ;
		if (lucky_numbers.indexOf(result)==-1) {// if result_no is not include result_arr
			document.getElementById("result").innerHTML=result;
			document.getElementById("result2").value=result;
			console.log(result);
			lucky_numbers.push(result);
			console.log(lucky_numbers);
		}
		else{
			calculate_lucky_number();
		}
		// document.getElementById("record").innerHTML=lucky_numbers.toString();
		show_result_history();

		clearInterval(random_animation);
	}

	show_result_history=()=>{
		document.getElementById("result_table").style.display="block";
		var tbody=document.getElementById("tbody");
		tbody.innerHTML="";
		for (var i = 0; i < lucky_numbers.length; i++) {
			tbody.innerHTML+="<tr><td>"+(i+1)+"</td><td>"+lucky_numbers[i]+"</td></tr>"
		}
		
	}

  
