<?php

Breadcrumbs::register('admin.ctdb.genre.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.ctdb.genres.management'), route('admin.ctdb.genre.index'));
});

Breadcrumbs::register('admin.ctdb.genre.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ctdb.genre.index');
    $breadcrumbs->push(__('labels.backend.ctdb.genres.create'), route('admin.ctdb.genre.create'));
});

Breadcrumbs::register('admin.ctdb.genre.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.genre.index');
    $breadcrumbs->push(__('menus.backend.ctdb.genres.view'), route('admin.ctdb.genre.show', $id));
});

Breadcrumbs::register('admin.ctdb.genre.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.genre.index');
    $breadcrumbs->push(__('menus.backend.ctdb.genres.edit'), route('admin.ctdb.genre.edit', $id));
});
