# auth.sentCodeTypeEmailCode

**Description** : *The code was sent via the previously configured login email »*

**Layer** : 211

```tl
auth.sentCodeTypeEmailCode#f450f59b flags:# apple_signin_allowed:flags.0?true google_signin_allowed:flags.1?true email_pattern:string length:int reset_available_period:flags.3?int reset_pending_date:flags.4?int = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **apple_signin_allowed** | [`flags.0?true`](type/true) | Whether authorization through Apple ID is allowed |
| **google_signin_allowed** | [`flags.1?true`](type/true) | Whether authorization through Google ID is allowed |
| <mark>email_pattern</mark> | [`string`](type/string) | Pattern of the email |
| <mark>length</mark> | [`int`](type/int) | Length of the sent verification code |
| **reset_available_period** | [`flags.3?int`](type/int) | Clients should wait for the specified amount of seconds before allowing the user to invoke auth.resetLoginEmail (will be 0 for Premium users) |
| **reset_pending_date** | [`flags.4?int`](type/int) | An email reset was already requested, and will occur at the specified date |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeEmailCode(
	apple_signin_allowed : true,
	google_signin_allowed : true,
	email_pattern : 'reply@liveproto.dev',
	length : 43,
	reset_available_period : 18,
	reset_pending_date : 4,
);
```