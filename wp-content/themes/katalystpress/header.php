<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists('wp_body_open') ) { wp_body_open(); } ?>
  <div class="min-h-screen flex flex-col">
  <header class="bg-white border-b">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8">
      <div class="flex lg:flex-1">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5 text-gray-900 font-semibold">
          <span class="sr-only"><?php bloginfo('name'); ?></span>
          <?php echo esc_html(get_bloginfo('name')); ?>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" id="mobile-menu-button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="h-6 w-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-8">
        <?php
          wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex items-center gap-x-8 text-sm font-semibold text-gray-900',
            'fallback_cb' => false,
          ]);
        ?>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-sm font-semibold text-gray-900">Contact us <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>

    <div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
      <div class="fixed inset-0 z-40 bg-black/20"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="-m-1.5 p-1.5 text-gray-900 font-semibold">
            <?php echo esc_html(get_bloginfo('name')); ?>
          </a>
          <button type="button" id="mobile-menu-close" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="h-6 w-6">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'flex flex-col',
              'link_before' => '<span class=\"block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50\">',
              'link_after' => '</span>',
              'fallback_cb' => false,
            ]);
          ?>
        </div>
      </div>
    </div>
  </header>
  <div id="site-content" class="flex-1">