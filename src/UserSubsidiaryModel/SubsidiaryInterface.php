<?php

namespace BayWaReLusy\UserSubsidiaryModel;

interface SubsidiaryInterface
{
    public function getId(): string;
    public function setId(string $id): SubsidiaryInterface;
    public function getName(): string;
    public function setName(string $name): SubsidiaryInterface;
    public function getFooter(): ?string;
    public function setFooter(?string $footer): SubsidiaryInterface;
    public function getStreet(): ?string;
    public function setStreet(?string $street): SubsidiaryInterface;
    public function getNumber(): ?string;
    public function setNumber(?string $number): SubsidiaryInterface;
    public function getZipCode(): ?string;
    public function setZipCode(?string $zipCode): SubsidiaryInterface;
    public function getCity(): ?string;
    public function setCity(?string $city): SubsidiaryInterface;
    public function getCountry(): ?string;
    public function setCountry(?string $country): SubsidiaryInterface;
    public function getCepReadyThreshold(): ?int;
    public function setCepReadyThreshold(?int $cepReadyThreshold): SubsidiaryInterface;
}
