<?php

Breadcrumbs::register('admin.ctdb.licensor.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.ctdb.licensors.management'), route('admin.ctdb.licensor.index'));
});

Breadcrumbs::register('admin.ctdb.licensor.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ctdb.licensor.index');
    $breadcrumbs->push(__('labels.backend.ctdb.licensors.create'), route('admin.ctdb.licensor.create'));
});

Breadcrumbs::register('admin.ctdb.licensor.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.licensor.index');
    $breadcrumbs->push(__('menus.backend.ctdb.licensors.view'), route('admin.ctdb.licensor.show', $id));
});

Breadcrumbs::register('admin.ctdb.licensor.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.licensor.index');
    $breadcrumbs->push(__('menus.backend.ctdb.licensors.edit'), route('admin.ctdb.licensor.edit', $id));
});
