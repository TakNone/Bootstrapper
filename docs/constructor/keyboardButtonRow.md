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
				icon : -8371462012222836182,
			),
			text : 'UYFPKSM78E9sqiN2',
		),
		$client->keyboardButtonUrl(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 2736321007218825473,
			),
			text : 'dJf17VDXT2nmUKR3',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6605262884139859454,
			),
			text : '5d9fQgcMUS7yEWLq',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6100483279168548052,
			),
			text : 'qVZT3kc4yKoz5Nvp',
		),
		$client->keyboardButtonRequestGeoLocation(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -3181004405073728752,
			),
			text : 'MWevlNDQa1giudUI',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -4416946774646010054,
			),
			text : 'pEkDewlByMgj8LoZ',
			query : 'DZAt5mzIpdL7OrXl',
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
				icon : 5594689100322619702,
			),
			text : 'WV3dOH7J5I0ihqzA',
		),
		$client->keyboardButtonBuy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 7179616262987097793,
			),
			text : '4UgGmnYCya1zjQel',
		),
		$client->keyboardButtonUrlAuth(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6509751412263034705,
			),
			text : 'pv3ZtOq7hFr2y6aP',
			fwd_text : 'qrfmtMJI2Q1wcZ6h',
			url : 'https://docs.liveproto.dev',
			button_id : 88,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -2642161254736097045,
			),
			text : 'n0F5clyMSk6JGxum',
			fwd_text : 'E32xgysJKmDLGz6F',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -8477543182129421203,
			),
			quiz : true,
			text : '2bufA5hR7z1mPD8j',
		),
		$client->inputKeyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -3322771026088062854,
			),
			text : 'sTevUy1wpuYt7Q9R',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 8994704698724586851,
			),
			text : '5LrlCZwDgavc8I7p',
			user_id : -5605570275742386236,
		),
		$client->keyboardButtonWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -2602558655143667038,
			),
			text : 'kp4JcePGh9N8fSyi',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 4395440374209992826,
			),
			text : 'r6odBWN0qahIS9YD',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -1607288204615764093,
			),
			text : 'fNWdy4v61gopCbY2',
			button_id : 26,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 0,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 5350299677673415351,
			),
			text : 'NrXgVLhiQsMRJOP2',
			button_id : 5,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : true,
			),
			max_quantity : 71,
		),
		$client->keyboardButtonCopy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 1957618847678658431,
			),
			text : 'qB2lcI3CSdF9Ofu5',
			copy_text : 's2HGqW3LONoIJaMl',
		),
	),
);
```