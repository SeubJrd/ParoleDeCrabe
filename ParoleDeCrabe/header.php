<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
  wp_head(); 
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body <?php body_class(); ?>>

	<header class="header headroom" style="background-image: url('<?= get_the_post_thumbnail_url($post_id) ?>')">


      <div class="header__menu mobile">
            <button class="header__btn">
              <span class="bar first"></span>
              <span class="bar second"></span>
              <span class="bar third"></span>
            </button>
        </div>
        <nav class="header__menu bureau" aria-label="Menu principal">
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 635.17 710"><defs></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M258.88,135.16a31.46,31.46,0,0,0-5.42-2.37c-16.39-5.61-57.07-17.32-118.25,62.44a38,38,0,0,0-2.34,3.45c-26.94-24.74-57-14-77.86-.22-5.08,3.36-2,11.45,4,10.45,33-5.49,44,23.36,51.7,35.4a5.9,5.9,0,0,1,.69,1.51c22.67,77.51,4.59,158.37-21.92,226.42-2.66,6.83,7.36,11.14,10.53,4.53C132.24,409.6,145.2,353,149,308.94a5.69,5.69,0,0,1,7.78-4.78,58.62,58.62,0,0,0,18.38,3.62,29,29,0,0,0,7.4-.63c24.08-4.69,60.17-12.14,92.19-74.92a27.89,27.89,0,0,0,1.54-3.53C285.48,204.37,293.66,155,258.88,135.16Zm-11.61,91.32a28.87,28.87,0,0,1-2,6.91c-8.66,20.32-19.15,69.22-68.15,43.58A33.62,33.62,0,0,1,160,255.69c-5.85-22.64-7.54-56.15,13.25-85.56a33.92,33.92,0,0,1,39.37-12.29C231.65,164.91,254,182.56,247.27,226.48Z"/><path class="cls-1" d="M552.13,560.52s-10.25-20.5-15.38-5.12c-5.13,35.88-25.63,51.26-46.14,61.51-71.77,15.38-210.18-174.29-215.3-189.67,51.26-51.26,51.26-82,51.26-102.53,0-51.26-82,10.26-92.27,10.26,0-56.39-71.77,25.63-71.77,25.63,5.12,10.25,41-5.13,41-5.13s0,179.42,10.25,184.55c15.38,0,15.38-61.52,15.38-61.52s0-15.38,10.25-15.38c169.17,199.93,230.69,174.3,246.07,169.17C577.76,581,552.13,560.52,552.13,560.52ZM236.84,356.67c14.69-16.45,46.26-47.41,56.94-23a27.15,27.15,0,0,1,2.11,9.74c.83,20.89,3.88,41.89-36,78.71-10.05,5.94-33.15-8.37-34.48-34.83C224.88,376,229.33,365.09,236.84,356.67Z"/><path class="cls-1" d="M93.09,157.23s-3.57-24.95,21.38-28.51C118,139.41,100.21,160.79,93.09,157.23Z"/><path class="cls-1" d="M110.9,110.9s0-28.5,24.95-24.94C135.85,93.09,135.85,107.34,110.9,110.9Z"/><path class="cls-1" d="M128.72,139.41s0-24.94,24.94-28.51C153.66,121.59,157.23,135.85,128.72,139.41Z"/><path class="cls-1" d="M538.52,535s-3.57-32.07-10.69-35.63c-3.57-3.56,3.56-17.82,14.25,0C542.08,502.88,545.64,517.14,538.52,535Z"/><path class="cls-1" d="M549.21,524.26s0-64.14,17.82-42.76c0,3.57,3.56,7.13-3.57,10.69C559.9,495.76,563.46,488.63,549.21,524.26Z"/><path class="cls-1" d="M552.77,535s7.13-35.63,28.51-35.63C584.84,502.88,584.84,517.14,552.77,535Z"/><rect class="cls-2" x="4" y="4" width="627.17" height="702" rx="29.56"/></g></g></svg>
                <?php
              
                wp_nav_menu( array(
                  'theme_location' => 'main-menu',
                  'container'      => false,
                  'menu_class'     => 'menu__list',
                 
                  'depth'          => 2
                ) );
                ?>

        </nav>

       

	</header>
    <main>
 