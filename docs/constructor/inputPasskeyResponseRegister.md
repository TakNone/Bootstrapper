# inputPasskeyResponseRegister

**Description** : *WebAuthn registration response used when registering a new passkey, see here &raquo; for more info on the full flow*

**Layer** : 229

```tl
inputPasskeyResponseRegister#3e63935c client_data:DataJSON attestation_data:bytes = InputPasskeyResponse;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>client_data</mark> | [`DataJSON`](type/DataJSON) | Base64url-decoded clientDataJSON field of an AuthenticatorAttestationResponse, wrapped in dataJSON |
| <mark>attestation_data</mark> | [`bytes`](type/bytes) | Base64url-decoded attestationObject field of an AuthenticatorAttestationResponse |

---

## Type

[InputPasskeyResponse](type/InputPasskeyResponse)

---

## Example

```php
$inputPasskeyResponse = $client->inputPasskeyResponseRegister(
	client_data : $client->dataJSON(
		data : 'SgtafiH1eZu3bCKd',
	),
	attestation_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```