<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class App extends Component
{
    public string $title;
    public array $profile;

    public function __construct(string $title = 'Portfolio', array $profile = [])
    {
        $this->title = $title;
        $this->profile = $profile;
    }

    public function render()
    {
        return view('layouts.app', [
            'title' => $this->title,
            'profile' => $this->profile,
        ]);
    }
}

