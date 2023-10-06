<?php

namespace app\Http\Responders\Quotation;

use App\Http\Payload;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class CommonResponder
{
    public function __construct(
        private ResponseFactory $responseFactory
    )
    {
    }

    public function handle(Payload $payload): Response
    {
        return $this->responseFactory->view('quotations.common');
    }


}
