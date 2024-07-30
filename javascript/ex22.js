let radius = parseInt(prompt("Enter a radius in cm :"));

document.write(`A cercle with a radius of ${radius.toFixed(3)} cm will have a circumference of ${(2*Math.PI*radius).toFixed(3)} and an area of ${(Math.PI*radius**2).toFixed(3)} cm².`);