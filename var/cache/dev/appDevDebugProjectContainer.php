<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXz1s0eg\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXz1s0eg/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXz1s0eg.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXz1s0eg\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXz1s0eg\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xz1s0eg',
    'container.build_id' => 'b9edbd0c',
    'container.build_time' => 1529522711,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXz1s0eg');
