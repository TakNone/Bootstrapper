# auth.requestFirebaseSms

**Description** : *Request an SMS code via Firebase*

**Layer** : 218

```tl
auth.requestFirebaseSms#8e39261e flags:# phone_number:string phone_code_hash:string safety_net_token:flags.0?string play_integrity_token:flags.2?string ios_push_secret:flags.1?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash returned by auth.sendCode |
| **safety_net_token** | [`flags.0?string`](type/string) | On Android, a JWS object obtained as described in the auth documentation » |
| **play_integrity_token** | [`flags.2?string`](type/string) | On Android, an object obtained as described in the auth documentation » |
| **ios_push_secret** | [`flags.1?string`](type/string) | Secret token received via an apple push notification |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$bool = $client->auth->requestFirebaseSms(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	safety_net_token : 'y1hjlQmWTdUNtcSO',
	play_integrity_token : 'tZ0uqfm3IjVznY85',
	ios_push_secret : 'Fo23CbdtaQg4VvnX',
);
```