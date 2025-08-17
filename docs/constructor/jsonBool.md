# jsonBool

**Description** : *JSON boolean value*

**Layer** : 211

```tl
jsonBool#c7345e6a value:Bool = JSONValue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>value</mark> | [`Bool`](type/Bool) | Value |

---

## Type

[JSONValue](type/JSONValue)

---

## Example

```php
$jSONValue = $client->jsonBool(
	value : $client->boolFalse(),
);
```