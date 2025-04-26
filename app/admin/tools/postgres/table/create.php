<?php

if (!$schema || !$table || !$primary_key) {
	dd('error-line4-postgres/table.create');}

dd($schema,$table,$primary_key);