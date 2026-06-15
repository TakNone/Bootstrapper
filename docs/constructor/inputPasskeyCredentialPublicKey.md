# inputPasskeyCredentialPublicKey

**Layer** : 227

```tl
inputPasskeyCredentialPublicKey#3c27b78f id:string raw_id:string response:InputPasskeyResponse = InputPasskeyCredential;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | NOTHING |
| <mark>raw_id</mark> | [`string`](type/string) | NOTHING |
| <mark>response</mark> | [`InputPasskeyResponse`](type/InputPasskeyResponse) | NOTHING |

---

## Type

[InputPasskeyCredential](type/InputPasskeyCredential)

---

## Example

```php
$inputPasskeyCredential = $client->inputPasskeyCredentialPublicKey(
	id : 'MOAQsBlwmcqI09GY',
	raw_id : 'UJDy3VhvfRWYCkiI',
	response : $client->inputPasskeyResponseRegister(
		client_data : $client->dataJSON(
			data : 'rtUIeCbZA2mGF0vl',
		),
		attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```