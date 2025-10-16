# auth.sentCodeTypeFragmentSms

**Description** : *The code was delivered via fragment\.com*

**Layer** : 216

```tl
auth.sentCodeTypeFragmentSms#d9565c39 url:string length:int = auth.SentCodeType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Open the specified URL to log into fragment.com with the wallet that owns the specified phone number and view the code |
| <mark>length</mark> | [`int`](type/int) | Length of the delivered code |

---

## Type

[auth.SentCodeType](type/auth.SentCodeType)

---

## Example

```php
$authSentCodeType = $client->auth->sentCodeTypeFragmentSms(
	url : 'https://docs.liveproto.dev',
	length : 9,
);
```