<?php

namespace JamesRCZ\HtmlBuilder;

use JamesRCZ\HtmlBuilder\HtmlBuilder;
use JamesRCZ\HtmlBuilder\Html;

function a(
    string $text,
    string|array $attributes = null,
    ?string $href = null
) {
    $a = HtmlBuilder::create('a', $text, $attributes ?? '');
    $a->addClass("pointer");
    $href ? $a->setAttribute('href', $href) : false;
    return $a;
}

function div(
    ?string $text = null,
    string|array $attributes=[]
) {
    return Html::div($text, $attributes);
}

function h(
    int $n,
    string $text,
    string|array $attributes = []
) {
    return Html::h($n, $text, $attributes);
}

function p(string $text)
{
    return Html::p($text);
}

function span(
    ?string $text = null,
    string|array $attributes=[]
) {
    return Html::span($text, $attributes);
}
