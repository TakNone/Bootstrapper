# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 216

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
					text : 'wqdDUCgojYrB8JVx',
				),
				$client->keyboardButtonUrl(
					text : 'EMLnxtTYjX3ZWoCu',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : '08ORZDxnFQXwUSKm',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'XqapEy164LAdzYhC',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'pzxZKVIm9hracJe7',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'k1g6EKwUHap8fVRM',
					query : '8SZ1utRHov5m6Uiq',
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
					text : 'PAwyt0qYXB3e8k46',
				),
				$client->keyboardButtonBuy(
					text : 'VjaNu3rIt97Bs6S1',
				),
				$client->keyboardButtonUrlAuth(
					text : 'UDY6ILMBumAiw25H',
					fwd_text : 'd7mnxWPSoZ4H5UsX',
					url : 'https://docs.liveproto.dev',
					button_id : 40,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'Hx7a5yWQP3eMsDSI',
					fwd_text : 'Q79cjZAVx6LyFEYh',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'g05Zsyqe6QWRDAYL',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'MS6x1CWBU0c72n9i',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'FM4VjondCEHsevJf',
					user_id : -6679116545104565158,
				),
				$client->keyboardButtonWebView(
					text : 'cZ3h069iHubEqoCe',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'a0tlEw2YrFOAS4TM',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'OQghZ5TIAwaKuBjJ',
					button_id : 63,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 11,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'Ep5BTq2YwOKDUANJ',
					button_id : 28,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 43,
				),
				$client->keyboardButtonCopy(
					text : 'koJw3EUli7CZWuRf',
					copy_text : 'zKBfGMuewg1hbmFH',
				),
			),
		),
	),
);
```