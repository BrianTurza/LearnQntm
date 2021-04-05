from flask import Flask
from io import StringIO
import contextlib
import sys
from flask import request, render_template
from platform import python_version

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
    version = ""
    default = '''
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
      """
    '''
    if request.method in ['POST', 'GET']:
        code = request.form.get('code')
        lang = 'python3'

        if code == None:

            return render_template('index.html', output='', code=default)

        if lang == "python3":
            version = "Python {}<br><br>".format(python_version())
            output = exec_py(code).replace('\n', '<br>')
        
        elif lang == "cpp":
            pass

    return render_template('index.html', version=version ,output=output, code=code)
        

if __name__ == '__main__':
    app.run()
