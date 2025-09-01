# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 214

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
			text : 'a0hysXERUW2mOYI8',
		),
		$client->keyboardButtonUrl(
			text : 'PaCAEQd40jt9Llcp',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : '6BSkvRUY79OTGtyp',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'wXuhNZ8PKGTBWfrM',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : '7ngSAm9cI0dTJl1Y',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'IuQAMw2bXCOFrzfS',
			query : '39jcAqClRQ5KUETs',
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
			text : 'QT9fYK4IAE7sqNkS',
		),
		$client->keyboardButtonBuy(
			text : 'xXzYah91735voZHE',
		),
		$client->keyboardButtonUrlAuth(
			text : 'dM0pcBwWr1E2khIf',
			fwd_text : '4Mgp2wsV85kd3xey',
			url : 'https://docs.liveproto.dev',
			button_id : 58,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'DO9sGUyjJrZ4REbQ',
			fwd_text : 'jWVsBT63XIfCyLx0',
			url : 'https://docs.liveproto.dev',
			bot : $client->inputUserEmpty(),
		),
		$client->keyboardButtonRequestPoll(
			quiz : false,
			text : 'hmiyPdkbVtGZ0eaq',
		),
		$client->inputKeyboardButtonUserProfile(
			text : 'bPVCuESR2DxjodNt',
			user_id : $client->inputUserEmpty(),
		),
		$client->keyboardButtonUserProfile(
			text : '1LJKIBzEqWpjab30',
			user_id : -7055720246630789623,
		),
		$client->keyboardButtonWebView(
			text : 'O91Y8tEywzhxuDVA',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 's2CRYJQTolbuPeq7',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'Qvu7Dt4XzOqULy2R',
			button_id : 1,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 41,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'vl7r6cXNV0Ln8I3Z',
			button_id : 21,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : true,
			),
			max_quantity : 91,
		),
		$client->keyboardButtonCopy(
			text : 'AYE702K41zfV5rlP',
			copy_text : 'kzBVIQLJoNihcgWa',
		),
	),
);
```