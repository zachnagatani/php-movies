<?php
    include('media.php');

    $batman_begins = new Movie('Batman Begins', 'After training with his ' .
                                    'mentor, Batman begins his fight to free ' .
                                    'crime-ridden Gotham City from corruption',
                                    'https://upload.wikimedia.org/wikipedia/en' .
                                    '/a/af/Batman_Begins_Poster.jpg', 'https:' .
                                    '//www.youtube.com/watch?v=neY2xVmOfUM');

    $the_dark_knight = new Movie('The Dark Knight', 'Batman faces a new ' .
                                    'threat in Gotham: the sadistic ' .
                                    'mastermind, the Joker, who looks to ' .
                                    'release anarchy upon the city', 'ht' .
                                    'tps://upload.wikimedia.org/wikipedia/' .
                                    'en/8/8a/Dark_Knight.jpg', 'https://www' .
                                '.youtube.com/watch?v=EXeTwQWrcwY');
    $the_dark_knight_rises = new Movie('The Dark Knight Rises', 'Eight ' .
                                        'years after the Joker\'s reign ' .
                                        'of anarchy, the Dark Knight, ' .
                                        'with the help of the enigmatic ' .
                                        'Selina, is forced from his ' .
                                        'imposed exile to save Gotham ' .
                                        'City, now on the edge of total ' .
                                        'annihilation, from the brutal ' .
                                        'guerrilla terrorist Bane.',
                                        'https://upload.wikimedia.org/' .
                                        'wikipedia/en/8/83/Dark_knight' .
                                        '_rises_poster.jpg', 'https:' .
                                        '//www.youtube.com/watch?v=' .
                                        'GokKUqLcvD8');

    # Bourne movies
    $the_bourne_identity = new Movie('The Bourne Identity', 'A man ' .
                                        'is picked up by a fishing boat, ' .
                                        'bullet-riddled and suffering ' .
                                        'from amnesia, races to elude ' .
                                        'assassins and regain his memory.',
                                        'https://upload.wikimedia.org/' .
                                        'wikipedia/en/a/ae/BourneIdentity' .
                                        'film.jpg', 'https://www.youtube.' .
                                    'com/watch?v=FpKaB5dvQ4g');
    $the_bourne_supremacy = new Movie('The Bourne Supremacy', 'When ' .
                                        'Jason Bourne is framed for a ' .
                                        'CIA operation gone awry, he is ' .
                                        'forced to resume his former ' .
                                        'life as a trained assassin to ' .
                                        'survive.', 'https://upload.' .
                                        'wikimedia.org/wikipedia/en/3/30/' .
                                        'Bourne_supremacy_ver2.jpg',
                                        'https://www.youtube.com/watch?v=' .
                                        'Y-HqyyfBbSo');
    $the_bourne_ultimatum = new Movie('The Bourne Ultimatum', 'Jason ' .
                                        'Bourne dodges a ruthless CIA ' .
                                        'official and his agents from a ' .
                                        'new assassination program while ' .
                                        'searching for the origins of his ' .
                                        'life as a trained killer.', 'https:' .
                                        '//upload.wikimedia.org/wikipedia/en' .
                                        '/f/fe/The_Bourne_Ultimatum_%282007' .
                                        '_film_poster%29.jpg', 'https://www' .
                                        '.youtube.com/watch?v=ZT2ZxjUjSo0');

    $movies = array($batman_begins, $the_dark_knight, $the_dark_knight_rises, $the_bourne_identity, $the_bourne_supremacy, $the_bourne_ultimatum);
?>