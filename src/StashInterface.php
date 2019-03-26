<?php
namespace Core\Stash;

interface StashInterface
{
    public function push($data);

    public function pull();

    public function reset();

    public function create();
}
