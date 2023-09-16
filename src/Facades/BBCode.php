<?php

namespace Agogeinc\BBCode\Facades;

use Illuminate\Support\Facades\Facade;

class BBCode extends Facade
{
    /***
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return 'bbcode-parser';
    }
}
