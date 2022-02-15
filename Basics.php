<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website
        echo "<br>";   

<!-- var_dump() function in PHP ------
        The var_dump() function is used to dump information about a variable.
         This function displays structured information such as type and value of the given variable. 
         Arrays and objects are explored recursively with values indented to show structure. 
         This function is also effective with expressions. -->




        <!-- This is PHP Syntax inside  -->
        <?php      
        

        // <!-- Declaring variable in php -->
        $variable = 34;
        $variable2 = 81;
        echo $variable;
        echo $variable2;

        // echo $variable + $variable2; 
        
         echo"Hello world and this is printed using php";
         echo "<br>";       
               
        // Operators in PHP ---->
        // 1. Arithmetic Operators
        // 2. Assignment Operators
        // 3. Comparison Operators
        // 4. Increment / Decrement Operators
        // 5. Logical Operators
    


        // 1. Arithmetic Operators
        echo "<h4> Arithmetic Operators </h4>";
        echo "The addition of variable 1 and variable 2 is ";
        echo $variable + $variable2;
        echo "<br>";  

        echo "The subtraction of variable 1 and variable 2 is ";
        echo $variable - $variable2;
        echo "<br>";  

        echo "The multiplication of variable 1 and variable 2 is ";
        echo $variable * $variable2;
        echo "<br>";  

        echo "The division of variable 1 and variable 2 is ";
        echo $variable / $variable2;
        echo "<br>";  

        echo "The modulus of variable 1 and variable 2 is ";
        echo $variable % $variable2;
        echo "<br>";


        // Assignment Operators
        echo "<h4> Assignment Operators </h4>";
        $newvar = $variable;
        echo "The value of new variable is ";
        echo $newvar;
        echo "<br>";

        $newvar += 1;
        echo "The value of new variable is ";
        echo $newvar;
        echo "<br>";

        $newvar -= 1;
        echo "The value of new variable is ";
        echo $newvar;
        echo "<br>";

        $newvar *= 8;
        echo "The value of new variable is ";
        echo $newvar;
        echo "<br>";

        $newvar /= 12;
        echo "The value of new variable is ";
        echo $newvar;
        echo "<br>";




        // Comparison Operators   Boolean Values  ----> True and False.
        echo "<h4> Comparison Operators </h4>";

        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";

        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
    
    
    
    // 4. Increment / Decrement Operators

    // Post increment and decrement --->
    echo "<h4> Incremnet and Decrement Operators Operators </h4>";

    echo $variable++;
    echo "<br>";
    echo $variable;
    

    echo $variable--;
    echo "<br>";
    echo $variable;
    

    // Pre increment and decrement
   
    echo ++$variable;
    echo "<br>";
    echo $variable;

    
    echo --$variable;
    echo "<br>";
    echo $variable;
    echo "<br>";


    // 5. Logical Operators
    
    // And(&&), Or(||), Xor, not(!)

    echo "<h4> Logical Operators </h4>";
    echo "<h5> Logical and </h5>";
    $myvar = (true and true);         // use and keyword or && sign
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (true and false);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (false and true);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (false and false);
    echo var_dump($myvar);
    echo "<br>";


    echo "<h5> Logical or </h5>";
    $myvar = (true or true);         // use or keyword or || sign
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (true or false);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (false or true);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (false or false);
    echo var_dump($myvar);
    echo "<br>";

    echo "<h5> Logical xor </h5>";          // use xor keyword only
    
    $myvar = (true xor true);       // this will return false
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (false xor false);     // this will also return false
    echo var_dump($myvar);
    echo "<br>";
    
    
    


    // Datatypes in PHP
    // string, int, float, boolean, array, object, NULL, resource
    echo "<h4> Datatypes in PHP </h4>";

    $var = "This is a string";
    echo var_dump($var);
    echo"<br>";

    $var = 17;
    echo var_dump($var);
    echo"<br>";

    $var = 17.10;
    echo var_dump($var);
    echo"<br>";

    $var = true;
    echo var_dump($var);
    echo"<br>";
    
    


    // Constants in PHP
    // A constant is an identifier (name) for a simple value. 
    // The value cannot be changed during the script.
    // A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    // Note: Unlike variables, constants are automatically global across the entire script.
    
    define ('pi',  3.14);       // Defining constant
    echo pi;
    ?>
</div>
</body>
</html> 