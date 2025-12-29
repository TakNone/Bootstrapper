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
					text : 's5SP1FKitOoGmVMg',
				),
				$client->keyboardButtonUrl(
					text : 'MugPVNZfnLoOTv5z',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'jt5AfRG9F7Oywirc',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : '3Efr5Xej2mhowTnq',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'S8y2D6zpmRL0Phcq',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 't8g3TfVe97CHpcFx',
					query : 'F9c1oAiudzRYp0Kv',
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
					text : 'rX3NT5iheGmaDMJg',
				),
				$client->keyboardButtonBuy(
					text : 'o63mBLRGhqSCYNfy',
				),
				$client->keyboardButtonUrlAuth(
					text : 'UBXKkOs1HxT2DQPy',
					fwd_text : 'qhcI8ey7K4bTOd5l',
					url : 'https://docs.liveproto.dev',
					button_id : 46,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'aCvEBrfX3AlgYFj6',
					fwd_text : 'mwTWgkGdy3b5Zvx2',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : '8kvbKOQSrXNjc9Be',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'sDF8jQYiZwbA1xgn',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					text : 'Ht7qWd1wveDPIxGO',
					user_id : -1196539179936180224,
				),
				$client->keyboardButtonWebView(
					text : '2okKPNIR7QtEDYf4',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'auXMzc4fA8NopTRD',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'kbli67dhnJ5LOzZv',
					button_id : 17,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 49,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'hov57O8CpiBY60Ft',
					button_id : 60,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 5,
				),
				$client->keyboardButtonCopy(
					text : 'ol5Kvuq18MCAyFhY',
					copy_text : 'rScjnbTeE4AuqM1U',
				),
			),
		),
	),
);
```