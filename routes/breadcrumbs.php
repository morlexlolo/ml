<?php

// Home

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', route('about.index'));
});
// Home > Contact
Breadcrumbs::for('contact-ml-godi', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact.index'));
});

// Home > Music
Breadcrumbs::for('music', function ($trail) {
    $trail->parent('home');
    $trail->push('music', route('music.index'));
});

// Home > Video
Breadcrumbs::for('video', function ($trail) {
    $trail->parent('home');
    $trail->push('videos', route('video.index'));
});

// Home > Music
Breadcrumbs::for('photo', function ($trail) {
    $trail->parent('home');
    $trail->push('gallery', route('photo.index'));
});
