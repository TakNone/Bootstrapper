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
	hash : 120149989824704804,
	bot_id : -4793757442500419062,
	domain : 'Nv6TjKDIJB3dHeEO',
	browser : 'Io0wTUHCchDVkv9K',
	platform : '0e7K2ZVMNqWEBvih',
	date_created : 49,
	date_active : 70,
	ip : '127.0.0.1',
	region : '497nafC1edvSWuYK',
);
```