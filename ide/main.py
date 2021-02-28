from flask import Flask
from io import StringIO

app = Flask(__name__)

from flask import Flask

app = Flask(__name__)

@contextlib.contextmanager
def stdoutIO(stdout=None):
    old = sys.stdout
    if stdout is None:
        stdout = StringIO()
    sys.stdout = stdout
    yield stdout
    sys.stdout = old

def exec_py(py_code):
    with stdoutIO() as s:
        try:
            exec(py_code)
        except Exception as exc:
                print(exc)
    return s.getvalue()


@app.route('/', methods=['POST', 'GET'])
def main():
    output = ""
    if request.method in ['POST', 'GET']:
        code = request.form.get('code')
        lang = request.form.get('lang')

        if code == None:
            return render_template('index.html', output='', code='')
    
        if lang == "python3":
            output = exec_py(code).replace('\n', '<br>')
        
        elif lang == "cpp":
            pass

        return render_template('index.html', output=output)
        

if __name__ == '__main__':
    app.run()
