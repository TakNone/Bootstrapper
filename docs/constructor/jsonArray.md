# jsonArray

**Description** : *JSON array*

**Layer** : 218

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
			value : true,
		),
		$client->jsonNumber(
			value : 1156626.970703125,
		),
		$client->jsonString(
			value : 'zOwtS437Rk5uomPY',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : false,
				),
				$client->jsonNumber(
					value : 735060.396484375,
				),
				$client->jsonString(
					value : '3PZ0pX8lucwvoWay',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : true,
						),
						$client->jsonNumber(
							value : -1620793.8544921875,
						),
						$client->jsonString(
							value : 'iBoxFHvgcpZTYhf5',
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
							key : 'KesifFrxLapQVM5R',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'PMIQWT5LqOXcDKyx',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```