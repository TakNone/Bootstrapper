# emailVerificationGoogle

**Description** : *Google ID email verification token*

**Layer** : 216

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
	token : 'etPMsQVrYhiFcZw1',
);
```