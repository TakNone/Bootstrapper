# auth.checkRecoveryPassword

**Description** : *Check if the 2FA recovery code sent using auth\.requestPasswordRecovery is valid, before passing it to auth\.recoverPassword*

**Layer** : 214

```tl
auth.checkRecoveryPassword#d36bf79 code:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>code</mark> | [`string`](type/string) | Code received via email |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CODE_EMPTY** | `400` | The provided code is empty |
| **PASSWORD_RECOVERY_EXPIRED** | `400` | The recovery code has expired |

---

## Example

```php
$bool = $client->auth->checkRecoveryPassword(
	code : 'Q3eCcyUHN5AV8lKW',
);
```