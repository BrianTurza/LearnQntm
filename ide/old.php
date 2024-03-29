<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnQuantum - Online IDE</title>

    <link href="../vendors/bootstrap/bootstrap.min.css" rel="stylesheet">

<script src="https://unpkg.com/jquery.terminal@2.x.x/js/jquery.terminal.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/jquery.terminal@2.x.x/css/jquery.terminal.min.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendors/nice-select/nice-select.css">
  
    <!-- Custom fonts for this template -->
    <link href="../vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/ide.css">

    <link rel="stylesheet" href="../vendors/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/dracula.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/material.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/material-darker.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/material-palenight.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/material-ocean.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/oceanic-next.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/darcula.css">
<link rel="stylesheet" href="../vendors/codemirror/theme/one-dark.css">
<script src="../vendors/codemirror/lib/codemirror.js"></script>
<script src="../vendors/codemirror/mode/python/python.js"></script>
<script src="../vendors/codemirror/addon/selection/active-line.js"></script>
<script src="../vendors/codemirror/addon/edit/matchbrackets.js"></script>
<style>
      .CodeMirror {
        height: calc(100% - 80px);
        border: 1px solid black; 
        font-size:13px
  
    }
    </style>

  </head>
<body>
  <div class="container">
    <div style="margin-left: 30%;float: right; width: 100%;">
          <select class="" onchange="selectTheme()" id='theme-select'>
          <option>default</option>
          <option>darcula</option>
          <option>oceanic-next</option>
          <option>material</option>
          <option>material-ocean</option>
          <option selected>one-dark</option>
        </select>
        <button class="btn btn-success" id="submit" name="submit">Run <i class="fas fa-play"></i></button><br>
    </div>
    <div>
       <form>
        <div class="editor">
          <textarea id="code" name="code">
class Quantum:
    def __init__(self):
        self.stdout = ""

    def H(self, x): #  Hadamard transform
        """
        This method handles Hadamard transform
        :param x:
            0
        :return:
            1/√2n(|0⟩y + |1⟩y)
        """
    def SWAP(self, quibits):
        """
        This method swaps to quibits and return it in representation of matrix.
        :param quibits:
            |00⟩, |01⟩, |10⟩, |11⟩
        :return: Matrix
            [[1, 0, 0, 0]
              [0, 0, 1, 0]
              [0, 1, 0, 0]
              [0, 0, 0, 1]]
  
          </textarea>
        </form>
    </div>
    <!--<div id="terminal"></div>-->
    <iframe id="terminal" src="console.html" frameborder="0"> 
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta http-equiv="content-type"
                content="text/html; charset=UTF-8">
        
            <meta name="viewport" content="width=device-width,
                minimum-scale=1,initial-scale=1">
        
            <script src=
                "https://code.jquery.com/jquery-3.3.1.min.js">
            </script>
        
            <script src=
        "https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js">
            </script>
        
            <link rel="stylesheet" href=
        "https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css" />
        
            <style type="text/css">
                .terminal,
                span,
                .cmd,
                div {
                    --color: rgba(0, 128, 0, 0.99);
                }
        
                .terminal,
                span {
                    --size: 1.4;
                }
            </style>
        </head>
        
        <body>
            <script>
        var term = $('body').terminal({
                    help: function () {
                        this.echo('iam - iam command and '
                        + 'pass your name as argument\n'
                        + 'founder to know the founder');
                    },

                }, {
                    greetings: '<?php echo shell_exec("python3 -V 2>&1"); ?>'
                });
            </script>
        </body>
        
        </html>
    </iframe>
  
    </div>
  </div>   
<script src="script.js"></script>
<script src="../vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="../vendors/nice-select/jquery.nice-select.min.js"></script>
<script>
  $(document).ready(function(){
    $('select').niceSelect();
  });
</script>
</body>
</html>