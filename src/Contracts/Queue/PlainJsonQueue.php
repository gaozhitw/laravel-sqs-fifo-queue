<?php

namespace ShiftOneLabs\LaravelSqsFifoQueue\Contracts\Queue;

interface PlainJsonQueue
{
    public function getPayloadArray(): array;
}