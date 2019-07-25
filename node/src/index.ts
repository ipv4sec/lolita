import * as express from "express";
import * as request from "request";
import * as uuid from "uuid";

let service: string = "http://golang.google.cn";
let serverId: string = uuid.v1();

let app: express.Application = express();


app.get('/', function (req, res) {
  console.log(service)
  request.get("http://" + service, function(err, httpResponse, body){
    res.json({
      "language": "nodejs",
      "serverId": serverId,
      "message": body
    })
  });

});
app.listen(3000);