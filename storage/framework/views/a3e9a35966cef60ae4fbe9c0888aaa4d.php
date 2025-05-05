<!-- Welcome Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
 
  

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <div class="welcome-page">
        <header class="main-header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo e(Auth::check() ? route('dashboard') : url('/')); ?>">My Project</a>
                </div>
                <nav class="nav-links">
                    <ul>
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                        <li><a href="<?php echo e(url('/Formation')); ?>">Formation</a></li>
                       
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                            <li>
                                <form action="<?php echo e(route('logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        <?php endif; ?>
                    /li>
                    </ul>
                </nav>
                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
        <main>
            <?php if(auth()->guard()->guest()): ?>
                <section>
                    <h2>Introduction</h2>
                    <p>This is the homepage of your project. Customize it as needed!</p>
                </section>
            <?php else: ?>
                <section>
                    <h2>Dashboard</h2>
                    <p>Welcome back, <?php echo e(Auth::user()->name); ?>! This is your dashboard.</p>
                </section>
            <?php endif; ?>
        </main>
        <footer>
            <p>&copy; <?php echo e(date('Y')); ?> My Project. All rights reserved.</p>
        </footer>
    </div>

    
</body>
</html><?php /**PATH C:\Users\pc\Desktop\ppp\myproject\resources\views/welcome.blade.php ENDPATH**/ ?>