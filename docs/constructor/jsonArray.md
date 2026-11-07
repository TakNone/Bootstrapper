# jsonArray

**Description** : *JSON array*

**Layer** : 233

```tl
jsonArray#f7444763 value:Vector<JSONValue> = JSONValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>value</mark> | [`Vector<JSONValue>`](type/JSONValue) | JSON values |

---

## Type

[JSONValue](type/JSONValue)

---

## Example

```php
$jSONValue = $client->jsonArray(
	value : array(
		$client->jsonNull(),
		$client->jsonBool(
			value : false,
		),
		$client->jsonNumber(
			value : 1757098.7001953125,
		),
		$client->jsonString(
			value : 'JKT0jwuLdqOpZB5s',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : true,
				),
				$client->jsonNumber(
					value : 1769857.5849609375,
				),
				$client->jsonString(
					value : 'tJehRiFn67TmXLvQ',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : false,
						),
						$client->jsonNumber(
							value : -2054003.77734375,
						),
						$client->jsonString(
							value : 'knvgAu85OQCLRGPM',
						),
						$client->jsonArray(
							value : array(
								$client->jsonNull(...),
								$client->jsonBool(...),
								$client->jsonNumber(...),
								$client->jsonString(...),
								$client->jsonArray(...),
								$client->jsonObject(...),
							),
						),
						$client->jsonObject(
							value : array(
								$client->jsonObjectValue(...),
							),
						),
					),
				),
				$client->jsonObject(
					value : array(
						$client->jsonObjectValue(
							key : 'GeUocl0ubFCqQBf5',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'vxR2cH948CJIYSkd',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```