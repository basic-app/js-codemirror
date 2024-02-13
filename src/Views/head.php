<link rel="stylesheet" href="<?= base_url('assets/codemirror/lib/codemirror.css');?>">
<link rel="stylesheet" href="<?= base_url('assets/codemirror/theme/zenburn.css');?>">
<script src="<?= base_url('assets/codemirror/lib/codemirror.js');?>"></script>
<script src="<?= base_url('assets/codemirror/mode/xml/xml.js');?>"></script>
<script src="<?= base_url('assets/codemirror/mode/htmlmixed/htmlmixed.js');?>"></script>
<script type="text/javascript">
function init_codemirror(selector, theme)
{
    if (selector === undefined)
    {
        selector = '.code';
    }
    
    if (theme === undefined)
    {
        theme = 'default';
    }    

    $(selector).each(function(){

        var editor = CodeMirror.fromTextArea(this, {
            lineNumbers: false,
            matchBrackets: true,
            indentUnit: 4,
            theme: theme            
        });
    });
}
</script>