# emailVerificationCode

**Description** : *Email verification code*

**Layer** : 225

```tl
emailVerificationCode#922e55a9 code:string = EmailVerification;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>code</mark> | [`string`](type/string) | Received verification code |

---

## Type

[EmailVerification](type/EmailVerification)

---

## Example

```php
$emailVerification = $client->emailVerificationCode(
	code : '1q4l2vywCVUYP9ne',
);
```