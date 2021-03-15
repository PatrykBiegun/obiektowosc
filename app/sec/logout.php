<?php
require_once dirname(__FILE__).'/../../config_credit.php';

// wylogowanie to po prostu zniszczenie sesji i powrót do podstawowej strony
session_start();
session_destroy();
header("Location: "._APP_URL);
