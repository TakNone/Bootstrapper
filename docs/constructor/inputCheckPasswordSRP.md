# inputCheckPasswordSRP

**Description** : *Constructor for checking the validity of a 2FA SRP password \(see SRP\)*

**Layer** : 211

```tl
inputCheckPasswordSRP#d27ff082 srp_id:long A:bytes M1:bytes = InputCheckPasswordSRP;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>srp_id</mark> | [`long`](type/long) | SRP ID |
| <mark>A</mark> | [`bytes`](type/bytes) | A parameter (see SRP) |
| <mark>M1</mark> | [`bytes`](type/bytes) | M1 parameter (see SRP) |

---

## Type

[InputCheckPasswordSRP](type/InputCheckPasswordSRP)

---

## Example

```php
$inputCheckPasswordSRP = $client->inputCheckPasswordSRP(
	srp_id : 2527354171234754974,
	A : '???~LiveProto?)?',
	M1 : 'pH???LiveProtot??\\',
);
```