<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHNeM2Kr\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHNeM2Kr/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHNeM2Kr.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHNeM2Kr\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHNeM2Kr\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HNeM2Kr',
    'container.build_id' => 'bbe0d2bf',
    'container.build_time' => 1586873761,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHNeM2Kr');
