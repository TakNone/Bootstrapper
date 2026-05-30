# inputPasskeyResponseRegister

**Layer** : 222

```tl
inputPasskeyResponseRegister#3e63935c client_data:DataJSON attestation_data:bytes = InputPasskeyResponse;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>client_data</mark> | [`DataJSON`](type/DataJSON) | NOTHING |
| <mark>attestation_data</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[InputPasskeyResponse](type/InputPasskeyResponse)

---

## Example

```php
$inputPasskeyResponse = $client->inputPasskeyResponseRegister(
	client_data : $client->dataJSON(
		data : '5jwAlgCcJizfSYVT',
	),
	attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```