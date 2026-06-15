# jsonObjectValue

**Description** : *JSON key: value pair*

**Layer** : 227

```tl
jsonObjectValue#c0de1bd9 key:string value:JSONValue = JSONObjectValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>key</mark> | [`string`](type/string) | Key |
| <mark>value</mark> | [`JSONValue`](type/JSONValue) | Value |

---

## Type

[JSONObjectValue](type/JSONObjectValue)

---

## Example

```php
$jSONObjectValue = $client->jsonObjectValue(
	key : 'fckBjeFaw9SU0y6Q',
	value : $client->jsonNull(),
);
```