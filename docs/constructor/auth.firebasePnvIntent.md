# auth.firebasePnvIntent

**Layer** : 229

```tl
auth.firebasePnvIntent#df5ac00c nonce:string digital_credential_payload:string = auth.FirebasePnvIntent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>nonce</mark> | [`string`](type/string) | NOTHING |
| <mark>digital_credential_payload</mark> | [`string`](type/string) | NOTHING |

---

## Type

[auth.FirebasePnvIntent](type/auth.FirebasePnvIntent)

---

## Example

```php
$authFirebasePnvIntent = $client->auth->firebasePnvIntent(
	nonce : 'hnM7qlGvirP0fFCk',
	digital_credential_payload : 'K2cAGNHs0U4QpbDY',
);
```