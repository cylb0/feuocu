<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQnI309x\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQnI309x/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerQnI309x.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerQnI309x\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerQnI309x\App_KernelProdContainer([
    'container.build_hash' => 'QnI309x',
    'container.build_id' => 'f4f7ca23',
    'container.build_time' => 1693914289,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQnI309x');