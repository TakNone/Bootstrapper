# jsonObjectValue

**Description** : *JSON key: value pair*

**Layer** : 216

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
	key : 'XAdDu4C7r2SYR6yN',
	value : $client->jsonNull(),
);
```