/**
 * @file Server
 * @author Ian Jamieson
 * @copyright Breato Ltd 2017
 * @description Provides the core server functionality for running the QNET Player.<br>
 * All objects are static - that is they are <b>not</b> instantiated with the <code>new</code> command.
 */

/**
 * @namespace Web
 * @author Ian Jamieson
 * @property app {object} The web server (http or https, as required)
 * @property contentTypes {object} The lookup to convert a file extension to the response header contentType
 * @property contentTypes.js {string} : 'text/javascript',
 * @property contentTypes.htm {string} : 'text/html',
 * @property contentTypes.html {string} : 'text/html',
 * @property contentTypes.css {string} : 'text/css',
 * @property contentTypes.png {string} : 'image/png',
 * @property contentTypes.gif {string} : 'image/gif',
 * @property contentTypes.jpg {string} : 'image/jpeg',
 * @property contentTypes.def {string} : 'text/html'
 * @property fs {object} A reference to the system fileSystem object
 * @property http {object} A reference to the system http object
 * @property https {object} A reference to the system https object
 * @property url {object} A reference to the ystem url object
 * @description This provides a simple web server to manage requests for files of different types
 */

var Web = {
    express: require('express'),
    port: 17001,
    url: require('url'),
    fs: require('fs'),
    php: require('node-php'),
    path: require("path"),
    app: undefined,
    contentTypes: {
        js: 'text/javascript',
        htm: 'text/html',
        html: 'text/html',
        css: 'text/css',
        png: 'image/png',
        gif: 'image/gif',
        jpg: 'image/jpeg',
        def: 'text/html',
        json: 'application/json'
    },

    /**
     * @method init
     * @memberof Web
     * @description Initalise the web server.
     */
    init: function() {
        var i;
        
        this.initListener();
    },

    /**
     * @method initListener
     * @memberof Web
     * @description Initalise the web server.
     */
    initListener: function() {
        // create the http app    
        this.app = this.express();
        this.app.use('/', this.php.cgi('./')); 
        this.app.listen(this.port);

        console.log("Server listening on " + this.port); 
    },

    /**
     * @method writeStandardHeader
     * @memberof Web
     * @private
     * @param {object} res the response object
     * @description Write a standard header to the response stream
     */

    writeStandardHeader: function(res) {
        res.setHeader("Access-Control-Allow-Origin", "*");
        res.setHeader('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS');
        res.setHeader("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept, Authorization");
    },

    /**
     * @method server
     * @memberof Web
     * @private
     * @description Handler for standard http and https web server connections.<br><br>
     */
    server: function(req, res) {
        var page = '',
            reg, fparams = {},
            query = {},
            url_parts, that = this,
            body = '';

        function processRequest(res, query, page, fparams) {
            that.fs.readFile(__dirname + page, fparams,
                function(err, content) {
                    var i, parts,
                        params = {},
                        ext,
                        contentType = { 'Content-Type': 'text/html' };

                    // process an error fetching the file
                    if (err) {
                        that.writeStandardHeader(res);
                        res.writeHead(404, contentType);
                        return res.end('');
                    }

                    // perform parameter substitution
                    if (fparams && fparams.encoding === 'utf8') {
                        for (i in query) {
                            params[i] = query[i];
                            reg = new RegExp("\{\{" + i + "\}\}", "g");
                            content = content.replace(reg, query[i]);
                        }
                    }

                    // work out what content-type to return
                    /*ext = page.match(/\.([^\.]*)$/);*/
                    parts = page.split('/');
                    parts = parts[parts.length - 1];
                    parts = parts.split('.');
                    ext = parts[parts.length - 1];
                    if (ext && that.contentTypes[ext]) {
                        contentType['Content-Type'] = that.contentTypes[ext];
                    }

                    // off we go
                    that.writeStandardHeader(res);
                    res.writeHead(200, contentType);
                    res.end(content);
                });
        }

        function process() {
            page = '/index.html';

            if (url_parts.pathname !== '/') {
                page = decodeURIComponent(url_parts.pathname);
            }

            if (page === '' || page === '//') {
                page = '/index.html';
            }

            if (page.indexOf('.htm') > 0) {
                fparams = { encoding: 'utf8' };
            }

            // Process the query
            processRequest(res, query, page, fparams);
        }

        // decode the request
        url_parts = this.url.parse(req.url, true);

        if (req.method === 'OPTIONS') {
            this.writeStandardHeader(res);
            res.writeHead(200, { 'Content-Type': 'text/html' });
            res.end();
        } else if (req.method.toLowerCase() == 'get') {
            query = url_parts.query;
            process();
        } else {
            req.on('data', function(chunk) {
                body += chunk;
            });

            req.on('end', function() {
                var pairs = {},
                    pair, i;
                pairs = body.split('&');

                for (i = 0; i < pairs.length; i++) {
                    pair = pairs[i].split('=');
                    query[pair[0]] = decodeURIComponent(pair[1]);
                }

                process();
            });
        }
    }
};

Web.init();