const DatabaseManager = require('./databaseManager');

module.exports = class timelineManager
{
    static eventListener(app)
    {
        app.get('/timeline/video/:number', (req, res) => { this.sendVideos(req, res) });
    }

    static async sendVideos(req, res)
    {
        console.log('GET - /timeline/video/');
        const number = req.params.number;
        console.log(`Returning ${number} videos ...`);
        let query = `SELECT * FROM video ORDER BY RAND () LIMIT ${number};`;

        let result = await DatabaseManager.executeQuery(query);
        if( result.error )
        {
            console.error('%cQUERY OR SOMETHING HAS BEEN FUCKED UP', 'color:red');
            res.status(500);
        }
        else res.status(200);
    }
}