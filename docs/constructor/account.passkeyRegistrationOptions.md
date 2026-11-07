# account.passkeyRegistrationOptions

**Description** : *Passkey registration options, see here &raquo; for more info on the full flow*

**Layer** : 233

```tl
account.passkeyRegistrationOptions#e16b5ce1 options:DataJSON = account.PasskeyRegistrationOptions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>options</mark> | [`DataJSON`](type/DataJSON) | JSON-encoded object whose publicKey field contains a PublicKeyCredentialCreationOptions object |

---

## Type

[account.PasskeyRegistrationOptions](type/account.PasskeyRegistrationOptions)

---

## Example

```php
$accountPasskeyRegistrationOptions = $client->account->passkeyRegistrationOptions(
	options : $client->dataJSON(
		data : 'SNhIvQmxfJPwjuOH',
	),
);
```