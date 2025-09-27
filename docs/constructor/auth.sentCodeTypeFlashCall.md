# auth.sentCodeTypeFlashCall

**Description** : *The code will be sent via a flash phone call, that will be closed immediately\. The phone code will then be the phone number itself, just make sure that the phone number matches the specified pattern*

**Layer** : 216

```tl
auth.sentCodeTypeFlashCall#ab03c6d9 pattern:string = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pattern</mark> | [`string`](type/string) | pattern to match |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeFlashCall(
	pattern : '4kJmcg19plGRsvQF',
);
```