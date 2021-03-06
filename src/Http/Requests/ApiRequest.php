<?php

declare(strict_types=1);

/*
 * This file is part of Domesticated.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Domesticated\Http\Requests;

use Artisanry\Domesticated\Traits\ApiRequestTrait;
use Illuminate\Foundation\Http\FormRequest;

abstract class ApiRequest extends FormRequest
{
    use ApiRequestTrait;

    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
