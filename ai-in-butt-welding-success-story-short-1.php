
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ai_consulting.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/flickity.css">
    <link rel="stylesheet" href="css/animate.css">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway: 100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed: 300i,400,400i,700,700i" rel="stylesheet">
<div class="section-padding-both">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12">
<script type="text/javascript"><!--
    (function() {
        var head = document.getElementsByTagName('head').item(0),
            url = "https:\/\/app.dragdropr.com\/components\/dependency-manager.js";

        for (var i = 0; i < head.children.length; i++) {
            if (head.children.item(i).tagName === 'SCRIPT' && head.children.item(i).src.indexOf(url) !== -1) {
                return;
            }
        }

        var node = document.createElement('script');
        node.async = 1;
        node.src = url;
        head.insertBefore(node, null);
    })();
//--></script>

<div id="ddr-page-loader-wrapper-f94e975e-f800-11ea-8de5-0242ac140009">
</div>
<script type="text/javascript"><!--
    (function(){
        var callbackFunction = function() {
            var DragDropr = window.DragDropr;

            if (DragDropr && DragDropr.getDependencyManager && DragDropr.getDependencyManager().loaded()) {
                var node = document.getElementById('ddr-page-loader-wrapper-f94e975e-f800-11ea-8de5-0242ac140009');

                if (! DragDropr.isElement(node)) {
                    return;
                }

                DragDropr.getDependencyManager().require(['fetch'], function (api) {
                    api.fetch("https:\/\/app.dragdropr.com\/graphql", {
                        'method': 'Post',
                        'headers': {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            query: "query queryPage($id:String!){\n                                    page(id:$id){\n                                        id,\n                                        name,\n                                        project_id,\n                                        created_at,\n                                        updated_at,\n                                        javascript,\n                                        plain_html,\n                                        html\n                                    }\n                                }",
                            variables: {
                                id: "f94e975e-f800-11ea-8de5-0242ac140009"
                            }
                        })
                    }).then(function (response) {
                        return response.json();
                    }).then(function (response) {
                        return new DragDropr.Classes.Config(response);
                    }).then(function (responseConfig) {
                        var html = responseConfig.read('data.page.plain_html'),
                            javascript = responseConfig.read('data.page.javascript');

                        if (DragDropr.isString(html)) {
                            node.innerHTML = html;

                            if (javascript) {
                                eval(javascript);
                            }
                        }
                    });
                });
                document.removeEventListener('DragDropr.DependencyManager', callbackFunction);
            }
        };
        document.addEventListener('DragDropr.DependencyManager', callbackFunction);
        callbackFunction();
    })();
//--></script>
<div
                class="ddr-page-row ddr-page-row-17 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 "
                    style="width: 50%;">
                    <div id="ddr-4f5bbcfb15" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                        <div class="ddr-widget">
                            <div id="ddr-rich-text-1700" class="ddr-widget__rich-text"
                                style="margin: 30px; padding-bottom: 15px;">
                                <p style="text-align: left;">©2020 Tvarit GmbH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 "
                    style="width: 50%;">
                    <div id="ddr-2f3cca8145" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                        <div class="ddr-widget">
                            <div id="ddr-rich-text-1710" class="ddr-widget__rich-text"
                                style="margin: 30px; padding-bottom: 15px;">
                                <p style="text-align: right;"><a href="https://www.tvarit.com/impressum">Impressum
                                    </a><a href="https://www.tvarit.com/datenschutz"> Datenschutz</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</div>
<style>
    body {
    font-family: 'Raleway', sans-serif !important;
    font-weight: 500 !important;
    }
    .ddr-page-wrapper {
        font-family: 'Raleway', sans-serif !important;
    }
    .ddr-widget__button > a > div {
        color: #fff !important;
        background: linear-gradient(to right, #f74785 0%,#ed1b4a 99%) !important;
    }
    p {
        font-size: 20px !important;
    font-weight: 400 !important;
    }
    ul li {
        font-weight: 400 !important;
    font-size: 17px !important;
    }
    #ddr-rich-text-5100 * {
        line-height: 1.6 !important;
    }
    .ddr-widget__headline {
        font-size: 60px !important;
        font-weight: 900 !important;
    }
    .ddr-page-section-7 .ddr-page-row .ddr-page-column-0 {
        border-right: 1px solid #f74785; 

    }
    .ddr-page-section-7 .ddr-page-row .ddr-page-column-1 {
        border-right: 1px solid #f74785; 

    }
    .ddr-page-section-7 .ddr-page-row .ddr-page-column-2 {
        border-right: 1px solid #f74785; 

    }
</style>