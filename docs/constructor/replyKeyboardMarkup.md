# replyKeyboardMarkup

**Description** : *Bot keyboard*

**Layer** : 227

```tl
replyKeyboardMarkup#85dd99d1 flags:# resize:flags.0?true single_use:flags.1?true selective:flags.2?true persistent:flags.4?true rows:Vector<KeyboardButtonRow> placeholder:flags.3?string = ReplyMarkup;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **resize** | [`flags.0?true`](type/true) | Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). If not set, the custom keyboard is always of the same height as the app's standard keyboard |
| **single_use** | [`flags.1?true`](type/true) | Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again |
| **selective** | [`flags.2?true`](type/true) | Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.Example: A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard |
| **persistent** | [`flags.4?true`](type/true) | Requests clients to always show the keyboard when the regular keyboard is hidden |
| <mark>rows</mark> | [`Vector<KeyboardButtonRow>`](type/KeyboardButtonRow) | Button row |
| **placeholder** | [`flags.3?string`](type/string) | The placeholder to be shown in the input field when the keyboard is active; 1-64 characters |

---

## Type

[ReplyMarkup](type/ReplyMarkup)

---

## Example

```php
$replyMarkup = $client->replyKeyboardMarkup(
	resize : true,
	single_use : true,
	selective : true,
	persistent : true,
	rows : array(
		$client->keyboardButtonRow(
			buttons : array(
				$client->keyboardButton(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 4892627851791417758,
					),
					text : 'b0srjpdwOnh2JMgT',
				),
				$client->keyboardButtonUrl(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6885487494622853571,
					),
					text : 'tTaVgQWzy2NrHO85',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonCallback(
					requires_password : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8316720643572236797,
					),
					text : 'qlX4S9jczUNmGL7v',
					data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
				$client->keyboardButtonRequestPhone(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -8373386362988822017,
					),
					text : 'CED1Tr56h2vdN4F0',
				),
				$client->keyboardButtonRequestGeoLocation(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 5755893842972794557,
					),
					text : 'P1gtsn2h84mQw5oi',
				),
				$client->keyboardButtonSwitchInline(
					same_peer : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -1709352849726389980,
					),
					text : '4fSipGQR8HY09Er2',
					query : 'YUpwREiPd2s3XTrz',
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
						icon : -213866740894461043,
					),
					text : 'JOogwDZF2U0Wrkyv',
				),
				$client->keyboardButtonBuy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 7205822940397020212,
					),
					text : 'Nt4nylgixLMpk8ZR',
				),
				$client->keyboardButtonUrlAuth(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 4781861875302821524,
					),
					text : '2ypkqL1Oxevf8nmA',
					fwd_text : 'Gv3hFJ9ZKgSEyCBp',
					url : 'https://docs.liveproto.dev',
					button_id : 84,
				),
				$client->inputKeyboardButtonUrlAuth(
					request_write_access : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -6066429332480828915,
					),
					text : '1HVvu7tbKBYm8D6o',
					fwd_text : 'PaECSYq1g9djyHBw',
					url : 'https://docs.liveproto.dev',
					bot : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonRequestPoll(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -1809719916189591424,
					),
					quiz : true,
					text : 'zygKcF6snZY80Hhl',
				),
				$client->inputKeyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -4217984805751580372,
					),
					text : 'MlbOdfozrpiVSwNu',
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->keyboardButtonUserProfile(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 8596417670379629424,
					),
					text : 'SjFoGuO2f8bqi0D4',
					user_id : 3759859050264609963,
				),
				$client->keyboardButtonWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -1377898615071542442,
					),
					text : 'Vg0isu2PMTKFAfSv',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonSimpleWebView(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -710399395817632609,
					),
					text : 'NL0kn2cSgMdmbVao',
					url : 'https://docs.liveproto.dev',
				),
				$client->keyboardButtonRequestPeer(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -1062093694285874835,
					),
					text : '7PLWzVkHN2O5DwqG',
					button_id : 25,
					peer_type : $client->requestPeerTypeUser(
						bot : false,
						premium : false,
					),
					max_quantity : 30,
				),
				$client->inputKeyboardButtonRequestPeer(
					name_requested : true,
					username_requested : true,
					photo_requested : true,
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : -2218202107369550956,
					),
					text : '7TbX8MA9uWyfajiV',
					button_id : 38,
					peer_type : $client->requestPeerTypeUser(
						bot : true,
						premium : false,
					),
					max_quantity : 76,
				),
				$client->keyboardButtonCopy(
					style : $client->keyboardButtonStyle(
						bg_primary : true,
						bg_danger : true,
						bg_success : true,
						icon : 64814403717770139,
					),
					text : 'J2A40WMhjtgQr8Hl',
					copy_text : 'Woi4kZswjzUfycL0',
				),
			),
		),
	),
	placeholder : 'nz8EbQWKGjT7ihsy',
);
```