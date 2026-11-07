# messageMediaPoll

**Description** : *Poll*

**Layer** : 229

```tl
messageMediaPoll#773f4e66 flags:# poll:Poll results:PollResults attached_media:flags.0?MessageMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll |
| <mark>results</mark> | [`PollResults`](type/PollResults) | The results of the poll |
| **attached_media** | [`flags.0?MessageMedia`](type/MessageMedia) | Optional media attachment displayed alongside the poll |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPoll(
	poll : $client->poll(
		id : -450783614993166054,
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
			text : '9pxyKHJ6bC1ow0Um',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 63,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 22,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 84,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 88,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 73,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 25,
					language : 'Gq6e38bsTNIrPa70',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 37,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : 8869144481869829852,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 92,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 3,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 39,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 97,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 93,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 57,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 88,
					document_id : -8484486394821716526,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 17,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 86,
					date : 60,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 42,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 69,
					old_text : 'k4hGZsaEDxjNfgb7',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 66,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : '6AMKPWIbhOJQ0z38',
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
					user_id : -7203223597734067250,
				),
				date : 51,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : '71CiFbA5jHq2ucIK',
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
		close_period : 81,
		close_date : 47,
		countries_iso2 : array('iTRcgdFwEoOCSbHl'),
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
				voters : 94,
				recent_voters : array(
					$client->peerUser(
						user_id : 3746491569863622472,
					),
					$client->peerChat(
						chat_id : -7097911068004299123,
					),
					$client->peerChannel(
						channel_id : 4273732045830266137,
					),
				),
			),
		),
		total_voters : 11,
		recent_voters : array(
			$client->peerUser(
				user_id : -36600822168960063,
			),
			$client->peerChat(
				chat_id : -1688610067008599716,
			),
			$client->peerChannel(
				channel_id : 5535351591188624565,
			),
		),
		solution : 'WdwIAEM6QYfnSkcj',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 79,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 51,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 88,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 73,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 4,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 93,
				language : 'PvBwV6tAUQ13zMfF',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 39,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : 5073681045310058816,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 85,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 45,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 83,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 98,
				document_id : -6625199226830134201,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 40,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 3,
				date : 35,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 29,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 47,
				old_text : 'yEKi2o5jmufbHQNa',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 81,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
	attached_media : $client->messageMediaEmpty(),
);
```