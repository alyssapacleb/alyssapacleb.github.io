
var a = [1,2,3,4,5,6,7,8,9,10]
console.log(a)

for (var i = 0; i<a.length;i++) {
	var rand = Math.random()
	rand*a.length;
	var idx = Math.floor(rand*10)
	//console.log(i+": " +idx);
	var temp =a[idx]
	a[i] = temp
	temp = a[i]
}
console.log(a)
var today = new Date();
console.log(today);
//console.log(today.toLocaleString());

if (today.getHours()>12) {
	console.log("Good afternoon hoe")
}
console.log(today.getHours())


