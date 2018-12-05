<ul>
    <?php   
        $urls  = array(
            'Home' => '/',
            'Work' => 'Work.php',
            'Resume' => 'resume.php'
        );

        foreach ($urls as $name => $url) {
            echo '<li><a href="'.$url.'">'.$name.'</a></li>';
        }
    ?>
</ul>