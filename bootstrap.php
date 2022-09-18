<?php

// This file serves as the Factory

require './database/Connection.php';
require './database/QueryBuilder.php';
require './Router.php';

$config = require './config.php';



// This is responsible for the connection to the database
return  new QueryBuilder(
  Connection::make($config['database'])
);
