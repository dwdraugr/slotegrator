<?php

namespace App\Shared;

class ItemEntity
{
    private int $id;

    /**
     * @var mixed just some example data
     */
    private mixed $itemData;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getItemData(): mixed
    {
        return $this->itemData;
    }

    /**
     * @param mixed $itemData
     * @return self
     */
    public function setItemData(mixed $itemData): self
    {
        $this->itemData = $itemData;
        return $this;
    }
}
