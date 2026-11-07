# messages.sendScreenshotNotification

**Description** : *Notify the other user in a private chat that a screenshot of the chat was taken*

**Layer** : 233

```tl
messages.sendScreenshotNotification#a1405817 peer:InputPeer reply_to:InputReplyTo random_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Other user |
| <mark>reply_to</mark> | [`InputReplyTo`](type/InputReplyTo) | Indicates the message that was screenshotted (the specified message ID can also be 0 to avoid indicating any specific message) |
| <mark>random_id</mark> | [`long`](type/long) | Random ID to avoid message resending. See here » for more info on random ID deduplication and updateMessageID mapping |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **REPLY_MESSAGE_ID_INVALID** | `400` | The specified reply-to message ID is invalid |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |
| **YOU_BLOCKED_USER** | `400` | You blocked this user |

---

## Example

```php
$updates = $client->messages->sendScreenshotNotification(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 73,
		top_msg_id : 2,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 's7Wl5GTSfjdNBnHv',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 12,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 85,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 96,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 4,
				language : 'skrSOM32dfKLEByG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 76,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : 1561858586392341737,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 71,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 47,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 54,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 44,
				document_id : -4707952882103392677,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 86,
				date : 2,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 21,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 49,
				old_text : '1SGrWoLys8eYpINw',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 0,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 0,
			),
		),
		quote_offset : 86,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 68,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		quote_rich : array(
			$client->textEmpty(),
			$client->textPlain(
				text : 'KsyuFt6mNCMr1Hlo',
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
				webpage_id : -8788316377758071464,
			),
			$client->textEmail(
				text : $client->textEmpty(),
				email : 'reply@liveproto.dev',
			),
			$client->textConcat(
				texts : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'pPJTKNznEA3GlMxR',
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
						webpage_id : -4540110920474559237,
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
						document_id : -1569295426983807156,
						w : 91,
						h : 16,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'bsulOZgkpj4mqhJE',
					),
					$client->textMath(
						source : 'zOY5wflI8GJFjEqP',
					),
					$client->textCustomEmoji(
						document_id : -4886655856987057370,
						alt : 'ceSnv0jIu2pO4Kas',
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
						user_id : 7564229380485701245,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 54,
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
				document_id : 1607110477613639998,
				w : 29,
				h : 63,
			),
			$client->textAnchor(
				text : $client->textEmpty(),
				name : 'I36fLOSA75mVtckW',
			),
			$client->textMath(
				source : 'Kd2y6cMUafmTQBD5',
			),
			$client->textCustomEmoji(
				document_id : -8656669294125536254,
				alt : 'Hh6bes3ZSFBgtTpO',
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
				user_id : 3418883422959290560,
			),
			$client->textDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				text : $client->textEmpty(),
				date : 88,
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
	random_id : -301546890766778877,
);
```