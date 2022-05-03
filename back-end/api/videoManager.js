const DatabaseManager = require('./databaseManager');

module.exports = class VideoManager
{
    static eventListener(app)
    {
        app.post('/upload/video', (req, res) => { this.upload(req, res) });
        app.post('/search/:data', (req, res) => { this.search(req, res) });
        app.get('/video/:id', (req, res) => { this.mainVideo(req, res) });
    }

    static async upload(req, res)
    {
        console.log("%cPOST - /upload/video", 'color:blue');
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
        
        let query;
        if (data.thumbnail == '')
        {
            query = `INSERT INTO video (id, creator, title, description, privacy) VALUES ('${data.id}', '${data.creator}', '${data.title}', '${data.description}', '${data.privacy}')`;
        }
        else
        {
            query = `INSERT INTO video (id, creator, title, thumbnail, description, privacy) VALUES ('${data.id}', '${data.creator}', '${data.title}', '${data.thumbnail}', '${data.description}', '${data.privacy}')`;
        }

        let result = await DatabaseManager.executeQuery(query);
        if( result.error ) 
        {
            console.error('QUERY OR SOMETHING HAS BEEN FUCKED UP');
            res.status(500);
        }
        else res.status(200);
    }

    static async search(req, res)
    {
        console.log("%cPOST - /search", "color:blue");
        const data = JSON.parse(req.params.data);
        /*
        {
            "filterBoxTitle":"NomDeLaVideo",
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
        let result = await DatabaseManager.executeQuery(`SELECT * FROM video WHERE title LIKE %${data.filterBoxTitle}%`);
        if( result.error )
        {
            console.error('QUERY OR SOMETHING HAS BEEN FUCKED UP');
            res.status(500);
        }
        else res.status(200);
    }

    static async mainVideo(req, res)
    {
        console.log('GET - /video/');
        let data = req.params;
        console.log(`  id : ${data.id}`);
        let query = `SELECT * FROM video WHERE id = '${data.id}'`;

        let result = await DatabaseManager.executeQuery(query);
        if( result.error ) 
        {
            console.error('QUERY OR SOMETHING HAS BEEN FUCKED UP');
            res.status(500).json([]);
        }
        else res.status(200).json(result.data);
    }
}