# jsonArray

**Description** : *JSON array*

**Layer** : 216

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
			value : -458869.310546875,
		),
		$client->jsonString(
			value : 'ZCwsaorOfHdmNb3t',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : true,
				),
				$client->jsonNumber(
					value : 1532880.3291015625,
				),
				$client->jsonString(
					value : '71ugyRYMpwkl92Es',
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
					key : 'ueK7Nyrvm5ZIPEqO',
					value : $client->jsonNull(...),
				),
			),
		),
	),
);
```