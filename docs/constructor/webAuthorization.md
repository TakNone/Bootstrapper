# webAuthorization

**Description** : *Represents a bot logged in using the Telegram login widget*

**Layer** : 211

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
	hash : -3559710713292577735,
	bot_id : 6529040680437608346,
	domain : 'wISimrkFjPgq0QEn',
	browser : 'NqiRHJ5krWoE8C3y',
	platform : '4sDPBFnzYkiS87Qy',
	date_created : 11,
	date_active : 95,
	ip : '127.0.0.1',
	region : 'SxfpYH4yPeVuOI8F',
);
```