<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ifinity Strategic Business Solutions</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('aos/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>


</head>
<body>

     
             <nav class="navbar mx-auto d-flex justify-content-center mb-5">
                <ul class="navlist article_nav" id="navlist">
                    <li><a href="<?php echo e(url('/')); ?>" class="nav_link active">Home</a></li>
                    <li><a href="#about" class="nav_link">About us</a></li>
                    <li><a href="#services" class="nav_link">Services</a></li>
                    <li><a href="#contact" class="nav_link">Contact</a></li>
                </ul>

                <!-- Hamburger Icon -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
      
        <div class="container">
            <div class="row">
                
                <h1 class="article_title"><?php echo e($post->title); ?></h1>
                <h5 class="author" style="color: #c92b87"><?php echo e($post->author); ?><span class="date" style="color: #000; margin-left: 4px; "><?php echo e(\Carbon\Carbon::parse($post->published_at)->format('Y F d')); ?></span></h5>
                <div>
                    <div class="image">
                        <img src="<?php echo e(asset('storage/' .$post->image)); ?>" alt="Post Image">
                    </div>
                    <?php
                        echo $post->content;
                    ?>
                </div>
                                    
                
                       
                
            </div>
        </div>


        <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('aos/aos.js')); ?>"></script>
        <script src="<?php echo e(asset('js/main.js')); ?>" defer></script>
        <script>
            AOS.init({ duration: 1000, once: false });
        </script>
</body>
</html><?php /**PATH C:\Users\Manu\Documents\Web dev\Projects\IFINITY\infinityapp\resources\views/article.blade.php ENDPATH**/ ?>