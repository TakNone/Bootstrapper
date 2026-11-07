# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 233

```tl
updateShortMessage#313bc7f8 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int user_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in the message |
| **media_unread** | [`flags.5?true`](type/true) | Whether there are some unread mentions in this message |
| **silent** | [`flags.13?true`](type/true) | If true, the message is a silent message, no notifications should be triggered |
| <mark>id</mark> | [`int`](type/int) | The message ID |
| <mark>user_id</mark> | [`long`](type/long) | The ID of the sender (if outgoing will be the ID of the destination) of the message |
| <mark>message</mark> | [`string`](type/string) | The message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |
| <mark>date</mark> | [`int`](type/int) | date |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about a forwarded message |
| **via_bot_id** | [`flags.11?long`](type/long) | Info about the inline bot used to generate this message |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply and thread information |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Entities for styled text |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShortMessage(
	out : true,
	mentioned : true,
	media_unread : true,
	silent : true,
	id : 24,
	user_id : -7197741294597107645,
	message : '30JhSG7KdXpCMnBa',
	pts : 39,
	pts_count : 74,
	date : 29,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -4329359731113431820,
		),
		from_name : 'cAi0rsJZCD2uFhlV',
		date : 54,
		channel_post : 13,
		post_author : 'DqQV2jYeTgWX5n36',
		saved_from_peer : $client->peerUser(
			user_id : 847539296052423704,
		),
		saved_from_msg_id : 50,
		saved_from_id : $client->peerUser(
			user_id : 4208171884576170359,
		),
		saved_from_name : 'niEP0IOQdzcXyql2',
		saved_date : 96,
		psa_type : 'RUD5tQxTwMIvzh0n',
	),
	via_bot_id : -6728875361392827404,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 37,
		reply_to_peer_id : $client->peerUser(
			user_id : 2575806906631385909,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -2547488873784251826,
			),
			from_name : 'iNKgvDcbho2swOJQ',
			date : 27,
			channel_post : 41,
			post_author : 'Vqgop5INcSAwCv4t',
			saved_from_peer : $client->peerUser(
				user_id : -4889892464812238576,
			),
			saved_from_msg_id : 90,
			saved_from_id : $client->peerUser(
				user_id : 85099518781519554,
			),
			saved_from_name : '2VD7kYgNWjKC9xhU',
			saved_date : 33,
			psa_type : 'Zwrxjb2SOFEoDC75',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 31,
		quote_text : 'Zgv8UFD7dAr019ia',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 60,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 36,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 17,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 51,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 77,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'AVlj2n7I496DQPoB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : 6696704262604336971,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 58,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 7,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 34,
				document_id : -3117457791803042325,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 48,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 4,
				date : 68,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 45,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 98,
				old_text : '1qnK9ubwPfempvOF',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 77,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 82,
			),
		),
		quote_offset : 13,
		todo_item_id : 74,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		quote_rich : array(
			$client->textEmpty(),
			$client->textPlain(
				text : 'V3nvsdrXJUuc8to0',
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
				webpage_id : -3557018676166038015,
			),
			$client->textEmail(
				text : $client->textEmpty(),
				email : 'reply@liveproto.dev',
			),
			$client->textConcat(
				texts : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'tbOdP1Hec0pfR4i8',
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
						webpage_id : 6400499620559636471,
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
						document_id : -734277660943646484,
						w : 25,
						h : 87,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'eSE4mGhPLF9vty2z',
					),
					$client->textMath(
						source : 'OR0TCDFHvKYpVcX4',
					),
					$client->textCustomEmoji(
						document_id : -8416013821287243377,
						alt : 'T6QpFE0zMV9gHhyJ',
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
						user_id : 4095675324987824518,
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
				document_id : 7268252099303096933,
				w : 21,
				h : 23,
			),
			$client->textAnchor(
				text : $client->textEmpty(),
				name : 'CdJM1p8szAHtBQ4L',
			),
			$client->textMath(
				source : '6RjLnvJQ4u1IOpaN',
			),
			$client->textCustomEmoji(
				document_id : -3237850559570761353,
				alt : 'w1x2VlBFdjcoANK3',
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
				user_id : -6706459501981117305,
			),
			$client->textDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				text : $client->textEmpty(),
				date : 56,
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
			length : 11,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 88,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 12,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 86,
			language : 'qKGv1VwfITE9BLiS',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 21,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : -8738566380931652603,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 45,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 95,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 9,
			document_id : 5533823868244549506,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 56,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 75,
			date : 60,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 35,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 95,
			old_text : 'FH2zZ5n0MgT9aBfj',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 17,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 34,
		),
	),
	ttl_period : 1,
);
```