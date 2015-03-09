<?php namespace Former\Framework;

use Former\Traits\Field;
use HtmlObject\Element;
use Illuminate\Container\Container;

class TwitterBootstrap3Validator extends TwitterBootstrap3
{
    public function __construct(Container $app)
    {
        parent::__construct($app);
    }

    public function createHelp($text, $attributes = array())
    {
        return Element::create('small', $text, $attributes)->addClass('help-block');
    }

    public function createError($text, Field $field, $attributes = array())
    {
        return Element::create('small', $text, $attributes)->addClass('help-block')
            ->setAttribute('data-bv-validator', 'serverValidation')
            ->setAttribute('data-bv-validator-for', $field->name);
    }
}
