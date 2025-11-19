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
			text : 'OCDtmSakfVxud9cG',
		),
		$client->keyboardButtonUrl(
			text : 'g1ECrZfUeGMQIhlw',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'erVGIZ1AyDSvomnY',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'jryo14fM0Nwkmce5',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : '7Hg06lUEpqdXNu2R',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'zYEjthCZ0ABvNgX4',
			query : 'yTDLqOX7wJA3zrPg',
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
			text : 'bO9ljUgz3khZcqWy',
		),
		$client->keyboardButtonBuy(
			text : 'WREsuiIdorbvQCh3',
		),
		$client->keyboardButtonUrlAuth(
			text : 'Mhr6zu9i7bYk3TAE',
			fwd_text : '5G1clIgLvfr6Ua94',
			url : 'https://docs.liveproto.dev',
			button_id : 42,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'H6we5MxAJWiVCZKB',
			fwd_text : 'nHVXO9GrCJ4MR1he',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			quiz : false,
			text : 'QoSktaJAhO1yXLxu',
		),
		$client->inputKeyboardButtonUserProfile(
			text : 'HW6hoyuQ9q2NLODY',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			text : 'pSrC8EtebF3kgHDQ',
			user_id : 6684519128047058760,
		),
		$client->keyboardButtonWebView(
			text : 'MvASOpIdc16zmB7k',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'yaTzn9fO5qUbKodv',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'UVePuK4xbHsADoMZ',
			button_id : 71,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 76,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'JLWx38n9uvklUmQo',
			button_id : 10,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : true,
			),
			max_quantity : 9,
		),
		$client->keyboardButtonCopy(
			text : 'X8EpwkK4ePLDiMjd',
			copy_text : 'YXv9sgSLId83pCnF',
		),
	),
);
```