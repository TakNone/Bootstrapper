# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 225

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
				icon : -3555934257985599290,
			),
			text : '7xuhoFW42c8yBGTZ',
		),
		$client->keyboardButtonUrl(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -4744996196301500991,
			),
			text : 'zpZR92t6BwSsfMAh',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -5947983475927747179,
			),
			text : 'pIDVorkOTCbtEaZd',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6765063667845031942,
			),
			text : 'tpF1Cfs3iReEUPdv',
		),
		$client->keyboardButtonRequestGeoLocation(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -4934589293272568081,
			),
			text : '7QPj5DYuZ9OI6zMN',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -4524492994171465470,
			),
			text : 'PbeMSFudkvaHtnpo',
			query : 'NPIgFcfAmX4wh3zQ',
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
				icon : 4343188449447217635,
			),
			text : 'CUvQfhP92upczsmA',
		),
		$client->keyboardButtonBuy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 8969607923939707385,
			),
			text : 'BQkrAxCUqMnSV3LE',
		),
		$client->keyboardButtonUrlAuth(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6676376129221199601,
			),
			text : 'eH798CiSGmbUl6JX',
			fwd_text : 'Wg3K9jRfw7UI1HQ2',
			url : 'https://docs.liveproto.dev',
			button_id : 57,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 2597490284461436288,
			),
			text : 'NVa6nIU4qEWFO7io',
			fwd_text : 'ZCyrtzfngHklKcme',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -7338327669944847400,
			),
			quiz : true,
			text : 'F7HWbg8euLlnCYDh',
		),
		$client->inputKeyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6418448443394933534,
			),
			text : 'TjGULtKuXSP1iBJ3',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 5830471513290823001,
			),
			text : '7TAXuy1H9YdgBaRp',
			user_id : 6385474183614834394,
		),
		$client->keyboardButtonWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 46120961225061577,
			),
			text : 'viPmdEX6R13NzBDp',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 7878242216878858771,
			),
			text : 'g1ADXzh2uQtSlwob',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 5423189702069090610,
			),
			text : 'jCw59gBTQY4qfbH3',
			button_id : 62,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 23,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 3434980096472689699,
			),
			text : 'y7aBIU42i6WlzvbX',
			button_id : 26,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 32,
		),
		$client->keyboardButtonCopy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -4542527561082027554,
			),
			text : 'kXmF4CVMwfPpOe5g',
			copy_text : '39WZXgtRYqeouPmG',
		),
	),
);
```