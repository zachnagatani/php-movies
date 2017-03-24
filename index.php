<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A movie trailer website built with Python!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Only Movies That Matter... Seriously</title>

        <!-- Bootstrap 3 -->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
        <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles/main.css">
        <script type="text/javascript" charset="utf-8">
            // Pause the video when the modal is closed
            $(document).on('click', '.hanging-close, .modal-backdrop, .modal', function (event) {
                // Remove the src so the player itself gets removed, as this is the only
                // reliable way to ensure the video stops playing in IE
                $("#trailer-video-container").empty();
            });
            // Start playing the video whenever the trailer modal is opened
            $(document).on('click', '.movie-tile', function (event) {
                var trailerYouTubeId = $(this).attr('data-trailer-youtube-id')
                var sourceUrl = 'https://www.youtube.com/embed/' + trailerYouTubeId + '?autoplay=1&html5=1';
                $("#trailer-video-container").empty().append($("<iframe></iframe>", {
                'id': 'trailer-video',
                'type': 'text-html',
                'src': sourceUrl,
                'frameborder': 0
                }));
            });
            // Animate in the movies when the page loads
            $(document).ready(function () {
            $('.movie-tile').hide().first().show("fast", function showNext() {
                $(this).next("div").show("fast", showNext);
            });
            });
        </script>
    </head>
    <body>
        <!-- Trailer Video Modal -->
        <div class="modal" id="trailer">
        <div class="modal-dialog">
            <div class="modal-content">
            <a href="#" class="hanging-close" data-dismiss="modal" aria-hidden="true">
                <img src="https://lh5.ggpht.com/v4-628SilF0HtHuHdu5EzxD7WRqOrrTIDi_MhEG6_qkNtUK5Wg7KPkofp_VJoF7RS2LhxwEFCO1ICHZlc-o_=s0#w=24&h=24"/>
            </a>
            <div class="scale-media" id="trailer-video-container">
            </div>
            </div>
        </div>
        </div>

        <!-- Main Page Content -->
        <div class="container">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">The Only Movies That Matter</a>
            </div>
            </div>
        </div>
        </div>
        <div class="container">
        <p class="lead text-center">Click a movie to watch the trailer!</p>
            <?php
                include('fresh_tomatoes.php');

                foreach ($movies as $movie) {
                    echo "<div class='col-md-6 col-lg-4 movie-tile text-center'>
                            <a href='$movie->trailer_url' target='_blank'>
                                <img src='$movie->poster' width='220' height='342'>
                            </a>
                            <h2>$movie->title</h2>
                            <p>$movie->storyline</p>
                          </div>";
                }
            ?>
        </div>
    </body>
</html>