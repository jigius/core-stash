<?php
namespace Core\Stash;

class MemoryStash implements StashInterface
{
    private $data;

    public function __construct()
    {
    }

    public function create()
    {
        return new self();
    }

    public function reset()
    {
        $this->data = null;
    }

    public function pull()
    {
        return $this->data;
    }

    public function push($data)
    {
        $this->data = $data;
    }
}
