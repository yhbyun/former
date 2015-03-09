<?php
namespace Former\Framework;

class TwitterBootstrap3ValidatorTest extends TwitterBootstrap3Test
{

    public function setUp()
    {
        parent::setUp();

        $this->former->framework('TwitterBootstrap3Validator');
        $this->former->horizontal_open()->__toString();
    }

    ////////////////////////////////////////////////////////////////////
    //////////////////////////////// TESTS /////////////////////////////
    ////////////////////////////////////////////////////////////////////

    public function testFrameworkIsRecognized()
    {
        $this->assertNotEquals('TwitterBootstrap', $this->former->framework());
        $this->assertNotEquals('TwitterBootstrap3', $this->former->framework());
        $this->assertEquals('TwitterBootstrap3Validator', $this->former->framework());
    }

    public function testCanCreateWithErrors()
    {
        $this->former->open_vertical();
        $this->former->withErrors($this->validator);

        $required = $this->former->text('required')->__toString();
        $matcher =
            '<div class="form-group has-error">'.
            '<label for="required" class="control-label">Required</label>'.
            '<input class="form-control" id="required" type="text" name="required">'.
            '<small class="help-block" data-bv-validator="custom" data-bv-validator-for="required">The required field is required.</small>'.
            '</div>';

        $this->assertEquals($matcher, $required);
    }
}
