<?php
/**
 * Created by PhpStorm.
 * User: justinwang
 * Date: 3/3/18
 * Time: 1:53 AM
 */

if(!function_exists('_buildUploadFolderPath')){
    /**
     * 为了避免在单一的目录中保存太多文件,因此根据时间创建目录的路径
     * @return string
     */
    function _buildUploadFolderPath(){
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        return 'uploads/'.$year.'/'.$month.'/'.$day;
    }
}

if(!function_exists('_buildFrontendAssertPath')){
    /**
     * 根据保存路径获取Media的前端路径,用来保存到数据库中. 因为 public 目录中依赖 storage symbol Link
     * @param $uploadFolderPath
     * @return string
     */
    function _buildFrontendAssertPath($uploadFolderPath){
        return '/storage/'.$uploadFolderPath;
    }
}

if(!function_exists('_isAFakeMediaId')){
    /**
     * 判断是否给定的 id 对于Media来说是假的,不可能存在的ID
     * @param $id
     * @return bool
     */
    function _isAFakeMediaId($id){
        return strlen($id) == 16;
    }
}

if(!function_exists('_get_frontend_theme_prefix')){


    function _get_frontend_path($path){
        // 检查文件是否存在
        $filename = resource_path('views/frontend/').str_replace('.','/',$path).'.blade.php';

        $finalPath = 'frontend.'.$path;
        if(file_exists($filename)){
            $finalPath = 'frontend.'.$path;
        }

        if(env('APP_DEBUG', false)){
            // Log layout path file if in APP_DEBUG mode
            \Illuminate\Support\Facades\Log::info('Theme: '.$path, ['location'=>$finalPath]);
        }

        return $finalPath;
    }

    /**
     * 获得前端的主题文件路径
     * @param $path
     * @return string
     */
    function _get_frontend_layout_path($path){
    /*  $filename = resource_path('views/layouts/').str_replace('.','/',_get_frontend_layout_prefix()).'/'.str_replace('.','/',$path).'.blade.php';

        $finalPath = 'layouts.'.$path;
        if(file_exists($filename)){
            if(strlen(_get_frontend_layout_prefix()) > 0){
                $finalPath = 'frontend.'._get_frontend_layout_prefix().'.layouts.'.$path;
            }
        */
        $filename = resource_path('views/frontend/layouts/').str_replace('.','/',$path).'.blade.php';
        $finalPath = 'layouts.'.$path;
        if(env('APP_DEBUG', false)){
            // Log layout path file if in APP_DEBUG mode
            \Illuminate\Support\Facades\Log::info('Layout: '.$path, ['location'=>$finalPath]);
        }
        $finalPath = 'frontend.'.'layouts.'.$path;
        return $finalPath;
    }

    function _get_frontend_element($path){
        // 检查文件是否存在
        $filename = resource_path('views/frontend/elements').str_replace('.','/',$path).'.blade.php';

        $finalPath = 'frontend.elements.'.$path;
        if(file_exists($filename)){
            $finalPath = 'frontend.elements.'.$path;
        }

        if(env('APP_DEBUG', false)){
            // Log layout path file if in APP_DEBUG mode
            \Illuminate\Support\Facades\Log::info('Theme: '.$path, ['location'=>$finalPath]);
        }

        return $finalPath;
    }
}

if(!function_exists('_get_backend_theme_prefix')){

    function _get_backend_path($path){
        // 检查文件是否存在
        $filename = resource_path('views/backend/').str_replace('.','/',$path).'.blade.php';

        $finalPath = 'backend.'.$path;
        if(file_exists($filename)){
            $finalPath = 'backend.'.$path;
        }

        if(env('APP_DEBUG', false)){
            // Log layout path file if in APP_DEBUG mode
            \Illuminate\Support\Facades\Log::info('Backend: '.$path, ['location'=>$finalPath]);
        }

        return $finalPath;
    }

    /**
     * 获得后台的主题文件路径
     * @param $path
     * @return string
     */
    function _get_backend_layout_path($path){
        $filename = resource_path('views/backend/layouts/').str_replace('.','/',$path).'.blade.php';
        $finalPath = 'layouts.'.$path;
        if(env('APP_DEBUG', false)){
            // Log layout path file if in APP_DEBUG mode
            \Illuminate\Support\Facades\Log::info('Layout: '.$path, ['location'=>$finalPath]);
        }
        $finalPath = 'backend.'.'layouts.'.$path;
        return $finalPath;
    }


}

if(!function_exists('_getVerifyStatus')){
    /**
     * 一个全局的用于检验相关对象是否经过管理员认证过的方法
     * @param int $type
     * @param int $target_id
     * @return boolean
     */
    function _getVerifyStatus(int $type, int $target_id){
        $management = \App\Model\Suppliers\SupplierManagement::where('type',$type)->where('target_id',$target_id)->first();
        if($management==null){
            $management = \App\Model\Suppliers\SupplierManagement::create(['type'=>$type,'target_id'=>$target_id,'status'=>0]);
            return $management->status;
        }else{
            return $management->status;
        }
    }
}

if(!function_exists('_checkSupplierLogin')){
    /**
     * 一个全局的用于检验Supplier是否登录了的方法
     * @return boolean
     */
    function _checkSupplierLogin(){
       $user = session()->get('user_data');
       if($user !== null && $user['type'] == 'supplier'){
           return true;
       }else{
           return false;
       }
    }
}
