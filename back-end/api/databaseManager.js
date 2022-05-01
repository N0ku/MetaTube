const   mysql = require('mysql');

var sqlConn;

module.exports = class DatabaseManager
{
    static createConn()
    {
        sqlConn = mysql.createConnection({
            host     : '93.16.2.231',
            user     : 'codeur',
            password : 'coding',
            database : 'metatube'
        });
        return sqlConn;
    }

    static async executeQuery(query)
    {
        let result = {
            data:null,
            error:false
        };
        
        await sqlConn.query(query, function(error, results) {
            if(error)
            {
                console.error(error);
                result.error = true
            }
            else result.data = results;
        });

        return result;
    }

    static connect()
    {
        sqlConn.connect(function(error)
        {
            if(error) console.error(error);
        });
    }
}