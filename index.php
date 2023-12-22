
<!--
                In PHP Array have 3 Types

-   Index Array                - An array with numeric index. Value are store and accessed in linear way.
-   Associcative Array         - An array with string as index. This store element values in association with key values.
-   Multidimensional Array     - An array containing one or more arrays.
            -->
<?php
    // index array 
    $arr1 = array("Mini Cooper", "Swift", "Echo");
    print_r($arr1);
    // for beautiful code to view
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";
    // Add element of array there is basically two types
    $arr1[] = "Tata Nano";
    $arr1[0] = "Suzuki Alto K10";
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    // Associate Array 
    $arr2 = array(
        'Name' => 'Admino Joe',
        'Position' => 'Senior Developer',
        'Company' => 'Litweb',
        'Age' => 22,
        'Currently Working' => true,
        );
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    
    // Update Array
    $arr2['UID'] = "449f5562";
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    // Multidimenional Array
    $arr3 = array(
        'Name' => array(
            'First_Name' => "Admino",
            'Last_Name' => 'Joe',
        ),
        'Age' => 25,
        'Phone' => array("+91-71461 55664", "+91-98989 81563"),
        'Hobbies' => array("Code", "Sleep", "NightOut"),
    );
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";
    // Different Methord to make Array
    $arr4 = [1,2,3,4,5,6,7,8];
    echo "<pre>";
    print_r($arr4);
    echo "</pre>";
?>
<?php
    // Importanace of Array

    $car = array(
        0 => "Car0",
        1 => "Car1",
        2 => "Car2",
        3 => "Car3",
        4 => "Car4",
        5 => "Car5",
        6 => "Car6",
        7 => "Car7",
    );
    echo "<pre>";
    print_r($car);
    echo "</pre>";

    // Checking of Array 
    $x = 4;
    var_dump(is_array($x));
    var_dump(is_array($car));

    // Search of Array
    echo array_search('Car2', $car);


?>