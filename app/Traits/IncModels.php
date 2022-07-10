<?php

namespace App\Traits;

use App\Models\{welcomeHeader, welcomeProject};

trait IncModels
{
    //
    public function __construct(welcomeHeader $welcomeHeader, welcomeProject $welcomeProject)
    {
        $this->welcomeHeader = $welcomeHeader;
        $this->welcomeProject = $welcomeProject;
    }
}
