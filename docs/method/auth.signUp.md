# auth.signUp

**Description** : *Registers a validated phone number in the system*

**Layer** : 211

```tl
auth.signUp#aac7b717 flags:# no_joined_notifications:flags.0?true phone_number:string phone_code_hash:string first_name:string last_name:string = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_joined_notifications** | [`flags.0?true`](type/true) | If set, users on Telegram that have already added phone_number to their contacts will not receive signup notifications about this user |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number in the international format |
| <mark>phone_code_hash</mark> | [`string`](type/string) | SMS-message ID |
| <mark>first_name</mark> | [`string`](type/string) | New user first name |
| <mark>last_name</mark> | [`string`](type/string) | New user last name |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FIRSTNAME_INVALID** | `400` | The first name is invalid |
| **LASTNAME_INVALID** | `400` | The last name is invalid |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |
| **PHONE_CODE_EXPIRED** | `400` | The phone code you provided has expired |
| **PHONE_CODE_INVALID** | `400` | The provided phone code is invalid |
| **PHONE_NUMBER_FLOOD** | `400` | You asked for the code too many times |
| **PHONE_NUMBER_INVALID** | `406` | The phone number is invalid |
| **PHONE_NUMBER_OCCUPIED** | `400` | The phone number is already in use |

---

## Example

```php
$authAuthorization = $client->auth->signUp(
	no_joined_notifications : true,
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
);
```