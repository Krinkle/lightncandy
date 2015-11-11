<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;

class ValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy\Validator::validateStartEnd
     */
    public function testOn_validateStartEnd() {
        $method = new \ReflectionMethod('LightnCandy\Validator', 'validateStartEnd');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array_fill(0, 9, ''), array()
)        ));
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array_fill(0, 9, '}}'), array()
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array_fill(0, 9, '{{{'), array()
)        ));
    }
    /**
     * @covers LightnCandy\Validator::validateOperations
     */
    public function testOn_validateOperations() {
        $method = new \ReflectionMethod('LightnCandy\Validator', 'validateOperations');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, ''), array(), array()
)        ));
        $this->assertEquals(2, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '^', '...'), array('usedFeature' => array('isec' => 1), 'level' => 0), array(array('foo'))
)        ));
        $this->assertEquals(3, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '!', '...'), array('usedFeature' => array('comment' => 2)), array()
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '/'), array('stack' => array(1), 'level' => 1), array()
)        ));
        $this->assertEquals(4, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('sec' => 3), 'level' => 0), array(array('x'))
)        ));
        $this->assertEquals(5, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('if' => 4), 'level' => 0), array(array('if'))
)        ));
        $this->assertEquals(6, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('with' => 5), 'level' => 0, 'flags' => array('with' => 1)), array(array('with'))
)        ));
        $this->assertEquals(7, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('each' => 6), 'level' => 0), array(array('each'))
)        ));
        $this->assertEquals(8, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('unless' => 7), 'level' => 0), array(array('unless'))
)        ));
        $this->assertEquals(9, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('blockhelpers' => array('abc' => ''), 'usedFeature' => array('bhelper' => 8), 'level' => 0), array(array('abc'))
)        ));
        $this->assertEquals(10, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, ' ', '...'), array('usedFeature' => array('delimiter' => 9), 'level' => 0), array()
)        ));
        $this->assertEquals(11, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('hbhelpers' => array('abc' => ''), 'usedFeature' => array('hbhelper' => 10), 'level' => 0), array(array('abc'))
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '>', '...'), array('basedir' => array('.'), 'fileext' => array('.tmpl'), 'usedFeature' => array('unless' => 7, 'partial' => 7), 'level' => 0, 'flags' => array('skippartial' => 0)), array('test')
)        ));
    }
}
?>