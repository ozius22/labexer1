<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays and Superglobals</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="flex flex-col items-center justify-center h-screen w-screen bg-gradient-to-r from-purple-800 to-blue-800">
    <div class="w-full">
        <h1 class="text-center font-bold text-xl mb-10 text-white">D-I-Y Cake</h1>
        <?php
        $shape = array ('Heart', 'Rectangle','Square', 'Round');
        $flavor = array ('Chocolate', 'Vanilla', 'Lemon', 'Cheesecake');
        $toppings = array ('Cookies', 'Spun-sugar Flowers', 'Mini Chocolate Candies', 'Marshmallows');
        ?>

        <table class="w-full">
            <thead class="border border-white">
                <tr class="text-white">
                    <th class="border border-white px-4">Cake Shape</th>
                    <th class="border border-white px-4">Cake Flavor</th>
                    <th class="border border-white px-4">Cake Toppings</th>
                </tr>
            </thead>
            <tbody class="border-white border-b border-l">

            <?php
            foreach ($shape as $key => $cakeShape) {
                echo '<tr class="border-white ">';

                echo '<td class="border-r border-white px-4">';
                echo '<label class="cursor-pointer text-white hover:text-pink-500">';
                echo '<input class="cursor-pointer" type="radio" name="cake_shape" value="' . $cakeShape . '"> ' . $cakeShape;
                echo '</label>';
                echo '</td>'; 

                echo '<td class="border-r border-white px-4">';
                echo '<label class="cursor-pointer text-white hover:text-pink-500">';
                echo '<input class="cursor-pointer" type="radio" name="cake_flavor" value="' . $flavor[$key] . '"> ' . $flavor[$key];
                echo '</label>';
                echo '</td>'; 

                echo '<td class="border-r border-white px-4">';
                echo '<label class="cursor-pointer text-white hover:text-pink-500">';
                echo '<input class="cursor-pointer" type="radio" name="cake_topping" value="' . $toppings[$key] . '"> ' . $toppings[$key];
                echo '</label>';
                echo '</td>'; 

                echo '</tr>';
            }
            ?>        
            </tbody>
        </table>
            
    </div>
</body>
</html>