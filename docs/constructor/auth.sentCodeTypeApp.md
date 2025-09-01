# auth.sentCodeTypeApp

**Description** : *The code was sent through the telegram app*

**Layer** : 214

```tl
auth.sentCodeTypeApp#3dbb5986 length:int = auth.SentCodeType;
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
$authSentCodeType = $client->auth->sentCodeTypeApp(
	length : 42,
);
```