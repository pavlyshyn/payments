<?php

namespace Pavlyshyn\Payments;

interface PaymentInterface {

    public function request();

    public function check();
}
