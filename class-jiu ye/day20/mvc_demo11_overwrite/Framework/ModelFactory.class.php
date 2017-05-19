<?php
//单例工厂类
//通过这个工厂，传递过来的模型的类名，
//并返回给类的一个实例对象，而且保证其为单例的
class ModelFactory{
	static $all_model = array();
	static function M($model_name){
		if(!isset(static::$all_model[$model_name]) || !(static::$all_model[$model_name] instanceof $model_name))
		{
			static::$all_model[$model_name] = new $model_name; //就生产一个
		}
		return static::$all_model[$model_name];
	}
}