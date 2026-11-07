# account.registerPasskey

**Description** : *Complete passkey registration for the current account, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
account.registerPasskey#55b41fd6 credential:InputPasskeyCredential = Passkey;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>credential</mark> | [`InputPasskeyCredential`](type/InputPasskeyCredential) | Registration result |

---

## Result

[Passkey](type/Passkey)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CREDENTIAL_INVALID** | `400` | The specified credential is invalid |
| **PASSKEY_ORIGIN_MISMATCH** | `400` | Third-party clients currently don't support passkeys even when changing the origin |

---

## Example

```php
$passkey = $client->account->registerPasskey(
	credential : $client->inputPasskeyCredentialPublicKey(
		id : 'FM67pA312QaH8Z90',
		raw_id : 'vlGzpCai7Yk8SdZH',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'FLiXJqU1ud6rvwcD',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```