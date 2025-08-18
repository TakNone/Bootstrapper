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
			value : false,
		),
		$client->jsonNumber(
			value : -71759.884765625,
		),
		$client->jsonString(
			value : 'OpLg7dQc3qyGnki8',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : true,
				),
				$client->jsonNumber(
					value : -612240.666015625,
				),
				$client->jsonString(
					value : 'VbBGRpmAjhw6q07L',
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
					key : '75BuhnrMsoGjQPbq',
					value : $client->jsonNull(...),
				),
			),
		),
	),
);
```