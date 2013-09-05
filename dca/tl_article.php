<?php

$GLOBALS['TL_DCA']['tl_article']['fields']['description'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_article']['description'],
            'exclude'                 => true,
            'inputType'               => 'textarea',
            'search'                  => true,
            'eval'                    => array('style'=>'height:60px', 'decodeEntities'=>true, 'tl_class'=>'clr'),
            'sql'                     => "text NULL"
        );


$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = '{title_legend},title,description,alias,author;{layout_legend},inColumn,keywords;{teaser_legend:hide},teaserCssID,showTeaser,teaser;{expert_legend:hide},printable,cssID,space;{publish_legend},published,start,stop';