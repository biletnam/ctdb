<?php

Breadcrumbs::register('admin.ctdb.venue.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.ctdb.venues.management'), route('admin.ctdb.venue.index'));
});

Breadcrumbs::register('admin.ctdb.venue.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ctdb.venue.index');
    $breadcrumbs->push(__('labels.backend.ctdb.venues.create'), route('admin.ctdb.venue.create'));
});

Breadcrumbs::register('admin.ctdb.venue.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.venue.index');
    $breadcrumbs->push(__('menus.backend.ctdb.venues.view'), route('admin.ctdb.venue.show', $id));
});

Breadcrumbs::register('admin.ctdb.venue.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.venue.index');
    $breadcrumbs->push(__('menus.backend.ctdb.venues.edit'), route('admin.ctdb.venue.edit', $id));
});
