const   express = require('express'),
        mysql = require('mysql');
const app = express();

var sqlConn = mysql.createConnection({
    host     : '93.16.2.231',
    user     : 'codeur',
    password : 'coding',
    database : 'metatube'
});

sqlConn.connect();

// test
app.get('/users/', (req,res) => {
    sqlConn.query('SELECT * FROM user', function(error, results) {
        if(error) throw error;
        res.status(200).json(results);
    });
});

// for uploading a video
app.get('/upload/:data', (req,res) => {
    const data = JSON.parse(req.params.data);
    /*
    {
        "id":"",
        "creator":"",
        "title":"",
        "description":"",
        "privacy":""
    }
    */

    /*
                TO DO
        - Make all exit code
    */
    sqlConn.query(`INSERT INTO video (id, creator, title, description, privacy)
    VALUES (${data.id}, ${data.creator}, ${data.title}, ${data.description}, ${data.privacy})`, function(error) {
        if(error) throw error;
        res.status(200);
    });
});

// for researching a video
app.get('/search/:data', (req,res) => {
    const data = JSON.parse(req.params.data);
    /*
    {
        "filter-box-title":"NomDeLaVideo",
        "filters":{
            "uploadDate":"2000-12-31",
            "filterType":"Video",
            "orderBy":""
    }
    */
    let response = {
        "videoWatchCount": "",
        "videoDescription": "",
        "searchpageChannelName": "",
        "videoImg": "",
        "searchpageChannelIcon": "",
        "filterBoxTitle": ""
    };

    /*
    
                        TO DO
        - Make a perfect query with all filter
        - Send a good respons with all different exit code

    */
    sqlConn.query(`SELECT * FROM video WHERE videoName LIKE %${data.filterBoxTitle}%`, function(error, results) {
        if(error) throw error;
        
    });
});

app.get('/video/:id', (req, res) => {
    sqlCon.query(`SELECT * FROM video WHERE id = ${Number.parseInt(req.params.id)}`, function(error, results) {
        if(error) throw error;
        res.status(200).json(results);
    });
});

app.get('/channel/:id', (req, res) => {
    
});

app.listen(8081, () => {
    console.log('listening on port 8081...');
});