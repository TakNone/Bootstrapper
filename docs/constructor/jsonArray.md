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
			value : 1433100.8876953125,
		),
		$client->jsonString(
			value : '9vOKW7CPXzju42k6',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : true,
				),
				$client->jsonNumber(
					value : -1120507.7939453125,
				),
				$client->jsonString(
					value : 'pGV3HldU9JI2Fxt4',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : false,
						),
						$client->jsonNumber(
							value : 1014367.7646484375,
						),
						$client->jsonString(
							value : 'JScXrWe76UFYZ1sA',
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
							key : 'vTumkYfW3N7Q8AyF',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'm46VrNGWzq7j5JLE',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```