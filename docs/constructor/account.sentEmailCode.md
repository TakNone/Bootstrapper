# account.sentEmailCode

**Description** : *The sent email code*

**Layer** : 214

```tl
account.sentEmailCode#811f854f email_pattern:string length:int = account.SentEmailCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>email_pattern</mark> | [`string`](type/string) | The email (to which the code was sent) must match this pattern |
| <mark>length</mark> | [`int`](type/int) | The length of the verification code |

---

## Type

[account.SentEmailCode](type/account.SentEmailCode)

---

## Example

```php
$accountSentEmailCode = $client->account->sentEmailCode(
	email_pattern : 'reply@liveproto.dev',
	length : 26,
);
```