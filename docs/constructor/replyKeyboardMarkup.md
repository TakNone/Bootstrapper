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
					text : 'gFyOP2bfWvZSrjcN',
				),
				$client->keyboardButtonUrl(
					text : 'OjxulmsWQLa9evw8',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'EarUYtxDAsJWVS6w',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'yqlJPj9If6K3kXxv',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'awWP0p2kJH7RsToi',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'N0VkYUb7Zef1XC6M',
					query : 'XWA2u4dF8TDhiRk1',
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
					text : 'fS9VhQoJC5uLzkvY',
				),
				$client->keyboardButtonBuy(
					text : 'fTYyqG5OBl0tCJbE',
				),
				$client->keyboardButtonUrlAuth(
					text : 'FWnLuyJ5sepcRGHV',
					fwd_text : 'tafrhH3NsywkOulF',
					url : 'https://docs.liveproto.dev',
					button_id : 100,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'F5k349pbJVcdnyg8',
					fwd_text : 'BIkX0HRx6WY7Nz9J',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'nkL9v5JAiuFrdcPt',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'eG5udBS3N18JFRC2',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					text : 'oSv35iTzFAg2wR08',
					user_id : 8030882292071243599,
				),
				$client->keyboardButtonWebView(
					text : '9uf07JDWdh5vjo82',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : '0QnuPEv2RIAJZWVC',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'sQ9Jb43TqGgnh2ZC',
					button_id : 27,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : true,
					),
					max_quantity : 11,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'rwY9bQkPvlGN2KA6',
					button_id : 92,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : true,
					),
					max_quantity : 89,
				),
				$client->keyboardButtonCopy(
					text : 'Evh0NOwyrCRm1DUo',
					copy_text : 'RwGKLX7g9jkTuOUQ',
				),
			),
		),
	),
	placeholder : 'OQYhx6FVXJkCSqwu',
);
```