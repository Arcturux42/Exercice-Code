let a = 12;
let b = 5;

document.write(`Before : a = ${a} -- b = ${b}.<br>`);

a += b;
b = a-b;
a = a-b;

document.write(`After : a = ${a} -- b = ${b}.`);