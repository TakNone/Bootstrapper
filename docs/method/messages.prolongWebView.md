# messages.prolongWebView

**Description** : *Indicate to the server \(from the user side\) that the user is still using a web app*

**Layer** : 233

```tl
messages.prolongWebView#b0d81a83 flags:# silent:flags.5?true peer:InputPeer bot:InputUser query_id:long reply_to:flags.0?InputReplyTo send_as:flags.13?InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **silent** | [`flags.5?true`](type/true) | Whether the inline message that will be sent by the bot on behalf of the user once the web app interaction is terminated should be sent silently (no notifications for the receivers) |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Dialog where the web app was opened |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot that owns the web app |
| <mark>query_id</mark> | [`long`](type/long) | Web app interaction ID obtained from messages.requestWebView |
| **reply_to** | [`flags.0?InputReplyTo`](type/InputReplyTo) | If set, indicates that the inline message that will be sent by the bot on behalf of the user once the web app interaction is terminated should be sent in reply to the specified message or story |
| **send_as** | [`flags.13?InputPeer`](type/InputPeer) | Open the web app as the specified peer |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->messages->prolongWebView(
	silent : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	bot : $client->get_input_user(user : '@TakNone'),
	query_id : -8702150267839569535,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 53,
		top_msg_id : 38,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'EYACv6Tqf5amNg74',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 18,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 69,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 85,
				language : 'DFm3xcntI9kh4f2C',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 96,
				user_id : -2194951290828214767,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 10,
				document_id : -5598382866820765552,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 14,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 47,
				date : 88,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 20,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 84,
				old_text : 'xhW7A892ZUbFqnvO',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 95,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 12,
			),
		),
		quote_offset : 81,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 71,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		quote_rich : array(
			$client->textEmpty(),
			$client->textPlain(
				text : 'G7Q481luRkWeU3YF',
			),
			$client->textBold(
				text : $client->textEmpty(),
			),
			$client->textItalic(
				text : $client->textEmpty(),
			),
			$client->textUnderline(
				text : $client->textEmpty(),
			),
			$client->textStrike(
				text : $client->textEmpty(),
			),
			$client->textFixed(
				text : $client->textEmpty(),
			),
			$client->textUrl(
				text : $client->textEmpty(),
				url : 'https://docs.liveproto.dev',
				webpage_id : -8339831779361113824,
			),
			$client->textEmail(
				text : $client->textEmpty(),
				email : 'reply@liveproto.dev',
			),
			$client->textConcat(
				texts : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'XAKxcUIbMr32PFkq',
					),
					$client->textBold(
						text : $client->textEmpty(...),
					),
					$client->textItalic(
						text : $client->textEmpty(...),
					),
					$client->textUnderline(
						text : $client->textEmpty(...),
					),
					$client->textStrike(
						text : $client->textEmpty(...),
					),
					$client->textFixed(
						text : $client->textEmpty(...),
					),
					$client->textUrl(
						text : $client->textEmpty(...),
						url : 'https://docs.liveproto.dev',
						webpage_id : -3150024098518366389,
					),
					$client->textEmail(
						text : $client->textEmpty(...),
						email : 'reply@liveproto.dev',
					),
					$client->textConcat(
						texts : array(
							$client->textEmpty(...),
							$client->textPlain(...),
							$client->textBold(...),
							$client->textItalic(...),
							$client->textUnderline(...),
							$client->textStrike(...),
							$client->textFixed(...),
							$client->textUrl(...),
							$client->textEmail(...),
							$client->textConcat(...),
							$client->textSubscript(...),
							$client->textSuperscript(...),
							$client->textMarked(...),
							$client->textPhone(...),
							$client->textImage(...),
							$client->textAnchor(...),
							$client->textMath(...),
							$client->textCustomEmoji(...),
							$client->textSpoiler(...),
							$client->textMention(...),
							$client->textHashtag(...),
							$client->textBotCommand(...),
							$client->textCashtag(...),
							$client->textAutoUrl(...),
							$client->textAutoEmail(...),
							$client->textAutoPhone(...),
							$client->textBankCard(...),
							$client->textMentionName(...),
							$client->textDate(...),
							$client->textDiff(...),
							$client->textButton(...),
							$client->textTonAddress(...),
						),
					),
					$client->textSubscript(
						text : $client->textEmpty(...),
					),
					$client->textSuperscript(
						text : $client->textEmpty(...),
					),
					$client->textMarked(
						text : $client->textEmpty(...),
					),
					$client->textPhone(
						text : $client->textEmpty(...),
						phone : '+1234567890',
					),
					$client->textImage(
						document_id : -701271627960402962,
						w : 81,
						h : 5,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : '8eyJjzFm6WGQIq4c',
					),
					$client->textMath(
						source : '0IaxWFCvJX53REtG',
					),
					$client->textCustomEmoji(
						document_id : -1847229913534877116,
						alt : 'pW0uz6kQNYFKnOJX',
					),
					$client->textSpoiler(
						text : $client->textEmpty(...),
					),
					$client->textMention(
						text : $client->textEmpty(...),
					),
					$client->textHashtag(
						text : $client->textEmpty(...),
					),
					$client->textBotCommand(
						text : $client->textEmpty(...),
					),
					$client->textCashtag(
						text : $client->textEmpty(...),
					),
					$client->textAutoUrl(
						text : $client->textEmpty(...),
					),
					$client->textAutoEmail(
						text : $client->textEmpty(...),
					),
					$client->textAutoPhone(
						text : $client->textEmpty(...),
					),
					$client->textBankCard(
						text : $client->textEmpty(...),
					),
					$client->textMentionName(
						text : $client->textEmpty(...),
						user_id : -2076327001852659071,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 87,
					),
					$client->textDiff(
						text : $client->textEmpty(...),
						old_text : $client->textEmpty(...),
					),
					$client->textButton(
						text : $client->textEmpty(...),
						type : $client->inlineButtonTypeUrl(...),
						style : $client->richButtonStyle(...),
					),
					$client->textTonAddress(
						text : $client->textEmpty(...),
					),
				),
			),
			$client->textSubscript(
				text : $client->textEmpty(),
			),
			$client->textSuperscript(
				text : $client->textEmpty(),
			),
			$client->textMarked(
				text : $client->textEmpty(),
			),
			$client->textPhone(
				text : $client->textEmpty(),
				phone : '+1234567890',
			),
			$client->textImage(
				document_id : -5468411526665690330,
				w : 59,
				h : 41,
			),
			$client->textAnchor(
				text : $client->textEmpty(),
				name : 'kSMPijuKmcwD8W5U',
			),
			$client->textMath(
				source : 'eb1EHzoKNaMpPAj9',
			),
			$client->textCustomEmoji(
				document_id : 4278328807176682353,
				alt : 'Ak4lbMBZ3oELNq8e',
			),
			$client->textSpoiler(
				text : $client->textEmpty(),
			),
			$client->textMention(
				text : $client->textEmpty(),
			),
			$client->textHashtag(
				text : $client->textEmpty(),
			),
			$client->textBotCommand(
				text : $client->textEmpty(),
			),
			$client->textCashtag(
				text : $client->textEmpty(),
			),
			$client->textAutoUrl(
				text : $client->textEmpty(),
			),
			$client->textAutoEmail(
				text : $client->textEmpty(),
			),
			$client->textAutoPhone(
				text : $client->textEmpty(),
			),
			$client->textBankCard(
				text : $client->textEmpty(),
			),
			$client->textMentionName(
				text : $client->textEmpty(),
				user_id : 1207029065576224649,
			),
			$client->textDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				text : $client->textEmpty(),
				date : 39,
			),
			$client->textDiff(
				text : $client->textEmpty(),
				old_text : $client->textEmpty(),
			),
			$client->textButton(
				text : $client->textEmpty(),
				type : $client->inlineButtonTypeUrl(
					url : 'https://docs.liveproto.dev',
				),
				style : $client->richButtonStyle(
					bg_primary : true,
					bg_danger : true,
					bg_success : true,
					link : true,
				),
			),
			$client->textTonAddress(
				text : $client->textEmpty(),
			),
		),
	),
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```