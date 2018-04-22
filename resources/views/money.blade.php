
<head>
    <title>Make Money With CartEZ</title>
    <script>
        $(document).ready(function()
        {
            $('#load-more-content').click(function()
            {

                $('#more-content').toggleClass('shown');

                $('#load-more-content').hide();

                if( $('#more-content').hasClass('shown') )
                {
                    $('#load-more-content').text('Hide content');
                    $('#more-content').fadeIn('slow', function()
                    {
                        $('#load-more-content').fadeIn('slow');
                    });
                }
                else
                {
                    $('#load-more-content').text('Load some content');
                    $('#more-content').fadeOut('slow', function()
                    {
                        $('#load-more-content').fadeIn('slow');
                    });
                }
            });
        });

    </script>
    <style>
        /* Presentational style rules only
 * Not required
 */

        html, body, .container {
            height: 100%;
        }

        /* Reset */
        html, body, h1, p, a, div, section {
            margin: 0;
            padding: 0;
            font-size: 100%;
            font: inherit;
        }

        /* Basic */
        body {
            font: 18px/23px "Cantarell", sans-serif;
            color: #ffffff;
        }

        h1 {
            color: #efecec;
            text-transform: uppercase;
            font-size: 40px;
            line-height: 50px;
            font-weight: 400;
            margin-top: 20px;
        }

        a {
            color: #ffffff;
        }

        p {
            margin: 0 0 15px 0;
        }

        strong {
            font-weight: 700;
        }

        blockquote {
            display: block;
            max-width: 480px;
            margin: 15px auto;
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.3);
            color: #e1e1e1;
            font-family: "Kotta One", serif;
            font-size: 22px;
            line-height: 28px;
        }

        blockquote cite {
            display: block;
            font: 18px/23px "Cantarell", sans-serif;
            font-size: 16px;
            margin-top: 16px;
            color: #cccccc;
            text-transform: uppercase;
        }

        /* Layout */

        .navbar {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            height: 40px;
            z-index: 9999;
            position: fixed;
        }

        .inner {
            position: relative;
            margin: 0 auto;
            text-align: center;
        }

        .navbar a {
            display: inline-block;
            border: 1px solid #fff;
            font-size: 14px;
            line-height: 24px;
            border-radius: 3px;
            padding: 2px 15px;
            text-decoration: none;
            margin-top: 5px;
        }

        .container {
            display: table;
            padding-top: 80px;
            width: 100%;
        }

        .content {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        /* Special */
        .sub-title {
            margin: 50px auto;
            font-size: 18px;
            line-height: 23px;
            text-transform: uppercase;
        }

        .button {
            display: inline-block;
            padding: 6px 10px;
            color: #cafaea;
            border: 1px solid #cafaea;
            border-radius: 3px;
            font-weight: 700;
            line-height: normal;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
        }

        #more-content {
            display: none;
        }

        /* Media Queries */
        @media only screen and (max-width: 340px) {

            .container {
                position: relative;
                display: block;
                float: left;
                vertical-align: baseline;
                margin: 0 auto;
                padding: 80px 0 0 0;
            }

            #more-content {
                float: left;
                margin-right: 10px;

            }

            body h1 {
                font-size: 18px;
                line-height: 23px;
            }

            .content, blockquote {
                display: inline;
                margin: 0 auto;
                padding-top: 80px;
                vertical-align: baseline;
            }

            blockquote {
                width: 150px;
                margin: 15px auto;
                font-size: 16px;
                line-height: 21px;
                background-color: transparent;
            }

            blockquote cite {
                font-size: 14px;
                line-height: 19px;
            }

            .sub-title {
                font-size: 14px;
                line-height: 21px;
            }

            .button, p {
                max-width: 150px;
                margin: 0 auto;
                font-size: 15px;
                line-height: 20px;
            }

            html, body, .container {
                height: auto;
            }
        }
        /* Responsive Full Background Image Using CSS
 * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
*/
        body {
            /* Location of the image */
            background-image: url(images/background-photo.jpg);

            /* Image is centered vertically and horizontally at all times */
            background-position: center center;

            /* Image doesn't repeat */
            background-repeat: no-repeat;

            /* Makes the image fixed in the viewport so that it doesn't move when
               the content height is greater than the image height */
            background-attachment: fixed;

            /* This is what makes the background image rescale based on its container's size */
            background-size: cover;

            /* Pick a solid background color that will be displayed while the background image is loading */
            background-color:#464646;

            /* SHORTHAND CSS NOTATION
             * background: url(background-photo.jpg) center center cover no-repeat fixed;
             */
        }

        /* For mobile devices */
        @media only screen and (max-width: 767px) {
            body {
                /* The file size of this background image is 93% smaller
                 * to improve page load speed on mobile internet connections */
                background-image: url(images/background-photo-mobile-devices.jpg);
            }
        }
    </style>
</head>
<body>
<header class="container">
    <section class="content">
        <h1>Make Money With CartEZ</h1>
        <p class="sub-title">if you are a commpany or want to become an entrepreneur then here's your shot <br>
            CartEZ offers you to open up your own shop with you very own customized shop layout. Sell whatever you like, earn money with zero hassle and less shop fee.<br>
            Grow your company bigger and stay tune for more --  CartEZ Team</p>
        <p><a class="button" id="load-more-content" href="{{route('Shop')}}">Take A Tour</a></p>

    </section>
</header>
</body>