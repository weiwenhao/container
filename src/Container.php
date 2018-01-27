<?php

namespace Container;

class Container
{
    /**
     * @param $class
     * @return mixed
     */
    public static function make($class)
    {
        $reflection = new \ReflectionClass($class);

        $constructor = $reflection->getConstructor();
        $parameters = $constructor->getParameters();

        $instances = [];

        foreach ($parameters as $parameter) {
            $className =  $parameter->getClass()->getName();
            $instances[] = new $className;
        }

        //... 将数组拆封成参数传递给方法, 类似于 call_user_func_array()
        return new $class(...$instances);
    }
}