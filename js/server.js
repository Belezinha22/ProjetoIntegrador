const express = require('express')
const path = require('path')
const { Socket } = require('socket.io')

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

io.on('connection' , Socket =>{
    console.log(`Usuário conectado: ${socket.id}`)
})

server.listen(5500)

