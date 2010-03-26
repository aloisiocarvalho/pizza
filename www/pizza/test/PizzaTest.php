<?php

	error_reporting( E_ALL & ~E_DEPRECATED);

	require_once( 'simpletest/autorun.php' );
	require_once('../Pizza.php' );

	class PizzaTest extends UnitTestCase {
		function test_queijo_eh_uma_Pizza() {
			$queijo= new Pizza();
			$this->assertIsA($queijo, 'Pizza');
		}

		function test_pizza_guarda_sabor() {
			$pizza= new Pizza('calabresa');
			$this->assertEqual( $pizza->sabor, 'calabresa' );
			
		}
		function test_pizza_guarda_tamanho() {
			$pizza= new Pizza('calabresa', 'grande');
			$this->assertEqual( $pizza->tamanho, 'grande' );
		}

		function test_pizza_guarda_preco() {
			$pizza= new Pizza('calabresa', 'grande', 15.00);
			$this->assertEqual( $pizza->preco, 15.00 );
		}
	}

?>