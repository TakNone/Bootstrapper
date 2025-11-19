# inputCheckPasswordSRP

**Description** : *Constructor for checking the validity of a 2FA SRP password \(see SRP\)*

**Layer** : 218

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
	srp_id : -1504583517612895856,
	A : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	M1 : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```