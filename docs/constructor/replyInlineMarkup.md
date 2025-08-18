# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 211

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
					text : 'skjUnEWbKy08lqaD',
				),
				$client->keyboardButtonUrl(
					text : 'R95kZJ2Hy0aSfxOA',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'QnjcBKD1u70EVCbm',
					data : '?5?nLiveProtoU???',
				),
				$client->keyboardButtonRequestPhone(
					text : 'jOGrR9FIqkmDovKY',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'zoqCHY3pcd1vOh4S',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : '4tNKfRIqW7p0zJau',
					query : 'BlC4cTjR17gyz5S2',
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
					text : 'icC6xImYlvuyZBk4',
				),
				$client->keyboardButtonBuy(
					text : 'Kjtgls8rPuCURm1y',
				),
				$client->keyboardButtonUrlAuth(
					text : '9ErpjhiM4RnuZQXW',
					fwd_text : 'wUa4Sl8kPj1LAieI',
					url : 'https://docs.liveproto.dev',
					button_id : 76,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'qSiZYC0gdGUQ5Rwz',
					fwd_text : 'hOM9TDmK5FBrWAgR',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'oB7UQO4e3zlpDbqv',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'XKEYybxBlVrwR7H3',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : '5XVuTFDWQml9wxeH',
					user_id : -4185600965651493056,
				),
				$client->keyboardButtonWebView(
					text : 'Twz0vyUa98FlPSnf',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'a1noCtMBLZJjVAH8',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'vPCkQ89YGtZW7Mqy',
					button_id : 82,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 3,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : '3jp20oX7ucvlCeVz',
					button_id : 69,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 36,
				),
				$client->keyboardButtonCopy(
					text : '3NBn15bivK7EOLWR',
					copy_text : '3COZYckNJg1hmybE',
				),
			),
		),
	),
);
```