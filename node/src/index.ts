import * as express from "express";
import * as request from "request";
import * as uuid from "uuid";

let service: string = process.env["GO_SERVICE_URL"] || "http://httpbin.org/get?language=node";
let serverId: string = uuid.v1();

let app: express.Application = express();


app.get('/', function (req, res) {
  console.log(service)
  request.get(service, function(err, httpResponse, body){
    res.json({
      "language": "nodejs",
      "serverId": serverId,
      "message": body,
      "response": httpResponse,
    })
  });

});
app.listen(3000);