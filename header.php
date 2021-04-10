<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package seba
 */

?><!DOCTYPE html>
<html lang=<?php language_attributes();?>">

<head>
    <meta charset=<?php bloginfo( 'charset' );?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div id="page" class="site">
        <header>
            <section class="search">Search</section>
            <section class="top-bar">
                <div class="brand">Logo</div>
                <div class="second-column">
                    <div class="account">account</div>
                    <nav class="main-menu"></nav>
                </div>
            </section>
        </header>