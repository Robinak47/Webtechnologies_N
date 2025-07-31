
let num1=20;
let num2=30;
const pi=3.1416;

num1=50;
console.log("The value of num1 is: "+num1);
console.log("The value of num2 is: "+num2);
console.log("The value of Pi is: "+pi);
console.log(typeof num1);
console.log(typeof num2);
console.log(typeof pi);


let str="Bangladesh";
let char='a';

console.log(typeof str);
console.log(typeof char);
console.log(str);
console.log(char);

let isChecked=true;
console.log(typeof isChecked);
console.log(isChecked);

let value1=500;
let value2=600;

console.log(value1+value2);

console.log(value1-value2);

console.log(value1/value2);


console.log(value1*value2);

console.log("The result is: "+(value1+value2));
console.log("The result is: "+(value1-value2));
console.log("The Result is: "+value1/value2);
console.log("The Result is: "+value1*value2);

let str3="me";
let value3=30;
console.log(30+value3+"meow"+str3);

console.log("The outcome is: " +(value1<value2));

console.log(true&&false);
console.log(true&&true);
console.log(true&&!true);
console.log(true&&!false);
console.log(false&&false);

console.log(true||false);
console.log(false||false);
console.log(!false);


console.log("The result of the comperison is :"+(5=="5"));
console.log("The result of the comperison is :"+(5==="5"));


let mark=74;

if(mark>70)
{
    console.log("Super pass")
}
else if(mark>50)
{
    console.log("Pass");
}

else
{
    console.log("fail");
}

for(let i=1;i<11;i++)
{
    console.log(i);
}

let x=10;

while(x<110)
{
    console.log(x);
    x+=10;
}

let xx=100;

do{
    console.log(xx);
    xx+=100;
}while(xx<1100);

let arr=["Volvo", "Ford"];
console.log(arr.length);
console.log(arr);
console.log(arr[0]);
console.log(typeof arr);
arr.push(10);
console.log(arr);
console.log(typeof arr[2]);
arr.pop();
console.log(arr);
for(let iii=0;iii<arr.length;iii++)
{
    console.log(arr[iii]);
}

arr.forEach((iii) => {
    console.log(iii);
});

let students=["Mr.Meow","Mr. Tom", "Mr. Cat"];
console.log(students.slice(1,2));

function sayHello()
{
    console.log("hello");
}

function sum(x,y)
{
    return x+y;
}

sayHello();

console.log(sum(10,30));
