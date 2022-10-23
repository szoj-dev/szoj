<?php
include_once "./conf/entry.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>" data-theme="light" data-sidebar-behaviour="fixed" data-navigation-color="default" data-is-fluid="true">

<head>
    <title>首页 - SZOJ</title>
    <meta charset="<?php echo $config["szoj"]["charset"]; ?>">
    <?php if ($config["szoj"]["viewport"] === true) { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php } ?>
    <meta name="keywords" content="<?php echo $config["szoj"]["keywords"]; ?>">
    <meta name="description" content="<?php echo $config["szoj"]["description"]; ?>">
    <script>
        MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };
    </script>
    <script src="/dist/js/tex-svg.js"></script>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/dist/css/theme.bundle.css" id="stylesheetLTR" />
    <link rel="stylesheet" href="/dist/css/theme.rtl.bundle.css" id="stylesheetRTL" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    </noscript>

    <script src="/dist/js/theme.switch.js"></script>
    <script>
        var themeConfig = {
            theme: JSON.parse('"light"'),
            isRTL: JSON.parse('false'),
            isFluid: JSON.parse('true'),
            sidebarBehaviour: JSON.parse('"fixed"'),
            navigationColor: JSON.parse('"default"')
        };

        var isRTL = localStorage.getItem('isRTL') === 'true',
            isFluid = localStorage.getItem('isFluid') === 'true',
            theme = localStorage.getItem('theme'),
            sidebarSizing = localStorage.getItem('sidebarSizing'),
            linkLTR = document.getElementById('stylesheetLTR'),
            linkRTL = document.getElementById('stylesheetRTL'),
            html = document.documentElement;

        if (isRTL) {
            linkLTR.setAttribute('disabled', '');
            linkRTL.removeAttribute('disabled');
            html.setAttribute('dir', 'rtl');
        } else {
            linkRTL.setAttribute('disabled', '');
            linkLTR.removeAttribute('disabled');
            html.removeAttribute('dir');
        }
    </script>
</head>

<body>
    <script>
        let themeAttrs = document.documentElement.dataset;

        for (let attr in themeAttrs) {
            if (localStorage.getItem(attr) != null) {
                document.documentElement.dataset[attr] = localStorage.getItem(attr);

                if (theme === 'auto') {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement.dataset.theme = 'light';
                    });
                }
            }
        }
    </script>
    <!-- NAVIGATION -->
    <nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-white navbar-light">

        <!-- Theme configuration (navbar) -->
        <script>
            let navigationColor = localStorage.getItem('navigationColor'),
                navbar = document.getElementById('mainNavbar');

            if (navigationColor != null && navbar != null) {
                if (navigationColor == 'inverted') {
                    navbar.classList.add('bg-dark', 'navbar-dark');
                    navbar.classList.remove('bg-white', 'navbar-light');
                } else {
                    navbar.classList.add('bg-white', 'navbar-light');
                    navbar.classList.remove('bg-dark', 'navbar-dark');
                }
            }
        </script>
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand" href="./">
                <?php echo $config["szoj"]["name"]; ?>
            </a>

            <!-- Navbar toggler -->
            <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenavCollapse">

                <!-- Navigation -->
                <ul class="navbar-nav mb-lg-7">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="/">
                            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span><?php echo $home; ?></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#pagesCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pagesCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>common-file-double-1</title>
                                <path class="a" d="M17.25,23.25H3.75a1.5,1.5,0,0,1-1.5-1.5V5.25" />
                                <rect class="a" x="5.25" y="0.75" width="16.5" height="19.5" rx="1" ry="1" />
                            </svg>
                            <span>Pages</span>
                        </a>
                        <div class="collapse " id="pagesCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="./account.html" class="nav-link ">
                                        Account
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./user.html" class="nav-link ">
                                        User
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./pricing.html" class="nav-link ">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./wizard.html" class="nav-link ">
                                        Wizard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./help-center.html" class="nav-link ">
                                        Help Center
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./invoice.html" class="nav-link ">
                                        Invoice
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./api-keys.html" class="nav-link ">
                                        API Keys
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./maintenance.html" class="nav-link ">
                                        Maintenance
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./chat.html">
                            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./calendar.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>calendar</title>
                                <rect class="a" x="0.752" y="3.75" width="22.5" height="19.5" rx="1.5" ry="1.5" />
                                <line class="a" x1="0.752" y1="9.75" x2="23.252" y2="9.75" />
                                <line class="a" x1="6.752" y1="6" x2="6.752" y2="0.75" />
                                <line class="a" x1="17.252" y1="6" x2="17.252" y2="0.75" />
                            </svg>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#emailCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="emailCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <defs>
                                    <style>
                                        .a {
                                            fill: none;
                                            stroke: currentColor;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 1.5px;
                                        }
                                    </style>
                                </defs>
                                <title>envelope</title>
                                <rect class="a" x="0.75" y="4.5" width="22.5" height="15" rx="1.5" ry="1.5" />
                                <line class="a" x1="15.687" y1="9.975" x2="19.5" y2="13.5" />
                                <line class="a" x1="8.313" y1="9.975" x2="4.5" y2="13.5" />
                                <path class="a" d="M22.88,5.014l-9.513,6.56a2.406,2.406,0,0,1-2.734,0L1.12,5.014" />
                            </svg>
                            <span>Email</span>
                        </a>
                        <div class="collapse " id="emailCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="./inbox.html" class="nav-link ">
                                        Inbox
                                        <span class="badge text-bg-primary badge-circle ms-3">7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./read-email.html" class="nav-link ">
                                        Read Email
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#tasksCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tasksCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 10.511H10.5" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 14.261H8.25" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 18.011H8.25" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 23.25H2.25C1.85218 23.25 1.47064 23.092 1.18934 22.8107C0.908035 22.5294 0.75 22.1478 0.75 21.75V6C0.75 5.60218 0.908035 5.22064 1.18934 4.93934C1.47064 4.65804 1.85218 4.5 2.25 4.5H6C6 3.50544 6.39509 2.55161 7.09835 1.84835C7.80161 1.14509 8.75544 0.75 9.75 0.75C10.7446 0.75 11.6984 1.14509 12.4017 1.84835C13.1049 2.55161 13.5 3.50544 13.5 4.5H17.25C17.6478 4.5 18.0294 4.65804 18.3107 4.93934C18.592 5.22064 18.75 5.60218 18.75 6V8.25" />
                                <path stroke="currentColor" stroke-width="1.5" d="M9.75 4.51099C9.54289 4.51099 9.375 4.34309 9.375 4.13599C9.375 3.92888 9.54289 3.76099 9.75 3.76099" />
                                <path stroke="currentColor" stroke-width="1.5" d="M9.75 4.51099C9.95711 4.51099 10.125 4.34309 10.125 4.13599C10.125 3.92888 9.95711 3.76099 9.75 3.76099" />
                                <g>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 23.25C20.5637 23.25 23.25 20.5637 23.25 17.25C23.25 13.9363 20.5637 11.25 17.25 11.25C13.9363 11.25 11.25 13.9363 11.25 17.25C11.25 20.5637 13.9363 23.25 17.25 23.25Z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.9239 15.505L17.0189 19.379C16.9543 19.4649 16.8721 19.536 16.7776 19.5873C16.6832 19.6387 16.5789 19.6692 16.4717 19.6768C16.3645 19.6844 16.2569 19.6689 16.1562 19.6313C16.0555 19.5937 15.964 19.535 15.8879 19.459L14.3879 17.959" />
                                </g>
                            </svg>
                            <span>Tasks</span>
                        </a>
                        <div class="collapse " id="tasksCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="./kanban-board.html" class="nav-link ">
                                        Kanban Board
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./task-details.html" class="nav-link ">
                                        Task Details
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./file-manager.html">
                            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.25,9.75v-3a1.5,1.5,0,0,0-1.5-1.5H8.25V3.75a1.5,1.5,0,0,0-1.5-1.5H2.25a1.5,1.5,0,0,0-1.5,1.5v16.3a1.7,1.7,0,0,0,3.336.438l2.351-9.657A1.5,1.5,0,0,1,7.879,9.75H21.75A1.5,1.5,0,0,1,23.2,11.636l-2.2,9A1.5,1.5,0,0,1,19.55,21.75H2.447" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span>File Manager</span>
                            <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#authenticationCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authenticationCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.75 9.75H5.25C4.42157 9.75 3.75 10.4216 3.75 11.25V21.75C3.75 22.5784 4.42157 23.25 5.25 23.25H18.75C19.5784 23.25 20.25 22.5784 20.25 21.75V11.25C20.25 10.4216 19.5784 9.75 18.75 9.75Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 9.75V6C6.75 4.60761 7.30312 3.27226 8.28769 2.28769C9.27226 1.30312 10.6076 0.75 12 0.75C13.3924 0.75 14.7277 1.30312 15.7123 2.28769C16.6969 3.27226 17.25 4.60761 17.25 6V9.75" />
                                <path stroke="currentColor" stroke-width="1.5" d="M12 16.5C11.7929 16.5 11.625 16.3321 11.625 16.125C11.625 15.9179 11.7929 15.75 12 15.75" />
                                <path stroke="currentColor" stroke-width="1.5" d="M12 16.5C12.2071 16.5 12.375 16.3321 12.375 16.125C12.375 15.9179 12.2071 15.75 12 15.75" />
                            </svg>
                            <span>Authentication</span>
                        </a>
                        <div class="collapse " id="authenticationCollapse">
                            <ul class="nav flex-column">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#authenticationSignUpCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authenticationSignUpCollapse">
                                        Sign up
                                    </a>
                                    <div class="collapse " id="authenticationSignUpCollapse">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="./sign-up-cover.html" class="nav-link ">
                                                    Cover
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./sign-up-illustration.html" class="nav-link ">
                                                    Illustration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./sign-up-basic.html" class="nav-link ">
                                                    Basic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#authenticationSignInCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authenticationSignInCollapse">
                                        Sign In
                                    </a>
                                    <div class="collapse " id="authenticationSignInCollapse">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="./sign-in-cover.html" class="nav-link ">
                                                    Cover
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./sign-in-illustration.html" class="nav-link ">
                                                    Illustration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./sign-in-basic.html" class="nav-link ">
                                                    Basic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#authenticationResetPasswordCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authenticationResetPasswordCollapse">
                                        Reset Password
                                    </a>
                                    <div class="collapse " id="authenticationResetPasswordCollapse">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="./reset-password-cover.html" class="nav-link ">
                                                    Cover
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./reset-password-illustration.html" class="nav-link ">
                                                    Illustration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./reset-password-basic.html" class="nav-link ">
                                                    Basic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#authenticationEmailVerificationCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authenticationEmailVerificationCollapse">
                                        Email Verification
                                    </a>
                                    <div class="collapse " id="authenticationEmailVerificationCollapse">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="./email-verification-cover.html" class="nav-link ">
                                                    Cover
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./email-verification-illustration.html" class="nav-link ">
                                                    Illustration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./email-verification-basic.html" class="nav-link ">
                                                    Basic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#authentication2StepVerificationCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication2StepVerificationCollapse">
                                        2-step Verification
                                    </a>
                                    <div class="collapse " id="authentication2StepVerificationCollapse">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="./2-step-verification-cover.html" class="nav-link ">
                                                    Cover
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./2-step-verification-illustration.html" class="nav-link ">
                                                    Illustration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./2-step-verification-basic.html" class="nav-link ">
                                                    Basic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown " href="#authenticationErrorCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="authenticationErrorCollapse">
                                        Error
                                    </a>
                                    <div class="collapse " id="authenticationErrorCollapse">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="./error-cover.html" class="nav-link ">
                                                    Cover
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./error-illustration.html" class="nav-link ">
                                                    Illustration
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="./error-basic.html" class="nav-link ">
                                                    Basic
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item w-100">
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/index.html" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18">
                                <path d="M22.627 14.87 15 22.5l-3.75.75.75-3.75 7.631-7.63a2.113 2.113 0 0 1 2.991 0l.009.008a2.116 2.116 0 0 1-.004 2.992zM8.246 20.25h-6a1.5 1.5 0 0 1-1.5-1.5V2.25a1.5 1.5 0 0 1 1.5-1.5h15a1.5 1.5 0 0 1 1.5 1.5V9m-10.5-3.75h6m-9 4.5h9m-9 4.5h7.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span>Documentation</span>
                            <span class="badge text-bg-primary rounded-pill ms-auto">v1.0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./docs/accordion.html" class="nav-link">
                            <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.91,6.953,12.7,1.672a1.543,1.543,0,0,0-1.416,0L1.076,6.953a.615.615,0,0,0,0,1.094l10.209,5.281a1.543,1.543,0,0,0,1.416,0L22.91,8.047a.616.616,0,0,0,0-1.094Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M.758,12.75l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                <path d="M.758,17.25l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,17.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                            <span>Components</span>
                        </a>
                    </li>
                </ul>
                <!-- End of Navigation -->

                <!-- Info box -->
                <div class="help-box rounded-3 py-5 px-4 text-center mt-auto">
                    <img src="https://d33wubrfki0l68.cloudfront.net/87584482299b2cc1ec6f1e31ccfb1d42669f7a7a/4abee/assets/images/illustrations/upgrade-illustration.svg" alt="..." class="img-fluid mb-4" width="160" height="160">
                    <h6>Upgrade to explore<br> <span class="emphasize">premium</span> features</h6>

                    <!-- Button -->
                    <a class="btn w-100 btn-sm btn-primary" href="javascript: void(0);">Upgrade to Business</a>
                </div>
            </div>
            <!-- End of Collapse -->
        </div>
    </nav>
    <!-- MAIN CONTENT -->
    <main>

        <!-- HEADER -->
        <header class="container-fluid d-flex py-6 mb-4">

            <!-- Search -->
            <form class="d-none d-md-inline-block me-auto">
                <div class="input-group input-group-merge">

                    <!-- Input -->
                    <input type="text" class="form-control bg-light-green border-light-green w-250px" placeholder="Search..." aria-label="Search for any term">

                    <!-- Button -->
                    <span class="input-group-text bg-light-green border-light-green p-0">

                        <!-- Button -->
                        <button class="btn btn-primary rounded-2 w-30px h-30px p-0 mx-1" type="button" aria-label="Search button">
                            <svg viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.750 9.812 A9.063 9.063 0 1 0 18.876 9.812 A9.063 9.063 0 1 0 0.750 9.812 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" transform="translate(-3.056 4.62) rotate(-23.025)" />
                                <path d="M16.221 16.22L23.25 23.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                        </button>
                    </span>
                </div>
            </form>

            <!-- Top buttons -->
            <div class="d-flex align-items-center ms-auto me-n1 me-lg-n2">

                <!-- Dropdown -->
                <div class="dropdown" id="themeSwitcher">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="18" width="18">
                            <g>
                                <path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor" />
                                <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor" />
                                <path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor" />
                                <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                <path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor" />
                                <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor" />
                                <path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor" />
                                <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                <path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor" />
                            </g>
                        </svg>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <button type="button" class="dropdown-item active" data-theme-value="light">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <g>
                                        <path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor" />
                                        <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor" />
                                        <path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor" />
                                        <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                        <path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor" />
                                        <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor" />
                                        <path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor" />
                                        <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                        <path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor" />
                                    </g>
                                </svg>
                                <?php echo $lightmode; ?>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-theme-value="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z" style="fill: currentColor" />
                                </svg>
                                <?php echo $darkmode; ?>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-theme-value="auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z" style="fill: currentColor" />
                                </svg>
                                <?php echo $auto; ?>
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Separator -->
                <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <span class="avatar avatar-circle avatar-xxs">
                            <img class="avatar-img" src="<?php echo $locale == "en_US" ? "/dist/img/us.svg": "/dist/img/cn.svg"; ?>" alt="..." width="18" height="18" />
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <h6 class="dropdown-header text-uppercase"><?php echo $selectLang; ?></h6>
                        </li>
                        <li>
                            <a href="/setlocale.php?loc=en_US&ret=<?php echo $_SERVER["REQUEST_URI"]; ?>" class="dropdown-item<?php if ($locale == "en_US") echo " active"; ?>">
                                <span class="avatar avatar-circle avatar-xxs">
                                <img class="avatar-img" src="/dist/img/us.svg" alt="..." width="18" height="18" /></span>
                                <span class="text-truncate ms-2">English (United States)</span>
                            </a>
                        </li>
                        <li>
                            <a href="/setlocale.php?loc=zh_CN&ret=<?php echo $_SERVER["REQUEST_URI"]; ?>" class="dropdown-item<?php if ($locale == "zh_CN") echo " active"; ?>">
                                <span class="avatar avatar-circle avatar-xxs">
                                <img class="avatar-img" src="/dist/img/cn.svg" alt="..." width="18" height="18" /></span>
                                <span class="text-truncate ms-2">简体中文</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Separator -->
                <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                <!-- Button -->
                <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary" data-bs-toggle="offcanvas" href="#offcanvasNotifications" role="button" aria-controls="offcanvasNotifications">
                    <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10,21.75a2.087,2.087,0,0,0,4.005,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        <path d="M12 3L12 0.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        <path d="M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                    </svg>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                        20+<span class="visually-hidden">unread messages</span>
                    </span>
                </a>

                <!-- Notifications offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNotifications" aria-labelledby="offcanvasNotificationsLabel">
                    <div class="offcanvas-header px-5">
                        <h3 class="offcanvas-title" id="offcanvasNotificationsLabel">Notifications</h3>

                        <div class="d-flex align-items-start">
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow w-20px h-20px me-2 text-body" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="16" width="16">
                                        <g>
                                            <circle cx="3.25" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="20.75" cy="12" r="3.25" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <path d="M23.22,2.06a1.49,1.49,0,0,0-2,.59l-8.5,15.43L6.46,11.29a1.5,1.5,0,1,0-2.21,2l7.64,8.34a1.52,1.52,0,0,0,2.42-.29L23.81,4.1A1.5,1.5,0,0,0,23.22,2.06Z" style="fill: currentColor" />
                                                    <path d="M2.61,14.63a1.5,1.5,0,0,0-2.22,2l4.59,5a1.52,1.52,0,0,0,2.11.09,1.49,1.49,0,0,0,.1-2.12Z" style="fill: currentColor" />
                                                    <path d="M10.3,13a1.41,1.41,0,0,0,2-.54L16.89,4.1a1.5,1.5,0,1,0-2.62-1.45L9.68,11A1.41,1.41,0,0,0,10.3,13Z" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            Mark as all read
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <path d="M21.5,2.5H2.5a2,2,0,0,0-2,2v3a1,1,0,0,0,1,1h21a1,1,0,0,0,1-1v-3A2,2,0,0,0,21.5,2.5Z" style="fill: currentColor" />
                                                    <path d="M21.5,10H2.5a1,1,0,0,0-1,1v8.5a2,2,0,0,0,2,2h17a2,2,0,0,0,2-2V11A1,1,0,0,0,21.5,10Zm-6.25,3.5A1.25,1.25,0,0,1,14,14.75H10a1.25,1.25,0,0,1,0-2.5h4A1.25,1.25,0,0,1,15.25,13.5Z" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            Archive all
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <path d="M21,19.5a1,1,0,0,0,0-2A1.5,1.5,0,0,1,19.5,16V11.14a8.65,8.65,0,0,0-.4-2.62l-11,11Z" style="fill: currentColor" />
                                                    <path d="M14.24,21H9.76a.25.25,0,0,0-.24.22,2.64,2.64,0,0,0,0,.28,2.5,2.5,0,0,0,5,0,2.64,2.64,0,0,0,0-.28A.25.25,0,0,0,14.24,21Z" style="fill: currentColor" />
                                                    <path d="M1,24a1,1,0,0,0,.71-.28l22-22a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0l-5,5A7.31,7.31,0,0,0,13,3.07V1a1,1,0,0,0-2,0V3.07a8,8,0,0,0-6.5,8.07V16A1.5,1.5,0,0,1,3,17.5a1,1,0,0,0,0,2h.09L.29,22.29a1,1,0,0,0,0,1.42A1,1,0,0,0,1,24Z" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            Disable notifications
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript: void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2 text-secondary" height="14" width="14">
                                                <g>
                                                    <rect x="4.25" y="4.5" width="5.75" height="7.25" rx="1.25" style="fill: currentColor" />
                                                    <path d="M24,10a3,3,0,0,0-3-3H19V2.5a2,2,0,0,0-2-2H2a2,2,0,0,0-2,2V20a3.5,3.5,0,0,0,3.5,3.5h17A3.5,3.5,0,0,0,24,20ZM3.5,21.5A1.5,1.5,0,0,1,2,20V3a.5.5,0,0,1,.5-.5h14A.5.5,0,0,1,17,3V20a3.51,3.51,0,0,0,.11.87.5.5,0,0,1-.09.44.49.49,0,0,1-.39.19ZM22,20a1.5,1.5,0,0,1-3,0V9.5a.5.5,0,0,1,.5-.5H21a1,1,0,0,1,1,1Z" style="fill: currentColor" />
                                                    <rect x="12" y="6.05" width="3.5" height="2" rx="0.75" style="fill: currentColor" />
                                                    <rect x="12" y="10.05" width="3.5" height="2" rx="0.75" style="fill: currentColor" />
                                                    <rect x="4" y="14.05" width="11.5" height="2" rx="0.75" style="fill: currentColor" />
                                                    <rect x="4" y="18.05" width="9" height="2" rx="0.75" style="fill: currentColor" />
                                                </g>
                                            </svg>
                                            What's new?
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Button -->
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="offcanvas-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Daniel</h5>
                                            <small class="text-muted">10 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">RE: Email pre-population from external source</p>
                                            <small class="text-secondary">Not sure if we'll need any further instruction on how to utilise the encoded ID in links from the new email broadcast tool.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-info-soft">M</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Mochahost.com</h5>
                                            <small class="text-muted">14 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Customer invoice</p>
                                            <small class="text-secondary">This is a notice that an invoice has been generated on 05/14/2022.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Harry</h5>
                                            <small class="text-muted">32 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Farewell card</p>
                                            <small class="text-secondary">Hi everyone, thanks to all who have already signed and contributed to Ellie's leaving card.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Gavin</h5>
                                            <small class="text-muted">55 minutes ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Weekly cath up</p>
                                            <small class="text-secondary">Let's see how your emails performed in the past week.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Pamela - HR</h5>
                                            <small class="text-muted">1 hour ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">New starter</p>
                                            <small class="text-secondary">I wanted to introduce Alan to you all, who starts today in the Operations Team as our new Global Payroll & Benefits Manager.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/9f5880fc99a40d5021e5a133fe72f232e3883d3a/c965d/assets/images/profiles/profile-13.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">James</h5>
                                            <small class="text-muted">2 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Looking for newsletter analyst</p>
                                            <small class="text-secondary">Good morning Brian, I hope you can help with the following. I am looking for somebody who can help us create stronger newsletters.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary-soft">S</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">service.paypal.com</h5>
                                            <small class="text-muted">3 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">You have a Payout!</p>
                                            <small class="text-secondary">Please note that it may take a little while for this payment to appear in the Activity section of your account.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary-soft">C</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">CookieYes</h5>
                                            <small class="text-muted">5 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Welcome to CookieYes!</p>
                                            <small class="text-secondary">Welcome to CookieYes! Thank you for creating an account with us.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Andrew</h5>
                                            <small class="text-muted">6 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Congratulations! - and thank you</p>
                                            <small class="text-secondary">Thank you so much for continuing to leave no stone unturned in pursuit of new milestones of success.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Helen</h5>
                                            <small class="text-muted">9 hours ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Bank Holidays season starts tomorrow</p>
                                            <small class="text-secondary">Our office will be closed on these days, as it will also be on Friday 6 May.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/eec1f115f0af81936bbe3a4f4a4d043cd3c0e7e4/34439/assets/images/profiles/profile-09.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Tiffany</h5>
                                            <small class="text-muted">1 day ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">External meetings and events</p>
                                            <small class="text-secondary">We have updated our external meeting and events protocol. Please have a look at the office board.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-danger-soft">II</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Ionos Info</h5>
                                            <small class="text-muted">2 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Recommend us to earn attractive commissions</p>
                                            <small class="text-secondary">Happy with your product or service? Sign up for the IONOS Referral Program to recommend us to your business partners, friends or family. We'll reward you with attractive commissions when they place an order.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/102e41d9e1988e0849ecfe402b1d46f4efd3574b/8dc2e/assets/images/profiles/profile-12.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Edward</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Website change request</p>
                                            <small class="text-secondary">Please add video overlay option to microsite header image</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-primary">BT</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Bootstrap Themes</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">[Bootstrap Themes] New order (123456)!</p>
                                            <small class="text-secondary">You've received the following order from alansmith</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/e83422b2242219796524c41b945eb0a4b4b75dfd/caa0b/assets/images/profiles/profile-08.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Greg</h5>
                                            <small class="text-muted">4 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Greg Smith (Jira) 2</p>
                                            <small class="text-secondary">[JIRA] (WEB-1022) Add Full Width Video Content Block to microsites</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/790b7dd581a3ac4fd0410afad0fb12c6e93c9e7a/b0657/assets/images/profiles/profile-07.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Michael</h5>
                                            <small class="text-muted">5 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">Hard drive limit</p>
                                            <small class="text-secondary">Your hard drive is close to its storage cap. Once exceeded, you can't add new items or sync changes.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <span class="avatar-title text-bg-info">RC</span>
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Rave Coffee</h5>
                                            <small class="text-muted">6 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">It's Double Points - ⏰ 24 hours only</p>
                                            <small class="text-secondary">Login to your Rave account to place your order and you will automatically earn double points on every $ spent.</small>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/4b8c918c73e2c72876e4bd4ba8c89401bae69d14/5923c/assets/images/profiles/profile-03.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                    </div>

                                    <div class="d-flex flex-column flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">John</h5>
                                            <small class="text-muted">7 days ago</small>
                                        </div>

                                        <div class="d-flex flex-column">
                                            <p class="mb-1">John Po (Jira)</p>
                                            <small class="text-secondary">Improving slide arrows and indicators on gift impact, testimonial and victories module</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <svg viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.250 12.000 A3.750 3.750 0 1 0 15.750 12.000 A3.750 3.750 0 1 0 8.250 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M17.119 20.301L12.529 15.711" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M15.711 12.53L20.301 17.119" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M3.699 17.119L8.289 12.529" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M11.471 15.712L6.881 20.301" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M6.881 3.7L11.471 8.289" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M8.289 11.471L3.699 6.881" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M20.301 6.881L15.711 11.471" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M12.529 8.289L17.119 3.7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M2.250 12.000 A9.750 9.750 0 1 0 21.750 12.000 A9.750 9.750 0 1 0 2.250 12.000 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end w-300px h-250px overflow-auto scrollbar">
                        <h6 class="dropdown-header text-uppercase"><?php echo $friendLinks; ?></h6>
                        <div class="row container">
                            <a href="https://oi-wiki.org">OI Wiki</a>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <a class="d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary" data-bs-toggle="offcanvas" href="#offcanvasCustomize" role="button" aria-controls="offcanvasCustomize">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="18" width="18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.77069 9.50524C7.60364 9.43126 7.45391 9.32316 7.33112 9.18788L6.70112 8.48788C6.5212 8.28484 6.28225 8.14317 6.01778 8.08272C5.7533 8.02228 5.47654 8.0461 5.22627 8.15083C4.97601 8.25557 4.76478 8.43598 4.62219 8.66678C4.4796 8.89758 4.41279 9.16721 4.43112 9.43788V10.3679C4.44125 10.5505 4.41275 10.7331 4.34748 10.9039C4.28221 11.0747 4.18165 11.2298 4.05235 11.3591C3.92306 11.4884 3.76795 11.589 3.59714 11.6542C3.42634 11.7195 3.24369 11.748 3.06112 11.7379L2.12112 11.6879C1.85153 11.6753 1.58463 11.7463 1.35691 11.8911C1.12919 12.036 0.951762 12.2476 0.848892 12.4971C0.746023 12.7467 0.72273 13.0219 0.782196 13.2851C0.841663 13.5484 0.980987 13.7868 1.18112 13.9679L1.88112 14.5879C2.01927 14.7148 2.129 14.8695 2.20311 15.0419C2.27722 15.2142 2.31403 15.4003 2.31112 15.5879C2.31532 15.7757 2.2791 15.9621 2.2049 16.1347C2.13071 16.3072 2.02029 16.4618 1.88112 16.5879L1.18112 17.2179C0.981519 17.3992 0.842717 17.6376 0.783657 17.9007C0.724597 18.1638 0.748157 18.4387 0.85112 18.6879C0.954125 18.9362 1.13156 19.1464 1.359 19.2897C1.58644 19.433 1.8527 19.5022 2.12112 19.4879H3.06112C3.24369 19.4778 3.42634 19.5063 3.59714 19.5715C3.76795 19.6368 3.92306 19.7374 4.05235 19.8666C4.18165 19.9959 4.28221 20.1511 4.34748 20.3219C4.41275 20.4927 4.44125 20.6753 4.43112 20.8579V21.7879C4.4151 22.0577 4.48357 22.3258 4.62702 22.5549C4.77046 22.784 4.98174 22.9626 5.23147 23.066C5.48119 23.1694 5.75693 23.1925 6.02034 23.1318C6.28374 23.0712 6.5217 22.93 6.70112 22.7279L7.33112 22.0379C7.45391 21.9026 7.60364 21.7945 7.77069 21.7205C7.93775 21.6466 8.11842 21.6083 8.30112 21.6083C8.48382 21.6083 8.6645 21.6466 8.83155 21.7205C8.9986 21.7945 9.14833 21.9026 9.27112 22.0379L9.90112 22.7279C10.0805 22.93 10.3185 23.0712 10.5819 23.1318C10.8453 23.1925 11.1211 23.1694 11.3708 23.066C11.6205 22.9626 11.8318 22.784 11.9752 22.5549C12.1187 22.3258 12.1871 22.0577 12.1711 21.7879V20.8579C12.161 20.6753 12.1895 20.4927 12.2548 20.3219C12.32 20.1511 12.4206 19.9959 12.5499 19.8666C12.6792 19.7374 12.8343 19.6368 13.0051 19.5715C13.1759 19.5063 13.3586 19.4778 13.5411 19.4879H14.4811C14.7495 19.5022 15.0158 19.433 15.2432 19.2897C15.4707 19.1464 15.6481 18.9362 15.7511 18.6879C15.8541 18.4387 15.8776 18.1638 15.8186 17.9007C15.7595 17.6376 15.6207 17.3992 15.4211 17.2179L14.7211 16.5879C14.582 16.4618 14.4715 16.3072 14.3973 16.1347C14.3231 15.9621 14.2869 15.7757 14.2911 15.5879C14.2882 15.4003 14.325 15.2142 14.3991 15.0419C14.4732 14.8695 14.583 14.7148 14.7211 14.5879L15.4211 13.9679C15.6213 13.7868 15.7606 13.5484 15.82 13.2851C15.8795 13.0219 15.8562 12.7467 15.7533 12.4971C15.6505 12.2476 15.4731 12.036 15.2453 11.8911C15.0176 11.7463 14.7507 11.6753 14.4811 11.6879L13.5411 11.7379C13.3586 11.748 13.1759 11.7195 13.0051 11.6542C12.8343 11.589 12.6792 11.4884 12.5499 11.3591C12.4206 11.2298 12.32 11.0747 12.2548 10.9039C12.1895 10.7331 12.161 10.5505 12.1711 10.3679V9.43788C12.1895 9.16721 12.1226 8.89758 11.98 8.66678C11.8375 8.43598 11.6262 8.25557 11.376 8.15083C11.1257 8.0461 10.8489 8.02228 10.5845 8.08272C10.32 8.14317 10.081 8.28484 9.90112 8.48788L9.27112 9.18788C9.14833 9.32316 8.9986 9.43126 8.83155 9.50524C8.6645 9.57922 8.48382 9.61743 8.30112 9.61743C8.11842 9.61743 7.93775 9.57922 7.77069 9.50524Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.30114 17.4379C9.33944 17.4379 10.1811 16.5962 10.1811 15.5579C10.1811 14.5196 9.33944 13.6779 8.30114 13.6779C7.26285 13.6779 6.42114 14.5196 6.42114 15.5579C6.42114 16.5962 7.26285 17.4379 8.30114 17.4379Z" />
                        <path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C17.8804 6.23828 17.6565 6.01442 17.6565 5.73828C17.6565 5.46214 17.8804 5.23828 18.1565 5.23828" />
                        <path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C18.4326 6.23828 18.6565 6.01442 18.6565 5.73828C18.6565 5.46214 18.4326 5.23828 18.1565 5.23828" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.1347 1.83506C16.1409 1.62338 16.2152 1.41935 16.3466 1.25325C16.478 1.08716 16.6594 0.967851 16.8639 0.91304C17.0685 0.85823 17.2853 0.870838 17.4821 0.948992C17.6789 1.02715 17.8453 1.16668 17.9565 1.34689L18.551 2.30113C18.6493 2.45959 18.8042 2.57479 18.9842 2.62343C19.1643 2.67207 19.3561 2.65052 19.5209 2.56313L20.508 2.03729C20.6955 1.93854 20.9096 1.90249 21.1191 1.93443C21.3285 1.96638 21.5222 2.06463 21.6716 2.21476C21.8211 2.3649 21.9185 2.559 21.9495 2.76857C21.9805 2.97814 21.9435 3.19214 21.8439 3.37912L21.3171 4.37019C21.2295 4.53545 21.2077 4.72774 21.2561 4.90841C21.3045 5.08907 21.4195 5.24471 21.578 5.34404L22.5273 5.9411C22.7071 6.05324 22.8461 6.22006 22.924 6.41706C23.002 6.61406 23.0147 6.83085 22.9603 7.03561C22.9059 7.24036 22.7873 7.42229 22.6219 7.55467C22.4565 7.68705 22.253 7.7629 22.0413 7.7711L20.9235 7.80929C20.7371 7.816 20.5602 7.89324 20.4286 8.02539C20.297 8.15754 20.2205 8.33473 20.2145 8.52115L20.179 9.64113C20.1727 9.85281 20.0984 10.0568 19.967 10.2229C19.8357 10.389 19.6542 10.5083 19.4497 10.5631C19.2451 10.618 19.0284 10.6053 18.8315 10.5272C18.6347 10.449 18.4683 10.3095 18.3571 10.1293L17.762 9.17525C17.6638 9.0168 17.509 8.90157 17.3291 8.85289C17.1492 8.80422 16.9575 8.82572 16.7928 8.91305L15.8049 9.43908C15.6175 9.53784 15.4033 9.57389 15.1939 9.54194C14.9844 9.51 14.7908 9.41175 14.6413 9.26161C14.4918 9.11148 14.3944 8.91737 14.3634 8.7078C14.3324 8.49823 14.3694 8.28424 14.469 8.09725L14.9933 7.10534C15.0809 6.94007 15.1027 6.74778 15.0543 6.56712C15.0059 6.38645 14.8909 6.23081 14.7324 6.13148L13.7831 5.53748C13.6034 5.42533 13.4643 5.25851 13.3864 5.06151C13.3085 4.86452 13.2958 4.64772 13.3501 4.44296C13.4045 4.23821 13.5231 4.05628 13.6885 3.92391C13.8539 3.79153 14.0574 3.71567 14.2691 3.70748L15.3877 3.66909C15.5739 3.66238 15.7507 3.58515 15.8822 3.45302C16.0137 3.32089 16.0901 3.14374 16.0959 2.95743L16.1347 1.83506Z" />
                    </svg>
                </a>

                <!-- Custmization offcanvas -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCustomize" aria-labelledby="offcanvasCustomizeTitle">
                    <div class="offcanvas-body pt-7 pb-5 position-relative">

                        <button type="button" class="btn-close position-absolute top-0 end-0 mt-5 me-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                        <div class="text-center">
                            <img src="https://d33wubrfki0l68.cloudfront.net/0e108d71de2aec22aae71d891ecabd0ec28dc2bb/8484b/assets/images/illustrations/customization-illustration.svg" alt="..." class="img-fluid w-50 mb-5" width="170" height="170">
                            <h3 class="mb-2" id="offcanvasCustomizeTitle"><?php echo $theme_main; ?></h3>
                            <p class="mb-0"><?php echo $theme_sub; ?></p>
                        </div>

                        <hr />

                        <h4 class="mb-0"><?php echo $clscheme; ?></h4>
                        <p class="text-secondary fs-5 mb-4"><?php echo $clscheme_sub; ?></p>
                        <div class="btn-group w-100 mb-7" role="group" aria-label="Light/dark switcher">
                            <input type="radio" class="btn-check" name="theme" id="lightMode" value="light" data-theme-control="theme">
                            <label class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center" for="lightMode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <g>
                                        <path d="M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z" style="fill: currentColor" />
                                        <path d="M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z" style="fill: currentColor" />
                                        <path d="M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z" style="fill: currentColor" />
                                        <path d="M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z" style="fill: currentColor" />
                                        <path d="M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z" style="fill: currentColor" />
                                        <path d="M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z" style="fill: currentColor" />
                                        <path d="M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z" style="fill: currentColor" />
                                        <path d="M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z" style="fill: currentColor" />
                                        <path d="M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z" style="fill: currentColor" />
                                    </g>
                                </svg>
                                <?php echo $light; ?>
                            </label>

                            <input type="radio" class="btn-check" name="theme" id="darkMode" value="dark" data-theme-control="theme">
                            <label class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center" for="darkMode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z" style="fill: currentColor" />
                                </svg>
                                <?php echo $dark; ?>
                            </label>

                            <input type="radio" class="btn-check" name="theme" id="autoMode" value="auto" data-theme-control="theme">
                            <label class="btn btn-outline-primary px-3 w-100 d-flex align-items-center justify-content-center" for="autoMode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="18" width="18">
                                    <path d="M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z" style="fill: currentColor" />
                                </svg>
                                <?php echo $auto; ?>
                            </label>
                        </div>

                        <h4 class="mb-0"><?php echo $navcolor; ?></h4>
                        <p class="text-secondary fs-5 mb-4"><?php echo $navcolor_sub; ?></p>
                        <div class="btn-group w-100 mb-7" role="group" aria-label="Navigation color switcher">
                            <input type="radio" class="btn-check" name="navigationColor" id="defaultColor" value="default" data-theme-control="navigationColor">
                            <label class="btn btn-outline-primary w-50" for="defaultColor">
                                <?php echo $default; ?>
                            </label>

                            <input type="radio" class="btn-check" name="navigationColor" id="invertedColor" value="inverted" data-theme-control="navigationColor">
                            <label class="btn btn-outline-primary w-50" for="invertedColor">
                                <?php echo $inverted; ?>
                            </label>
                        </div>

                        <h4 class="mb-0"><?php echo $sideBarBehavior; ?></h4>
                        <p class="text-secondary fs-5 mb-4"><?php echo $sbb2; ?></p>
                        <div class="btn-group w-100 mb-7" role="group" aria-label="Sidebar layout switcher">
                            <input type="radio" class="btn-check" name="sidebarSizing" id="fixed" value="fixed" data-theme-control="sidebarBehaviour">
                            <label class="btn btn-outline-primary px-3 w-100" for="fixed">
                                <?php echo $sbb_fixed; ?>
                            </label>

                            <input type="radio" class="btn-check" name="sidebarSizing" id="condensed" value="condensed" data-theme-control="sidebarBehaviour">
                            <label class="btn btn-outline-primary px-3 w-100" for="condensed">
                                <?php echo $sbb_condensed; ?>
                            </label>

                            <input type="radio" class="btn-check" name="sidebarSizing" id="scrollable" value="scrollable" data-theme-control="sidebarBehaviour">
                            <label class="btn btn-outline-primary px-3 w-100" for="scrollable">
                                <?php echo $sbb_scroll; ?>
                            </label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div class="d-flex flex-column">
                                <label class="h4 mb-0 d-flex align-items-center" for="isFluid">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16" width="16">
                                        <path d="M4.79,17.21a1,1,0,0,0,.71.29.84.84,0,0,0,.38-.08,1,1,0,0,0,.62-.92v-3a.25.25,0,0,1,.25-.25h10.5a.25.25,0,0,1,.25.25v3a1,1,0,0,0,.62.92.84.84,0,0,0,.38.08,1,1,0,0,0,.71-.29l4.5-4.5a1,1,0,0,0,0-1.42l-4.5-4.5a1,1,0,0,0-1.09-.21,1,1,0,0,0-.62.92v3a.25.25,0,0,1-.25.25H6.75a.25.25,0,0,1-.25-.25v-3a1,1,0,0,0-.62-.92,1,1,0,0,0-1.09.21l-4.5,4.5a1,1,0,0,0,0,1.42Z" style="fill: currentColor" />
                                    </svg>
                                    <?php echo $fluidLayout; ?>
                                </label>
                                <p class="text-secondary fs-5 mb-0"><?php echo $toggleContLayoutSys; ?></p>
                            </div>

                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch" data-theme-control="isFluid" id="isFluid" aria-label="Fluid layout switcher" checked>
                            </div>
                        </div>


                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div class="d-flex flex-column">
                                <label class="h4 mb-0 d-flex align-items-center" for="isRTL">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16" width="16">
                                        <g>
                                            <path d="M4.15,15.85A.47.47,0,0,0,4.5,16a.43.43,0,0,0,.19,0A.5.5,0,0,0,5,15.5V13a.25.25,0,0,1,.25-.25H11.5a1.25,1.25,0,0,0,0-2.5H5.25A.25.25,0,0,1,5,10V7.5A.49.49,0,0,0,4.69,7a.47.47,0,0,0-.54.11l-4,4a.48.48,0,0,0,0,.7Z" style="fill: currentColor" />
                                            <rect x="15.5" width="8.5" height="24" rx="2" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                    <?php echo $rtlMode; ?>
                                </label>
                                <p class="text-secondary fs-5 mb-0"><?php echo $switchLangDir; ?></p>
                            </div>

                            <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch" data-theme-control="isRTL" id="isRTL" aria-label="RTL switcher">
                            </div>
                        </div>

                        <div class="row gx-4 mt-auto">
                            <div class="col-12">
                                <hr />
                            </div>
                            <div class="col-lg mb-3">
                                <button class="btn btn-light w-100 d-flex align-items-center justify-content-center" id="resetThemeConfig">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="me-2" height="16" width="16">
                                        <path d="M12.57,1.26A10.81,10.81,0,0,0,2.82,8.4a.25.25,0,0,1-.27.16L.86,8.31a.52.52,0,0,0-.49.21.51.51,0,0,0,0,.53L3,13.75a.51.51,0,0,0,.43.25.52.52,0,0,0,.36-.14l3.77-3.75a.5.5,0,0,0-.28-.85L5.59,9a.26.26,0,0,1-.18-.13.24.24,0,0,1,0-.22,8.26,8.26,0,1,1,7.87,11.59,1.25,1.25,0,1,0,.09,2.5,10.75,10.75,0,0,0-.79-21.49Z" style="fill: currentColor" />
                                    </svg>
                                    <?php echo $reset; ?>
                                </button>
                            </div>
                            <div class="col-lg mb-3">
                                <button class="btn btn-dark w-100 d-flex align-items-center justify-content-center" id="previewThemeConfig">
                                    <?php echo $set; ?>
                                </button>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
                <!-- Separator -->
                <div class="vr bg-gray-700 mx-2 mx-lg-3"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">
                        <div class="avatar avatar-circle avatar-sm avatar-online">
                            <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40" height="40">
                        </div>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdown-item-text">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm avatar-circle">
                                    <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg" alt="..." class="avatar-img" width="40" height="40">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-0">Ellie Tucker</h4>
                                    <p class="card-text">ellie.tucker@dashly.com</p>
                                </div>
                            </div>
                        </div>

                        <hr class="dropdown-divider">

                        <!-- Dropdown -->
                        <div class="dropdown dropend">
                            <a class="dropdown-item dropdown-toggle" href="javascript: void(0);" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-6,12">
                                Set status
                            </a>

                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="statusDropdown">
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-success me-2"></span>Available
                                </a>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-danger me-2"></span>Busy
                                </a>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-warning me-2"></span>Away
                                </a>
                                <a class="dropdown-item" href="javascript: void(0);">
                                    <span class="legend-circle bg-gray-500 me-2"></span>Appear offline
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="javascript: void(0);">
                                    Reset status
                                </a>
                            </div>
                        </div>
                        <!-- End Dropdown -->

                        <a class="dropdown-item" href="javascript: void(0);">Profile & account</a>
                        <a class="dropdown-item" href="javascript: void(0);">Settings</a>

                        <hr class="dropdown-divider">

                        <a class="dropdown-item" href="javascript: void(0);">Sign out</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">

            <!-- Title -->
            <h1 class="h2">
                Dashboard
            </h1>

            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex justify-content-between">

                                            <div>
                                                <!-- Title -->
                                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                                    <span class="legend-circle-sm bg-success"></span>
                                                    Income
                                                </h5>

                                                <!-- Subtitle -->
                                                <h2 class="mb-0">
                                                    $3,240
                                                </h2>

                                                <!-- Comment -->
                                                <p class="fs-6 text-muted mb-0">
                                                    No additional income
                                                </p>
                                            </div>

                                            <span class="text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32">
                                                    <defs>
                                                        <style>
                                                            .a {
                                                                fill: none;
                                                                stroke: currentColor;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-width: 1.5px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title>cash-briefcase</title>
                                                    <path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687" />
                                                    <line class="a" x1="12" y1="9.75" x2="12" y2="10.875" />
                                                    <line class="a" x1="12" y1="17.625" x2="12" y2="18.75" />
                                                    <rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5" />
                                                    <path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col d-flex justify-content-between">

                                            <div>
                                                <!-- Title -->
                                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                                    <span class="legend-circle-sm bg-danger"></span>
                                                    Expense
                                                </h5>

                                                <!-- Subtitle -->
                                                <h2 class="mb-0">
                                                    $1,500
                                                </h2>

                                                <!-- Comment -->
                                                <p class="fs-6 text-muted mb-0 text-truncate">
                                                    + $6.50 bank charges fee
                                                </p>
                                            </div>

                                            <span class="text-primary">
                                                <svg viewBox="0 0 24 24" height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.75,14.25H16.717a1.342,1.342,0,0,0-.5,2.587l2.064.826a1.342,1.342,0,0,1-.5,2.587H15.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M17.25 14.25L17.25 13.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M17.25 21L17.25 20.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M11.250 17.250 A6.000 6.000 0 1 0 23.250 17.250 A6.000 6.000 0 1 0 11.250 17.250 Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M3.75 14.25L8.25 14.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M8.25 14.25L8.25 6.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M11.25 9.75L11.25 8.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M5.25 14.25L5.25 9.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path d="M7.5,20.25H2.25a1.43,1.43,0,0,1-1.5-1.415V2.335A1.575,1.575,0,0,1,2.25.75H12.879a1.5,1.5,0,0,1,1.06.439l2.872,2.872a1.5,1.5,0,0,1,.439,1.06V7.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>

                <div class="col-xxl-7">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">

                                            <!-- Title -->
                                            <h5 class="text-uppercase text-muted fw-semibold mb-2">
                                                Total
                                            </h5>

                                            <!-- Subtitle -->
                                            <h2 class="mb-0">
                                                $74,925
                                            </h2>

                                            <!-- Comment -->
                                            <p class="fs-6 text-muted mb-0 text-truncate">

                                                <!-- Badge -->
                                                <span class="badge text-bg-success-soft fs-6 fw-bold mb-n1">
                                                    <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23.25 12.75L23.25 6 16.5 6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                        <path d="M23.25,6l-7.939,7.939a1.5,1.5,0,0,1-2.122,0l-3.128-3.128a1.5,1.5,0,0,0-2.122,0L.75,18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    </svg>
                                                    12%
                                                </span>
                                                from $65,934
                                            </p>
                                        </div>

                                        <div class="col-6">

                                            <!-- Chart -->
                                            <div class="chart-container h-70px">
                                                <canvas id="incomeChart"></canvas>
                                            </div>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col">

                                            <!-- Title -->
                                            <h5 class="text-uppercase text-muted fw-semibold mb-2 d-flex align-items-center">
                                                Pageviews

                                                <!-- Icon -->
                                                <a href="javascript: void(0);" class="ms-2 text-secondary" data-bs-toggle="tooltip" title="Pageviews is a metric defined as the total number of pages viewed.">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                                        <path d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm.25,5a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,12.25,5ZM14.5,18.5h-4a1,1,0,0,1,0-2h.75a.25.25,0,0,0,.25-.25v-4.5a.25.25,0,0,0-.25-.25H10.5a1,1,0,0,1,0-2h1a2,2,0,0,1,2,2v4.75a.25.25,0,0,0,.25.25h.75a1,1,0,0,1,0,2Z" style="fill: currentColor" />
                                                    </svg>
                                                </a>
                                            </h5>

                                            <!-- Subtitle -->
                                            <h2 class="mb-0">
                                                123,598
                                            </h2>

                                            <!-- Comment -->
                                            <p class="fs-6 text-muted mb-0">

                                                <!-- Badge -->
                                                <span class="badge text-bg-danger-soft fs-6 fw-bold mb-n1">
                                                    <svg viewBox="0 0 24 24" height="10" width="10" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23.25 11.25L23.25 18 16.5 18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                        <path d="M23.25,18l-7.939-7.939a1.5,1.5,0,0,0-2.122,0l-3.128,3.128a1.5,1.5,0,0,1-2.122,0L.75,6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    </svg>
                                                    9.2%
                                                </span>
                                                from 134,969
                                            </p>
                                        </div>
                                        <div class="col-5">

                                            <!-- Chart -->
                                            <div class="chart-container h-65px">
                                                <canvas id="pageViewsChart"></canvas>
                                            </div>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-xxl-5 d-flex">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Projects
                            </h2>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                        <g>
                                            <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-60px">#</th>
                                        <th>Name</th>
                                        <th>Project manager</th>
                                        <th class="text-end">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Alibaba</td>
                                        <td class="text-muted">Jon Richardson</td>
                                        <td class="text-end"><span class="badge text-bg-success rounded-pill">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nike</td>
                                        <td class="text-muted">Alba Monday</td>
                                        <td class="text-end"><span class="badge text-bg-success rounded-pill">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Amazon</td>
                                        <td class="text-muted">Rose Watson</td>
                                        <td class="text-end"><span class="badge text-bg-warning rounded-pill">In-progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Webinning</td>
                                        <td class="text-muted">Levente Kosa</td>
                                        <td class="text-end"><span class="badge text-bg-warning rounded-pill">In-progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>eBay</td>
                                        <td class="text-muted">Andy Webb</td>
                                        <td class="text-end"><span class="badge text-bg-danger rounded-pill">Outdated</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->
                    </div>
                </div>

                <div class="col-xxl-7 d-flex">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Sales
                            </h2>

                            <!-- Label -->
                            <h5 class="text-uppercase text-muted fw-semibold mb-0">
                                <span class="legend-circle-lg bg-primary"></span>
                                Projections
                            </h5>

                            <!-- Label -->
                            <h5 class="text-uppercase text-muted fw-semibold mb-0 ms-4">
                                <span class="legend-circle-lg bg-light"></span>
                                Actual
                            </h5>
                        </div>

                        <div class="card-body d-flex flex-column">

                            <!-- Chart -->
                            <div class="chart-container flex-grow-1 h-275px">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col">

                    <!-- Card -->
                    <div class="card border-0 flex-fill w-100" data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}' id="users">
                        <div class="card-header border-0 card-header-space-between">

                            <!-- Title -->
                            <h2 class="card-header-title h4 text-uppercase">
                                Users
                            </h2>

                            <!-- Dropdown -->
                            <div class="dropdown ms-4">
                                <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                        <g>
                                            <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                                            <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Export report
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Share
                                    </a>
                                    <a href="javascript: void(0);" class="dropdown-item">
                                        Action
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="w-60px">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="checkAllCheckboxes">
                                            </div>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                                Full name
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="email">
                                                Email
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                                User ID
                                            </a>
                                        </th>
                                        <th>
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                                Signed up
                                            </a>
                                        </th>
                                        <th class="w-150px min-w-150px">
                                            <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                                Status
                                            </a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="list">
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/9e7ac59225f733be5944b3e91271b33adb30cae7/56230/assets/images/profiles/profile-14.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Hakeem Chan</span>
                                        </td>
                                        <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                                        <td class="id">#9265</td>
                                        <td class="date" data-signed="1648252800">03.26.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/44bfbd93721837b9534e9dc6fc058dbaef92d03a/f9236/assets/images/profiles/profile-23.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Orli J. Goodman</span>
                                        </td>
                                        <td class="email">pede@at.com</td>
                                        <td class="id">#8545</td>
                                        <td class="date" data-signed="1627858800">08.02.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/236af360580cfc7622e3a7d309d709a5018937c5/e3ee4/assets/images/profiles/profile-16.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Halee P. Lane</span>
                                        </td>
                                        <td class="email">diam@nislNullaeu.net</td>
                                        <td class="id">#4445</td>
                                        <td class="date" data-signed="1615680000">03.14.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-primary-soft">KS</span>
                                            </div>
                                            <span class="name fw-bold">Kimberly Salinas</span>
                                        </td>
                                        <td class="email">in.lobortis.tellus@faucibusorci.co.uk</td>
                                        <td class="id">#2391</td>
                                        <td class="date" data-signed="1615939200">03.17.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/963edcf9fc0c25098f00370b3b3d021e2ddac277/e69d6/assets/images/profiles/profile-17.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Galena Oliver</span>
                                        </td>
                                        <td class="email">eleifend.nec@ligulaconsectetuerrhoncus.ca</td>
                                        <td class="id">#8987</td>
                                        <td class="date" data-signed="1607990400">12.15.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/768c1ecfdff6a59ab55d514b80bd59e8dfa28996/35a64/assets/images/profiles/profile-19.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Kelly Doyle</span>
                                        </td>
                                        <td class="email">urna.et@volutpatNulladignissim.org</td>
                                        <td class="id">#5898</td>
                                        <td class="date" data-signed="1650495600">04.21.2022</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/0b34af989cce5e54297f16547b3eff1ace44dad5/eb8ea/assets/images/profiles/profile-20.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Keane Wyatt</span>
                                        </td>
                                        <td class="email">quam@Ut.org</td>
                                        <td class="id">#3431</td>
                                        <td class="date" data-signed="1655506800">06.18.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-success-soft">NA</span>
                                            </div>
                                            <span class="name fw-bold">Nasim Aguirre</span>
                                        </td>
                                        <td class="email">nisl@mollis.net</td>
                                        <td class="id">#6701</td>
                                        <td class="date" data-signed="1602975600">10.18.2021</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/23af178af51cd04f5a1b181720a77e2839e7a4be/5d54f/assets/images/profiles/profile-25.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Leo Johnston</span>
                                        </td>
                                        <td class="email">Cum.sociis@Etiambibendumfermentum.co.uk</td>
                                        <td class="id">#9258</td>
                                        <td class="date" data-signed="1624748400">06.27.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/f3d8c9fbcd994759c966476a8349d5d053e38964/e7323/assets/images/profiles/profile-26.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Macon Dean</span>
                                        </td>
                                        <td class="email">aliquam@nec.edu</td>
                                        <td class="id">#4885</td>
                                        <td class="date" data-signed="1614470400">02.28.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/ea01948f5a48922378b407c27d2b4e5809ed4949/35ecd/assets/images/profiles/profile-11.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Yoko Grimes</span>
                                        </td>
                                        <td class="email">ut.eros@Donecporttitor.co.uk</td>
                                        <td class="id">#1960</td>
                                        <td class="date" data-signed="1635289200">10.27.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/395009794393b7ec5f8c3faaf9823b0a3692032b/71f55/assets/images/profiles/profile-27.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Jordan Douglas</span>
                                        </td>
                                        <td class="email">fermentum.convallis.ligula@euenimEtiam.edu</td>
                                        <td class="id">#8385</td>
                                        <td class="date" data-signed="1646265600">03.03.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/408c347002e5d3c7a119c65184b1959dac40f3d7/46d8d/assets/images/profiles/profile-30.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Carly Beard</span>
                                        </td>
                                        <td class="email">dolor.dolor@lacusMaurisnon.org</td>
                                        <td class="id">#9380</td>
                                        <td class="date" data-signed="1654902000">06.11.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/5c7ec5413a460dc895a7798c37ce609f43ad36b0/c94b0/assets/images/profiles/profile-29.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Kareem Q. Weeks</span>
                                        </td>
                                        <td class="email">eget@aliquetProinvelit.co.uk</td>
                                        <td class="id">#9761</td>
                                        <td class="date" data-signed="1622329200">05.30.2021</td>
                                        <td class="status"><span class="legend-circle bg-danger"></span>Overdue</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <span class="avatar-title text-bg-danger-soft">DH</span>
                                            </div>
                                            <span class="name fw-bold">Drew R. Hatfield</span>
                                        </td>
                                        <td class="email">Integer.vulputate@facilisi.edu</td>
                                        <td class="id">#4798</td>
                                        <td class="date" data-signed="1626562800">07.18.2021</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/693e2209e9a62e54c60745dd18751d70c3dec10a/9d43e/assets/images/profiles/profile-22.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Kitra F. Strickland</span>
                                        </td>
                                        <td class="email">Donec.consectetuer@dolorNulla.net</td>
                                        <td class="id">#1246</td>
                                        <td class="date" data-signed="1651791600">05.06.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/5dfa4398a7f2beddbcfa617402e193f2f13aaa94/2ecb0/assets/images/profiles/profile-28.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Jack Dennis</span>
                                        </td>
                                        <td class="email">Quisque.libero.lacus@torquentper.com</td>
                                        <td class="id">#1099</td>
                                        <td class="date" data-signed="1658703600">07.25.2022</td>
                                        <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/d48629dc873bf03c72cd58826b5de65bc800aaac/5bb69/assets/images/profiles/profile-10.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Tyler Hartman</span>
                                        </td>
                                        <td class="email">arcu.imperdiet@Pellentesqueultriciesdignissim.com</td>
                                        <td class="id">#9151</td>
                                        <td class="date" data-signed="1651359600">05.01.2022</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/14bd6c6c1ba1296a1542d31d7dd9490e8bc9e472/d1f70/assets/images/profiles/profile-18.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Hally Gilmore</span>
                                        </td>
                                        <td class="email">lacus.Etiam@Pellentesquehabitantmorbi.net</td>
                                        <td class="id">#9846</td>
                                        <td class="date" data-signed="1633302000">10.04.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar avatar-circle avatar-xs me-2">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/b12e43e592a36b25ced24c52bc8ae78595f1f2c6/2ceab/assets/images/profiles/profile-24.jpeg" alt="..." class="avatar-img" width="30" height="30">
                                            </div>
                                            <span class="name fw-bold">Rosalyn Cherry</span>
                                        </td>
                                        <td class="email">at.egestas.a@eunullaat.co.uk</td>
                                        <td class="id">#9564</td>
                                        <td class="date" data-signed="1593558000">07.01.2021</td>
                                        <td class="status"><span class="legend-circle bg-warning"></span>Pending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .table-responsive -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-5 text-secondary small">
                                    Showing: <span class="list-pagination-page-first"></span> - <span class="list-pagination-page-last"></span> of <span class="list-pagination-pages"></span>
                                </div>

                                <!-- Pagination -->
                                <ul class="pagination list-pagination mb-0"></ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container-fluid -->

        <!-- Footer-->
        <!-- Footer -->
        <footer class="mt-auto">
            <div class="container-fluid mt-4 mb-6 text-muted">
                <div class="row justify-content-between">
                    <div class="col">
                        © Dashly. 2022 Webinning.
                    </div>

                    <div class="col-auto">
                        v1.0.1
                    </div>
                </div> <!-- / .row -->
            </div>
        </footer>

        <!-- Button -->
        <a class="btn btn-dark position-fixed bottom-0 end-0 me-4 me-lg-7 mb-6 z-index-1000" data-bs-toggle="offcanvas" href="#offcanvasCustomize" role="button" aria-controls="offcanvasCustomize">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="me-2" height="14" width="14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.77069 9.50524C7.60364 9.43126 7.45391 9.32316 7.33112 9.18788L6.70112 8.48788C6.5212 8.28484 6.28225 8.14317 6.01778 8.08272C5.7533 8.02228 5.47654 8.0461 5.22627 8.15083C4.97601 8.25557 4.76478 8.43598 4.62219 8.66678C4.4796 8.89758 4.41279 9.16721 4.43112 9.43788V10.3679C4.44125 10.5505 4.41275 10.7331 4.34748 10.9039C4.28221 11.0747 4.18165 11.2298 4.05235 11.3591C3.92306 11.4884 3.76795 11.589 3.59714 11.6542C3.42634 11.7195 3.24369 11.748 3.06112 11.7379L2.12112 11.6879C1.85153 11.6753 1.58463 11.7463 1.35691 11.8911C1.12919 12.036 0.951762 12.2476 0.848892 12.4971C0.746023 12.7467 0.72273 13.0219 0.782196 13.2851C0.841663 13.5484 0.980987 13.7868 1.18112 13.9679L1.88112 14.5879C2.01927 14.7148 2.129 14.8695 2.20311 15.0419C2.27722 15.2142 2.31403 15.4003 2.31112 15.5879C2.31532 15.7757 2.2791 15.9621 2.2049 16.1347C2.13071 16.3072 2.02029 16.4618 1.88112 16.5879L1.18112 17.2179C0.981519 17.3992 0.842717 17.6376 0.783657 17.9007C0.724597 18.1638 0.748157 18.4387 0.85112 18.6879C0.954125 18.9362 1.13156 19.1464 1.359 19.2897C1.58644 19.433 1.8527 19.5022 2.12112 19.4879H3.06112C3.24369 19.4778 3.42634 19.5063 3.59714 19.5715C3.76795 19.6368 3.92306 19.7374 4.05235 19.8666C4.18165 19.9959 4.28221 20.1511 4.34748 20.3219C4.41275 20.4927 4.44125 20.6753 4.43112 20.8579V21.7879C4.4151 22.0577 4.48357 22.3258 4.62702 22.5549C4.77046 22.784 4.98174 22.9626 5.23147 23.066C5.48119 23.1694 5.75693 23.1925 6.02034 23.1318C6.28374 23.0712 6.5217 22.93 6.70112 22.7279L7.33112 22.0379C7.45391 21.9026 7.60364 21.7945 7.77069 21.7205C7.93775 21.6466 8.11842 21.6083 8.30112 21.6083C8.48382 21.6083 8.6645 21.6466 8.83155 21.7205C8.9986 21.7945 9.14833 21.9026 9.27112 22.0379L9.90112 22.7279C10.0805 22.93 10.3185 23.0712 10.5819 23.1318C10.8453 23.1925 11.1211 23.1694 11.3708 23.066C11.6205 22.9626 11.8318 22.784 11.9752 22.5549C12.1187 22.3258 12.1871 22.0577 12.1711 21.7879V20.8579C12.161 20.6753 12.1895 20.4927 12.2548 20.3219C12.32 20.1511 12.4206 19.9959 12.5499 19.8666C12.6792 19.7374 12.8343 19.6368 13.0051 19.5715C13.1759 19.5063 13.3586 19.4778 13.5411 19.4879H14.4811C14.7495 19.5022 15.0158 19.433 15.2432 19.2897C15.4707 19.1464 15.6481 18.9362 15.7511 18.6879C15.8541 18.4387 15.8776 18.1638 15.8186 17.9007C15.7595 17.6376 15.6207 17.3992 15.4211 17.2179L14.7211 16.5879C14.582 16.4618 14.4715 16.3072 14.3973 16.1347C14.3231 15.9621 14.2869 15.7757 14.2911 15.5879C14.2882 15.4003 14.325 15.2142 14.3991 15.0419C14.4732 14.8695 14.583 14.7148 14.7211 14.5879L15.4211 13.9679C15.6213 13.7868 15.7606 13.5484 15.82 13.2851C15.8795 13.0219 15.8562 12.7467 15.7533 12.4971C15.6505 12.2476 15.4731 12.036 15.2453 11.8911C15.0176 11.7463 14.7507 11.6753 14.4811 11.6879L13.5411 11.7379C13.3586 11.748 13.1759 11.7195 13.0051 11.6542C12.8343 11.589 12.6792 11.4884 12.5499 11.3591C12.4206 11.2298 12.32 11.0747 12.2548 10.9039C12.1895 10.7331 12.161 10.5505 12.1711 10.3679V9.43788C12.1895 9.16721 12.1226 8.89758 11.98 8.66678C11.8375 8.43598 11.6262 8.25557 11.376 8.15083C11.1257 8.0461 10.8489 8.02228 10.5845 8.08272C10.32 8.14317 10.081 8.28484 9.90112 8.48788L9.27112 9.18788C9.14833 9.32316 8.9986 9.43126 8.83155 9.50524C8.6645 9.57922 8.48382 9.61743 8.30112 9.61743C8.11842 9.61743 7.93775 9.57922 7.77069 9.50524Z" />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.30114 17.4379C9.33944 17.4379 10.1811 16.5962 10.1811 15.5579C10.1811 14.5196 9.33944 13.6779 8.30114 13.6779C7.26285 13.6779 6.42114 14.5196 6.42114 15.5579C6.42114 16.5962 7.26285 17.4379 8.30114 17.4379Z" />
                <path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C17.8804 6.23828 17.6565 6.01442 17.6565 5.73828C17.6565 5.46214 17.8804 5.23828 18.1565 5.23828" />
                <path stroke="currentColor" stroke-width="1.5" d="M18.1565 6.23828C18.4326 6.23828 18.6565 6.01442 18.6565 5.73828C18.6565 5.46214 18.4326 5.23828 18.1565 5.23828" />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.1347 1.83506C16.1409 1.62338 16.2152 1.41935 16.3466 1.25325C16.478 1.08716 16.6594 0.967851 16.8639 0.91304C17.0685 0.85823 17.2853 0.870838 17.4821 0.948992C17.6789 1.02715 17.8453 1.16668 17.9565 1.34689L18.551 2.30113C18.6493 2.45959 18.8042 2.57479 18.9842 2.62343C19.1643 2.67207 19.3561 2.65052 19.5209 2.56313L20.508 2.03729C20.6955 1.93854 20.9096 1.90249 21.1191 1.93443C21.3285 1.96638 21.5222 2.06463 21.6716 2.21476C21.8211 2.3649 21.9185 2.559 21.9495 2.76857C21.9805 2.97814 21.9435 3.19214 21.8439 3.37912L21.3171 4.37019C21.2295 4.53545 21.2077 4.72774 21.2561 4.90841C21.3045 5.08907 21.4195 5.24471 21.578 5.34404L22.5273 5.9411C22.7071 6.05324 22.8461 6.22006 22.924 6.41706C23.002 6.61406 23.0147 6.83085 22.9603 7.03561C22.9059 7.24036 22.7873 7.42229 22.6219 7.55467C22.4565 7.68705 22.253 7.7629 22.0413 7.7711L20.9235 7.80929C20.7371 7.816 20.5602 7.89324 20.4286 8.02539C20.297 8.15754 20.2205 8.33473 20.2145 8.52115L20.179 9.64113C20.1727 9.85281 20.0984 10.0568 19.967 10.2229C19.8357 10.389 19.6542 10.5083 19.4497 10.5631C19.2451 10.618 19.0284 10.6053 18.8315 10.5272C18.6347 10.449 18.4683 10.3095 18.3571 10.1293L17.762 9.17525C17.6638 9.0168 17.509 8.90157 17.3291 8.85289C17.1492 8.80422 16.9575 8.82572 16.7928 8.91305L15.8049 9.43908C15.6175 9.53784 15.4033 9.57389 15.1939 9.54194C14.9844 9.51 14.7908 9.41175 14.6413 9.26161C14.4918 9.11148 14.3944 8.91737 14.3634 8.7078C14.3324 8.49823 14.3694 8.28424 14.469 8.09725L14.9933 7.10534C15.0809 6.94007 15.1027 6.74778 15.0543 6.56712C15.0059 6.38645 14.8909 6.23081 14.7324 6.13148L13.7831 5.53748C13.6034 5.42533 13.4643 5.25851 13.3864 5.06151C13.3085 4.86452 13.2958 4.64772 13.3501 4.44296C13.4045 4.23821 13.5231 4.05628 13.6885 3.92391C13.8539 3.79153 14.0574 3.71567 14.2691 3.70748L15.3877 3.66909C15.5739 3.66238 15.7507 3.58515 15.8822 3.45302C16.0137 3.32089 16.0901 3.14374 16.0959 2.95743L16.1347 1.83506Z" />
            </svg>
            Customize
        </a>

    </main> <!-- / main -->

    <!-- JAVASCRIPT-->
    <!-- Vendor JS -->
    <!-- <script src="./assets/js/vendors.bundle.js"></script> -->

    <!-- Theme JS -->
    <script src="/dist/js/vendor.bundle.js"></script>
</body>

</html>