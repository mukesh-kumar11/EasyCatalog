<?php
/** @var \CustomerManagementFrameworkBundle\CustomerView\CustomerViewInterface $cv */
$cv = $this->customerView;

/** @var array $searchBarFields */
$searchBarFields = $this->searchBarFields;

$exampleQueries = [
    'foo',
    'foo AND bar',
    'foo OR bar',
    'foo OR !bar',
    'foo AND "bar"',
    'foo OR (bar AND baz)',
];

$modifiers = [
    'Exact search (field must match exactly)' => [
        '"<term>"',
    ],
    'Negation' => [
        '!<term>',
        '!(<query>)'
    ]
];

$codify = function (array $values) {
    return array_map(function ($value) {
        return '<code>' . $this->escape($value) . '</code>';
    }, $values);
};

$codeList = function (array $values) use ($codify) {
    return implode(' ', $codify($values));
};
?>

<p class="help-block help-block-toggle">
    <a role="button" data-toggle="collapse" href="#searchBarHelp" aria-expanded="false" aria-controls="searchBarHelp">
        <i class="fa fa-question-circle"></i>
        <?= $cv->translate('Show help') ?>
    </a>.

    <?= $cv->translate('Search query syntax can be used in the search bar and in filter inputs below.'); ?>
</p>

<div class="help-block collapse" id="searchBarHelp">
    <div id="searchBarFields">
        <h4><?= $cv->translate('Fields included in search') ?></h4>
        <?= $codeList($this->searchBarFields); ?>
    </div>

    <div id="searchBarExamples">
        <h4><?= $cv->translate('Example queries') ?></h4>
        <?= $codeList($exampleQueries) ?>
    </div>

    <div id="searchBarModifiers">
        <h4><?= $cv->translate('Modifiers') ?></h4>
        <dl>
            <?php foreach ($modifiers as $modifierTitle => $modifierExamples): ?>

                <dt><?= $cv->translate($modifierTitle) ?></dt>
                <dd>
                    <?= $codeList($modifierExamples) ?>
                </dd>

            <?php endforeach; ?>
        </dl>
    </div>
</div>
