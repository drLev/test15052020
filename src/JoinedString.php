<?php

namespace Otis22\PhpSkelleton;

class JoinedString
{
    /**
     * @var string
     */
    protected $string;

    /**
     * JoinedString constructor.
     * @param string $glue
     * @param array<mixed> $pieces
     */
    public function __construct(string $glue, array $pieces)
    {
        $this->string = implode($glue, $pieces);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->string;
    }
}
