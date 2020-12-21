var express = require('express');
var router = express.Router();
var db = require('../db');
var bodyParser = require('body-parser');

router.use(bodyParser.json()); // for parsing application/json
//router.use(bodyParser.urlencoded({extended: true})); // for parsing application/x-www-form-urlencoded

/* get method for fetch all products. */
router.get('/', function(req, res, next) {
  var sql = "SELECT * FROM image";
  db.query(sql, function(err, rows, fields) {
    if (err) {
      res.status(500).send({ error: 'Something failed!' })
    }
    res.json(res)
  })
});

/*get method for fetch single product*/
router.get('/:id', function(req, res, next) {
  var id = req.params.id;
  var sql = `SELECT * FROM image WHERE id_Client=${id}`;
  db.query(sql, function(err, row, fields) {
    if(err) {
      res.status(500).send({ error: 'Something failed!' })
    }
    res.json(row[0])
  })
});

/*post method for create product*/
router.post('/create', function(req, res, next) {
    var id = req.params.id;
  var URL = req.body.URL;
  var id_Client = req.body.id_Client;

  var sql = `INSERT INTO image (URL,id_Client, created_at) VALUES ("${URL}", "${id_Client}",NOW())`;
  db.query(sql, function(err, result) {
    if(err) {
      res.status(500).send({ error: 'Something failed!' })
    }
    res.json({'status': 'success'})
  })
});

/*put method for update product*/
router.put('/update/:id', function(req, res, next) {
  var id = req.params.id;
  var URL = req.body.URL;
  var id_Client = req.body.id_Client;
 

  var sql = `UPDATE image SET URL="${URL}", id_Client="${id_Client}" WHERE id_Client=${id}`;
  db.query(sql, function(err, result) {
    if(err) {
      res.status(500).send({ error: 'Something failed!' })
    }
    res.json({'status': 'success'})
  })
});


/*delete method for delete product*/
router.delete('/delete/:id', function(req, res, next) {
  var id = req.params.id;
  var sql = `DELETE FROM image WHERE id_Client=${id}`;
  db.query(sql, function(err, result) {
    if(err) {
      res.status(500).send({ error: 'Something failed!' })
    }
    res.json({'status': 'success'})
  })
})

module.exports = router;