# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 227

```tl
updateMessagePoll#d64c522b flags:# peer:flags.1?Peer msg_id:flags.1?int top_msg_id:flags.2?int poll_id:long poll:flags.0?Poll results:PollResults = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **peer** | [`flags.1?Peer`](type/Peer) | NOTHING |
| **msg_id** | [`flags.1?int`](type/int) | NOTHING |
| **top_msg_id** | [`flags.2?int`](type/int) | NOTHING |
| <mark>poll_id</mark> | [`long`](type/long) | Poll ID |
| **poll** | [`flags.0?Poll`](type/Poll) | If the server knows the client hasn't cached this poll yet, the poll itself |
| <mark>results</mark> | [`PollResults`](type/PollResults) | New poll results |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessagePoll(
	peer : $client->peerUser(
		user_id : 7859813438237702456,
	),
	msg_id : 63,
	top_msg_id : 77,
	poll_id : -4722378611126877532,
	poll : $client->poll(
		id : 5554305169899489415,
		closed : true,
		public_voters : true,
		multiple_choice : true,
		quiz : true,
		open_answers : true,
		revoting_disabled : true,
		shuffle_answers : true,
		hide_results_until_close : true,
		creator : true,
		subscribers_only : true,
		question : $client->textWithEntities(
			text : 'baIHJDFrUs2TZGRf',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 91,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 34,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 6,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 56,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 80,
					language : 'C7WywKoZAljL8fc0',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 69,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : 7804129334740738918,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 7,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 67,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 7,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 44,
					document_id : 6958756580351694817,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 36,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 70,
					date : 42,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 16,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 87,
					old_text : 'FD8fSkgVmYGh9UZL',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 75,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'F2DZWwuH5KoXpLgf',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				media : $client->messageMediaEmpty(),
				added_by : $client->peerUser(
					user_id : -8436658455877444391,
				),
				date : 97,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : '8potqnRhSbA9MyNB',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
			),
		),
		close_period : 34,
		close_date : 43,
		countries_iso2 : array('pNyteJMjXLVOkdZm'),
		hash : 0,
	),
	results : $client->pollResults(
		min : true,
		has_unread_votes : true,
		can_view_stats : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 64,
				recent_voters : array(
					$client->peerUser(
						user_id : 4993229567080030344,
					),
					$client->peerChat(
						chat_id : -2713476429273770657,
					),
					$client->peerChannel(
						channel_id : 6629591471429044357,
					),
				),
			),
		),
		total_voters : 79,
		recent_voters : array(
			$client->peerUser(
				user_id : 3802526089975359928,
			),
			$client->peerChat(
				chat_id : -3345055092207082092,
			),
			$client->peerChannel(
				channel_id : 3593695364540055796,
			),
		),
		solution : 'uIhHq03UaGvnjZOX',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 97,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 67,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'pU8oWADZuzBRLbYG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 0,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : 436281228681314148,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 58,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 31,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : 3432938774508750354,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 93,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 99,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 41,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 30,
				old_text : 'l7D5fJECxyVP2NSi',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 44,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
);
```