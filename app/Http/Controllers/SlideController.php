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

    public function __construct() {
        $this->middleware('isAdmin');
    }

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



		$rules = array(
			'pic' => 'required|image',
			'title' => 'required|max:255|unique:slides',
            'published_at' => 'required'
		);

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			return redirect()
						->back()
                        ->withErrors($validator)
                        ->withInput();
		} else {

            
            /*

            Готовим картинку

            */
            $slide = new Slide();
            $slide->fill($request->all());


            $filepath = 'sliderow/'.rand(11111,99999) . '.jpg';// Картинка
            $image = Image::make($request->file('pic'));
            $image->resize(	null,
                300,
                function ($constraint) {
                    $constraint->aspectRatio();
                });


            if( Storage::put( 'public/'. $filepath, (string)$image->encode() ) ) {


                $slide->user_id = \Auth::user()->id;
                $slide->alttitle = Str::slug($request->title);
                $slide->pic = $filepath;
                $slide->save();


                return redirect()
                            ->action('SlideController@index')
                            ->with( 'message', 'Вы добавили слайдер, просто умничко!' );

            } else {
                return redirect()
                            ->action('SlideController@index')
                            ->withErrors( 'Что-то не так, слайдер не добавился' );
            }

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

        $notPic = false; // Если не прислали картинку
        if(!$request->hasFile('pic')) {
            $notPic = true;
        }

        
        // Правила валидации
        if($request->title == $slide->title) { // Если заголовок не обновляли
            $rules = array(
                'pic' => 'image',
                'title' => 'required|max:255',
                'published_at' => 'required'
            );
        } else { // Если обновили заголовок
            $rules = array(
                'pic' => 'image',
                'title' => 'required|max:255|unique:slides',
                'published_at' => 'required'
            );
        }


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) { // Если ошибка валидации
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        else { // Успешная валидация

            
            $oldFilePic = 'public/'.$slide->pic;

            if($notPic === false) { // Если с формы приходит картинка

                $newPic = 'sliderow/' . rand(11111, 99999) . '.jpg'; // новая картинка
                $image = Image::make($request->file('pic'));
                $image->resize(null,
                    300,
                    function ($constraint) {
                        $constraint->aspectRatio();
                    });



                if ( Storage::put('public/'.$newPic, (string) $image->encode()) ) // Создаем картинку
                {

                    // Удаляем старую картинку если сохранили новую
                    if( Storage::disk('local')->exists($oldFilePic) ) {
                        Storage::delete($oldFilePic);
                    }

                    $slide->pic = $newPic;

                } else {
                    return redirect()
                        ->back()
                        ->withErrors('Дружище, не удалось сохранить картинку, попробуй еще раз')
                        ->withInput();
                }
            }


            $slide->fill($request->all());
            $slide->alttitle = Str::slug($request->title);

            $slide->save();

            return redirect()
                        ->action('SlideController@index')
                        ->with( 'message', 'Вы обновили слайдер, просто умничко!' );


        } // else если прошла валидация
    }





    /*

    Метод детального просмотра слайдера

    */
    public function show($slug) {
        return redirect()->action('SlideController@edit', ['slug' => $slug]);
    }




    /*

    Метод удаления слайдера

    */
    public function destroy($slug) {

        $slide = Slide::where('alttitle', '=', $slug)->firstOrFail();


        if( Storage::disk('local')->exists('public/'.$slide->pic) ) {
            if( Storage::delete('public/'.$slide->pic) )
                $messageEr = 'Слайдер успешно удален, вместе с картинкой!';
        }

        if($slide->delete()) {
            if(!isset($messageEr))
                $messageEr = 'Слайдер успешно удален, без картинки!';

            return redirect()
                    ->back()
                    ->with('message', $messageEr);
        }

    }




}
