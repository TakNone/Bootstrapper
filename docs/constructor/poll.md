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
	id : -7406646989084545004,
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
		text : 'RWMZXATsg9BNoQyv',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 42,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 5,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 4,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 34,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 72,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 10,
				language : 'TaCS8cxdvsJVLEeH',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : 3998596166738978385,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 71,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : 852353973099273226,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 57,
				date : 71,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 100,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 91,
				old_text : '7uXIfEkBgdh5LaTG',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 21,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'ZaIF9mJNwLPEX1Sb',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 94,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 99,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 91,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 42,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 50,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 93,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 73,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 88,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 32,
						language : '3lZ4orMLusyNnAQ9',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 89,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 11,
						user_id : 4560788608889181576,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 32,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 99,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 61,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 57,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 18,
						document_id : 1812501522972219483,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 27,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 79,
						date : 72,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 83,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 9,
						old_text : '0lWQmpLRVAiGk7tw',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 16,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			media : $client->messageMediaEmpty(),
			added_by : $client->peerUser(
				user_id : -4075740759974456157,
			),
			date : 3,
		),
		$client->inputPollAnswer(
			text : $client->textWithEntities(
				text : 'cuByQDfKPTaVox7U',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 32,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 29,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 44,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 81,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 55,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 32,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 81,
						language : '15iG6MutCHr0POyl',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 86,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 66,
						user_id : 8042105387665529905,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 93,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 24,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 58,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 66,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 1,
						document_id : -3504773485717338650,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 100,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 48,
						date : 80,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 29,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 38,
						old_text : 'zEFruCyX2PZLtRaW',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 82,
					),
				),
			),
			media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
		),
	),
	close_period : 90,
	close_date : 95,
	countries_iso2 : array('UEmJaYltAFrQ54ux'),
	hash : 0,
);
```