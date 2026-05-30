# account.registerPasskey

**Layer** : 222

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
		id : 'uirkJCgatv0QGb7A',
		raw_id : 'QauN7cwFkTvi5hZd',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'S3w7IM1GNsFo8gWQ',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```