<?php
if (!function_exists('maileclipse_view')) {
    /**
     * Returns a new displayable view based on the configured backpack view namespace.
     * If that view doesn't exist, it will load the one from the original theme.
     *
     * @param string (see config/backpack/base.php)
     * @return string
     */
    function maileclipse_view($view)
    {
        $originalTheme = 'maileclipse::';

        $returnView = $originalTheme . $view;

        if (!view()->exists($view)) {
            return $returnView;
        }
        return $view;
    }
}
