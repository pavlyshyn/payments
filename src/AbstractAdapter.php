<?php

namespace Pavlyshyn\Payments;

use Pavlyshyn\Payments\Exception\PaymentException;
use Pavlyshyn\Payments\PaymentInterface;

abstract class AbstractAdapter implements PaymentInterface {

    public function request() {
        throw new PaymentException('not ready yet');
    }

    public function response() {
        throw new PaymentException('not ready yet');
    }

    public function check() {
        throw new PaymentException('not ready yet');
    }

}
