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
					text : 'oHrR35f0YMAVNTOD',
				),
				$client->keyboardButtonUrl(
					text : 'mx4zJNs1rv3COLu2',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'RExuNFhK3n8v7XHm',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'Kd6IpyLlVuHzaNU0',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : '1yI6jTgk8a9A5JKD',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'U5wbLvH8E9ln1IhO',
					query : '58aAY0mQnlR6yqVW',
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
					text : 'BOFl6ts9yGrSmQp3',
				),
				$client->keyboardButtonBuy(
					text : 'W59w2sir8ALvxdXj',
				),
				$client->keyboardButtonUrlAuth(
					text : '3LMK8O9JWU0FEvaf',
					fwd_text : 'naCHFgwA9G0eqUJd',
					url : 'https://docs.liveproto.dev',
					button_id : 90,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'gU4ya7EOPwYvG6IR',
					fwd_text : 'ZBSo8WscaDkulm0j',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'JsHb6qBOvUKhaQ4e',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'lTnrs8z9acSiRpCJ',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'ajUR463qZcuwsC7W',
					user_id : 1904104541824917951,
				),
				$client->keyboardButtonWebView(
					text : '81wctdWJKmDra3lg',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'vG07Hp1tw3NCrLce',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : '63sYmHThQZrEwA5S',
					button_id : 26,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 1,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'sDnchfBFxESR8Cge',
					button_id : 82,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 7,
				),
				$client->keyboardButtonCopy(
					text : '9cGWaUIPNSxb4yiR',
					copy_text : '1RTI5YA6vtPCxSO3',
				),
			),
		),
	),
	placeholder : '8jY9q40RhADlt1s5',
);
```