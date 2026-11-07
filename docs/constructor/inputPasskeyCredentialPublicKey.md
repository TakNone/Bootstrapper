# inputPasskeyCredentialPublicKey

**Description** : *Public\-key passkey credential used both for registration and for login, see creating a passkey &raquo; and logging in with a passkey &raquo; for the full flows*

**Layer** : 229

```tl
inputPasskeyCredentialPublicKey#3c27b78f id:string raw_id:string response:InputPasskeyResponse = InputPasskeyCredential;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | id field of a PublicKeyCredential, passed as-is without base64url-decoding when using the JSON representation |
| <mark>raw_id</mark> | [`string`](type/string) | rawId field of a PublicKeyCredential, passed as-is without base64url-decoding when using the JSON representation |
| <mark>response</mark> | [`InputPasskeyResponse`](type/InputPasskeyResponse) | Registration or login response |

---

## Type

[InputPasskeyCredential](type/InputPasskeyCredential)

---

## Example

```php
$inputPasskeyCredential = $client->inputPasskeyCredentialPublicKey(
	id : 'PIvXdcF4rtxy8mOl',
	raw_id : '0Yb7aQesGylEoUFv',
	response : $client->inputPasskeyResponseRegister(
		client_data : $client->dataJSON(
			data : 'Fnrbh5PWIZiCfOx4',
		),
		attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```