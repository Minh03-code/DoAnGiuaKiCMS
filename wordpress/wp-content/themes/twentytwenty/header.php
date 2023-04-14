<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<style>
			.timkiem{
				background: #fff;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			.box{
				text-align: center;
				padding-left: 170px;
				padding-right: 170px;
				
			}
			.formS:hover{
				border: solid #fff 2px;
			}
			.cot{
				display: inline-block;

			}
			
			.col2{
				width: 600px;
				
			}
			.btn-kiem{
				background: #28a745;
				border-radius: 5%;
				text-transform: capitalize;
			}
			.result{
				margin-top: 10px;
				text-align: center;
				padding-left: 100px;
				padding-right: 100px;
			}
			.boxresult{
				padding-top: 10px;
				background: #fff;
				box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
			}
			.result1{
				width: 300px;

			}
			.result2{
				width: 200px;
				transform: translateY(-100%);
			}
			.result3{
				width: 300px;
				height: auto;
				border-left: solid 2px #000;
				padding-left: 10px;
			}.result31{
				font-size: 1.2em;
				text-align: left;
				color: #2a6496;
				font-weight: bold;
			}
			.result31:hover{
				text-decoration: underline;
			}
			.result32{
				font-size: 0.7em;
				text-align: left;
			}
			.ngay
			{
				font-size: 2.1em;
			}
			.thang{
				font-size:0.9em;
				
			}
		</style>
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
