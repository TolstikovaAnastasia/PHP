<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->setDateCreated(new DateTime());
    }

    public function markAsDone(): void
    {
        $this->setIsDone(true);
        $this->setDateUpdated(new DateTime);
        $this->setDateDone(new DateTime);
    }

    public function isDone(): bool
    {
        return $this->isDone;
    }
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function getUser(): User
    {
        return $this->user;
    }
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime);
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }
    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getComment(): array
    {
        return $this->comments;
    }
    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }
}
