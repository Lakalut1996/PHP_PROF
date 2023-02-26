<?php

namespace GeekBrains\Borsh\Blog;

class Post
{
    private int $id;
    private int $UserId;
    private string $header;
    private string $text;

    /**
     * @param int $id
     * @param int $UserId
     * @param string $header
     * @param string $text
     */
    public function __construct(int $id, int $UserId, string $header, string $text)
    {
        $this->id = $id;
        $this->UserId = $UserId;
        $this->header = $header;
        $this->text = $text;
        echo ($this) . PHP_EOL;
    }
    public function __toString(): string
    {
        return "статья $this->id от пользователя: $this->UserId создана. Заголовок: $this->header Текст: $this->text" . PHP_EOL;
    }
}
