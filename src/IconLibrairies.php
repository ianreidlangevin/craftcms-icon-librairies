<?php

namespace ianreid\iconlibrairies;

use Craft;
use craft\base\Plugin;

class IconLibrairies extends Plugin
{

   // Public Methods
   // --------------------------------------------------------------------------

   public function init()
   {
      parent::init();

      // Alias for librairies phosphors
      Craft::setAlias('@heroicons', __DIR__ . '/icons/heroicons/');
      Craft::setAlias('@phosphor', __DIR__ . '/icons/phosphor/');

   }
}
