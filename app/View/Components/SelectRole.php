<?php

namespace App\View\Components;

use App\Models\Role;
use Illuminate\View\Component;

class SelectRole extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $options;

    public $name;

    public function __construct($name = null)
    {
        $this->name = $name;
        $this->options = $this->getOptions();
    }


    public function getOptions()
    {
        $options = [];
        
        foreach(Role::all() as $role){
            $options[] = ['id' => $role->id, 'value' => $role->name];
        }

        return $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.forms.select');
    }
}
