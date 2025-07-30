
function display()
{
    let x=document.getElementById("tx1").value;

    if(x.length>0)
    {
        
        alert(x);
        
    }

    else
    {
        document.getElementById("errorSpan").innerHTML="<br> Please input an id";


    }


    
}