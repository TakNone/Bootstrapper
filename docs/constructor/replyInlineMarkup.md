# replyInlineMarkup

**Description** : *Bot or inline keyboard*

**Layer** : 216

```tl
replyInlineMarkup#48a30254 rows:Vector<KeyboardButtonRow> = ReplyMarkup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>rows</mark> | [`Vector<KeyboardButtonRow>`](type/KeyboardButtonRow) | Bot or inline keyboard rows |

---

## Type

[ReplyMarkup](type/ReplyMarkup)

---

## Example

```php
$replyMarkup = $client->replyInlineMarkup(
	rows : array(
		$client->keyboardButtonRow(
			buttons : array(
				$client->keyboardButton(
					text : 'rlZBkIMC9dohxReK',
				),
				$client->keyboardButtonUrl(
					text : 'vIMym4pjeNi7tSP6',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					text : 'uUPFvnRhqMIi4K8B',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					text : 'Z9QRaVPz3DC8SFHp',
				),
				$client->keyboardButtonRequestGeoLocation(
					text : 's5p0xkMgB2uhmEKt',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					text : 'NLJP3w9OCdxBFIWe',
					query : '9lKxi4q0wBucgsvI',
					peer_types : array(
						$client->inlineQueryPeerTypeSameBotPM(...),
						$client->inlineQueryPeerTypePM(...),
						$client->inlineQueryPeerTypeChat(...),
						$client->inlineQueryPeerTypeMegagroup(...),
						$client->inlineQueryPeerTypeBroadcast(...),
						$client->inlineQueryPeerTypeBotPM(...),
					),
				),
				$client->keyboardButtonGame(
					text : '9agezWTRLywBVkx0',
				),
				$client->keyboardButtonBuy(
					text : 'ghZ1kq5EvuOeb8DY',
				),
				$client->keyboardButtonUrlAuth(
					text : 'kClv2N1WiOA0IRBx',
					fwd_text : 'wvrGIRf34EmjcLJY',
					url : 'https://docs.liveproto.dev',
					button_id : 34,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					text : 'aE80pnGfVm4XAIQM',
					fwd_text : '7BnoCIAj5Y1eMzVW',
					url : 'https://docs.liveproto.dev',
					bot : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonRequestPoll(
					quiz : false,
					text : 'bJ6xuNReByD70fqr',
				),
				$client->inputKeyboardButtonUserProfile(
					text : 'ZXYiNcREqU6Mg8Il',
					user_id : $client->inputUserEmpty(...),
				),
				$client->keyboardButtonUserProfile(
					text : 'oQKYJRxW42O3NHup',
					user_id : -870001831410408376,
				),
				$client->keyboardButtonWebView(
					text : '3T4E8bfBwGH2R9SA',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					text : 'IvpnwM1Xr8FtajQS',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					text : 'I5FZMpwLWbjsnoHx',
					button_id : 46,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 9,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					text : 'SQlKp7HngNWwAbCe',
					button_id : 35,
					peer_type : $client->requestPeerTypeUser(...),
					max_quantity : 100,
				),
				$client->keyboardButtonCopy(
					text : 'nA2yOgG6CzBYb4Xd',
					copy_text : 'whmy4aWBNDiRpKOL',
				),
			),
		),
	),
);
```