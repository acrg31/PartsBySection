<?php
class SectionArea
{
    public static function partsBySection($data)
    {
        $sections = [];

        foreach ($data as $part => $section) {
            if (!isset($sections[$section])) {
                $sections[$section] = [];
            }
            $sections[$section][] = $part;
        }

        return $sections;
    }
}

$data = array(
    "Battery " => "Assembly ",
    "Tablet" => " ITS ",
    "Magnet" => " Assembly "
);

var_dump(SectionArea::partsBySection($data));
