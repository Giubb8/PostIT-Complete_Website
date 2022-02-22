
var container2= document.getElementsByClassName("container2")[0];
var container3= document.getElementsByClassName("container3")[0];
var  iconV= document.getElementById("iconV");
var iconX= document.getElementById("iconX");
var colorindex=0;
iconX.addEventListener("click",function(){
        typenote();
})    

iconV.addEventListener("click",function(){
                createnote();
        }
)
console.log(jsessionid);

function typenote(){
         if( container3.style.display== "none"){
                container3.style.display= "block";

        }else{
                container3.style.display= "none";
        }
}

function createnote(){
        var noteText=document.getElementById("note-text").value;//prendo il textarea con id note-text
        var node0=document.createElement("div");
        var node1=document.createElement("h1");
        node1.innerHTML=noteText;
        node1.setAttribute("style","width:300px; height:300px; padding: 40px 25px 25px 25px;margin-top:10px; overflow:auto;  font-size:26px;   box-shadow: 10px 10px 24px 0px rgba(0, 0, 0, 0.75);")
        node1.style.margin=margin();
        node1.style.transform=rotate();
        node1.style.background=color();
        node0.appendChild(node1);
        node0.addEventListener("mouseenter",function(){
                node0.style.transform="scale(1.1)";
        })
        node0.addEventListener("mouseleave",function(){
                node0.style.transform="scale(1)";
        })
        node0.addEventListener("dblclick",function(){
                node0.remove();
                var jsondata1=JSON.stringify({message: noteText});
                ajaxUtils.sendPostRequest("./includes/postitremove.inc.php",()=>{},true,jsondata1  ); 
                console.log(jsondata1);
        })
        document.getElementById("note-text").value=' ';
        container2.insertAdjacentElement("beforeend",node0);
        var jsondata=JSON.stringify({message: noteText});
        ajaxUtils.sendPostRequest("./includes/postit.inc.php",()=>{},true,jsondata  ); 
        console.log(noteText);
        
       
}
function margin(){
        var random_margin = ["-5px", "1px", "5px", "10px", "7px"];
        return random_margin[Math.floor(Math.random()*random_margin.length)];
}
function rotate(){
        var random_degree = ["rotate(3deg)", "rotate(1deg)", "rotate(-1deg)", "rotate(-3deg)", "rotate(-5deg)", "rotate(-8deg)"];
        return random_degree[Math.floor(Math.random()*random_degree.length)];

}
function color(){
        var random_colors = ["#c2ff3d","#ff3de8","#3dc2ff","#04e022","#bc83e6","#ebb328"];
        if(colorindex > random_colors.length -1){
                colorindex=0;
        }
        return random_colors[colorindex++]
}

function createnotelogin(ptext){
        
        var noteText=ptext;
        var node0=document.createElement("div");
        var node1=document.createElement("h1");
        node1.innerHTML=noteText;
        node1.setAttribute("style","width:300px; height:300px; padding: 40px 25px 25px 25px;margin-top:10px; overflow:auto;  font-size:26px;   box-shadow: 10px 10px 24px 0px rgba(0, 0, 0, 0.75);")
        node1.style.margin=margin();
        node1.style.transform=rotate();
        node1.style.background=color();
        node0.appendChild(node1);
        node0.addEventListener("mouseenter",function(){
                node0.style.transform="scale(1.1)";
        })
        node0.addEventListener("mouseleave",function(){
                node0.style.transform="scale(1)";
        })
        node0.addEventListener("dblclick",function(){
                node0.remove();
                var jsondata1=JSON.stringify({message: noteText});
                ajaxUtils.sendPostRequest("./includes/postitremove.inc.php",()=>{},true,jsondata1  ); 
        })
        container2.insertAdjacentElement("beforeend",node0);
}



