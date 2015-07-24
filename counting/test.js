var arr = [1, 2, 3, 4];

var arrayLooper = function(arr, position) {
	if (position >= arr.length) {
		return;
	}

	setTimeout(function() {
		console.log(arr[position]);

		position++;
		
		arrayLooper(arr, position);
	}, 1000, position, arr);
}

arrayLooper(arr, 0);