<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsCrudController
 */
class NewsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');

        // ajout du champ image
        $this->crud->addField([
            'label' => "News Image",
            'name' => "image",
            'type' => 'image',
            'crop' => true, 
            'aspect_ratio' => 0,
            'disk'      => 'uploads', 
            'prefix'    => 'uploads/images' 
        ]);
    // Date
            $this->crud->addField([   
            'name'  => 'dateDuJour',
            'label' => 'Date of days',
            'type'  => 'date'
        ]);

    
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

       
    }

    /**
     * Define what happens when the Create operation is loaded.
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(NewsRequest::class);

        CRUD::setFromDb(); // fields

       
    }

    /**
     * Define what happens when the Update operation is loaded.
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
