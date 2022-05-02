// require('dotenv').config();
const   express = require('express'),
        UserManager = require('./userManager'),
        VideoManager = require('./videoManager'),
        Channelmanager = require('./channelManager'),
        DatabaseManager = require('./databaseManager');
var     config = require('./config.json');
const   app = express();

console.log('Starting the server ...');

var sqlConn = DatabaseManager.createConn();
DatabaseManager.connect();

app.use(express.json());

UserManager.eventListener(app); 
VideoManager.eventListener(app);
Channelmanager.eventListener(app);

// test
app.get('/users', (req, res) => {
    console.log("GET - /users/");
    sqlConn.query('SELECT * FROM user', function(error, results) {
        if(error) throw error;
        res.status(200).json(results);
    });
});

app.listen(config.port, () => {
    console.log(`Listening on port ${config.port}`);
});