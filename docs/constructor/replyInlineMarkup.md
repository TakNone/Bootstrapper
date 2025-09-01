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
					text : 'IvHSd5DwBU4Qx6zO',
				),
				$client->keyboardButtonUrl(
					text : 'wxmuegUK4vfkDYFH',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'ScKB6Ar1YO0MhneZ',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'uyPzEUxGV1BJl7Af',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 'E0U65f1sVPH7jWDe',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'LAqIOv21cNVzMgS5',
					query : '0x9PgpJkDo4jBtyW',
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
					text : 'VlCku1W5xf34DZ0h',
				),
				$client->keyboardButtonBuy(
					text : 'H1zxCQLrN26okn7R',
				),
				$client->keyboardButtonUrlAuth(
					text : 'U2kKwc85bhGZeglv',
					fwd_text : '6WHTMyqSs9rJR0me',
					url : 'https://docs.liveproto.dev',
					button_id : 7,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'UCrAdxpY6Honzjyb',
					fwd_text : 'HYleIVpAm5B1z7su',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : true,
					text : 'kpATWRXZKjaJP25H',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'a9qy3Tf1ZbR4EKVM',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'ViESLn7CrDcNKJsl',
					user_id : -536108433554798723,
				),
				$client->keyboardButtonWebView(
					text : 'E2hlcq3Okvertw7m',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'eCTXNrLFRQSOHPV4',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'b5vRj10Fs2m9WPkI',
					button_id : 88,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 42,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'HhE3cMQbRZa0S8xr',
					button_id : 47,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 22,
				),
				$client->keyboardButtonCopy(
					text : 'Wj3dwMNumKxSBPD1',
					copy_text : '1q2RFwen6hf9ZpjC',
				),
			),
		),
	),
);
```