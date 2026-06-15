# poll

**Description** : *Poll*

**Layer** : 227

```tl
poll#966e2dbf id:long flags:# closed:flags.0?true public_voters:flags.1?true multiple_choice:flags.2?true quiz:flags.3?true open_answers:flags.6?true revoting_disabled:flags.7?true shuffle_answers:flags.8?true hide_results_until_close:flags.9?true creator:flags.10?true subscribers_only:flags.11?true question:TextWithEntities answers:Vector<PollAnswer> close_period:flags.4?int close_date:flags.5?int countries_iso2:flags.12?Vector<string> hash:long = Poll;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID of the poll |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **closed** | [`flags.0?true`](type/true) | Whether the poll is closed and doesn't accept any more answers |
| **public_voters** | [`flags.1?true`](type/true) | Whether cast votes are publicly visible to all users (non-anonymous poll) |
| **multiple_choice** | [`flags.2?true`](type/true) | Whether multiple options can be chosen as answer |
| **quiz** | [`flags.3?true`](type/true) | Whether this is a quiz (with wrong and correct answers, results shown in the return type) |
| **open_answers** | [`flags.6?true`](type/true) | NOTHING |
| **revoting_disabled** | [`flags.7?true`](type/true) | NOTHING |
| **shuffle_answers** | [`flags.8?true`](type/true) | NOTHING |
| **hide_results_until_close** | [`flags.9?true`](type/true) | NOTHING |
| **creator** | [`flags.10?true`](type/true) | NOTHING |
| **subscribers_only** | [`flags.11?true`](type/true) | NOTHING |
| <mark>question</mark> | [`TextWithEntities`](type/TextWithEntities) | The question of the poll (only Premium users can use custom emoji entities here) |
| <mark>answers</mark> | [`Vector<PollAnswer>`](type/PollAnswer) | The possible answers (2-poll_answers_max), vote using messages.sendVote |
| **close_period** | [`flags.4?int`](type/int) | Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date |
| **close_date** | [`flags.5?int`](type/int) | Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future; can't be used together with close_period |
| **countries_iso2** | [`flags.12?Vector<string>`](type/string) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Type

[Poll](type/Poll)

---

## Example

```php
$poll = $client->poll(
	id : -5930897586322579534,
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
		text : 'tP1i7qxa8REw0dTM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 80,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 53,
				language : 'U8sMNdl4XevWc5o7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : -100341750270312614,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 5,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 45,
				document_id : 2886398056263564250,
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
				length : 99,
				date : 16,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 71,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 95,
				old_text : 'gyfK3D0LusRbpEXn',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 14,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'XSBlyZJQRzKFdj1q',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 31,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 46,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 50,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 1,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 85,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 57,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 6,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 20,
						language : 'lcS64HYAJFbmjId5',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 36,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : -629279444182279937,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 80,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 22,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 12,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 35,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 32,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 18,
						document_id : -805799442276754805,
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
						length : 89,
						date : 29,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 64,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 39,
						old_text : 'D8vCYEmwztcVIJU1',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 71,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			media : $client->messageMediaEmpty(),
			added_by : $client->peerUser(
				user_id : -1145125826683085921,
			),
			date : 62,
		),
		$client->inputPollAnswer(
			text : $client->textWithEntities(
				text : '68hSAVFgPLR0UbBm',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 89,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 22,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 96,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 22,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 17,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 4,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 16,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 46,
						language : '5RxzNvuOV9PG4XMI',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 94,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 23,
						user_id : -68815716316563539,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 94,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 52,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 19,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 21,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 74,
						document_id : -8574113405001343622,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 33,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 81,
						date : 6,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 3,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 15,
						old_text : 'hQicZE5k6txAvYlm',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 25,
					),
				),
			),
			media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
		),
	),
	close_period : 29,
	close_date : 97,
	countries_iso2 : array('rWysm4GE9gf3QKlB'),
	hash : 0,
);
```