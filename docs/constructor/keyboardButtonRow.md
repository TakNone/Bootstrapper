# keyboardButtonRow

**Description** : *Inline keyboard row*

**Layer** : 222

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
				icon : 920964697199092199,
			),
			text : 'q1K8whlUDSaupYvy',
		),
		$client->keyboardButtonUrl(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -2120539145241790738,
			),
			text : '5a1tmQr3M6nubWqY',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 1138583346506366367,
			),
			text : '5Ak1bM7zFTWdVPms',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6220653898311633273,
			),
			text : 'ejbfNoLyvHw6OWC9',
		),
		$client->keyboardButtonRequestGeoLocation(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -4524475787307483684,
			),
			text : '7H19g34RIjaKOFBx',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 125967546950529788,
			),
			text : 'eVFB72Yd0Z185IiK',
			query : 'TNkplX6GSKvWEbCU',
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
				icon : -6141156889094373432,
			),
			text : 'GURtAbBiHD0KjVW5',
		),
		$client->keyboardButtonBuy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6135566047083323704,
			),
			text : 'hFjoULTlZibaxkW9',
		),
		$client->keyboardButtonUrlAuth(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 4524875061847034706,
			),
			text : 'ZPB3uTSJnQ0Ua2fA',
			fwd_text : '3SHzpuPXg4vDI5wE',
			url : 'https://docs.liveproto.dev',
			button_id : 75,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 755203707738154262,
			),
			text : '5yMBtxLhOHwjiYJk',
			fwd_text : 'YGQkKAtf1robCLUd',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -1410125039231698924,
			),
			quiz : true,
			text : 'XDVzCtPvMRdWFmy0',
		),
		$client->inputKeyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6792137520077962969,
			),
			text : 'FAg8ZjzET5qHMNmC',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 614218643181272697,
			),
			text : 'HoXe8UjiduQIx5Ma',
			user_id : 4843685337979748174,
		),
		$client->keyboardButtonWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 2579850566764860412,
			),
			text : '6Xgb7L29vPOhjqWB',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 5701065187218472419,
			),
			text : 'CyMAkVNGSDhRwd1p',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 8449935592657011334,
			),
			text : 'cze7A1uh5TmRCHsE',
			button_id : 90,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : true,
			),
			max_quantity : 14,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 6606236052964688430,
			),
			text : '6mAgRHGQXTDKB2Jf',
			button_id : 77,
			peer_type : $client->requestPeerTypeUser(
				bot : true,
				premium : false,
			),
			max_quantity : 89,
		),
		$client->keyboardButtonCopy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 3456817324058885547,
			),
			text : 'CHLE7AMZPWiIRJl4',
			copy_text : 'zIsUO23KwnlhP4gj',
		),
	),
);
```