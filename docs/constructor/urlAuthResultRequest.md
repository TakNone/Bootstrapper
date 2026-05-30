# urlAuthResultRequest

**Description** : *Details about the authorization request, for more info click here &raquo;*

**Layer** : 222

```tl
urlAuthResultRequest#32fabf1a flags:# request_write_access:flags.0?true request_phone_number:flags.1?true bot:User domain:string browser:flags.2?string platform:flags.2?string ip:flags.2?string region:flags.2?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **request_write_access** | [`flags.0?true`](type/true) | Whether the bot would like to send messages to the user |
| **request_phone_number** | [`flags.1?true`](type/true) | NOTHING |
| <mark>bot</mark> | [`User`](type/User) | Username of a bot, which will be used for user authorization. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details |
| <mark>domain</mark> | [`string`](type/string) | The domain name of the website on which the user will log in |
| **browser** | [`flags.2?string`](type/string) | NOTHING |
| **platform** | [`flags.2?string`](type/string) | NOTHING |
| **ip** | [`flags.2?string`](type/string) | NOTHING |
| **region** | [`flags.2?string`](type/string) | NOTHING |

---

## Type

[UrlAuthResult](type/UrlAuthResult)

---

## Example

```php
$urlAuthResult = $client->urlAuthResultRequest(
	request_write_access : true,
	request_phone_number : true,
	bot : $client->userEmpty(
		id : -5232488966073965911,
	),
	domain : 'xHgKcmE9dUbWPLCz',
	browser : 'gHdla7pnUJGwyVxQ',
	platform : 'JBndKz3Q0h7XMocO',
	ip : '127.0.0.1',
	region : 'GZvxgX4zYWqOI6ul',
);
```