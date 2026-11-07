# inputMediaPoll

**Description** : *A poll*

**Layer** : 233

```tl
inputMediaPoll#883a4108 flags:# poll:Poll correct_answers:flags.0?Vector<int> attached_media:flags.3?InputMedia solution:flags.1?string solution_entities:flags.1?Vector<MessageEntity> solution_media:flags.2?InputMedia = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll to send |
| **correct_answers** | [`flags.0?Vector<int>`](type/int) | 0-based indices of the correct answers in the answers vector (for quiz polls) |
| **attached_media** | [`flags.3?InputMedia`](type/InputMedia) | Optional media attachment to display alongside the poll |
| **solution** | [`flags.1?string`](type/string) | Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds |
| **solution_entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Styled text message entities for the solution explanation |
| **solution_media** | [`flags.2?InputMedia`](type/InputMedia) | Optional media attachment shown alongside the quiz solution explanation |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPoll(
	poll : $client->poll(
		id : -8608675632927128633,
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
			text : 'TOxNsuLVeflgmBo5',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 22,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 45,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 29,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 82,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 83,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 83,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 17,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 23,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 45,
					language : 'OptlU7B0IVvgGQor',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 100,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 44,
					user_id : 5186778539411253335,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 70,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 97,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 30,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 29,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 59,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 89,
					document_id : -4856159876981290133,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 78,
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
					date : 46,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 58,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 72,
					old_text : 'RfPKhmIr0VcoXi4j',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 81,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 21,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'LyqKCB1OrGldZcom',
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
					user_id : -677074678985186653,
				),
				date : 35,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'rHCd73QjFbxMfENO',
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
		close_period : 27,
		close_date : 80,
		countries_iso2 : array('3c0ioCvmUhsYNSIu'),
		hash : 0,
	),
	correct_answers : array(33),
	attached_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	solution : '6nfb5UezOYox07rk',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 38,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 54,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 31,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 29,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 90,
			language : 'AICtQjcJdUTwhnlo',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 42,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 25,
			user_id : 443046706763231230,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 6,
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
			length : 97,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 7,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 72,
			document_id : -8583544382661307658,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 70,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 23,
			date : 52,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 46,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 3,
			old_text : 'ugqyvAkrGo7PstX4',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 62,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 6,
		),
	),
	solution_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```