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
			value : 1986505.2763671875,
		),
		$client->jsonString(
			value : 'THFn5pBvEs2w1Rab',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : false,
				),
				$client->jsonNumber(
					value : -966768.3544921875,
				),
				$client->jsonString(
					value : 'x1p6BqSOrTRtXIDs',
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
					key : '9FXikIjUfMml7byR',
					value : $client->jsonNull(...),
				),
			),
		),
	),
);
```