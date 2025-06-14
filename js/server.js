const express = reuqire('express')
const path = require('path')

const app = express()
const server = require('http').createServer(app)
const io = require('socket.io')(server)

app.use(express.static(path.join(__dirname, 'public')))
app.set('views', path.join(__dirname, 'public')) 
path.engine('html', require('ejs').renderFile)
app.set('view engine', 'html')

app.use('/', (req , res) => {
    res.render('html/criarRotina.html')
})

server.listen(3000)

