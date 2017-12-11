<?php

Breadcrumbs::register('admin.ctdb.company.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('labels.backend.ctdb.companies.management'), route('admin.ctdb.company.index'));
});

Breadcrumbs::register('admin.ctdb.company.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ctdb.company.index');
    $breadcrumbs->push(__('labels.backend.ctdb.companies.create'), route('admin.ctdb.company.create'));
});

Breadcrumbs::register('admin.ctdb.company.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.company.index');
    $breadcrumbs->push(__('menus.backend.ctdb.companies.view'), route('admin.ctdb.company.show', $id));
});

Breadcrumbs::register('admin.ctdb.company.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ctdb.company.index');
    $breadcrumbs->push(__('menus.backend.ctdb.companies.edit'), route('admin.ctdb.company.edit', $id));
});
