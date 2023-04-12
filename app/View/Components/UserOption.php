<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserOption extends Component
{

    public $user;
    public $selected;
    public $pill;
    public $agent;
    public $userID;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user, $selected = false, $pill = false, $agent = false, $userID = null)
    {
        $this->user = $user;
        $this->selected = $selected;
        $this->pill = $pill;
        $this->agent = $agent;
        $this->userID = $userID;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-option');
    }

}
