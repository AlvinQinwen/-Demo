<?php
/**
 * @name SamplePlugin
 * @desc Yaf瀹氫箟浜嗗涓嬬殑6涓狧ook,鎻掍欢涔嬮棿鐨勬墽琛岄『搴忔槸鍏堣繘鍏圕all
 * @see http://www.php.net/manual/en/class.yaf-plugin-abstract.php
 * @author 小王同学\小王同学
 */
class SamplePlugin extends Yaf_Plugin_Abstract {

	public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	}

	public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	}

	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	}

	public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	}

	public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	}

	public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	}
}
