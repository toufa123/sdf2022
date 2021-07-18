<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Country;
use MuhammadInaamMunir\SpeedAdmin\Http\Controllers\SpeedAdminBaseController;


class CountryController extends SpeedAdminBaseController
{
    protected $model = Country::class;
    protected $index_url = 'admin/country';
}

