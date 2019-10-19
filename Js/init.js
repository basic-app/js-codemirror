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