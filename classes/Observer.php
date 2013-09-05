<?php

namespace IMIArticleDescription;

class Observer
{

    public function addDescription($objRow)
    {
        global $objPage;
        if (!$objRow->multiMode) { // display single article only?
            if (!empty($objRow->description)) {
                $objPage->description = 'foo: ' . $objRow->description;
            }
        }
    }
}