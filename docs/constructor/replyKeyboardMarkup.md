# replyKeyboardMarkup

**Description** : *Bot keyboard*

**Layer** : 218

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
					text : '7Nro6M2nwVbCfAHs',
				),
				$client->keyboardButtonUrl(
					text : 'd65wHsnAquXOURfx',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'JPW38yMsfnqzpYGF',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'VJIF9BohvYS6nPsg',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'egRTwDXkY7x6Stnj',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'lEGFaWT1mbkHuqLo',
					query : 'CrkUKe1lcf0pQPLR',
					peer_types : array(
						$client->inlineQueryPeerTypeSameBotPM(),
						$client->inlineQueryPeerTypePM(),
						$client->inlineQueryPeerTypeChat(),
						$client->inlineQueryPeerTypeMegagroup(),
						$client->inlineQueryPeerTypeBroadcast(),
						$client->inlineQueryPeerTypeBotPM(),
					),
				),
				$client->keyboardButtonGame(
					text : '2tubFI5p6evzCcQ7',
				),
				$client->keyboardButtonBuy(
					text : 'XvbEqOar3xfFeJlQ',
				),
				$client->keyboardButtonUrlAuth(
					text : '8i31mhJcLpaKqj6e',
					fwd_text : 'F79CzvgRaUWSeOPs',
					url : 'https://docs.liveproto.dev',
					button_id : 19,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'dCXToxyLDN520vBl',
					fwd_text : 'kWSoAzeXVL5EQUNl',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(peer : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'Oioe9xVTZCYdSDkW',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'uom3SKvL7W1IBX9C',
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					text : '8LpAbq04HKnl5CZo',
					user_id : -833686189519895923,
				),
				$client->keyboardButtonWebView(
					text : '2jbeUkuEdZDisWGz',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'ui94b1gLR8QOWZcA',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : '4IDo3TsYcuvWrNKO',
					button_id : 89,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 88,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : '6qELd185oQtl2jaS',
					button_id : 12,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : false,
					),
					max_quantity : 1,
				),
				$client->keyboardButtonCopy(
					text : 'WteLfIl8Tpm5Z7Gh',
					copy_text : 'QlngrhaGMDds051R',
				),
			),
		),
	),
	placeholder : 'La7gnpjTxM3PZFJ2',
);
```