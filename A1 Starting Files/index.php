<!--------w-----------

    Assignment 1: Intro to PHP
    Name: Qiaoran Xue
    Date: 2023-09-05
    Description: Website for the Random Gallery.

--------------------->
<?php
    $config = [
        'gallery_name' => 'Random Gallery',
        'unsplash_categories' => ['Pink','Dog','Lego','Penguin'],
        'picture_urls' => ["<img src='https://source.unsplash.com/300x200/?pink' alt='pink image'>",
                                "<img src='https://source.unsplash.com/300x200/?dog' alt='dog image'>",
                                "<img src='https://source.unsplash.com/300x200/?lego' alt='lego image'>",
                                "<img src='https://source.unsplash.com/300x200/?penguin' alt='penguin image'>"],
        'local_images' => ["<img src='images/pink.jpg' alt='Gabrielle Henderson'>",
                            "<img src='images/dog.jpg' alt='Karsten Winegeart'>",
                            "<img src='images/lego.jpg' alt='Kenny Eliason'>",
                            "<img src='images/penguins.jpg' alt='Tam Minton'>"],
        'photographers' => ['Gabrielle Henderson' => "http://unsplash.com/@gabriellefaithhenderson",
                            'Karsten Winegeart' => "http://unsplash.com/@karsten116",
                            'Kenny Eliason' => "http://unsplash.com/@neonbrand",
                            'Tam Minton'=> "http://unsplash.com/@tamwarnerminton"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Gallery</title>
    <?php
        echo "<link rel='stylesheet' href='" . "main.css" . "'>";
    ?>
</head>
<body> 
    <?php
        echo "<h1>" . $config['gallery_name'] . "</h1>";
    
        echo "<div id='gallery'>";
        
        for($i=0; $i<count($config['unsplash_categories']); $i++)
        {
            echo "<div><h2>{$config['unsplash_categories'][$i]}</h2> {$config['picture_urls'][$i]}</div>";
        }
        echo "</div>";
    ?>
       
    <?php
        echo "<h1>" . count($config['local_images']) . " Large Images" . "</h1>";
        
        echo "<div id='large-images'>";

        for($i=0; $i<count($config['local_images']); $i++)
        {
            echo $config['local_images'][$i];
           
            echo "<h3 class= 'photographer'>";

                echo "<a href='" .array_values($config['photographers'])[$i] . "'>";

                  echo array_keys($config['photographers'])[$i];

                echo "</a>";

            echo "</h3>";
        }
        echo "</div>";
    ?>
</body>
</html>