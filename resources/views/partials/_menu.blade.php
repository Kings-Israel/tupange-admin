<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
   <div class="main-menu-content">
   <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item {!! Nav::isRoute('cms.dashboard') !!}">
         <a href="{!! url('/') !!}"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>
      <li class="nav-item {!! Nav::isResource('users') !!}">
         <a href="{!! route('users.index') !!}">
            <i class="far fa-users"></i><span class="menu-title">Users</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('cart') !!}">
         <a href="{!! route('cart.index') !!}">
            <i class="far fa-shopping-cart"></i><span class="menu-title">Cart</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('order') !!}">
         <a href="{!! route('orders.index') !!}">
            <i class="far fa-dollar-sign"></i><span class="menu-title">Orders</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('reviews') !!}">
         <a href="{!! route('reviews.index') !!}">
            <i class="far fa-stars"></i><span class="menu-title">Reviews</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('services') !!}">
         <a href="{!! route('services.index') !!}">
            <i class="far fa-bullhorn"></i><span class="menu-title">Services</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('menu') !!}">
         <a href="{!! route('vendors.index') !!}">
            <i class="far fa-user-friends"></i><span class="menu-title">Vendors</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('events') !!}">
         <a href="#"><i class="fal fa-sitemap"></i><span class="menu-title">Events</span></a>
         <ul class="menu-content">
            <li>
               <a class="menu-item" href="{!! route('events.index') !!}">
                  <i class="far fa-calendar-alt"></i><span class="menu-title"> View Events</span>
               </a>
            </li>
            <li><a class="menu-item" href="{!! route('events.categories') !!}"><i class="far fa-calendar"></i><span> Event Categories</span></a></li>
            <li><a class="menu-item" href="{!! route('events.categories.create') !!}"><i class="far fa-calendar-solid"></i><span> Add Event Category</span></a></li>
         </ul>
      </li>
      <li class="nav-item {!! Nav::isResource('payments') !!}">
         <a href="#"><i class="fal fa-credit-card"></i><span class="menu-title">Payments</span></a>
         <ul>
            <li><a class="menu=-item" href="{{ route('payments.index') }}">Order Payments</a></li>
            <li><a class="menu=-item" href="{{ route('payments.events') }}">Event Payments</a></li>
         </ul>
      </li>
      <li class="nav-item {!! Nav::isResource('category') !!}">
         <a href="#"><i class="fal fa-sitemap"></i><span class="menu-title">Category</span></a>
         <ul class="menu-content">
            <li><a class="menu-item" href="{!! route('category.index') !!}"><i></i><span>All Category</span></a></li>
            <li><a class="menu-item" href="{!! route('category.create') !!}"><i></i><span>Add Category</span></a></li>
         </ul>
      </li>
      <li class="nav-item {!! Nav::isResource('resolution-center') !!}">
         <a href="{!! url('resolution-center') !!}">
            <i class="fal fa-check"></i><span class="menu-title">Resolution Center</span>
         </a>
      </li>
      <li class="nav-item {!! Nav::isResource('content') !!}">
         <a href="#"><i class="fal fa-sitemap"></i><span class="menu-title">Content</span></a>
         <ul class="menu-content">
            {{-- <li><a class="menu-item" href="{!! route('content.footer') !!}"><i></i><span>Footer Content</span></a></li> --}}
            <li><a class="menu-item" href="{!! route('content.about') !!}"><i></i><span>About Us Content</span></a></li>
            <li><a class="menu-item" href="{!! route('content.faqs') !!}"><i></i><span>FAQs Content</span></a></li>
         </ul>
      </li>
   </div>
</div>
