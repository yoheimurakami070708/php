<?php

session_start();
session_regenerate_id();

$_SESSION["name"] = "みずむら";

echo "名前をセットしました！";