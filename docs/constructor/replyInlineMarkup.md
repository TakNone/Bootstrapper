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
					text : 'HJDpfaO39WlFRxot',
				),
				$client->keyboardButtonUrl(
					text : 'yPaepJArDwQSBINs',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'TvXJBuYEqaCltwk8',
					data : '??z??LiveProto?^??',
				),
				$client->keyboardButtonRequestPhone(
					text : 'Xhdu0Z526tvSxpe9',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'kS9XwOQI3Dci6HGz',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : '3GpCyebuDziTkwWK',
					query : 'iIfbyuPCRw3TFv8h',
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
					text : 'D5JZTkpVqbltAf6G',
				),
				$client->keyboardButtonBuy(
					text : 'Gspz8rv50q7uIm9Y',
				),
				$client->keyboardButtonUrlAuth(
					text : 'qsnWru1Vvl0wEfDF',
					fwd_text : 'ucJzldahDpVNEx7B',
					url : 'https://docs.liveproto.dev',
					button_id : 72,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'riUQN9Hbp6M5Rx2L',
					fwd_text : '3wMAz4f0rgUZkDRm',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : $client->boolFalse(...),
					text : 'aXOZ8u5zH3k1QE4q',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'xiWjMCnBwO42scJ3',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'WFJ96anSkXHTxKip',
					user_id : -4511708076049769354,
				),
				$client->keyboardButtonWebView(
					text : 'zY48BbAN25fUnXi7',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'tU8KyjN6c7bXsTxd',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'leG50hzpRim9ZDqH',
					button_id : 77,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 91,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'u8RUcCTFVxvDkqj3',
					button_id : 9,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 70,
				),
				$client->keyboardButtonCopy(
					text : '2GCcu0HZrEOQVvm7',
					copy_text : 'oRYzBrTyqOP2HVlF',
				),
			),
		),
	),
);
```