<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class Throttle implements FilterInterface
{

    public function before(RequestInterface $request)
    {
        $throttler = Services::throttler();
        if ($throttler->check($request->getIPAddress(), 2, MINUTE) === false) {
            return Services::response()->setStatusCode(429);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }
}
