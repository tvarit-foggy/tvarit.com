 

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

<div id="ddr-page-loader-wrapper-0d675056-f8af-11ea-b75f-0242ac140009">
</div>
<script type="text/javascript"><!--
    (function(){
        var callbackFunction = function() {
            var DragDropr = window.DragDropr;

            if (DragDropr && DragDropr.getDependencyManager && DragDropr.getDependencyManager().loaded()) {
                var node = document.getElementById('ddr-page-loader-wrapper-0d675056-f8af-11ea-b75f-0242ac140009');

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
                                id: "0d675056-f8af-11ea-b75f-0242ac140009"
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
</style>