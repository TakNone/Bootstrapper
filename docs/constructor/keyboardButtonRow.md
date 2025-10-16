# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 216

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
			text : 'cfmawH6E9DsWhJev',
		),
		$client->keyboardButtonUrl(
			text : '6xLuqvdCHZQjfk30',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'BtPw2esg0TKbU4aZ',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'uHRZOGJmcezLpn3s',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'UHD5pTyEVtxZCd23',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'oAqQsdg4yaGDXTpI',
			query : 'oSiaVQ3B2GetE4Pv',
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
			text : '0QtZonbiXszIDUS7',
		),
		$client->keyboardButtonBuy(
			text : 'v2P7BTsLZhcn1aHl',
		),
		$client->keyboardButtonUrlAuth(
			text : 'bJrwMsnQlGKfYi4P',
			fwd_text : 'vOhWb9HcTUQf2Bzi',
			url : 'https://docs.liveproto.dev',
			button_id : 54,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : '1aKQksue03qvxltU',
			fwd_text : 'fwNKs3hGcCJDdeTj',
			url : 'https://docs.liveproto.dev',
			bot : $client->inputUserEmpty(),
		),
		$client->keyboardButtonRequestPoll(
			quiz : false,
			text : '8Vv9LOKi0uBEwjGF',
		),
		$client->inputKeyboardButtonUserProfile(
			text : 'iANaLMqJnYKIyHh2',
			user_id : $client->inputUserEmpty(),
		),
		$client->keyboardButtonUserProfile(
			text : 'OAi3WuEq8jxT1b0U',
			user_id : -3188453675173694376,
		),
		$client->keyboardButtonWebView(
			text : 'c8yHj2s5JKkULldX',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'C4Zlw1pXk7vHMirB',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'vO7KIqrW1g5GYutm',
			button_id : 39,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : true,
			),
			max_quantity : 27,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'wvnNtaEOAKxM9Ccy',
			button_id : 37,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 84,
		),
		$client->keyboardButtonCopy(
			text : 'gCiO04RTkW8eXzaH',
			copy_text : 'RfkdjKWa46c8vPbT',
		),
	),
);
```