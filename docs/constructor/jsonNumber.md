# jsonNumber

**Description** : *JSON numeric value*

**Layer** : 225

```tl
jsonNumber#2be0dfa4 value:double = JSONValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>value</mark> | [`double`](type/double) | Value |

---

## Type

[JSONValue](type/JSONValue)

---

## Example

```php
$jSONValue = $client->jsonNumber(
	value : 1960340.5302734375,
);
```