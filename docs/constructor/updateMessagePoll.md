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
		user_id : 6052578102528042959,
	),
	msg_id : 70,
	top_msg_id : 93,
	poll_id : 6658865511757209675,
	poll : $client->poll(
		id : -3111105487082342864,
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
			text : 'Hg58lmLC1bqzZ0cS',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 90,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 67,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 33,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 93,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 77,
					language : 'OTq9vDL2f5GlMNnw',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 45,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 9,
					user_id : -4048194655805301966,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 15,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 97,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 15,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 43,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 84,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 55,
					document_id : 242259411946474974,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 24,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 39,
					date : 47,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 92,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 38,
					old_text : 'FL1julhgNwQeMHfp',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 53,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'o0uymvCkYewdjZl6',
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
					user_id : 2466012563026795684,
				),
				date : 64,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'eMQYqk0tidzwlHh8',
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
		close_period : 41,
		close_date : 99,
		countries_iso2 : array('a8rUw5JCBOZ9g1hN'),
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
				voters : 12,
				recent_voters : array(
					$client->peerUser(
						user_id : -4483309814989540502,
					),
					$client->peerChat(
						chat_id : 4998914613038781170,
					),
					$client->peerChannel(
						channel_id : 7423435873041544090,
					),
				),
			),
		),
		total_voters : 18,
		recent_voters : array(
			$client->peerUser(
				user_id : 7135923794491850342,
			),
			$client->peerChat(
				chat_id : 2960945298946231661,
			),
			$client->peerChannel(
				channel_id : -5319983591964574652,
			),
		),
		solution : 'UePsSNZ7fida6jXk',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 13,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 58,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 80,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 15,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : 'hAVSCJd3GZufqxsy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 76,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : -5588280979314055602,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 6,
				document_id : -991090218505233583,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 54,
				date : 75,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 12,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 88,
				old_text : 'Uyu7NS89KqeFh4Mm',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 84,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
);
```