<?php namespace ProcessWire;


$sort = $input->get('sort');
$search = $input->get('search');

if ($search) {
    $vacancies = $pages->find("template=vacancy, title|short_description%={$search}");
} else if ($sort) {
    $vacancies = $pages->find("template=vacancy, parent={$sort}");
} else {
    $vacancies = $pages->find('template=vacancy');
}

$arParams = ['vacancies' => $vacancies];