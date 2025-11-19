# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 218

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
					text : 'EzlBjCAy4s7pqg9u',
				),
				$client->keyboardButtonUrl(
					text : 'MCOHpXQv06WIRowa',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 't3ljof5TvyFPNKY4',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'dRJlxhVeS4k2IzwE',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'db2Ytnuz5foPOrNR',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'c2tmLOUn4E5NxI3w',
					query : 'I6lKYhPJqxkWpXav',
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
					text : '7JjBRbCQLf9MSaT3',
				),
				$client->keyboardButtonBuy(
					text : 'B7yHrsGdFY19mC3g',
				),
				$client->keyboardButtonUrlAuth(
					text : '2BAI1f6MPJu4DVxv',
					fwd_text : '4YJh7NKgwz12vHkF',
					url : 'https://docs.liveproto.dev',
					button_id : 23,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'KPdklhMw5CNvSUZt',
					fwd_text : 'PuSb5JAc70ghE1z9',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(peer : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'E1hY9aGt0Clpkyb7',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'FAqR4oksmGTBQS2h',
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					text : '5QoMWDIhj6Aasut8',
					user_id : 5078317983178228003,
				),
				$client->keyboardButtonWebView(
					text : 'ZiXar7zmG40Duolk',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'V1rsiZTpJ4qByxuh',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'AzqGwRmtC2ELVejW',
					button_id : 86,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : true,
					),
					max_quantity : 79,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'xf8ktlFc0DI17iua',
					button_id : 88,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : false,
					),
					max_quantity : 58,
				),
				$client->keyboardButtonCopy(
					text : 'pLgjI5dmiNaZq6Bf',
					copy_text : 'JmQ5F0ZSwBRdocEX',
				),
			),
		),
	),
);
```