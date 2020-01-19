<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Kris\LaravelFormBuilder\FormBuilder;

abstract class AbstractController extends Controller
{

    protected $template = 'index';
    protected $route = '';
    protected $perPage = 12;
    /**
     * @var FormBuilder
     */
    protected $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {

        $this->formBuilder = $formBuilder;
    }


    public function index(){

        $this->results['user'] = Auth::user();
        $this->results['tenant'] = get_tenant();

        if($this->model){

            $this->results['rows'] = $this->getSource()->paginate($this->perPage);
        }

        return view($this->template, $this->results);
    }



}
