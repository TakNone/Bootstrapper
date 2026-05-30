# auth.finishPasskeyLogin

**Layer** : 222

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
		id : '409mIrJTKVhO8yBn',
		raw_id : 'Gpk2IWMAhged1w8Q',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'XbydPk9zpUEjHwMZ',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	from_dc_id : 41,
	from_auth_key_id : 4314156261823673032,
);
```