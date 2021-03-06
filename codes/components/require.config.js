var components = {
    "packages": [
        {
            "name": "jquery",
            "main": "jquery-built.js"
        },
        {
            "name": "underscore",
            "main": "underscore-built.js"
        },
        {
            "name": "moment",
            "main": "moment-built.js"
        },
        {
            "name": "bootstrap-calendar",
            "main": "bootstrap-calendar-built.js"
        }
    ],
    "shim": {
        "underscore": {
            "exports": "_"
        }
    },
    "baseUrl": "components"
};
if (typeof require !== "undefined" && require.config) {
    require.config(components);
} else {
    var require = components;
}
if (typeof exports !== "undefined" && typeof module !== "undefined") {
    module.exports = components;
}