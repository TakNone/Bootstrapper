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
			text : 'apDEXkgI0jMU5bCZ',
		),
		$client->keyboardButtonUrl(
			text : 'oxkMmWGfN0rJFpqd',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : 'RfzAlQdsg6N0Zi5q',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'cd6nksuFRjDqGzxr',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'uPt3YysBmwkohED2',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : 'uOV3WSyqTvC2Aesi',
			query : '7qYN2jfldEICArKO',
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
			text : 'QVgkLUDyi8T7oAeY',
		),
		$client->keyboardButtonBuy(
			text : 'j24XWRBfwYAskSqJ',
		),
		$client->keyboardButtonUrlAuth(
			text : '7r2z1mdGcbYjgIyf',
			fwd_text : '5lUwPsebXE1x7KJt',
			url : 'https://docs.liveproto.dev',
			button_id : 18,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'pjS0MCT6wnYrzsvy',
			fwd_text : 'oVBp3TaD9b2KLfMi',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(peer : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			quiz : true,
			text : 'fXAi9ZuzHtmTDLkE',
		),
		$client->inputKeyboardButtonUserProfile(
			text : 'FuPmVAXDGlW8zfoY',
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			text : '8f6E0UAmXQOkjgVt',
			user_id : 6967627641257878283,
		),
		$client->keyboardButtonWebView(
			text : '2uBgpTXYebCnDLUa',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : '4QMXvpE8fiagA6kF',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : 'HxDWtSQRnpaGgh5J',
			button_id : 77,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : true,
			),
			max_quantity : 69,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			text : 'U2JHqzQMF875y4EI',
			button_id : 94,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : true,
			),
			max_quantity : 3,
		),
		$client->keyboardButtonCopy(
			text : 'tgQIrHjZD0kPluqV',
			copy_text : 'wb0ELmkB6YnPic1A',
		),
	),
);
```