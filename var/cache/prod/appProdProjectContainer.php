<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU6gorgl\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU6gorgl/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerU6gorgl.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerU6gorgl\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerU6gorgl\appProdProjectContainer(array(
    'container.build_hash' => 'U6gorgl',
    'container.build_id' => '599078e4',
    'container.build_time' => 1527949426,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerU6gorgl');