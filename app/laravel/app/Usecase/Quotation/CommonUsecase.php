<?php
namespace App\Usecase\Quotation;

use App\Http\Payload;

class CommonUsecase
{
    public function run(): Payload
    {
        return (new Payload())
            ->setStatus(Payload::SUCCEED);
    }
}
