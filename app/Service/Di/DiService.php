<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Service\Di;

use App\Service\IdService;
use Hyperf\Di\Annotation\Inject;

class DiService extends DiParentService
{
    /**
     * @Inject
     * @var IdService
     */
    public $service;
}
