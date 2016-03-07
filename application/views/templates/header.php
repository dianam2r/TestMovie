<html>
    <head>
        <title>Actors and Movies Finder</title>
        <style type="text/css">
            @font-face {
                font-family: 'OpenSans';
                src: url('fonts/OpenSans-Regular.eot');
                src: local('☺'), url('fonts/OpenSans-Regular.woff') format('woff'), url('fonts/OpenSans-Regular.ttf') format('truetype'), url('fonts/OpenSans-Regular.svg') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            @font-face {
                font-family: 'Play';
                src: url('fonts/Play-Regular.eot');
                src: local('☺'), url('fonts/Play-Regular.woff') format('woff'), url('fonts/Play-Regular.ttf') format('truetype'), url('fonts/Play-Regular.svg') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            body {
                background-color: #fff;
                font-family: 'OpenSans';
                margin: 0;
            }
            img {
                border: 0;
            }
            .clearfix:after, #contents:after {
                clear:both;
                content:"";
                display:block;
                height:1%;
                line-height:0;
                visibility:hidden;
            }
            .btn {
                background: url(images/bg-button.png) no-repeat;
                background-position: 0 -70px;
                color: #fff;
                display: inline-block;
                font: 24px/60px 'OpenSans';
                height: 60px;
                width: 230px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
            }
            .btn:hover {
                background-position: 0 0;
            }
            /*------------------------------ HEADER ------------------------------*/
            #header {
                background-color: #eee;
                border-bottom: 1px solid #e6e6e6;
                padding: 27px 0;
            }
            #header > div, #footer > div {
                width: 920px;
                margin: 0 auto;
                padding: 0 20px;
            }
            /** Logo **/
            #header .logo {
                float: left;
                margin-right: 20px;
            }
            #header .logo a {
                background: url(images/logo.png) no-repeat center top;
                color: #000;
                display: block;
                font: 15px/30px 'Play';
                height: 20px;
                width: 76px;
                padding-top: 68px;
                text-decoration: none;
                text-transform: uppercase;
            }
            /** Navigation **/
            #navigation {
                display: inline-block;
                list-style: none;
                line-height: 100px;
                margin: 0;
                padding: 0;
            }
            #navigation ul {
                display: inline-block;
                list-style: none;
                margin: 0;
                padding: 0;
            }
            #navigation li {
                float: left;
                width: 160px;
                text-align: center;
            }
            #navigation li a {
                color: #818181;
                font-size: 15px;
                line-height: 30px;
                text-decoration: none;
            }
            #navigation li a:hover {
                color: #000;
            }
            #navigation li.active a {
                color: #f99600;
            }
            #adbox {
                background: url(images/bg-adbox.jpg) repeat-x left top;
                height: 380px;
                padding: 60px 0;
            }
            #adbox > div {
                width: 800px;
                margin: 0 auto;
                padding: 0 80px;
            }
            #adbox > div img {
                float: right;
                margin-left: 60px;
            }
            #adbox h1, #adbox h2 {
                color: #2c2c2c;
                font-size: 60px;
                line-height: 60px;
                margin: 0;
                text-transform: uppercase;
            }
            #adbox h2 {
                font-size: 30px;
                line-height: 36px;
                text-transform: none;
            }
            #adbox p {
                font-size: 16px;
                line-height: 24px;
                margin: 0;
            }
            #adbox p span {
                display: block;
                font-size: 12px;
                width: 360px;
                padding: 24px 0;
                text-align: center;
            }
            #adbox p span b {
                font-weight: normal;
                display: block;
                width: 256px;
            }
            /*------------------------------ CONTENTS ------------------------------*/
            #contents {
                min-height: 510px;
                width: 880px;
                margin: 0 auto;
                padding: 54px 40px;
            }
            h1 {
                color: #3e3e3e;
                font-size: 30px;
                font-weight: normal;
                line-height: 30px;
                margin: 0 0 30px;
            }
            h2 {
                color: #2c2c2c;
                font-size: 24px;
                font-weight: normal;
                line-height: 24px;
                margin: 0 0 12px;
            }
            p {
                color: #585858;
                font-size: 16px;
                line-height: 24px;
                margin: 0 0 30px;
            }
            p a {
                color: #585858;
            }
            #tagline h1 {
                margin-left: 20px;
            }
            #tagline > div {
                float: left;
                width: 400px;
                margin: 0 20px;
            }
            #contents .features {
                width: 810px;
                margin: 0 auto;
            }
            .features > div {
                display: inline-block;
                margin: 0 0 30px;
            }
            .features > div img {
                float: left;
                margin-right: 20px;
                margin-top: 36px;
            }
            .date {
                float: left;
                height: 78px;
                width: 70px;
                margin-right: 20px;
                border: 1px solid #d5d5d5;
                text-align: center;
            }
            .date p {
                margin: 12px 0 0;
            }
            .date p span {
                display: block;
                font-size: 30px;
                margin-bottom: 6px;
            }
            .author {
                color: #585858;
                display: block;
                font-size: 12px;
            }
            .more {
                background-color: #727272;
                color: #fff;
                display: inline-block;
                font-size: 14px;
                line-height: 30px;
                width: 100px;
                text-align: center;
                text-decoration: none;
            }
            .more:hover, .message input[type='submit']:hover {
                background-color: #f99600;
                color: #000;
            }
            /** main **/
            .main {
                float: left;
                background: url(images/divider.png) repeat-y right top;
                min-height: 100px;
                width: 620px;
                padding-right: 24px;
            }
            .main h1, .sidebar h1 {
                margin: 0 0 12px;
                position: relative;
                top: -18px;
            }
            .main h2 span {
                display: block;
                font-size: 12px;
            }
            /** sidebar **/
            .sidebar {
                float: left;
                min-height: 848px;
                width: 216px;
                margin-left: 20px;
            }
            .sidebar ul, .news {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            .news li {
                border-top: 1px solid #d5d5d5;
                padding: 24px 30px 0 100px;
                position: relative;
            }
            .news li .date {
                float: none;
                position: absolute;
                left: 0;
                top: 30px;
            }
            .news li > p span, .post > span {
                display: block;
                text-align: right;
            }
            .posts {
                border-top: 1px solid #d5d5d5;
            }
            .posts li {
                border-bottom: 1px solid #d5d5d5;
                padding: 24px 10px 0;
            }
            .posts li p {
                font-size: 14px;
            }
            .posts li .title {
                font-size: 16px;
                font-weight: normal;
                margin: 0 0 12px;
            }
            .posts li .title a {
                color: #2c2c2c;
                font-size: 16px;
                text-decoration: none;
            }
            .post {
                width: 785px;
                margin: 0 auto;
            }
            .post h1 {
                padding-top: 12px;
            }
            #about {
                width: 740px;
                margin: 0 auto;
            }
            #about h1, .section h1 {
                border-bottom: 1px solid #e0e0e0;
                padding-bottom: 12px;
            }
            .section {
                float: left;
                width: 390px;
                margin-right: 50px;
            }
            .section h1 {
                margin-bottom: 18px;
            }
            .message input[type='text'], .message textarea {
                color: #aeaeae;
                font-size: 13px;
                height: 33px;
                line-height: 33px;
                width: 380px;
                border: 1px solid #d5d5d5;
                margin: 0 0 6px;
                padding: 0 4px;
            }
            .message textarea {
                height: 175px;
                overflow: auto;
                resize: none;
            }
            .message input[type='submit'] {
                float: right;
                background-color: #818181;
                color: #d5d5d5;
                cursor: pointer;
                font: 13px/30px Arial, Helvetica, sans-serif;
                height: 30px;
                border: 0;
                margin: 0;
                padding: 0 10px;
            }
            .contact {
                background-color: #f8f8f8;
                width: 270px;
                padding: 124px 60px;
                text-align: center;
            }
            .contact p span {
                color: #2c2c2c;
                display: block;
                font-size: 30px;
                line-height: 36px;
                padding: 18px 0;
            }
            /*------------------------------ FOOTER ------------------------------*/
            #footer {
                background-color: #eee;
                border-top: 1px solid #d8d8d8;
                padding: 30px 0;
            }
            #footer p {
                font-size: 12px;
                line-height: 30px;
                padding-left: 10px;
            }
            #connect {
                float: right;
                display: inline-block;
                margin-right: 30px;
            }
            #connect a {
                background: url(images/icons.png) no-repeat;
                display: inline-block;
                height: 30px;
                width: 30px;
                margin: 0 10px;
            }
            #connect a.googleplus {
                background-position: 0 -40px;
            }
            #connect a.twitter {
                background-position: 0 -80px;
            }
            #connect a.tumbler {
                background-position: 0 -120px;
            }
            #connect a.facebook:hover {
                background-position: -40px 0;
            }
            #connect a.googleplus:hover {
                background-position: -40px -40px;
            }
            #connect a.twitter:hover {
                background-position: -40px -80px;
            }
            #connect a.tumbler:hover {
                background-position: -40px -120px;
            }

        </style>
    </head>
    <body>
        <div id="header">
			<ul id="navigation">
				<li>
                                    <a href="<?php echo base_url();?>">Home</a>
				</li>
                        </ul>
        </div>







