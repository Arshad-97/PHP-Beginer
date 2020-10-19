<html>

<head>
    <title>
        My first php page
    </title>
</head>

<body>
    This is html body

    <body>

        <?php
            //this is use for content ( single line commant //)
            /*and see that
            with apache (multy line commant)
            installl */
            echo "This is PHP body  ";
            
            $var="Arshad";
            echo $var;

            //math operators
            $number = 100;
            $b = 20;
            echo $number + $b;

            //Overwrite
            $number = 100;
            $number *= 20;
            echo $number;

            // conconconate
            $var1 = "tamil ";
            $var2 = "muslim ";

            echo $var1.$var2;

            $var3 = "tamil";
            $var3 .= "muslim ";

            echo $var3;

            // using html in php
            $var4 = "tamil </br>";
            $var4 .= "muslim ";

            echo "</br>".$var4;


        ?>
    </body>

</body>

</html>