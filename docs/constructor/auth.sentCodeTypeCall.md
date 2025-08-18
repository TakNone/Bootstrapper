# auth.sentCodeTypeCall

**Description** : *The code will be sent via a phone call: a synthesized voice will tell the user which verification code to input*

**Layer** : 211

```tl
auth.sentCodeTypeCall#5353e5a7 length:int = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>length</mark> | [`int`](type/int) | Length of the verification code |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeCall(
	length : 7,
);
```