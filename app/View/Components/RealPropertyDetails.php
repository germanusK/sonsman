<?php

namespace App\View\Components;

use App\HttpService\HttpServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\View\Component;

class RealPropertyDetails extends Component
{

    private $http, $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HttpServiceProvider $provider, $id)
    {
        //
        $this->http = $provider;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $data = $this->http->getById($this->id)->collect();
        $related = $this->http->getRelatedProperty($this->id)->collect();

        return view('components.real-property-details', ['data'=>$data, 'related'=>$related]);
    }
}
