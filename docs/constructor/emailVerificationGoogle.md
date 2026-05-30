# emailVerificationGoogle

**Description** : *Google ID email verification token*

**Layer** : 222

```tl
emailVerificationGoogle#db909ec2 token:string = EmailVerification;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | Token |

---

## Type

[EmailVerification](type/EmailVerification)

---

## Example

```php
$emailVerification = $client->emailVerificationGoogle(
	token : '7zyXOQUpWqErltRi',
);
```