# jsonNumber

**Description** : *JSON numeric value*

**Layer** : 216

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
	value : -1179585.048828125,
);
```