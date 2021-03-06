<?php

declare(strict_types=1);

namespace Sylius\Behat\Element\Shop\Account;

use Behat\Mink\Exception\ElementNotFoundException;

interface RegisterElementInterface
{
    /**
     * @throws ElementNotFoundException
     */
    public function checkValidationMessageFor(string $element, string $message): bool;

    public function register(): void;

    public function specifyEmail(?string $email): void;

    public function getEmail(): string;

    public function specifyFirstName(?string $firstName): void;

    public function specifyLastName(?string $lastName): void;

    public function specifyPassword(?string $password): void;

    public function specifyPhoneNumber(string $phoneNumber): void;

    public function verifyPassword(?string $password): void;

    public function subscribeToTheNewsletter(): void;
}
