<!DOCTYPE html>
<html>
    <head>
        <title>TinyMCE - Get Data</title>
    </head>
    <body>
        <form id="get-data-form" method="post">

            <textarea class="tinymce" id="texteditor"></textarea>
            <input type="submit" value="Get Data">

        </form>

        <div id="data-container">
        </div>

        <!-- javascript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/sbcc4vzmeag6ibykxu92g90pwiocg7ga84sdcmasijbo782v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script type="text/javascript" src="/src/js/init-tinymce.js"></script>
        <script type="text/javascript" src="/src/js/getdata.js"></script>
    </body>
</html>