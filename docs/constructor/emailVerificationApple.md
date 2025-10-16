# emailVerificationApple

**Description** : *Apple ID email verification token*

**Layer** : 216

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
	token : 'Sxo0vUTLKrB2FXPi',
);
```