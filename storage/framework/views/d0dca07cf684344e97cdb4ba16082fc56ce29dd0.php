<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
   <div class="main-menu-content">
   <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item <?php echo Nav::isRoute('cms.dashboard'); ?>">
         <a href="<?php echo url('/'); ?>"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('users'); ?>">
         <a href="<?php echo route('users.index'); ?>">
            <i class="far fa-users"></i><span class="menu-title">Users</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('cart'); ?>">
         <a href="<?php echo route('cart.index'); ?>">
            <i class="far fa-shopping-cart"></i><span class="menu-title">Cart</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('order'); ?>">
         <a href="<?php echo route('orders.index'); ?>">
            <i class="far fa-dollar-sign"></i><span class="menu-title">Orders</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('reviews'); ?>">
         <a href="<?php echo route('reviews.index'); ?>">
            <i class="far fa-stars"></i><span class="menu-title">Reviews</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('services'); ?>">
         <a href="<?php echo route('services.index'); ?>">
            <i class="far fa-bullhorn"></i><span class="menu-title">Services</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('menu'); ?>">
         <a href="<?php echo route('vendors.index'); ?>">
            <i class="far fa-user-friends"></i><span class="menu-title">Vendors</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('events'); ?>">
         <a href="<?php echo route('events.index'); ?>">
            <i class="far fa-calendar-alt"></i><span class="menu-title">Events</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('payments'); ?>">
         <a href="<?php echo route('payments.index'); ?>">
            <i class="fal fa-credit-card"></i><span class="menu-title">Payments</span>
         </a>
      </li>
      <li class="nav-item <?php echo Nav::isResource('category'); ?>">
         <a href="#"><i class="fal fa-sitemap"></i><span class="menu-title">Category</span></a>
         <ul class="menu-content">
            <li><a class="menu-item" href="<?php echo route('category.index'); ?>"><i></i><span>All Category</span></a></li>
            <li><a class="menu-item" href="<?php echo route('category.create'); ?>"><i></i><span>Add Category</span></a></li>
         </ul>
      </li>
      
      <li class="nav-item <?php echo Nav::isResource('resolution-center'); ?>">
         <a href="<?php echo url('resolution-center'); ?>">
            <i class="fal fa-check"></i><span class="menu-title">Resolution Center</span>
         </a>
      </li>
   </div>
</div>
<?php /**PATH C:\xampp\htdocs\projects\laravel\tupangeadmin\resources\views/partials/_menu.blade.php ENDPATH**/ ?>