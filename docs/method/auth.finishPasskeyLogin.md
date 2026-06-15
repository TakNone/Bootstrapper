# auth.finishPasskeyLogin

**Layer** : 227

```tl
auth.finishPasskeyLogin#9857ad07 flags:# credential:InputPasskeyCredential from_dc_id:flags.0?int from_auth_key_id:flags.0?long = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>credential</mark> | [`InputPasskeyCredential`](type/InputPasskeyCredential) | NOTHING |
| **from_dc_id** | [`flags.0?int`](type/int) | NOTHING |
| **from_auth_key_id** | [`flags.0?long`](type/long) | NOTHING |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Example

```php
$authAuthorization = $client->auth->finishPasskeyLogin(
	credential : $client->inputPasskeyCredentialPublicKey(
		id : 'pLhEj0R9a6dD7A41',
		raw_id : 'VX5kupiOwIo3b9Bl',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'YVlyLdHQpzJC048X',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	from_dc_id : 74,
	from_auth_key_id : -262651686645975319,
);
```