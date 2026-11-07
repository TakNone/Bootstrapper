# inputReplyToMessage

**Description** : *Reply to a message*

**Layer** : 233

```tl
inputReplyToMessage#75c1ad70 flags:# reply_to_msg_id:int top_msg_id:flags.0?int reply_to_peer_id:flags.1?InputPeer quote_text:flags.2?string quote_entities:flags.3?Vector<MessageEntity> quote_offset:flags.4?int monoforum_peer_id:flags.5?InputPeer todo_item_id:flags.6?int poll_option:flags.7?bytes quote_rich:flags.8?Vector<RichText> = InputReplyTo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>reply_to_msg_id</mark> | [`int`](type/int) | The message ID to reply to |
| **top_msg_id** | [`flags.0?int`](type/int) | This field must contain the topic ID only when replying to messages in forum topics different from the "General" topic (i.e. reply_to_msg_id is set and reply_to_msg_id != topicID and topicID != 1).  If the replied-to message is deleted before the method finishes execution, the value in this field will be used to send the message to the correct topic, instead of the "General" topic |
| **reply_to_peer_id** | [`flags.1?InputPeer`](type/InputPeer) | Used to reply to messages sent to another chat (specified here), can only be used for non-protected chats and messages |
| **quote_text** | [`flags.2?string`](type/string) | Used to quote-reply to only a certain section (specified here) of the original message. The maximum UTF-8 length for quotes is specified in the quote_length_max config key |
| **quote_entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text from the quote_text field |
| **quote_offset** | [`flags.4?int`](type/int) | Offset of the message quote_text within the original message (in UTF-16 code units) |
| **monoforum_peer_id** | [`flags.5?InputPeer`](type/InputPeer) | Must be set to the ID of the topic when replying to a message within a monoforum topic |
| **todo_item_id** | [`flags.6?int`](type/int) | Can be set to reply to the specified item of a todo list » |
| **poll_option** | [`flags.7?bytes`](type/bytes) | If set, sends the message as a reply to a specific poll answer option », containing the option bytes of the desired answer |
| **quote_rich** | [`flags.8?Vector<RichText>`](type/RichText) | NOTHING |

---

## Type

[InputReplyTo](type/InputReplyTo)

---

## Example

```php
$inputReplyTo = $client->inputReplyToMessage(
	reply_to_msg_id : 8,
	top_msg_id : 90,
	reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	quote_text : 'VLmYrnx97e0H6da2',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 34,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 79,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 90,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 4,
			language : 'yiIpJVeT62Q0Oqv9',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 35,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 7,
			user_id : -2757908381853822391,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 55,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 88,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 1,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : -2072353588463636148,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 45,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 9,
			date : 6,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 75,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 12,
			old_text : 'CxaKzyBdNvHL6M5D',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 52,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 58,
		),
	),
	quote_offset : 15,
	monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	todo_item_id : 10,
	poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	quote_rich : array(
		$client->textEmpty(),
		$client->textPlain(
			text : '2m4HRCuqblNwpTVn',
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
			webpage_id : -1992497814922397251,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'XJTzjFO8Hdp1hm0B',
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
					webpage_id : 5597793223332278486,
				),
				$client->textEmail(
					text : $client->textEmpty(),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(),
						$client->textPlain(
							text : 'Q3DZy6AsFG4z8amT',
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
							webpage_id : -7762294179914128092,
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
							document_id : 6543746632542239648,
							w : 26,
							h : 39,
						),
						$client->textAnchor(
							text : $client->textEmpty(...),
							name : 'a6wH53MWBbYmDkxe',
						),
						$client->textMath(
							source : 'cYQVy4NTaHs9LmCp',
						),
						$client->textCustomEmoji(
							document_id : 4234518942257373238,
							alt : '3ZaC8cyshYUW2G6E',
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
							user_id : 8232259309432287289,
						),
						$client->textDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							text : $client->textEmpty(...),
							date : 33,
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
					document_id : -8624483526347581186,
					w : 58,
					h : 49,
				),
				$client->textAnchor(
					text : $client->textEmpty(),
					name : 'AcRkfojS6s5i2NQw',
				),
				$client->textMath(
					source : 'oRnt9pxTNvE30LqV',
				),
				$client->textCustomEmoji(
					document_id : 1375580685577731148,
					alt : 'gpMqQAVPwX5bycZi',
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
					user_id : 6179930552517678909,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(),
					date : 64,
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
			document_id : -4622790682535141340,
			w : 70,
			h : 58,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : 'zCTvcXO59xGoeg6R',
		),
		$client->textMath(
			source : 'WjolSVvX3H89T0rm',
		),
		$client->textCustomEmoji(
			document_id : -1537347930834906380,
			alt : 'eyg0H4sIctmTx9vJ',
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
			user_id : 7500555727348651647,
		),
		$client->textDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			text : $client->textEmpty(),
			date : 98,
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
);
```