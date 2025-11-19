# emailVerificationApple

**Description** : *Apple ID email verification token*

**Layer** : 218

```tl
emailVerificationApple#96d074fd token:string = EmailVerification;
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
$emailVerification = $client->emailVerificationApple(
	token : 'S3tCQKJ9NTI5b1Ww',
);
```