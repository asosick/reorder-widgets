<?php

// config for Asosick/ReorderWidgets
use Asosick\ReorderWidgets\Http\Livewire\ReorderComponent;
use Asosick\ReorderWidgets\Pages\ReorderPage;

return [
    'ReorderComponent' => ReorderComponent::class,
    'RorderPage' => ReorderPage::class,
    'default_settings' => [
        'components' => [],
        'selectOptions' => [],
        'gridColumns' => 2,
        'showEditButton' => 2,
    ],
    'buttons' => [
        'save' => [
            'inline' => 'outlined color="danger" icon="heroicon-m-bookmark-square"',
            'text' => 'Save Layout',
        ],
    ],
];
