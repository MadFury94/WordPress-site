<?php
/*
Template Name: Landing Page
*/
get_header();
?>

<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 to-purple-600">
    <div class="bg-black rounded-lg shadow-lg p-8 max-w-lg w-full text-center">
        <h1 class="text-4xl font-bold mb-4 text-green-900">Welcome to My Landing Page</h1>
        <p class="text-lg text-gray-700 mb-6">This is a custom landing page built with Tailwind CSS in WordPress.</p>
        <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">Get Started</a>
    </div>
</div>

<?php get_footer(); ?>