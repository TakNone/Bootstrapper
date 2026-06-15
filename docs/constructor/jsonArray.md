# jsonArray

**Description** : *JSON array*

**Layer** : 227

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
			value : -1619909.96484375,
		),
		$client->jsonString(
			value : 'IA38R2lJVZizKsjf',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : false,
				),
				$client->jsonNumber(
					value : 1251780.87890625,
				),
				$client->jsonString(
					value : '4hqLFcG8ZQvse31R',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : false,
						),
						$client->jsonNumber(
							value : -1443416.185546875,
						),
						$client->jsonString(
							value : '4DxZi2tod1gnCV9z',
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
							key : '3JuwolhRCFNaK4q2',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'PWJ2CdNVuALFOEzZ',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```