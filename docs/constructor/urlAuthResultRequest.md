# urlAuthResultRequest

**Description** : *Details about the authorization request, for more info click here &raquo;*

**Layer** : 233

```tl
urlAuthResultRequest#bdca6167 flags:# request_write_access:flags.0?true request_phone_number:flags.1?true match_codes_first:flags.5?true is_app:flags.6?true request_wallet:flags.8?true bot:User domain:string browser:flags.2?string platform:flags.2?string ip:flags.2?string region:flags.2?string match_codes:flags.3?Vector<string> user_id_hint:flags.4?long verified_app_name:flags.7?string tc_session_id:flags.9?long tc_client_id:flags.10?string = UrlAuthResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **request_write_access** | [`flags.0?true`](type/true) | Whether the bot would like to send messages to the user |
| **request_phone_number** | [`flags.1?true`](type/true) | The app/website is requesting the user's phone number; if the user consents, set share_phone_number when calling messages.acceptUrlAuth |
| **match_codes_first** | [`flags.5?true`](type/true) | Can only be set if match_codes is also set; if set, clients must ask the user to select the matching code before showing the rest of the login confirmation UI, and must validate the selection with messages.checkUrlAuthMatchCode before proceeding |
| **is_app** | [`flags.6?true`](type/true) | Set if an OAuth request originated from an app rather than a website; when set, domain must be replaced in the confirmation prompt by verified_app_name (if present) or "Unverified App" |
| **request_wallet** | [`flags.8?true`](type/true) | NOTHING |
| <mark>bot</mark> | [`User`](type/User) | Username of a bot, which will be used for user authorization. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details |
| <mark>domain</mark> | [`string`](type/string) | The domain name of the website on which the user will log in |
| **browser** | [`flags.2?string`](type/string) | The browser the user used to make the OAuth request |
| **platform** | [`flags.2?string`](type/string) | The platform (operating system) of the user that made the OAuth request |
| **ip** | [`flags.2?string`](type/string) | The IP address of the user making the OAuth request |
| **region** | [`flags.2?string`](type/string) | The location of the user, inferred from the IP address |
| **match_codes** | [`flags.3?Vector<string>`](type/string) | A list of emojis or codes, one of which is currently being shown on the login page of the website/app; the user must select the matching one and pass it to messages.acceptUrlAuth.match_code |
| **user_id_hint** | [`flags.4?long`](type/long) | May contain the ID of the account for which the login request was created; if it matches a logged-in account, clients should automatically switch to that account and re-invoke messages.requestUrlAuth before showing the prompt |
| **verified_app_name** | [`flags.7?string`](type/string) | Can only be set if is_app is set and the app is verified; must replace domain in the confirmation prompt when present |
| **tc_session_id** | [`flags.9?long`](type/long) | NOTHING |
| **tc_client_id** | [`flags.10?string`](type/string) | NOTHING |

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
	request_wallet : true,
	bot : $client->userEmpty(
		id : 1375615970938051732,
	),
	domain : 'pJjq0NeETGoC1ADB',
	browser : 'W4ZEp075KftLhDSM',
	platform : 'qxLZSf37dvwQnhib',
	ip : '127.0.0.1',
	region : '5sc7MVRUxdQZ4Yef',
	match_codes : array('PeM0tJRa2xzul13j'),
	user_id_hint : 1829855398905633593,
	verified_app_name : 'wbdcTYRpOLiyoNCu',
	tc_session_id : -7938715697144975124,
	tc_client_id : '5bCKx7NtjGoFE2sX',
);
```