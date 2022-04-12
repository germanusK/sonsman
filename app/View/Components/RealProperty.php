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

        $trending = $this->http->genericGetLatestTrending(['group'=>'RE'])->collect();
        $allProp = $this->http->genericGetProperty(['group'=>'RE'])->collect();

        $counts = [
            'stock size'=>$this->http->getPropertyCount(),
            'real estate'=>$this->http->genericGetPropertyCount(['group'=>'RE']),
            'current projects'=>$this->http->genericGetPropertyCount(['group'=>'CONS']),
            'architecture design'=>$this->http->genericGetPropertyCount(['group'=>'ARCH']),
            'General commerce'=>$this->http->genericGetPropertyCount(['group'=>'GC'])
        ];
        return view('components.real-property', ['trending'=>$trending, 'property'=>$allProp, 'counts'=>$counts]);
    }
}
