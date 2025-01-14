<?php
    $all_votes = [
        'Harold', 'Jane', 'Harold', 'Ben', 'Jane', 'Jim',
        'Arnold', 'Arnold', 'Harold', 'Jane', 'Harold',
        'Ben', 'Arnold', 'Ben', 'Jane', 'Jane', 'Ben',
        'Harold', 'Harold', 'Ben', 'Steve',
    ];

    $tally_votes = function($votes) {
        return array_reduce(
            $votes,
            fn($carry, $vote) => array_merge(
                $carry,
                [ $vote => (array_key_exists($vote, $carry)
                    ? $carry[$vote] + 1
                    : 1) ]
            ),
            [],
        );
    };

    print_r($tally_votes($all_votes));

?>