function loadData(name){
    document.getElementsByClassName("item")[0].style.display = "flex";
    document.getElementsByClassName("pro-left")[0].style.display = "none";
    document.getElementsByClassName("clip")[0].style.display = "none"; 
	document.getElementsByClassName("pro-middle")[0].style.display = "none"; 
	document.getElementsByClassName("pro-right")[0].style.display = "none"; 
	
	
    if(name=='btn1'){
        document.getElementById("image123").src = "../kids/dresses/1.jpg";
    }
    if(name=='btn2'){
        document.getElementById("image123").src = "../kids/dresses/b.jpg";
    }
    if(name=='btn3'){
        document.getElementById("image123").src = "../kids/dresses/a.jpg";
    }
    if(name=='btn4'){
        document.getElementById("image123").src = "../kids/dresses/a.jpg";
    }
    if(name=='btn5'){
        document.getElementById("image123").src = "../kids/dresses/a.jpg";
    }

}
function resetData(name){
    document.getElementsByClassName("item")[0].style.display = "none";
    document.getElementsByClassName("s")[0].style.display = "flex";
    document.getElementsByClassName("clip")[0].style.display = "flex"; 

    if(name=='btnBack'){
   
    }
}