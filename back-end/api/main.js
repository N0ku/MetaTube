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

app.use(express.json());

// test
app.get('/users', (req, res) => {
    console.log("GET - /users/");
    sqlConn.query('SELECT * FROM user', function(error, results) {
        if(error) throw error;
        res.status(200).json(results);
    });
});

// upload video
app.post('/upload/video', (req, res) => {
    console.log("POST - /upload/video");
    const data = req.body;

    /* DATA FORMAT
    {
        "id":"",
        "creator":"",
        "title":"",
        "description":"",
        "privacy":""
    }
    */

    console.log(`Video id : ${data.id}`);
    console.log(`Creator id : ${data.creator}`);
    console.log(`Title : ${data.title}`);
    console.log(`Description : ${data.description}`);
    console.log(`Privacy : ${data.privacy}`);

    /*
                TO DO
        - Make all exit code
    */

    sqlConn.query(`INSERT INTO video (id, creator, title, description, privacy)
                    VALUES ('${data.id}', '${data.creator}', '${data.title}', '${data.description}', '${data.privacy}')`, function(error) {
        if(error) throw error;
        res.status(200);
    });
});

// create user
app.post('/upload/user', (req, res) => {
    console.log("POST - /upload/user");
    const data = req.body;

    /* DATA FORMAT
    {
        "id":"",
        "username":"",
        "email":"",
        "password":""
    }
    */

    console.log(`User id : ${data.id}`);
    console.log(`Username : ${data.username}`);
    console.log(`email : ${data.email}`);
    console.log(`password : ${data.password}`);

    sqlConn.query(`INSERT INTO user (id, username, email, password) VALUES ('${data.id}', '${data.username}', '${data.email}', '${data.password}')`, function(error) {
        if(error) throw error;
        res.status(200);
    });
});

// create channel
app.post('/upload/channel', (req, res) => {
    console.log("POST - /upload/user");
    const data = req.body;

    /* DATA FORMAT
    {
        "id":"",
        "channelName":"",
        "channelProfilePicture":""
    }
    */

    console.log(`User id : ${data.id}`);
    console.log(`channelName : ${data.channelName}`);
    console.log(`channelProfilePicture : ${data.channelProfilePicture}`);

    sqlConn.query(`INSERT INTO channel (id, channelName, channelProfilePicture) VALUES ('${data.id}', '${data.channelName}', '${data.channelProfilePicture}')`, function(error) {
        if(error) throw error;
        res.status(200);
    });
});

// videos search
app.get('/search/:data', (req,res) => {
    console.log("GET - /search");
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
    sqlConn.query(`SELECT * FROM video WHERE title LIKE %${data.filterBoxTitle}%`, function(error, results) {
        if(error) throw error;
        
    });
});

// get video
app.get('/video/:id', (req, res) => {
    console.log("GET - /video/");
    sqlConn.query(`SELECT * FROM video WHERE id = ${req.params.id}`, function(error, results) {
        if(error)
        {
            if(error.errno == 1054) res.status(200).json([]);
            else throw error;
        }
        else res.status(200).json(results);
    });
});

// get channel
app.get('/channel/:id', (req, res) => {
    console.log("GET - /channel");
    console.log(`   Searching for the id "${req.params.id}"`);
    sqlConn.query(`SELECT * FROM channel WHERE id = ${req.params.id}`, function(error, results) {
        if(error)
        {
            if(error.errno == 1054) res.status(200).json([]);
            else throw error;
        }
        else res.status(200).json(results);
    });
});

app.listen(8081, () => {
    console.log('listening on port 8081...');
});