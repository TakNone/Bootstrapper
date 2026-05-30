# webAuthorization

**Description** : *Represents a bot logged in using the Telegram login widget*

**Layer** : 222

```tl
webAuthorization#a6f8f452 hash:long bot_id:long domain:string browser:string platform:string date_created:int date_active:int ip:string region:string = WebAuthorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Authorization hash |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>domain</mark> | [`string`](type/string) | The domain name of the website on which the user has logged in |
| <mark>browser</mark> | [`string`](type/string) | Browser user-agent |
| <mark>platform</mark> | [`string`](type/string) | Platform |
| <mark>date_created</mark> | [`int`](type/int) | When was the web session created |
| <mark>date_active</mark> | [`int`](type/int) | When was the web session last active |
| <mark>ip</mark> | [`string`](type/string) | IP address |
| <mark>region</mark> | [`string`](type/string) | Region, determined from IP address |

---

## Type

[WebAuthorization](type/WebAuthorization)

---

## Example

```php
$webAuthorization = $client->webAuthorization(
	hash : 0,
	bot_id : 8552290013946498047,
	domain : 'APYwh87CKJBf2lQI',
	browser : 'NB5H8u4jPZ3AmEvb',
	platform : '8x5Hrmh6lnfzsQ1g',
	date_created : 74,
	date_active : 80,
	ip : '127.0.0.1',
	region : '8GfEvJjo3SIgyTmL',
);
```