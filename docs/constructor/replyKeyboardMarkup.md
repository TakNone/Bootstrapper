# replyKeyboardMarkup

**Description** : *Bot keyboard*

**Layer** : 211

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
					text : '8MocCIDsEKgW7aJj',
				),
				$client->keyboardButtonUrl(
					text : 'OXUCxakcv9gwNKqo',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'pqPYtdavDXlFb7Nm',
					data : '%??LiveProto]??c?',
				),
				$client->keyboardButtonRequestPhone(
					text : 'XPBJuTYm8yCQxzG2',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'eclyS6Ub4moR8M2F',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'op0DtnX1bUvO7aAl',
					query : 'nFuftvokUbLWsHy2',
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
					text : 'vqMBNnRx5YVouzAp',
				),
				$client->keyboardButtonBuy(
					text : 'gso3Z6HiBb2fWQVj',
				),
				$client->keyboardButtonUrlAuth(
					text : 'zSOdpxcwP61X8InZ',
					fwd_text : '9qeINGzvZsEPy6rw',
					url : 'https://docs.liveproto.dev',
					button_id : 42,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'v8xEeK2FWGk0P7ml',
					fwd_text : '0NSF6EGvpHLshTKk',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : $client->boolFalse(...),
					text : 'pMW4Kjb0Jiw729Hc',
				),
				$client->inputKeyboardButtonUserProfile(
					text : '2ZI67noXDEBf8jhp',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'SbxerJnpEv6fF0Ht',
					user_id : -8645597094103343371,
				),
				$client->keyboardButtonWebView(
					text : 'Cog3VlYpSikLh2uN',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'pjO7LhZ9fbsgPYKc',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'eP4NEdCxctHj2qUn',
					button_id : 2,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 97,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'p5RzGb0QvNU2gIkS',
					button_id : 80,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 59,
				),
				$client->keyboardButtonCopy(
					text : 'cgKtTVm3DMvISskw',
					copy_text : 'D61zvuCIfYS3ZOLb',
				),
			),
		),
	),
	placeholder : 'Ees49gHKTOjDMA5f',
);
```