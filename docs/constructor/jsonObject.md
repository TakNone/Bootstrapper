# jsonObject

**Description** : *JSON object value*

**Layer** : 225

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
			key : 'Dn1Lrobl78JXCiq6',
			value : $client->jsonNull(),
		),
	),
);
```