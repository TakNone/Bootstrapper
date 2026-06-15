# inputMediaPoll

**Description** : *A poll*

**Layer** : 227

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
		id : -4400839658474328163,
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
			text : '4BxDp0NgQheYwECF',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 83,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 54,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 21,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 74,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 26,
					language : 'bzvlJoVp4rYICQ5E',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 78,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 59,
					user_id : -3656628201929557788,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 83,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 58,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 37,
					document_id : 5584526635110469259,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 18,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 56,
					date : 5,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 51,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 53,
					old_text : '2lrzKEMnH4ifkogL',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 95,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'iE8npCrmKq6sUDhM',
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
					user_id : 3727906502021034082,
				),
				date : 98,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'Yvkxub2qwzE6BjeZ',
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
		close_period : 55,
		close_date : 11,
		countries_iso2 : array('hczQbwJPFvZVeAyG'),
		hash : 0,
	),
	correct_answers : array(15),
	attached_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	solution : 'dGzpvq0UhxaR5kmF',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 77,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 60,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 36,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 38,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 42,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 74,
			language : 'zrX3oVA7xiWqwfBd',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 1,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : -3263172938525301907,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 26,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 89,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 73,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 2,
			document_id : 855660482432301658,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 68,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 8,
			date : 3,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 45,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 53,
			old_text : '6gbaDPhxqZIKmNnj',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
	solution_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```