<?php

namespace App\Shared;

use App\Shared\ItemEntity;

class OrderEntity
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var ItemEntity[]
     */
    private array $orderData;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param ItemEntity[] $orderData
     * @return self
     */
    public function setItems(array $orderData): self
    {
        $this->orderData = $orderData;
        return $this;
    }

    /**
     * @api
     * @return ItemEntity[]
     */
    public function getItems(): array
    {
        return $this->orderData;
    }

    /**
     * @api
     * @return int
     */
    public function getItemsCount(): int
    {
        return count($this->orderData);
    }

    /**
     * @api
     * @param ItemEntity $item
     * @return self
     */
    public function addItem(ItemEntity $item): self
    {
        array_push($this->orderData, $item);

        return $this;
    }

    /**
     * @api
     * @param ItemEntity $item
     * @return self
     */
    public function deleteItem($item): self
    {
        $index = array_search($item, $this->orderData);
        if ($index !== false) {
            unset($this->orderData[$index]);
            $this->orderData = array_values($this->orderData);
        }

        return $this;
    }
}
