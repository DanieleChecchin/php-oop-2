<?php

trait Info
{
    private $info;

    public function getinfo()
    {
        return $this->info;
    }

    public function setinfo($info)
    {
        $this->info = $info;
    }
}
