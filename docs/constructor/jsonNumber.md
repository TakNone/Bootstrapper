# jsonNumber

**Description** : *JSON numeric value*

**Layer** : 218

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
	value : 259995.5361328125,
);
```