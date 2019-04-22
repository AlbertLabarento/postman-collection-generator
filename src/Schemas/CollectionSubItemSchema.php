<?php
declare(strict_types=1);

namespace PostmanGenerator\Schemas;

/**
 * @method null|string getName()
 * @method self setName(string $name)
 */
class CollectionSubItemSchema extends AbstractItemableSchema
{
    /** @var string */
    protected $name;

    /**
     * Serialize object as array.
     *
     * @return mixed[]
     */
    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'item' => $this->getItem(),
            '_postman_isSubFolder' => true
        ];
    }
}