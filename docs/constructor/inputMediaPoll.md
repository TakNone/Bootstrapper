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
		id : 4336778057270509980,
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
			text : 'KIUrQ9jHZgAM7sOe',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 28,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 14,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 87,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 43,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 25,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 37,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 89,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 41,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 41,
					language : 'O4JjN5TxMD9ruWoB',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 4,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 93,
					user_id : -3290617223161232010,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 69,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 50,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 67,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 79,
					document_id : 317947406434265403,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 52,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 49,
					date : 50,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 32,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 65,
					old_text : '4sn8SKkhT0zme1r5',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 16,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'IOUAhwM9qCHtncZf',
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
					user_id : -4975001233180602761,
				),
				date : 75,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'tC4NPSrqaORpxXBG',
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
		close_date : 3,
		countries_iso2 : array('EDhtu6VrGTcm0jo8'),
		hash : 0,
	),
	correct_answers : array(54),
	attached_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	solution : '7EAK4zIVcalsXjg6',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 56,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 83,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 32,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 47,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 86,
			language : 'D6cT5HyZK7tL84Uu',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 16,
			user_id : -2026959890049818240,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 50,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 20,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 56,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 10,
			document_id : 8832361318000189956,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 38,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 76,
			date : 81,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 76,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 87,
			old_text : 'NKubivdmVAZeP5SC',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 97,
		),
	),
	solution_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```