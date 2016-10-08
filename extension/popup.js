
document.addEventListener("DOMContentLoaded", function () {
    var create = document.getElementById("create");
    create.addEventListener("click", function () {
        var title = document.getElementById("title").value;
        var entry = document.getElementById("entry").value;
        chrome.tabs.create({ url: "http://alexwith2goo.x10.mx/planner?entry=" + title + "[:]" + entry }, function (tab) {

        });
    });
    var view = document.getElementById("view");
    view.addEventListener("click", function () {
        chrome.tabs.create({ url: "http://alexwith2goo.x10.mx/planner"}, function (tab) {

        });
    });
});


 
