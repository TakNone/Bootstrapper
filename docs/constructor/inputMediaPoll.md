# inputMediaPoll

**Description** : *A poll*

**Layer** : 225

```tl
inputMediaPoll#883a4108 flags:# poll:Poll correct_answers:flags.0?Vector<int> attached_media:flags.3?InputMedia solution:flags.1?string solution_entities:flags.1?Vector<MessageEntity> solution_media:flags.2?InputMedia = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll to send |
| **correct_answers** | [`flags.0?Vector<int>`](type/int) | Correct answer IDs (for quiz polls) |
| **attached_media** | [`flags.3?InputMedia`](type/InputMedia) | NOTHING |
| **solution** | [`flags.1?string`](type/string) | Explanation of quiz solution |
| **solution_entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **solution_media** | [`flags.2?InputMedia`](type/InputMedia) | NOTHING |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPoll(
	poll : $client->poll(
		id : 3583389742559122975,
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
			text : '30ldGMXx7HbrLAEC',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 16,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 80,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 77,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 24,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 42,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 88,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 78,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 42,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 93,
					language : 'GgK9NXlnMiqaBHe1',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 68,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 13,
					user_id : -8267126955652782307,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 43,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 38,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 63,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 27,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 72,
					document_id : 2130360021146988592,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 5,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 69,
					date : 90,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 57,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 91,
					old_text : 'YWP0z7dQUeHyBtgm',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 8,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'NZ6lyFow1m25n9p4',
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
					user_id : 8626437357355465767,
				),
				date : 82,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'FDmSN2lGY9QcdCKv',
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
		close_date : 81,
		countries_iso2 : array('XvtrxSbPIqJeNgBR'),
		hash : 0,
	),
	correct_answers : array(17),
	attached_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	solution : 'cjVw98XkTeFUZtbD',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 30,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 83,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 79,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 81,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 40,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 6,
			language : 'B02SFLqGgfOcotlR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 93,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 92,
			user_id : 3835490223098527981,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 19,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 48,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 32,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 53,
			document_id : -5111733338976278370,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 84,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 59,
			date : 34,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 95,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 40,
			old_text : '1YTsPzEOkCy9Wgtc',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 89,
		),
	),
	solution_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```