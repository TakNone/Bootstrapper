# replyKeyboardMarkup

**Description** : *Bot keyboard*

**Layer** : 216

```tl
replyKeyboardMarkup#85dd99d1 flags:# resize:flags.0?true single_use:flags.1?true selective:flags.2?true persistent:flags.4?true rows:Vector<KeyboardButtonRow> placeholder:flags.3?string = ReplyMarkup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **resize** | [`flags.0?true`](type/true) | Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). If not set, the custom keyboard is always of the same height as the app's standard keyboard |
| **single_use** | [`flags.1?true`](type/true) | Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again |
| **selective** | [`flags.2?true`](type/true) | Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.Example: A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard |
| **persistent** | [`flags.4?true`](type/true) | Requests clients to always show the keyboard when the regular keyboard is hidden |
| <mark>rows</mark> | [`Vector<KeyboardButtonRow>`](type/KeyboardButtonRow) | Button row |
| **placeholder** | [`flags.3?string`](type/string) | The placeholder to be shown in the input field when the keyboard is active; 1-64 characters |

---

## Type

[ReplyMarkup](type/ReplyMarkup)

---

## Example

```php
$replyMarkup = $client->replyKeyboardMarkup(
	resize : true,
	single_use : true,
	selective : true,
	persistent : true,
	rows : array(
		$client->keyboardButtonRow(
			buttons : array(
				$client->keyboardButton(
					text : 'QMtz2CcyGDRTbouX',
				),
				$client->keyboardButtonUrl(
					text : 'VvK0eCj9JfSW3nsB',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'qg64CPmi0VnJvxwe',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'IlpiJog84uxY12L3',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'pOkrwK8AjVsyGWXS',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'S6l0XueVdYIRgxc1',
					query : 'zMWkPIL26HcCDKwp',
					peer_types : array(
						$client->inlineQueryPeerTypeSameBotPM(...),
						$client->inlineQueryPeerTypePM(...),
						$client->inlineQueryPeerTypeChat(...),
						$client->inlineQueryPeerTypeMegagroup(...),
						$client->inlineQueryPeerTypeBroadcast(...),
						$client->inlineQueryPeerTypeBotPM(...),
					),
				),
				$client->keyboardButtonGame(
					text : 'CQva28hn0s3lbYzV',
				),
				$client->keyboardButtonBuy(
					text : 'ECV82dSkaWemJxGw',
				),
				$client->keyboardButtonUrlAuth(
					text : 'e9W8nYDaIEft0Z5x',
					fwd_text : '5CzR3BHJYrV8u4qj',
					url : 'https://docs.liveproto.dev',
					button_id : 91,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'jUno1mGEqiVOCK23',
					fwd_text : '9N2gLEu4T8mq0UzB',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'IDEzheJp1uNFtwmn',
				),
				$client->inputKeyboardButtonUserProfile(
					text : '3pSgUzfyH4Ltk07F',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'PmeiqcVkb7MI45tO',
					user_id : 6581242110830084732,
				),
				$client->keyboardButtonWebView(
					text : '5I6rpqVYwsjJ4fdA',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'QmH8RjtAl7WiGeqT',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'LajefJIxV7cykA2G',
					button_id : 44,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 69,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'vdMLFsl3HY8tWxbN',
					button_id : 11,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 15,
				),
				$client->keyboardButtonCopy(
					text : '7DqJgZktpXseW8nd',
					copy_text : '1Yr0cVk29KZ7xdqP',
				),
			),
		),
	),
	placeholder : '7Yj5lqn2XtNwugKM',
);
```