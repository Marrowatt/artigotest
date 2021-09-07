<?php
use PHPUnit\Framework\TestCase;

require_once('Funcoes.php');

class FunnyTest extends TestCase
{

    public function testVerdade () {

        $verdade = new Funcoes();

        $verdade = $verdade->verdade();

        $this->assertTrue($verdade);
    }

    public function testFalsidade () {
        
        $verdade = new Funcoes();

        $falsidade = $verdade->falsidade();

        $this->assertFalse($falsidade);
    }

    public function testArray () {
        
        $verdade = new Funcoes();

        $falsidade = $verdade->arraythor();

        $this->assertCount(12, $falsidade);
    }

    public function testContador () {
        
        $verdade = new Funcoes();

        $falsidade = $verdade->contador();

        $this->assertEquals(35, $falsidade);
    }

    public function testVazio () {
        
        $verdade = new Funcoes();

        $falsidade = $verdade->vazio();

        $this->assertEmpty($falsidade);
    }

    public function testString () {
        
        $verdade = new Funcoes();

        $falsidade = $verdade->frase();

        $this->assertEquals("Algo mais coisa", $falsidade);
    }
}
?>