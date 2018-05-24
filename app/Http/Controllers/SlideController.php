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



    public function showForm() {
    	return view('pages.gallery-form');
    }




    public function create(Request $request) {

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
            $filepath = 'slide/'.rand(11111,99999) . '.jpg'; // простая переменная с путем к папке и рандомным наименованием картинки.
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
            $slide->church = $request->church;
            $slide->user_id = 1;
            $slide->active = 1;
            $slide->published_at = \Carbon\Carbon::now();
            $slide->pic = $savePath;

            $slide->save();

			return redirect()
						->back()
						->with( 'message', 'Вы добавили слайдер, просто умничко!' );
		} // else если прошла валидация

    }


}
