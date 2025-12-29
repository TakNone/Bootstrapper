# account.emailVerifiedLogin

**Description** : *The email was verified correctly, and a login code was just sent to it*

**Layer** : 218

```tl
account.emailVerifiedLogin#e1bb0d61 email:string sent_code:auth.SentCode = account.EmailVerified;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>email</mark> | [`string`](type/string) | The verified email address |
| <mark>sent_code</mark> | [`auth.SentCode`](type/auth.SentCode) | Info about the sent login code |

---

## Type

[account.EmailVerified](type/account.EmailVerified)

---

## Example

```php
$accountEmailVerified = $client->account->emailVerifiedLogin(
	email : 'reply@liveproto.dev',
	sent_code : $client->auth->sentCode(
		type : $client->auth->sentCodeTypeApp(
			length : 16,
		),
		phone_code_hash : '+1234567890',
		next_type : $client->auth->codeTypeSms(),
		timeout : 55,
	),
);
```