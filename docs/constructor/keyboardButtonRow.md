# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 211

```tl
keyboardButtonRow#77608b83 buttons:Vector<KeyboardButton> = KeyboardButtonRow;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>buttons</mark> | [`Vector<KeyboardButton>`](type/KeyboardButton) | Bot or inline keyboard buttons |

---

## Type

[KeyboardButtonRow](type/KeyboardButtonRow)

---

## Example

```php
$keyboardButtonRow = $client->keyboardButtonRow(
	buttons : array(
		$client->keyboardButton(
			text : 'kE6HT2fMNgUQhxlX',
		),
		$client->keyboardButtonUrl(
			text : '5gNYsc01mEeUV26I',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'DO1nBFiKVG7PRtey',
			data : '????LiveProto??N??',
		),
		$client->keyboardButtonRequestPhone(
			text : 'qlO48ECmz6IJHbWv',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'Ciqh0agS6yNTP7wK',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'iqd5Z6nH8WopNclQ',
			query : '7HPncvDzVxyf8U0L',
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
			text : 'XgqMejKDd1B6mHN8',
		),
		$client->keyboardButtonBuy(
			text : 'D07Qfrke92HYq4MJ',
		),
		$client->keyboardButtonUrlAuth(
			text : 'kdCMPBRrjVON3xG7',
			fwd_text : 'Nwka4uolcxMdO9qv',
			url : 'https://docs.liveproto.dev',
			button_id : 59,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'qRkTULfmjHSZYBaw',
			fwd_text : 'FSr3bcBJXmxU65Gw',
			url : 'https://docs.liveproto.dev',
			bot : $client->inputUserEmpty(),
		),
		$client->keyboardButtonRequestPoll(
			quiz : $client->boolFalse(),
			text : 'OpGPIrHT7dtmcaAL',
		),
		$client->inputKeyboardButtonUserProfile(
			text : '2SusKveMnd1LAWom',
			user_id : $client->inputUserEmpty(),
		),
		$client->keyboardButtonUserProfile(
			text : 'wPM6fjsITod0Zh59',
			user_id : -4030540571464918336,
		),
		$client->keyboardButtonWebView(
			text : 'hUKONJ2PGAv1jI89',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'o714cyl8IWMgtJaH',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'mLCncvp4PdxeiBR1',
			button_id : 1,
			peer_type : $client->requestPeerTypeUser(
				bot : $client->boolFalse(...),
				premium : $client->boolFalse(...),
			),
			max_quantity : 10,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'AmBIW7s8fbVKLhqJ',
			button_id : 58,
			peer_type : $client->requestPeerTypeUser(
				bot : $client->boolFalse(...),
				premium : $client->boolFalse(...),
			),
			max_quantity : 19,
		),
		$client->keyboardButtonCopy(
			text : '1jPmBcX2N4QqLteo',
			copy_text : 'wWFykZMxHr3lENTX',
		),
	),
);
```