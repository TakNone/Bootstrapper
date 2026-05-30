# updateMessagePoll

**Description** : *The results of a poll have changed*

**Layer** : 225

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
		user_id : 1799362241441622068,
	),
	msg_id : 85,
	top_msg_id : 45,
	poll_id : -2017991200012677430,
	poll : $client->poll(
		id : 8340214387719026121,
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
			text : '8S1JohmP2xnEtIYD',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 33,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 19,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 24,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 99,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 53,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 84,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 7,
					language : '346zHOFaxtWisSjl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 59,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 49,
					user_id : -1558045874047411777,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 66,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 63,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 72,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 96,
					document_id : 9197828522223538537,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 41,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 50,
					date : 52,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 21,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 36,
					old_text : 'yIY9RnM2QLdCcBPh',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 9,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'GrZ8iBCmT2J970tV',
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
					user_id : -6529079205128497193,
				),
				date : 20,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'AIPRGtZwqoSjcr64',
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
		close_period : 10,
		close_date : 29,
		countries_iso2 : array('nVx0AgXMDzBoN6Ce'),
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
				voters : 16,
				recent_voters : array(
					$client->peerUser(
						user_id : 2890392702210670764,
					),
					$client->peerChat(
						chat_id : 7656465173529535380,
					),
					$client->peerChannel(
						channel_id : 5460112329450305275,
					),
				),
			),
		),
		total_voters : 0,
		recent_voters : array(
			$client->peerUser(
				user_id : 6235541870657853164,
			),
			$client->peerChat(
				chat_id : -7732651463664206712,
			),
			$client->peerChannel(
				channel_id : -8302739410671287844,
			),
		),
		solution : '9Mnj4gOGt3USJQYH',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 37,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 25,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 76,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 92,
				language : '9nKGxIm3yVCoWDct',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 21,
				user_id : -3296908489094123210,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 75,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 76,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 30,
				document_id : 6952290340872897805,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 28,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 57,
				date : 9,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 81,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 10,
				old_text : '2gKIBlTW7Chifv9s',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 47,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
);
```