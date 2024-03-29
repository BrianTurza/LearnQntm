/* #------------- Terminal ----------------#
var term;
jQuery(function($) {
    var id = 1;
    term = $('#terminal').terminal(function(command, term) {
        if (command == 'help') {
            term.echo("available commands are mysql, js, test");
        } else if (command == 'test'){
            term.push(function(command, term) {
                if (command == 'help') {
                    term.echo('if you type ping it will display pong');
                } else if (command == 'ping') {
                    term.echo('pong');
                } else {
                    term.echo('unknown command ' + command);
                }
            }, {
                prompt: 'test> ',
                name: 'test'
            });
        } else if (command == "js") {
            term.push(function(command, term) {
                var result = window.eval(command);
                if (result != undefined) {
                    term.echo(String(result));
                }
            }, {
                name: 'js',
                prompt: 'js> '
            });
        } else if (command == 'mysql') {
            term.push(function(command, term) {
                term.pause();
                $.jrpc("mysql-rpc-demo.php",
                       "query",
                       [command],
                       function(data) {
                           term.resume();
                           if (data.error) {
                               if (data.error.error && data.error.error.message) {
                                   term.error(data.error.error.message);
                               } else if (data.error.message) {
                                   term.error(data.error.message);
                               }
                           } else {
                               if (typeof data.result == 'boolean') {
                                   term.echo(data.result ? 'success' : 'fail');
                               } else {
                                   var len = data.result.length;
                                   for(var i=0;i<len; ++i) {
                                       term.echo(data.result[i].join(' | '));
                                   }
                               }
                           }
                       },
                       function(xhr, status, error) {
                           term.error('[AJAX] ' + status +
                                      ' - Server reponse is: \n' +
                                      xhr.responseText);
                           term.resume();
                       });
            }, {
                greetings: "This is example of using mysql from terminal\n\
you are allowed to execute: select, insert, update and delete from/to table:\n\
    table test(integer_value integer, varchar_value varchar(255))",
                prompt: "mysql> "});
        } else {
            term.echo("unknow command " + command);
        }
    }, {
        greetings: "multiply terminals demo use help to see available commands",
        onBlur: function() {
            // prevent loosing focus
            return false;
        }
    });
});
/*
$(function() {
   $('#terminal').terminal("service.py", {

      greetings: "Welcome to Python Service"
   });
});*/
// Code editor
var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true
  });
  var input = document.getElementById("theme-select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].textContent;
    editor.setOption("theme", theme);
    location.hash = "#" + theme;
  }
  var choice = (location.hash && location.hash.slice(1)) ||
               (document.location.search &&
                decodeURIComponent(document.location.search.slice(1)));
  if (choice) {
    input.value = choice;
    editor.setOption("theme", choice);
  }
  CodeMirror.on(window, "hashchange", function() {
    var theme = location.hash.slice(1);
    if (theme) { input.value = theme; selectTheme(); }
  });
  CodeMirror.setSize("100%", "100%");

  $('select').selectpicker();