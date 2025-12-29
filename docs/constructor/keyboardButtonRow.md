# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 218

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
			text : '4Q3HDqRsVKdjauJU',
		),
		$client->keyboardButtonUrl(
			text : 'FVkvrSpAMKoTbfOU',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'eTYH74pz8JuWLZMh',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'vLdtBIbWJ7wRrGFn',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'rCSqYp9Nn2AdtZM1',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'eyxB75bNsoq9z0k8',
			query : 'pMYAorjEJcCxQf4u',
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
			text : 'YOjodkmsUziDgZ8J',
		),
		$client->keyboardButtonBuy(
			text : 'EHpxsw0zRcbnYGjO',
		),
		$client->keyboardButtonUrlAuth(
			text : 'pYbCPVITHXztgu8a',
			fwd_text : 'i5HM627OXnSKTk0y',
			url : 'https://docs.liveproto.dev',
			button_id : 77,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'QEgARql2tXcoTbvy',
			fwd_text : 'AMp3qteUxTzFkLuB',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			quiz : true,
			text : '0vsaQWt6P574m1hT',
		),
		$client->inputKeyboardButtonUserProfile(
			text : 'mh1siIoZMXkrPenK',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			text : 'z2e6R0tDiVEWcaQn',
			user_id : 7379246559978362841,
		),
		$client->keyboardButtonWebView(
			text : 'IctKmTD1x3GWkJiA',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'Uhcqse9yYZP07XBx',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'Fo207dyvTPGu1Cb8',
			button_id : 20,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : true,
			),
			max_quantity : 12,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'cwFVS3UTJH7Xh4e2',
			button_id : 39,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 47,
		),
		$client->keyboardButtonCopy(
			text : 'GyOphYemT5aXALN9',
			copy_text : '2TZuW5wDI8UidJ6g',
		),
	),
);
```