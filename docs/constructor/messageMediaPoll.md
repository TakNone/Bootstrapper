# messageMediaPoll

**Description** : *Poll*

**Layer** : 227

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
		id : -814880285233241980,
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
			text : 'faBWH3PwTrC1McQN',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 5,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 25,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 27,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 66,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 74,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 7,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 77,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 54,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 24,
					language : 'cUxBds4OIR9a7vnj',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 86,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : -1747694930963437035,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 76,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 5,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 21,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 58,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 6,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 76,
					document_id : -1679501938161751743,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 30,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 51,
					date : 21,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 29,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 94,
					old_text : '9J4r8RDvz1cP7hay',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 70,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'ALdIZY3gvKUqj5kJ',
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
					user_id : 7295495602026537477,
				),
				date : 13,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'wKBH371G2AVthgoy',
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
		close_period : 22,
		close_date : 23,
		countries_iso2 : array('eLMwcCTg1Vaf4Dx6'),
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
				voters : 74,
				recent_voters : array(
					$client->peerUser(
						user_id : -2764634015616865056,
					),
					$client->peerChat(
						chat_id : 6946878502948569633,
					),
					$client->peerChannel(
						channel_id : -4789130307355166166,
					),
				),
			),
		),
		total_voters : 24,
		recent_voters : array(
			$client->peerUser(
				user_id : 1244759647081665733,
			),
			$client->peerChat(
				chat_id : 1084646998281773526,
			),
			$client->peerChannel(
				channel_id : -3561064178874216600,
			),
		),
		solution : 'PQZ8D1da7MUXE46C',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 25,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 9,
				language : 'g6Xk5KTZa1w0morS',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 52,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : -2466194863726866478,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 76,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 78,
				document_id : 3522498240817348209,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 29,
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
				date : 32,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 90,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 15,
				old_text : 'W0aM4rVulvijLtqN',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 86,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
	attached_media : $client->messageMediaEmpty(),
);
```