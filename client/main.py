import sys
import requests
import os
import platform
from PyQt4 import QtCore, QtGui, QtWebKit

response = requests.get('http://localhost/sinew/')
html = response.text

class SinewClass(QtCore.QObject):

	@QtCore.pyqtSlot(str)
	def installGame(self, gameID):
		os.system("xterm -e gameInstallers/openclonk.sh")
		#QtGui.QMessageBox.information(None, "Info", "Installed")

	@QtCore.pyqtSlot(str)
	def launchGame(self, gameID):
		os.system(str(gameID))
		#QtGui.QMessageBox.information(None, "Info", "Installed")

	def _getVersion(self):
		return "0.0.1"
		

	def _getDistro(self):
		getDistro = platform.linux_distribution()
		getDistro = getDistro[0]+"-"+getDistro[1]

		return getDistro

	getVersion = QtCore.pyqtProperty(str, fget=_getVersion)
	getDistro = QtCore.pyqtProperty(str, fget=_getDistro)

def main():
	app = QtGui.QApplication(sys.argv)

	myObj = SinewClass()

	webView = QtWebKit.QWebView()
	# Make myObj exposed as JavaScript object named 'pyObj'
	webView.page().mainFrame().addToJavaScriptWindowObject("pyObj", myObj)
	webView.setHtml(html)

	window = QtGui.QMainWindow()
	window.setCentralWidget(webView)
	window.setWindowTitle('Sinew 0.0.1')

	window.showMaximized()

	sys.exit(app.exec_())

if __name__ == "__main__":
	main()
