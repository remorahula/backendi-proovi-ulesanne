<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZw9zYrv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZw9zYrv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZw9zYrv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZw9zYrv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZw9zYrv\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zw9zYrv',
    'container.build_id' => 'ae9a0878',
    'container.build_time' => 1607935143,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZw9zYrv');
