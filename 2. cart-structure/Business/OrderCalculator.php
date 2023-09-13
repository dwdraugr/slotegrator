<?php

namespace App\Business;

use App\Shared\OrderEntity;

class OrderCalculator
{
    protected OrderEntity $orderEntity;

    /**
     * @return OrderEntity
     */
    public function getOrderEntity(): OrderEntity
    {
        return $this->orderEntity;
    }

    /**
     * @param OrderEntity $orderEntity
     * @return self
     */
    public function setOrderEntity(OrderEntity $orderEntity): self
    {
        $this->orderEntity = $orderEntity;
        return $this;
    }

    /**
     * @api
     */
    public function calculateTotalSum(): float
    {
        /* some calculation */

        return 42.0;
    }
}
