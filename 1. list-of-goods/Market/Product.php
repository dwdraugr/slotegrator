<?php
namespace Market;

/**
 * Represents a single product record stored in DB.
 */
class Product
{
    /**
     * @var FileStorageRepository
     */
    private FileStorageRepository $storage;
    /**
     * @var string
     */
    private string $imageFileName;
    /**
     * @param FileStorageRepository $fileStorageRepository
     */
    public function __construct(FileStorageRepository $fileStorageRepository)
    {
        $this->storage = $fileStorageRepository;
    }
    /*...*/
    /**
     * Returns product image URL.
     *
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        if ($this->storage->fileExists($this->imageFileName) !== true) {
            return null;
        }
        return $this->storage->getUrl($this->imageFileName);
    }
    /**
     * Returns whether image was successfully updated or not.
     *
     * @return bool
     */
    public function updateImage(): bool
    {
        /*...*/
        try {
            if ($this->storage->fileExists($this->imageFileName) !== true) {
                $this->storage->deleteFile($this->imageFileName);
            }
            $this->storage->saveFile($this->imageFileName);
        } catch (\Exception $exception) {
            /*...*/
            return false;
        }
        /*...*/
        return true;
    }
    /*...*/

    /**
     * @param string[] $imagesFileNames
     * @return string[]
     */
    public function getImagesUrls(array $imagesFileNames): array
    {
        $imagesUrls = [];
        $existedImages = array_filter(
            $imagesFileNames,
            fn($el) => $this->storage->fileExists($el) === true
        );

        foreach ($existedImages as $img) {
            $imagesUrls[] = $this->storage->getUrl($img);
        }

        return $imagesUrls;
    }
}