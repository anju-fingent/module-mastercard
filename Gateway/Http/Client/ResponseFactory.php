<?php
/**
 * Copyright (c) 2016-2019 Mastercard
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Mastercard\Mastercard\Gateway\Http\Client;

use Zend_Http_Response;

class ResponseFactory
{
    /**
     * Create a new Zend_Http_Response object from a string
     *
     * @param string $response
     * @return Zend_Http_Response
     */
    public function create($response)
    {
        return Zend_Http_Response::fromString($response);
    }
}
