# jsonNumber

**Description** : *JSON numeric value*

**Layer** : 233

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
	value : 1623550.3701171875,
);
```