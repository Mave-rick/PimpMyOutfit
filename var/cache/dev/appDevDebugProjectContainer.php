<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH3jjufw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH3jjufw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerH3jjufw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerH3jjufw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerH3jjufw\appDevDebugProjectContainer(array(
    'container.build_hash' => 'H3jjufw',
    'container.build_id' => '92eb065b',
    'container.build_time' => 1527857651,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerH3jjufw');