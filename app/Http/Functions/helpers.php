<?php

use Illuminate\Database\Eloquent\Model;


if (! function_exists('_file_delete')){
    /**
     * Diskden file sime
     *
     * @param $file
     * @param string $disk
     * @param null $path
     */
    function _file_delete($file, $disk = 'uploads',$path = null){
        //dd($file);
        if (Storage::disk($disk)->exists($path.$file)){
            Storage::disk($disk)->delete($path.$file);
        }
    }
}

if (! function_exists('api_response_array')){
    /**
     *
     *
     * @return mixed
     */
    function api_response_array(){

        $result['Response'] = [
            'status' => [
                'code' => 400,
                'description' => __('api.bad request')
            ]
        ];

        return $result;
    }
}


if (! function_exists('langs_get_code_name')){
    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Aktiv dilleri code=>name seklinde geri donderir
     * @return array
     */
    function langs_get_code_name(){
        return \App\Models\Language::getCodeName();
    }
}

if (! function_exists('getFillable')){

    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Model filable deyerini geri donerir ve yeni flable deyeri elave eder
     * @param $model
     * @param mixed ...$column
     * @return array
     */
    function getFillable(Model $model,...$column){
        $filable = $column ? array_merge($model->getFillable(), $column) : $model->getFillable();
        return $filable;
    }
}

if (! function_exists('getTranslateFillable')){

    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Model translate filable deyerini geri donerir ve yeni flable deyeri elave eder
     * @param $model
     * @param mixed ...$column
     * @return array
     */
    function getTranslateFillable(Model $model,...$column){
        $filable = $column ? array_merge($model->translatedAttributes, $column) : $model->translatedAttributes;
        return $filable;
    }
}


if (! function_exists('column_active')){
    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Bu funksiya tablolarin hader qisminde sort islemine gore column renglendirir
     * @param string $column
     * @return string
     */
    function column_active($column = 'id'){
        $query = request()->query();
        $q_column = array_key_exists('column',$query) ? $query['column'] : 'id';
        return ($q_column == $column) ? 'text-warning' : '';
    }
}

if (! function_exists('sort_url')){
    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Sorter urlsı düzeldir..
     * @param $column
     * @return string
     */
    function sort_url($column){

        $query = request()->query();

        $url = request()->url()."?";

        $query['column'] = $column;


        if (array_key_exists('order', $query)){

            $query['order'] = $query['order'] == 'ASC' ? 'DESC' : 'ASC';

        }else{
            $query['order'] = 'ASC';
        }

        foreach ($query as $key=>$value){
            $url .=$key ? "&".$key."=".$value : $key."=".$value;
        }

        return $url;
    }
}



if (! function_exists('app_config')){

    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Bu funksiya config funkiyasidir proje ayarlarini bunla cagira bilerik
     * @param $key
     */
    function app_config($key){

        $app_config = \App\Models\AppConfig::where('key',$key)->first();

        return $app_config ? $app_config->value : null;
    }
}


if (! function_exists('_sessionmessage')){

    /**
     * Rauf Abbas
     * rafo.abbas@gmail.com
     * Proses sonunda withle bu funksiyani dondere bilerik.
     * @param null $message
     * @return array
     */
    function _sessionmessage($title = null,$message = null,$type = null,$reload = false, $reloadtime = 800){

        $arr = [
            'title' => $title ?? _('Title'),
            'message' => $message ? $message : _('The operation was successful.'),
            'type'    => $type ?? 'success',
            'localtionreload'  => $reload,
            'reloadtime'    => $reloadtime
        ];

        return $arr;
    }
}

if (! function_exists('get_setting')) {
    function get_setting($key = null) {
        $setting = \App\Models\Setting::where('key', $key)->first();
        if($setting)
        {
            return $setting->value;
        }
        return false;
    }
}
