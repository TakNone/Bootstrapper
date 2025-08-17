# jsonArray

**Description** : *JSON array*

**Layer** : 211

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
			value : $client->boolFalse(),
		),
		$client->jsonNumber(
			value : 1271437.9931640625,
		),
		$client->jsonString(
			value : 'KaPjcGhxvtFOLdAn',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : $client->boolFalse(...),
				),
				$client->jsonNumber(
					value : 1007419.298828125,
				),
				$client->jsonString(
					value : 'XLr2SgNpEdHwtoYM',
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
					key : 'IJlaXQxepT6Nb4fc',
					value : $client->jsonNull(...),
				),
			),
		),
	),
);
```