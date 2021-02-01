<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .category{
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
        overflow: hidden;
        margin-bottom: 10px;
    }
    .subcategory{
        width: 100%;
        background-color: green;
        color: white;
        text-align: center;
        overflow: hidden;
    }
    .items{
        margin-bottom: 20px;
        float: left;
        width: 33.33%;
        text-align: center;
    }
    button{
        margin-top: 10px;
        width: 40%;
        height: 7vh;
        background-color: #eb4034;
        color: #fcba03;
        font-size: 20px;
        border: 0;
        border-radius: 20px;
    }
    p{
        margin-top: 10px;
    }
    </style>
</head>
<body>
    <?php
        $products = array(
            "Electronics" => array(
                                "Television" => array(
                                                    array(
                                                        "id" => "PR001", 
                                                        "name" => "MAX-001",
                                                        "brand" => "Samsung"
                                                    ),
                                                    array(
                                                        "id" => "PR002", 
                                                        "name" => "BIG-301",
                                                        "brand" => "Bravia"
                                                    ),
                                                    array(
                                                        "id" => "PR003", 
                                                        "name" => "APL-02",
                                                        "brand" => "Apple"
                                                    )
                                                ),
                                "Mobile" => array(
                                                    array(
                                                        "id" => "PR004", 
                                                        "name" => "GT-1980",
                                                        "brand" => "Samsung"
                                                    ),
                                                    array(
                                                        "id" => "PR005", 
                                                        "name" => "IG-5467",
                                                        "brand" => "OnePlus"
                                                    ),
                                                    array(
                                                        "id" => "PR006", 
                                                        "name" => "IP-8930",
                                                        "brand" => "Apple"
                                                    )
                                                )
                            ),
            "Jewellery" => array(
                                "Earrings" => array(
                                                    array(
                                                        "id" => "PR007", 
                                                        "name" => "ER-001",
                                                        "brand" => "Chopard"
                                                    ),
                                                    array(
                                                        "id" => "PR008", 
                                                        "name" => "ER-002",
                                                        "brand" => "Mikimoto"
                                                    ),
                                                    array(
                                                        "id" => "PR009", 
                                                        "name" => "ER-003",
                                                        "brand" => "Bvlgari"
                                                    )
                                                ),
                                "Necklaces" => array(
                                                    array(
                                                        "id" => "PR010", 
                                                        "name" => "NK-001",
                                                        "brand" => "Piaget"
                                                    ),
                                                    array(
                                                        "id" => "PR011", 
                                                        "name" => "NK-002",
                                                        "brand" => "Graff"
                                                    ),
                                                    array(
                                                        "id" => "PR012", 
                                                        "name" => "NK-003",
                                                        "brand" => "Tiffany"
                                                    )
                                                )				
                        )
                                                    );
        foreach($products as $x => $x_value)
        {
            echo "<div><div class = 'category'><h1>".$x."</h1></div>";

            foreach($x_value as $y => $y_value)
            {
                $a = 0;
                echo "<div class = 'subcategory'><h2>".$y."</h2></div><br><br>";
                foreach($y_value as $z => $z_value)
                {
                    if($y == "Television")
                    {
                        if($a%3 == 0)
                        {
                            echo "<div class = 'items'><img src='tv.png' width = '200px' height = '150px'>";
                            $a++;
                        }
                        elseif($a%3 == 1)
                        {
                            echo "<div class = 'items'><img src='tv2.png' width = '200px' height = '150px'>";
                            $a++;
                        }
                        else
                        {
                            echo "<div class = 'items'><img src='tv3.png' width = '200px' height = '150px'>";
                            $a++;
                        }
                    }
                    elseif($y == "Mobile")
                    {
                        if($a%3 == 0)
                        {
                            echo "<div class = 'items'><img src='mobile3.png' width = '200px' height = '200px'>";
                            $a++;
                        }
                        elseif($a%3 == 1)
                        {
                            echo "<div class = 'items'><img src='mobile.png' width = '200px' height = '200px'>";
                            $a++;
                        }
                        else
                        {
                            echo "<div class = 'items'><img src='mobile2.png' width = '200px' height = '200px'>";
                            $a++;
                        }
                    }
                    elseif($y == "Earrings")
                    {
                        if($a%3 == 0)
                        {
                            echo "<div class = 'items'><img src='earrings.png' width = '200px' height = '200px'>";
                            $a++;
                        }
                        elseif($a%3 == 1)
                        {
                            echo "<div class = 'items'><img src='earrings2.png' width = '200px' height = '200px'>";
                            $a++;
                        }
                        else
                        {
                            echo "<div class = 'items'><img src='earrings3.png' width = '200px' height = '200px'>";
                            $a++;
                        }
                    }
                    else{
                        if($a%3 == 0)
                        {
                            echo "<div class = 'items'><img src='necklace.png' width = '300px' height = '250px'>";

                            $a++;
                        }
                        elseif($a%3 == 1)
                        {
                            echo "<div class = 'items'><img src='necklace2.png' width = '300px' height = '250px'>";

                            $a++;
                        }
                        else
                        {
                            echo "<div class = 'items'><img src='necklace3.png' width = '300px' height = '250px'>";

                            $a++;
                        }
                    }
                   foreach($z_value as $i => $i_value)
                   {
                      echo "<p>".$i_value."</p>";
                   }
                   echo "<button>ADD TO CART</button></div>";
                }
            }
            echo "</div><br><br>";
        };
        
    ?>
</body>
</html>