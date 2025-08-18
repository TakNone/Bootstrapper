# emailVerificationApple

**Description** : *Apple ID email verification token*

**Layer** : 211

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
	token : '9VYcEJWeb1RD5AdO',
);
```