# inputMediaPoll

**Description** : *A poll*

**Layer** : 229

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
		id : -579148894331249226,
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
			text : '5Zej81hyVRiKzxFY',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 52,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 15,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 20,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 55,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 38,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 83,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 76,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 70,
					language : 'ewVXMbGnlPJ13KS4',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 35,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 8,
					user_id : -2808220515234603194,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 33,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 65,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 27,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 76,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 39,
					document_id : -1701514567288536755,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 59,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 92,
					date : 50,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 62,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 95,
					old_text : 'bdfWShPFaK5N6t3Z',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 27,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'zyCM6NZ7mcfevs1x',
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
					user_id : 2393737088744387177,
				),
				date : 51,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : '2Z6zsuNb4BXd5wtn',
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
		close_period : 64,
		close_date : 96,
		countries_iso2 : array('CIMua6ZxbROvD4wG'),
		hash : 0,
	),
	correct_answers : array(24),
	attached_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	solution : '1x3cwbfumhMJrzg9',
	solution_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 75,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 3,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 48,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : 'eyOFALXgUnzd8IbZ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 21,
			user_id : 6217441004257284864,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 6,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 37,
			document_id : -2679668492709663924,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 3,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 37,
			date : 66,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 53,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 35,
			old_text : 'eNAjq9I2FEdbyRVt',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 81,
		),
	),
	solution_media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
);
```