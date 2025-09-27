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
			text : '5IuMkpvfBye4grUb',
		),
		$client->keyboardButtonUrl(
			text : 'lY01jW8nT7DEIXZV',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'MKv3XaDxTZ0gP5z2',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'gsEnIkyO64l9Pxh5',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'aRD1kCriSBUeX93l',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'q59yGkg1WAYlbF3K',
			query : 'CHG5IEpB8mMPcWY2',
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
			text : 'SQbcOgdEoTWBlH7I',
		),
		$client->keyboardButtonBuy(
			text : 'bsn0X8EWCMJpL4O5',
		),
		$client->keyboardButtonUrlAuth(
			text : 'k609fniJRYFVzSo2',
			fwd_text : 'tMQn1HJvqPzxOuKh',
			url : 'https://docs.liveproto.dev',
			button_id : 39,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'rXpQJWYPAu6FdqjH',
			fwd_text : '7ijZPl4aoOmFVIf2',
			url : 'https://docs.liveproto.dev',
			bot : $client->inputUserEmpty(),
		),
		$client->keyboardButtonRequestPoll(
			quiz : true,
			text : '0zBFvtqab87DAfsO',
		),
		$client->inputKeyboardButtonUserProfile(
			text : 'dniCGJIp0jzBFZt8',
			user_id : $client->inputUserEmpty(),
		),
		$client->keyboardButtonUserProfile(
			text : 'c0A6vFpeHf8s2SBq',
			user_id : 6982849218688326327,
		),
		$client->keyboardButtonWebView(
			text : 'wepVfWSn8vtzPGbm',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'ymYIc7inLW2psxrT',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'xCv7VFUTY2eGPkoW',
			button_id : 34,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : true,
			),
			max_quantity : 86,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'uNZAfohtcQiKJEjM',
			button_id : 13,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 75,
		),
		$client->keyboardButtonCopy(
			text : 'aQrXGhLAq2p4Wzl6',
			copy_text : '9XqcUERtS7OQA1vT',
		),
	),
);
```