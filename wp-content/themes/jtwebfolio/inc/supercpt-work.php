<?php

/**
 * SPT Docs
 *
 * @package jtwebfolio
 **/

add_action( 'after_setup_theme', 'jtw_work' );

function jtw_work() {
    if ( ! class_exists( 'Super_Custom_Post_Type' ) )
        return;
    $jtw_work = new Super_Custom_Post_Type(
        'jtw_work',
        'Project',
        'Projects',
        array(
            'capability_type' => 'page',
            'rewrite' => array(
                'slug' => 'work'
            ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
                'page-attributes'
            ),

        ) );
    $jtw_work->set_icon( 'desktop' );

    /*$jtw_work->add_meta_box( array(
        'id' => 'doctor-information-wrapper',
        'title' => "Basic Doctor Information",
        'fields' => array(
            'doctor-location' => array( 'type' => 'select', 'multiple' => 'multiple', 'data' => 'cmh_locations', 'class'=> 'large-text' ),
            'doctor-video-link' => array( 'type' => 'text' ),
        )
    ) );*/

    $jtw_skill = new Super_Custom_Taxonomy(
        'skills',
        'Skill',
        'Skills',
        'categories'
    );
    connect_types_and_taxes($jtw_work, array( $jtw_skill ) );
}