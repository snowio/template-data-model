<?php

namespace SnowIO\BrightpearlDataModel;

class ModelExample
{
    /** @var mixed|string|null $name */
    private $name;
    /** @var mixed|int|null $phoneNumber */
    private $phoneNumber;
    /** @var mixed|bool|null $isInUk */
    private $isInUk;
    /** @var mixed|string[]|null $cartItems */
    private $cartItems;

    public static function create(): self
    {
        return new self();
    }

    /**
     * @param array<mixed> $json
     *
     */
    public static function fromJson(array $json): self
    {
        $result = new self();
        $result->name = $json['name'];
        $result->isInUk = $json['isInUk'] ?? null;
        $result->phoneNumber = $json['phoneNumber'] ?? null;
        $result->cartItems = $json['cartItems'] ?? null;
        return $result;
    }

    /**
     * @return array<mixed>
     */
    public function toJson(): array
    {
        return [
            'name' => $this->getName(),
            'isInUk' => $this->getIsInUk(),
            'phoneNumber' => $this->getPhoneNumber(),
            'cartItems' => $this->getCartItems()
        ];
    }

    /**
     * @param ModelExample $contactToCompare
     * @return bool
     */
    public function equals(ModelExample $contactToCompare): bool
    {
        if ($this->getName() !== $contactToCompare->getName()) {
            return false;
        }
        if ($this->getPhoneNumber() !== $contactToCompare->getPhoneNumber()) {
            return false;
        }
        if ($this->getIsInUk() !== $contactToCompare->getIsInUk()) {
            return false;
        }
        if ($this->getCartItems() !== $contactToCompare->getCartItems()) {
            return false;
        }
        return $this->getName() === $contactToCompare->getName();
    }


    /**
     * @return mixed|string|null
     */
    public function getName()
    {
        return $this->name;
    }

    public function withName(string $name): self
    {
        $clone = clone $this;
        $clone->name = $name;
        return $clone;
    }

    /**
     * @return mixed|bool|null
     */
    public function getIsInUk()
    {
        return $this->isInUk;
    }

    public function withIsInUk(bool $isInUk): self
    {
        $clone = clone $this;
        $clone->isInUk = $isInUk;
        return $clone;
    }

    /**
     * @return mixed|int|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function withPhoneNumber(int $phoneNumber): self
    {
        $clone = clone $this;
        $clone->phoneNumber = $phoneNumber;
        return $clone;
    }

    /**
     * @return mixed|array<string>|null
     */
    public function getCartItems()
    {
        return $this->cartItems;
    }


    /**
     * @param array<string> $cartItems
     */
    public function withCartItems(array $cartItems): self
    {
        $clone = clone $this;
        $clone->cartItems = $cartItems;
        return $clone;
    }
}
