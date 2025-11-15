# auth.sentCodeTypeSms

**Description** : *The code was sent via SMS*

**Layer** : 218

```tl
auth.sentCodeTypeSms#c000bba2 length:int = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>length</mark> | [`int`](type/int) | Length of the code in bytes |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeSms(
	length : 87,
);
```