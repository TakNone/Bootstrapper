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
				icon : 749741051709917133,
			),
			text : 'hJ5NrXk9joG4I6KY',
		),
		$client->keyboardButtonUrl(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 7647280532788275418,
			),
			text : 'MHintX2fN0KwAyV8',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonCallback(
			requires_password : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -1012790785784883334,
			),
			text : 'kcIpSKD9JdmC6PFW',
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->keyboardButtonRequestPhone(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 1308073646879263623,
			),
			text : 'Q8raiF0tKNAPoWw1',
		),
		$client->keyboardButtonRequestGeoLocation(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -3296687467825795747,
			),
			text : 'FaICL9s5e7rfAjJ6',
		),
		$client->keyboardButtonSwitchInline(
			same_peer : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6247474478513588527,
			),
			text : 'Qciz62kZ8HgTMIyB',
			query : 'OCgyEMUBHNIzuswm',
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
				icon : 7939680215918973810,
			),
			text : 'nh4mHcqG3eJiwjF2',
		),
		$client->keyboardButtonBuy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -5319832235400739254,
			),
			text : 'OPFK63jUIVpeYBWs',
		),
		$client->keyboardButtonUrlAuth(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -7118834059849195249,
			),
			text : 'YWgjNRy20fEbkP5z',
			fwd_text : 'OV4Ui0d8IoE3asnX',
			url : 'https://docs.liveproto.dev',
			button_id : 70,
		),
		$client->inputKeyboardButtonUrlAuth(
			request_write_access : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -8220136719659575813,
			),
			text : '2eORqKrDvZPVGsp1',
			fwd_text : 'knX6A0lysqfPI4LE',
			url : 'https://docs.liveproto.dev',
			bot : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonRequestPoll(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 4486282555052806668,
			),
			quiz : false,
			text : 'phuDEzoAr2lCvneS',
		),
		$client->inputKeyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -6023504150812564599,
			),
			text : 'Zmi7GeERDraYdQcM',
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->keyboardButtonUserProfile(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 1863042627673328624,
			),
			text : 'Yo1hRs8d5eHDqfT0',
			user_id : -548419985367891159,
		),
		$client->keyboardButtonWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -947285007798795081,
			),
			text : 'MowEBkRrlz8YUnvS',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonSimpleWebView(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 247533479914819618,
			),
			text : 'ZvMcrzNFaJ7Gpybx',
			url : 'https://docs.liveproto.dev',
		),
		$client->keyboardButtonRequestPeer(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 5127708310921399477,
			),
			text : 'lpLa2N7h0xvRYzCT',
			button_id : 6,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 25,
		),
		$client->inputKeyboardButtonRequestPeer(
			name_requested : true,
			username_requested : true,
			photo_requested : true,
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : 1000613303472999371,
			),
			text : 'Kv4bNQPckD8CSJag',
			button_id : 28,
			peer_type : $client->requestPeerTypeUser(
				bot : false,
				premium : false,
			),
			max_quantity : 61,
		),
		$client->keyboardButtonCopy(
			style : $client->keyboardButtonStyle(
				bg_primary : true,
				bg_danger : true,
				bg_success : true,
				icon : -1910915537517989853,
			),
			text : 'JfgaoXnkLDwC5v8W',
			copy_text : 'cOl6eT2dxF8WUEXZ',
		),
	),
);
```