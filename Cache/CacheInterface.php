<?php

namespace TE\Cache;

/**
 * CacheInterface 
 * 
 * @copyright Copyright (c) 2012 Typecho Team. (http://typecho.org)
 * @author Joyqi <magike.net@gmail.com> 
 * @license GNU General Public License 2.0
 */
interface CacheInterface
{
    /**
     * 获取原始对象
     *
     * @return mixed
     */
    public function getCache();
}

