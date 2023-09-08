<!--------w-----------

    Assignment 1: Intro to PHP
    Name: Qiaoran Xue
    Date: 2023-09-05
    Description: Website for the Random Gallery - lightbox.

--------------------->
<?php
    $config = [
        'gallery_name' => 'Random Gallery',
        'unsplash_categories' => ['Pink','Dog','Lego','Penguin'],
        'picture_urls' => ["<img src='https://source.unsplash.com/300x200/?pink' alt='pink image'>",
                                "<img src='https://source.unsplash.com/300x200/?dog' alt='dog image'>",
                                "<img src='https://source.unsplash.com/300x200/?lego' alt='lego image'>",
                                "<img src='https://source.unsplash.com/300x200/?penguin' alt='penguin image'>"],
        'local_images' => ['images/pink.jpg',
                            'images/dog.jpg',
                            'images/lego.jpg',
                            'images/penguins.jpg'],
        'photographers' => ['Gabrielle Henderson' => "http://unsplash.com/@gabriellefaithhenderson",
                            'Karsten Winegeart' => "http://unsplash.com/@karsten116",
                            'Kenny Eliason' => "http://unsplash.com/@neonbrand",
                            'Tam Minton'=> "http://unsplash.com/@tamwarnerminton"],
        'thumbnails' => ["<img src='images/pink_thumbnail.jpg' alt='Gabrielle Henderson'>",
                            "<img src='images/dog_thumbnail.jpg' alt='Karsten Winegeart'>",
                            "<img src='images/lego_thumbnail.jpg' alt='Kenny Eliason'>",
                            "<img src='images/penguins_thumbnail.jpg' alt='Tam Minton'>"]
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
</head>
<body> 
    <?php    
        echo "<h1>" . $config['gallery_name'] . "</h1>";
    
        echo "<div id='gallery'>";

        for($i=0; $i<count($config['local_images']); $i++)
        {
            echo "<div class='image'>";
            
                echo "<h2>" . array_keys($config['photographers'])[$i] . "</h2>";    
                
                echo "<a href='" . $config['local_images'][$i] . "'>";
                
                    echo $config['thumbnails'][$i];
                
                echo "</a>";
           
            echo "</div>";
        }
        echo "</div>";
    ?>
    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>
</body>
</html>