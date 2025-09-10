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
					text : 'JNkuCD27KzEPd1e3',
				),
				$client->keyboardButtonUrl(
					text : 'MsoLC2JZutlbTBkm',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'DSCU7ltAek4yR3Jb',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'jVnUQxtgEkPi1fod',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'jBrN7KEs1RMlupzA',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'Mks4uno7gh0UAOBb',
					query : 'tl1pIaQmUN9cuxDF',
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
					text : 'WRcJySUGgvrxQBeH',
				),
				$client->keyboardButtonBuy(
					text : 'QtB3A01ZYoRFWPar',
				),
				$client->keyboardButtonUrlAuth(
					text : 'aWiqVyBf4go7pkDu',
					fwd_text : 'Zk62SBtWCDH3uG7P',
					url : 'https://docs.liveproto.dev',
					button_id : 6,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : '2RlFjfDUZewmQC8i',
					fwd_text : 'ESGc0xnV1JFkj5eW',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'DNaqAuRLnbjKFWJs',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'NnJBVaxYKRAWPTDE',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'gjtfacbKEiyrkhZd',
					user_id : -1379622064444361435,
				),
				$client->keyboardButtonWebView(
					text : 'tgDucwz9doeRJ2PV',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : '03UeoLGzT86IdCrw',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'PqHlVd0M4XmpLhT1',
					button_id : 42,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 58,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'l0UBfz8YhyvVFOKT',
					button_id : 80,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 47,
				),
				$client->keyboardButtonCopy(
					text : 'erIOzJwPq3XEj2HS',
					copy_text : 'O2oIDhbT8mqgkG9v',
				),
			),
		),
	),
	placeholder : 'o26aWtQ1IU0iSyJm',
);
```