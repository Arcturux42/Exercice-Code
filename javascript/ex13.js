let a = 12;
let b = 5;
let c = 14;

document.write(`Before : a = ${a} -- b = ${b} -- c = ${c}.<br>`);

a = a+b+c ;
b = a-b-c;
c = a-b-c;
a = a-b-c

document.write(`After : a = ${a} -- b = ${b} -- c = ${c}.`);