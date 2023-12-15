<?php 
      setcookie('color', $settings['color'], time()  - 1);
      setcookie('size', $settings['size'], time()  - 1);
      setcookie('font', $settings['font'], time()  - 1);

      header('location:accueil.php?');