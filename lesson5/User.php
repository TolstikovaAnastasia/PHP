<?php

class User
{
    private string $username;
    private string $email;
    private string $sex;
    private int $age;
    public bool $isActive = true;
    public DateTime $dateCreated;

    public function __construct(string $username, string $email, string $sex, int $age, bool $isActive = true)
    {
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
        $this->age = $age;
        $this->isActive = $isActive;
        $this->dateCreated = new DateTime();
    }
}
