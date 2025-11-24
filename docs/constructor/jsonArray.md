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
			value : false,
		),
		$client->jsonNumber(
			value : -173008.705078125,
		),
		$client->jsonString(
			value : 'OnENxeuc6hbG9DyA',
		),
		$client->jsonArray(
			value : array(
				$client->jsonNull(),
				$client->jsonBool(
					value : false,
				),
				$client->jsonNumber(
					value : -1915214.2373046875,
				),
				$client->jsonString(
					value : 'zx3pebtuGwJls94n',
				),
				$client->jsonArray(
					value : array(
						$client->jsonNull(),
						$client->jsonBool(
							value : true,
						),
						$client->jsonNumber(
							value : 1846478.90234375,
						),
						$client->jsonString(
							value : 'sEMROUhuNqyivTDS',
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
							key : 'w5ozhdgruis48DIY',
							value : $client->jsonNull(...),
						),
					),
				),
			),
		),
		$client->jsonObject(
			value : array(
				$client->jsonObjectValue(
					key : 'n4rEIsB65NcL2HSh',
					value : $client->jsonNull(),
				),
			),
		),
	),
);
```