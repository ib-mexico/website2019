<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Library\Encryption;
use App\Library\Messages;
use App\Library\Errors;
use App\Library\FormatValidation;
use App\Library\Returns\ActionReturn;
use App\Library\Returns\AjaxReturn;

use App\Slider;

class SlidersController extends Controller
{
    public function index() {

        $lstSliders = Slider::where('deleted', 0)->get();

        return view('panel.contents.sliders.Index', ['lstSliders' => $lstSliders]);
    }

    public function create() {
        return view('panel.contents.sliders.Create');
    }

    public function store(Request $request) {
        $objReturn = new ActionReturn('panel/sliders/slider-crear', 'panel/sliders');

        if($request->file('image')) {

            $objSlider = new Slider();
            $objSlider->title        = $request['txtTitle'];
            $objSlider->body         = $request['txtBody'];
            $objSlider->status       = $request['rdEstatus'];
            $objSlider->url_redirect = $request['txtUrl'];

            //CARGA LA IMAGEN DEL POST
            $storage = Storage::disk('s3');
            $path = $storage->put('images', $request->file('image'), 'public');

            $objSlider->file = $path;
            try {
                if($objSlider->create()) {
                    $objReturn->setResult(true, Messages::SLIDERS_CREATE_TITLE, Messages::SLIDERS_CREATE_MESSAGE);
                } else {
                    $objReturn->setResult(false, Errors::SLIDERS_CREATE_02_TITLE, Errors::SLIDERS_CREATE_02_MESSAGE);
                }
            } catch(Exception $exception) {
                $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
            }            
        }
        else {
            $objReturn->setResult(false, Errors::SLIDERS_CREATE_01_TITLE, Errors::SLIDERS_CREATE_01_MESSAGE);
        }

        return $objReturn->getRedirectPath();
    }

    public function edit($pkSlider) {

        $return = redirect('panel/sliders');

        $objSlider = Slider::where('pk_slider', $pkSlider)->first();

        if($objSlider != null) {
            $return = view('panel.contents.sliders.Edit', ['objSlider' => $objSlider]);
        }

        return $return;
    }

    public function update(Request $request) {
        $objReturn = new ActionReturn('panel/sliders/slider-editar/'.$request['hddPkSlider'], 'panel/sliders');

        $objSlider = Slider::where('pk_slider', $request['hddPkSlider'])->first();

        if($objSlider != null) {

            $objSlider->title        = $request['txtTitle'];
            $objSlider->body         = $request['txtBody'];
            $objSlider->status       = $request['rdEstatus'];
            $objSlider->url_redirect = $request['txtUrl'];
            
            if($request->file('image')) {
                 //CARGA LA IMAGEN DEL SLIDER
                $storage = Storage::disk('s3');
                $path = $storage->put('images', $request->file('image'), 'public');

                $objSlider->file = $path;
            }            
           
            try {
                if($objSlider->update()) {
                    $objReturn->setResult(true, Messages::SLIDERS_EDIT_TITLE, Messages::SLIDERS_EDIT_MESSAGE);
                } else {
                    $objReturn->setResult(false, Errors::SLIDERS_EDIT_02_TITLE, Errors::SLIDERS_EDIT_02_MESSAGE);
                }
            } catch(Exception $exception) {
                $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
            }            
        } else {
            $objReturn->setResult(false, Errors::SLIDERS_EDIT_01_TITLE, Errors::SLIDERS_EDIT_01_MESSAGE);
        }        

        return $objReturn->getRedirectPath();
    }
}
