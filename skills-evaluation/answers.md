# Answers

1.) The function getSomethingStatic() is static which means it can't use $this because it wouldn'tbe defined uninstantiated.

2.)

6 because these are integers and the + opperator adds integers
"123" because these are strings and the + opperator adds strings
"NaN2" becase the minus opperator doesn't work with strings which evaluates to NaN which is then concatenated with the string "2"
NaN because the minus opperator doesn't work with strings and the + opperator can't work with a string and an integer

3.)MYSQL injection

4.)
$a = 15 because it's passed by reference and gets 11 added to it in the function
$b = 4 because that's what the function returned.

5.)
Let the execution path continue on with a setTimeout

var list = someBigList();

var nextListItem = function() {
    var item = list.pop();

    if (item) {
			// process the list item...
		setTimeout(function(){nextListItem()},1000);
			
    }
};