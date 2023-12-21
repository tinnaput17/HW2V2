<html>
    <body>
        <h1>This is PHP <?php 
        echo 'Hello world!<br><br>'; ?>
        <?php $var_a =""?>

        <div>
            <p>1</p>
            <?php
            $var_a =1;
            $var_a = "1 $var_a";
            print_r($var_a);
            echo "<br>";
            #var_dump($var_a);
            echo $var_a . "2";
            echo "<br>";
            $array =array();
            $array =[];
            $array[]=1;
            $array[]=2;
            $array[0]=3;
            print_r($array);
            //count
            //size_of
            for($i=0;$i<count($array);$i++)
            {
                echo"<h1>my h1 </h1>";
                ?>
                <p>2</p>
                <?php
            }
            ?>
            <p>3</p>
        </div>
</h>
</body>
</html>
