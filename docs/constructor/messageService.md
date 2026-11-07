# messageService

**Description** : *Indicates a service message*

**Layer** : 233

```tl
messageService#7a800e0a flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true reactions_are_possible:flags.9?true silent:flags.13?true post:flags.14?true legacy:flags.19?true id:int from_id:flags.8?Peer peer_id:Peer saved_peer_id:flags.28?Peer reply_to:flags.3?MessageReplyHeader date:int action:MessageAction reactions:flags.20?MessageReactions ttl_period:flags.25?int = Message;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in the message |
| **media_unread** | [`flags.5?true`](type/true) | Whether the message contains unread media |
| **reactions_are_possible** | [`flags.9?true`](type/true) | Whether you can react to this message » |
| **silent** | [`flags.13?true`](type/true) | Whether the message is silent |
| **post** | [`flags.14?true`](type/true) | Whether it's a channel post |
| **legacy** | [`flags.19?true`](type/true) | This is a legacy message: it has to be refetched with the new layer |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| **from_id** | [`flags.8?Peer`](type/Peer) | ID of the sender of this message |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Sender of service message |
| **saved_peer_id** | [`flags.28?Peer`](type/Peer) | Will only be set for service messages within a monoforum topic »: peer will be equal to the ID of the monoforum and the saved_peer_id flag will be set to the ID of a topic |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply (thread) information |
| <mark>date</mark> | [`int`](type/int) | Message date |
| <mark>action</mark> | [`MessageAction`](type/MessageAction) | Event connected with the service message |
| **reactions** | [`flags.20?MessageReactions`](type/MessageReactions) | Reactions » |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Message](type/Message)

---

## Example

```php
$message = $client->messageService(
	out : true,
	mentioned : true,
	media_unread : true,
	reactions_are_possible : true,
	silent : true,
	post : true,
	legacy : true,
	id : 91,
	from_id : $client->peerUser(
		user_id : -6102100111330792918,
	),
	peer_id : $client->peerUser(
		user_id : 1936199404649896860,
	),
	saved_peer_id : $client->peerUser(
		user_id : 1431649798740491010,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 58,
		reply_to_peer_id : $client->peerUser(
			user_id : -1365631840596729140,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -6274676542538079101,
			),
			from_name : 't7pIBoiHzlamOfDs',
			date : 17,
			channel_post : 31,
			post_author : 'tCI09WUshxBSlykP',
			saved_from_peer : $client->peerUser(
				user_id : -854541894294304695,
			),
			saved_from_msg_id : 85,
			saved_from_id : $client->peerUser(
				user_id : -2606365900106626657,
			),
			saved_from_name : 'vqSFIcw8RpBUPVX9',
			saved_date : 53,
			psa_type : 'eA17ho8iDdN2jWm4',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 36,
		quote_text : '2EOehwNlujqkJ4U8',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 59,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 57,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 59,
				language : 'ZF2QCOT8aSmBgc3G',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : -6426141453764379936,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 2,
				document_id : 2526571650661409621,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 58,
				date : 3,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 47,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 59,
				old_text : 'AdORKkH3B1MDFb5c',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 4,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 0,
			),
		),
		quote_offset : 34,
		todo_item_id : 90,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		quote_rich : array(
			$client->textEmpty(),
			$client->textPlain(
				text : '8glBfHYow1VJLSna',
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
				webpage_id : 3042028831366714545,
			),
			$client->textEmail(
				text : $client->textEmpty(),
				email : 'reply@liveproto.dev',
			),
			$client->textConcat(
				texts : array(
					$client->textEmpty(),
					$client->textPlain(
						text : 'wDX8lQVW3Bbz1eHS',
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
						webpage_id : 6763405344409366097,
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
						document_id : -6439729869341283005,
						w : 60,
						h : 52,
					),
					$client->textAnchor(
						text : $client->textEmpty(...),
						name : 'XhdLDuTsCj5UMxtP',
					),
					$client->textMath(
						source : 'BK4jgGSpN6ikPm7a',
					),
					$client->textCustomEmoji(
						document_id : -9091219074273589353,
						alt : 'vWHA7SPsLutgF1J9',
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
						user_id : -8464351257765571854,
					),
					$client->textDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						text : $client->textEmpty(...),
						date : 55,
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
				document_id : 2641546932136971563,
				w : 80,
				h : 47,
			),
			$client->textAnchor(
				text : $client->textEmpty(),
				name : 'QtVvqIYM8ibruXRy',
			),
			$client->textMath(
				source : 'LvK9pPQYbErZ4HJs',
			),
			$client->textCustomEmoji(
				document_id : 6917487964278188231,
				alt : 'ZcYm9OTb1xeXrKs8',
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
				user_id : 6414394462172664057,
			),
			$client->textDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				text : $client->textEmpty(),
				date : 1,
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
	date : 54,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 62,
				reaction : $client->reactionEmpty(),
				count : 31,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : -8607541763271681989,
				),
				date : 23,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : -5241685616045775724,
				),
				count : 73,
			),
		),
	),
	ttl_period : 63,
);
```