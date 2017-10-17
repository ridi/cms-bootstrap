'use strict';

import express from 'express';
import path from 'path';
import bodyParser from 'body-parser';
import { Session, Authorizer } from '@ridibooks/cms-sdk';

const PORT = 80;
const HOST = '0.0.0.0';
const SESSION_SECRET = 'mustuse';

const app = express();

app.use('/example/js', express.static(path.resolve(__dirname, '../../../web/js')));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.use(Session({
  // couchbaseConfig: {
  //   bucket: 'session',
  //   host: 'couchbase:8091',
  // },
  secret: SESSION_SECRET,
  maxAge: 60 * 60 * 24 * 14,
}));

app.use(Authorizer);

// app.use(function (req, res, next) {
//   const isLoginPage = false;
//   if (isLoginPage) {
//     next();
//     return;
//   }

//   // const client = new Client('http://cms_main');
//   // return client.adminAuth.authorize('/example/js/test');

//   return null;
// })

app.get('/example/js/test', (req, res) => {
  if (req.session.views) {
    req.session.views++
    res.setHeader('Content-Type', 'text/html')
    res.write('<p>views: ' + req.session.views + '</p>')
    res.write('<p>views: ' + req.session.views + '</p>')
    res.write('<p>expires in: ' + (req.session.cookie.maxAge / 1000) + 's</p>')
    res.end()
  } else {
    req.session.views = 1
    res.end('welcome to the session demo. refresh!')
  };
});

app.get('/example/js/home', (req, res) => {
  const client = new Client('http://cms_main');
  client.adminUser.getUser('admin', function (err, response) {
    return res.send(response);
  });
});

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);