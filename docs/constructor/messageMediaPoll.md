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
		id : 2160723064971561573,
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
			text : 'p3sir7m6LuywJeNU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 47,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 51,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 55,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 31,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 31,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 87,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 7,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 31,
					language : 'o8HAmFiNuB7tXWlz',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 65,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : 2904087674260649404,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 25,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 16,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 40,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 29,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 58,
					document_id : 8386054917075190767,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 76,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 14,
					date : 69,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 100,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 9,
					old_text : 'nNOi6aZz3x2IHhKR',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 78,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : '4dxMnsFT1Yv0jwyE',
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
					user_id : 142015144925009333,
				),
				date : 26,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'B2CkViZH4dPxSzT9',
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
		close_period : 6,
		close_date : 6,
		countries_iso2 : array('L3NVSu0DtsMdWfT4'),
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
				voters : 55,
				recent_voters : array(
					$client->peerUser(
						user_id : -3822248119975779798,
					),
					$client->peerChat(
						chat_id : -4386255321338195794,
					),
					$client->peerChannel(
						channel_id : 9115782221603965891,
					),
				),
			),
		),
		total_voters : 68,
		recent_voters : array(
			$client->peerUser(
				user_id : 2640017207707804955,
			),
			$client->peerChat(
				chat_id : -2737982702563677224,
			),
			$client->peerChannel(
				channel_id : 2962886805001114137,
			),
		),
		solution : '5yScm23QxFOk6bAg',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 23,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 100,
				language : 'oJ7ImxVbqAeh1EXN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : -220412031720190629,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 83,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 77,
				document_id : 781924905641144589,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 71,
				date : 75,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 20,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 39,
				old_text : 'UBduxMh6tkzo7L3w',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 46,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
	attached_media : $client->messageMediaEmpty(),
);
```