# auth.passwordRecovery

**Description** : *Recovery info of a 2FA password, only for accounts with a recovery email configured*

**Layer** : 211

```tl
auth.passwordRecovery#137948a5 email_pattern:string = auth.PasswordRecovery;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>email_pattern</mark> | [`string`](type/string) | The email to which the recovery code was sent must match this pattern |

---

## Type

[auth.PasswordRecovery](type/auth.PasswordRecovery)

---

## Example

```php
$authPasswordRecovery = $client->auth->passwordRecovery(
	email_pattern : 'reply@liveproto.dev',
);
```