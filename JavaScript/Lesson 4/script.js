let btn=document.getElementById("btn");
btn.addEventListener('click', createChild);

let btn2=document.getElementById("btn2");
btn2.addEventListener('click', removeChildOfParent);



function createChild()
{
    let parent=document.getElementById("parent");
    let child1=document.createElement("div");
    child1.id="child1";
    child1.innerHTML="Child1";
    parent.appendChild(child1);
    let child2=document.createElement("div");
    child2.id="child2";
    child2.innerHTML="Child2";
    let child3=document.createElement("div");
    child3.id="child3";
    child3.innerHTML="Child3";
    parent.append(child2,child3);
    let ele=document.getElementById("child2");
ele.addEventListener("mouseover", mouseEnter);
}

function removeChildOfParent()
{
    let parent=document.getElementById("parent");
    /*let child=document.getElementById("child1");
    parent.removeChild(child);*/

    parent.remove();


}

function mouseEnter()
{
    let ele=document.getElementById("child2");
    ele.style.backgroundColor="aqua";
}

