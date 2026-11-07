# auth.finishPasskeyLogin

**Description** : *Complete login with a passkey over an unauthenticated connection, see here &raquo; for more info*

**Layer** : 233

```tl
auth.finishPasskeyLogin#9857ad07 flags:# credential:InputPasskeyCredential from_dc_id:flags.0?int from_auth_key_id:flags.0?long = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>credential</mark> | [`InputPasskeyCredential`](type/InputPasskeyCredential) | Passkey assertion result |
| **from_dc_id** | [`flags.0?int`](type/int) | DC ID used for the initial auth.initPasskeyLogin request; set only if the user's DC is different from the DC used for the initial auth.initPasskeyLogin |
| **from_auth_key_id** | [`flags.0?long`](type/long) | Auth key ID for the connection to from_dc_id (use the permanent auth key ID if PFS is enabled); set only if the user's DC is different from the DC used for the initial auth.initPasskeyLogin |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AUTH_RESTART** | `500` | Restart the authorization process |
| **CREDENTIAL_INVALID** | `400` | The specified credential is invalid |
| **PASSKEY_ORIGIN_MISMATCH** | `400` | Third-party clients currently don't support passkeys even when changing the origin |

---

## Example

```php
$authAuthorization = $client->auth->finishPasskeyLogin(
	credential : $client->inputPasskeyCredentialPublicKey(
		id : 'KX7bwjyGqtofUACi',
		raw_id : 'vFRmxWhQOL5BIg9l',
		response : $client->inputPasskeyResponseRegister(
			client_data : $client->dataJSON(
				data : 'SEB9IaRDZY5bUH2W',
			),
			attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	from_dc_id : 70,
	from_auth_key_id : -3038294458518208838,
);
```