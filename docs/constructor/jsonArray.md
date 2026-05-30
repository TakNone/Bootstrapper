# jsonArray

**Description** : *JSON array*

**Layer** : 222

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
			value : -2033176.4482421875,
		),
		$client->jsonString(
			value : '8N612bHPfzl7D9Mw',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : true,
				),
				$client->jsonNumber(
					value : 26834.732421875,
				),
				$client->jsonString(
					value : '3J1MmeIRo7hfXHPN',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : false,
						),
						$client->jsonNumber(
							value : -960327.001953125,
						),
						$client->jsonString(
							value : '8NqieI0uXdn3QPfC',
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
							key : 'PdEb6WSQjB5fDxgk',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'UYC4Wo0lXMjmg5GQ',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```