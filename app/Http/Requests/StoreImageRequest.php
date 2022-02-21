<?php

namespace App\Http\Requests;

use App\Models\Image;
use Illuminate\Foundation\Http\FormRequest;

class StoreImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file'=>'required|image',
            'title'=>'nullable'
        ];
    }

    public function getData()
    {
        $data  = $this->validate() + [
            'user_id'=>1
        ];

        if ($this->hasFile('file')) {
            $directory = Image::makeDirectory();
            $data['file'] = $this->file->store($directory);

            $data['image'] = Image::getDimension($data['file']); 
        }

        return $data;
    }
}
