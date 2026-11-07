# emailVerificationGoogle

**Description** : *Google ID email verification token*

**Layer** : 233

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
	token : 'x6YzD1NL05HPOoR2',
);
```