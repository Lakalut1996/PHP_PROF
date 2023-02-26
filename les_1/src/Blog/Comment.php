<?php

namespace GeekBrains\Borsh\Blog;

class Comment
{
    private int $id;
    private int $UserId;
    private int $ArticleId;
    private string $text;

    /**
     * @param int $id
     * @param int $UserId
     * @param int $ArticleId
     * @param string $text
     */
    public function __construct(int $id, int $UserId, int $ArticleId, string $text)
    {
        $this->id = $id;
        $this->UserId = $UserId;
        $this->ArticleId = $ArticleId;
        $this->text = $text;
        echo ($this) . PHP_EOL;
    }
    public function __toString(): string
    {
        return "Коментарий $this->id от пользователя c id:$this->UserId к статье с id:$this->ArticleId создана. Текст коментария: $this->text" . PHP_EOL;
    }
}
