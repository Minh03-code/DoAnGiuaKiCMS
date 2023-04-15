<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">
	<div class="content_box_m">
		<div class="row">
			<div class="col-md-3 col-xs-3 topnewstime">
				<span class="topnewsdate">16</span><br>
				<span class="topnewsmonth">Tháng 03</span><br>
			</div>
			<div class="col-md-9 col-xs-9 shortdesc">
				<h4>
					<a href="#">Sinh
						viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay</a>
				</h4>
				<p class="p">Sinh viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay<a href="#">[...]</a>
				</p>
			</div>

		</div>
	</div>
	<div class="content_box_m">
		<div class="row">
			<div class="col-md-3 col-xs-3 topnewstime">
				<span class="topnewsdate">16</span><br>
				<span class="topnewsmonth">Tháng 03</span><br>
			</div>
			<div class="col-md-9 col-xs-9 shortdesc">
				<h4>
					<a href="#">Sinh
						viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay</a>
				</h4>
				<p class="p">Sinh viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay<a href="#">[...]</a>
				</p>
			</div>

		</div>
	</div>
	<div class="content_box_m">
		<div class="row">
			<div class="col-md-3 col-xs-3 topnewstime">
				<span class="topnewsdate">16</span><br>
				<span class="topnewsmonth">Tháng 03</span><br>
			</div>
			<div class="col-md-9 col-xs-9 shortdesc">
				<h4>
					<a href="#">Sinh
						viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay</a>
				</h4>
				<p class="p">Sinh viên TDC thích ứng với môi trường chuyển đổi số trong Doanh nghiệp hiện nay<a href="#">[...]</a>
				</p>
			</div>

		</div>
	</div>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
