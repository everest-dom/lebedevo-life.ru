(function(d, e, j, h, f, c, b) {
    d.GoogleAnalyticsObject = f;
    d[f] = d[f] || function() {
        (d[f].q = d[f].q || []).push(arguments)
    }, d[f].l = 1 * new Date();
    c = e.createElement(j), b = e.getElementsByTagName(j)[0];
    c.async = 1;
    c.src = h;
    b.parentNode.insertBefore(c, b)
})(window,document,'script','https://www.google-analytics.com/analytics.js?d=' + new Date().toISOString().slice(0, 13),'ga');
ga("create", "UA-49298821-11", "auto");
ga("send", "pageview");