# jsonArray

**Description** : *JSON array*

**Layer** : 225

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
			value : -43951.0205078125,
		),
		$client->jsonString(
			value : 'VhjIHl2GQFmeODTv',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : false,
				),
				$client->jsonNumber(
					value : 1723630.7939453125,
				),
				$client->jsonString(
					value : 'Ff9lz2rnx5ZIeGJu',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : true,
						),
						$client->jsonNumber(
							value : -413150.7841796875,
						),
						$client->jsonString(
							value : 'jvbT0WigZ1nO8Bew',
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
							key : 'myKwxSTF3XAD8Mid',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'GgIzXbSopLyqfKHk',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```