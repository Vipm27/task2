<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1dbYjTh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1dbYjTh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1dbYjTh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1dbYjTh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1dbYjTh\App_KernelDevDebugContainer([
    'container.build_hash' => '1dbYjTh',
    'container.build_id' => '87cb8c25',
    'container.build_time' => 1678461875,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1dbYjTh');
