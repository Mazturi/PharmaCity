<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9rvau9a\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9rvau9a/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9rvau9a.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9rvau9a\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container9rvau9a\appDevDebugProjectContainer(array(
    'container.build_hash' => '9rvau9a',
    'container.build_id' => '57d88553',
    'container.build_time' => 1537550349,
), __DIR__.\DIRECTORY_SEPARATOR.'Container9rvau9a');
