# replyKeyboardMarkup

**Description** : *Bot keyboard*

**Layer** : 214

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
					text : '8Si4y36nQNHwAJZ2',
				),
				$client->keyboardButtonUrl(
					text : 'Fb6TrkUva5mhiVAL',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'XLktOqlnG6sDi1UH',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'AJogIEdZyljzFwNL',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'PvsR2QGo0gmU9CzB',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'ePFHcAubJ5vjf2B3',
					query : 't46MrZ3wbxjJ7V8d',
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
					text : 'eWg4hH2MoC6d95lS',
				),
				$client->keyboardButtonBuy(
					text : '1SZ0LWNVhvtQecUT',
				),
				$client->keyboardButtonUrlAuth(
					text : '91gtdHZ6RfcUPB4w',
					fwd_text : 'xn1TbRFdUBjW27lG',
					url : 'https://docs.liveproto.dev',
					button_id : 87,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'SLzkJHe0o4wZ3p9R',
					fwd_text : '1FaTZC7U8VKYl539',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'ZVITOiM2zqw1HSlR',
				),
				$client->inputKeyboardButtonUserProfile(
					text : '4jiwz9Gu1bNlfFnq',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'vFPhTnmaDq2c0ieH',
					user_id : 914973308666835980,
				),
				$client->keyboardButtonWebView(
					text : '8rUbka3itHg5m1Yc',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'onXWKdBiYE5eaMqD',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : '5tDusqEfMOBIy1Qg',
					button_id : 76,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 0,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'Qhmodfw0KcZag4FM',
					button_id : 67,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 8,
				),
				$client->keyboardButtonCopy(
					text : 'i6s5n7bhZraKqlN4',
					copy_text : 'MOQFp24iNYPnXqSU',
				),
			),
		),
	),
	placeholder : 'jpXVCds5QM7WKeJY',
);
```