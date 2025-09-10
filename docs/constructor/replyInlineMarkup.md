# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 214

```tl
replyInlineMarkup#48a30254 rows:Vector<KeyboardButtonRow> = ReplyMarkup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>rows</mark> | [`Vector<KeyboardButtonRow>`](type/KeyboardButtonRow) | Bot or inline keyboard rows |

---

## Type

[ReplyMarkup](type/ReplyMarkup)

---

## Example

```php
$replyMarkup = $client->replyInlineMarkup(
	rows : array(
		$client->keyboardButtonRow(
			buttons : array(
				$client->keyboardButton(
					text : 'MC6zOc1lrLHWhNeZ',
				),
				$client->keyboardButtonUrl(
					text : 'fwCT1a2mgeIU3qQj',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'lYJZdUCxwMQpO0iX',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'WbLjBG4TOx3nmiIp',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'H94T0bi1wpCBoSYl',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'ai7neAmJRIMcyONZ',
					query : 'OidTV5BMQets0hUy',
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
					text : 'GDlJ6IVmEhRF82nW',
				),
				$client->keyboardButtonBuy(
					text : 'fcmtWG02q5V4xUas',
				),
				$client->keyboardButtonUrlAuth(
					text : 'zrpdy5fR91sP2Ebc',
					fwd_text : 'Lbudxe9o0htvRYrs',
					url : 'https://docs.liveproto.dev',
					button_id : 84,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'AXOt9PmydhbslwCk',
					fwd_text : 'qpFIsTULR5gGhZo4',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'mNtSL5oY4HlKQJBP',
				),
				$client->inputKeyboardButtonUserProfile(
					text : '9DC4yO3EMPHBJfRF',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'CHZGQlNopIgRe3fw',
					user_id : -7119664462251297864,
				),
				$client->keyboardButtonWebView(
					text : 'C3G0fgsbivZeuADq',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'SdikW7895XUGhvK4',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'WzADOyMVgmhRCrq3',
					button_id : 82,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 54,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'srdtkYCJEKXAfmj7',
					button_id : 76,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 8,
				),
				$client->keyboardButtonCopy(
					text : '7LeC1wjJNFnMXYi9',
					copy_text : 'vpgjyfqUh9uzlNka',
				),
			),
		),
	),
);
```