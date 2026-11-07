# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 233

```tl
messageReplyHeader#ddb5ab75 flags:# reply_to_scheduled:flags.2?true forum_topic:flags.3?true quote:flags.9?true reply_to_ephemeral:flags.13?true reply_to_msg_id:flags.4?int reply_to_peer_id:flags.0?Peer reply_from:flags.5?MessageFwdHeader reply_media:flags.8?MessageMedia reply_to_top_id:flags.1?int quote_text:flags.6?string quote_entities:flags.7?Vector<MessageEntity> quote_offset:flags.10?int todo_item_id:flags.11?int poll_option:flags.12?bytes quote_rich:flags.14?Vector<RichText> = MessageReplyHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **reply_to_scheduled** | [`flags.2?true`](type/true) | This is a reply to a scheduled message |
| **forum_topic** | [`flags.3?true`](type/true) | Whether this message was sent in a forum topic (except for the General topic) |
| **quote** | [`flags.9?true`](type/true) | Whether this message is quoting a part of another message |
| **reply_to_ephemeral** | [`flags.13?true`](type/true) | NOTHING |
| **reply_to_msg_id** | [`flags.4?int`](type/int) | ID of message to which this message is replying |
| **reply_to_peer_id** | [`flags.0?Peer`](type/Peer) | For replies sent in channel discussion threads of which the current user is not a member, the discussion group ID |
| **reply_from** | [`flags.5?MessageFwdHeader`](type/MessageFwdHeader) | When replying to a message sent by a certain peer to another chat, contains info about the peer that originally sent the message to that other chat |
| **reply_media** | [`flags.8?MessageMedia`](type/MessageMedia) | When replying to a media sent by a certain peer to another chat, contains the media of the replied-to message |
| **reply_to_top_id** | [`flags.1?int`](type/int) | ID of the message that started this message thread |
| **quote_text** | [`flags.6?string`](type/string) | Used to quote-reply to only a certain section (specified here) of the original message |
| **quote_entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text from the quote_text field |
| **quote_offset** | [`flags.10?int`](type/int) | Offset of the message quote_text within the original message (in UTF-16 code units) |
| **todo_item_id** | [`flags.11?int`](type/int) | Can be set to reply to the specified item of a todo list » |
| **poll_option** | [`flags.12?bytes`](type/bytes) | If the message is a reply to a specific poll answer option », the option bytes of the answer the reply is directed at |
| **quote_rich** | [`flags.14?Vector<RichText>`](type/RichText) | NOTHING |

---

## Type

[MessageReplyHeader](type/MessageReplyHeader)

---

## Example

```php
$messageReplyHeader = $client->messageReplyHeader(
	reply_to_scheduled : true,
	forum_topic : true,
	quote : true,
	reply_to_ephemeral : true,
	reply_to_msg_id : 90,
	reply_to_peer_id : $client->peerUser(
		user_id : 1725670186220166356,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -5724366609380743117,
		),
		from_name : '5faW8d63LjFOkKuN',
		date : 51,
		channel_post : 75,
		post_author : '2Bz5eh0xtNJXL9QU',
		saved_from_peer : $client->peerUser(
			user_id : -1366383538601636278,
		),
		saved_from_msg_id : 28,
		saved_from_id : $client->peerUser(
			user_id : -8809893106488611907,
		),
		saved_from_name : 'TomqkWyhzYfMvQIa',
		saved_date : 19,
		psa_type : 'UB7ad6xlzMQke0tS',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 84,
	quote_text : 'BjdYJaZ6w9VEMsQf',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 91,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 71,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 26,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 71,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 53,
			language : 'kDtELQCbYIZuJ3xT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 14,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 61,
			user_id : 4443233385150858753,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 45,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 73,
			document_id : -7595053565627396482,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 50,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 38,
			date : 85,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 99,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 8,
			old_text : 'Gy6dZWmiaJDKgoFb',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 40,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 76,
		),
	),
	quote_offset : 86,
	todo_item_id : 60,
	poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	quote_rich : array(
		$client->textEmpty(),
		$client->textPlain(
			text : '08gBNEi7GbFChpQa',
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
			webpage_id : -1833238818242496233,
		),
		$client->textEmail(
			text : $client->textEmpty(),
			email : 'reply@liveproto.dev',
		),
		$client->textConcat(
			texts : array(
				$client->textEmpty(),
				$client->textPlain(
					text : 'nruNAD8cfYiXKv1E',
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
					webpage_id : 2393461051179590252,
				),
				$client->textEmail(
					text : $client->textEmpty(),
					email : 'reply@liveproto.dev',
				),
				$client->textConcat(
					texts : array(
						$client->textEmpty(),
						$client->textPlain(
							text : 'qR3f5HLGweMoktKb',
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
							webpage_id : -4219845249478060599,
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
							document_id : -7140232124784539053,
							w : 56,
							h : 92,
						),
						$client->textAnchor(
							text : $client->textEmpty(...),
							name : 'QF1OW0ADC3okPLEd',
						),
						$client->textMath(
							source : 'Ygv3EZd9MGe6zprt',
						),
						$client->textCustomEmoji(
							document_id : 8990370246565002336,
							alt : 'JXHS3WVYq176gpLN',
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
							user_id : 411817371963788791,
						),
						$client->textDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							text : $client->textEmpty(...),
							date : 11,
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
					document_id : 5703110936709555783,
					w : 100,
					h : 95,
				),
				$client->textAnchor(
					text : $client->textEmpty(),
					name : 'BnY503qKZ6tv81Ef',
				),
				$client->textMath(
					source : '7naXFOUEoJfMjZeW',
				),
				$client->textCustomEmoji(
					document_id : -498159346456613317,
					alt : '76GSUY2MvNfPp8CT',
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
					user_id : -6080412587532641506,
				),
				$client->textDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					text : $client->textEmpty(),
					date : 54,
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
			document_id : 236706917319003708,
			w : 10,
			h : 4,
		),
		$client->textAnchor(
			text : $client->textEmpty(),
			name : '5E7G6CxrRQSyHLqo',
		),
		$client->textMath(
			source : 'h8EP3udfnJqjoUzr',
		),
		$client->textCustomEmoji(
			document_id : -4527474246724171447,
			alt : 'efp4FQCYEH6tMVa1',
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
			user_id : 1047915493084694921,
		),
		$client->textDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			text : $client->textEmpty(),
			date : 73,
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