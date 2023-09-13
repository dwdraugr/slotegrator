<?php

namespace App\Communication;

use App\Shared\OrderEntity;

class OrderPrinter
{
    private OrderEntity $orderEntity;

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
     * @return void
     */
    public function printOrder(): void
    {
        /* some print logic */
    }
}
