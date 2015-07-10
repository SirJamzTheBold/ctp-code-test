var arr = [1, 2, 3, 4];

var interval = setInterval( function(){
	console.log(arr.shift());
	if(arr.length==0){
		clearInterval(interval);
	}
}, 1000 );