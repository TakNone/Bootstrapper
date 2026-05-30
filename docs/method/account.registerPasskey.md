# account.registerPasskey

**Layer** : 225

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
		id : 'jym6CB4198dXvlzi',
		raw_id : 'ELsXuIt7Q0MrGoFR',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'lf6gP2kopGxMNbR1',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```