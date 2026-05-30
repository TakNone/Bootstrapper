# replyKeyboardMarkup

**Description** : *Bot keyboard*

**Layer** : 222

```tl
replyKeyboardMarkup#85dd99d1 flags:# resize:flags.0?true single_use:flags.1?true selective:flags.2?true persistent:flags.4?true rows:Vector<KeyboardButtonRow> placeholder:flags.3?string = ReplyMarkup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 6067799276852267253,
					),
					text : 'FbjKoWwAmsny5dfI',
				),
				$client->keyboardButtonUrl(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 9012686451946975315,
					),
					text : 'tpsoEydwNQlODem6',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -8650650147985441290,
					),
					text : 'cDux089OrRsJ3ygE',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 6042009705487450704,
					),
					text : 'hsvTEmKSplgBAMJx',
				),
				$client->keyboardButtonRequestGeoLocation(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 6762130461424070163,
					),
					text : 'NE1OV2nZFSQ4qBTA',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 998738954215952441,
					),
					text : '59LDHPqTgd1zMciC',
					query : 'cK8Z5weRGpnv3gDU',
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
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8288793849433326822,
					),
					text : 'PtIYiefO8HojSDw9',
				),
				$client->keyboardButtonBuy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 911080280067668040,
					),
					text : '0JEwra7MqxuH9cv8',
				),
				$client->keyboardButtonUrlAuth(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6217526760410748928,
					),
					text : 'Nhr8ZWe2OoRX1ktH',
					fwd_text : 'YGuO4L8TWwX2EFxI',
					url : 'https://docs.liveproto.dev',
					button_id : 72,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5010472550038163475,
					),
					text : 'GNbiFxa9tnl6cH4U',
					fwd_text : '8v7bMatX41Jr2PsC',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6059233473082058291,
					),
					quiz : true,
					text : '8EfnjAxpRwJzaK6I',
				),
				$client->inputKeyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 6341227745855132702,
					),
					text : 'kLFa6HpEGAuWwKgh',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 4035669104862491315,
					),
					text : 'AyuztvalQDfb6gN2',
					user_id : -7396403526074792555,
				),
				$client->keyboardButtonWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -3697058562349834768,
					),
					text : 'K0haGdbQVBNHo1tA',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6115249604245684269,
					),
					text : 'n5xFSj6KZm9L8trT',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -2887572077699719271,
					),
					text : 'SCMUm1YQfq9s2Z4L',
					button_id : 4,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : true,
					),
					max_quantity : 27,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -8857128542125031947,
					),
					text : 'CUxyNMqs3cmBnlpK',
					button_id : 86,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 53,
				),
				$client->keyboardButtonCopy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -1558627228366514871,
					),
					text : 'DFrxGvbIUoQtMRjB',
					copy_text : '6MrxuPzjKIalfAhQ',
				),
			),
		),
	),
	placeholder : 'wCVcO8KdzSnI92Db',
);
```