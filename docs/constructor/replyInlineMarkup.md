# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 222

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
						icon : 2961294660795534123,
					),
					text : 'ksjEAyTJ2DXIRadp',
				),
				$client->keyboardButtonUrl(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 7874113263228658042,
					),
					text : 'ZVrMiAIxp6oamhcJ',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 1334836960305931637,
					),
					text : 'dAXJVW2kH9eb3RIU',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 5931160797062419692,
					),
					text : 'ZMDqKWYbd8NHn92s',
				),
				$client->keyboardButtonRequestGeoLocation(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -556520742441110637,
					),
					text : '47FgBArWtzujXboc',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -7812573766265033263,
					),
					text : 'ZMJz4xSdlqkAUb8g',
					query : 'KhcuGCPZSdQtm13g',
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
						icon : -4925978051890781427,
					),
					text : 'lz5Z7Q8mC4agPXeL',
				),
				$client->keyboardButtonBuy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 1481755025863592423,
					),
					text : 'pJrjZK3tzhVs14wB',
				),
				$client->keyboardButtonUrlAuth(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -5558561825312963553,
					),
					text : 'S8BWK3ivPIn92xCb',
					fwd_text : 'WkbBlrZKPyLmdJQ3',
					url : 'https://docs.liveproto.dev',
					button_id : 24,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -8876954973189849791,
					),
					text : 'qLirOKNxEol0pRkQ',
					fwd_text : 'C5UOIDs7QqM1jHL2',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 6156461856002305061,
					),
					quiz : false,
					text : 'nBwR6WzmiHJSDtAq',
				),
				$client->inputKeyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 5545830087205231738,
					),
					text : 'tJHURcA67wLNBy8b',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -9032601402623997541,
					),
					text : 'ZsBnVliRY30gjWmH',
					user_id : 7707349680586345081,
				),
				$client->keyboardButtonWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 2948723800053480382,
					),
					text : 'CnWbyoVMJs9FdwcS',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8574970807786557952,
					),
					text : 'RNlDHkp6Gz9jcZ0b',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -975372266350896359,
					),
					text : 'wg41d392c7JEKaC6',
					button_id : 1,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : true,
					),
					max_quantity : 38,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 4623447564518424405,
					),
					text : 'CTfNVXMpA8csQItH',
					button_id : 52,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : true,
					),
					max_quantity : 25,
				),
				$client->keyboardButtonCopy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -9130249882948147569,
					),
					text : 'IFHzblZRyKDE0oPM',
					copy_text : 'JKf7OLIEiRbm3HTG',
				),
			),
		),
	),
);
```