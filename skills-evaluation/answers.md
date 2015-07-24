# Answers

1.)
As it's written this code will return an error for using $this while not in object context. $_someMember 
needs to be a static variable to be called in a static function like getSomethingStatic().

Here is the class rewritten:

class myClass
{
    protected static $_someMember;

    public function __construct()
    {
		self::$_someMember = 1;
    }

    public static function getSomethingStatic()
    {
		return self::$_someMember * 5;
    }
}

2.)
console.log(1 + 2 + 3)
6 - Because the log is displaying the sum of three integers.

console.log("1" +  "2" + "3");
123 - Because when dealing with strings the "+" operator acts as a concatenation operator. 

console.log( "A" - "B" + "2");
NaN2 - Because "A" and "B" are not numbers, so trying to subtract them like they are will produce a NaN (not a number).
The NaN will then be joined to the string "2" by the concatenation operator.  

console.log( "A" - "B" + 2);
NaN - Because "A" and "B" are not numbers, so trying to subtract them like they are will produce a NaN (not a number).
Trying to add the integer 2 to the NaN will just yield another NaN.

3.)
This query will not work because it is all one string. So it is looking for a record with an ID equal to the string
"$_POST[ 'id' ]", not the value which that variable represents. A better way to write this same query would be:

"SELECT * FROM table WHERE id = " . $_POST[ 'id' ]

4.)
$a = 15
$b = 4

5.)
The easiest way would be to split the large list into chunks, each with multiple entries in it. Then process a chunk at a time
instead of a single entry.

The revised code would look something like this:

var nextListItem = function(chunk_size = 100) {
	var cont = true;
	for(var i = 0; i < chunk_size; i++) {
		var item = list.pop();
		if (!item) {
			cont = false;
			break;
		}
	}
				
	if (cont) {
		// process the next chunk
		nextListItem();
	}
};