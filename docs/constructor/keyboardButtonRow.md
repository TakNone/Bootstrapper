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
			text : 'SL7XdB9bWfwRkuot',
		),
		$client->keyboardButtonUrl(
			text : 'rQa5gWRYOhXp7ojN',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			text : '6xcUDG0lkuKFPRWT',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			text : 'xmAZGoPf4rlnwNOE',
		),
		$client->keyboardButtonRequestGeoLocation(
			text : 'cVCT9azxLZ2UMsuf',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			text : '8Y3W46CbjAhSlVX9',
			query : 'dCVHYUsJkc1F96v0',
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
			text : 'j2u0Q4YsXnOI9N71',
		),
		$client->keyboardButtonBuy(
			text : 'yHY142EdzCuBrXMe',
		),
		$client->keyboardButtonUrlAuth(
			text : 'y5VQ1e7AbvCpqBaE',
			fwd_text : 'Fz3y8G9jYEvxBH4k',
			url : 'https://docs.liveproto.dev',
			button_id : 65,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			text : 'BGsvhDSZbwtAV9q6',
			fwd_text : 'qS1zItup8W7yMacV',
			url : 'https://docs.liveproto.dev',
			bot : $client->inputUserEmpty(),
		),
		$client->keyboardButtonRequestPoll(
			quiz : true,
			text : 'zWBgGXQ794T62SaP',
		),
		$client->inputKeyboardButtonUserProfile(
			text : '3glNw7MnFjK8hV9v',
			user_id : $client->inputUserEmpty(),
		),
		$client->keyboardButtonUserProfile(
			text : 'sW1NdfacLCG8oBOt',
			user_id : -3720581576338051919,
		),
		$client->keyboardButtonWebView(
			text : 'o1J6FOPtfvATBrGY',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			text : 'UGg6CMqDEmdZkNIK',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			text : '5NlbuiokyISOAM1C',
			button_id : 20,
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
			text : '70RWflCpTJAz8ZjK',
			button_id : 36,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 84,
		),
		$client->keyboardButtonCopy(
			text : 'ev4N1KiEkh7yjtVb',
			copy_text : 'NLYA4zdBTkgqDp7R',
		),
	),
);
```