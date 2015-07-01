# Evaluation

Please reply in the attached answers.md file.

1.) What is wrong with the following block of code?

```
class myClass
{
    protected $_someMember;

    public function __construct()
    {
        $this->_someMember = 1;
    }

    public static function getSomethingStatic()
    {
        return $this->_someMember * 5;
    }
}

```

2.) What will the following lines output to the console and why?

```
console.log(1 + 2 + 3);
console.log(+"1" +  "2" + "3");
console.log( "A" - "B" + "2");
console.log( "A" - "B" + 2);
```

3.) Why shouldn't we use the following SQL query?

```
"SELECT * FROM table WHERE id = $_POST[ 'id' ]"
```

4.) Given the following code, what is the value of ``` $a ``` and ``` $b ``` after the function and why?

```

function myFunction( &$arg )
{
    $return = $arg;
    $arg += 11;
    return $return;
}

$a = 4;
$b = myFunction( $a );

```

5.) The following code would cause a stack overflow if the array is to big. What small change could you make that would prevent the stack overflow while keeping it recursive?

```
var list = someBigList();

var nextListItem = function() {
    var item = list.pop();

    if (item) {
        // process the list item...
        nextListItem();
    }
};

```
