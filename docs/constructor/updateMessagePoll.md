# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 229

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
		user_id : 3775068188929434783,
	),
	msg_id : 93,
	top_msg_id : 39,
	poll_id : 4053364203990915073,
	poll : $client->poll(
		id : 7916595159343184990,
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
			text : 'qsCBxy4H7Ip8icXW',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 25,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 93,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 72,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 51,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 32,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 91,
					language : 'S5cTxWF3HkbV1wd4',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 62,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 55,
					user_id : -10560270796443978,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 85,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 43,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 39,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : -131803512035866651,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 100,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 74,
					date : 15,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 64,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 35,
					old_text : 'QSz3ysmK4i1euraO',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 26,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'pqfog86nFrCBbU7P',
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
					user_id : -3360674559340790250,
				),
				date : 21,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'SHfP21ocM8aW7gzL',
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
		close_period : 68,
		close_date : 15,
		countries_iso2 : array('goGzMdm8T14bEpqV'),
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
				voters : 19,
				recent_voters : array(
					$client->peerUser(
						user_id : -5145882767532581257,
					),
					$client->peerChat(
						chat_id : 6691082350465325952,
					),
					$client->peerChannel(
						channel_id : 8421519370549796469,
					),
				),
			),
		),
		total_voters : 67,
		recent_voters : array(
			$client->peerUser(
				user_id : 3734249725840452753,
			),
			$client->peerChat(
				chat_id : 6602401868481918963,
			),
			$client->peerChannel(
				channel_id : -4576909080992763386,
			),
		),
		solution : 'LDx50qj3KnpCZmSV',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 81,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 26,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 87,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 23,
				language : 'n5lbDpOdqfXuaHWw',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : -9219821647622432023,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 97,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 34,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 18,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 34,
				document_id : 4875723977142705145,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 2,
				date : 39,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 91,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 37,
				old_text : 'BMN5DqjLcV6WGFSP',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 43,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
);
```