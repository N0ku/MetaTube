const DatabaseManager = require ('./databaseManager');

module.exports = class channelManager
{
    static eventListener(app)
    {
        app.post('/upload/channel', (req, res) => { this.upload(req, res) });
        app.get('/channel/:id', (req, res) => { this.mainChannel(req, res) });
    }

    static async upload(req, res)
    {
        console.log("POST - /upload/channel");
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

        let result = await DatabaseManager.executeQuery(`INSERT INTO channel (id, channelName, channelProfilePicture) VALUES ('${data.id}', '${data.channelName}', '${data.channelProfilePicture}')`);
        if( result.error )
        {
            console.error('%cQUERY OR SOMETHING HAS BEEN FUCKED UP', 'color:red');
            res.status(500).json([]);
        }
        else res.status(200).json(result.data);
    }

    static async mainChannel(req, res)
    {
        console.log("GET - /channel");
        console.log(`   Searching for the id "${req.params.id}"`);
        let result = await DatabaseManager.executeQuery(`SELECT * FROM channel WHERE id = '${req.params.id}'`);
        if( result.error )
        {
            console.error('%cQUERY OR SOMETHING HAS BEEN FUCKED UP', 'color:red');
            res.status(500).json([]);
        }
        else res.status(200).json(result.data);
    }
}