<?php
    if (!isset($config))
        $config = array();

    /*
     * The directory containing calibre's metadata.db file, with sub-directories
     * containing all the formats.
     * BEWARE : it has to end with a /
     */
    /*
    $config['calibre_directory'] = './';
     */
    $config['calibre_directory'] = '/data/library/';

    /*
     * Catalog's title
     */
    $config['cops_title_default'] = "COPS";

    /*
     * use URL rewriting for downloading of ebook in HTML catalog
     * See README for more information
     *  1 : enable
     *  0 : disable
     */
    $config['cops_use_url_rewriting'] = "0";