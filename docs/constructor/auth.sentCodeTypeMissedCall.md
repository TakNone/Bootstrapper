# auth.sentCodeTypeMissedCall

**Description** : *The code will be sent via a flash phone call, that will be closed immediately\. The last digits of the phone number that calls are the code that must be entered manually by the user*

**Layer** : 216

```tl
auth.sentCodeTypeMissedCall#82006484 prefix:string length:int = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prefix</mark> | [`string`](type/string) | Prefix of the phone number from which the call will be made |
| <mark>length</mark> | [`int`](type/int) | Length of the verification code |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeMissedCall(
	prefix : 'uPDEniz0VqCTyALF',
	length : 39,
);
```