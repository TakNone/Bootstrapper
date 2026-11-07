# auth.passkeyLoginOptions

**Description** : *Passkey login options, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
auth.passkeyLoginOptions#e2037789 options:DataJSON = auth.PasskeyLoginOptions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>options</mark> | [`DataJSON`](type/DataJSON) | JSON-encoded object whose publicKey field contains a PublicKeyCredentialRequestOptions object |

---

## Type

[auth.PasskeyLoginOptions](type/auth.PasskeyLoginOptions)

---

## Example

```php
$authPasskeyLoginOptions = $client->auth->passkeyLoginOptions(
	options : $client->dataJSON(
		data : 'PVgSXwUvGHEk7RrJ',
	),
);
```