<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYTV0pxx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYTV0pxx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYTV0pxx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYTV0pxx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYTV0pxx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YTV0pxx',
    'container.build_id' => '44cab158',
    'container.build_time' => 1569850447,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYTV0pxx');
