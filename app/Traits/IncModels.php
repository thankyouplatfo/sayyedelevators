<?php

namespace App\Traits;

use App\Models\{welcomeHeader, welcomeProject, WelcomeAbout,User};

trait IncModels
{
    //
    public function __construct(welcomeHeader $welcomeHeader, welcomeProject $welcomeProject, WelcomeAbout $welcomeAbout, User $user)
    {
        $this->welcomeHeader = $welcomeHeader;
        $this->welcomeProject = $welcomeProject;
        $this->welcomeAbout = $welcomeAbout;
        $this->user = $user;
    }
}
