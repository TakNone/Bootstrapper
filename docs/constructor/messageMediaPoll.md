# messageMediaPoll

**Description** : *Poll*

**Layer** : 225

```tl
messageMediaPoll#773f4e66 flags:# poll:Poll results:PollResults attached_media:flags.0?MessageMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll |
| <mark>results</mark> | [`PollResults`](type/PollResults) | The results of the poll |
| **attached_media** | [`flags.0?MessageMedia`](type/MessageMedia) | NOTHING |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPoll(
	poll : $client->poll(
		id : -2035465643536959769,
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
			text : 'BfzwIPArimDt5QX9',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 10,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 29,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 34,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 53,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 54,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 29,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 96,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : 'cUrsTY8PJM2tl6NH',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 74,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 63,
					user_id : 1012411673077662619,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 77,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 94,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 92,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 11,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 80,
					document_id : 2730419420690530419,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 26,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 84,
					date : 57,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 1,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 57,
					old_text : 'wOWog3y8SYmzDjJI',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 93,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'f8RZBljt2aYUi6n4',
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
					user_id : -578125708364218685,
				),
				date : 50,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'hxanodm8tUTJfkpu',
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
		close_period : 13,
		close_date : 94,
		countries_iso2 : array('DehTREApiaHuFlv6'),
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
				voters : 78,
				recent_voters : array(
					$client->peerUser(
						user_id : 5983101231546192404,
					),
					$client->peerChat(
						chat_id : -1513388959637184392,
					),
					$client->peerChannel(
						channel_id : 7997032887137513282,
					),
				),
			),
		),
		total_voters : 98,
		recent_voters : array(
			$client->peerUser(
				user_id : -789831505904657513,
			),
			$client->peerChat(
				chat_id : -3256203742994695972,
			),
			$client->peerChannel(
				channel_id : 6797728798701012090,
			),
		),
		solution : 'aqfrSvY6bMPsVlZJ',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 35,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 34,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 47,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 56,
				language : 'mj1ivyR2tA6xbG0h',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : 7090878296228138402,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 1,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 91,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 63,
				document_id : 3910243267250988518,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 34,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 93,
				date : 34,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 5,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 67,
				old_text : 'Z8bRmSpLAVesraiX',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 6,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
	attached_media : $client->messageMediaEmpty(),
);
```