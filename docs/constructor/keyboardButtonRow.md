# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 227

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
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 4966427096115402236,
			),
			text : '97mgJjAf3xzrSOhH',
		),
		$client->keyboardButtonUrl(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 1305638894854975427,
			),
			text : '1Iv5jMUpxtyJ07VD',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -8026926488099101668,
			),
			text : 'MXP4dAz7NBjYpacK',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -8038106229673645380,
			),
			text : 'C4zkWUpfw0YhdjuD',
		),
		$client->keyboardButtonRequestGeoLocation(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -3448776972816715086,
			),
			text : 'iYPS2IMUhcZlJB3z',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 5007286855671480575,
			),
			text : 'El47rW9gtIbzn2GQ',
			query : 'ANQ8EdvMJcYClHXs',
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
				icon : 5005164581822645826,
			),
			text : 'LRk2bfQxnacj6XM0',
		),
		$client->keyboardButtonBuy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 7459568694926744059,
			),
			text : 'x5JUjNn8HFc1sOLX',
		),
		$client->keyboardButtonUrlAuth(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -1207661691176175546,
			),
			text : '2kEgyGSlM6JpBAZQ',
			fwd_text : 'pmMQUn8ROdc63J1Z',
			url : 'https://docs.liveproto.dev',
			button_id : 80,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6742744434251524506,
			),
			text : 'XyJaV2qTKP6NUtLd',
			fwd_text : 'G29QFZpsq3bfAPnY',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -7736212760119793816,
			),
			quiz : false,
			text : 'sKLaXhPFc70pEIBO',
		),
		$client->inputKeyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 379621580469422801,
			),
			text : 'RNAHgD8o9FQmdz1u',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -964989454118941702,
			),
			text : '6YpBNSQ1Z7MHX2Cb',
			user_id : 7281676555926183318,
		),
		$client->keyboardButtonWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 726303492436959816,
			),
			text : 'rcKeDA6fFsSB7oht',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -938360127605164440,
			),
			text : 'X1lTFinezOyYBG2N',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -7824146961668485095,
			),
			text : 'g1jZxutTK4pLV6eF',
			button_id : 41,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 31,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6909115650454833585,
			),
			text : 'uVb2L8H5oQ3yqkxz',
			button_id : 2,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : true,
			),
			max_quantity : 82,
		),
		$client->keyboardButtonCopy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6708650245601427531,
			),
			text : 'h46C9uYdxvROEfmz',
			copy_text : 'XdY6VnhrcHmGFtUl',
		),
	),
);
```