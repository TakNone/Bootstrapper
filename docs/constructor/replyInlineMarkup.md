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
					text : 'RVuUMcH5NSKhPEGn',
				),
				$client->keyboardButtonUrl(
					text : 'DrCxdjYmVtvFoOSa',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'NPZWrsqyFka98EOt',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'hyzXJZuFWd7IbT5x',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : '5tCUbjX392lzdP1B',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'HcZfO1l8PerSV52m',
					query : 'yFibHWrkqO2lDtY7',
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
					text : 'VbAdJtC5mIEKq8D7',
				),
				$client->keyboardButtonBuy(
					text : 'IB5aWAdKEkX3VO64',
				),
				$client->keyboardButtonUrlAuth(
					text : 'N1WuzEjRhnL8Y4aP',
					fwd_text : 'kbSDWwR1XMVyIQhp',
					url : 'https://docs.liveproto.dev',
					button_id : 24,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'kElWLbMU4JAd7T9r',
					fwd_text : '15EdGBHPQ4oUaNYM',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'c1Tf8nktixblrdL0',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'K5SsenuZ7wEN2FJH',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					text : 'g5TS1F6Pq8fiOudB',
					user_id : 7045040597223436952,
				),
				$client->keyboardButtonWebView(
					text : 'ail32fzWkqtJgrRw',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'MmI9pKYG5qTNosiS',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'cUN5Sxi3oQvFOqAI',
					button_id : 71,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : true,
					),
					max_quantity : 62,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'VdXqlW1Yf4gnoDi2',
					button_id : 37,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 50,
				),
				$client->keyboardButtonCopy(
					text : 'a5x1r4fDnRMswIzX',
					copy_text : 'xGROQXWHgcetD4E5',
				),
			),
		),
	),
);
```