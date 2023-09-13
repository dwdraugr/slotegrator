<?php

namespace App\Persistence;

use App\Shared\OrderEntity;

class OrderRepository
{
    private OrderEntity $orderEntity;

    /**
     * Expected that you already set orderEntity property with needed id
     *
     * @api
     * @return OrderEntity
     */
    public function load(): OrderEntity
    {
        /* some data lodaing logic */

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
}
