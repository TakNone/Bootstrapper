# auth.sentCodeTypeSetUpEmailRequired

**Description** : *The user should add and verify an email address in order to login as described here »*

**Layer** : 211

```tl
auth.sentCodeTypeSetUpEmailRequired#a5491dea flags:# apple_signin_allowed:flags.0?true google_signin_allowed:flags.1?true = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **apple_signin_allowed** | [`flags.0?true`](type/true) | Whether authorization through Apple ID is allowed |
| **google_signin_allowed** | [`flags.1?true`](type/true) | Whether authorization through Google ID is allowed |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeSetUpEmailRequired(
	apple_signin_allowed : true,
	google_signin_allowed : true,
);
```