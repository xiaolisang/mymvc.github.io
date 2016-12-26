<?php 
namespace core\lib;

class config
{
	/**
	 * 1.判断文件是否存在
	 * 2.判断配置时候存在
	 * 3.缓存配置信息
	 */
	
	//定义数组缓存配置
	static public $conf=array();

	//获取配置某一项信息
	static public function get($name,$file)
	{
		//首先判断文件是否缓存
		if (isset(self::$conf[$file])) {

			//如果文件已缓存
			return self::$conf[$file][$name];

		}else{
			//p(1);
			//判断配置文件是否存在
			$path=ROOT."/core/config/".$file.".php";
			if (is_file($path)) {

				$conf=include $path;

				//判断配置是否存在
				if (isset($conf[$name])) {

					//缓存配置
					self::$conf[$file]=$conf;
					return $conf[$name];
				}else{
					throw new  \Exception('没有配置项'.$name);
				}
			}else{
				throw new  \Exception('找不到配置文件'.$file);
			}
		}	
	}


	//获取配置全部信息
	static public function all($file)
	{
		//首先判断文件是否缓存
		if (isset(self::$conf[$file])) {

			//如果文件已缓存
			return self::$conf[$file];

		}else{
			//p(1);
			//判断配置文件是否存在
			$path=ROOT."/core/config/".$file.".php";
			if (is_file($path)) {

				$conf=include $path;

				//缓存配置
				self::$conf[$file]=$conf;
				return $conf;

			}else{
				throw new  \Exception('找不到配置文件'.$file);
			}
		}	
	}
}

