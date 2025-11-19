# jsonObject

**Description** : *JSON object value*

**Layer** : 218

```tl
jsonObject#99c1d49d value:Vector<JSONObjectValue> = JSONValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>value</mark> | [`Vector<JSONObjectValue>`](type/JSONObjectValue) | Values |

---

## Type

[JSONValue](type/JSONValue)

---

## Example

```php
$jSONValue = $client->jsonObject(
	value : array(
		$client->jsonObjectValue(
			key : 'XmINBj78ud3ZisOA',
			value : $client->jsonNull(),
		),
	),
);
```