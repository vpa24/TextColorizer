<?php

namespace Drupal\TextColorizer\TwigExtension;

class TextColorizerExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'TextColorizer.twig_extension';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter(
                'colorize',
                array($this, 'filterColorize'),
                array('is_safe' => array('html')))
        );
    }

    public static function filterColorize($txt, $color)
    {
        return '<span style="color: '. $color . '">'. $txt . '</span>';
    }
}