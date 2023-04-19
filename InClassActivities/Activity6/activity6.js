let myTime = 500;
let level = 1;
let click = 0;


function Game(){    
    setTimeout(()=>
    { 
        document.getElementById("button1").style.marginLeft = Math.random()*700+"px";
        document.getElementById("button1").style.marginTop = Math.random()* 700+"px"; 

    if(click === 3){
        alert(`you won level ${level}!!!`);
        level++;
        click= 0;
        myTime = 500 -(level - 1 )*100;
        
    }
}, myTime);

 
   
}

document.getElementById("button1").addEventListener("click", () => {
    click++;
    
});