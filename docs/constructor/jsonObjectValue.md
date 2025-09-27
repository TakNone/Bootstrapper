# jsonObjectValue

**Description** : *JSON key: value pair*

**Layer** : 214

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
	key : 'xt9k3vsraO6PLYiG',
	value : $client->jsonNull(),
);
```