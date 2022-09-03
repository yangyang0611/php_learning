from flask import Flask, render_template, request
import json
import os
app = Flask(__name__)


@app.route("/")
def index():
    return render_template('index.html')


@app.route("/test")
def test():
    return render_template('test.html')


if __name__ == "__main__":
    app.run(host="127.0.0.1", port="5000", debug=True)
