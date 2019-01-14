<?php

namespace App\Http\Middleware;
use Validator;
use Closure;

class ValidatePostRequest
{
    public function validateRequest($request){
        //validate goes here
        $rules=[
            'title'=>'required',
            'content'=>'required|max:255|min:100',
        ];
        $validator=Validator::make(
            $request->all()
            ,$rules
        );

        if ($validator->fails()){

            return back()
                ->withErrors($validator)->withInput();

        }

    }
    public function handle($request, Closure $next)
    {
        self::validateRequest($request);
        return $next($request);
    }
}