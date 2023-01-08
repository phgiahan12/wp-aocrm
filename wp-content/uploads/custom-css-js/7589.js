<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 

tinymce.init({
                selector: 'textarea.acf-table-cell-editor',
                setup: function (editor) {
                    editor.on('init', function (e) {
                        editor.setContent('<p>Hello world!</p>');
                    });
                }
            });</script>
<!-- end Simple Custom CSS and JS -->
