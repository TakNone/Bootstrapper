# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 233

```tl
updateShortChatMessage#4d6deea5 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int from_id:long chat_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in this message |
| **media_unread** | [`flags.5?true`](type/true) | Whether the message contains some unread mentions |
| **silent** | [`flags.13?true`](type/true) | If true, the message is a silent message, no notifications should be triggered |
| <mark>id</mark> | [`int`](type/int) | ID of the message |
| <mark>from_id</mark> | [`long`](type/long) | ID of the sender of the message |
| <mark>chat_id</mark> | [`long`](type/long) | ID of the chat where the message was sent |
| <mark>message</mark> | [`string`](type/string) | Message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |
| <mark>date</mark> | [`int`](type/int) | date |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about a forwarded message |
| **via_bot_id** | [`flags.11?long`](type/long) | Info about the inline bot used to generate this message |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply (thread) information |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Entities for styled text |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once updateShortChatMessage.date+updateShortChatMessage.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShortChatMessage(
	out : true,
	mentioned : true,
	media_unread : true,
	silent : true,
	id : 16,
	from_id : 7157894413408199673,
	chat_id : -460965702163514054,
	message : 'APVuK157aysN0YJm',
	pts : 13,
	pts_count : 71,
	date : 61,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 450245498239778966,
		),
		from_name : 'DhvaB7tP8e16oXLq',
		date : 44,
		channel_post : 52,
		post_author : 'YQ6mpKvB80zql3Jh',
		saved_from_peer : $client->peerUser(
			user_id : -4995156717394420022,
		),
		saved_from_msg_id : 6,
		saved_from_id : $client->peerUser(
			user_id : -5749710805956872635,
		),
		saved_from_name : '5QGgCzWpVetZTD0Y',
		saved_date : 60,
		psa_type : 'FrEZYvGABL92acjp',
	),
	via_bot_id : -6634675528100438259,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 82,
		reply_to_peer_id : $client->peerUser(
			user_id : -6938726219103203335,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 4934906853006465454,
			),
			from_name : 'i91cpP5yvowDCUau',
			date : 65,
			channel_post : 65,
			post_author : 'wT9aMRvBbxAV0izg',
			saved_from_peer : $client->peerUser(
				user_id : -870914707843030588,
			),
			saved_from_msg_id : 41,
			saved_from_id : $client->peerUser(
				user_id : 5742070398508539449,
			),
			saved_from_name : 'VuamPjZXDdhN3IkE',
			saved_date : 99,
			psa_type : 'apWgEsoHuqvAZV2e',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 75,
		quote_text : 'kQegopWj49iM6bOX',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 17,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 46,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 49,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : 'BuIW3U59fG24Xzda',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 41,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : 2621450656358958870,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 3,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 15,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 34,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 45,
				document_id : -3906040531725446951,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 57,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 34,
				date : 52,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 82,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 96,
				old_text : 'AUJslhMyiBTecEYx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 15,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 6,
			),
		),
		quote_offset : 63,
		todo_item_id : 83,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		quote_rich : array(
			$client->textEmpty(),
			$client->textPlain(
				text : 'DSQrzUa9t2hwH3oP',
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
				webpage_id : -10202645379128766,
			),
			$client->textEmail(
				text : $client->textEmpty(),
				email : 'reply@liveproto.dev',
			),
			$client->textConcat(
				texts : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'aAdxUvS7j94ouwfc',
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
						webpage_id : -2155475766382919328,
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
						document_id : -4247378290222993236,
						w : 35,
						h : 11,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'C1WfywbLRzYJhFpl',
					),
					$client->textMath(
						source : 'j3maICt8F1K9yBZl',
					),
					$client->textCustomEmoji(
						document_id : -8493439479693206146,
						alt : '9lmHCsfYTGIWJE12',
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
						user_id : -7027497331725682419,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 25,
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
				document_id : 4641872930839557747,
				w : 40,
				h : 7,
			),
			$client->textAnchor(
				text : $client->textEmpty(),
				name : 'pBQ2Rrahydvg4MDI',
			),
			$client->textMath(
				source : 'CSzf5vGJA1pBQYet',
			),
			$client->textCustomEmoji(
				document_id : -8828483513551588984,
				alt : 'WNHU1clxYtXDqSy3',
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
				user_id : -6002803374968900360,
			),
			$client->textDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				text : $client->textEmpty(),
				date : 58,
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
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 35,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 61,
			language : 'PIXskrmzEQfRj1g6',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 88,
			user_id : 3910274660281543482,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 1,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 57,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 12,
			document_id : 771991303096355260,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 33,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 30,
			date : 59,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 74,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 22,
			old_text : 'ZSIEqm8XP5T3tiYn',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 38,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 74,
		),
	),
	ttl_period : 39,
);
```