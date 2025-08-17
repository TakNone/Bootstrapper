# account.emailVerified

**Description** : *The email was verified correctly*

**Layer** : 211

```tl
account.emailVerified#2b96cd1b email:string = account.EmailVerified;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>email</mark> | [`string`](type/string) | The verified email address |

---

## Type

[account.EmailVerified](type/account.EmailVerified)

---

## Example

```php
$accountEmailVerified = $client->account->emailVerified(
	email : 'reply@liveproto.dev',
);
```