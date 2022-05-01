module.exports = class UserManager
{
    static eventListener(app)
    {
        app.post('upload/user', (req, res) => { this.upload(req, res) });
    }

    static upload(req, res)
    {
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
    }
}