<?php namespace ;

class FooCommand {



    /**
     * @var string
     */
    public $bar;

    /**
     * @var string
     */
    public $baz;

    /**
     * Constructor
     *
     * @param string bar
     * @param string baz
     */
    public function __construct($bar, $baz)
    {
        $this->bar = $bar;
        $this->baz = $baz;
    }

}