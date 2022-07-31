<?php

namespace App\Http\ViewCompoaeres;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Traits\IncModels;
use Illuminate\View\View;

class MediaCompoaer extends Controller
{
    //
    use IncModels;
    //
    public function compose(View $view)
    {
        # code...
        return $view->with('media',Media::all());
    }
}
