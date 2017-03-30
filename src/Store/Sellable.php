<?php

namespace Bloggy\Store;

interface Sellable
{
    public function getVAT();

    public function getPrice();
}
