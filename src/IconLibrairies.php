<?php

namespace ianreid\iconlibrairies;

use Craft;
use craft\base\Plugin;

class IconLibrairies extends Plugin
{
   public string $schemaVersion = '1.0.0';

   public function init(): void
   {
      parent::init();

      // Alias for librairies phosphors
      Craft::setAlias('@heroicons', __DIR__ . '/icons/heroicons/');
      Craft::setAlias('@phosphor', __DIR__ . '/icons/phosphor/');

   }
}
