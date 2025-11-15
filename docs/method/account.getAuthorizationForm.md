# account.getAuthorizationForm

**Description** : *Returns a Telegram Passport authorization form for sharing data with a service*

**Layer** : 218

```tl
account.getAuthorizationForm#a929597a bot_id:long scope:string public_key:string = account.AuthorizationForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | User identifier of the service's bot |
| <mark>scope</mark> | [`string`](type/string) | Telegram Passport element types requested by the service |
| <mark>public_key</mark> | [`string`](type/string) | Service's public key |

---

## Result

[account.AuthorizationForm](type/account.AuthorizationForm)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **PUBLIC_KEY_REQUIRED** | `400` | A public key is required |

---

## Example

```php
$accountAuthorizationForm = $client->account->getAuthorizationForm(
	bot_id : 7360629739542017628,
	scope : 'nXiuILy46zME0Hkr',
	public_key : 'MUC2gyf15Kdp3blF',
);
```