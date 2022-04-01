<?php

namespace App\View\Components;

use App\HttpService\HttpServiceProvider;
use Illuminate\View\Component;

class RealProperty extends Component
{

    public $http;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HttpServiceProvider $provider)
    {
        //
        $this->http = $provider;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $trending = $this->http->getLatestTrendingProperty()->collect();
        $allProp = $this->http->getProperty()->collect();
        return view('components.real-property', ['trending'=>$trending, 'property'=>$allProp]);
    }
}
