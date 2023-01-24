<?php

trait test{

}

class abc{
    use test;

    }


class xyz extends abc{

}

print_r(get_declared_traits());