<?php

namespace App\Http\Controllers;

use Validator;
use App\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{

    /*

    Вывод всех слайдеров

    */
    public function index() {

        $slides = Slide::paginate(20);

        return view('slides.slide-list', compact('slides'));
        
    }

    /*

    Форма добавления слайда

    */
    public function create() {
    	return view('slides.create');
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
			'title' => 'required|max:255',
		);
		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return redirect()
						->back()
                        ->withErrors($validator)
                        ->withInput();
		}

		else {

            
            /*

            Готовим картинку

            */
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


            /*

            Сохраняем

            */
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

        return view('slides.edit', compact('slide'));

    }

    /*

    Метод редактирования слайдера

    */
    public function update($slug, Request $request) {


        $slide = Slide::where('alttitle', '=', $slug)->firstOrFail();


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
            'title' => 'required|max:255',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        else {

            
            /*

            Готовим картинку

            */
            $filepath = 'sliders/'.rand(11111,99999) . '.jpg'; //переменная с путем и именем картинки

            $image = Image::make($request->file('pic'));

            if( $image->resize(  null,
                300,
                function ($constraint) {
                    $constraint->aspectRatio();
                })->save( $filepath, 90 ) ) // Сохранение картинки размеры (ширина: авто, высота: 300)

            {

                $savePath = $filepath; // Путь для новой картинки

                // Удаляем старую картинку
                $deletePic = $slide->pic;

                Storage::delete($slide->pic);



            } else {
                return redirect()
                    ->back()
                    ->withErrors('Дружище, не удалось сохранить картинку, попробуй еще раз')
                    ->withInput();
            }


            /*

            Сохраняем

            */
            
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
                        ->with( 'message', 'Вы обновили слайдер, просто умничко!<br />Удалена картинка'. $deletePic );
        } // else если прошла валидация
    }







    /*

    Метод детального просотра слайдера

    */
    public function show($slug) {
        return redirect()->action('SlideController@edit', ['slug' => $slug]);
    }



    public function destroy($slug) {

        $slide = Slide::where('alttitle', '=', $slug)->firstOrFail();


        return dd( Storage::get('sliders/35476.jpg') );
    }

}
