# auth.checkPaidAuth

**Description** : *Checks the status of a login payment*

**Layer** : 233

```tl
auth.checkPaidAuth#56e59f9c phone_number:string phone_code_hash:string form_id:long = auth.SentCode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>phone_code_hash</mark> | [`string`](type/string) | The phone code hash obtained from auth.sendCode |
| <mark>form_id</mark> | [`long`](type/long) | The payment form ID passed to payments.sendPaymentForm |

---

## Result

[auth.SentCode](type/auth.SentCode)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PHONE_NUMBER_INVALID** | `400` | The phone number is invalid |

---

## Example

```php
$authSentCode = $client->auth->checkPaidAuth(
	phone_number : '+1234567890',
	phone_code_hash : '+1234567890',
	form_id : -6614604034524551628,
);
```