# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 227

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
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8005913599732249191,
					),
					text : '4nMA7LDxO0PIUqJj',
				),
				$client->keyboardButtonUrl(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -83323664577380572,
					),
					text : 'FdkfSg64xyaPZejm',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 4457810460883980970,
					),
					text : 'JKE9O05dGH3o4j1Z',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -2575444947680088132,
					),
					text : 'VMskfjLYraSJH4nN',
				),
				$client->keyboardButtonRequestGeoLocation(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 3882914800199780494,
					),
					text : 's6hQWKc8SxNP1Rbn',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5950198151091469224,
					),
					text : 't3IUDJrQwhLcXqSH',
					query : 'rjYuZ8XiRGTHethL',
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
						icon : 3994963023358519094,
					),
					text : '90FR2vtSNOwGVJHQ',
				),
				$client->keyboardButtonBuy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 2754926878228423329,
					),
					text : 'ugdUb87kp6a0xCmt',
				),
				$client->keyboardButtonUrlAuth(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6631619344183711231,
					),
					text : 'OT7vHi8ypJzBRj1m',
					fwd_text : '58mp71RYxBZP39f6',
					url : 'https://docs.liveproto.dev',
					button_id : 11,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 425179831714887949,
					),
					text : 'm5qTWiGcvQXyJ1jt',
					fwd_text : 'PZ6a7DFCbu0rldVI',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -3875499713257548076,
					),
					quiz : false,
					text : 'ErvYVslDfQHWpw3y',
				),
				$client->inputKeyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8517088163653471127,
					),
					text : 'q19DNClZnLPt4SKT',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8769781642993116145,
					),
					text : 'T5iEQD9nLvzMorql',
					user_id : -835494708971205521,
				),
				$client->keyboardButtonWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5080385301288265895,
					),
					text : 'xnzNGdUIEgtuODr3',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 227026759918950703,
					),
					text : 'feT8n9dNDFkcZMEY',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -2407216992625138849,
					),
					text : 'K2H8qwjZ7zFsI3Jv',
					button_id : 98,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 75,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 2909015030719233217,
					),
					text : 'kNH69am2tPjLYWsB',
					button_id : 69,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : true,
					),
					max_quantity : 26,
				),
				$client->keyboardButtonCopy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -364694435627577340,
					),
					text : 'ThZw4W7mDbl5iBjN',
					copy_text : 'K3vlQynRNxaMDXIW',
				),
			),
		),
	),
);
```