# account.registerPasskey

**Layer** : 227

```tl
account.registerPasskey#55b41fd6 credential:InputPasskeyCredential = Passkey;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>credential</mark> | [`InputPasskeyCredential`](type/InputPasskeyCredential) | NOTHING |

---

## Result

[Passkey](type/Passkey)

---

## Example

```php
$passkey = $client->account->registerPasskey(
	credential : $client->inputPasskeyCredentialPublicKey(
		id : 'TLURBJHIy81okc4Z',
		raw_id : 'n2ZSGA7cwxfKdC0q',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'FjBgCNm1ihrKvwpD',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```