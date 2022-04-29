const express = require('express'),
mysql = require('mysql');
const app = express();

var connection = mysql.createConnection({
    host     : '93.16.2.231',
    user     : 'codeur',
    password : 'coding',
    database : 'metatube'
});

connection.connect();

app.get('/users', (req,res) => {
    connection.query('SELECT * FROM user', function(error, results, fields) {
        if(error) throw error;
        res.status(200).json(results);
        return results;
    });
});

app.listen(8081, () => {
    console.log('listening on port 8081...');
});