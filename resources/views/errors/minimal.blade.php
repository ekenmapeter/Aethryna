<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <style>
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                background-color: #F5F5F5;
                color: #0C0C0C;
                margin: 0;
            }
            .flex-center {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                background: linear-gradient(135deg, #055860, #E8B647);
            }
            .content-box {
                background: white;
                padding: 3rem;
                border-radius: 20px;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                max-width: 500px;
                width: 90%;
            }
            .code {
                font-size: 2.5rem;
                font-weight: 800;
                color: #055860;
                border-right: 3px solid #E8B647;
                padding-right: 20px;
                margin-right: 20px;
            }
            .message {
                font-size: 1.25rem;
                font-weight: 600;
                color: #1a1a1a;
                text-transform: uppercase;
                letter-spacing: 0.05em;
            }
            .home-link {
                margin-top: 20px;
                display: inline-block;
                color: #055860;
                text-decoration: none;
                font-weight: 700;
                font-size: 0.9rem;
            }
            .home-link:hover {
                color: #E8B647;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            <div class="text-center">
                <div class="content-box">
                    <div class="code">
                        @yield('code')
                    </div>

                    <div class="message">
                        @yield('message')
                    </div>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="/" class="home-link" style="color: white; background: rgba(0,0,0,0.2); padding: 10px 20px; border-radius: 50px;">
                        <i class="fas fa-home"></i> Back to Homepage
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
