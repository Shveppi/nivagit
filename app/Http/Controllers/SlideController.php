<?php

namespace App\Http\Controllers;

use Validator;
use App\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class SlideController extends Controller
{

    /*

    Вывод всех слайдеров

    */
    public function index() {

        $slides = Slide::paginate(20);

        return view('pages.slide-list', compact('slides'));
        
    }

    /*

    Форма добавления слайда

    */
    public function create() {
    	return view('pages.slide-form');
    }



    /*

    Метод добавления слайда

    */
    public function store(Request $request) {

    	if(!$request->hasFile('pic')) {
    		return redirect()
    				->back()
    				->withErrors('Дружище, без картинки слайдер не слайдер, добавь пожалуйста картинку в поле фото')
    				->withInput();
        }
        
    	/*
    	 *
    	 * Logic
    	 *
    	 **/

		$rules = array(
			'pic' => 'image',
			'title' => 'required|unique:slides|max:255',
		);
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return redirect()
						->back()
                        ->withErrors($validator)
                        ->withInput();
		}

		else {
            $filepath = 'sliders/'.rand(11111,99999) . '.jpg'; // простая переменная с путем к папке и рандомным наименованием картинки.
            $image = Image::make($request->file('pic'));

            if($image->resize(	null,
                300,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->save( $filepath, 90 )) // Сохранение картинки размеры (ширина: авто, высота: 300)

            {

                $savePath = $filepath;

            } else {
                return redirect()
                    ->back()
                    ->withErrors('Дружище, не удалось сохранить картинку, попробуй еще раз')
                    ->withInput();
            }


		    $slide = new Slide();
            $slide->user_id = 1;
            $slide->title = $request->title;
            $slide->alttitle = Str::slug($request->title);
            $slide->description = $request->description;
            $slide->url = $request->url;
            $slide->user_id = 1;
            $slide->active = 1;
            $slide->published_at = \Carbon\Carbon::now();
            $slide->pic = $savePath;

            $slide->save();

            return redirect()
                        ->action('SlideController@index')
                        ->with( 'message', 'Вы добавили слайдер, просто умничко!' );
        } // else если прошла валидация

    }

    /*

    Вывод формы редактирования слайда

    */
    public function edit($slug) {

        $slide = Slide::where('alttitle', '=', $slug)->firstOrFail();

        return view('pages.slide-editform', compact('slide'));

    }

    /*

    Метод редактирования слайдера

    */
    public function update($slug, Request $request) {

    }

    /*

    Метод детального просотра слайдера

    */
    public function show($slug) {
        return 'Детальный просмотр слайда '.$slug;
    }

    public function destroy($slug) {

        //$eee = echo'удаление слайда '. $slug

        return 'удаление слайда '. $slug;
    }

}
