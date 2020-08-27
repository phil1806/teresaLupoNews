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
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;



    /**
     * type: function
     * nom: setupReorderOperation
     * Desc: permet implementer le réorder des news dans Admin 
     */

    protected function setupReorderOperation()
    {
        // define which model attribute will be shown on draggable elements 
        $this->crud->set('reorder.label', 'title');
        
        //definir le nombre d'inbrecation => mettre 0 pour l'infinie
        $this->crud->set('reorder.max_level', 1);
    }


    /**
     * Configure the CrudPanel object. Apply settings to all operations.
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
            'aspect_ratio' =>-1,
            'disk'      => 'uploads', 
            'prefix'    => 'uploads/images' 
        ]);
        // Ajourt du champ Date
            $this->crud->addField([   
            'name'  => 'dateDuJour',
            'label' => 'Date of days',
            'type'  => 'date'
        ]);

        // Ajourt du champ title
        $this->crud->addField([
            'name'  => 'title',
            'label' => 'Title',
            'type'  => 'text'

        ]);

        // Ajourt du champ description
        $this->crud->addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'textarea'

        ]);


        // Ajourt du champ content sous le format TinyMCE
        $this->crud->addField([
            'name'  => 'content',
            'label' => 'Description',
            'type'  => 'tinymce'
                
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
