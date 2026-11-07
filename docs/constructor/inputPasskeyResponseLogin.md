# inputPasskeyResponseLogin

**Description** : *WebAuthn authentication response used when logging in with a passkey, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
inputPasskeyResponseLogin#c31fc14a client_data:DataJSON authenticator_data:bytes signature:bytes user_handle:string = InputPasskeyResponse;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>client_data</mark> | [`DataJSON`](type/DataJSON) | Base64url-decoded clientDataJSON field of an AuthenticatorAssertionResponse, wrapped in dataJSON |
| <mark>authenticator_data</mark> | [`bytes`](type/bytes) | Base64url-decoded authenticatorData field of an AuthenticatorAssertionResponse |
| <mark>signature</mark> | [`bytes`](type/bytes) | Base64url-decoded signature field of an AuthenticatorAssertionResponse |
| <mark>user_handle</mark> | [`string`](type/string) | Base64url-decoded userHandle field of an AuthenticatorAssertionResponse. The user handle specified by the server is in <dc_id>:<user_id> format |

---

## Type

[InputPasskeyResponse](type/InputPasskeyResponse)

---

## Example

```php
$inputPasskeyResponse = $client->inputPasskeyResponseLogin(
	client_data : $client->dataJSON(
		data : '3nP2TdZMQRj1SuEp',
	),
	authenticator_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	user_handle : 'IgsbeOK6DtH3Bcma',
);
```