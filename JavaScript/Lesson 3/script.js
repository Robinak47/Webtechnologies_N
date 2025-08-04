
let eleBtn=document.getElementById("btn2");
eleBtn.addEventListener("click",display2);

function display()
{
    let ele=document.getElementById("div1");
    ele.innerHTML="Box 2";
    ele.style.borde="2px,solid,black";
    ele.style.backgroundColor="red";
    ele.style.color="White";
    ele.style.textAlign="center";
    ele.style.alignItem="center";
    ele.style.display="block";

}

function display2()
{
    let ele=document.getElementById("div1");
    ele.style.display="inline";

}