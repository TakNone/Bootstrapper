# urlAuthResultRequest

**Description** : *Details about the authorization request, for more info click here &raquo;*

**Layer** : 214

```tl
urlAuthResultRequest#92d33a0e flags:# request_write_access:flags.0?true bot:User domain:string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **request_write_access** | [`flags.0?true`](type/true) | Whether the bot would like to send messages to the user |
| <mark>bot</mark> | [`User`](type/User) | Username of a bot, which will be used for user authorization. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details |
| <mark>domain</mark> | [`string`](type/string) | The domain name of the website on which the user will log in |

---

## Type

[UrlAuthResult](type/UrlAuthResult)

---

## Example

```php
$urlAuthResult = $client->urlAuthResultRequest(
	request_write_access : true,
	bot : $client->userEmpty(
		id : 3521895586114205734,
	),
	domain : 'Lt2fMSulmAqevIoU',
);
```