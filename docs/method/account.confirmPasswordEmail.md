# account.confirmPasswordEmail

**Description** : *Verify an email to use as 2FA recovery method*

**Layer** : 218

```tl
account.confirmPasswordEmail#8fdf1920 code:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>code</mark> | [`string`](type/string) | The phone code that was received after setting a recovery email |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CODE_INVALID** | `400` | Code invalid |
| **EMAIL_HASH_EXPIRED** | `400` | Email hash expired |

---

## Example

```php
$bool = $client->account->confirmPasswordEmail(
	code : '6ILNkhdGz9COwfi8',
);
```