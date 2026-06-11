# urlAuthResultRequest

**Description** : *Details about the authorization request, for more info click here &raquo;*

**Layer** : 227

```tl
urlAuthResultRequest#3cd623ec flags:# request_write_access:flags.0?true request_phone_number:flags.1?true match_codes_first:flags.5?true is_app:flags.6?true bot:User domain:string browser:flags.2?string platform:flags.2?string ip:flags.2?string region:flags.2?string match_codes:flags.3?Vector<string> user_id_hint:flags.4?long verified_app_name:flags.7?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **request_write_access** | [`flags.0?true`](type/true) | Whether the bot would like to send messages to the user |
| **request_phone_number** | [`flags.1?true`](type/true) | NOTHING |
| **match_codes_first** | [`flags.5?true`](type/true) | NOTHING |
| **is_app** | [`flags.6?true`](type/true) | NOTHING |
| <mark>bot</mark> | [`User`](type/User) | Username of a bot, which will be used for user authorization. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details |
| <mark>domain</mark> | [`string`](type/string) | The domain name of the website on which the user will log in |
| **browser** | [`flags.2?string`](type/string) | NOTHING |
| **platform** | [`flags.2?string`](type/string) | NOTHING |
| **ip** | [`flags.2?string`](type/string) | NOTHING |
| **region** | [`flags.2?string`](type/string) | NOTHING |
| **match_codes** | [`flags.3?Vector<string>`](type/string) | NOTHING |
| **user_id_hint** | [`flags.4?long`](type/long) | NOTHING |
| **verified_app_name** | [`flags.7?string`](type/string) | NOTHING |

---

## Type

[UrlAuthResult](type/UrlAuthResult)

---

## Example

```php
$urlAuthResult = $client->urlAuthResultRequest(
	request_write_access : true,
	request_phone_number : true,
	match_codes_first : true,
	is_app : true,
	bot : $client->userEmpty(
		id : 2757982922142121970,
	),
	domain : '9mEdXTiL5cvBRPWF',
	browser : 'ofajsSTel6XFBQIn',
	platform : 'M20GkCQc6XB3UEiY',
	ip : '127.0.0.1',
	region : 'pcf2hKwx4HqFIT7i',
	match_codes : array('xHP2BAcJGVij96rN'),
	user_id_hint : 3015768731946463066,
	verified_app_name : 'zNy0W9U7j5CcKxV4',
);
```