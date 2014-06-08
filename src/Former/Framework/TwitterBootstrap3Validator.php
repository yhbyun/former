<?php namespace Former\Framework;

class TwitterBootstrap3Validator extends TwitterBootstrap3 implements FrameworkInterface
{
    public function __construct(Container $app)
    {
        parent::__construct($app);
    }

    public function createHelp($text, $attributes = array())
    {
        return Element::create('small', $text, $attributes)->addClass('help-block');
    }
}
