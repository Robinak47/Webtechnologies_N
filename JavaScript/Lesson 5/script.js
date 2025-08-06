let userName=document.getElementById("userName");
let nameErr=document.getElementById("nameErr");
let isValidated=false;
let userNameRegex=/^[a-zA-Z]+$/;
let ageRegex=/^(0?[1-9]|[1-9][0-9]|1[0-9]{2}|200)$/;
let age=document.getElementById("age");
let ageErr=document.getElementById("ageErr");
let maleRB=document.getElementById("maleRB");
let femaleRB=document.getElementById("femaleRB");
let genderErr=document.getElementById("genderErr");
let selectedGender="";
let pizzaCB=document.getElementById("pizzaCB");
let pastaCB=document.getElementById("pastaCB");
let burgerCB=document.getElementById("burgerCB");
let dishErr=document.getElementById("dishErr");
let selectDish="";
let role=document.getElementById("role");
let roleErr=document.getElementById("roleErr");
function validationForm()
{
    if(userNameRegex.test(userName.value))
    {
        isValidated=true;
    }

    else
    {
        isValidated=false;
        nameErr.innerHTML="Please provide an userName";
        nameErr.style.color="red";
    }

    if(ageRegex.test(age.value))
    {
        isValidated=true;
    }

    else
    {
        isValidated=false;
        ageErr.innerHTML="Please Provide a valid Age";
        ageErr.style.color="Red";

    }

    if(maleRB.checked || femaleRB.checked)
    {
        isValidated=true;
        if(maleRB.checked)
        {
            selectedGender=maleRB.value;
        }
        else
        {
            selectedGender=femaleRB.value;
        }
    }

    else
    {
        isValidated=false;
        genderErr.innerHTML="Please select a gender";
        genderErr.style.color="Red";
    }

    if(pizzaCB.checked || pastaCB.checked || burgerCB.checked)
    {
        isValidated=true;
        if(pizzaCB.checked)
        {
            selectDish=pizzaCB.value;
        }

        if(pastaCB.checked)
        {
            selectDish=selectDish+","+pastaCB.value;
        }

        if(burgerCB.checked)
        {
            selectDish=selectDish+","+burgerCB.value;
        }

    }

    else
    {
        isValidated=false;
        dishErr.innerHTML="Plase select atleast one dish";
        dishErr.style.color="red";
    }

    if(role.value!="")
    {
        isValidated=true;
    }

    else
    {
        isValidated=false;
        roleErr.innerHTML="Plase select a valid Role";
        roleErr.style.color="red";
    }

    if(isValidated)
    {
        alert("user Name: "+userName.value+", Age: "+age.value+", Gender: "+selectedGender+", Selected Dish"+selectDish+", Role: "+role.value);
        return true;
    }

    else
    {
        return false;
    }
}