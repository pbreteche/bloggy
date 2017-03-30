<?php

namespace Bloggy\Output;

class HtmlGenerator
{
    private $variables;

    public function__construct()
    {
        $this->variables = array();
    }

    public function addVariable(Displayable $variable)
    {
        $this->variables[] = $variable;
    }

    public function getHtmlCode()
    {
        $output = '<ul>';
        foreach($this->variables as $variable) {
            $output .= '<li>' . $variable->display() . '</li>';
        }
        $output .= '</ul>';

        return $output;
    }

}
