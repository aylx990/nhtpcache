<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2021 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare (strict_types=1);

namespace nahuo\cache\facade;

use think\Facade;
use nahuo\cache\cache\Driver;
use nahuo\cache\cache\TagSet;

/**
 * @see \nahuo\cache\Cache
 * @package nahuo\cache\facade
 * @mixin \nahuo\cache\Cache
 * @method static string|null getDefaultDriver() 默认驱动
 * @method static mixed getConfig(null|string $name = null, mixed $default = null) 获取缓存配置
 * @method static array getStoreConfig(string $store, string $name = null, null $default = null) 获取驱动配置
 * @method static Driver store(string $name = null) 连接或者切换缓存
 * @method static bool clear() 清空缓冲池
 * @method static mixed get(string $key, mixed $default = null) 读取缓存
 * @method static bool set(string $key, mixed $value, int|\DateTime $ttl = null) 写入缓存
 * @method static bool delete(string $key) 删除缓存
 * @method static iterable getMultiple(iterable $keys, mixed $default = null) 读取缓存
 * @method static bool setMultiple(iterable $values, null|int|\DateInterval $ttl = null) 写入缓存
 * @method static bool deleteMultiple(iterable $keys) 删除缓存
 * @method static bool has(string $key) 判断缓存是否存在
 * @method static TagSet tag(string|array $name) 缓存标签
 * @method static mixed ttl(string $name) 获取缓存剩余有效期(秒)
 * @method static mixed update(string $key, mixed $newVal = null, bool $isMerge = true) 更新缓存内容
 */
class Cache extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return \nahuo\cache\Cache::class;
    }
}
