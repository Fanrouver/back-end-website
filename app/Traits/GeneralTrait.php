<?php

namespace App\Traits;
use Illuminate\Http\Request;
use App\Http\Controllers\API\FcmController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait GeneralTrait {
    private $imageMime = ['image/jpg', 'image/jpeg', 'image/png'];
    private $videoMime = ['video/*'];

    public function emptyStringToNull($string){
        if(trim($string) === ''){
            $string = null;
        }
        return $string;
    }

    public function emptyStringToZero($string){
        if(trim($string) === ''){
            $string = 0;
        }
        return $string;
    }

    public function allMimeTypes() {
        return array_merge($this->imageMime, $this->videoMime);
    }

    public function imageMimeTypes() {
        return implode(',', $this->imageMime);
    }

    public function videoMimeTypes() {
        return implode(',', $this->videoMime);
    }

    public function generateToken() {
        return bin2hex(openssl_random_pseudo_bytes(32));
    }

    public function getMimeType($file) {
        $arr = explode("/", $file->getMimeType());
        return $arr[0];
    }

    public function getActionKey($action) {
        $actionsList = config('consts.iPay88.actions');
        $exists = array_key_exists(config('consts.iPay88.actionKeys.'.(int) $action), $actionsList);
        
        if(!$exists) {
            return false;
        }

        $key = $actionsList[config('consts.iPay88.actionKeys.'.(int) $action)];
        
        if($key >= 0) {
            if(env('APP_ENV') == 'local') {
				return config('consts.iPay88.merchant');
            }
            
			return $key;
		}
        
        return false;
    }

    /**
	 * Send notification to all users (default)
	 */
	private function sendNotification($title, $body, $id, $action)
	{
		$request = new Request;
		$request['notification'] = [
            'body' => Str::limit(strip_tags($body), 150),
            'title' => $title,
            'sound' => 'default'
        ];
        $request['data'] = [
            'body' => strip_tags($body),
            'title' => $title,
			'action' => $action,
			'id' => $id
        ];
        $request['to'] = '/topics/all';
        $request['priority'] = 'high';
		$request['collapse_key'] = 'type_a';
        
		$fcm = new FcmController;
		$response = $fcm->sendNotification($request);
		return $response;
	}
}

?>
