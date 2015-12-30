<?php

function sluggify($url)
{
    return str_slug($url, "-");
}

function shortify($content, $words)
{
  $str = trim(preg_replace('/\s+?(\S+)?$/', '', substr(strip_tags($content), 0, $words)), chr(0xC2).chr(0xA0));
  $converted = strtr($str, array_flip(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES)));
  return trim($converted, chr(0xC2).chr(0xA0));
}

function cleanFileName($fileName)
{
  return preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), $fileName);
}
