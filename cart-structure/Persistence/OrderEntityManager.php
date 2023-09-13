<?php

namespace App\Persistence;

use App\Shared\OrderEntity;

class OrderEntityManager
{
    private OrderEntity $orderEntity;

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
     * @return OrderEntity
     */
    public function getOrderEntity(): OrderEntity
    {
        return $this->orderEntity;
    }

    /**
     * Expected that you already set orderEntity property
     *
     * @api
     * @return bool
     */
    public function save(): bool
    {
        /* some saving logic */

        return true;
    }

    /**
     * Expected that you already set orderEntity property with needed id
     *
     * @api
     * @return bool
     */
    public function load(): bool
    {
        /* some loading logic */

        return true;
    }

    /**
     * Expected that you already set orderEntity property with needed id
     *
     * @api
     * @return bool
     */
    public function delete(): bool
    {
        /* some deleting logic */

        return true;
    }
}
