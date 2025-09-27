# jsonArray

**Description** : *JSON array*

**Layer** : 214

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
			value : 352332.4482421875,
		),
		$client->jsonString(
			value : '3bN1v45BqrXKlRyA',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : false,
				),
				$client->jsonNumber(
					value : 411570.6650390625,
				),
				$client->jsonString(
					value : 'zsvEcjgmCKUJiH9G',
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
					key : 'ZF450yOKnogUaIGt',
					value : $client->jsonNull(...),
				),
			),
		),
	),
);
```