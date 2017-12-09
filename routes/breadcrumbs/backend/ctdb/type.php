<?php

Breadcrumbs::register('admin.ctdb.type.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.ctdb.types.management'), route('admin.ctdb.type.index'));
});

Breadcrumbs::register('admin.ctdb.type.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ctdb.type.index');
    $breadcrumbs->push(__('labels.backend.ctdb.types.create'), route('admin.ctdb.type.create'));
});

Breadcrumbs::register('admin.ctdb.type.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.type.index');
    $breadcrumbs->push(__('menus.backend.ctdb.types.view'), route('admin.ctdb.type.show', $id));
});

Breadcrumbs::register('admin.ctdb.type.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.type.index');
    $breadcrumbs->push(__('menus.backend.ctdb.types.edit'), route('admin.ctdb.type.edit', $id));
});
