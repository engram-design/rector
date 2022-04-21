<?php

declare(strict_types=1);

use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\ValueObject\MethodCallRename;

return static function(\Rector\Config\RectorConfig $rectorConfig): void {
    $rectorConfig
        ->ruleWithConfiguration(RenameMethodRector::class, [
            new MethodCallRename('craft\services\Plugins', 'doesPluginRequireDatabaseUpdate', 'isPluginUpdatePending'),
        ]);
};
