module.exports = class channelManager
{
    static eventListener(app)
    {
        app.post('/upload/channel', (req, res) => { this.upload(req, res) });
        app.get('/channel/:id', (req, res) => { this.mainChannel(req, res) });
    }

    static upload(req, res)
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

        sqlConn.query(`INSERT INTO channel (id, channelName, channelProfilePicture) VALUES ('${data.id}', '${data.channelName}', '${data.channelProfilePicture}')`, function(error) {
            if(error) throw error;
            res.status(200);
        });
    }

    static mainChannel(req, res)
    {
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
    }
}