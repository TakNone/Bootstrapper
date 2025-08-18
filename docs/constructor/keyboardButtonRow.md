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
			text : 'CKHYufkMSsLvOA8Z',
		),
		$client->keyboardButtonUrl(
			text : 'H6mAvzSsGONZqtVf',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'hoP58qwLuz3kjeGb',
			data : 'Pg???LiveProto`)3{?',
		),
		$client->keyboardButtonRequestPhone(
			text : '2gZHacBkqJ67RTEd',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'JbSuofFP2Mc1Owhr',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : '6K4lDXRfHrIe3T7k',
			query : 'jAHvXPahtfbOUwie',
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
			text : 'UefdvxrstSWgy183',
		),
		$client->keyboardButtonBuy(
			text : 'bi3Qv1r0clXWwuKB',
		),
		$client->keyboardButtonUrlAuth(
			text : 'xWAk7vBaVoL3CSRh',
			fwd_text : 'nTQAXtdBJu1DNk3O',
			url : 'https://docs.liveproto.dev',
			button_id : 92,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : '3zRVivSgIUroyWeP',
			fwd_text : 'dKzOgHpGMnYbuNLa',
			url : 'https://docs.liveproto.dev',
			bot : $client->inputUserEmpty(),
		),
		$client->keyboardButtonRequestPoll(
			quiz : false,
			text : 'BDuodtMNsrmvixgX',
		),
		$client->inputKeyboardButtonUserProfile(
			text : '5jWRUidQY8EKTeaI',
			user_id : $client->inputUserEmpty(),
		),
		$client->keyboardButtonUserProfile(
			text : 'PxVCw3h4ULFWRke8',
			user_id : -2583908782407902533,
		),
		$client->keyboardButtonWebView(
			text : 'JQRSZuEbfo6V70LU',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'tQEkSnWG5UDcAi2f',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'Jg7CIy9Bh1RcKT4V',
			button_id : 95,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 38,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'J6ejIpv39or4sEmV',
			button_id : 37,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 13,
		),
		$client->keyboardButtonCopy(
			text : 'xeniVsA8mTdO3uXa',
			copy_text : 'vUDO3oqLsM8dt0Nu',
		),
	),
);
```