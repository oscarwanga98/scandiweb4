<?php
class Product {
    public $specialId;
    public $skuId;
    public $name;
    public $price;
    public $productTypeId;
    public $weight;
    public $size;
    public $length;
    public $width;
    public $height;

    public function __construct($specialId, $skuId, $name, $price, $productTypeId, $weight, $size, $length, $width, $height) {
        $this->specialId = $specialId;
        $this->skuId = $skuId;
        $this->name = $name;
        $this->price = $price;
        $this->productTypeId = $productTypeId;
        $this->weight = $weight;
        $this->size = $size;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getSpecialId() {
        return $this->specialId;
    }

    public function setSpecialId($specialId) {
        $this->specialId = $specialId;
    }

    public function getSkuId() {
        return $this->skuId;
    }

    public function setSkuId($skuId) {
        $this->skuId = $skuId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getProductTypeId() {
        return $this->productTypeId;
    }

    public function setProductTypeId($productTypeId) {
        $this->productTypeId = $productTypeId;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }
}