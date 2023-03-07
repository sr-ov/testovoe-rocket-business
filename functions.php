<?php

function template(string $path, array $data, bool $print = true)
{
	$_full_path_ = __DIR__ . "/partials/{$path}.php";
	extract($data);
	ob_start();
	require $_full_path_;
	$res = ob_get_clean();
	if ($print) {
		echo $res;
	} else {
		return $res;
	}
}

$db = new PDO('sqlite:rocket_business.sqlite');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function fetchData(PDO $db, string $sql, array $data = null)
{
	$query = $db->prepare($sql);
	$query->execute($data);

	return $query->fetchAll();
}

function getCheckups(PDO $db): array
{
	$checkups = fetchData($db, "SELECT * FROM checkups");

	foreach ($checkups as $i => $checkup) {
		$sql  = "SELECT ccs.checkup_services_id
		FROM checkup_services AS cs
		JOIN checkups_checkup_services AS ccs
		WHERE ccs.checkups_id = :id GROUP BY ccs.checkup_services_id";
		$servicesById = fetchData($db, $sql, ['id' => $checkup['checkup_id']]);
		$servicesIds = implode(
			', ',
			array_map(fn ($serv) => $serv['checkup_services_id'], $servicesById)
		);
		$services = fetchData(
			$db,
			"SELECT * FROM checkup_services
			WHERE checkup_service_id IN ($servicesIds)"
		);
		$checkups[$i] += ['services' => $services];
	}

	return $checkups;
}
