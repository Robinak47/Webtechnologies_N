let str="Hellow";
console.log(str);
let str2=`Hello "mr. Meow"`;
console.log(str2);

let str3="Hello Bangladesh";
console.log(str3.length);

let str4="I live in bangladesh";
console.log(str4.substring(2,6));
console.log(str4.slice(7,9));
console.log(str4.indexOf('i'));
console.log(str4.lastIndexOf('i'));
console.log(str4.indexOf("live"));
console.log(str4.includes("live"));

let email="khairulaiub.edu";

if(email.includes("@"))
{
    console.log("Valid email");
}

else
{
    console.log("Invalid Email");
}

console.log(str4.startsWith("I"));
console.log(str4.endsWith("desk"));
console.log(str4.toUpperCase());
console.log(str4.toLowerCase());

let str5=" Mr.Cat ";
console.log(str5.trim());
console.log(str5.trimEnd());
console.log(str5.trimStart());

let firstName="md. Khairul ";
let lastName="Robin";
console.log(firstName.concat(lastName));

let str6="Meow Meow Mr.Meow";
console.log(str6.replace("Meow", "Tom"));
console.log(str6.replaceAll("Meow", "Tom"));

let str7="Apple, Banana, Grape";
console.log(str7.split(','));
let str8=str7.split(',');
console.log(str8[0]);

let str9="Bangladesh";
console.log(str9.charAt(2));
console.log(str9.repeat(10));