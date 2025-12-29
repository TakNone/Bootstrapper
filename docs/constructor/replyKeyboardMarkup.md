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
					text : '9oVA5zuqwLFPxhE1',
				),
				$client->keyboardButtonUrl(
					text : 'QSP1iw9vzNrgCGHU',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'KycYGvx1QbhT0NJr',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'KAnLGXtDlryU3vMb',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'hji0fmWEe2voQb73',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'BmhxtWy0E15ugVib',
					query : 'FEXdzwWxMl4vKjkS',
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
					text : 'vT8Al7YFLbrs52cO',
				),
				$client->keyboardButtonBuy(
					text : 'BxefOUFCGdI5T8jv',
				),
				$client->keyboardButtonUrlAuth(
					text : '9vZQUPqLgzSi1fFr',
					fwd_text : 'E07Yb98QhoPkR2pT',
					url : 'https://docs.liveproto.dev',
					button_id : 92,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'kcgFSqDeWm0O7pdR',
					fwd_text : 'f3AKcOyNVBrzpTJX',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'o9wF3SPC4NHWKcZ6',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'dCtlZv0cLnMDUVr7',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					text : 'zIfBwxcduWN4kKty',
					user_id : -3478428590910042504,
				),
				$client->keyboardButtonWebView(
					text : 'S87Lf5UQKcqDlBdY',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'VTCrybGskJRIYtEA',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'dcFpYIjQS0NJmwuB',
					button_id : 76,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 47,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'QfP4SAV1DbjLGlZ3',
					button_id : 39,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : true,
					),
					max_quantity : 82,
				),
				$client->keyboardButtonCopy(
					text : 'GQAN42WFcszKPdo1',
					copy_text : 'e1uJsB8AfUXI64D0',
				),
			),
		),
	),
	placeholder : '7sDwhExB6bXSGtoY',
);
```