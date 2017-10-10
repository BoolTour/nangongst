window.onload=function(){

	var btn1=document.getElementById("btn1");
	var input_box=document.getElementById("input_word");

	var Flag=1;
	btn1.onclick=function(){
		if(Flag){
			input_box.style.display="block";
			Flag=0;
		}else{
			input_box.style.display="none";
			Flag=1;
		}
		
	}
// 留言盒子
	var message_box=document.getElementById("message_box");//留言大盒子
	var number=message_box.getElementsByTagName("div"); //每条留言div
	/*var p1=document.getElementById("pp1");   //总的数量
	p1.innerHTML="留言"+"("+number.length+")";*/

//文字
	var text_box=document.getElementById("text");
	var submit=document.getElementById("btn2");
	var reset=document.getElementById("btn3");

	submit.onclick=function(){
		if (!text_box.value) {
			alert("留言的内容不能为空！")
		}else{
			addDivbox(text_box.value);
			text_box.value="";
		}
	}

	reset.onclick = function(){
		if (text_box.value){
			text_box.value="";
		}
		input_box.style.display="none";
			Flag=1;

	}
	
//将文字加载到留言盒子内
/*	function addDivbox(str){
		var myDate = new Date();
		time=myDate.toLocaleString();
		var p1 =document.createElement("p");
		p1.innerHTML ='<img src="./application/views/home/img/note.gif">'+ "季丹凤 留于"+time;
		var span =document.createElement("span");
		span.appendChild(p1);
		var p2 = document.createElement("p");
		p2.className="p2";
		p2.innerHTML=str;
		var div = document.createElement("div");
		div.className="content";
		div.appendChild(span);
		div.appendChild(p2);
		message_box.appendChild(div);
	}*/
}