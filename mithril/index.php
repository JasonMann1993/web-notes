<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/mithril"></script>

</head>
<body>
<script>
    var root = document.body

    var count = 0
    var increment = function() {
        m.request({
            method: "PUT",
            url: "//rem-rest-api.herokuapp.com/api/tutorial/1",
            data: {count: count + 1},
            withCredentials: true,
        })
            .then(function(data) {
                count = parseInt(data.count)
            })
    }

    var Hello = {
        view: function() {
            return m("main", [
                m("h1", {class: "title"}, "My first app"),
                m("button",{onclick: increment}, count + " clicks"),
                m('a',{href:'#!/splash'},'splash')
            ])
        }
    }

    var Splash = {
        view: function() {
            return m("a", {href: "#!/hello"}, "Enter!")
        }
    }

    m.route(root, "/splash", {
        "/splash": Splash,
        "/hello": Hello,
    })
</script>
</body>
</html>