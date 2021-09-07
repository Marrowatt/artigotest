<?php

require_once('Funcoes.php');

test('verdade', function () {
    
    $verdade = new Funcoes();
 
    $this->assertTrue($verdade->verdade());
});

test('falsidade', function () {
        
    $verdade = new Funcoes();

    $falsidade = $verdade->falsidade();

    $this->assertFalse($falsidade);
});

test('Array', function () {
    
    $verdade = new Funcoes();

    $falsidade = $verdade->arraythor();

    $this->assertCount(12, $falsidade);
});

test('Contador', function () {
    
    $verdade = new Funcoes();

    $falsidade = $verdade->contador();

    $this->assertEquals(35, $falsidade);
});

test('Vazio', function () {
    
    $verdade = new Funcoes();

    $falsidade = $verdade->vazio();

    $this->assertEmpty($falsidade);
});

test('String', function () {
    
    $verdade = new Funcoes();

    $falsidade = $verdade->frase();

    $this->assertStringContainsString("Algo mais coisa", $falsidade);
});