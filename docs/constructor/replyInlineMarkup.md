# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 225

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
						icon : 6769819441605225305,
					),
					text : 'G8ShHlyA6zYwRq5j',
				),
				$client->keyboardButtonUrl(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 4970084392331476514,
					),
					text : 'hiQapLK9jA3T1gBy',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -321890289708978157,
					),
					text : 'GwuHCx7UyzJaZcfD',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -9019358499959359454,
					),
					text : 'aXSvldCEQ6Y1ULt0',
				),
				$client->keyboardButtonRequestGeoLocation(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 2065513045721253626,
					),
					text : '1PqRgKYmAyUV4NT8',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 5531725136942181925,
					),
					text : 'xp8nOZ1vUGLT04Hm',
					query : 'wQYHkyUhj3J0WOGD',
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
						icon : -9134139064650989395,
					),
					text : 'LSsa74TkYfMzECNV',
				),
				$client->keyboardButtonBuy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5684851763128444155,
					),
					text : 'JVTQq7iPNO9FtUn2',
				),
				$client->keyboardButtonUrlAuth(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6271393888951498870,
					),
					text : 'bpF95qVEsYncfOkz',
					fwd_text : 'qdFetxG5VpWZkrHC',
					url : 'https://docs.liveproto.dev',
					button_id : 69,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8260187300273672373,
					),
					text : 'Tj9m5hNRfWzpIVbK',
					fwd_text : 'SmTHlfEsIewuBNgV',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -4964247003603331359,
					),
					quiz : false,
					text : 'dbfmZrX2O8iSnhqH',
				),
				$client->inputKeyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5010929445736126674,
					),
					text : 'EAVCOrXMLUQghRsW',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -4689147089138430817,
					),
					text : 'JVenIUHkDzLqpjKi',
					user_id : 31539433405891107,
				),
				$client->keyboardButtonWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -797862703681060910,
					),
					text : 'fEGRmV9hKqd2YABC',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 1565006260850715835,
					),
					text : 'fBOQZNRGrulC4H3o',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 7669033316593171811,
					),
					text : 'IGBOn6eQkowmd4D1',
					button_id : 83,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : true,
					),
					max_quantity : 63,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 7588291177677067479,
					),
					text : 'b2ozENZpkjRvwms5',
					button_id : 14,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 38,
				),
				$client->keyboardButtonCopy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5324028548267866395,
					),
					text : 'exHPblXf4QGCsTgJ',
					copy_text : 'afOhWub2yBjmLlqQ',
				),
			),
		),
	),
);
```