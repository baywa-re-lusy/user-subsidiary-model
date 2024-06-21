<?php

namespace BayWaReLusy\UserSubsidiaryModel;

interface UserInterface
{
    public function getId(): string;
    public function setId(string $id): UserInterface;
    public function getUsername(): string;
    public function setUsername(string $username): UserInterface;
    public function getEmail(): string;
    public function setEmail(string $email): UserInterface;
    public function getEmailVerified(): bool;
    public function setEmailVerified(bool $emailVerified): UserInterface;
    public function getCreated(): \DateTime;
    public function setCreated(\DateTime $created): UserInterface;
    public function getSubsidiaryIds(): array;
    public function setSubsidiaryIds(array $subsidiaryIds): UserInterface;
    public function getRoles(): array;
    public function setRoles(array $roles): UserInterface;
    public function addRole(string $role): UserInterface;
}
