# account.confirmPhone

**Description** : *Confirm a phone number to cancel account deletion, for more info click here »*

**Layer** : 211

```tl
account.confirmPhone#5f2178c3 phone_code_hash:string phone_code:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash, for more info click here » |
| <mark>phone_code</mark> | [`string`](type/string) | SMS code, for more info click here » |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CODE_HASH_INVALID** | `400` | Code hash invalid |
| **PHONE_CODE_EMPTY** | `400` | phone_code is missing |

---

## Example

```php
$bool = $client->account->confirmPhone(
	phone_code_hash : '+1234567890',
	phone_code : '+1234567890',
);
```