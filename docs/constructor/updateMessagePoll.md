# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 233

```tl
updateMessagePoll#d64c522b flags:# peer:flags.1?Peer msg_id:flags.1?int top_msg_id:flags.2?int poll_id:long poll:flags.0?Poll results:PollResults = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **peer** | [`flags.1?Peer`](type/Peer) | Peer of the message containing the poll |
| **msg_id** | [`flags.1?int`](type/int) | Message ID of the poll |
| **top_msg_id** | [`flags.2?int`](type/int) | If the poll is in a forum topic, the ID of the top message of the topic |
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
		user_id : 1390994803970093307,
	),
	msg_id : 55,
	top_msg_id : 76,
	poll_id : 3454792213290994314,
	poll : $client->poll(
		id : -8759049807216000230,
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
			text : 'AOUHQvpzu7YynMT0',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 7,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 86,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 45,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 98,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 65,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 5,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : 'yOSQjVEpbrFMho0w',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 61,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : 5101873637603734878,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 83,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 42,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 44,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 56,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 50,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 59,
					document_id : -7921080260962017972,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 44,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 43,
					date : 6,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 4,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 43,
					old_text : 'dEw9mOsx7H54Ik0P',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 96,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 26,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'g6tpboIkJHjyECYx',
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
						$client->messageEntityTonAddress(...),
					),
				),
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				media : $client->messageMediaEmpty(),
				added_by : $client->peerUser(
					user_id : -3979738590081151862,
				),
				date : 36,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : '2nxdNDeGhRBr5jQb',
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
						$client->messageEntityTonAddress(...),
					),
				),
				media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
			),
		),
		close_period : 56,
		close_date : 75,
		countries_iso2 : array('0s2yRnaG6BAOwbhk'),
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
				voters : 71,
				recent_voters : array(
					$client->peerUser(
						user_id : 9168353340931682798,
					),
					$client->peerChat(
						chat_id : -4523952916863425844,
					),
					$client->peerChannel(
						channel_id : 7955752159480997698,
					),
				),
			),
		),
		total_voters : 72,
		recent_voters : array(
			$client->peerUser(
				user_id : -5361201749766423642,
			),
			$client->peerChat(
				chat_id : -1544632418591062411,
			),
			$client->peerChannel(
				channel_id : -4850956531452225969,
			),
		),
		solution : 'zVcqiIkuKbg5taGF',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 25,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 41,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 23,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 50,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : 'voul0qhYdrFME12P',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : -1771155474887941764,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 0,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : -8634750371905518040,
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
				length : 15,
				date : 61,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 45,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 56,
				old_text : 'GgzjUqylFpoERNMn',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 22,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 22,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
);
```