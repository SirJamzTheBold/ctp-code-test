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

2.)  Given the following code, what is the value of ``` $a ``` and ``` $b ``` after the function and why?

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

3.) Why shouldn't we use the following SQL query?

```
"SELECT * FROM table WHERE id = $_POST[ 'id' ]"
```

4.)




5.)
