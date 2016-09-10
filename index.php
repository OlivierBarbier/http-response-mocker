<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>HTTP response mocker</title>
        <link rel="shortcut icon" type="image/png" href="/assets/img/favicon.png">

        <link rel="stylesheet" media="screen" href="/assets/stylesheets/main.css">
        <script src="/assets/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="/assets/js/select2.js" type="text/javascript"></script>
        <script src="/assets/js/lodash-1.2.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            



<div class="hero-unit">
    <h1>Mock.er</h1>
    <h2>Mock your HTTP responses to test your REST API</h2>
    <pre>&gt; PUT http://<?php echo $_SERVER['HTTP_HOST'] ?>/v2/<span>5185415ba171ea3a00704eed</span></pre>
  <pre>< HTTP/1.1 200 OK
< Content-Type: application/json; charset=UTF-8
{ "<span>hello</span>": "<span>world</span>" }</pre>
</div>


<form class="form-horizontal" action="/save.php" method="post" id="new-mocky-form">

<div class="alert" id="feedback">

        <p></p> <!--Do not remove...-->
    </div>



    <fieldset>
        <legend>Generate your custom response</legend>

        <div class="control-group">
            <label class="control-label" for="statusCode">Status Code</label>
            <div class="controls">
                <input type="text" id="statusCode" name="statuscode"  />
            </div>
        </div>
        <div class="control-group hide" id="location-block">
            <label class="control-label" for="location">Location</label>
            <div class="controls">
                <input type="text" id="location" name="location" placeholder="Redirect URI" class="input-xlarge" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="contentType">Content Type</label>
            <div class="controls">
                <input type="text" id="contentType" name="contenttype" />
                &nbsp;
                <input type="text" id="charset" name="charset" />
            </div>
        </div>

        <div class="advanced-block hide">
            <div class="control-group">
                <label class="control-label" for="editor">Custom headers</label>
                <div class="controls" id="advanced-block-inner">
                    <p class="clone">
                        <input class="span2" type="text" name="headerNames[]"> :
                        <input class="span4" type="text" name="headerValues[]">
                        <a class="btn btn-success btn-mini btn-add-header"><i class="icon icon-plus icon-white"></i></a>
                    </p>
                </div>
                <div class="controls">
                    <span class="help-block">Eg: ETag, If-None-Match, Expires, Last-Modified, Server, X-Cache, Cache-Control,<br /> X-Frame-Options, Server, Set-Cookie, X-UA-Compatible...</span>
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="editor">Body</label>
            <div class="controls">
                <div id="editor"></div>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary" id="send-btn">Generate my HTTP Response</button>
            </div>
        </div>
    </fieldset>
</form>

        </div>



        <script src="/referentials/i18n.js" type="text/javascript"></script>
        <script src="/referentials/http.js" type="text/javascript"></script>
        <script src="/assets/js/main.js" type="text/javascript"></script>
        <script src="/assets/js/ace/ace.js" type="text/javascript"></script>
    </body>
</html>

