const DatabaseManager = require('./databaseManager');

module.exports = class VideoManager
{
    static eventListener(app)
    {
        app.post('/upload/video', (req, res) => { this.uploadVideo(req, res) });
        app.get('/search/:data', (req, res) => { this.search(req, res) });
        app.get('/video/:id', (req, res) => { this.mainVideo(req, res) });
    }

    static upload(req, res)
    {
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
        console.log(`Thumbnail : ${data.thumbnail}`);
        console.log(`Description : ${data.description}`);
        console.log(`Privacy : ${data.privacy}`);
        
        let query;
        if (data.thumbnail == '')
        {
            query = `INSERT INTO video (id, creator, title, description, privacy) VALUES ('${data.id}', '${data.creator}', '${data.title}', '${data.description}', '${data.privacy}')`;
        }
        else
        {
            query = `INSERT INTO video (id, creator, title, thumbnail, description, privacy) VALUES ('${data.id}', '${data.creator}', '${data.title}', '${data.thumbnail}', '${data.description}', '${data.privacy}')`;
        }

        if( DatabaseManager.executeQuery(query) ) res.status(200);
        else
        {
            console.error('QUERY OR SOMETHING HAS BEEN FUCKED UP');
            res.status(500);
        }
    }

    static search(req, res)
    {
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
        */
        if( !DatabaseManager.executeQuery(`SELECT * FROM video WHERE title LIKE %${data.filterBoxTitle}%`) )
        {
            console.error('QUERY OR SOMETHING HAS BEEN FUCKED UP');
            res.status(500);
        }
        else res.status(200);
    }

    static async mainVideo(req, res)
    {
        console.log("GET - /video/");
        let data = req.params;
        let query = `SELECT * FROM video WHERE id = '${data.id}'`;

        let result = await DatabaseManager.executeQuery(query);
        if( result.error ) 
        {
            console.error('QUERY OR SOMETHING HAS BEEN FUCKED UP');
            res.status(500).json([]);
        }
        else 
        {
            res.status(200).json(result.data);
        }
    }
}