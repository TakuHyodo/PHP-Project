<?php

namespace App\Http\Actions\Quotation;

use App\Http\Responders\Quotation\CommonResponder;
use App\Usecase\Quotation\CommonUsecase;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class CommonAction extends Controller
{
    public function __construct(
        private CommonUsecase $usecase,
        private CommonResponder $responder
    ){
    }

    public function __invoke(): Response
    {
        return $this->responder->handle($this->usecase->run());
    }
}
