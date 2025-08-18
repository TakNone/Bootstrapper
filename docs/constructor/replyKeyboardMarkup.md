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
					text : 'LVx9rA8PRifYlsZ5',
				),
				$client->keyboardButtonUrl(
					text : '9YTJnCWr4dy7LE8p',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : '3MkDtps6Ax5ieB4v',
					data : '_倱LiveProto%?Sp',
				),
				$client->keyboardButtonRequestPhone(
					text : 'OYmhjnQsWMrk3Aul',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : '9yhNeOJVTF2wBU5Y',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'XriWpEs90H5RnIPQ',
					query : '37pv9dqRiszHbmwj',
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
					text : 'CKlHfp9oiQTAaNnZ',
				),
				$client->keyboardButtonBuy(
					text : 'Tm1DPSGHvjZIg5wi',
				),
				$client->keyboardButtonUrlAuth(
					text : 'kPX1z07KBRAwtHb4',
					fwd_text : 'Dy7u8kZQL9SzotWl',
					url : 'https://docs.liveproto.dev',
					button_id : 0,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'DJjWdsXgl2uLMUB1',
					fwd_text : 'MT3V2cGYK6zZQXUH',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'wre2W4FIm9XhHgKJ',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'pDfhHz7cFjAMeXda',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'MLDTsFo5nx6u8pXq',
					user_id : -6245072901168078209,
				),
				$client->keyboardButtonWebView(
					text : 'Qsck9KVqulTRSCeU',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'fARuTbWzZqckGj2i',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : '7PZzAOsgWTVhy0UN',
					button_id : 91,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 32,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'xyBUVkm4FbMNKWtu',
					button_id : 43,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 85,
				),
				$client->keyboardButtonCopy(
					text : 'VYiaqCAMJGyPLu6I',
					copy_text : 'H1C6AvmOiQlhucTJ',
				),
			),
		),
	),
	placeholder : 'MKpEg4eAVoNWyIuG',
);
```