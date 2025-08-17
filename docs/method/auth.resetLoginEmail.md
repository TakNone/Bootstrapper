# auth.resetLoginEmail

**Description** : *Reset the login email »*

**Layer** : 211

```tl
auth.resetLoginEmail#7e960193 phone_number:string phone_code_hash:string = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number of the account |
| <mark>phone_code_hash</mark> | [`string`](type/string) | Phone code hash, obtained as described in the documentation » |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |
| **TASK_ALREADY_EXISTS** | `400` | An email reset was already requested |

---

## Example

```php
$authSentCode = $client->auth->resetLoginEmail(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
);
```